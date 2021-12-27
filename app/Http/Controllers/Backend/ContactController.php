<?php

namespace App\Http\Controllers\Backend;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function index(){
        $contacts=Contact::orderBy('id','DESC')->get();
        return view('backend.pages.contact',compact('contacts'));
    }
    public function show(Contact $contact){
       //$contact = Contact::where('id',$contact_id)->get();
        return view('backend.pages.showContact',compact('contact'));
    }
    public function destroy(Contact $contact){
        if($contact){

            $contact->delete();
            Session::flash('success','Message Deleted Successfully');
            return redirect()->back();
        }
    }
}
