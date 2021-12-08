@extends('frontend.layouts.master')
@section('title','Ambulance')
@section('home_content')
    <section class="parallax-container" data-parallax-img="{{asset('storage/images/contact-us.jpg')}}">
        <div class="parallax-content breadcrumbs-custom context-dark">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9">
                        <h2 class="breadcrumbs-custom-title">Ambulance</h2>
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="{{route('frontSide')}}">Home</a></li>
                            <li class="active">Ambulance</li>
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

    <section class="section section-lg bg-gray-1 text-center">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-9 col-lg-7">
                    <h3>Find Ambulance </h3>
                    <!-- RD Mailform-->
                    <form class="rd-form" data-form-output="form-output-global" data-form-type="contact" method="post" action="{{route('frontSide.ambulance')}}" novalidate="novalidate">
                        @include('frontend.layouts.formSession')
                        @csrf
                        <div class="form-wrap">
                            <input class="form-input form-control-has-validation" id="contact-name" type="text" name="name" data-constraints="@Required"><span class="form-validation"></span>
                            <label class="form-label rd-input-label" for="contact-name">Your Name</label>
                        </div>
                        <div class="form-wrap">
                            <input class="form-input form-control-has-validation" id="contact-email" type="email" name="email" data-constraints="@Email @Required"><span class="form-validation"></span>
                            <label class="form-label rd-input-label" for="contact-email">E-mail</label>
                        </div>
                        <div class="form-wrap">
                            <input class="form-input form-control-has-validation" id="contact-phone" type="text" name="phone" data-constraints="@Numeric"><span class="form-validation"></span>
                            <label class="form-label rd-input-label" for="contact-phone">Phone</label>
                        </div>
                        <div class="form-wrap">
                            <label class="form-label rd-input-label" for="contact-message"> Message</label>
                            <textarea class="form-input form-control-has-validation form-control-last-child" id="contact-message" name="message" data-constraints="@Required"></textarea><span class="form-validation"></span>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12 col-sm-7 col-lg-5">
                                <button class="button button-block button-lg button-primary" type="submit">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection


