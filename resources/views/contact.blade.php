@extends('layout')

@section('content')


<section id="page-title" class="gradient-overlay">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>{!! trans('l.contact') !!}</h1>
            </div>
        </div>
    </div>
</section>


<section id="contact" class="">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h1>{!! trans('l.contactus') !!}</h1>
                    <p>{!! trans('l.contactustext') !!}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 form-section">
                <form id="form1" class="contact-form" action="{{ route('sendEmail') }}" method="post">
                    <ul class="clearfix">
                        <li class="half"><input type="text" name="name" placeholder="{!! trans('l.yourname') !!}"></li>
                        <li class="half"><input type="text" name="email" placeholder="{!! trans('l.youremail') !!}"></li>
                        <li class="full"><input type="text" name="subject" placeholder="{!! trans('l.yoursubject') !!}"></li>
                        <li class="full"><textarea name="message" placeholder="{!! trans('l.yourmessagehere') !!}"></textarea></li>
                        <li class="full"><button type="submit" form="form1" class="hvr-bounce-to-right">{!! trans('l.contactus') !!}</button></li>
                        {!! csrf_field() !!}
                    </ul>
                </form>
            </div>
        </div>
    </div>
</section>


@endsection