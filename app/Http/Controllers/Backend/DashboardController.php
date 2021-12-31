<?php

namespace App\Http\Controllers\Backend;

use App\Doctor;
use App\DonateBlood;
use App\Http\Controllers\Controller;
use App\Police;
use App\Post;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $totalPost = Post::orderBy('id','DESC')->count();
        $totalUser = User::orderBy('id','DESC')->count();
        $totalDonner = DonateBlood::orderBy('id','DESC')->count();
        $donnerProvided = DonateBlood::orderBy('id','DESC')->count();
        $doctorProvided = Doctor::orderBy('id','DESC')->count();
        $policeProvided = Police::orderBy('id','DESC')->count();
        return view('backend.pages.dashboard',compact(['totalPost','totalUser','totalDonner','donnerProvided','doctorProvided','policeProvided']));
    }
}
