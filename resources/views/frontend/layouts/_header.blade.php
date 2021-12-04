<header class="section page-header">
    <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
             data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static"
             data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static"
             data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static"
             data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="30px" data-xl-stick-up-offset="30px"
             data-xxl-stick-up-offset="30px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
                <div class="rd-navbar-main">
                    <!-- RD Navbar Panel-->
                    <div class="rd-navbar-panel">
                        <!-- RD Navbar Toggle-->
                        <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span>
                        </button>
                        <!-- RD Navbar Brand-->
                        <div class="rd-navbar-brand"><a href="{{route('frontSide')}}"><img class="brand-logo-light"
                                                                                           src="{{asset('storage/images/logo-1.png')}}"
                                                                                           alt="" width="50" height="50"
                                                                                           style="margin-left: 200px"/></a>
                        </div>
                    </div>
                    <div class="rd-navbar-main-element">
                        <div class="rd-navbar-nav-wrap">
                            <!-- RD Navbar Nav-->
                            <ul class="rd-navbar-nav">
                                <li class="rd-nav-item active"><a class="rd-nav-link"
                                                                  href="{{route('frontSide')}}">Home</a>
                                </li>
                                <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('frontSide.about')}}">About
                                        Us</a>
                                </li>
                                <li class="rd-nav-item"><a class="rd-nav-link"
                                                           href="{{route('frontSide.blog')}}">Blog</a>
                                </li>
                                <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('frontSide.contact')}}">Contacts</a>
                                </li>
                                </li>
                                <li class="rd-nav-item rd-navbar--has-dropdown rd-navbar-submenu"><a class="rd-nav-link"
                                                                                                     href="#">Emergency
                                        Help</a>
                                    <ul class="rd-menu rd-navbar-dropdown">
                                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Police</a>
                                        </li>
                                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Doctor</a>
                                        </li>
                                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Ambulance</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="rd-nav-item rd-navbar--has-dropdown rd-navbar-submenu"><a class="rd-nav-link"
                                                                                                     href="#">Blood
                                        Bank</a>

                                    <ul class="rd-menu rd-navbar-dropdown">
                                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Find Blood</a>
                                        </li>
                                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Become Blood
                                                Donner</a></li>
                                    </ul>


                                </li>

                            </ul>
                            <a class="button button-primary button-sm" href="#">Donate</a>
                        </div>
                    </div>
                    <a class="button button-primary button-sm" href="#">Donate</a>
                </div>
            </div>
        </nav>
    </div>
</header>
