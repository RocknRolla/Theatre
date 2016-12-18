@extends('layout')

@section('content')

<section id="page-title" class="gradient-overlay">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>{!! trans('l.about') !!}</h1>
            </div>
        </div>
    </div>
</section>


<!-- #about-us -->
<section id="about-us">
    <div class="container">
        <div class="row">


            <!-- .banner -->
            <div class="col-lg-12 col-md-12 col-sm-12  banner wow">
                <img src="img/background/1.jpg" alt="">
            </div>
            <!-- /.banner -->


            <!-- .about-text -->
            <div class="col-lg-12  col-md-12 col-sm-12 about-text">
                <h2>{!! trans('l.aboutus') !!}</h2>
                <p>{!! trans('l.aboutustext') !!}}</p>
            </div>
            <!-- /.about-text -->
        </div>
    </div>
</section>
<!-- /#about-us -->


@endsection