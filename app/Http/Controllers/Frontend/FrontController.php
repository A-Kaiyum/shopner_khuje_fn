<?php

namespace App\Http\Controllers\Frontend;

use App\Category;
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

        $posts = Post::with('category','user')->orderBy('created_at','DESC')->take(5)->get();
        $firstPost = $posts->splice(0,2);
        $middlePost = $posts->splice(0,1);
        $lastPost = $posts->splice(0);

        $footerPosts = Post::with('category','user')->inRandomOrder()->limit(4)->get();
        $firstFooterPost = $footerPosts->splice(0,1);
        $middleFooterPost = $footerPosts->splice(0,2);
        $lastFooterPost = $footerPosts->splice(0);

        $recentPosts = Post::with('category','user')->orderBy('created_at','DESC')->paginate(6);
        return view('frontend.pages.blog',compact(['posts','recentPosts','firstPost','middlePost','lastPost','firstFooterPost','middleFooterPost','lastFooterPost']));
    }
    public function singlePost($slug){

    $post = Post::with('category','user')->where('slug',$slug)->first();
    $popularPosts = Post::with('category','user')->inRandomOrder()->limit(3)->get();
    $categories = Category::all();
        if($post){
            return view('frontend.pages.singlePost',compact(['post','categories','popularPosts']));
        }
        else
        {
            return redirect()->back();
        }
    }
    public function category($slug){
        $category = Category::where('slug',$slug)->first();
        if($category){
            $posts = Post::with('user')->where('category_id',$category->id)->paginate(9);
            return view('frontend.pages.category',compact(['category','posts']));
        }
        else{
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
