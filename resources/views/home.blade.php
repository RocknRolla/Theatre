@extends('layout')

@section('content')

<!-- #banner -->
<section id="banner">
    <div class="banner-container">
        <div class="banner">
            <ul>

                <li
                        data-transition="fade"
                        data-slotamount="7"
                        class="slider-2 text-center gradient-overlay"
                        data-thumb="<?php echo $events[0]->picture; ?>"
                        data-title="{!! trans('l.dontmissitout') !!}">

                    <img
                            src="<?php echo $events[0]->picture; ?>"
                            data-bgposition="center center"
                            data-kenburns="on"
                            data-duration="20000"
                            data-ease="Linear.easeNone"
                            data-bgfit="100"
                            data-bgfitend="130"
                            data-bgpositionend="center center"
                            alt="slider image">

                    <div
                            class="caption sfb tp-resizeme text-center"
                            data-x="0"
                            data-y="300"
                            data-speed="700"
                            data-start="1000"
                            data-easing="easeOutBack">

                        <h1><?php echo $events[0]->title; ?></h1>
                    </div>

                    <div
                            class="caption sfb tp-resizeme"
                            data-x="0"
                            data-y="370"
                            data-speed="700"
                            data-start="1500"
                            data-easing="easeOutBack">

                        <p><?php
                            echo substr($events[0]->description, 0, 100);
                            echo '<br>';
                            echo substr($events[0]->description, 51, 100);
                            ?>
                        </p>

                    </div>
                    <ul
                            class="caption sfb tp-resizeme banner-buttons"
                            data-x="0"
                            data-y="450"
                            data-speed="700"
                            data-start="2500"
                            data-easing="easeOutBack">

                        <li class="scrollToLink"><a href="/event/<?php echo $events[0]->id; ?>" class="bordered hvr-bounce-to-right">{!! trans('l.findoutmore') !!}</a></li>

                    </ul>
                </li>





                <li
                        data-transition="fade"
                        data-slotamount="7"
                        class="slider-2 text-center gradient-overlay"
                        data-thumb="<?php echo $events[1]->picture; ?>"
                        data-title="{!! trans('l.dontmissitout') !!}">

                    <img
                            src="<?php echo $events[1]->picture; ?>"
                            data-bgposition="center center"
                            data-kenburns="on"
                            data-duration="20000"
                            data-ease="Linear.easeNone"
                            data-bgfit="100"
                            data-bgfitend="130"
                            data-bgpositionend="center center"
                            alt="slider image">

                    <div
                            class="caption sfb tp-resizeme text-center"
                            data-x="0"
                            data-y="300"
                            data-speed="700"
                            data-start="1000"
                            data-easing="easeOutBack">

                        <h1><?php echo $events[1]->title; ?></h1>
                    </div>

                    <div
                            class="caption sfb tp-resizeme"
                            data-x="0"
                            data-y="370"
                            data-speed="700"
                            data-start="1500"
                            data-easing="easeOutBack">

                        <p><p><?php
                            echo substr($events[1]->description, 0, 100);
                            echo '<br>';
                            echo substr($events[1]->description, 51, 100);
                            ?>
                        </p></p>
                    </div>
                    <ul
                            class="caption sfb tp-resizeme banner-buttons"
                            data-x="0"
                            data-y="450"
                            data-speed="700"
                            data-start="2500"
                            data-easing="easeOutBack">

                        <li class="scrollToLink"><a href="/event/<?php echo $events[1]->id; ?>" class="bordered hvr-bounce-to-right">{!! trans('l.findoutmore') !!}</a></li>

                    </ul>
                </li>















                <li
                        data-transition="fade"
                        data-slotamount="7"
                        class="slider-3 text-center gradient-overlay"
                        data-thumb="<?php echo $events[2]->picture; ?>"
                        data-title="{!! trans('l.dontmissitout') !!}">

                    <img
                            src="<?php echo $events[2]->picture; ?>"
                            data-bgposition="center center"
                            data-kenburns="on"
                            data-duration="20000"
                            data-ease="Linear.easeNone"
                            data-bgfit="100"
                            data-bgfitend="130"
                            data-bgpositionend="center center"
                            alt="slider image">

                    <div
                            class="caption sfb tp-resizeme text-center"
                            data-x="0"
                            data-y="220"
                            data-speed="700"
                            data-start="1000"
                            data-easing="easeOutBack">

                        <div class="date">
                            <?php
                                $da = date_create($events[2]->date);
                                echo $da->format('M d, Y') . " " . $events[2]->time;
                            ?>
                        </div>
                    </div>

                    <div
                            class="caption sfb tp-resizeme"
                            data-x="0"
                            data-y="290"
                            data-speed="700"
                            data-start="1500"
                            data-easing="easeOutBack">

                        <h1><?php echo $events[2]->title; ?></h1>
                    </div>
                    <div
                            class="caption sfb tp-resizeme input-box"
                            data-x="0"
                            data-y="370"
                            data-speed="700"
                            data-start="2200"
                            data-easing="easeOutBack">
                    </div>

                    <ul
                            class="caption sfb tp-resizeme banner-buttons"
                            data-x="0"
                            data-y="450"
                            data-speed="700"
                            data-start="2500"
                            data-easing="easeOutBack">

                        <li class="scrollToLink"><a href="/event/<?php echo $events[2]->id; ?>" class="bordered hvr-bounce-to-right">{!! trans('l.findoutmore') !!}</a></li>

                    </ul>
                </li>

            </ul>
        </div>
    </div>
</section> <!-- /#banner -->


<!-- #upcoming-event -->
<section id="upcoming-event">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-7">
                <div class="section-title">
                    <h1>{!! trans('l.upcomingevents') !!}</h1>
                    <p>{!! trans('l.upcomingeventsdesc') !!}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="tab-title-wrap">
                    <ul class="clearfix">
                        <li class="filter active" data-filter="all"><span>{!! trans('l.allevents') !!}</span></li>
                        <?php
                        foreach ($dates as $d){
                        $date = date_create($d);
                        ?>
                        <li class="filter" data-filter=".<?php echo $date->format('dmY'); ?>">
                            <span><?php echo $date->format('M d'); ?></span>
                        </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>

                <div class="tab-content-wrap row">

                    <?php
                        foreach ($events as $event){
                            $date = date_create($event->date);
                    ?>
                        <div class="col-lg-3 col-md-4 col-sm-6 mix <?php echo $date->format('dmY'); ?> hvr-float-shadow wow fadeIn">
                            <div class="img-holder"><img src="<?php echo $event->picture; ?>" alt=""></div>
                            <div class="content-wrap">
                                <img src="img/author.png" alt="" class="author-img">
                                <div class="meta">
                                    <ul>
                                        <li><span><i class="fa fa-clock-o"></i><?php echo $date->format('d.m.Y') . " " . $event->time; ?></span></li>
                                        <li><span><i class="fa fa-map-marker"></i><?php echo $event->location; ?></span></li>
                                    </ul>
                                </div>
                                <h3><?php echo $event->title; ?></h3>
                                <p><?php echo substr($event->description, 0, 50); ?>[...]</p>
                                <a class="read-more" href="/event/<?php echo $event->id; ?>">{!! trans('l.readmore') !!}<i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    <?php
                        }
                    ?>


                </div>
            </div>
        </div>
    </div>
</section>
<!-- /#upcoming-event -->

@endsection