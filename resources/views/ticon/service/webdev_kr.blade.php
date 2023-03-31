<!-- PAGE START -->
@extends('layouts.master')

<!-- ADD CSS HERE -->
@push('css')
<style type="text/css">
       /*******  PHP DEVELOPMENT PAGE CSS START *******/
        .our_services_innr {
            float: left;
            width: 100%;
        }

        .our_services_innr h3 {
            color: #000;
            font-size: 35px;
            font-weight: 600;
            margin: 8px 0 0;
        }

        .php_page .our_services_outer .our_services_innr h3 span {
            color: #067cbe;
        }

        .our_services_innr p {
            color: #3c3c3c;
            font-size: 20px/26px;
            margin: 13px 111px 60px;
        }

        .border-small {
            position: absolute;
            bottom: 25px;
            left: 50%;
            transform: translateX(-50%);
            -webkit-transform: translateX(-50%);
            -moz-transform: translateX(-50%);
            -o-transform: translateX(-50%);
            width: 157px;
            border-top: 2px solid #0c95da;
        }

        .development_services_inner {
            min-height: 279px;
            border-radius: 4%;
            box-shadow: 0 0px 15px 0px rgba(0, 0, 0, 0.2);
            display: inline-block;
            margin: 33px 0 0;
            padding: 15px 15px;
            text-align: left;
            width: 100%;
            transition: all .5s ease 0s;
            cursor: default;
        }


        .development_services_inner small {
            background: url({{ asset('assets/img/php_page_service_sprite040618.png')}}) no-repeat rgba(0, 0, 0, 0);
            display: inline-block;
            height: 70px;
            text-align: center;
            width: 115px;
        }

        .development_services_inner small.Dservices_icon1 {
            background: url({{ asset('assets/img/d-service-1.png')}}) no-repeat rgba(0, 0, 0, 0);
            display: inline-block;
            height: 70px;
            text-align: center;
            width: 115px;
        }
        .development_services_inner small.Dservices_icon2 {
            background: url({{ asset('assets/img/d-service-2.png')}}) no-repeat rgba(0, 0, 0, 0);
            display: inline-block;
            height: 70px;
            text-align: center;
            width: 115px;
        }
        .development_services_inner small.Dservices_icon3 {
            background: url({{ asset('assets/img/d-service-3.png')}}) no-repeat rgba(0, 0, 0, 0);
            display: inline-block;
            height: 70px;
            text-align: center;
            width: 115px;
        }
        .development_services_inner small.Dservices_icon4 {
            background: url({{ asset('assets/img/d-service-4.png')}}) no-repeat rgba(0, 0, 0, 0);
            display: inline-block;
            height: 70px;
            text-align: center;
            width: 115px;
        }
        .development_services_inner small.Dservices_icon5 {
            background: url({{ asset('assets/img/d-service-5.png')}}) no-repeat rgba(0, 0, 0, 0);
            display: inline-block;
            height: 70px;
            text-align: center;
            width: 115px;
        }
        .development_services_inner small.Dservices_icon6 {
            background: url({{ asset('assets/img/d-service-6.png')}}) no-repeat rgba(0, 0, 0, 0);
            display: inline-block;
            height: 70px;
            text-align: center;
            width: 115px;
        }

        .small,
        small {
            font-size: 80%;
            font-weight: 400;
        }

        .development_services_inner p {
            font-size: 19px;
            margin: 6px 2px 2px;
            color: #3d3d3d;
            min-height: 2px;
            font-weight: 600;
        }

        .development_services_inner .border-small_1 {
            position: absolute;
            top: 172px;
            left: 16%;
            transform: translateX(-50%);
            -webkit-transform: translateX(-50%);
            -moz-transform: translateX(-50%);
            -o-transform: translateX(-50%);
            width: 65px;
            border-top: 2px solid #32c6ee;
        }

        .development_services_inner span {
            display: inline-block;
            font-size: 16px/27px;
            padding: 10px 15px;
            color: #575757;
        }

        .development_services_inner span {
            display: inline-block;
            font: 16px;
            padding: 30px 0px 10px 0px;
            color: #2a2a2a;
        }

        /*
        .development_services_inner:hover {
            background: #119cdc;
            min-height: 300px;
            border: none!important;
            color: #ffffff;
        }
        */

        .frameworks_sec_outer .f-development_services_inner {
            display: inline-block;
            margin: 33px 0 0;
            padding: 15px 0;
            text-align: center;
            width: 100%;
            min-height: 255px;
        }


        .frameworks_sec_outer .f-development_services_inner small {
            background: url({{ asset('assets/img/frame-1.png')}}) no-repeat rgba(0, 0, 0, 0);
            display: inline-block;
            height: 100px;
            text-align: center;
            width: 115px;
        }

        .frameworks_sec_outer {
            background: url({{ asset('assets/img/php-frame.png')}}) right bottom no-repeat;
            background-size: cover;
            padding: 60px 0;
            margin: 50px 0px;
        }

        .frameworks_sec_outer .f-development_services_inner p {
            font-size: 20px;
            margin: 6px 2px 2px;
            color: #2a2a2a;
            min-height: 2px;
        }

        .frameworks_sec_outer .f-development_services_inner span {
            display: inline-block;
            font-size: 16px;
            padding: 30px 0 10px;
            color: #2a2a2a;
        }

        .frameworks_sec_outer .f-development_services_inner .border-small_1 {
            position: absolute;
            top: 205px;
            left: 50%;
            transform: translateX(-50%);
            -webkit-transform: translateX(-50%);
            -moz-transform: translateX(-50%);
            -o-transform: translateX(-50%);
            width: 65px;
            border-top: 2px solid #858585;
        }

        /***** Vertical *****/

        #verticals_sec_outer .development_services_inner small {
            background: url({{ asset('assets/img/pdv-1.png')}}) no-repeat rgba(0, 0, 0, 0);
            display: inline-block;
            height: 70px;
            text-align: left;
            width: 115px;
        }

        #verticals_sec_outer .development_services_inner span {
            display: inline-block;
            font-size: 16px;
            padding: 30px 15px 10px 15px;
            color: #2a2a2a;
        }
        /*
        #verticals_sec_outer .development_services_inner p {
            font-size: 20px;
            margin: 6px 12px 2px;
            color: #2a2a2a;
            min-height: 2px;
        }

        #verticals_sec_outer .development_services_inner {
            display: inline-block;
            margin: 33px 0 0;
            padding: 15px 0;
            text-align: left;
            width: 100%;

            min-height: 300px;
            transition: all .5s ease 0s;
            cursor: default;
        }*/


        /***** WHY GO *****/

        .why_go_sec_outer {
            float: left;
            padding: 60px 0;
            width: 100%;
            border-bottom: 2px solid #ebeff3;
            background-color: #fff;
            border-top: 2px solid #ebeff3;
        }

        .why_go_sec_outer .our_services_innr {
            float: left;
            width: 100%
        }

        .why_go_sec_outer .our_services_innr h3 {
            color: #000;
            font-size: 33px;
            font-weight: 600;
            margin: 8px 0 0
        }

        .why_go_sec_outer .our_services_innr h3 span {
            color: #067cbe
        }

        .why_go_sec_outer .our_services_innr p {
            color: #3c3c3c;
            font-size: 20px;
            margin: 30px 0 0
        }

        .why_go_sec_outer .our_services_innr .why_content {
            width: 100%;
            float: left;
            margin-top: 30px;
        }

        .why_go_sec_outer .our_services_innr .why_content ul {
            padding: 0;
            margin: 0;
            width: 100%;
            float: left
        }

        .why_go_sec_outer .our_services_innr .why_content ul li {
            display: inline-block;
            list-style: none;
            float: none;
            width: 100%;
            font-size: 16px;
            color: #2a2a2a;
            text-align: left;
            background: url({{ asset('assets/img/c-icon.png')}}) left 20px no-repeat;
            padding: 25px 0 0 35px;
        }

        .border_small_new_why_go {
            position: absolute;
            top: 170px;
            left: 14%;
            transform: translateX(-50%);
            -webkit-transform: translateX(-50%);
            -moz-transform: translateX(-50%);
            -o-transform: translateX(-50%);
            width: 157px;
            border-top: 2px solid #2a2a2a
        }

        .why_go_sec_outer .development_services_inner .border-small_1 {
            position: absolute;
            top: 43px;
            left: 18%;
            transform: translateX(-50%);
            -webkit-transform: translateX(-50%);
            -moz-transform: translateX(-50%);
            -o-transform: translateX(-50%);
            width: 65px;
            border-top: 2px solid #2a2a2a
        }

        .why_go_sec_outer .development_services_inner {
            display: inline-block;
            margin: 0 0 0 20px;
            padding: 0;
            text-align: center;
            width: 100%;
            min-height: 235px;
            position: relative
        }

        .why_go_sec_outer .gate_acode {
            float: left;
            margin-top: 50px;
            margin-bottom: 30px;
            text-align: center
        }

        .why_go_sec_outer .gate_acode a {
            font-size: 19px;
            border: dashed #067cbe;
            border-width: 2px;
            display: inline-block;
            color: #067cbe;
            text-transform: uppercase;
            margin: 0;
            z-index: 10;
            position: relative;
            padding: 0 50px;
            border-radius: 0!important
        }

        .why_go_sec_outer .gate_acode a:hover {
            border: dashed #e0490e;
            border-width: 2px;
            text-decoration: none;
            color: #e0490e
        }



        /***** Why Choose TiCon *****/

        /***** SERVICE NEW CSS *****/

        .services-03 {
            padding-bottom: 50px;
            position: relative;
            border-bottom: 2px solid #ebeff3;
        }

        .services-03:before,
        .services-03:after {
            content: "";
            left: 0;
            position: absolute;
            z-index: -1;
        }

        .services-03:before {
            background: url({{ asset('assets/img/shape-1.png')}}) no-repeat scroll 50% 0/cover;
            top: -150px;
            height: 100px;
            width: 200px;
        }

        .services-03:after {
            background: url({{ asset('assets/img/shape-2.png')}}) no-repeat scroll 50% 0/cover;
            top: -450px;
            height: 730px;
            /*    width: 930px;*/
        }

        .services-03 .services-content-left {
            margin-top: 250px;
            padding-right: 100px;
        }

        .services-03 .services-content-left .title {
            margin-bottom: 30px;
        }

        .services-03 .services-content-left .button-2 {
            margin-top: 30px;
        }

        .services-03 .services-right-text {
            padding-left: 50px;
            padding-top: 44px;
        }

        .services-03 .services-right-text .services-single {
            width: 50%;
        }




        .services-03 .services-right-text .services-single .services-box {
            box-shadow: 0 0px 15px 0px rgba(0, 0, 0, 0.2);
            margin: 16px 1px;
            border-radius: 15px;
            padding: 20px 15px;
            min-height: 367px;
        }

        .services-03 .services-right-text .services-single .services-box .service-icon {
            background: url({{ asset('assets/img/service-icon-shape.png')}}) no-repeat;
            height: 115px;
            margin: 0 auto;
            width: 115px;
        }

        .services-03 .services-right-text .services-single .services-box .service-icon img {
            height: 55px;
            margin: 25px;
            width: 55px;
        }

        .services-03 .services-right-text .services-single .services-box .subtitle_2 {
            padding: 10px 0;
            color: #0084cf;
            font-size: 22px;
            font-weight: 500;
        }

        .services-03 .services-right-text .services-single .services-box p {
            margin: 0;
            color: #000;
            font-size: 16px;
        }

        .button-2 {
            padding: 12px 26px;
            border: 2px solid #66d4f9;
            font-size: 16px;
            font-weight: 600;
            transition: all linear 0.3s;
            cursor: pointer;
        }

        .button-2:hover {
            border: 1px solid #66d4f9;
            transition: all linear 0.3s;
            cursor: pointer;
            background-color: #66d4f9;
            color: #ffffff;
        }

        @media only screen and (max-width: 767px) {
            .services-03 .services-right-text .services-single .services-box {
                margin: 16px;
                padding: 40px 15px;
            }
        }

        .our_services_innr p {
            font-size: 16px;
        }

        .tech_innr h3 {
            text-align: center;
            color: #000;
            font-size: 35px;
            font-weight: 600;
        }

        .tech_innr p {
            text-align: center;
            margin: 13px 111px 60px;
            font-size: 16px;
            padding-bottom: 50px;
        }

        .padd-left {
            padding-left: 50px;
        }

        .padd-top {
            padding-top: 60px;
        }

        .padd-50{
            padding-bottom: 50px;
        }

        @media only screen and (min-width: 320px) and (max-width: 768px) {
            .padd-left {
                padding-left: 0;
            }


            .our_services_innr p {
                margin: 0px 0px 0px;
            }
            .services-03 .services-right-text .services-single {
                width: 100%;
            }
            .services-03 .services-right-text {
                padding-left: 15px;
            }
        }
        body{
            overflow-x: hidden;
        }
        .development_services_inner h4.web-dev-heading{
            position: relative;
            color: #000;
            font-size: 20px;
            font-weight: 700;
            padding-bottom: 8px;
        }
        .development_services_inner h4.web-dev-heading::after{
            content: " ";
            width: 70px;
            height: 2px;
            position: absolute;
            background-color: #32c6ee;
            bottom: -7px;
            left: 0;
            
        }
        h4.web-deb-frame-name{
            position: relative;
            color: #000;
            font-size: 20px;
            font-weight: 700;
            padding-bottom: 8px;
            text-align: center;
        }
        h4.web-deb-frame-name::after{
            content: " ";
            width: 70px;
            height: 2px;
            position: absolute;
            background-color: #7f7f7f;
            bottom: -3px;
            left: 50%;
            transform: translateX(-50%);
            
        }
        .frameworks_sec_outer .f-development_services_inner p.web-dev-frame{
            font-size: 16px;
            margin-top: 6%;
            text-align: center;
            font-weight: 500;
            color: #2a2a2a;
        }
        .development_services_inner p.web-dev-pear2{
            font-size: 14px;
            margin-top: 6%;
            text-align: left;
            font-weight: 500;
            color: #2a2a2a;
        }
        /*******  PHP DEVELOPMENT PAGE CSS END *******/
    </style>
@endpush

@section('content')
    <!-- PAGE CONTANT START -->
    <section class="technology-details">
        <div class="container">
            <!--
            <div class="row">
                <div class="col-md-12">
                    <div class="technology-d-text">
                        <h3>PHP Web Development</h3>
                        <img src="assets/img/heading_line.png" alt="underline.png"><br><br>
                        <p>TiCON’s accomplished PHP developers possess hands-on experience in designing and developing scalable, reliable, rich-functionality web applications for both startups and established businesses</p>
                    </div>
                </div>
            </div>
            -->
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="technology-d-text">
                        <h3>웹 개발 서비스</h3>
                        <!-- <img src="http://206.81.15.98/ticonsys.com/assets/img/title_line.png" alt="underline.png"><br><br> -->
                        <img src="{{ asset('assets/img/title_line.png') }}" alt="underline.png"><br><br>
                        <p>한국과 방글라데시에서 신뢰할 수 있는 웹 개발 회사로서 세계의 고객에게 엔드 투 엔드 웹 개발 서비스를 제공합니다.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="development_services_inner">
                        <small class="Dservices_icon1"></small>
                        <h4 class="web-dev-heading">주문형 앱 개발 </h4>
                        <p class="web-dev-pear2"> 뛰어난 성능, 안전하고, 확장성이 있는 제품, 다양한 산업 분야에 응용 가능한 풍부한 기능의 웹, 앱 개발 서비스를 가장 경쟁력 있는 가격으로 제공합니다. </p> 
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="development_services_inner">
                        <small class="Dservices_icon2"></small>
                        <h4 class="web-dev-heading"> e-비즈니스 솔루션 </h4>
                        <p class="web-dev-pear2"> 다양한 시장 분야의 엔드 투 엔드 e-비즈니스, B2B, B2C, e-커머스 솔루션을 제공하여 고객이 디지털 시장에서 우수한 성과를 거둘 수 있도록 지원합니다. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="development_services_inner"> <small class="Dservices_icon3"></small>
                        <h4 class="web-dev-heading"> 엔터프라이즈 웹, 앱 개발 </h4>
                        <p class="web-dev-pear2"> 고성능 및 시각적 매력의 확장 가능한 기업 웹 애플리케이션 개발 솔루션을 제공합니다.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 animatable fadeInUp">
                    <div class="development_services_inner"> <small class="Dservices_icon4"></small>
                        <h4 class="web-dev-heading"> 테크놀로지 컨설턴시 </h4>
                        <p class="web-dev-pear2"> 티콘시스템의 전문가는 차별화된 가치 있는 웹, 앱 프로젝트에 적합한 테크놀로지를 선택하는 데 언제, 어디서는 최상의 서비스를 제공할 것입니다. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 animatable fadeInUp">
                    <div class="development_services_inner"> <small class="Dservices_icon5"></small>
                        <h4 class="web-dev-heading"> 프로토타이핑 & UXD </h4>
                        <p class="web-dev-pear2"> 풍부한 설계 전문 지식을 갖추고 있어 고객의 요구사항에 따라 원시 스케치부터 작업 프로토타입에 이르기까지 놀라운 경험을 고객에게 선사할 것입니다.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 animatable fadeInUp">
                    <div class="development_services_inner"> <small class="Dservices_icon6"></small>
                        <h4 class="web-dev-heading"> 서드 파티 인테그레이션 & 커스터마이제이션 </h4>
                        <p class="web-dev-pear2">웹 사이트 개발자는 서드 파티 서비스 및 구성 요소와의 안전한 인테그레이션을 위해 웹 API, 커스텀 데이터 커넥터, 웹 서비스 및 미들웨어를 만듭니다.</p>
                    </div>
                </div>
            </div>
            <div class="row padd-50">
                <div class="col-lg-4 col-md-4 col-sm-12 animatable fadeInUp">
                    <div class="development_services_inner"> <small class="Dservices_icon6"></small>
                        <h4 class="web-dev-heading"> 소프트웨어 제품 개발 </h4>
                        <p class="web-dev-pear2"> 티콘시스템의 전담 웹, 앱 개발자는 향상된 보안 및 고급 기능의 소프트웨어 제품 개발을 제공하는 데 풍부한 전문 지식을 보유하고 있습니다. </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 animatable fadeInUp">
                    <div class="development_services_inner"> <small class="Dservices_icon6"></small>
                        <h4 class="web-dev-heading"> 프런트엔드 & 백엔드 개발 </h4>
                        <p class="web-dev-pear2"> 다년간의 도메인 전문 지식과 경험은 안전하고 확장 가능하며 기능이 풍부한 프런트엔드 및 백엔드 웹 개발 서비스를 제공하는 데 도움이 될 것입니다. </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 animatable fadeInUp">
                    <div class="development_services_inner"> <small class="Dservices_icon6"></small>
                        <h4 class="web-dev-heading"> 업그레이드 & 마이그레이션 </h4>
                        <p class="web-dev-pear2"> 사용 중인 웹 테크놀로지를 업그레이드하거나 현재 웹 테크놀로지의 성능향상을 위한 다른 플랫폼으로 마이그레이션을 당사가 함께 만들어 가겠습니다. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="services" class="services-03">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 col-md-6 col-xs-12">
                    <div class="services-content-left">
                        <h2 class="title">왜 티콘시스템을 선택해야 할까요?</h2>
                        <p class="p-style">티콘시스템은 11년 이상의 풍부한 도메인 전문 지식을 바탕으로 전 세계 고객에게 엔드 투 엔드 PHP 웹 개발 서비스를 제공합니다.:</p>

                        <!-- <a href="#" class="btn btn-default button-2">Work With Us</a> -->
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-xs-12 services-right-text">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-xs-12 services-single animatable fadeInUp">
                            <div class="services-box services-box-1 text-center">
                                <div class="service-icon">
                                    <img src="{{ asset('assets/img/services-icon-01.png') }}" alt="">
                                </div>
                                <h3 class="subtitle_2">전담 계정 관리자</h3>
                                <p>전담 계정 관리자를 서비스 기간 동안 싱글 컨택 포인트로 지정하여 고객지원이 단순하고 명확합니다.</p>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-xs-12 services-single animatable fadeInUp">
                            <div class="services-box services-box-2 text-center">
                                <div class="service-icon">
                                    <img src="{{ asset('assets/img/services-icon-02.png') }}" alt="">
                                </div>
                                <h3 class="subtitle_2">
                                    가격 일치 보장</h3>
                                <p>당사는 가장 경쟁력 있는 가격정책을 보장합니다. 어떤 동등한 서비스 공급자와 비교해도 자신 있습니다.</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-xs-12 services-single animatable fadeInUp">
                            <div class="services-box services-box-3 text-center">
                                <div class="service-icon">
                                    <img src="{{ asset('assets/img/services-icon-03.png') }}" alt="">
                                </div>
                                <h3 class="subtitle_2">
                                    프로세스 & 툴</h3>
                                <p>당사는 신속하고 유연한 방법론을 따르고 최적의 실행과 성공을 보장하기 위해 시장에서 검증된 툴을 사용합니다.</p>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-xs-12 services-single animatable fadeInUp">
                            <div class="services-box services-box-4 text-center">
                                <div class="service-icon">
                                    <img src="{{ asset('assets/img/services-icon-04.png') }}" alt="">
                                </div>
                                <h3 class="subtitle_2">경험이 풍부한 팀</h3>
                                <p>당사의 개발팀은 평균 4년 이상 상업용 등급 앱을 제공한 풍부한 경험과 재능있는 인재로 구성되어 있습니다.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section>
        <div class="container">

            <div class="row">
                <div class="technology-d-text">
                    <h3>테크놀로지 스택</h3>
                    <img src="{{ asset('assets/img/title_line.png" alt="underline.png') }}"><br><br>
                    <p>차세대  웹 애플리케이션을 위한 최신 테크놀로지 솔루션을 얻으려면.</p>
                </div>
            </div>

            <div class="row tech-details">
                <div class="t-tabs">


                    <div class="tab animatable fadeInUp">
                        <button class="tab-toggle active">프런트엔드</button>
                    </div>

                    <div class="content active">
                        <div class="descrip_pad">
                            <p class="sec-2_pdes com_font30">프런트엔드</p>
                            <!-- <p class="sec-3_pdes">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt.</p> -->
                            <ul class="sec-4_uldes" style="margin:0;padding:0;">
                                <li class="sec_3_li features_bdr_right" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="loading"></div>
                                    <span class="sec_fe_span com_font16">HTML 5</span>
                                </li>
                                <li class="sec_3_li features_mrgn_left" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="loading"></div>
                                    <span class="sec_fe_span com_font16">Jquery</span>
                                </li>
                                <li class="sec_3_li features_bdr_right" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="loading"></div>
                                    <span class="sec_fe_span com_font16">React</span>
                                </li>
                                <li class="sec_3_li features_mrgn_left" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="loading"></div>
                                    <span class="sec_fe_span com_font16">CSS 3</span>
                                </li>
                                <li class="sec_3_li features_bdr_right" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="loading"></div>
                                    <span class="sec_fe_span com_font16">AngularJS</span>
                                </li>
                                <li class="sec_3_li features_mrgn_left" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="loading"></div>
                                    <span class="sec_fe_span com_font16">Bootstrap</span>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="tab animatable fadeInUp">
                        <button class="tab-toggle">백엔드</button>
                    </div>

                    <div class="content">
                        <div class="descrip_pad">
                            <p class="sec-2_pdes com_font30">백엔드</p>
                            <!-- <p class="sec-3_pdes">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt.</p> -->
                            <ul class="sec-4_uldes" style="margin:0;padding:0;">
                                <li class="sec_3_li features_bdr_right" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="loading"></div>
                                    <span class="sec_fe_span com_font16">PHP</span>
                                </li>
                                <li class="sec_3_li features_mrgn_left" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="loading"></div>
                                    <span class="sec_fe_span com_font16">Node.js</span>
                                </li>
                                <li class="sec_3_li features_bdr_right" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="loading"></div>
                                    <span class="sec_fe_span com_font16">Python</span>
                                </li>
                                <li class="sec_3_li features_bdr_left" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="loading"></div>
                                    <span class="sec_fe_span com_font16">ASP.NET</span>
                                </li>                                
                            </ul>
                        </div>
                    </div>

                    <div class="tab animatable fadeInUp">
                        <button class="tab-toggle">데이터베이스</button>
                    </div>

                    <div class="content">
                        <div class="descrip_pad">
                            <p class="sec-2_pdes com_font30">데이터베이스</p>
                            <!-- <p class="sec-3_pdes">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt.</p> -->
                            <ul class="sec-4_uldes" style="margin:0;padding:0;">
                                <li class="sec_3_li features_bdr_right" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="loading"></div>
                                    <span class="sec_fe_span com_font16">MySQL</span>
                                </li>
                                <li class="sec_3_li features_mrgn_left" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="loading"></div>
                                    <span class="sec_fe_span com_font16">Oracle</span>
                                </li>
                                <li class="sec_3_li features_bdr_right" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="loading"></div>
                                    <span class="sec_fe_span com_font16">MongoDB</span>
                                </li>
                                <li class="sec_3_li features_mrgn_left" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="loading"></div>
                                    <span class="sec_fe_span com_font16">SQL Server</span>
                                </li>
                                <li class="sec_3_li features_bdr_right" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="loading"></div>
                                    <span class="sec_fe_span com_font16">Redis</span>
                                </li>
                                <li class="sec_3_li features_mrgn_left" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="loading"></div>
                                    <span class="sec_fe_span com_font16">PostgreSQL</span>
                                </li>

                            </ul>
                        </div>
                    </div>


                    <div class="tab animatable fadeInUp">
                        <button class="tab-toggle">검색</button>
                    </div>
                    <div class="content">
                        <div class="descrip_pad">
                            <p class="sec-2_pdes com_font30">검색</p>
                            <!-- <p class="sec-3_pdes">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt.</p> -->
                            <ul class="sec-4_uldes" style="margin:0;padding:0;">
                                <li class="sec_3_li features_bdr_right" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="Back-Up Camera"></div>
                                    <span class="sec_fe_span com_font16">Elasticsearch</span>
                                </li>
                                <li class="sec_3_li features_mrgn_left" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="Bluetooth"></div>
                                    <span class="sec_fe_span com_font16">Solr</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="tab animatable fadeInUp">
                        <button class="tab-toggle">CMS/E-커머스</button>
                    </div>
                    <div class="content">
                        <div class="descrip_pad">
                            <p class="sec-2_pdes com_font30">CMS/E-커머스</p>
                            <!-- <p class="sec-3_pdes">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt.</p> -->
                            <ul class="sec-4_uldes" style="margin:0;padding:0;">
                                <li class="sec_3_li features_bdr_right" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="loading"></div>
                                    <span class="sec_fe_span com_font16">Wordpress</span>
                                </li>
                                <li class="sec_3_li features_mrgn_left" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="loading"></div>
                                    <span class="sec_fe_span com_font16">Magento</span>
                                </li>
                                <li class="sec_3_li features_bdr_right" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="loading"></div>
                                    <span class="sec_fe_span com_font16">Drupal</span>
                                </li>
                                <li class="sec_3_li features_mrgn_left" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="loading"></div>
                                    <span class="sec_fe_span com_font16">Opencart</span>
                                </li>
                                <li class="sec_3_li features_bdr_right" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="loading"></div>
                                    <span class="sec_fe_span com_font16">SiteCore</span>
                                </li>
                                <li class="sec_3_li features_mrgn_left" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="loading"></div>
                                    <span class="sec_fe_span com_font16">Shopify</span>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="tab animatable fadeInUp">
                        <button class="tab-toggle">API</button>
                    </div>
                    <div class="content">
                        <div class="descrip_pad">
                            <p class="sec-2_pdes com_font30">API</p>
                            <!-- <p class="sec-3_pdes">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt.</p> -->
                            <ul class="sec-4_uldes" style="margin:0;padding:0;">
                                <li class="sec_3_li features_bdr_right" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="Back-Up Camera"></div>
                                    <span class="sec_fe_span com_font16">REST</span>
                                </li>
                                <li class="sec_3_li features_mrgn_left" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="Bluetooth"></div>
                                    <span class="sec_fe_span com_font16">SOAP</span>
                                </li>
                                <li class="sec_3_li features_bdr_right" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="Heated Front Seats, Heated Seats"></div>
                                    <span class="sec_fe_span com_font16">JSON</span>
                                </li>
                                <li class="sec_3_li features_bdr_left" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="Heated Front Seats, Heated Seats"></div>
                                    <span class="sec_fe_span com_font16">XML</span>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="tab animatable fadeInUp">
                        <button class="tab-toggle">캐시</button>
                    </div>
                    <div class="content">
                        <div class="descrip_pad">
                            <p class="sec-2_pdes com_font30">캐시</p>
                            <!-- <p class="sec-3_pdes">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt.</p> -->
                            <ul class="sec-4_uldes" style="margin:0;padding:0;">
                                <li class="sec_3_li features_bdr_right" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="Back-Up Camera"></div>
                                    <span class="sec_fe_span com_font16">Memcached</span>
                                </li>
                                <li class="sec_3_li features_mrgn_left" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png') }}" alt="loading"></div>
                                    <span class="sec_fe_span com_font16">Redis</span>
                                </li>
                            </ul>
                        </div>
                    </div>



                </div>
            </div>

        </div>
    </section>



    <section class="frameworks_sec_outer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="our_services_innr">
                        <h3> <span> 우리의 </span>  프레임워크 </h3>
                        <p class="web-dev-frame"> 우리의 해외 PHP 웹 개발 자회사는 귀사의 비즈니스 특정 요구에 맞는 고급 PHP 웹 사이트를 충족하기 위해 최신 및 최고의 모든 PHP 프레임워크를 연구합니다. </p>
                        <span></span> </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-3 col-md-3 col-sm-12  wow">
                    <div class="f-development_services_inner animatable fadeInUp"> <small class="Dservices_icon1"></small>
                        <h4 class="web-deb-frame-name"> 코드이그나이터 </h4>
                        <p class="web-dev-frame"> 우리의 PHP 개발자 팀은 다양한 비즈니스 분야의 고객을 위해 확장 가능한 코드이그나이터 솔루션을 개발합니다.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12  wow">
                    <div class="f-development_services_inner animatable fadeInUp"> <small class="Dservices_icon3"></small>
                        <h4 class="web-deb-frame-name"> Yii 개발 </h4>
                        <p class="web-dev-frame"> 우리는 성장하는 기업과 스타트업을 위한 강력하고 비용 효율적인 Yii 개발 솔루션을 제공합니다.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12 wow">

                    <div class="f-development_services_inner animatable fadeInUp"> <small class="Dservices_icon4"></small>
                        <h4 class="web-deb-frame-name"> 라라벨 개발 </h4>
                        <p class="web-dev-frame"> 우리의 PHP 프로그래머는 비즈니스 기업을 위한 엔드 투 엔드 커스터마이즈드 라라벨 개발 솔루션을 제공합니다. </p>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-3 col-sm-12  wow fadeIn animated animated" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                    <div class="f-development_services_inner animatable fadeInUp"> <small class="Dservices_icon1"></small>
                        <p> CakePHP Development </p>
                        <span> Our team of PHP developers develops scalable CakePHP solutions for customers across various business verticals.</span>
                        </div>
                </div> -->

                

                <div class="col-lg-3 col-md-3 col-sm-12 wow">
                    <div class="f-development_services_inner animatable fadeInUp"> <small class="Dservices_icon2"></small>
                        <h4 class="web-deb-frame-name"> 기타 PHP 프레임워크</h4>
                        <p class="web-dev-frame"> 우리는 또한 젠드, CakePHP, 심포니, 팔콘을 비롯한 다른 프레임워크에 대한 PHP 개발도 제공합니다. </p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section id="verticals_sec_outer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="our_services_innr">
                        <h3><span>웹 개발 버티컬</span> </h3>
                        <p> 방글라데시와 한국의 유명한 개발 회사 중 한 곳으로서, 우리는 고객의 다양한 요구에 부응하기 위해 다양한 비즈니스 분야를 다루고 있습니다.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="development_services_inner animatable fadeInUp">
                        <small class="Dservices_icon1"></small>
                        <h4 class="web-dev-heading">온라인 마켓플레이스 & 포털 </h4>
                        <p class="web-dev-pear2"> 동일한 플랫폼에서 다양한 제품을 찾을 수 있는 여러 공급업체, 상점, 브랜드 또는 개인으로부터 공급받을 수 있는 온라인 마켓플레이스 구축에 대한 전문 지식을 보유하고 있습니다.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="development_services_inner animatable fadeInUp"> <small class="Dservices_icon2"></small>
                        <h4 class="web-dev-heading">회계 앱</h4>
                        <p class="web-dev-pear2">우리가 개발한 회계 애플리케이션은 효율적이고 정확하며 기업이 한 곳에서 재무 데이터를 관리 할 수 ​​있도록 지원합니다.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="development_services_inner animatable fadeInUp"> <small class="Dservices_icon3"></small>
                        <h4 class="web-dev-heading">E-커머스 웹사이트</h4>
                        <p class="web-dev-pear2">우리의 풍부하고, 성능이 높고, 확장 가능하며 안전한 E-커머스 웹사이트는 즉시 캐주얼 브라우저를 충성스러운 고객으로 전환합니다.</p>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-bottom: 40px;">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="development_services_inner animatable fadeInUp"> <small class="Dservices_icon4"></small>
                        <h4 class="web-dev-heading">커스텀 비즈니스 앱</h4>
                        <p class="web-dev-pear2">특정 비즈니스 프로세스에 맞게 구축된 이 애플리케이션은 직원이 가정, 이동 중, 또는 고객으로부터 효과적으로 작업할 수 있도록 직장에서 자유롭게 작업할 수 있도록 지원합니다.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="development_services_inner animatable fadeInUp"> <small class="Dservices_icon5"></small>
                        <h4 class="web-dev-heading">CRM 시스템</h4>
                        <p class="web-dev-pear2">우리의 커스텀 CRM 비즈니스 웹 앱을 통해 기업은 고객 데이터 및 고객 상호 작용을 관리하고, 비즈니스 정보에 접속하며, 세일즈, 마케팅 및 고객 지원을 자동화할 수 있습니다.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="development_services_inner animatable fadeInUp"> <small class="Dservices_icon6"></small>
                        <h4 class="web-dev-heading">소셜 네트워킹 앱</h4>
                        <p class="web-dev-pear2"> 우리의 전문가들은 기업이 재미있고 확장 가능한 대화형 콘텐츠를 사용하여 고객과 연결할 수 있도록 기능이 풍부한 소셜 미디어 앱을 개발합니다..</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- PAGE CONTANT END -->
@endsection

<!-- ADD JS HERE -->
@push('js')
    <script>
        // ----------------- Variables

        wrapper = $(".t-tabs");
        tabs = wrapper.find(".tab");
        tabToggle = wrapper.find(".tab-toggle");

        // ----------------- Functions

        function openTab() {
            var content = $(this).parent().next(".content"),
                activeItems = wrapper.find(".active");

            if (!$(this).hasClass('active')) {
                $(this).add(content).add(activeItems).toggleClass('active');
                wrapper.css('min-height', content.outerHeight());
            }
        };

        // ----------------- Interactions

        tabToggle.on('click', openTab);

        // ----------------- Constructor functions

        $(window).load(function() {
            tabToggle.first().trigger('click');
        });
    </script>
@endpush

<!-- PAGE END -->
