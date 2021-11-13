<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::orderBy('created_at','DESC')->paginate(20);
        return view('backend.pages.tag',compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.createTag');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate
        $this->validate($request,[
            'name' =>'required|unique:tags,name'
        ]);
        Tag::create([
            'name'=>$request->name,
            'slug'=>Str::slug($request->name,'-'),
            'description'=>$request->description,
        ]);
        Session::flash('success', 'Tag Created Successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        return view('backend.pages.editTag',compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        if(Tag::where('name',$request->name)->exists()){

            $tag->description=$request->description;
            $tag->save();
            Session::flash('success', 'Description updated Successfully!');
            return redirect()->route('tag.index');
        }
        else{
            //validate
            $this->validate($request,[
                'name' =>"required|unique:categories,name,$tag->name",
            ]);
            $tag->name= $request->name;
            $tag->slug=Str::slug($request->name,'-');
            $tag->description=$request->description;
            $tag->save();

            Session::flash('success', 'tag updated Successfully!');
            return redirect()->route('tag.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        if ($tag){
            $tag->delete();
            Session::flash('success', 'Tag deleted Successfully!');
            return redirect()->route('tag.index');
        }
    }
}
