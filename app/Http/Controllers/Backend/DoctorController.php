<?php

namespace App\Http\Controllers\Backend;

use App\Doctor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DoctorController extends Controller
{
    public function index(){
        $doctors=Doctor::orderBy('id','DESC')->get();
        return view('backend.pages.doctorMessage',compact('doctors'));
    }
    public function show(Doctor $doctor){
        //$doctor = Doctor::where('id',$doctor_id)->get();
        return view('backend.pages.showDoctorMessage',compact('doctor'));
    }
    public function destroy(Doctor $doctor){
        if($doctor){

            $doctor->delete();
            Session::flash('success','doctor Deleted Successfully');
            return redirect()->back();
        }
    }
}
