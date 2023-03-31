<!-- PAGE START -->
@extends('layouts.master')


<!-- ADD CSS HERE -->
@push('css')
    <style>
        .product-view {
            width: 100%;
        }
        
        .product-img-hr {
            display: block;
            margin: 0px auto;
            width: 100%;
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
            padding-top: 20%;
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
            position: relative;
            padding-bottom: 15px;
        }
        
        .product-tech-heading1 {
            color: #2a2a2a;
            font-size: 32px;
            font-weight: 700;
            position: relative;
            padding-bottom: 15px;
        }
        
        .product-tech-heading::after {
            content: " ";
            display: block;
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 70px;
            height: 3px;
            background-color: #147fb4;
            transform: translateX(-50%);
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
            padding-top: 5%;
            padding-bottom: 1%;
        }
        
        .bg-quizyard {
            background-image: url("{{ asset('assets/img/WebCrawler_blue-bg.png')}}");
            background-size: 80% 100%;
            background-repeat: no-repeat;
            background-position: right;
        }
        
        .quizyard-card-txt {
            color: #696969;
            font-size: 14px;
            text-align: center;
        }
        
        .benefit-quizyard {
            background-image: url("{{ asset('assets/img/WebCrawler_blue-bg2.png')}}");
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
        
        .web-feature-img {
            max-height: 134px;
            display: block;
            margin-left: auto;
            margin-top: -5px;
        }
        
        .web-feature-img1 {
            max-height: 134px;
            display: block;
            margin-right: auto;
            margin-top: -5px;
        }
        
        .border-right {
            border-right: 2px solid #2d97d5;
            padding-top: 2%;
            padding-bottom: 2%;
        }
        
        .border-left {
            border-left: 2px solid #2d97d5;
            padding-top: 2%;
            padding-bottom: 2%;
        }
        
        .web-feature-heading {
            color: #000;
            font-size: 20px;
            font-weight: 700;
            margin-top: 10px;
        }
        
        .web-feature-txt {
            color: #2e2e2e;
            font-size: 15px;
        }
        
        .mgbtm1 {
            margin-bottom: 5%;
        }
        /* .modify {
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
        } */
        
        .crawl-feature-left-img {
            width: 100%;
        }
        
        .crawl-feature-right-card {
            padding: 3% 2%;
            background-color: #fff;
            border-radius: 12px;
            margin-bottom: 10px;
            /* box-shadow: 0 0px 15px 0px rgba(0, 0, 0, 0.2);
           
            padding: 15px 15px; */
        }
        
        .feature-right-card-heading {
            color: #000;
            font-size: 20px;
            font-weight: 700;
        }
        
        .feature-right-card-txt {
            color: #686868;
            font-size: 15px;
        }
        
        .integration-card::after {
            content: " ";
            display: table;
            clear: both;
        }
        
        .integration-card {
            width: 100%;
            margin-bottom: 3%;
            padding: 3%;
            box-shadow: 0 0px 15px 0px rgba(0, 0, 0, 0.2);
            background-color: #fff;
            border-radius: 12px;
        }
        
        .integration-left {
            width: 30px;
            display: block;
            float: left;
            height: 100%;
        }
        
        .integration-left-image {
            display: block;
            margin: 0px auto;
            width: 30px;
            margin-top: 20px;
        }
        
        .integration-right {
            display: block;
            float: right;
            width: 85%;
        }
        
        .integration-right-heading {
            color: #000;
            font-size: 20px;
            font-weight: 700;
        }
        
        .integration-right-text {
            color: #686868;
            font-size: 15px;
        }
        
        .ineti-img-desc {
            width: 100%;
        }
        
        .future-hrm {
            margin-bottom: 6%;
        }
        
        .feature-block-hrm {
            background-color: rgba(243, 247, 251, .6);
            padding-bottom: 14%;
            padding-top: 14%;
            clip-path: polygon(0% 20%, 100% 0%, 100% 80%, 0% 100%);
            margin-top: -13%;
        }
        
        .feature-block-hrm1 {
            background-image: linear-gradient(to bottom, rgba(243, 247, 251, .6), rgba(243, 247, 251, .3));
            padding-bottom: 10%;
            padding-top: 8%;
            clip-path: polygon(0% 20%, 100% 0%, 100% 80%, 0% 100%);
        }
   
        @media (max-width:1345px){
            .feature-block-hrm {
            clip-path: polygon(0% 15%, 100% 0%, 100% 85%, 0% 100%);
            }
            
            .feature-block-hrm1 {
            clip-path: polygon(0% 15%, 100% 0%, 100% 85%, 0% 100%);
            }
            
        }
        @media (max-width:767.98px){
            .feature-block-hrm {
            clip-path: polygon(0% 5%, 100% 0%, 100% 95%, 0% 100%);
            }
            
            .feature-block-hrm1 {
            clip-path: polygon(0% 5%, 100% 0%, 100% 95%, 0% 100%);
            }
            
        }
        @media (min-width: 768px){

            .product-details-container1{
                padding-top: 20%;
            }
        }
        .home-block-3{
            padding-top: 5%;
        }
    
    </style>
@endpush


@section('content')
    <!-- PAGE CONTANT START -->
    <!--header image and app info-->
    <div class="container home-block-3" style="padding-bottom: 0px;">
        <div class="row mglr">
            <div class="col-sm-5">
                <div class="product-details-container1">
                    <h3 class="product_name">
                        HR Solution
                    </h3>
                    <p class="product-txt">
                        HR solution, focused on recruitment system and recruitment process automation. Detailed analytics & reporting is available from attendance to payroll or performance evaluation. TiCON’s HR solution is perfect to take care all of your HR & Payroll related requirements

                    </p>
                <!--  <a href="#" target="_blank" class="view-more modify"> View More</a> -->
                </div>
            </div>

            <div class="col-sm-7" style="z-index:999;">
                <div class="product-view1">
                    <img src="{{ asset('assets/img/hr_solution.png') }}" alt="" class="product-img-hr">
                </div>
            </div>
        </div>
    </div>
    <!--header image and app info ends-->




    <!--KEY feature stock photo-->
    <div class="container-fluid feature-block-hrm">
        <div class="container points-block">
            <div class="col-sm-offset-2 col-sm-8" style="text-align: center;margin-bottom: 4%;">
                <h3 class="product-tech-heading">
                    Key Features (Recruitment)
                </h3>
                <!-- <p class="product-tech-details">
                We worked on lots of models & objects/data for training. We will now present you our current achievements and ongoings.
            </p> -->
            </div>
            <div class="row mglr">
                <div class="col-sm-5 crawl-feature-left">
                    <img src="{{ asset('assets/img/Details_jobportal1.png') }}" alt="" class="crawl-feature-left-img">
                </div>
                <div class="col-sm-7 crawl-feature-right">
                    <div class="row mglr">
                        <div class="col-sm-6">
                            <div class="crawl-feature-right-card">
                                <h3 class="feature-right-card-heading">
                                    01. SSO
                                </h3>
                                <p class="feature-right-card-txt">
                                    Single Sign On from Job application to interview, eventually employee login, which then can be integrated with access control.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="crawl-feature-right-card">
                                <h3 class="feature-right-card-heading">
                                    02. Job Posting
                                </h3>
                                <p class="feature-right-card-txt">
                                    Post jobs, share them and find some perfect candidate for the interview
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row mglr">
                        <div class="col-sm-6">
                            <div class="crawl-feature-right-card">
                                <h3 class="feature-right-card-heading">
                                    03. Pre-employment test
                                </h3>
                                <p class="feature-right-card-txt">
                                    Take a pre-employment test online to eliminate some candidates, reduce your on-premise hassle.
                                </p>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="crawl-feature-right-card">
                                <h3 class="feature-right-card-heading">
                                    04. Video Interview
                                </h3>
                                <p class="feature-right-card-txt">
                                    Even arrange a video interview so candidates can attend from anytime anywhere
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row mglr">
                        <div class="col-sm-6">
                            <div class="crawl-feature-right-card">
                                <h3 class="feature-right-card-heading">
                                    05. Notifications
                                </h3>
                                <p class="feature-right-card-txt">
                                    Send notifications, emails & SMS of the interview process to inform candidates accordingly on time.
                                </p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>




    <!--Our Vision-->
    <div class="container-fluid">
        <div class="container">
            <!-- <hr style="margin-top: 0px;"> -->
            <div class="row mglr" style="padding-bottom: 5%;">
                <div class="col-sm-offset-2 col-sm-8" style="text-align: center">
                    <h3 class="product-tech-heading">
                        Key Features (HRMS)
                    </h3>
                    <!-- <p class="product-tech-details">
                        We worked on lots of models & objects/data for training. We will now present you our current achievements and ongoings.
                    </p> -->
                </div>
            </div>

            <div class="row mglr">
                <div class="col-sm-offset-1 col-sm-10">
                    <div class="row mglr">
                        <div class="col-sm-7 border-right text-right mgbtm1">
                            <h3 class="web-feature-heading">
                                Performance Evaluation
                            </h3>
                            <p class="web-feature-txt">
                                Set the evaluation process, notify all employee and analyze performance at the end of cycle.
                            </p>
                        </div>
                        <div class="col-sm-5 mgbtm1">
                            <img src="{{ asset('assets/img/WebCrawler_blue-icon1.png') }}" alt="" class="web-feature-img">
                        </div>
                    </div>

                    <div class="row mglr">
                        <div class="col-sm-5 mgbtm1">
                            <img src="{{ asset('assets/img/WebCrawler_blue-icon2.png') }}" alt="" class="web-feature-img1">
                        </div>
                        <div class="col-sm-7 border-left text-left mgbtm1">
                            <h3 class="web-feature-heading">
                                Time Tracking
                            </h3>
                            <p class="web-feature-txt">
                                Track entry-exit time with manual input or integrate with access machine server. Easily calculate attendance at end of cycle.
                            </p>
                        </div>
                    </div>




                    <div class="row mglr">
                        <div class="col-sm-7 border-right text-right mgbtm1">
                            <h3 class="web-feature-heading">
                                Payroll Management
                            </h3>
                            <p class="web-feature-txt">
                                Manage payroll - bonus & salary with custom set funds/source.
                            </p>
                        </div>
                        <div class="col-sm-5 mgbtm1">
                            <img src="{{ asset('assets/img/WebCrawler_blue-icon3.png') }}" alt="" class="web-feature-img">
                        </div>
                    </div>

                    <div class="row mglr">
                        <div class="col-sm-5 mgbtm1">
                            <img src="{{ asset('assets/img/WebCrawler_blue-icon.png') }}" alt="" class="web-feature-img1">
                        </div>
                        <div class="col-sm-7 border-left text-left mgbtm1">
                            <h3 class="web-feature-heading">
                                Learning Management
                            </h3>
                            <p class="web-feature-txt">
                                Arrange certification & tutorial with exams for your employees. This can also be used on onboarding process.
                            </p>
                        </div>
                    </div>


                    <div class="row mglr">
                        <div class="col-sm-7 border-right text-right mgbtm1">
                            <h3 class="web-feature-heading">
                                Analytics & Reporting
                            </h3>
                            <p class="web-feature-txt">
                                Detailed analytics & reporting is available from attendance to payroll or performance evaluation.
                            </p>
                        </div>
                        <div class="col-sm-5 mgbtm1">
                            <img src="{{ asset('assets/img/WebCrawler_blue-icon4.png') }}" alt="" class="web-feature-img">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--Our vision Ends-->



    <!--Future Integration-->
    <div class="container-fluid feature-block-hrm1">
        <div class="container points-block" style="padding-bottom: 4%;">

            <div class="col-sm-offset-2 col-sm-8" style="text-align: center;margin-bottom: 4%;">

            </div>
            <div class="row mglr">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="{{ asset('assets/img/Details_jobportal2.png') }}" alt="" class="ineti-img-desc">
                    </div>
                    <div class="col-sm-6">
                        <div class="future-hrm">
                            <h3 class="product-tech-heading1">
                                Future Integration
                            </h3>
                            <p class="product-tech-details">
                                We worked on lots of models & objects/data for training. We will now present you our current achievements and ongoings.
                            </p>
                        </div>
                        <div class="integration-card">
                            <div class="integration-left">
                                <img src="{{ asset('assets/img/verified_blue.png') }}" alt="" class="integration-left-image">
                            </div>
                            <div class="integration-right">

                                <h3 class="integration-right-heading">
                                    Top Performance
                                </h3>
                                <p class="integration-right-text">
                                    A data analytics driven approach to automatically measure top performing employees/managers/projects/tools in use etc.
                                </p>
                            </div>
                        </div>

                        <div class="integration-card">
                            <div class="integration-left">
                                <img src="{{ asset('assets/img/verified_blue.png') }}" alt="" class="integration-left-image">
                            </div>
                            <div class="integration-right">

                                <h3 class="integration-right-heading">
                                    Self Service & Benefit Administration
                                </h3>
                                <p class="integration-right-text">
                                    We are working on employee self service portal for services like transport management etc. Also working on portal for employee benefit administration.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--Future Integration Ends-->
    
    <!-- PAGE CONTANT END -->
@endsection


<!-- ADD JS HERE -->
@push('js')

@endpush

<!-- PAGE END -->
