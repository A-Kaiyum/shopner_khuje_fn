@extends('frontend.layouts.master')
@section('title','Category')
@section('home_content')
    @include('frontend.layouts._headBlog')
    <div class="py-5 bg-light" style="margin-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <span>Category</span>
                    <h3>{{$category->name}}</h3>
                    <p>{!! $category->description !!}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    @foreach($posts as $post)
                    <div class="entry2">
                        <a href="{{route('frontSide.post',['slug'=>$post->slug])}}"><img src="{{asset($post->image)}}" alt="Image" class="img-fluid rounded"></a>
                        <div class="excerpt">
                            <span class="post-category text-white bg-secondary mb-3">{{$post->category->name}}</span>

                            <h2><a href="{{route('frontSide.post',['slug'=>$post->slug])}}">{{$post->title}}</a></h2>
                            <div class="post-meta align-items-center text-left clearfix">
                                <figure class="author-figure mb-0 mr-3 float-left"><img src="{{asset($post->user->image)}}" alt="Image" class="img-fluid"></figure>
                                <span class="d-inline-block mt-1">By <a href="#">{{$post->user->name}}</a></span>
                                <span>&nbsp;-&nbsp; {{$post->created_at->format('M d, Y')}}</span>
                            </div>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta beatae quia porro id est.</p>
                            <p><a href="#">Read More</a></p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="row text-center pt-5 border-top">
                <div class="col-md-12">
                    <div class="custom-pagination">
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('frontend.layouts._scriptsBlog')
@endsection
