<!-- PAGE START -->
@extends('layouts.master')


<!-- ADD CSS HERE -->
@push('css')
    <style>
        .product-view {
            width: 100%;
            position: relative;
            padding-top: 9%;
            padding-bottom: 5%;
        }
        
        .product-img {
            display: block;
            margin: 0px auto;
            width: 80%;
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
            background-image: url("{{asset('assets/img/Product_Details_slider.png')}}");
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
            background-image: url("{{asset('assets/img/WebCrawler_blue-bg.png')}}");
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
            background-image: url("{{asset('assets/img/Product_quizyard2.png')}}");
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
                        Kravla Web Crawler
                    </h3>
                    <p class="product-txt">
                        In-house web crawling project started initially for crawling & fetching free stock photos around the web. After successful photo crawling, we improved it to crawl and fetch anything from any site that maintains a minimum coding standard.
                    </p>

                </div>
            </div>

            <div class="col-sm-7 bg-quizyard" style="padding: 0px;">
                <div class="product-view">
                    <img src="{{asset('assets/img/WebCrawler_blue.png')}}" alt="" class="product-img">
                </div>
            </div>
        </div>
    </div>          
    <!--header image and app info ends-->



    <!--Our Vision-->
    <div class="container-fluid" style="background-color: #f7f7f7">
        <div class="container">
            <!-- <hr style="margin-top: 0px;"> -->
            <div class="row mglr" style="padding-top: 5%;padding-bottom: 5%;">
                <div class="col-sm-offset-2 col-sm-8" style="text-align: center">
                    <h3 class="product-tech-heading">
                        Key Features (Crawler)
                    </h3>
                    <p class="product-tech-details">
                        We worked on lots of models & objects/data for training.
                    </p>
                </div>
            </div>

            <div class="row mglr">
                <div class="col-sm-offset-1 col-sm-10">
                    <div class="row mglr">
                        <div class="col-sm-7 border-right text-right mgbtm1">
                            <h3 class="web-feature-heading">
                                Java Based
                            </h3>
                            <p class="web-feature-txt">
                                Unlike existing web crawlers, our’s isn’t PHP based. So no timeout or script execution issue.
                            </p>
                        </div>
                        <div class="col-sm-5 mgbtm1">
                            <img src="{{ asset('assets/img/WebCrawler_blue-icon1.png')}}" alt="" class="web-feature-img">
                        </div>
                    </div>

                    <div class="row mglr">
                        <div class="col-sm-5 mgbtm1">
                            <img src="{{asset('assets/img/WebCrawler_blue-icon2.png')}}" alt="" class="web-feature-img1">
                        </div>
                        <div class="col-sm-7 border-left text-left mgbtm1">
                            <h3 class="web-feature-heading">
                                Coding Standard
                            </h3>
                            <p class="web-feature-txt">
                                Maintain high quality of coding standard, so issues with existing crawlers doesn’t occur here.
                            </p>
                        </div>
                    </div>




                    <div class="row mglr">
                        <div class="col-sm-7 border-right text-right mgbtm1">
                            <h3 class="web-feature-heading">
                                Bypass Captcha
                            </h3>
                            <p class="web-feature-txt">
                                We have Integrated 3rd party captcha bypass system which is a common issue while crawling the web.
                            </p>
                        </div>
                        <div class="col-sm-5 mgbtm1">
                            <img src="{{ asset('assets/img/WebCrawler_blue-icon3.png')}}" alt="" class="web-feature-img">
                        </div>
                    </div>

                    <div class="row mglr">
                        <div class="col-sm-5 mgbtm1">
                            <img src="{{asset('assets/img/WebCrawler_blue-icon.png')}}" alt="" class="web-feature-img1">
                        </div>
                        <div class="col-sm-7 border-left text-left mgbtm1">
                            <h3 class="web-feature-heading">
                                Proxy
                            </h3>
                            <p class="web-feature-txt">
                                We also integrated multiple proxy methods, use any 3rd party service or your own proxy IP/server
                            </p>
                        </div>
                    </div>


                    <div class="row mglr">
                        <div class="col-sm-7 border-right text-right mgbtm1">
                            <h3 class="web-feature-heading">
                                Clear Reporting
                            </h3>
                            <p class="web-feature-txt">
                                Detailed reporting about what is crawled or fetched. And error reporting if there is any.
                            </p>
                        </div>
                        <div class="col-sm-5 mgbtm1">
                            <img src="{{ asset('assets/img/WebCrawler_blue-icon4.png')}}" alt="" class="web-feature-img">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--Our vision Ends-->

    

    <div class="container-fluid benefit-quizyard">

        <div class="container">
            <div class="col-sm-offset-2 col-sm-8" style="text-align: center">
                <h3 class="benefit-heading" style="font-size: 32px">Kravla Web Crawler Used In FOTOBOSS</h3>
                <p class="product-tech-details" style="color: #fff;text-align: center;margin-bottom: 4%">
                    Beautiful high quality free images and photos you can download and use for any project.
                </p>
                <a href="http://fotoboss.io/" target="_blank" class="view-more modify"> View More</a>

            </div>
        </div>
    </div>



    <!--KEY feature stock photo-->
    <div class="container points-block" style="border-bottom: 1px solid #eee;">
        <div class="col-sm-offset-2 col-sm-8" style="text-align: center;margin-bottom: 4%;">
            <h3 class="product-tech-heading">
                Key Features (Stock Photo)
            </h3>
            <p class="product-tech-details">
                We worked on lots of models & objects/data for training.
            </p>
        </div>
        <div class="row mglr">
            <div class="col-sm-5 crawl-feature-left">
                <img src="{{ asset('assets/img/WebCrawler_blue-left.png')}}" alt="" class="crawl-feature-left-img">
            </div>
            <div class="col-sm-7 crawl-feature-right">
                <div class="row mglr">
                    <div class="col-sm-6">
                        <div class="crawl-feature-right-card">
                            <h3 class="feature-right-card-heading">
                                01. Unique Frontend
                            </h3>
                            <p class="feature-right-card-txt">
                                Unique frontend design which can be customized as per your need/business model.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="crawl-feature-right-card">
                            <h3 class="feature-right-card-heading">
                                02. Extensive Backend
                            </h3>
                            <p class="feature-right-card-txt">
                                Full CMS with extensive functionalities with 3 level of user access. This can be modified as your need.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row mglr">
                    <div class="col-sm-6">
                        <div class="crawl-feature-right-card">
                            <h3 class="feature-right-card-heading">
                                03. Third Party Storage
                            </h3>
                            <p class="feature-right-card-txt">
                                We use AWS S3 for photo storage, any any S3 compatible storage can be used from any provider or use your own setup.
                            </p>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="crawl-feature-right-card">
                            <h3 class="feature-right-card-heading">
                                04. Social Integration
                            </h3>
                            <p class="feature-right-card-txt">
                                Social login/signup along with all social platform share is already integrated.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row mglr">
                    <div class="col-sm-6">
                        <div class="crawl-feature-right-card">
                            <h3 class="feature-right-card-heading">
                                05. Analytics & Reporting
                            </h3>
                            <p class="feature-right-card-txt">
                                Detailed analytics & reporting is available (user/contributor/stock images etc.)
                            </p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
   
   

    <!--Future Integration-->
    <div class="container points-block" style="padding-bottom: 4%;">

        <div class="col-sm-offset-2 col-sm-8" style="text-align: center;margin-bottom: 4%;">
            <h3 class="product-tech-heading">
                Future Integration
            </h3>
            <p class="product-tech-details">
                We worked on lots of models & objects/data for training.
            </p>
        </div>
        <div class="row mglr">
            <div class="row">
                <div class="col-sm-5">
                    <div class="integration-card">
                        <div class="integration-left">
                            <img src="{{ asset('assets/img/verified_blue.png')}}" alt="" class="integration-left-image">
                        </div>
                        <div class="integration-right">

                            <h3 class="integration-right-heading">
                                Hosted PAYG Service
                            </h3>
                            <p class="integration-right-text">
                                Currently we are working on to our crawling service to provide as a hosted service. Where you can use this as simple as a PAYG model.
                            </p>
                        </div>
                    </div>

                    <div class="integration-card">
                        <div class="integration-left">
                            <img src="{{ asset('assets/img/verified_blue.png')}}" alt="" class="integration-left-image">
                        </div>
                        <div class="integration-right">

                            <h3 class="integration-right-heading">
                                CMS Bundle
                            </h3>
                            <p class="integration-right-text">
                                We are working on Stock photo CMS bundle and use on theming to use it for all kinds of media.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7">
                    <img src="{{ asset('assets/img/WebCrawler_blue-right.png')}}" alt="" class="ineti-img-desc">
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
