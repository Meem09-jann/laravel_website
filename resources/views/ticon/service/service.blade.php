<!-- PAGE START -->
@extends('layouts.master')

<!-- ADD CSS HERE -->
@push('css')
    <style type="text/css">
        .indicator-control{
            display:none;
            position: absolute;
            bottom: 50% !important;
            left: 5% !important;
            z-index: 20;
            width: 15px;
            padding-left: 0px;
            margin-left: 0px;
            text-align: center;
            list-style: none;
            transform: translateY(50%);
        }

        ol.carousel-indicators.empty{
            position: static !important;
            margin-bottom: 0px;
        }
        .services-heading{
            color: #000;
            font-size: 43px;
            text-align: center;
        }
        .services-heading span{
            color: #1aa8e1;
        }
        .service-icons1{
            display: block;
            width: 90px;
            height:90px;
            transition: transform .3s ease;
            margin-bottom:15px;
        }
        .margin-bt{
            margin-bottom: 30px;
            cursor: default;
        }
        /*.margin-bt:hover .service-icons1{
            transform: scale(1.2);
        }*/
        .services-text h4{
            color: #1E3B65;
            font-size: 18px;
            font-weight: 700;
            position: relative;
            padding-bottom: 0px;
        }
        .services-text h4::after{
            content: " ";
            width: 100px;
            height: 3px;
            display:none;
            position: absolute;
            background-color: #0b95d9;
            bottom: -7px;
            left: 50%;
            transform: translateX(-50%);
        }
        .services-text p{
            font-size: 15px;
            margin-top: 4%;
        }
        .services-pera1{
            width: 93%;
            text-align: center;
            font-size: 15px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 3%;
        }
        .vertical-praimary-heading::after{
            bottom: -10px;
        }
    </style>
@endpush

@section('content')
    <!-- PAGE CONTANT START -->
    <div class="home-block-3 service_bg" id="scroll-to" style="padding-bottom: 35px;">
        <div class="container">
            <div class="row mglr">
                <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-12">
                    <div class="service-text">
                        <h2 class="block-3-heading" style="margin-top:0px;margin-bottom: 10px;"><span class="main-title" style="font-size: 43px;">Services</span></h2>
                        <p style="font-size: 16px;line-height: 1.41">Our goal is to provide a flexible, high-availability system that represents the new model for communications in today’s global infrastructure.</p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-4 col-sm-12 col-xs-12" style="margin-bottom: 5%;">
                <div class="service_img service_match">
                        <img src="{{ asset('assets/img/ticon_service.png') }}" alt="Service Image " class="img-responsive" style="width:100%;border-radius:10px;height:100%;">
                </div>
                </div>
                <div class="col-lg-7 col-md-8 col-sm-12 col-xs-12">
                    <!--Vertical Slider starts here-->
                        <div class="vertical__slider--container">
                            <div id="myCarousel-1" class="vertical-slider carousel vertical slide" data-ride="carousel">
                                <div class="indicator-control">
                                    <a href="#myCarousel-1" class="btn-vertical-slider1 btn-vertical-slider__up1" data-slide="next"><i class="fa fa-long-arrow-down"></i></a>

                                    <ol class="carousel-indicators empty">
                                        <li data-target="#myCarousel-1" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel-1" data-slide-to="1"></li>
                                        <li data-target="#myCarousel-1" data-slide-to="2"></li>
                                        <li data-target="#myCarousel-1" data-slide-to="3"></li>
                                        <li data-target="#myCarousel-1" data-slide-to="4"></li>
                                        <li data-target="#myCarousel-1" data-slide-to="5"></li>
                                    </ol>
                                <a href="#myCarousel-1" class="btn-vertical-slider1 btn-vertical-slider__down1" data-slide="prev">
                                    <i class="fa fa-long-arrow-up"></i></a>
                                </div>
                                

                                <!-- Carousel items -->
                                <div class="carousel-inner service_match">

                                    <div class="item active">
                                        
                                        <div class="item__content">
                                            <h3 class="number">01</h3>
                                            <p class="vertical-praimary-heading">WEB DEVELOPMENT</p>

                                            <!-- <p class="vertical-secondary-heading">Enterprise Application Development:</p> -->
                                            <p class="vertical-secondary-text">Counted among trusted web development companies in Bangladesh and South Korea, we provide end-to-end web development services to our clients spreading all across the globe.</p>
                                            <a href="{{url('service/web-development')}}" class="view-more modify-1">Details</a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        
                                        <div class="item__content">
                                            <h3 class="number">02</h3>
                                            <p class="vertical-praimary-heading">MOBILE APP DEVELOPMENT</p>

                                            <!-- <p class="vertical-secondary-heading">Enterprise Application Development:</p> -->
                                            <p class="vertical-secondary-text">As a trusted mobile app development company in Bangladesh and South Korea, we leads the industry in the creation and delivery of native applications. We are the trusted mobile app development partner for rapid-growth startups and leading enterprises. We help you create mobile solutions that add real business value, improve customer experiences, and drive revenue.</p>
                                            <a href="{{url('service/mobile-app-development')}}" class="view-more modify-1">Details</a>
                                        </div>
                                    </div>

                                    <div class="item">
                                        
                                        <div class="item__content">
                                            <h3 class="number">03</h3>
                                            <p class="vertical-praimary-heading">CUSTOM SOFTWARE DEVELOPMENT</p>

                                            <!-- <p class="vertical-secondary-heading">Enterprise Application Development:</p> -->
                                            <p class="vertical-secondary-text">We have solid skills and deep expertise in building enterprise solutions of various complexity levels. Our experience in Business Process Management, Resource Planning, Customer Relationship Management, Collaboration and other business domains allows us to provide our customers with the best-practice custom solutions.</p>
                                            <a href="{{url('service/custom-software-development')}}" class="view-more modify-1">Details</a>
                                        </div>
                                    </div>

                                    <div class="item">
                                        
                                        <div class="item__content">
                                            <h3 class="number">04</h3>
                                            <p class="vertical-praimary-heading">SOFTWARE PRODUCT DEVELOPMENT</p>

                                            <!-- <p class="vertical-secondary-heading">Enterprise Application Development:</p> -->
                                            <p class="vertical-secondary-text">TiCON is a full-cycle software product development (SPD) service provider and supports you at any stage of your product evolution – from a simple idea to product implementation, support and maintenance.</p>
                                            <a href="{{url('service/software-product-development')}}" class="view-more modify-1">Details</a>
                                        </div>
                                    </div>

                                    <div class="item">
                                        
                                        <div class="item__content">
                                            <h3 class="number">05</h3>
                                            <p class="vertical-praimary-heading">ENTERPRISE APPLICATION INTEGRATION</p>

                                            <!-- <p class="vertical-secondary-heading">Enterprise Application Development:</p> -->
                                            <p class="vertical-secondary-text">We help companies to support and refine high-level business processes that involve different departments, applications and data sources and require straight-through processing, seamless data interchange and integrated business rules execution.</p>
                                            <a href="{{url('service/enterprise-application-integration')}}" class="view-more modify-1">Details</a>
                                        </div>
                                    </div>
                                    
                                    <div class="item">
                                        
                                        <div class="item__content">
                                            <h3 class="number">06</h3>
                                            <p class="vertical-praimary-heading">TECHNOLOGY CONSULTING</p>

                                            <!-- <p class="vertical-secondary-heading">Enterprise Application Development:</p> -->
                                            <p class="vertical-secondary-text">From resolving specific IT-related issues to strategic business transformation fueled by IT, we deliver technology consulting services to companies across multiple domain areas. We are aimed to become your reliable IT partner with the functional know-how, detailed understanding, resources and in-depth expertise to ensure that your business, management and staff use Information Technology efficiently, effectively and in-line with your goals and business challenges.</p>
                                            <a href="{{url('service/technology-consulting')}}" class="view-more modify-1">Details</a>
                                        </div>
                                    </div>
                                    <!--/item-->
                                    <div class="slider_indicator_bottom">
                                        <span href="#myCarousel-1" class="btn-vertical-slider btn-vertical-slider__up" data-slide="prev">
                                            <i class="fa fa-chevron-left"></i></span>
                                        <span href="#myCarousel-1" class="btn-vertical-slider btn-vertical-slider__down" data-slide="next">
                                            <i class="fa fa-chevron-right"></i></span>
                                    </div>
                                    <!-- <a href="#myCarousel-1" class="btn-vertical-slider btn-vertical-slider__down" data-slide="next">
                                        <i class="fa fa-chevron-right"></i>
                                    </a>
                                    <a href="#myCarousel-1" class="btn-vertical-slider btn-vertical-slider__up" data-slide="prev">
                                        <i class="fa fa-chevron-left"></i>
                                    </a> -->
                                </div>
                                
                                    
                            </div>
                        </div>

                    <!--Vertical Slider ends here-->
                </div>
            </div>
        </div>
    </div>
    <div class="home-block-3" style="padding-top: 20px;padding-bottom: 30px;">
        <div class="container">
            <h3 class="services-heading animatable fadeInUp">Our Full-Cycle Software Development Services</h3>
            <p class="services-pera1 animatable fadeInUp">In today's world, where our lives are surrounded by the latest technologies, Technology advancement plays an important role in running an organization and expanding its growth. Whether you're a big enterprise or a young entrepreneur information technology helps the business maintain data flow, manage contacts, track processes and maintain employee records and other HR operations. It helps business operations by keeping them connected with suppliers, customers, and their sales force.TiCON System Ltd. understands that very well!</p>
            <div class="row mglr">
                <div class="col-md-4 col-sm-6 col-xs-12 clearfix text-center margin-bt animatable fadeInUp">
                    <div class="service_container">
                        <center>
                            <img src="{{ asset('assets/img/SoftwareDevelopment.png') }}" alt="Web icon" class="service-icons1">
                        </center>

                        <div class="services-text">
                            <h4>Software Development</h4>
                            <p>
                                Our years of domain expertise developing secure, scalable, feature-packed, and high performing software, mobile/web apps, eCommerce sites, and CMS.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 clearfix text-center margin-bt animatable fadeInUp">
                    <div class="service_container">
                        <center>
                            <img src="{{ asset('assets/img/AWS.png') }}" alt="Web icon" class="service-icons1">
                        </center>

                        <div class="services-text">
                            <h4>Cloud Adoption Services</h4>
                            <p>
                                As AWS technology partner - Our AWS certified experts offer AWS Cloud platform consulting for Cloud Advisory Services, Cloud Enablement Services, Cloud Implementation Services, and Cloud Managed and migration services, etc.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 clearfix text-center margin-bt animatable fadeInUp">
                    <div class="service_container">
                        <center>
                            <img src="{{ asset('assets/img/SoftwareConsulting.png') }}" alt="Web icon" class="service-icons1">
                        </center>

                        <div class="services-text">
                            <h4>Software Consulting</h4>
                            <p>
                                Experienced consultants enabling maximize ROI software project to initiate effective planning, execution, delivery & management of software consulting services.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 clearfix text-center margin-bt animatable fadeInUp">
                    <div class="service_container">
                        <center>
                            <img src="{{ asset('assets/img/SoftwareDevelopmentExpertise.png') }}" alt="Web icon" class="service-icons1">
                        </center>

                        <div class="services-text">
                            <h4>Software Development Expertise</h4>
                            <p>
                                Offering technology consultancy service to implement the most suitable technology stack and well-thought-out system architecture.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 clearfix text-center margin-bt animatable fadeInUp">
                    <div class="service_container">
                        <center>
                            <img src="{{ asset('assets/img/ThirdpartySolutionCustomization.png') }}" alt="Web icon" class="service-icons1">
                        </center>

                        <div class="services-text">
                            <h4>Third-party Solution Customization</h4>
                            <p>
                                Technology consulting service for a third party solution to implement the most suitable technology stack and architecture.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 clearfix text-center margin-bt animatable fadeInUp">
                    <div class="service_container">
                        <center>
                            <img src="{{ asset('assets/img/SoftwareQAandTesting.png') }}" alt="Web icon" class="service-icons1">
                        </center>

                        <div class="services-text">
                            <h4>Software QA and Testing</h4>
                            <p>
                                Our expert quality analysts & tester will make sure the Software in the loop to runs across the project.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 clearfix text-center margin-bt animatable fadeInUp">
                    <div class="service_container">
                        <center>
                            <img src="{{ asset('assets/img/MigrationandUpgrade.png') }}" alt="Web icon" class="service-icons1">
                        </center>

                        <div class="services-text">
                            <h4>Migration and Upgrade</h4>
                            <p>
                                Our expert consultants offer technology consulting to implement migration and up-gradation service with the most updated technology &  solution stack thought-out system architecture.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 clearfix text-center margin-bt animatable fadeInUp">
                    <div class="service_container">
                        <center>
                            <img src="{{ asset('assets/img/ui_ux.png') }}" alt="Web icon" class="service-icons1">
                        </center>

                        <div class="services-text">
                            <h4>Software UI/UX Design</h4>
                            <p>
                                We are experts with creative feature-packed & high performing UX and UI design with our creative young professionals.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 clearfix text-center margin-bt animatable fadeInUp">
                    <div class="service_container">
                        <center>
                            <img src="{{ asset('assets/img/Support&Maintenance.png') }}" alt="Web icon" class="service-icons1">
                        </center>

                        <div class="services-text">
                            <h4>Support & Maintenance</h4>
                            <p>
                                We are providing application support and maintenance services to customers and proved to be a professional and reliable partner.
                            </p>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
            
        </div>
    </div>
    <!-- PAGE CONTANT END -->
@endsection

<!-- ADD JS HERE -->
@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js"></script>
    <script>
       $('.service_match').matchHeight();
       $('.service_container').matchHeight();
        $(document).ready(function () {
            $('.btn-vertical-slider1').on('click', function () {
                
                if ($(this).attr('data-slide') == 'next') {
                    $('#myCarousel-1').carousel('next');
                }
                if ($(this).attr('data-slide') == 'prev') {
                    $('#myCarousel-1').carousel('prev')
                }

            });
        });


    </script>

    <script>
        $(document).ready(function() {
        // Configure/customize these variables.
        var showChar = 200;  // How many characters are shown by default
        var ellipsestext = "...";
        
        $('.vertical-secondary-text').each(function() {
            var content = $(this).html();
    
            if(content.length > showChar) {
    
                var c = content.substr(0, showChar);
                var h = content.substr(showChar, content.length - showChar);
    
                var html = c + ' ' + ellipsestext;
    
                $(this).html(html);
            }
    
        });
        });
    </script>
@endpush

<!-- PAGE END -->
