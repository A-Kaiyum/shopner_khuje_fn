@extends('frontend.layouts.master')
@section('title','About')
@section('home_content')
    <section class="parallax-container" data-parallax-img="{{asset('storage/images/about_us.png')}}">
        <div class="parallax-content breadcrumbs-custom context-dark">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9">
                        <h2 class="breadcrumbs-custom-title">About Us</h2>
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="{{route('frontSide')}}">Home</a></li>
                            <li class="active">About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-lg bg-gray-1 bg-gray-1-decor">
        <div class="container">
            <div class="row row-50">
                <div class="col-lg-6 pr-xl-5"><img src="{{asset('storage/images/about-us.png')}}" alt="" width="518" height="430"/>
                </div>
                <div class="col-lg-6">
                    <h3>About Shopner Khoje</h3>
                    <div class="text-with-divider">
                        <div class="divider"></div>
                        <h4 class="text-opacity-70">We are committed to helping wounded kids find their place.</h4>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesqu</p>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-lg bg-default">
        <div class="container">
            <h3 class="text-center">Our Mission</h3>
            <div class="row row-30 row-md-40 row-xl-60">
                <div class="col-md-6 col-lg-4">
                    <div class="box-icon-modern">
                        <div class="box-icon-inner decorate-triangle"><span class="icon-xl linearicons-earth icon-primary"></span></div>
                        <div class="box-icon-caption">
                            <h4><a href="#">Achieving Change</a></h4>
                            <p>Grandis, albus decors etiam desiderium de noster, clemens vita.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="box-icon-modern">
                        <div class="box-icon-inner decorate-circle"><span class="icon-xl linearicons-umbrella2 icon-primary"></span></div>
                        <div class="box-icon-caption">
                            <h4><a href="#">Care &amp; Protection</a></h4>
                            <p>Cum advena peregrinationes, omnes brabeutaes manifestum germanus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="box-icon-modern">
                        <div class="box-icon-inner decorate-rectangle"><span class="icon-xl linearicons-baby2 icon-primary"></span></div>
                        <div class="box-icon-caption">
                            <h4><a href="#">Saving Children</a></h4>
                            <p>Cum zirbus favere, omnes habenaes talem barbatus, brevis fraticinidaes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="box-icon-modern">
                        <div class="box-icon-inner decorate-rectangle"><span class="icon-xl linearicons-sun icon-primary"></span></div>
                        <div class="box-icon-caption">
                            <h4><a href="#">Peace On The Planet</a></h4>
                            <p>Cum solitudo favere, omnes exsules consumere superbus, pius fermiumes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="box-icon-modern">
                        <div class="box-icon-inner decorate-triangle"><span class="icon-xl linearicons-leaf icon-primary icon-xl-min"></span></div>
                        <div class="box-icon-caption">
                            <h4><a href="#">Increasing Awareness</a></h4>
                            <p>Cum lixa accelerare, omnes xiphiases tractare festus, regius demolitionees.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="box-icon-modern">
                        <div class="box-icon-inner decorate-circle"><span class="icon-xl linearicons-share2 icon-primary"></span></div>
                        <div class="box-icon-caption">
                            <h4><a href="#">Sharing Happiness</a></h4>
                            <p>Cum aonides peregrinationes, omnes nutrixes experientia lotus, alter lixaes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-lg bg-gray-1">
        <div class="container">
            <h3 class="text-center">Our Team</h3>
            <div class="row no-gutters">
                <div class="col-md-6 col-lg-4">
                    <div class="team-classic">
                        <div class="team-classic-figure"><img src="{{asset('storage')}}/images/shakil.jpg" alt="" width="390" height="252"/>
                            <ul class="team-classic-soc-list">
                                <li><a class="icon icon-md fa-facebook" href="#"></a></li>
                                <li><a class="icon icon-md fa-instagram" href="#"></a></li>
                                <li><a class="icon icon-md fa-twitter" href="#"></a></li>
                            </ul>
                        </div>
                        <div class="team-classic-caption">
                            <h4><a class="team-name" href="#">Ahamed Shakil</a></h4>
                            <p>Executive director</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-classic">
                        <div class="team-classic-figure"><img src="{{asset('storage')}}/images/shohag.png" alt="" width="390" height="252"/>
                            <ul class="team-classic-soc-list">
                                <li><a class="icon icon-md fa-facebook" href="#"></a></li>
                                <li><a class="icon icon-md fa-instagram" href="#"></a></li>
                                <li><a class="icon icon-md fa-twitter" href="#"></a></li>
                            </ul>
                        </div>
                        <div class="team-classic-caption">
                            <h4><a class="team-name" href="#">MD Shohag Ahmed</a></h4>
                            <p>Adoption program Director</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-classic">
                        <div class="team-classic-figure"><img src="{{asset('storage')}}/images/shotez.png" alt="" width="390" height="252"/>
                            <ul class="team-classic-soc-list">
                                <li><a class="icon icon-md fa-facebook" href="#"></a></li>
                                <li><a class="icon icon-md fa-instagram" href="#"></a></li>
                                <li><a class="icon icon-md fa-twitter" href="#"></a></li>
                            </ul>
                        </div>
                        <div class="team-classic-caption">
                            <h4><a class="team-name" href="#">Mirja Galib Shotez</a></h4>
                            <p>Educational program Director</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-classic">
                        <div class="team-classic-figure"><img src="{{asset('storage')}}/images/shotezbro.png" alt="" width="390" height="252"/>
                            <ul class="team-classic-soc-list">
                                <li><a class="icon icon-md fa-facebook" href="#"></a></li>
                                <li><a class="icon icon-md fa-instagram" href="#"></a></li>
                                <li><a class="icon icon-md fa-twitter" href="#"></a></li>
                            </ul>
                        </div>
                        <div class="team-classic-caption">
                            <h4><a class="team-name" href="#">Pervej Ahmed</a></h4>
                            <p>IT Director</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-classic">
                        <div class="team-classic-figure"><img src="{{asset('storage')}}/images/masrafee.png" alt="" width="390" height="252"/>
                            <ul class="team-classic-soc-list">
                                <li><a class="icon icon-md fa-facebook" href="#"></a></li>
                                <li><a class="icon icon-md fa-instagram" href="#"></a></li>
                                <li><a class="icon icon-md fa-twitter" href="#"></a></li>
                            </ul>
                        </div>
                        <div class="team-classic-caption">
                            <h4><a class="team-name" href="#">MP. Mashrafe Mortaza</a></h4>
                            <p>Community support Manager</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-classic">
                        <div class="team-classic-figure"><img src="{{asset('storage')}}/images/uthso.png" alt="" width="390" height="252"/>
                            <ul class="team-classic-soc-list">
                                <li><a class="icon icon-md fa-facebook" href="#"></a></li>
                                <li><a class="icon icon-md fa-instagram" href="#"></a></li>
                                <li><a class="icon icon-md fa-twitter" href="#"></a></li>
                            </ul>
                        </div>
                        <div class="team-classic-caption">
                            <h4><a class="team-name" href="#">Tanzim Ahmed Utsho</a></h4>
                            <p>Assistant property Manager</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
