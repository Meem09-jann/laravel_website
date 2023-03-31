
<!-- AWS PAGE START -->
@extends('layouts.master')

<!-- ADD CSS HERE -->
@push('css')
    <style>

        .first_block{
            /* background:#242f3d; */
            background:#f2f2f2;
            /* color:#fff; */
        }
        .clients_logo{
            width:100%;
        }
        .badge_img{
            box-shadow: 0px 0px 14px 0px;
            width:50%;
            margin:0px auto;
            display:block;
            height:auto;
        }
        .view-more-aws{
            text-decoration: none;
            background-color: #14a2dfc4;
            border: 1px solid #14a2dfc4;
            /* box-shadow: 0px 3px 17px rgba(0, 0, 0, .5); */
            color: #fff;
            padding: 5px 15px;
            vertical-align: bottom;
            margin-bottom: 0px;
        }



        @media (min-width:767.98px){
            .float__right{
                float:right;
            }
            .badge_img{
                box-shadow: 0px 0px 14px 0px;
                width:100%;
                margin:0px auto;
                display:block;
                height:260px;
            }
            .badge_img.badge_img1{
                height:auto;
            }
        }

        @media (max-width:450px){
            .badge_img{
                box-shadow: 0px 0px 14px 0px;
                width:90%;
                margin:0px auto;
                display:block;
            }
        }
    </style>
@endpush

@section('content')
    <!-- PAGE CONTANT START -->
        <div class="home-block-3 first_block" style="padding-top:3%;padding-bottom:3%;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12" style="margin-bottom:10px;">
                        <div class="row">
                            
                            <div class="col-sm-4 float__right">
                                <div class="apn_container">
                                    <img src="{{ asset('assets/img/Badge_1.png')}}" alt="APN AWS" class="img-responsive badge_img badge_img1">
                                </div>

                            </div>
                            <div class="col-sm-8 float__right">
                                <div class="info_container">
                                    <h1 style="font-size:36px;">
                                        <b>TiCON</b> on
                                        <span style="color: #FF9900;">
                                            <b>Amazon Web Services</b>
                                        </span>
                                    </h1>
                                    <p style="font-size:18px;">
                                    Empowering the service provider with modern cloud facilities , TiCON announced that it has achieved AWS Partner Network ( APN)status. 
                                    This designation recognizes that TiCON has demonstrated technical proficiency and proven customer success in Industry, Specially our streaming 'Engine BlessBit' is driving industry with AWS partnership. <br>
                                    Achieving the APN that provides specialized services designed to help enterprises adopt, develop, and deploy complex projects on AWS. <br>
                                    To receive the designation, APN Partners must possess deep AWS expertise and deliver solutions seamlessly on AWS.
                                    </p>
                                    <h1 style="font-size:28px;">
                                        <span style="color: #FF9900;">
                                            <b>Find Us On</b>
                                        </span>
                                        <a href="https://aws.amazon.com/partners/find/partnerdetails/?nc1=h_ls&id=0010h00001cA3jpAAC" target="_blank" class="view-more view-more-aws">
                                        <span style="margin-right:7px">
                                            <img src="{{ asset('assets/img/home/aws.ico')}}" alt="AWS APN ICON" style="vertical-align:bottom">
                                        </span>
                                        AWS Partner Network</a>
                                    </h1>
                                    
                                    <img src="{{ asset('assets/img/home/clients.png')}}" alt="Services in AWS" class="img-responsive" style="margin-top:5%">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-sm-3">
                                <img src="{{ asset('assets/img/home/RabbitHoleBD.png')}}" alt="RabbitholeBD" class="clients_logo">
                            </div>
                            <div class="col-sm-3">
                                <img src="{{ asset('assets/img/home/login_logo.png')}}" alt="Smart Consular" class="clients_logo">
                            </div>
                            <div class="col-sm-3">
                                <img src="{{ asset('assets/img/home/Icon-android.png')}}" alt="GoSourcing356" class="clients_logo">
                            </div>
                            <div class="col-sm-3">
                                <img src="{{ asset('assets/img/home/CHVOD.png')}}" alt="CHVOD" class="clients_logo">
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="home-block-3" style="padding-top:3%;padding-bottom:3%;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12" style="margin-bottom:10px;">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="apn_container">
                                    <img src="{{ asset('assets/img/smart_l.png')}}" alt="APN AWS" class="img-responsive badge_img">
                                </div>
                            </div>
                            <div class="col-sm-7 col-sm-offset-1">
                                
                                <div class="info_container">
                                    <h4 style="font-size:28px;">
                                        <b>Empower data consumers to be self-sufficient with event streams</b>
                                    </h4>
                                    <p style="font-size:20px;">Create event driven applications on AWS using a simple user interface and stateful stream computations, with fully automated DataOps - pipeline orchestration, scaling, error recovery, replay and more.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-block-3 first_block" style="padding-top:3%;padding-bottom:3%;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12" style="margin-bottom:10px;">
                        <div class="row">
                            <div class="col-sm-4 col-sm-offset-1 float__right">
                                <div class="apn_container">
                                    <img src="{{ asset('assets/img/products/rabbithole.png')}}" alt="APN AWS" class="img-responsive badge_img">
                                </div>

                            </div>
                            <div class="col-sm-7 float__right">
                                <div class="info_container">
                                    <h1 style="font-size:28px;">
                                        <b>Easily build, manage and create value from your S3 data lake</b>
                                    </h1>
                                    <p style="font-size:20px;">Don’t just dump data blindly into S3 - see schema-on-write, statistics and visualization to ensure you’re creating a data lake and not a swamp.
                                    </p>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-block-3" style="padding-top:3%;padding-bottom:3%;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12" style="margin-bottom:10px;">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="apn_container">
                                    <img src="{{ asset('assets/img/smart_l.png')}}" alt="APN AWS" class="img-responsive badge_img">
                                </div>
                            </div>
                            <div class="col-sm-7 col-sm-offset-1">
                                
                                <div class="info_container">
                                    <h4 style="font-size:28px;">
                                        <b>High scale decoupled architecture to reduce costs and improve performance</b>
                                    </h4>
                                    <p style="font-size:20px;">TiCON runs in-memory over object stores (no local storage) and scales to 1000s of nodes. Queries in engines like AWS Athena run up to 100X faster using TiCON data.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-block-3 first_block" style="padding-top:3%;padding-bottom:3%;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12" style="margin-bottom:10px;">
                        <div class="row">
                            <div class="col-sm-4 col-sm-offset-1 float__right">
                                <div class="apn_container">
                                    <img src="{{ asset('assets/img/products/rabbithole.png')}}" alt="APN AWS" class="img-responsive badge_img">
                                </div>

                            </div>
                            <div class="col-sm-7 float__right">
                                <div class="info_container">
                                    <h1 style="font-size:28px;">
                                        <b>Works seamlessly with your existing AWS stack</b>
                                    </h1>
                                    <p style="font-size:20px;">Operations in TiCON are translated to SQL and pushed to Git. Data is ingested and stored using open formats like Avro/Parquet. Output data to your favorite AWS tools and databases - Athena, Redshift, Elasticsearch - to support a wide variety of use cases across your organization
                                    </p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-block-3" style="padding-top:3%;padding-bottom:3%;">
            <div class="container">
                <div class="row">
                    <h3 class="recog">AWS STORIES</h3><br>
                    <div class="col-sm-8 col-sm-offset-2" style="margin-bottom:10px;">
                        <div class="row">
                            <div class="col-sm-6 animatable fadeInDown" style="height:240px">
                                <div class="cuadro_intro_hover ">
                                    <img src="{{ asset('assets/img/products/chvod-1-500x500.jpg')}}" class="product-pi" alt="CHVOD" title="CHVOD">

                                    <div class="caption">

                                        <div class="blur"></div>
                                        <div class="caption-text">
                                            <h3 class="overlay-heading">CHVOD</h3>
                                            <!-- <p class="overlay-text">Streaming Solution</p> -->
                                            <a href="{{url('/solution/case-study-chvod')}}" class="view-more" target="_blank">Details &rarr;</a>

                                        </div>
                                        <span class="top-left"></span>
                                        <span class="top-right"></span>
                                        <span class="bottom-left"></span>
                                        <span class="bottom-right"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 animatable fadeInDown" style="height:240px">
                                <div class="cuadro_intro_hover ">
                                    <img src="{{ asset('assets/img/products/rabbithole.png')}}" class="product-pi" alt="Rabbithole Prime" title="Rabbithole Prime">

                                    <div class="caption">

                                        <div class="blur"></div>
                                        <div class="caption-text">
                                            <h3 class="overlay-heading">Rabbithole Prime</h3>
                                            <!-- <p class="overlay-text">Streaming Solution</p> -->
                                            <a href="{{url('/solution/case-study-rabbiteholebd')}}" class="view-more" target="_blank">Details &rarr;</a>

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
                </div>
            </div>
        </div>

        <div class="home-block-6" style=" background-image: url('Streaming/img/slider/slider-1.png');">
            <div class="container">
                <form action="{{url('/apn/saveSiteUser')}}" method="post">
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

@endpush

<!-- AWS PAGE END -->
