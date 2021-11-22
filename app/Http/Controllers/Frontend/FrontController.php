<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class FrontController extends Controller
{
public function home(){

       return view('frontend.pages.index');
}
    public function about(){

        return view('frontend.pages.about');
    }
    public function blog(){

        $posts = Post::orderBy('created_at','DESC')->take(5)->get();
        $recentPosts = Post::with('category','user')->orderBy('created_at','DESC')->paginate(6);
        return view('frontend.pages.blog',compact(['posts','recentPosts']));
    }
    public function singlePost($slug){

    $post = Post::with('category','user')->where('slug',$slug)->first();
        if($post){
            return view('frontend.pages.singlePost',compact('post'));
        }
        else
        {
            return redirect()->back();
        }
    }
    public function contact(){

        return view('frontend.pages.contact');
    }
    public function help(){

        return view('frontend.pages.help');
    }
}
