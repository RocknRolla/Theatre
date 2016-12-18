@extends('layout')

@section('content')

<section id="page-title" class="gradient-overlay">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1><?php echo $title ?></h1>
            </div>
        </div>
    </div>
</section>


<section id="event-text">
    <div class="container">
        <div class="row text-row">
            <div class="col-lg-6 col-md-6">
                <img class="wow slideInLeft" src="<?php echo $picture ?>" alt="" style="visibility: visible; animation-name: slideInLeft;">
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="meta">
                    <span style="padding-right: 10px"><i class="fa fa-clock-o"></i><?php $d = date_create($date); echo $d->format('d.m.Y') . ",  " . $time; ?></span>
                    <span><i class="fa fa-map-marker"></i> <?php echo $location ?></span>
                </div>
                <br>
                <p><?php echo $description ?></p>
                <br>
                <span class="price"><span class="currency">€</span><?php echo $price ?></span>
                <br>
                <ul>
                    <?php
                        foreach ($actors as $actor){
                            echo "<li>" . $actor . "</li>";
                        }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</section>

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