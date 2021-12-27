<?php

namespace App\Http\Controllers\Backend;

use App\Police;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PoliceController extends Controller
{
    public function index(){
        $polices=Police::orderBy('id','DESC')->get();
        return view('backend.pages.policeMessage',compact('polices'));
    }
    public function show(Police $police){
        //$police = Police::where('id',$police_id)->get();
        return view('backend.pages.showPoliceMessage',compact('police'));
    }
    public function destroy(Police $police){
        if($police){

            $police->delete();
            Session::flash('success','Message Deleted Successfully');
            return redirect()->back();
        }
    }
}
