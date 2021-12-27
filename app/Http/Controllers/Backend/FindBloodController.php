<?php

namespace App\Http\Controllers\Backend;

use App\FindBlood;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FindBloodController extends Controller
{
    public function index(){
        $findBloods=FindBlood::orderBy('id','DESC')->get();
        return view('backend.pages.bloodMessage',compact('findBloods'));
    }
    public function show(FindBlood $findBlood){
        //$findBlood = findBlood::where('id',$findBlood_id)->get();
        return view('backend.pages.showBloodMessage',compact('findBlood'));
    }
    public function destroy(FindBlood $findBlood){
        if($findBlood){

            $findBlood->delete();
            Session::flash('success','findBlood Deleted Successfully');
            return redirect()->back();
        }
    }
}
