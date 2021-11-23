@extends('frontend.layouts.master')
@section('title','Blog')
@section('home_content')
    @include('frontend.layouts._headBlog')

    <div class="site-wrap">
        <div class="site-section"
             style="background-image:url({{asset('storage/images/home-1.jpg')}}); background-size: cover; height:600px;">
            <div class="container">
                <h1 style="margin-top:200px; color: white;"> Blog </h1>
            </div>
        </div>
        <div class="site-section bg-light">
            <div class="container">
                <div class="row align-items-stretch retro-layout-2">
                    <div class="col-md-4">
                        @foreach($firstPost as $post)
                        <a href="{{route('frontSide.post',['slug'=>$post->slug])}}" class="h-entry mb-30 v-height gradient"
                           style="background-image: url('{{asset($post->image)}}');">

                            <div class="text">
                                <h2>{{$post->title}}</h2>
                                <span class="date">{{$post->created_at->format('M d, Y')}}</span>
                            </div>
                        </a>
                        @endforeach
                    </div>
                    <div class="col-md-4">
                        @foreach($middlePost as $post)
                        <a href="{{route('frontSide.post',['slug'=>$post->slug])}}" class="h-entry img-5 h-100 gradient"
                           style="background-image: url('{{asset($post->image)}}');">

                            <div class="text">
                                <div class="post-categories mb-3">
                                    <span class="post-category bg-danger">Travel</span>
                                    <span class="post-category bg-primary">Food</span>
                                </div>
                                <h2>{{$post->title}}</h2>
                                <span class="date">{{$post->created_at->format('M d, Y')}}</span>
                            </div>
                        </a>
                        @endforeach
                    </div>
                    <div class="col-md-4">
                        @foreach($lastPost as $post)
                        <a href="{{route('frontSide.post',['slug'=>$post->slug])}}" class="h-entry mb-30 v-height gradient"
                           style="background-image: url('{{asset($post->image)}}');">

                            <div class="text">
                                <h2>{{$post->title}}</h2>
                                <span class="date">{{$post->created_at->format('M d, Y')}}</span>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12">
                        <h2>Recent Posts</h2>
                    </div>
                </div>
                <div class="row">
                    @foreach($recentPosts as $post)
                        <div class="col-lg-4 mb-4">
                            <div class="entry2">
                                <a href="{{route('frontSide.post',['slug'=>$post->slug])}}"><img src="{{asset($post->image)}}" alt="Image"
                                                           class="img-fluid rounded"></a>
                                <div class="excerpt">
                                    <span
                                        class="post-category text-white bg-secondary mb-3">{{$post->category->name}}</span>

                                    <h2><a href="{{route('frontSide.post',['slug'=>$post->slug])}}">{{$post->title}}</a></h2>
                                    <div class="post-meta align-items-center text-left clearfix">
                                        <figure class="author-figure mb-0 mr-3 float-left"><img
                                                src="{{asset('storage/images/person_1.jpg')}}" alt="Image"
                                                class="img-fluid"></figure>
                                        <span class="d-inline-block mt-1">By <a
                                                href="#">{{$post->user->name}}</a></span>
                                        <span>&nbsp;-&nbsp; {{date('d-m-Y', strtotime($post->created_at))}}</span>
                                    </div>
                                    <p>{!! \Illuminate\Support\Str::limit($post->description,200) !!}</p>
                                    <p><a href="{{route('frontSide.post',['slug'=>$post->slug])}}">Read More</a></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {{ $recentPosts->links() }}
        </div>


        <div class="site-section bg-light">
            <div class="container">

                <div class="row align-items-stretch retro-layout">

                    <div class="col-md-5 order-md-2">
                        @foreach($lastFooterPost as $post)
                        <a href="{{route('frontSide.post',['slug'=>$post->slug])}}" class="hentry img-1 h-100 gradient"
                           style="background-image: url('{{asset($post->image)}}');">
                            <span class="post-category text-white bg-danger">{{$post->category->name}}</span>
                            <div class="text">
                                <h2>{{$post->title}}</h2>
                                <span>{{$post->created_at->format('M d, Y')}}</span>
                            </div>
                        </a>
                        @endforeach
                    </div>

                    <div class="col-md-7">
                        @foreach($firstFooterPost as $post)
                        <a href="{{route('frontSide.post',['slug'=>$post->slug])}}" class="hentry img-2 v-height mb30 gradient"
                           style="background-image: url('{{asset($post->image)}}');">
                            <span class="post-category text-white bg-success">{{$post->category->name}}</span>
                            <div class="text text-sm">
                                <h2>{{$post->title}}</h2>
                                <span>{{$post->created_at->format('M d, Y')}}</span>
                            </div>
                        </a>
                        @endforeach
                        <div class="two-col d-block d-md-flex justify-content-between">
                            @foreach($middleFooterPost as $post)
                            <a href="{{route('frontSide.post',['slug'=>$post->slug])}}" class="hentry v-height img-2 gradient"
                               style="background-image: url('{{asset($post->image)}}');">
                                <span class="post-category text-white bg-primary">{{$post->category->name}}</span>
                                <div class="text text-sm">
                                    <h2>{{$post->title}}</h2>
                                    <span>{{$post->created_at->format('M d, Y')}}</span>
                                </div>
                            </a>
                            @endforeach
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    @include('frontend.layouts._scriptsBlog')
@endsection

