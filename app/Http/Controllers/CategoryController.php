<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('created_at','DESC')->paginate(20);
        return view('backend.pages.category',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.createCategory');
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
            'name' =>'required|unique:categories,name'
        ]);
        $category = Category::create([
            'name'=>$request->name,
            'slug'=>Str::slug($request->name,'-'),
            'description'=>$request->description,
        ]);
        Session::flash('success', 'Category Created Successfully!');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {

       return view('backend.pages.editCategory',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {

        if(Category::where('name',$request->name)->exists()){

            $category->description=$request->description;
            $category->save();
            Session::flash('success', 'Description updated Successfully!');
            return redirect()->route('category.index');
        }
        else{
            //validate
            $this->validate($request,[
                'name' =>"required|unique:categories,name,$category->name",
            ]);
            $category->name= $request->name;
            $category->slug=Str::slug($request->name,'-');
            $category->description=$request->description;
            $category->save();

            Session::flash('success', 'Category updated Successfully!');
            return redirect()->route('category.index');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if ($category){
            $category->delete();
            Session::flash('success', 'Category deleted Successfully!');
            return redirect()->route('category.index');
        }
    }
}
