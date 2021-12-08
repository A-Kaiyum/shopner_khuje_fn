<?php

namespace App\Http\Controllers\Backend;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function index(){
        $messages=Contact::orderBy('id','DESC')->get();
        return view('backend.pages.message',compact('messages'));
    }
    public function show(Contact $message){
       //$message = Contact::where('id',$message_id)->get();
        return view('backend.pages.showMessage',compact('message'));
    }
    public function destroy(Contact $message){
        if($message){

            $message->delete();
            Session::flash('success','Post Deleted Successfully');
            return redirect()->back();
        }
    }
}
