<!-- PAGE START -->
@extends('layouts.master')


<!-- ADD CSS HERE -->
@push('css')
    <style>
        .product-view {
            width: 100%;
            position: relative;
            padding-top: 7%;
            padding-bottom: 5%;
        }
        
        .product-img {
            display: block;
            margin: 0px auto;
        }
        
        .product-polygon {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            background-color: #f7f7f7;
            clip-path: polygon(67% 0, 100% 0%, 100% 100%, 33% 100%);
            z-index: -1;
        }
        
        .product-polygon1 {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            background-color: #f7f7f7;
            clip-path: polygon(67% 0, 100% 0%, 100% 100%, 33% 100%);
            z-index: -1;
        }
        
        .product-category {
            color: #e3e1e1;
            position: absolute;
            top: 50%;
            right: 0%;
            transform: translateY(-50%) rotate(90deg);
            z-index: 5;
            letter-spacing: 2px;
            font-size: 2vw;
        }
        
        .product_name {
            color: #2d97d5;
            font-size: 2.8vw;
            font-weight: 700;
            text-transform: uppercase;
        }
        
        .product-txt {
            color: #636262;
            font-size: 1.4vw;
        }
        
        .product-details-container {
            padding-top: 50%;
            padding-bottom: 2%;
        }
        
        @media (min-width: 1200px) {
            .product-details-container {
                padding-left: 20%;
            }
        }
        
        @media (min-width: 992px) {
            .product-details-container {
                padding-left: 20%;
            }
        }
        
        @media (min-width: 768px) {
            .product-details-container {
                padding-left: 20%;
            }
        }
        
        @media (max-width:767.98px) {
            .product_name {
                color: #2d97d5;
                font-size: 7.8vw;
                font-weight: 700;
                text-transform: uppercase;
            }
            .product-txt {
                color: #636262;
                font-size: 3.4vw;
            }
            .product-details-container {
                padding-top: 0%;
                padding-bottom: 2%;
            }
        }
        
        .product-tech-icon {
            display: block;
            width: 30%;
        }
        
        .tech-name {
            text-align: center;
            margin-top: 15px;
            color: #2a2a2a;
            font-size: 18px;
            font-weight: 600;
        }
        
        .product-tech-heading {
            color: #2a2a2a;
            font-size: 32px;
            font-weight: 700;
        }
        
        .product-tech-details {
            color: #696969;
            font-size: 18px;
        }
        
        .tech-card {
            min-height: 200px;
            margin-bottom: 5%;
        }
        
        .slider3 {}
        
        .solution-slide-outer {
            background-color: rgb(255, 255, 255);
            width: 95%;
            box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, .5);
            margin: 0px auto;
            padding: 5%;
            padding-top: 18%;
            height: 300px;
            opacity: 0.7;
        }
        
        .solution-slide-outer>li {
            list-style-type: none;
            color: #646464;
            font-size: 12px;
        }
        
        .slider1 .slick-prev {
            left: auto !important;
            right: 60px;
            text-align: center;
        }
        
        .slick-next {
            right: -40px;
            text-align: center;
            top: 50%;
        }
        
        .slider1 .slick-arrow {
            position: absolute;
            bottom: -15%;
            top: auto;
            width: 40px;
            height: 40px;
            line-height: 40px;
            margin-top: -25px;
            border: none;
            background: transparent;
            color: rgb(48, 47, 47);
            background-color: transparent;
            box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, .6);
            font-family: monospace;
            font-size: 30px;
            z-index: 500;
            outline: none;
            border-radius: 50%;
        }
        
        .slick-slide {
            padding: 15px;
        }
        
        .slick-slideshow__slide::after {
            z-index: 0 !important;
        }
        
        .slick-slideshow__slide2::after {
            z-index: -1;
        }
        
        .slick-slideshow__slide2:focus {
            outline: none !important;
        }
        
        .slider-con {
            background-image: url("{{ asset('assets/img/Product_Details_slider.png')}}");
            background-size: 100% 100%;
            background-position: center;
            padding-top: 5%;
            padding-bottom: 5%;
        }
        
        h3.product-slider-heading::after {
            content: " ";
            width: 45px;
            height: 2px;
            background-color: #2d97d5;
            position: absolute;
            top: -14px;
            left: 0;
        }
        
        .product-slider-heading {
            color: #2c2c2c;
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
            position: relative;
        }
        
        .product-slider-txt {
            color: #686868;
            font-size: 16px;
        }
        
        .product-details-slider-left {
            padding-top: 10%;
            padding-bottom: 1%;
        }
        
        .bg-quizyard {
            background-image: url("{{ asset('assets/img/Product_quizyard-bg5.png')}}");
            background-size: 90% 100%;
            background-repeat: no-repeat;
            background-position: right;
        }
        
        .quizyard-card-txt {
            color: #696969;
            font-size: 14px;
            text-align: center;
        }
        
        .benefit-quizyard {
            background-image: url("{{ asset('assets/img/Product_quizyard-bg1.png')}}");
            background-size: 100% 100%;
            background-repeat: no-repeat;
            background-position: center;
            padding-top: 5%;
            overflow: hidden;
            /* margin-top: 6%; */
        }
        
        .benefit-heading {
            text-align: center;
            color: #fff;
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 5%;
        }
        
        .left-heading {
            color: #fff;
            font-size: 16px;
            font-weight: 700;
        }
        
        .left-pera {
            font-size: 13px;
            font-weight: 400;
            color: #ebeaea;
        }
        
        .beneftit-content {
            clear: both;
            margin-bottom: 10%;
        }
        
        .beneftit-content::after {
            content: " ";
            display: table;
            clear: both;
        }
        
        .left-side-icon {
            float: left;
            width: 30%;
        }
        
        .right-side-text {
            float: left;
            width: 70%;
            padding-top: 2%;
        }
        
        .quizyard-img {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            bottom: 0;
        }
        
        .middle-image {
            position: relative;
        }
        
        .middle-image::after {
            content: " ";
            display: table;
            clear: both;
        }
        
        @media (max-width:767.98px) {
            .quizyard-img {
                position: static;
                top: 0;
                left: 50%;
                transform: translateX(0%);
                bottom: 0;
                margin-left: auto;
                display: block;
                margin-right: auto;
            }
            .middle-image {
                display: none;
            }
        }
        
        .points-block {
            padding-top: 5%;
            padding-bottom: 5%;
        }
        
        .key-point-card {}
        
        .point-card-content {
            padding: 10%;
            border: 2px dashed #147fb4;
            min-height: 250px;
            margin-bottom: 10%;
            border-radius: 12px;
        }
        
        .number {
            color: #147fb4;
            font-size: 26px;
            font-weight: 700;
            position: relative;
            display: inline-block;
            padding-bottom: 10px;
        }
        
        .number::after {
            content: " ";
            background-color: #2d97d5;
            width: 100%;
            height: 2px;
            position: absolute;
            bottom: 0;
            left: 0;
            z-index: 1000;
        }
        
        .point-card-heading {
            color: #000;
            font-size: 20px;
            font-weight: 700;
        }
        
        .point-card-txt {
            color: #686868;
            font-size: 15px;
        }
        
        .screen-quizyard {
            background-image: url("{{ asset('assets/img/Product_quizyard2.png')}}");
            background-size: 100% 100%;
            background-repeat: no-repeat;
            background-position: center;
            padding-top: 5%;
            overflow: hidden;
        }
        
        .slider5 .new2 img.bottom-slider-img {
            height: 400px !important;
        }
        
        .item.new2.slick-active.slick-current.slick-slide {
            transition: all .3s ease;
            padding: 0px;
            margin-left: 30px;
            margin-right: 30px;
        }
        
        .item.new2.slick-active.slick-center.slick-current.slick-slide {
            transform: scale(1.2);
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, .5);
        }
        
        .slick-track {
            padding-top: 7%;
            padding-bottom: 7%;
        }
        
        .wrap {
            position: relative;
            z-index: 100;
            width: 100%;
            height: 100%;
            padding: 20px 4%;
            overflow: hidden;
            text-align: center;
        }
        
        .slick-prev {
            left: -40px;
            text-align: center;
            margin-left: 0px;
            margin-top: -10px;
            top: 50%;
        }
        
        @media (max-width:1220px) {
            .slick-next {
                right: -20px;
                text-align: center;
                top: 50%;
            }
            .slick-prev {
                left: -20px;
                text-align: center;
                margin-left: 0px;
                margin-top: -10px;
                top: 50%;
            }
        }
        .benefit-quizyard {
            background-image: url("{{ asset('assets/img/trivia.png')}}");
            background-size: 100% 100%;
            background-repeat: no-repeat;
            background-position: center;
            padding-top: 5%;
            padding-bottom: 5%;
            overflow: hidden;
            /* margin-top: 6%; */
        }
        
        .benefit-heading {
            text-align: center;
            color: #fff;
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 1%;
        }
        .modify {
            background-color: #ffffff;
            margin-top: 3px;
        }
        
        .view-more {
            border: 1px solid #fff;
            color: #4dc0e7;
            font-size: 16px;
            padding: 8px 30px;
            display: inline-block;
            margin-bottom: 15px;
            border-radius: 50px;
            transition: all .3s;
        }
        
        .view-more.modyfy:hover {
            background-color: #4dc0e7;
            color: #fff;
        }
    </style>
@endpush


@section('content')
    <!-- PAGE CONTANT START -->
    <!--header image and app info-->
    <div class="home-block-3" style="padding-top: 0px;padding-bottom: 0px;">
        <div class="row mglr">
            <div class="col-sm-5">
                <div class="product-details-container">
                    <h3 class="product_name">
                        Trivia App
                    </h3>
                    <p class="product-txt">
                        Trivia app (Android & iOS) with web based admin panel.
                    </p>
                    <a href="http://bit.ly/QuizYardiOS" target="_blank" class="view-more modify"><i class="fa fa-apple"></i> IOS</a>

                    <a href="http://bit.ly/quizyard" target="_blank" class="view-more modify"><i class="fa fa-android"></i> Android</a>
                </div>
            </div>

            <div class="col-sm-7 bg-quizyard" style="padding: 0px;">
                <div class="product-view">
                    <img src="{{ asset('assets/img/Product_quizyard.png') }}" alt="" class="product-img">

                    <!-- <p class="product-category">
                        <i class="fa fa-android" style="font-size:24px"></i><span></span>
                        <i class="fa fa-apple" style="font-size:24px"></i><span></span> Mobile Application
                    </p> -->

                    <!-- <div class="product-polygon">
                        <img src="{{ asset('assets/img/Product_quizyard-bg.png') }}" alt="" class="">
                    </div> -->

                </div>
            </div>
        </div>
        <hr style="margin-top: 0px;">
    </div>
    <!--header image and app info ends-->


    <!--Our Vision-->
    <div class="container">
        
        <div class="row mglr" style="padding-top: 5%;padding-bottom: 5%;">
            <div class="col-sm-offset-2 col-sm-8" style="text-align: center">
                <h3 class="product-tech-heading">
                    App's Vision
                </h3>

            </div>
        </div>

        <div class="row mglr">
            <div class="col-sm-4 col-md-4 tech-card">
                <center>
                    <img src="{{ asset('assets/img/Product_Details_icon1.png') }}" alt="" class="product-tech-icon">
                    <p class="tech-name">
                        Our Goal
                    </p>
                </center>
                <p class="quizyard-card-txt">
                    Create an awesome Play-Predict Reward app that serves Bangladeshi users interest and advertiser’s interest at the same time
                </p>
            </div>

            <div class="col-sm-4 col-md-4 tech-card">
                <center>
                    <img src="{{ asset('assets/img/Product_Details_icon2.png') }}" alt="" class="product-tech-icon">
                    <p class="tech-name">
                        Our Vision
                    </p>
                </center>
                <p class="quizyard-card-txt">
                    To become a full featured entertainment app, end users love to use and can always come back to. Fantasy league is also on the horizon.
                </p>

            </div>

            <div class="col-sm-4 col-md-4 tech-card">
                <center>
                    <img src="{{ asset('assets/img/Product_Details_icon3.png') }}" alt="" class="product-tech-icon">
                    <p class="tech-name">
                        Our Mission
                    </p>
                    <p class="quizyard-card-txt">
                        Gain user trust, Quick acquisition of mobile app user.Give best possible smoothness to user.
                    </p>
                </center>


            </div>
        </div>

    </div>
    <!--Our vision Ends-->

    <div class="container-fluid benefit-quizyard">

        <div class="container">
            <h3 class="benefit-heading">Benefits</h3>
            <div class="row mglr">
                <div class="col-sm-4" style="text-align: right !important">
                    <div class="beneftit-content">
                        <div class="right-side-text">
                            <h4 class="left-heading">User Retention</h4>
                            <p class="left-pera">
                                Because of the kind this app is, user retention rate will be very high
                            </p>
                        </div>
                        <div class="left-side-icon">
                            <img src="{{ asset('assets/img/quizyard-icon-1.png') }}" alt="Web icon" class="service-icons" style="width: 100%;">
                        </div>
                    </div>
                    <div class="beneftit-content">
                        <div class="right-side-text">
                            <h4 class="left-heading">High User base</h4>
                            <p class="left-pera">
                                Easier to reach user with this app and keep them in app
                            </p>
                        </div>
                        <div class="left-side-icon">
                            <img src="{{ asset('assets/img/quizyard-icon-1.png') }}" alt="Web icon" class="service-icons" style="width: 100%;">
                        </div>
                    </div>

                    <div class="beneftit-content">
                        <div class="right-side-text">
                            <h4 class="left-heading">Upsell</h4>
                            <p class="left-pera">
                                It’s related to sports, any sports brand or media related to sports can leverage the upsale possibilities
                            </p>
                        </div>
                        <div class="left-side-icon">
                            <img src="{{ asset('assets/img/quizyard-icon-1.png') }}" alt="Web icon" class="service-icons" style="width: 100%;">
                        </div>

                    </div>

                </div>




                <div class="col-sm-4 middle-image">
                    <img src="{{ asset('assets/img/Product_quizyard.png') }}" alt="" class="quizyard-img">
                </div>




                <div class="col-sm-4">
                    <div class="beneftit-content">
                        <div class="left-side-icon">
                            <img src="{{ asset('assets/img/quizyard-icon-1.png') }}" alt="Web icon" class="service-icons" style="width: 100%;">
                        </div>

                        <div class="right-side-text">
                            <h4 class="left-heading">Low Investment</h4>
                            <p class="left-pera">
                                An overall low investment can give a very high return on investment.
                            </p>
                        </div>
                    </div>
                    <div class="beneftit-content">
                        <div class="left-side-icon">
                            <img src="{{ asset('assets/img/quizyard-icon-1.png') }}" alt="Web icon" class="service-icons" style="width: 100%;">
                        </div>

                        <div class="right-side-text">
                            <h4 class="left-heading">Highly Technical</h4>
                            <p class="left-pera">
                                Team Team creating this app is highly technical. So investor can relax.
                            </p>
                        </div>
                    </div>

                    <div class="beneftit-content">
                        <div class="left-side-icon">
                            <img src="{{ asset('assets/img/quizyard-icon-1.png') }}" alt="Web icon" class="service-icons" style="width: 100%;">
                        </div>

                        <div class="right-side-text">
                            <h4 class="left-heading">Solid Plan</h4>
                            <p class="left-pera">
                                A solid plan for marketing. If executed correctly, this can bring a huge success.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container points-block">
        <div class="col-sm-offset-2 col-sm-8" style="text-align: center;margin-bottom: 4%;">
            <h3 class="product-tech-heading">
                Key Points
            </h3>
            <!-- <p class="product-tech-details">
                We worked on lots of models & objects/data for training. We will now present you our current achievements and ongoings.
            </p> -->
        </div>
        <div class="row mglr">
            <div class="col-sm-4 key-point-card">
                <div class="point-card-content">
                    <h3 class="number">01</h3>
                    <p class="point-card-heading">
                        Onboarding
                    </p>
                    <p class="point-card-txt">
                        Users onboard with a simple signup process.
                    </p>
                </div>
            </div>

            <div class="col-sm-4 key-point-card">
                <div class="point-card-content">
                    <h3 class="number">02</h3>
                    <p class="point-card-heading">
                        Play Quiz
                    </p>
                    <p class="point-card-txt">
                        Play quiz daily and earn points. Points can be redeemed for gifts provided by sponsors.
                    </p>
                </div>
            </div>

            <div class="col-sm-4 key-point-card">
                <div class="point-card-content">
                    <h3 class="number">03</h3>
                    <p class="point-card-heading">
                        Predict
                    </p>
                    <p class="point-card-txt">

                        Like quiz, users can predict and earn points. Points can be redeemed for gifts provided by sponsors.
                    </p>
                </div>
            </div>
        </div>

        <div class="row mglr">
            <div class="col-sm-4 key-point-card">
                <div class="point-card-content">
                    <h3 class="number">04</h3>
                    <p class="point-card-heading">
                        Referral System
                    </p>
                    <p class="point-card-txt">

                        Users also earn points by referring valid user to QuizYard.

                    </p>
                </div>
            </div>
            <div class="col-sm-4 key-point-card">
                <div class="point-card-content">
                    <h3 class="number">05</h3>
                    <p class="point-card-heading">
                        Redeem Points
                    </p>
                    <p class="point-card-txt">

                        And finally redeem your earned points for lots of gifts available on store.


                    </p>
                </div>
            </div>
            <div class="col-sm-4 key-point-card">
                <div class="point-card-content">
                    <h3 class="number">06</h3>
                    <p class="point-card-heading">
                        Reward
                    </p>
                    <p class="point-card-txt">
                        Top ten player of leader board will get Rewards. 
                    </p>
                </div>
            </div>


        </div>
    </div>


    <div class="container-fluid benefit-quizyard">

        <div class="container">
            <div class="col-sm-offset-2 col-sm-8" style="text-align: center">
                <h3 class="benefit-heading" style="font-size: 32px">Trivia App QuizYard</h3>
                <p class="product-tech-details" style="color: #fff;text-align: center;margin-bottom: 4%">
                    If you think you are knowledgeable and confident enough then you are welcome to participate on any of our ongoing quiz contest
                </p>
                <a href="https://quizyard.io/" target="_blank" class="view-more modify"> View More</a>

            </div>
        </div>
    </div>


    <!--What we Achive slider-->
    <div class="container">
        <div class="row mglr">
            <div class="col-sm-4 product-details-slider-left">
                <h3 class="product-tech-heading" style="color: #000;margin-bottom: 15px;">
                    Future Integration
                </h3>
                <p class="product-tech-details" style="color: #636262">
                    We are the first who arranges online Quiz contest regularly and rewarded mega prizes. If you think you are knowledgeable and confident enough then you are welcome to participate on any of our ongoing quiz contest.
                </p>
            </div>
            <div class="col-sm-8 slider-con">
                <div class="slider3 slider1" style="padding-top: 5px;padding-bottom: 5px;">

                    <div class="slick-slideshow__slide2">
                        <div class="solution-slide-outer">
                            <h3 class="product-slider-heading">Betting</h3>
                            <p class="product-slider-txt">
                                Alongside prediction, users can bet also. Points for points can be used as tradeoff currency.
                            </p>
                        </div>
                    </div>
                    <div class="slick-slideshow__slide2">
                        <div class="solution-slide-outer">
                            <h3 class="product-slider-heading">Fantasy</h3>
                            <p class="product-slider-txt">
                                Create your team & earn points every time your teammate scores. And earn points!
                            </p>
                        </div>
                    </div>
                    <div class="slick-slideshow__slide2">
                        <div class="solution-slide-outer">
                            <h3 class="product-slider-heading">Betting</h3>
                            <p class="product-slider-txt">
                                Alongside prediction, users can bet also. Points for points can be used as tradeoff currency.
                            </p>
                        </div>
                    </div>
                    <div class="slick-slideshow__slide2">
                        <div class="solution-slide-outer">
                            <h3 class="product-slider-heading">Fantasy</h3>
                            <p class="product-slider-txt">
                                Create your team & earn points every time your teammate scores. And earn points!
                            </p>
                        </div>
                    </div>
                    <div class="slick-slideshow__slide2">
                        <div class="solution-slide-outer">
                            <h3 class="product-slider-heading">Betting</h3>
                            <p class="product-slider-txt">
                                Alongside prediction, users can bet also. Points for points can be used as tradeoff currency.
                            </p>
                        </div>
                    </div>
                    <div class="slick-slideshow__slide2">
                        <div class="solution-slide-outer">
                            <h3 class="product-slider-heading">Fantasy</h3>
                            <p class="product-slider-txt">
                                Create your team & earn points every time your teammate scores. And earn points!
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid screen-quizyard">

        <div class="container">
            <div class="col-sm-offset-2 col-sm-8" style="text-align: center;margin-bottom: 4%;">
                <h3 class="product-tech-heading">
                    App Screen
                </h3>
                <p class="product-tech-details">
                    We worked on lots of models & objects/data for training. Here presented the current screens.
                </p>
            </div>
            <div class="row mglr">
                <div class="wrap">
                    <div class="slider5">

                        <div class="item new2">
                            <img src="{{ asset('assets/img/1.png') }}" alt="" class="bottom-slider-img">

                        </div>
                        <div class="item new2">
                            <img src="{{ asset('assets/img/2.png') }}" alt="" class="bottom-slider-img">

                        </div>
                        <div class="item new2">
                            <img src="{{ asset('assets/img/3.png') }}" alt="" class="bottom-slider-img">

                        </div>
                        <div class="item new2">
                            <img src="{{ asset('assets/img/4.png') }}" alt="" class="bottom-slider-img">
                        </div>
                        <div class="item new2">
                            <img src="{{ asset('assets/img/4.png') }}" alt="" class="bottom-slider-img">
                        </div>
                        <div class="item new2">
                            <img src="{{ asset('assets/img/1.png') }}" alt="" class="bottom-slider-img">

                        </div>
                        <div class="item new2">
                            <img src="{{ asset('assets/img/2.png') }}" alt="" class="bottom-slider-img">

                        </div>
                        <div class="item new2">
                            <img src="{{ asset('assets/img/3.png') }}" alt="" class="bottom-slider-img">

                        </div>
                        <div class="item new2">
                            <img src="{{ asset('assets/img/4.png') }}" alt="" class="bottom-slider-img">
                        </div>
                        <div class="item new2">
                            <img src="{{ asset('assets/img/4.png') }}" alt="" class="bottom-slider-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--What we Achive slider Ends-->
    <!-- PAGE CONTANT END -->
@endsection


<!-- ADD JS HERE -->
@push('js')
    <script>
        $('.slider5').slick({
            autoplay: true,
            autoplaySpeed: 1400,
            slidesToShow: 5,
            slidesToScroll: 1,
            arrows: true,
            dots: false,
            centerMode: true,
            variableWidth: true,
            infinite: true,
            focusOnSelect: true,
            cssEase: 'linear',
            touchMove: true,
            prevArrow: '<button class="slick-prev"> < </button>',
            nextArrow: '<button class="slick-next"> > </button>',

            //         responsive: [                        
            //             {
            //               breakpoint: 576,
            //               settings: {
            //                 centerMode: false,
            //                 variableWidth: false,
            //               }
            //             },
            //         ]
        });


        var imgs = $('.slider img');
        imgs.each(function() {
            var item = $(this).closest('.item');
            item.css({
                'background-image': 'url(' + $(this).attr('src') + ')',
                'background-position': 'center',
                '-webkit-background-size': 'cover',
                'background-size': 'cover',
            });
            $(this).hide();
        });
    </script>

    <script type="text/javascript">
        var $carousel = $('.slider3');

        var settings = {
            autoplay: true,
            autoplaySpeed: 1400,
            dots: false,
            arrows: true,
            slide: '.slick-slideshow__slide2',
            slidesToShow: 2,
            centerMode: false,
            focusOnSelect: true,
            centerPadding: '60px',
            prevArrow: '<button class="slick-prev"> &larr; </button>',
            nextArrow: '<button class="slick-next"> &rarr; </button>',
            responsive: [{
                breakpoint: 500,
                settings: {
                    centerMode: false,
                    variableWidth: false,
                    slidesToShow: 1,
                }
            }, {
                breakpoint: 700,
                settings: {
                    centerMode: false,
                    variableWidth: false,
                    slidesToShow: 2,
                }
            }, ]
        };

        function setSlideVisibility() {
            //Find the visible slides i.e. where aria-hidden="false"
            var visibleSlides = $carousel.find('.slick-slideshow__slide[aria-hidden="false"]');
            //Make sure all of the visible slides have an opacity of 1
            $(visibleSlides).each(function() {
                $(this).css('opacity', 1);
            });

            //Set the opacity of the first and last partial slides.
            $(visibleSlides).first().prev().css('opacity', 0);
        }

        $carousel.slick(settings);
        $carousel.slick('slickGoTo', 1);
        setSlideVisibility();

        $carousel.on('afterChange', function() {
            setSlideVisibility();
        });
    </script>
@endpush

<!-- PAGE END -->
