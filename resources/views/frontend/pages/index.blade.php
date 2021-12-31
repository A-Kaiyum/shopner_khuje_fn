@extends('frontend.layouts.master')

@section('title','Welcome')

@section('home_content')

    <section class="section section-lg section-main-bunner section-main-bunner-filter">
        @include('frontend.layouts._banner')
    </section>
    <section class="section section-xl">
        @include('frontend.layouts._animateImg')
    </section>
    <section class="section section-lg bg-gray-1">
        @include('frontend.layouts._latestCauses')
    </section>
    <!-- <section class="parallax-container bg-gray-600" data-parallax-img="images/parallax-img-2.jpg">
        @include('frontend.layouts._subcribe')
    </section> -->

@endsection
