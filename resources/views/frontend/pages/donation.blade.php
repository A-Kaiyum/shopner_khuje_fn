@extends('frontend.layouts.master')
@section('title','Donation')
@section('home_content')
    <section class="parallax-container" data-parallax-img="{{asset('storage/images/contact-us.jpg')}}">
        <div class="parallax-content breadcrumbs-custom context-dark">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9">
                        <h2 class="breadcrumbs-custom-title">Donation</h2>
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="{{route('frontSide')}}">Home</a></li>
                            <li class="active">Donation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-lg text-center bg-default">
        <div class="container">
            <div class="row row-50">
                <div class="col-md-6 col-lg-4">
                    <div class="box-icon-classic">
                        <div class="box-icon-inner decorate-triangle decorate-color-secondary"><span class="icon-xl linearicons-phone-incoming icon-gradient-1"></span></div>
                        <div class="box-icon-caption">
                            <h4><a href="tel:#">+8801731690917</a></h4>
                            <p>You can call us anytime</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="box-icon-classic">
                        <div class="box-icon-inner decorate-circle decorate-color-secondary-2"><span class="icon-xl linearicons-map2 icon-gradient-2"></span></div>
                        <div class="box-icon-caption">
                            <h4><a href="#">Mustari complex 2nd floor, Narail, Bangladesh</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="box-icon-classic">
                        <div class="box-icon-inner decorate-rectangle decorate-color-primary"><span class="icon-xl linearicons-paper-plane icon-gradient-3"></span></div>
                        <div class="box-icon-caption">
                            <h4><a href="mailto:#">shopnerkhoje908@gmail.com</a></h4>
                            <p>Feel free to email us your questions</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-lg bg-gray-1 bg-gray-1-decor">
        <div class="container">
            <div class="row row-50">
                <div class="col-lg-6 pr-xl-5"><img src="{{asset('storage/images/donation.png')}}" alt="" width="518" height="430"/>
                </div>
                <div class="col-lg-6">
                    <h3>Donation</h3>
                    <div class="text-with-divider">
                        <div class="divider"></div>
                        <h4 class="text-opacity-70">We are committed to helping wounded kids find their place.</h4>
                    </div>
                    <h3  style="color:green">Bkash : 01703227417 </h3>
                    <h3 style="color:blue">DBBL Rocket : 01703227417</h3>
                    <h3 style="color:red">Rupali Bank:3111010013448</h3>
                 </div>
            </div>
        </div>
    </section>

@endsection


