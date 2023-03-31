<!-- PAGE START -->
@extends('layouts.master')

<!-- ADD CSS HERE -->
@push('css')
    <style>
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

        /*.development_services_inner small.Dservices_icon1,
        .development_services_inner:hover small.Dservices_icon1 {
            background-position: 20px -10px;
        }
        */
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
    </style>
@endpush

@section('content')
    <!-- PAGE CONTANT START -->
    <section class="technology-details">
        <div class="container">
            
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="technology-d-text">
                        <h3>Web Development Services</h3>
                        <img src="{{ asset('assets/img/title_line.png') }}" alt="underline.png"><br><br>
                        <p>Counted among trusted web development companies in Bangladesh and South Korea, we provide end-to-end web development services to our clients spreading all across the globe.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="development_services_inner">
                        <small class="Dservices_icon1"></small>
                        <h4 class="web-dev-heading"> Custom Web App Development </h4>
                        <p class="web-dev-pear2"> Get secure, scalable, high performing and feature packed web app development services catering to different industry verticals at market leading prices. </p> 
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="development_services_inner">
                        <small class="Dservices_icon2"></small>
                        <h4 class="web-dev-heading"> e-Business Solutions </h4>
                        <p class="web-dev-pear2"> We provide end-to-end e-Business, B2B and e-Commerce solutions for different market verticals to help our clients excel in the digital marketplace. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="development_services_inner"> <small class="Dservices_icon3"></small>
                        <h4 class="web-dev-heading"> Enterprise Web App Development </h4>
                        <p class="web-dev-pear2"> Providing scalable enterprises web application development solutions that are known for high performance and visual appeal.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 animatable fadeInUp">
                    <div class="development_services_inner"> <small class="Dservices_icon4"></small>
                        <h4 class="web-dev-heading"> Technology Consultancy </h4>
                        <p class="web-dev-pear2"> If you need any help in choosing the right technology for your next web app project, feel free to contact us and our consultants are ready to help you. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 animatable fadeInUp">
                    <div class="development_services_inner"> <small class="Dservices_icon5"></small>
                        <h4 class="web-dev-heading"> Protyping & UXD </h4>
                        <p class="web-dev-pear2"> We have rich design expertise to incrementally produce stunning experiences from raw sketches to working prototypes as per your requirements.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 animatable fadeInUp">
                    <div class="development_services_inner"> <small class="Dservices_icon6"></small>
                        <h4 class="web-dev-heading"> Third Party Integration & Customization </h4>
                        <p class="web-dev-pear2"> Our website developers create web APIs, custom data connectors, web services and middleware for secure integration with third-party services and components.</p>
                    </div>
                </div>
            </div>
            <div class="row padd-50">
                <div class="col-lg-4 col-md-4 col-sm-12 animatable fadeInUp">
                    <div class="development_services_inner"> <small class="Dservices_icon6"></small>
                        <h4 class="web-dev-heading"> Software Product Development </h4>
                        <p class="web-dev-pear2"> Our dedicated web app developers have rich expertise in providing software product development that are known for enhanced security and advanced features. </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 animatable fadeInUp">
                    <div class="development_services_inner"> <small class="Dservices_icon6"></small>
                        <h4 class="web-dev-heading"> Frontend & Backend Development </h4>
                        <p class="web-dev-pear2"> Our years of domain expertise helps us in providing secure, scalable, and feature packed frontend & backend web development services. </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 animatable fadeInUp">
                    <div class="development_services_inner"> <small class="Dservices_icon6"></small>
                        <h4 class="web-dev-heading"> Upgradation & Migration </h4>
                        <p class="web-dev-pear2"> If you want to upgrade your outdated web technology or migrate current web technology to any other platform, you can contact TiCON. </p>
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
                        <h2 class="title">Why Choose TiCON?</h2>
                        <p class="p-style">TiCON has 11+ years of rich domain expertise in providing end-to-end PHP web development services to its clients all over the world. Here are some of the USPs:</p>

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
                                <h3 class="subtitle_2">Dedicated A/c Manager</h3>
                                <p>We depute dedicated Account Managers as your Single-Point Of-Contact during the entire.</p>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-xs-12 services-single animatable fadeInUp">
                            <div class="services-box services-box-2 text-center">
                                <div class="service-icon">
                                    <img src="{{ asset('assets/img/services-icon-02.png') }}" alt="">
                                </div>
                                <h3 class="subtitle_2">
                                    Price Match Guaranteed</h3>
                                <p>We'll price-match a lower quote from an equitable provider, if you can get one!</p>
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
                                    Processes & Tools</h3>
                                <p>We follow agile methodology and use proven tools to ensure optimum execution and success.</p>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-xs-12 services-single animatable fadeInUp">
                            <div class="services-box services-box-4 text-center">
                                <div class="service-icon">
                                    <img src="{{ asset('assets/img/services-icon-04.png') }}" alt="">
                                </div>
                                <h3 class="subtitle_2">Experienced Team</h3>
                                <p>Our team has an average 4+ years experience in delivering commercial grade apps.</p>
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
                    <h3>Technology Stack</h3>
                    <img src="{{ asset('assets/img/title_line.png') }}" alt="underline.png"><br><br>
                    <p>To get latest technological solutions for next generation  web applications.</p>
                </div>
            </div>

            <div class="row tech-details">
                <div class="t-tabs">


                    <div class="tab animatable fadeInUp">
                        <button class="tab-toggle active">FRONT-END</button>
                    </div>

                    <div class="content active">
                        <div class="descrip_pad">
                            <p class="sec-2_pdes com_font30">FRONT-END</p>
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
                        <button class="tab-toggle">Back-End</button>
                    </div>

                    <div class="content">
                        <div class="descrip_pad">
                            <p class="sec-2_pdes com_font30">Back-End</p>
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
                        <button class="tab-toggle">Database</button>
                    </div>

                    <div class="content">
                        <div class="descrip_pad">
                            <p class="sec-2_pdes com_font30">Database</p>
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
                        <button class="tab-toggle">Search</button>
                    </div>
                    <div class="content">
                        <div class="descrip_pad">
                            <p class="sec-2_pdes com_font30">Search</p>
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
                        <button class="tab-toggle">CMS/E-Commerce</button>
                    </div>
                    <div class="content">
                        <div class="descrip_pad">
                            <p class="sec-2_pdes com_font30">CMS/E-Commerce</p>
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
                        <button class="tab-toggle">CACHE</button>
                    </div>
                    <div class="content">
                        <div class="descrip_pad">
                            <p class="sec-2_pdes com_font30">CACHE</p>
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
                        <h3> <span> Our </span> Frameworks </h3>
                        <p class="web-dev-frame"> Our offshore PHP web development company works on all latest and best PHP frameworks to ensure advance PHP websites catering to the specific needs of your business. </p>
                        <span></span> </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-3 col-md-3 col-sm-12  wow">
                    <div class="f-development_services_inner animatable fadeInUp"> <small class="Dservices_icon1"></small>
                        <h4 class="web-deb-frame-name"> CodeIgniter </h4>
                        <p class="web-dev-frame"> Our team of PHP developers develops scalable CodeIgniter solutions for customers across various business verticals.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12  wow">
                    <div class="f-development_services_inner animatable fadeInUp"> <small class="Dservices_icon3"></small>
                        <h4 class="web-deb-frame-name"> Yii Development </h4>
                        <p class="web-dev-frame"> We provide robust and cost-effective Yii development solutions for growing businesses and startups.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12 wow">

                    <div class="f-development_services_inner animatable fadeInUp"> <small class="Dservices_icon4"></small>
                        <h4 class="web-deb-frame-name"> Laravel Development </h4>
                        <p class="web-dev-frame"> Our team of PHP programmers offers end-to-end customized Laravel development solutions for your business enterprise. </p>
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
                        <h4 class="web-deb-frame-name"> Other PHP Frameworks</h4>
                        <p class="web-dev-frame"> We also provide PHP development on other frameworks including Zend, CakePHP, Symfony, Phalcon, to name a few. </p>
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
                        <h3><span>Web Development Verticals</span> </h3>
                        <p> Being one of the reputed development companies in Bangladesh And South Korea, we cover a wide array of business verticals to cater to variegated demands of customers.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="development_services_inner animatable fadeInUp">
                        <small class="Dservices_icon1"></small>
                        <h4 class="web-dev-heading">Online Marketplaces &amp; Portals</h4>
                        <p class="web-dev-pear2"> We have expertise in building an online market place where one can find a wide range of products coming from multiple vendors, shops, brands, or persons, in the same platform.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="development_services_inner animatable fadeInUp"> <small class="Dservices_icon2"></small>
                        <h4 class="web-dev-heading">Accounting Apps</h4>
                        <p class="web-dev-pear2">Our developed accounting applications are efficient and accurate and empower businesses to manage their financial data from one 
                        central location.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="development_services_inner animatable fadeInUp"> <small class="Dservices_icon3"></small>
                        <h4 class="web-dev-heading">E-Commerce Websites</h4>
                        <p class="web-dev-pear2">Our feature rich, high performing, scalable and secure ecommerce websites instantly converts casual browsers to loyal customers.</p>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-bottom: 40px;">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="development_services_inner animatable fadeInUp"> <small class="Dservices_icon4"></small>
                        <h4 class="web-dev-heading">Custom Business Apps</h4>
                        <p class="web-dev-pear2">Built for specific business processes, these applications can help you to set your staff free from the workplace so that they can be effective from their home, on the road and at the clients.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="development_services_inner animatable fadeInUp"> <small class="Dservices_icon5"></small>
                        <h4 class="web-dev-heading">CRM Systems</h4>
                        <p class="web-dev-pear2">Our custom CRM business web apps help businesses manage customer data and customer interaction, access business information, automate sales, marketing and customer support.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="development_services_inner animatable fadeInUp"> <small class="Dservices_icon6"></small>
                        <h4 class="web-dev-heading">Social Networking Apps</h4>
                        <p class="web-dev-pear2"> Our experts develop feature rich social media apps that can enable businesses to connect with customers using fun, scalable, and interactive content.</p>
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
