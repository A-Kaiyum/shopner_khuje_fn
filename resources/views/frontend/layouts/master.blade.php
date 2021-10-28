<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    @include('frontend.layouts._head')
</head>
<body>
<div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="{{asset('storage/images/ie8-panel/warning_bar_0000_us.jpg')}}" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
<div class="preloader">
    <div class="preloader-body">
        <div class="cssload-container">
            <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
    </div>
</div>
@yield('home_content')
<div class="snackbars" id="form-output-global"></div>
@include('frontend.layouts._scripts')
<!-- coded by ragnar-->
</body>
</html>
