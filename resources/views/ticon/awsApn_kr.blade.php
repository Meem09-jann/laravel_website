<!-- HOME PAGE START -->
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
                                    <img src="{{ asset('assets/img/Badge_1.png') }}" alt="APN AWS" class="img-responsive badge_img badge_img1">
                                </div>

                            </div>
                            <div class="col-sm-8 float__right">
                                <div class="info_container">
                                    <h1 style="font-size:36px;">
                                        <span style="color: #FF9900;">
                                            <b>Amazon Web Service 에서 </b>
                                        </span>
                                        <b>TiCON</b>
                                    </h1>
                                    <p style="font-size:18px;">
                                    TiCON은 서비스 제공 기업에 최신의 클라우드 기능을 제공하고 AWS 파트너 네트워크 (APN)의 지위를 달성했다고 발표했습니다. 이 지정은 TiCON이 업계에서 기술적인 숙련도를 보여 고객의 성공을 증명한 것을 인정하고 있습니다. 특히 스트리밍 엔진인 "BlessBit"는 AWS와 파트너십을 통해 업계를 주도하고 있습니다.<br>
                                    기업이 AWS에서 복잡한 프로젝트를 도입, 개발 및 구현할 수 있도록 설계된 전문 서비스를 제공하는 APN을 달성했습니다.<br>AWS 솔루션 제공 업체로 지정을 받으려면, APN 파트너는 AWS에 대한 깊은 전문 지식을 가지고 AWS에서 원활하게 솔루션을 제공해야 합니다..

                                    </p>
                                    <h1 style="font-size:28px;">
                                        
                                        <a href="https://aws.amazon.com/partners/find/partnerdetails/?nc1=h_ls&id=0010h00001cA3jpAAC" target="_blank" class="view-more view-more-aws">
                                        <span style="margin-right:7px">
                                            <img src="{{ asset('assets/img/home/aws.ico') }}" alt="AWS APN ICON" style="vertical-align:bottom">
                                        </span>
                                        AWS 파트너 네트워크에서</a>
                                        <span style="color: #FF9900;">
                                            <b> 찾기 </b>
                                        </span>
                                    </h1>
                                    
                                    <img src="{{ asset('assets/img/home/clients.png')}}" alt="Services in AWS" class="img-responsive" style="margin-top:5%">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-sm-3">
                                <img src="{{ asset('assets/img/home/RabbitHoleBD.png') }}" alt="RabbitholeBD" class="clients_logo">
                            </div>
                            <div class="col-sm-3">
                                <img src="{{ asset('assets/img/home/login_logo.png') }}" alt="Smart Consular" class="clients_logo">
                            </div>
                            <div class="col-sm-3">
                                <img src="{{ asset('assets/img/home/Icon-android.png') }}" alt="GoSourcing356" class="clients_logo">
                            </div>
                            <div class="col-sm-3">
                                <img src="{{ asset('assets/img/home/CHVOD.png') }}" alt="CHVOD" class="clients_logo">
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
                                    <img src="{{ asset('assets/img/smart_l.png') }}" alt="APN AWS" class="img-responsive badge_img">
                                </div>
                            </div>
                            <div class="col-sm-7 col-sm-offset-1">
                                
                                <div class="info_container">
                                    <h4 style="font-size:28px;">
                                        <b>데이터 소비자가 이벤트 스트림을 스스로 사용할 수 있도록 지원</b>
                                    </h4>
                                    <p style="font-size:20px;">완전 자동화된 DataOps를 사용하여 간단한 사용자 인터페이스 및 상태 스트림 계산을 사용하여 AWS에서 이벤트 기반 응용 프로그램을 만듭니다 - 파이프라인 오케스트레이션, 스케일링, 오류 복구, 재생 등. 
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
                                    <img src="{{ asset('assets/img/products/rabbithole.png') }}" alt="APN AWS" class="img-responsive badge_img">
                                </div>

                            </div>
                            <div class="col-sm-7 float__right">
                                <div class="info_container">
                                    <h1 style="font-size:28px;">
                                        <b>S3 데이터 레이크에서 손쉽게 가치를 구축, 관리 및 생성</b>
                                    </h1>
                                    <p style="font-size:20px;">데이터를 맹목적으로 S3에 덤프하지 마십시오 - 데이터 스왐프가 아닌 데이터 레이크을 작성하고, 있는지 확인하려면 Schema-On-Write, 통계, 시각화를 참조하십시오.
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
                                    <img src="{{ asset('assets/img/smart_l.png') }}" alt="APN AWS" class="img-responsive badge_img">
                                </div>
                            </div>
                            <div class="col-sm-7 col-sm-offset-1">
                                
                                <div class="info_container">
                                    <h4 style="font-size:28px;">
                                        <b>비용을 절감하고 성능을 개선하기 위한 대규모 분리 아키텍처</b>
                                    </h4>
                                    <p style="font-size:20px;">TiCON은 객체 저장소(로컬 저장소 없음)를 통해 메모리에서 실행되며 1,000s의 노드로 확장됩니다. AWS Athena와 같은 엔진의 쿼리는 TiCON 데이터를 사용하여 최대 100배 더 빠르게 실행됩니다.
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
                                    <img src="{{ asset('assets/img/products/rabbithole.png') }}" alt="APN AWS" class="img-responsive badge_img">
                                </div>

                            </div>
                            <div class="col-sm-7 float__right">
                                <div class="info_container">
                                    <h1 style="font-size:28px;">
                                        <b>기존 AWS 스택과 원활하게 작동</b>
                                    </h1>
                                    <p style="font-size:20px;">TiCON에서의 작업은 SQL로 변환되고 Git로 푸시됩니다. 데이터는 Avro/Parquet과 같은 개방형 형식을 사용하여 수집 및 저장됩니다. 즐겨 찾는 AWS 도구 및 데이터베이스에 데이터를 출력합니다. -Athena, Redshift, Elasticsearch - 조직 전체에서 다양한 사용 사례 지원
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
                    <h3 class="recog">AWS 스토리</h3><br>
                    <div class="col-sm-8 col-sm-offset-2" style="margin-bottom:10px;">
                        <div class="row">
                            <div class="col-sm-6 animatable fadeInDown" style="height:240px">
                                <div class="cuadro_intro_hover ">
                                    <img src="{{ asset('/assets/img/products/chvod-1-500x500.jpg') }}" class="product-pi" alt="CHVOD" title="CHVOD">

                                    <div class="caption">

                                        <div class="blur"></div>
                                        <div class="caption-text">
                                            <h3 class="overlay-heading">CHVOD</h3>
                                            <!-- <p class="overlay-text">Streaming Solution</p> -->
                                            <a href="{{url('/solution/case-study-chvod')}}" class="view-more" target="_blank">세부 내용 &rarr;</a>

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
                                    <img src="{{ asset('assets/img/products/rabbithole.png') }}" class="product-pi" alt="Rabbithole Prime" title="Rabbithole Prime">

                                    <div class="caption">

                                        <div class="blur"></div>
                                        <div class="caption-text">
                                            <h3 class="overlay-heading">Rabbithole Prime</h3>
                                            <!-- <p class="overlay-text">Streaming Solution</p> -->
                                            <a href="{{url('/solution/case-study-rabbiteholebd')}}" class="view-more" target="_blank">세부 내용 &rarr;</a>

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

        <div class="home-block-6" style=" background-image: url({{ asset('Streaming/img/slider/slider-1.png') }});">
            <div class="container">
                <form action="{{url('/apn/saveSiteUser')}}" method="post">
                @csrf
                    <p class="contact-text">세부사항을 입력하시면 연락드리겠습니다.</p>
                    <div class="row">
                        <div class="col-sm-3 col-xs-6">
                            <input type="text" class="form-control fch" name="name" placeholder="성명" required>
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <input type="email" class="form-control fch" name="email" placeholder="이메일" required>
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <select name="solution" id="solution" class="form-control fch">
                                <option value="Streaming Solution">스트리밍 솔루션</option>
                                <option value="Business Solution">비즈니스 솔루션</option>
                                <option value="AI Integration">AI 통합</option>
                                <option value="Web Crawler">웹 크롤러</option>
                                <option value="HR Solution">HR 솔루션</option>
                                <option value="Mobile Apps">모바일 앱</option>
                                <option value="ECommerce and Web Solution">E-커머스 및 웹 솔루션</option>
                                <option value="Others">기타</option>
                            </select>
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <!-- <a href="#" class="view-more modify">Contact Us &rarr;</a> -->
                            <button type="submit" class="btn btn-primary view-more modify">문의하기 &rarr;</button>
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

<!-- HOME PAGE END -->
