<?php

namespace App\Http\Controllers\Backend;

use App\DonateBlood;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FindDonerController extends Controller
{
    public function index(){
        $findDoners=DonateBlood::orderBy('id','DESC')->get();
        return view('backend.pages.bloodDoner',compact('findDoners'));
    }
    public function show(DonateBlood $findDoner){
        //$findDoner = findDoner::where('id',$findDoner_id)->get();
        return view('backend.pages.showBloodDoner',compact('findDoner'));
    }
    public function destroy(DonateBlood $findDoner){
        if($findDoner){

            $findDoner->delete();
            Session::flash('success','Successfully Deleted');
            return redirect()->back();
        }
    }
}
