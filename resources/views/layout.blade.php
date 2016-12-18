<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ionic Theatre</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../../../../css/style.css">
    {{-- <link href="{{ elixir('output/final.css') }}" media="all" rel="stylesheet"> --}}

</head>
<body>

<!-- .preloader -->
<div class="preloader"></div>
<!-- /.preloader -->


<!-- #header -->
<header id="header">
    <div class="container">
        <div class="row">

            <!-- .logo -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 logo">
                <!--<a href="#"><img src="" alt="Logo Image"></a>-->
            </div>
            <!-- /.logo -->

            <!-- .mainmenu-container -->
            <nav class="col-lg-9 col-md-9 col-sm-6 col-xs-6 mainmenu-container">
                <button class="nav-toggler">{!! trans('l.navigation') !!}} <i class="fa fa-bars"></i></button>
                <ul class="mainmenu clearfix">
                    <li class="nav-closer current"><i class="fa fa-close"></i></li>
                    <li class="scrollToLink"><a href="{{ route('home') }}">{!! trans('l.home') !!}</a></li>
                    <li class="scrollToLink"><a href="{{ route('about') }}">{!! trans('l.about') !!}</a></li>
                    <li class="scrollToLink"><a href="{{ route('contact') }}">{!! trans('l.contact') !!}</a></li>
                    <li class="scrollToLink"><a href="/settings/lang/en"><img src="../../../img/flags/en.png"></a></li>
                    <li class="scrollToLink"><a href="/settings/lang/hr"><img src="../../../img/flags/hr.png"></a></li>
                </ul>
            </nav>
            <!-- /.mainmenu-container -->
        </div>
    </div>
</header>
<!-- /#header -->


@yield('content')


        <!-- #bottom-bar -->
<section id="bottom-bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p>&copy; 2016 <a href="{{ route('home') }}">IONIC THEATRE</a> {!! trans('l.allrightsreserved') !!}</p>
            </div>
        </div>
    </div>
</section>
<!-- /#bottom-bar -->


<script type="text/javascript" src="{{ URL::asset('../js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('../js/jquery.themepunch.tools.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('../js/jquery.themepunch.revolution.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('../js/countdown.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('../js/jquery.mixitup.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('../js/wow.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('../js/validate.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('../js/custom.js') }}"></script>


</body>
</html>