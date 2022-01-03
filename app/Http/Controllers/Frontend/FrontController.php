<?php

namespace App\Http\Controllers\Frontend;

use App\Category;
use App\Contact;
use App\Doctor;
use App\DonateBlood;
use App\FindBlood;
use App\Http\Controllers\Controller;
use App\Police;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
    $tags = Tag::inRandomOrder()->limit(4)->get();
    //related post
        $relatedPosts = Post::orderBy('category_id','DESC')->inRandomOrder()->limit(4)->get();
        $firstRelatedPost = $relatedPosts->splice(0,1);
        $middleRelatedPost = $relatedPosts->splice(0,2);
        $lastRelatedPost = $relatedPosts->splice(0);
        if($post){
            return view('frontend.pages.singlePost',compact(['post','categories','popularPosts','relatedPosts','firstRelatedPost','middleRelatedPost','lastRelatedPost','tags']));
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
    public function sendMessage(Request $request){
    $this->validate($request,[
        'name'=>'required|string|max:255',
        'email'=>'required|email',
        'phone'=>'required|max:11',
        'message'=>'required',
        ]);

    Contact::create(
        $request->all()
    );
    Session::flash('message','Message Sent Successfully!');
    return redirect()->back();

    }

    public function police(){

        return view('frontend.pages.police');
    }
    public function sendToPolice(Request $request){
        $this->validate($request,[
            'name'=>'required|string|max:255',
            'email'=>'required|email',
            'phone'=>'required|max:11',
            'message'=>'required',
        ]);

        Police::create(
            $request->all()
        );
        Session::flash('message','Message Sent Successfully!');
        return redirect()->back();
    }

    public function doctor(){
        return view('frontend.pages.doctor');
    }

    public function sendToDoctor(Request $request){
        $this->validate($request,[
            'name'=>'required|string|max:255',
            'email'=>'required|email',
            'phone'=>'required|max:11',
            'message'=>'required',
        ]);

        Doctor::create(
            $request->all()
        );
        Session::flash('message','Message Sent Successfully!');
        return redirect()->back();
    }

    public function findBlood(){
        return view('frontend.pages.findBlood');
    }

    public function ambulance(){
        return view('frontend.pages.ambulance');
    }
    public function donation(){
        return view('frontend.pages.donation');
    }

    public function sendForBlood(Request $request){
        $this->validate($request,[
            'name'=>'required|string|max:255',
            'email'=>'required|email',
            'phone'=>'required|max:11',
            'address'=>'required|string|max:255',
            'message'=>'required',
        ]);

        FindBlood::create(
            $request->all()
        );
        Session::flash('message','Message Sent Successfully!');
        return redirect()->back();
    }
    public function donateBlood(){
        return view('frontend.pages.donateBlood');
    }
    public function sendToDonate(Request $request){
        $this->validate($request,[
            'name'=>'required|string|max:255',
            'email'=>'required|email',
            'phone'=>'required|max:11',
            'address'=>'required|string|max:255',
            'last_donate'=>'required|max:11',
            'message'=>'required',
        ]);

        DonateBlood::create(
            $request->all()
        );
        Session::flash('message','Message Sent Successfully!');
        return redirect()->back();
    }

}
