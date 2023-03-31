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
            width: 75%;
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
            font-size: 17px;
            line-height: 27px;
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
            font-size: 15px;
            line-height: 27px;
        }

        .tech-card {
            height: 200px;
            margin-bottom: 10px;
        }

        .slider3 {}

        .solution-slide-outer {
            background-color: rgba(255, 255, 255, 0.47);
            width: 95%;
            box-shadow: 0px 0px 29px -8px rgba(0, 0, 0, .5);
            margin: 0px auto;
            padding: 14%;
            padding-bottom: 19%;
            height: 300px;
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
            right: 10px;
            text-align: center;
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
            height: 3px;
            background-color: #2d97d5;
            position: absolute;
            top: -21px;
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
            font-size: 14px;
        }

        .product-details-slider-left {
            padding-top: 5%;
            padding-bottom: 1%;
        }


        /***** Process Section CSS Start *****/

        .calsec {
            overflow: hidden;
            margin-bottom: 100px;
        }

        .calimgr {
            overflow: hidden;
        }

        .calimgr img {
            display: block;
            text-align: right !important;
            float: right;
            margin-bottom: 30px;
        }

        .cal_titler {
            font-size: 20px;
            font-weight: 600;
            color: #242424;
            text-align: right;
            margin-bottom: 15px;
        }

        .cal_desr {
            font-size: 17px;
            color: #7a7a7a;
            text-align: right;
            line-height: 20px;
            font-weight: 400;
            text-align: right;
        }

        .cal .calsec:last-child {
            margin-bottom: 0px;
        }

        .proc_cenimg {
            display: block;
        }

        .proc_cenimgcontent {
            margin-top: 33%;
        }

        .text-center {
            text-align: center;
        }

        .proc_cenimg img {
            height: 374px;
            width: auto;
            text-align: center;
        }

        .s_fordes {
            display: block;
        }

        .calsecr {
            overflow: hidden;
            margin-bottom: 70px;
            margin-top: 40%;
        }

        .calimgl img {
            display: block;
            margin-bottom: 30px;
        }

        .cal_titlel {
            font-size: 20px;
            font-weight: 600;
            color: #242424;
            text-align: left;
            margin-bottom: 15px;
        }

        .cal_desl {
            font-size: 17px;
            color: #7a7a7a;
            text-align: right;
            line-height: 20px;
            font-weight: 400;
            text-align: left;
        }

        .s_processpara {
            color: #2a2a2a;
            font-size: 32px;
            font-weight: 600;
            margin-bottom: 70px;
        }

        .ai-process {
            margin: 60px 0px;
            border-top: 1px solid #e2e2e2;
            border-bottom: 1px solid #e2e2e2;
            padding: 50px 0px;
        }

        .home-blockk {}

        /***** Process Section CSS End *****/

        /**** Workflow Start ****/

        .benefit-quizyard {

            background-size: 100% 100%;
            background-repeat: no-repeat;
            background-position: center;
            overflow: hidden;
        }

        .benefit-heading {
            text-align: center;
            color: #1f1f1f;
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 5%;
        }

        .mglr {
            margin-left: 0px;
            margin-right: 0px;
            margin-bottom: 80px;
        }



        .right-side-text {
            float: left;
            width: 70%;
            padding-top: 2%;
        }

        .left-heading {
            color: #2b2b2b;
            font-size: 16px;
            font-weight: 700;
        }

        .left-pera {
            font-size: 15px;
            font-weight: 400;
            color: #7a7a7a;
        }

        .left-side-icon {
            float: left;
            width: 30%;
        }

        .middle-image {
            position: relative;
        }

        .quizyard-img {
            position: absolute;
            top: 30px;
            left: 50%;
            transform: translateX(-50%);
            bottom: 0;
        }

        .middle-image::after {
            content: " ";
            display: table;
            clear: both;
        }

        .beneftit-content {
            clear: both;
            min-height: 175px;
            padding-bottom: 90px!important;
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

        .left-heading {
            color: #2b2b2b;
            font-size: 16px;
            font-weight: 700;
        }

        .left-pera {
            font-size: 15px;
            font-weight: 400;
            color: #7a7a7a;
        }

        @media (max-width: 767.98px){ 
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
            .calimgr img {
                display: block;
                text-align: right !important;
                float: none;
                margin: 0px auto;
                width: 85px;
                margin-bottom: 30px;
            }
            .calimgl img{
                display: block;
                text-align: right !important;
                float: none;
                margin: 0px auto;
                width: 85px;
                margin-bottom: 30px;
            }
            .cal_titlel {
                font-size: 20px;
                font-weight: 600;
                color: #242424;
                text-align: center;
                margin-bottom: 15px;
            }
            .cal_desl {
                font-size: 17px;
                color: #7a7a7a;
                line-height: 20px;
                font-weight: 400;
                text-align: center;
            }
            .cal .calsec:last-child {
                margin-bottom: 5%;
            }
            .cal_titler {

                text-align: center;
        
            }
            .cal_desr {
                text-align: center;
            }
        }

        @media (max-width: 991.98px){
        .calsecr {
                overflow: hidden;
                margin-bottom: 70px;
                margin-top: 0%;
            }
            .calsec {
                overflow: hidden;
                margin-bottom: 5%;
            }
            .s_processpara {
            
                text-align: center;
            }
        }
    </style>
@endpush


@section('content')
    <!-- PAGE CONTANT START -->
    <div class="" style="padding-top: 0px;">
        <div class="row mglr">
            <div class="col-sm-5">
                <div class="product-details-container">
                    <h3 class="product_name">
                        AI 통합 챗봇
                    </h3>
                    <p class="product-txt">
                        TiCON은 하드웨어 통합 다국어 챗봇을 최초로 도입했으며 (벵골어, 영어, 한국어, 일본어 & 다른 언어로 확장 가능), 빅데이터, NLP, ML & 음성 인식 테크놀로지를 최대한 활용하고자 합니다.
                    </p>
                </div>
            </div>

            <div class="col-sm-7" style="padding: 0px;">
                <div class="product-view">
                    <img src="{{ asset('assets/img/Product_Details.png') }}" alt="" class="product-img">

                    <p class="product-category">
                        <i class="fa fa-android" style="font-size:24px"></i><span></span>
                        <i class="fa fa-apple" style="font-size:24px"></i><span></span> Mobile Application</p>
                    <div class="product-polygon">

                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <hr>
            <div class="row mglr" style="padding-top: 5%;padding-bottom: 5%;">
                <div class="col-sm-offset-2 col-sm-8" style="text-align: center">
                    <h3 class="product-tech-heading">
                        우리가 사용한 테크놀로지
                    </h3>

                </div>
            </div>

            <div class="row mglr">
                <div class="col-sm-4 col-md-3 tech-card">
                    <center>
                        <img src="{{ asset('assets/img/Product_Details_icon1.png') }}" alt="" class="product-tech-icon">
                        <p class="tech-name">
                            머신러닝(ML)
                        </p>
                    </center>

                </div>

                <div class="col-sm-4 col-md-3 tech-card">
                    <center>
                        <img src="{{ asset('assets/img/Product_Details_icon2.png') }}" alt="" class="product-tech-icon">
                        <p class="tech-name">
                            자연어 처리(NLP)
                        </p>
                    </center>

                </div>

                <div class="col-sm-4 col-md-3 tech-card">
                    <center>
                        <img src="{{ asset('assets/img/Product_Details_icon4.png') }}" alt="" class="product-tech-icon">
                        <p class="tech-name">
                            자체 알고리즘
                        </p>
                    </center>

                </div>

                <div class="col-sm-4 col-md-3 tech-card">
                    <center>
                        <img src="{{ asset('assets/img/Product_Details_icon3.png') }}" alt="" class="product-tech-icon">
                        <p class="tech-name">
                            음성 인식(STT & TTS)
                        </p>
                    </center>

                </div>


            </div>
            <hr>

            <div class="row mglr">
                <div class="col-sm-4 product-details-slider-left">
                    <h3 class="product-tech-heading" style="color: #000;margin-bottom: 15px;">
                        우리가 달성한 것
                    </h3>
                    <p class="product-tech-details" style="color: #636262">
                        TiCON은 하드웨어 통합 다국어 챗봇을 벵골어 최초로 도입했으며, 빅데이터, NLP, ML & 음성 인식 테크놀로지를 최대한 활용하고자 합니다.
                    </p>
                </div>
                <div class="col-sm-8 slider-con">
                    <div class="slider3 slider1" style="padding-top: 5px;padding-bottom: 5px;">

                        <div class="slick-slideshow__slide2">
                            <div class="solution-slide-outer">
                                <h3 class="product-slider-heading">일상적인 작업</h3>
                                <p class="product-slider-txt">
                                알람 및 일정/알림 예약하고, 봇에게 우리를 위해 어떤 것이든 검색해 달라고 요청하고, 어떤 연락처나 번호로 전화하고, 어떤 다른 앱을 열 수 있는 기능 등이 있습니다.
                                </p>
                            </div>
                        </div>
                        <div class="slick-slideshow__slide2">
                            <div class="solution-slide-outer">
                                <h3 class="product-slider-heading">대화</h3>
                                <p class="product-slider-txt">
                                    TEIA와 간단한 대화를 나눌 때, 봇은 정말 좋은 반응으로 여러분과 소통할 수 있습니다. 그것은 동시에 즐거울 수 있습니다. 또한 그것은 당신에게 매우 유익할 수 있습니다.
                                </p>
                            </div>
                        </div>
                        <div class="slick-slideshow__slide2">
                            <div class="solution-slide-outer">
                                <h3 class="product-slider-heading">다국어</h3>
                                <p class="product-slider-txt">
                                    THEIA는 다국어입니다. 현재 벵골어, 영어, 일본어, 한국어에서 작동합니다. 그리고 다른 언어로 확장될 수 있는 능력을 가지고 있습니다. 

                                </p>
                            </div>
                        </div>
                        <div class="slick-slideshow__slide2">
                            <div class="solution-slide-outer">
                                <h3 class="product-slider-heading">최초의 3D 모델 & 하드웨어</h3>
                                <p class="product-slider-txt">
                                THEIA는 방글라데시에서 하드웨어 기반 3D 모델과 통합된 최초의 봇이며 세계 몇 안 되는 봇 중 하나입니다. 우리는 3D 모델을 호스팅하기 위해 안드로이드 박스를 사용하고 있습니다.
                                </p>
                            </div>
                        </div>
                        <div class="slick-slideshow__slide2">
                            <div class="solution-slide-outer">
                                <h3 class="product-slider-heading">빅데이터 작업</h3>
                                <p class="product-slider-txt">
                                    최근에 빅데이터 & NLP와 함께 작업할 계획으로 대화를 화면서 공개 입력을 시작했습니다. 우리가 더 많은 데이터를 가질수록, THEIA는 더 나아질 것입니다. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section style="background:#fff;" class="ai-process">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 hs_row_mar  ">
                    <div class="process_container inv_margin_leftright" id="mprocess_container">
                        <p class="s_processpara">우리가 따르는 프로세스 </p>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 for_pad_left">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 cal for_pad_left">
                                            <div class="calsec ">
                                                <div class="calimgr">
                                                    <img src="{{ asset('assets/img/2-process.png') }}" alt="" class="product-tech-icon">
                                                </div>
                                                <div class="sr_processcontaine">
                                                    <p class="cal_titler">머신러닝</p>
                                                    <p class="cal_desr">- Apache SparkML 활용 </p>
                                                    <p class="cal_desr">- 안드로이드  용 JAVA 래퍼(wrapper) 사용
                                                    </p>
                                                    <p class="cal_desr">- 머신러닝을 위한 초기 데이터 인벤토리 </p>
                                                </div>
                                            </div>
                                            <div class="calsec ">
                                                <div class="calimgr"> <img src="{{ asset('assets/img/3-process.png') }}" alt="" class="product-tech-icon"> </div>
                                                <div class="sr_processcontaine">
                                                    <p class="cal_titler">AI 부분
                                                    </p>
                                                    <p class="cal_desr">- 대화 & 사용자 입력에 대한 데이터 인벤토리 늘리기
                                                    </p>
                                                    <p class="cal_desr">- 입력을 통한 자동 학습을 위한 감독되지 않은 모델
                                                    </p>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-4 proc_cenimg hidden-xs hidden-sm">
                                            <div class="proc_cenimgcontent text-center">
                                                <img src="{{ asset('assets/img/processcenter.png') }}" alt="" class="processimg"></div>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 s_fordes">
                                            <div class="calsecr">
                                                <div class="calimgl"> <img src="{{ asset('assets/img/4-process.png') }}" alt="" class="product-tech-icon"></div>
                                                <div class="sr_processcontaine">
                                                    <p class="cal_titlel">앱 (안드로이드 & iOS)
                                                    </p>
                                                    <p class="cal_desl">- 전단부 기능을 위한 안드로이드 앱 / ML을 통한 사용자 참여
                                                    </p>
                                                    <p class="cal_desl">- 안드로이드는 파이썬(Python) / 장고(Django) 후단부와 연결됩니다.
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="benefit-quizyard">
        <div class="container">
            <h3 class="benefit-heading">워크플로우</h3>
            <div class="row mglr">
                <div class="col-md-4 col-sm-6 col-xs-12" style="text-align: right !important">
                    <div class="beneftit-content">
                        <div class="right-side-text">
                            <h4 style="font-weight:500;font-size:24px;color:#2389ce;">01</h4>
                            <h4 class="left-heading">사용자가 전화하기</h4>
                            <p class="left-pera">
                                사용자가 당사 연락 센터에 전화
                            </p>
                        </div>
                        <div class="left-side-icon">
                            <img src="{{ asset('assets/img/quizyard-icon-1.png') }}" alt="Web icon" class="service-icons" style="width: 100%;">
                        </div>
                    </div>
                    <div class="beneftit-content">
                        <div class="right-side-text">
                        <h4 style="font-weight:500;font-size:24px;color:#2389ce;">02</h4>
                            <h4 class="left-heading">기록하기</h4>
                            <p class="left-pera">
                                향후 ML / AI 구현을 위해 모든 대화를 기록합니다.
                            </p>
                        </div>
                        <div class="left-side-icon">
                            <img src="{{ asset('assets/img/quizyard-icon-1.png') }}" alt="Web icon" class="service-icons" style="width: 100%;">
                        </div>
                    </div>

                    <div class="beneftit-content">
                        <div class="right-side-text">
                        <h4 style="font-weight:500;font-size:24px;color:#2389ce;">03</h4>
                            <h4 class="left-heading">전환하기t</h4>
                            <p class="left-pera">
                                모든 음성 대화를 텍스트로 변환합니다.
                            </p>
                        </div>
                        <div class="left-side-icon">
                            <img src="{{ asset('assets/img/quizyard-icon-1.png') }}" alt="Web icon" class="service-icons" style="width: 100%;">
                        </div>
                    </div>

                    <div class="beneftit-content">
                        <div class="right-side-text">
                        <h4 style="font-weight:500;font-size:24px;color:#2389ce;">04</h4>
                            <h4 class="left-heading">DB에 저장하기</h4>
                            <p class="left-pera">
                                그런 다음 모든 대화를 데이터베이스에 저장합니다.
                            </p>
                        </div>
                        <div class="left-side-icon">
                            <img src="{{ asset('assets/img/quizyard-icon-1.png') }}" alt="Web icon" class="service-icons" style="width: 100%;">
                        </div>

                    </div>

                </div>


                <div class="col-md-4 middle-image hidden-xs hidden-sm">
                    <img src="{{ asset('assets/img/Product_quizyard22.png') }}" alt="" class="quizyard-img">
                </div>




                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="beneftit-content">
                        <div class="left-side-icon">
                            <img src="{{ asset('assets/img/quizyard-icon-1.png') }}" alt="Web icon" class="service-icons" style="width: 100%;">
                        </div>

                        <div class="right-side-text">
                        <h4 style="font-weight:500;font-size:24px;color:#2389ce;">05</h4>
                            <h4 class="left-heading">ML 구현하기</h4>
                            <p class="left-pera">
                                패턴 이해를 위해 모든 녹음 대화에 ML을 구현합니다.
                            </p>
                        </div>
                    </div>
                    <div class="beneftit-content">
                        <div class="left-side-icon">
                            <img src="{{ asset('assets/img/quizyard-icon-1.png') }}" alt="Web icon" class="service-icons" style="width: 100%;">
                        </div>

                        <div class="right-side-text">
                        <h4 style="font-weight:500;font-size:24px;color:#2389ce;">06</h4>
                            <h4 class="left-heading">AI 구현하기</h4>
                            <p class="left-pera">
                                우리의 ML 테크놀로지를 사용하여 사용자 질의에 자동 응답하기 위해 AI를 구현합니다.
                            </p>
                        </div>
                    </div>

                    <div class="beneftit-content">
                        <div class="left-side-icon">
                            <img src="{{ asset('assets/img/quizyard-icon-1.png') }}" alt="Web icon" class="service-icons" style="width: 100%;">
                        </div>

                        <div class="right-side-text">
                        <h4 style="font-weight:500;font-size:24px;color:#2389ce;">07</h4>
                            <h4 class="left-heading">전달하기</h4>
                            <p class="left-pera">
                                충분한 데이터와 패턴이있는 경우 모든 지원 질문 답변을 자동으로 제공 할 수 있습니다.
                            </p>
                        </div>
                    </div>

                    <div class="beneftit-content">
                        <div class="left-side-icon">
                            <img src="{{ asset('assets/img/quizyard-icon-1.png') }}" alt="Web icon" class="service-icons" style="width: 100%;">
                        </div>

                        <div class="right-side-text">
                        <h4 style="font-weight:500;font-size:24px;color:#2389ce;">08</h4>
                            <h4 class="left-heading">TTS</h4>
                            <p class="left-pera">
                                동일한 프로토콜에 따라 텍스트 음성 변환을 수행 할 수도 있습니다.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PAGE CONTANT END -->
@endsection


<!-- ADD JS HERE -->
@push('js')
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