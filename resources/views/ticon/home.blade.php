<!-- HOME PAGE START -->
@extends('layouts.master')

<!-- ADD CSS HERE -->
@push('css')
    <style>
        .ui-widget-content {border:none}
        .fa-times-circle-o{
            color: red
        }
        .jconfirm .jconfirm-box div.jconfirm-closeIcon {
            height: auto;
            width: auto;
            float: right;
            position: static;
            cursor: pointer;
            opacity: 1;
        }
        .jconfirm .jconfirm-box div.jconfirm-closeIcon .fa {
            font-size: 60px; 
        }
        @media (max-width: 425px) {
            .jconfirm .jconfirm-box div.jconfirm-closeIcon .fa {
                font-size: 40px!important;
            }
        }
        .aws_apn_title{
            position:relative;
        }
        .aws_apn_title::after{
            content:'';
            width:15%;
            height:5px;
            position:absolute;
            bottom:-15px;
            left:0px;
            background:#4FA0FB;
        }
        .aws_img{
            width:35%;
            display:inline-block;
        }
        .view-more-aws{
            text-decoration: none;
            background-color: #14a2dfc4;
            border: 1px solid #14a2dfc4;
            /* box-shadow: 0px 3px 17px rgba(0, 0, 0, .5); */
            color: #fff;
            float:right;
            padding:7px 15px;
        }
        .ticon_aws_img{
            width:95%;
            margin:0px auto;
            display:block;
            margin-top:15%;
        }

        @media (max-width:767.98px){
            .ticon_aws_img{
                width:75%;
                margin:0px auto;
                display:block;
                margin-top:0px;
                display:none;
            }
        }
    </style>
@endpush

@section('content')
    <!-- PAGE CONTANT START -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
        
        <div class="home-block-3" id="scroll-to">
            <div class="container">

                <p class="block-3-service"><span style="color: #0091E3;font-size: 18px;font-weight: 700;margin-right: 10px">___</span></p>
                <h2 class="block-3-heading" style="margin-bottom: 35px;">What We <span style="font-weight: 900">Do</span> <span style="color: #0091E3;font-weight: 600;font-size: 12px;margin-left: -8px;">&#9679;</span></h2>


                <div class="row mglr">
                    <div class="col-sm-4 col-xs-12 clearfix animatable fadeInUp">
                        <div class="left-side-icon" style="float: left;width: 30%">
                            <img src="{{ asset('assets/img/s-icon-5.png')}}" alt="Web icon" title="icon" class="service-icons" style="width: 100%;">
                        </div>

                        <div class="right-side-text" style="float: left;width: 70%;">
                            <h4 class="left-heading">Live TV & VOD Streaming Solution</h4>
                            <p class="left-pera">
                                TiCON can provide High stable and best performance video streaming solution which features live Streaming, On Demand Video, Multisite Management, Event Broadcasting etc.
                            </p>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-12 clearfix animatable fadeInUp">
                        <div class="left-side-icon" style="float: left;width: 30%">
                            <img src="{{ asset('assets/img/s-icon-7.png')}}" alt="Web icon" title="icon" class="service-icons" style="width: 100%;">
                        </div>

                        <div class="right-side-text" style="float: left;width: 70%;">
                            <h4 class="left-heading">Web Development</h4>
                            <p class="left-pera">
                                Counted among trusted web development companies in Bangladesh and South Korea, we provide end-to-end web development services to our clients spreading all across the globe.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12 clearfix animatable fadeInUp">
                        <div class="left-side-icon" style="float: left;width: 30%">
                            <img src="{{ asset('assets/img/s-icon-3.png')}}" alt="Web icon" title="icon" class="service-icons" style="width: 100%;">
                        </div>

                        <div class="right-side-text" style="float: left;width: 70%;">
                            <h4 class="left-heading">Software Development</h4>
                            <p class="left-pera">
                            Our experience in Business Process Management, Resource Planning, Customer Relationship Management, Collaboration and other business domains allows us to provide our customers with the best-practice custom solutions</p>
                        </div>
                    </div>
                </div>

                <div class="row mglr">
                    <div class="col-sm-4 col-xs-12 clearfix animatable fadeInUp">
                        <div class="left-side-icon" style="float: left;width: 30%">
                            <img src="{{asset('assets/img/s-icon-2.png')}}" alt="Web icon" title="icon" class="service-icons" style="width: 100%;">
                        </div>

                        <div class="right-side-text" style="float: left;width: 70%;">
                            <h4 class="left-heading">App Development</h4>
                            <p class="left-pera">
                                As a trusted mobile app development company in Bangladesh and South Korea, we leads the industry in the creation and delivery of native applications as well as perfect development partner for rapid-growth startups and leading enterprises.
                            </p>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-12 clearfix animatable fadeInUp">
                        <div class="left-side-icon" style="float: left;width: 30%">
                            <img src="{{ asset('assets/img/s-icon-4.png')}}" alt="Web icon" title="icon" class="service-icons" style="width: 100%;">
                        </div>

                        <div class="right-side-text" style="float: left;width: 70%;">
                            <h4 class="left-heading">Enterprise Application Integration</h4>
                            <p class="left-pera">
                            We help companies to support and refine high-level business processes that involve different departments, applications and data sources which require straight-through processing, seamless data interchange and integrated business rules execution.
                        </p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12 clearfix animatable fadeInUp">
                        <div class="left-side-icon" style="float: left;width: 30%">
                            <img src="{{ asset('assets/img/s-icon-3.png')}}" alt="Web icon" title="icon" class="service-icons" style="width: 100%;">
                        </div>

                        <div class="right-side-text" style="float: left;width: 70%;">
                            <h4 class="left-heading">Software Product Development</h4>
                            <p class="left-pera">
                            TiCON is a full-cycle software product development (SPD) service provider and supports you at any stage of your product evolution – from a simple idea to product implementation, support and maintenance.
                        </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="home-block-4">
            
                
            <div class="row mglr">

                <div class="col-sm-3 col-height animatable fadeInDown">
                    <div class="cuadro_intro_hover ">

                        <img src="assets/img/BlessBit.png" class="product-pi" alt="BlessBit" title="BlessBit">

                        <div class="caption">

                            <div class="blur"></div>
                            <div class="caption-text">
                                <h3 class="overlay-heading">BlessBit</h3>
                                <p class="overlay-text">Streaming Solution</p>
                                <a href="{{url('product/bless-bit')}}" class="view-more" target="_blank">Details &rarr;</a>

                            </div>
                            <span class="top-left"></span>
                            <span class="top-right"></span>
                            <span class="bottom-left"></span>
                            <span class="bottom-right"></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-height animatable fadeInDown">
                    <div class="cuadro_intro_hover ">

                        <img src="assets/img/thea.png" class="product-pi" alt="Theia Image" title="Theia">

                        <div class="caption">

                            <div class="blur"></div>
                            <div class="caption-text">
                                <h3 class="overlay-heading">THEIA</h3>
                                <p class="overlay-text">Artificial Intiligence</p>
                                <a href="{{url('product/theia')}}" class="view-more">Details &rarr;</a>

                            </div>
                            <span class="top-left"></span>
                            <span class="top-right"></span>
                            <span class="bottom-left"></span>
                            <span class="bottom-right"></span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 col-height animatable fadeInUp">
                    <div class="cuadro_intro_hover ">

                        <img src="assets/img/products/085-096-H01-500x500.png" class="product-pi" alt="CH BOX" title="CH-BOX">

                        <div class="caption">

                            <div class="blur"></div>
                            <div class="caption-text">
                                <h3 class="overlay-heading">CH BOX</h3>
                                <p class="overlay-text">IP TV</p>
                                <a href="{{url('product/ch-box')}}" class="view-more">Details &rarr;</a>

                            </div>
                            <span class="top-left"></span>
                            <span class="top-right"></span>
                            <span class="bottom-left"></span>
                            <span class="bottom-right"></span>
                        </div>
                    </div>
                </div>

                
                <div class="col-sm-3 col-height animatable fadeInDown">
                    <div class="cuadro_intro_hover " style="background-color: #32aab2;">

                        <img src="assets/img/Product_Details_jobportal.png" class="product-pi" alt="HR Solution" title="HR Solution">

                        <div class="caption">

                            <div class="blur"></div>
                            <div class="caption-text">
                                <h3 class="overlay-heading">HR SOLUTION</h3>
                                <p class="overlay-text">HRMS, Recruitment, Video Interview</p>
                                <a href="{{url('solution/hr-solution')}}" class="view-more">Details &rarr;</a>

                            </div>
                            <span class="top-left"></span>
                            <span class="top-right"></span>
                            <span class="bottom-left"></span>
                            <span class="bottom-right"></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mglr">
                
                <div class="col-sm-3 col-height animatable fadeInUp">
                    <div class="cuadro_intro_hover ">

                        <img src="assets/img/products/chvod-1-500x500.jpg" class="product-pi" alt="CH VOD" title="CH VOD">

                        <div class="caption">

                            <div class="blur"></div>
                            <div class="caption-text">
                                <h3 class="overlay-heading">CH VOD</h3>
                                <p class="overlay-text">VOD Content</p>
                                <a href="{{url('product/ch-vod')}}" class="view-more">Details &rarr;</a>

                            </div>
                            <span class="top-left"></span>
                            <span class="top-right"></span>
                            <span class="bottom-left"></span>
                            <span class="bottom-right"></span>
                        </div>
                    </div>
                </div>


                <div class="col-sm-3 col-height animatable fadeInUp" style=" background: rgba(0, 0, 0, 0) linear-gradient(to right, rgb(55, 206, 242) 0%, rgb(2, 137, 212) 100%) repeat;">
                    <div class="cuadro_intro_hover ">

                        <img src="assets/img/Product_quizyard5.png" class="product-pi" alt="QuizYard" title="Quizyard">

                        <div class="caption">

                            <div class="blur"></div>
                            <div class="caption-text">
                                <h3 class="overlay-heading">Quizyard</h3>
                                <p class="overlay-text">TRIVIA APP</p>
                                <a href="{{url('product/quiz-yard')}}" class="view-more">Details &rarr;</a>

                            </div>
                            <span class="top-left"></span>
                            <span class="top-right"></span>
                            <span class="bottom-left"></span>
                            <span class="bottom-right"></span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-height bg-color animatable bounceIn">
                
                    <div class="cuadro_intro_hover ">

                        <img src="assets/img/ticon_service_1.png" class="product-pi" alt="Portfolio" title="Portfolio">

                        <div class="caption">

                            <div class="blur"></div>
                            <div class="caption-text">
                            
                                <a href="{{url('/portfolio')}}" class="view-more">Our Portfolio &rarr;</a>

                            </div>
                            <span class="top-left"></span>
                            <span class="top-right"></span>
                            <span class="bottom-left"></span>
                            <span class="bottom-right"></span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="home-block-3" style="padding-top:2%;padding-bottom:10px">
            <div class="container">
                <div class="col-sm-8" style="margin-bottom:10px;">
                    <h3 class="recog aws_apn_title" style="text-align:left;">AWS DIGITAL MEDIA PARTNER SOLUTION</h3>
                    <br>
                    <p style="color:#616262;font-size:16px;line-height:1.61">
                        Empowering the service provider with modern cloud facilities , TiCON announced that it has achieved AWS Partner Network ( APN)status.<br>
                        This designation recognizes that TiCON has demonstrated technical proficiency and proven customer success in Industry, Specially our streaming 'Engine BlessBit' is driving industry with AWS partnership.<br>

                        Achieving the APN that provides specialized services designed to help enterprises adopt, develop, and deploy complex projects on AWS.<br>

                        To receive the designation, APN Partners must possess deep AWS expertise and deliver solutions seamlessly on AWS.


                    </p>
                    <p style="color:#616262;font-size:16px;line-height:1.61">
                    TiCON is a global information technology provider specializing for Streaming Technology, Artificial Intelligence, SaaS, BigData, Web and App technologies'. Our Existence client's/partners enjoy cloud and cognitive services which drive them stable service operation. We work closely with customers to develop fundamentally secure infrastructure automation code, deployment pipelines, and feedback mechanisms for faster, more consistent software and infrastructure deployments.
                    </p>
                    <br>
                    <p>Partner of</p>
                    <img src="assets/img/home/aws_apn.png" alt="AWS partner network" class="aws_img">
                    <a href="{{url('/apn')}}" class="view-more view-more-aws">View More →</a>
                </div>

                <div class="col-sm-4">
                <img src="assets/img/Badge_1.png" alt="AWS partner network" class="ticon_aws_img">
                </div>

            </div>
        </div>

        <div class="home-block-5">
            <h3 class="recog">RECOGNITIONS</h3>
            <div class="wrap">
                <div class="slider" style="padding-top: 2%;">


                    <div class="new1 item">
                        <img src="assets/img/slider/soft_expo_2020_1.jpg" alt="Runners-Up trophy from BASIS" title=" ">
                        <p class="img-desc">TiCON at BASIS SoftExpo 2020</p>
                    </div>

                    <div class="new1 item">
                        <img src="assets/img/slider/prize_basis_soft_expo.jpg" alt="Runners-Up trophy from BASIS" title=" ">
                        <p class="img-desc">TiCON at BASIS SoftExpo 2020 ( 2nd Runner-up Mini Pavilion Category )</p>
                    </div>

                    <div class="new1 item">
                        <img src="assets/img/slider/soft_expo_2020.jpg" alt="Runners-Up trophy from BASIS" title=" ">
                        <p class="img-desc">TiCON at BASIS SoftExpo 2020 with Team CEMS-Global.</p>
                    </div>

                    <div class="new1 item">
                        <img src="assets/img/slider/soft_expo_2020_7.jpg" alt="Runners-Up trophy from BASIS" title=" ">
                        <p class="img-desc">TiCON at BASIS SoftExpo 2020</p>
                    </div>

                    <div class="new1 item">
                        <img src="assets/img/slider/CebitAsean2018-b2b_With_japanese_Company.jpg" alt="Runners-Up trophy from BASIS" title=" ">
                        <p class="img-desc">B2B Meeting with Japanese Company in CEBIT ASEAN Thailand 2018</p>
                    </div>

                    <div class="new1 item">
                        <img src="assets/img/slider/CebitAsean2018-b2b_With_japanese_Company2.jpg" alt="Runners-Up trophy from BASIS" title=" ">
                        <p class="img-desc">B2B Meeting with Japanese Company in CEBIT ASEAN Thailand 2018</p>
                    </div>

                    <div class="new1 item">
                        <img src="assets/img/Website_Design_14.png" alt="Runners-Up trophy from BASIS" title=" ">
                        <p class="img-desc">Receiving Runners-Up trophy from BASIS</p>
                    </div>
                    <div class="new1 item">
                        <img src="assets/img/Website_Design_15.png" alt="Trophy image" title="Recognitions">
                        <p class="img-desc">Runners-Up trophy from BASIS</p>
                    </div>
                    <div class="new1 item">
                        <img src="assets/img/slider/At Will Co. Ltd Event in Japan, HDTELECOM & TiCON.jpg" alt="At Will Co. Ltd Event in Japan" title="Recognitions">
                        <p class="img-desc">At Will Co. Ltd Event in Japan, HDTELECOM & TiCON</p>
                    </div>
                    <div class="new1 item">
                        <img src="assets/img/slider/MOU Between RANKSTEL, TiCON & HDTELECOM Korea.jpg" alt="MOU Between RANKSTEL, TiCON & HDTELECOM Korea" title="Recognitions">
                        <p class="img-desc">MOU Between RANKSTEL, TiCON & HDTELECOM Korea</p>
                    </div>
                    <div class="new1 item">
                        <img src="assets/img/slider/Products Launching Event of Japan Partner.jpg" alt="Products Launching Event of Japan Partner" title="Recognitions">
                        <p class="img-desc">Products Launching Event of Japan Partner</p>
                    </div>
                    <div class="new1 item">
                        <img src="assets/img/slider/Signing Ceremony Between TiCON & CorePlanet Korea.jpg" alt="TiCON & CorePlanet Korea" title="Recognitions">
                        <p class="img-desc">Signing Ceremony Between TiCON & CorePlanet Korea</p>
                    </div>
                    <div class="new1 item">
                        <img src="assets/img/slider/Signing Ceremony Between TiCON & OJWorld  Korea.jpg" alt="TiCON & OJWorld  Korea" title="Recognitions">
                        <p class="img-desc">Signing Ceremony Between TiCON & OJWorld  Korea</p>
                    </div>
                    <div class="new1 item">
                        <img src="assets/img/slider/Lets enjoy the power of solution.png" alt="TiCON Logo" title="Recognitions">
                        <p class="img-desc">Lets Enjoy the Power of Solution</p>
                    </div>
                    <div class="new1 item">
                        <img src="assets/img/Company_About_1.png" alt="TiCon Family In Bangladesh Office" title="Recognitions">
                        <p class="img-desc">TiCon Family In Bangladesh Office</p>
                    </div>
                    <div class="new1 item">
                        <img src="assets/img/anniversary.png" alt="TiCon Family In Bangladesh Office" title="Recognitions">
                        <p class="img-desc">12th Anniversary Celebration!</p>
                    </div>
                    <div class="new1 item">
                        <img src="assets/img/blessbit_award.png" alt="TiCon Family In Bangladesh Office" title="Recognitions">
                        <p class="img-desc">1st runner-up at BASIS National ICT Award For BlessBit</p>
                    </div>
                    <div class="new1 item">
                        <img src="assets/img/news_of_award.png" alt="TiCon Family In Bangladesh Office" title="Recognitions">
                        <p class="img-desc">News of National ICT Award in local e-papers</p>
                    </div>
                    <div class="new1 item">
                        <img src="assets/img/trophy_certificate.png" alt="TiCon Family In Bangladesh Office" title="Recognitions">
                        <p class="img-desc">Trophy And Certificate of 1st runner-up at BASIS National ICT Award</p>
                    </div>
                    <div class="new1 item">
                        <img src="assets/img/aws_apn_card.png" alt="TiCon Family In Bangladesh Office" title="Recognitions">
                        <p class="img-desc">First AWS Technology Partner In Bangladesh!</p>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="home-block-6" style=" background-image: url('Streaming/img/slider/slider-1.png');">
            <div class="container">
                <form action="{{url('/home/siteuseradd')}}" method="post">
                @csrf
                    <p class="contact-text">Enter your details & We will be in touch.</p>
                    <div class="row">
                        <div class="col-sm-3 col-xs-6">
                            <input type="text" class="form-control fch" name="name" placeholder="Full Name" required>
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <input type="email" class="form-control fch" name="email" placeholder="Email" required>
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <select name="solution" id="solution" class="form-control fch">
                                <option value="Streaming Solution">Streaming Solution</option>
                                <option value="Business Solution">Business Solution</option>
                                <option value="AI Integration">AI Integration</option>
                                <option value="Web Crawler">Web Crawler</option>
                                <option value="HR Solution">HR Solution</option>
                                <option value="Mobile Apps">Mobile Apps</option>
                                <option value="ECommerce and Web Solution">ECommerce & Web Solution</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <!-- <a href="#" class="view-more modify">Contact Us &rarr;</a> -->
                            <button type="submit" class="btn btn-primary view-more modify">Contact Us &rarr;</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <!-- PAGE CONTANT END -->
@endsection

<!-- ADD JS HERE -->
@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script>
        var showPopUp = {{ $data->showAwsBanner }}  ;
        
        console.log(showPopUp);
        if(showPopUp == 1 )
        {
            $( document ).ready(function() {
                $.dialog({
                    title: '',
                    content: `<a href="{{url('/apn')}}" target="_blank"><img class="img-fluid" style="max-width: 100%;height: auto; " src="{{asset('assets/img/aws_onboarding_2.png')}}"></a>`,
                    useBootstrap: true,
                    animation: 'zoom',
                    animationSpeed: 500,
                    container: 'body',
                    containerFluid: true,  
                    backgroundDismiss: false,
                    columnClass: 'col-md-12 col-sm-12 col-xs-12',
                    offsetTop: 0,
                    offsetBottom: 0,
                    bootstrapClasses: {
                        container: 'container',
                        containerFluid: 'container-fluid',
                        row: 'row',
                        img: 'img-fluid',
                    },
                    closeIcon: true,
                    closeIconClass: 'fa fa-times-circle-o fa-3x',
                    theme: 'supervan',
                });
            });
        }
    </script>
@endpush

<!-- HOME PAGE END -->
