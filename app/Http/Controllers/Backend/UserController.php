<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index(){
        $users = User::latest()->paginate(20);
        return view('backend.pages.user',compact('users'));
    }
    public function create(){
        return view('backend.pages.createUser');
    }
    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required|string|max:255',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:8',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'image' => $request->image,
            'description' => $request->description,
        ]);

        if($request->hasFile('image')){
            $image = $request->image;
            $image_new_name = time().'.'.$image->getClientOriginalExtension();
            $image->move('storage/images',$image_new_name);
            $user->image = '/storage/images/'.$image_new_name;
        }
        $user->save();

        Session::flash('success','User Created Successfully');
        return redirect()->back();
    }
    public function edit(User $user){
        return view('backend.pages.editUser',compact('user'));
    }
    public function update(Request $request, User $user){
        $this->validate($request,[
            'name'=>'required|string|max:255',
            'email'=>"required|email|unique:users,email,$user->id",
            'password'=>'sometimes|min:8',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->passowrd);
        $user->description = $request->description;

        $user->save();

        Session::flash('success','User Updated Successfully');
        return redirect()->back();
    }
    public function destroy(User $user){
        if($user){
            $user->delete();
            Session::flash('success','User Deleted Successfully');
        }
        return redirect()->back();
    }
}
