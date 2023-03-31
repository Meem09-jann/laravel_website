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
            background: url({{ asset('assets/img/php_page_service_sprite040618.png') }}) no-repeat rgba(0, 0, 0, 0);
            display: inline-block;
            height: 70px;
            text-align: center;
            width: 115px;
        }

        .development_services_inner small.Dservices_icon1 {
            background: url({{ asset('assets/img/d-service-1.png') }}) no-repeat rgba(0, 0, 0, 0);
            display: inline-block;
            height: 70px;
            text-align: center;
            width: 115px;
        }
        .development_services_inner small.Dservices_icon2 {
            background: url({{ asset('assets/img/d-service-2.png') }}) no-repeat rgba(0, 0, 0, 0);
            display: inline-block;
            height: 70px;
            text-align: center;
            width: 115px;
        }
        .development_services_inner small.Dservices_icon3 {
            background: url({{ asset('assets/img/d-service-3.png') }}) no-repeat rgba(0, 0, 0, 0);
            display: inline-block;
            height: 70px;
            text-align: center;
            width: 115px;
        }
        .development_services_inner small.Dservices_icon4 {
            background: url({{ asset('assets/img/d-service-4.png') }}) no-repeat rgba(0, 0, 0, 0);
            display: inline-block;
            height: 70px;
            text-align: center;
            width: 115px;
        }
        .development_services_inner small.Dservices_icon5 {
            background: url({{ asset('assets/img/d-service-5.png') }}) no-repeat rgba(0, 0, 0, 0);
            display: inline-block;
            height: 70px;
            text-align: center;
            width: 115px;
        }
        .development_services_inner small.Dservices_icon6 {
            background: url("{{ asset('assets/img/d-service-6.png') }}") no-repeat rgba(0, 0, 0, 0);
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

        
        .frameworks_sec_outer .f-development_services_inner {
            display: inline-block;
            margin: 33px 0 0;
            padding: 15px 0;
            text-align: center;
            width: 100%;
            min-height: 255px;
        }


        .frameworks_sec_outer .f-development_services_inner small {
            background: url("{{ asset('assets/img/frame-1.png') }}") no-repeat rgba(0, 0, 0, 0);
            display: inline-block;
            height: 100px;
            text-align: center;
            width: 115px;
        }

        .frameworks_sec_outer {
            background: url("{{ asset('assets/img/php-frame.png') }}") right bottom no-repeat;
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
            background: url("{{ asset('assets/img/pdv-1.png') }}") no-repeat rgba(0, 0, 0, 0);
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
            background: url("{{ asset('assets/img/c-icon.png') }}") left 20px no-repeat;
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
            background: url("{{ asset('assets/img/shape-1.png')}}") no-repeat scroll 50% 0/cover;
            top: -150px;
            height: 100px;
            width: 200px;
        }

        .services-03:after {
            background: url("{{ asset('assets/img/shape-2.png')}}") no-repeat scroll 50% 0/cover;
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
            background: url("{{ asset('assets/img/service-icon-shape.png')}}") no-repeat;
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
                        <h3>우리의 모바일 앱 개발 서비스</h3>
                        <img src="{{ asset('assets/img/title_line.png')}}" alt="underline.png"><br><br>
                        <p>방글라데시와 대한민국의 신뢰할 수 있는 모바일 앱 개발 회사로서, 우리는 네이티브 애플리케이션의 생성 및 제공에서 업계를 선도합니다. 우리는 빠르게 성장하는 스타트업과 선도기업을 위한 신뢰할 수 있는 모바일 앱 개발 파트너입니다. 실제 비즈니스 가치를 추가하고 고객 환경을 개선하며, 수익을 창출하는 모바일 솔루션을 구축할 수 있도록 지원합니다. 앱의 초기 개념화에서 앱 스토어의 최종 배포에 이르기까지 엔드 투 엔드 모빌리티 솔루션을 제공합니다.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="development_services_inner">
                        <small class="Dservices_icon1"></small>
                        <h4 class="web-dev-heading"> 테크놀로지 컨설팅 </h4>
                        <p class="web-dev-pear2"> 우리의 전문 컨설턴트는 가장 적합한 테크놀로지 스택과 잘 고안된 시스템 아키텍처를 효과적으로 구현할 수 있는 테크놀로지 컨설팅을 제공합니다. </p> 
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="development_services_inner">
                        <small class="Dservices_icon2"></small>
                        <h4 class="web-dev-heading"> 커스텀 모바일 앱 개발 </h4>
                        <p class="web-dev-pear2"> 우리의 다년간 축적된 도메인 전문 지식은 안전하고 확장 가능하며 기능이 풍부한 고성능 모바일 애플리케이션을 제공하는 데 도움이 됩니다. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="development_services_inner"> <small class="Dservices_icon3"></small>
                        <h4 class="web-dev-heading">엔터프라이즈 지향적 솔루션</h4>
                        <p class="web-dev-pear2"> 비즈니스의 특정 요구 사항 및 요구 사항에 따른 고성능의 확장 가능한 기업 지향적 모바일 솔루션을 얻을 수 있습니다.</p>
                    </div>
                </div>
            </div>
            <div class="row padd-50">
                <div class="col-lg-4 col-md-4 col-sm-12 animatable fadeInUp">
                    <div class="development_services_inner"> <small class="Dservices_icon4"></small>
                        <h4 class="web-dev-heading"> QA 및 테스트 서비스 </h4>
                        <p class="web-dev-pear2"> 프로젝트 초기 단계부터 전문품질 분석가를 루프에 배치하여 모든 브라우저와 화면에서 앱이 원활하게 실행되도록 전문 품질분석가를 배치했습니다</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 animatable fadeInUp">
                    <div class="development_services_inner"> <small class="Dservices_icon5"></small>
                        <h4 class="web-dev-heading"> 앱 마이그레이션 & 임프루브먼트스 </h4>
                        <p class="web-dev-pear2"> 기존 앱을 다른 플랫폼으로 전환하거나 현재 버전의 모바일 앱을 업그레이드하려는 경우 모바일 앱 개발자가 언제든지 도와드릴 수 있습니다.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 animatable fadeInUp">
                    <div class="development_services_inner"> <small class="Dservices_icon6"></small>
                        <h4 class="web-dev-heading"> 성능 모니터링 & 감사</h4>
                        <p class="web-dev-pear2"> 우리의 모바일 앱 개발자는 또한 모바일 앱의 성능을 분석하고 엄격한 보안 감사를 수행하여 최적의 성능과 보안을 보장합니다.</p>
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
                        <h2 class="title">왜 TiCON을 선택해야 할까요?</h2>
                        <p class="p-style">TiCON은 전 세계 고객에게 엔드 투 엔드 모바일 앱 개발 서비스를 제공하는 데 있어 11년 이상의 풍부한 도메인 전문 지식을 보유하고 있습니다. 다음은 몇 가지 판매 가치 제안입니다.</p>

                        <!-- <a href="#" class="btn btn-default button-2">Work With Us</a> -->
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-xs-12 services-right-text">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-xs-12 services-single animatable fadeInUp">
                            <div class="services-box services-box-1 text-center">
                                <div class="service-icon">
                                    <img src="{{ asset('assets/img/services-icon-01.png')}}" alt="">
                                </div>
                                <h3 class="subtitle_2">전담 계정 관리자</h3>
                                <p>전담 계정 관리자를 기간 내내 단일 접촉 지점으로 지정합니다.</p>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-xs-12 services-single animatable fadeInUp">
                            <div class="services-box services-box-2 text-center">
                                <div class="service-icon">
                                    <img src="{{ asset('assets/img/services-icon-02.png')}}" alt="">
                                </div>
                                <h3 class="subtitle_2">
                                    가격 일치 보장</h3>
                                <p>당신이 얻을 수 있다면, 우리는 공평한 공급자로부터 더 낮은 견적 가격에 맞출 것입니다!</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-xs-12 services-single animatable fadeInUp">
                            <div class="services-box services-box-3 text-center">
                                <div class="service-icon">
                                    <img src="{{ asset('assets/img/services-icon-03.png')}}" alt="">
                                </div>
                                <h3 class="subtitle_2">
                                    프로세스 & 도구</h3>
                                <p>우리는 민첩한 방법론을 따르고 최적의 실행과 성공을 보장하기 위해 입증된 도구를 사용합니다.</p>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-xs-12 services-single animatable fadeInUp">
                            <div class="services-box services-box-4 text-center">
                                <div class="service-icon">
                                    <img src="{{ asset('assets/img/services-icon-04.png')}}" alt="">
                                </div>
                                <h3 class="subtitle_2">경험이 풍부한 팀</h3>
                                <p>우리 팀은 평균 4년 이상 상업용 등급 앱을 제공한 경험이 있습니다.</p>
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
                    <img src="{{ asset('assets/img/title_line.png')}}" alt="underline.png"><br><br>
                    <p>여러 가지 복잡한 수준들의 기업 솔루션을 구축하는 데 있어 견고한 테크놀로지와 깊은 전문 지식을 보유하고 있습니다. 비즈니스 프로세스 관리, 리소스 계획, 고객 관계 관리, 협업 및 기타 비즈니스 도메인에 대한 경험을 통해 고객에게 최상의 맞춤형 솔루션을 제공할 수 있습니다.</p>
                </div>
            </div>

            <div class="row tech-details" style="min-height: 400px;padding-bottom: 4%;">
                <div class="t-tabs">


                    <div class="tab animatable fadeInUp">
                        <button class="tab-toggle active">애플리케이션 플랫폼</button>
                    </div>

                    <div class="content active">
                        <div class="descrip_pad">
                            <p class="sec-2_pdes com_font30">애플리케이션 플랫폼</p>
                            <!-- <p class="sec-3_pdes">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt.</p> -->
                            <ul class="sec-4_uldes" style="margin:0;padding:0;">
                                <li class="sec_3_li features_bdr_right" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png')}}" alt="Back-Up Camera"></div>
                                    <span class="sec_fe_span com_font16">iOS</span>
                                </li>
                                <li class="sec_3_li features_mrgn_left" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png')}}" alt="Bluetooth"></div>
                                    <span class="sec_fe_span com_font16">Android</span>
                                </li>
                                <li class="sec_3_li features_bdr_right" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png')}}" alt="Heated Front Seats, Heated Seats"></div>
                                    <span class="sec_fe_span com_font16">Windows</span>
                                </li>
                                <li class="sec_3_li features_mrgn_left" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png')}}" alt="Navigation"></div>
                                    <span class="sec_fe_span com_font16">Cross Platform</span>
                                </li>
                                <li class="sec_3_li features_bdr_right" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png')}}" alt="ABS(Anti-Lock Brakes)"></div>
                                    <span class="sec_fe_span com_font16">Legacy</span>
                                </li>
                                <li class="sec_3_li features_mrgn_left" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png')}}" alt="Airbags"></div>
                                    <span class="sec_fe_span com_font16">Mobile Web</span>
                                </li>


                            </ul>
                        </div>
                    </div>

                    <div class="tab animatable fadeInUp">
                        <button class="tab-toggle">미들웨어</button>
                    </div>

                    <div class="content">
                        <div class="descrip_pad">
                            <p class="sec-2_pdes com_font30">미들웨어</p>
                           <ul class="sec-4_uldes" style="margin:0;padding:0;">
                                <li class="sec_3_li features_bdr_right" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png')}}" alt="Back-Up Camera"></div>
                                    <span class="sec_fe_span com_font16">JSON, REST, APIs, SXML, SOAP</span>
                                </li>
                                <li class="sec_3_li features_mrgn_left" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png')}}" alt="Bluetooth"></div>
                                    <span class="sec_fe_span com_font16">Third-Party Web Services</span>
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
                            <ul class="sec-4_uldes" style="margin:0;padding:0;">
                                <li class="sec_3_li features_bdr_right" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png')}}" alt="Back-Up Camera"></div>
                                    <span class="sec_fe_span com_font16">Database</span>
                                </li>

                                <li class="sec_3_li features_bdr_left" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png')}}" alt="Heated Front Seats, Heated Seats"></div>
                                    <span class="sec_fe_span com_font16">Backend Different Application</span>
                                </li>

                            </ul>
                        </div>
                    </div>


                    <div class="tab animatable fadeInUp">
                        <button class="tab-toggle">프레임워크 및 컴포넌트</button>
                    </div>
                    <div class="content">
                        <div class="descrip_pad">
                            <p class="sec-2_pdes com_font30">프레임워크 및 컴포넌트</p>
                            <ul class="sec-4_uldes" style="margin:0;padding:0;">
                                <li class="sec_3_li features_bdr_right" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png')}}" alt="Back-Up Camera"></div>
                                    <span class="sec_fe_span com_font16">Android Studio</span>
                                </li>
                                <li class="sec_3_li features_mrgn_left" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png')}}" alt="Bluetooth"></div>
                                    <span class="sec_fe_span com_font16">Visual Studio</span>
                                </li>
                                <li class="sec_3_li features_bdr_right" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png')}}" alt="Heated Front Seats, Heated Seats"></div>
                                    <span class="sec_fe_span com_font16">Swift</span>
                                </li>
                                <li class="sec_3_li features_mrgn_left" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png')}}" alt="Navigation"></div>
                                    <span class="sec_fe_span com_font16">Open GLES</span>
                                </li>
                                <li class="sec_3_li features_bdr_right" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png')}}" alt="ABS(Anti-Lock Brakes)"></div>
                                    <span class="sec_fe_span com_font16">Objective C/C++</span>
                                </li>
                                <li class="sec_3_li features_mrgn_left" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png')}}" alt="Airbags"></div>
                                    <span class="sec_fe_span com_font16">JavaScript</span>
                                </li>
                                <li class="sec_3_li features_bdr_right" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png')}}" alt="City Braking Assist"></div>
                                    <span class="sec_fe_span com_font16">ORM’s</span>
                                </li>
                                <li class="sec_3_li features_bdr_right" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png')}}" alt="City Braking Assist"></div>
                                    <span class="sec_fe_span com_font16">CoreData</span>
                                </li>
                                <li class="sec_3_li features_bdr_right" style="">
                                    <div class="fe-img"><img src="{{ asset('assets/img/circle-dot.png')}}" alt="City Braking Assist"></div>
                                    <span class="sec_fe_span com_font16">RestKitur</span>
                                </li>
                            </ul>
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
