<!-- HOME PAGE START -->
@extends('layouts.master')

<!-- ADD CSS HERE -->
@push('css')
    <style>
        .ui-widget-content {border:none}
        .fa-times-circle-o{
            color: red
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
    
    </style>
@endpush

@section('content')
    <!-- PAGE CONTANT START -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">

        <div class="home-block-3" id="scroll-to">
            <div class="container">

                <p class="block-3-service"><span style="color: #0091E3;font-size: 18px;font-weight: 700;margin-right: 10px">___</span></p>
                <h2 class="block-3-heading" style="margin-bottom: 35px;">우리가 하는 <span style="font-weight: 900">일</span> <span style="color: #0091E3;font-weight: 600;font-size: 12px;margin-left: -8px;">&#9679;</span></h2>


                <div class="row mglr">
                    <div class="col-sm-4 col-xs-12 clearfix animatable fadeInUp">
                        <div class="left-side-icon" style="float: left;width: 30%">
                            <img src="assets/img/s-icon-5.png" alt="Web icon" title="icon" class="service-icons" style="width: 100%;">
                        </div>

                        <div class="right-side-text" style="float: left;width: 70%;">
                            <h4 class="left-heading">라이브 TV 및 VOD 스트리밍 솔루션</h4>
                            <p class="left-pera">
                                TiCON은 라이브 스트리밍, 주문형 비디오, 다중 사이트 관리, 이벤트 방송 등을 할 수 있도록 안정적이고 최고의 성능의 비디오 스트리밍 솔루션을 제공할 수 있습니다.
                            </p>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-12 clearfix animatable fadeInUp">
                        <div class="left-side-icon" style="float: left;width: 30%">
                            <img src="assets/img/s-icon-7.png" alt="Web icon" title="icon" class="service-icons" style="width: 100%;">
                        </div>

                        <div class="right-side-text" style="float: left;width: 70%;">
                            <h4 class="left-heading">웹 개발</h4>
                            <p class="left-pera">
                                방글라데시와 대한민국에서 신뢰할 수 있는 웹 개발 회사 중, 우리는 전 세계에 퍼져 있는 우리의 클라이언트들에게 엔드 투 엔드 웹 개발 서비스를 제공합니다.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12 clearfix animatable fadeInUp">
                        <div class="left-side-icon" style="float: left;width: 30%">
                            <img src="assets/img/s-icon-3.png" alt="Web icon" title="icon" class="service-icons" style="width: 100%;">
                        </div>

                        <div class="right-side-text" style="float: left;width: 70%;">
                            <h4 class="left-heading">소프트웨어 개발</h4>
                            <p class="left-pera">
                            비즈니스 프로세스 관리, 리소스 계획, 클라이언트 관계 관리, 협업 및 기타 비즈니스 도메인에 대한 경험을 통해 클라이언트에게 최상의 맞춤형 솔루션을 제공할 수 있습니다.</p>
                        </div>
                    </div>
                </div>

                <div class="row mglr">
                    <div class="col-sm-4 col-xs-12 clearfix animatable fadeInUp">
                        <div class="left-side-icon" style="float: left;width: 30%">
                            <img src="assets/img/s-icon-2.png" alt="Web icon" title="icon" class="service-icons" style="width: 100%;">
                        </div>

                        <div class="right-side-text" style="float: left;width: 70%;">
                            <h4 class="left-heading">앱 개발</h4>
                            <p class="left-pera">
                                방글라데시와 대한민국에서 신뢰할 수 있는 모바일 앱 개발 회사로서, 우리는 급속하게 성장을 하는 스타트 업 및 선도적인 기업들에 완벽한 개발 파트너사로서 모든 모바일 기기에 최적화된 언어 애플리케이션 생성과 제공에 있어 앱 개발 업계를 선도하고 있습니다.
                            </p>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-12 clearfix animatable fadeInUp">
                        <div class="left-side-icon" style="float: left;width: 30%">
                            <img src="assets/img/s-icon-4.png" alt="Web icon" title="icon" class="service-icons" style="width: 100%;">
                        </div>

                        <div class="right-side-text" style="float: left;width: 70%;">
                            <h4 class="left-heading">엔터프라이즈 애플리케이션 통합</h4>
                            <p class="left-pera">
                            우리는 여러 부서가 참여하는 높은 수준의 비즈니스 프로세스, 정밀한 처리가 필요한 애플리케이션 및 데이터 소스, 및 원활한 데이터 교환 및 통합 비즈니스 규칙 실행이 필요한 기업들에 개선 및 지원에 대한 모든 솔루션을 도울 수 있습니다.
                        </p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12 clearfix animatable fadeInUp">
                        <div class="left-side-icon" style="float: left;width: 30%">
                            <img src="assets/img/s-icon-3.png" alt="Web icon" title="icon" class="service-icons" style="width: 100%;">
                        </div>

                        <div class="right-side-text" style="float: left;width: 70%;">
                            <h4 class="left-heading">소프트웨어 제품 개발</h4>
                            <p class="left-pera">
                            TiCON은 풀 사이클 소프트웨어 제품 개발(SPD) 서비스 제공자이며, 제품 진화의 모든 단계에서 귀하를 지원합니다. - 단순한 아이디어에서 제품 구현부터 지원 및 유지보수에 이르기까지.
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
                                <p class="overlay-text">스트리밍 솔루션</p>
                                <a href="{{url('product/bless-bit')}}" class="view-more" target="_blank">세부 내용 &rarr;</a>

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
                                <p class="overlay-text">인공 지능</p>
                                <a href="{{url('product/theia')}}" class="view-more">세부 내용 &rarr;</a>

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
                                <a href="{{url('product/ch-box')}}" class="view-more">세부 내용 &rarr;</a>

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
                                <h3 class="overlay-heading">HR 솔루션</h3>
                                <p class="overlay-text">HRMS, 채용, 비디오 인터뷰</p>
                                <a href="{{url('solution/hr-solution')}}" class="view-more">세부 내용 &rarr;</a>

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
                                <p class="overlay-text">VOD 콘텐츠</p>
                                <a href="{{url('product/ch-vod')}}" class="view-more">세부 내용 &rarr;</a>

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
                                <p class="overlay-text">트리비아 앱</p>
                                <a href="{{url('product/quiz-yard')}}" class="view-more">세부 내용 &rarr;</a>

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
                            
                                <a href="{{url('/portfolio')}}" class="view-more">포트폴리오 &rarr;</a>

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
                    <h3 class="recog aws_apn_title" style="text-align:left;">AWS 디지털 미디어 파트너 솔루션</h3>
                    <br>
                    <p style="color:#616262;font-size:16px;line-height:1.61">
                        최신 클라우드 설비를 통해 서비스 공급자로서 역량을 강화한 TiCON은 AWS 파트너 네트워크(APN) 지위를 달성했다고 발표했습니다.<br>
                        이 명칭은 TiCON이 소프트웨어 산업에서 기술적 숙련도와 클라이언트의 성공을 입증했음을 인정하며, 특히 당사의 스트리밍 'Engine BlessBit'는 AWS 파트너십을 통해 업계를 주도하고 있습니다.<br>
                        기업이 AWS에서 복잡한 프로젝트를 채택, 개발 및 구현할 수 있도록 설계된 전문 서비스를 제공하는 APN을 달성합니다.
                        APN 파트너는 AWS에 대한 깊은 전문 지식을 보유하고 AWS에서 원활하게 솔루션을 제공해야 합니다.
                    </p>
                    <p style="color:#616262;font-size:16px;line-height:1.61">
                    TiCON은 스트리밍 테크놀로지, 인공 지능, SaaS, 빅데이터, 웹, 앱 테크놀로지에 대한 전문적인 글로벌 정보 테크놀로지 공급업체입니다. 기존 클라이언트/파트너사들은 클라우드 및 인지 서비스를 통해 안정적인 서비스 운영을 실현하고 있습니다. 우리는 클라이언트와 긴밀하게 협력하여 보다 빠르고 일관된 소프트웨어 및 인프라 구축을 위해 근본적으로 안전한 인프라 자동화 코드, 구축 파이프라인 및 피드백 메커니즘을 개발합니다.
                    </p>
                    <br>
                    <p>Partner of</p>
                    <img src="assets/img/home/aws_apn.png" alt="AWS partner network" class="aws_img">
                    <a href="{{url('/apn')}}" class="view-more view-more-aws">더 보기 →</a>
                </div>

                <div class="col-sm-4">
                <img src="assets/img/Badge_1.png" alt="AWS partner network" class="ticon_aws_img">
                </div>

            </div>
        </div>

        <div class="home-block-5">
            <h3 class="recog">인정 내용</h3>
            <div class="wrap">
                <div class="slider" style="padding-top: 2%;">


                    <div class="new1 item">
                        <img src="assets/img/slider/soft_expo_2020_1.jpg" alt="Runners-Up trophy from BASIS" title=" ">
                        <p class="img-desc">BASIS SOFTEXPO 2020에 참여한 TiCON</p>
                    </div>

                    <div class="new1 item">
                        <img src="assets/img/slider/prize_basis_soft_expo.jpg" alt="Runners-Up trophy from BASIS" title=" ">
                        <p class="img-desc">BASIS SOFTEXPO 2020에서 시상식에 참여한 TiCON ( 미니 파빌리온 카테고리 부문 2위 수상 )</p>
                    </div>

                    <div class="new1 item">
                        <img src="assets/img/slider/soft_expo_2020.jpg" alt="Runners-Up trophy from BASIS" title=" ">
                        <p class="img-desc">BASIS SOFTEXPO 2020에서 CEMS-GLOBAL팀과 함께하는 TiCON</p>
                    </div>

                    <div class="new1 item">
                        <img src="assets/img/slider/soft_expo_2020_7.jpg" alt="Runners-Up trophy from BASIS" title=" ">
                        <p class="img-desc">BASIS SOFTEXPO 2020에 참여한 TiCON</p>
                    </div>

                    <div class="new1 item">
                        <img src="assets/img/slider/CebitAsean2018-b2b_With_japanese_Company.jpg" alt="Runners-Up trophy from BASIS" title=" ">
                        <p class="img-desc">CEBIT ASEAN THAILAND 2018에서 일본 회사와 B2B 미팅</p>
                    </div>

                    <div class="new1 item">
                        <img src="assets/img/slider/CebitAsean2018-b2b_With_japanese_Company2.jpg" alt="Runners-Up trophy from BASIS" title=" ">
                        <p class="img-desc">CEBIT ASEAN THAILAND 2018에서 일본 회사와 B2B 미팅</p>
                    </div>

                    <div class="new1 item">
                        <img src="assets/img/Website_Design_14.png" alt="Runners-Up trophy from BASIS" title=" ">
                        <p class="img-desc">BASIS에서 러너즈업 트로피 수상</p>
                    </div>
                    <div class="new1 item">
                        <img src="assets/img/Website_Design_15.png" alt="Trophy image" title="Recognitions">
                        <p class="img-desc">BASIS로부터 수상한 러너즈업 트로피</p>
                    </div>
                    <div class="new1 item">
                        <img src="assets/img/slider/At Will Co. Ltd Event in Japan, HDTELECOM & TiCON.jpg" alt="At Will Co. Ltd Event in Japan" title="Recognitions">
                        <p class="img-desc">일본 내 WILL CO. LTD 이벤트,  HDTELECOM & TiCON</p>
                    </div>
                    <div class="new1 item">
                        <img src="assets/img/slider/MOU Between RANKSTEL, TiCON & HDTELECOM Korea.jpg" alt="MOU Between RANKSTEL, TiCON & HDTELECOM Korea" title="Recognitions">
                        <p class="img-desc">RANKSTEL과 MOU, TiCON & HDTELECOM 코리아</p>
                    </div>
                    <div class="new1 item">
                        <img src="assets/img/slider/Products Launching Event of Japan Partner.jpg" alt="Products Launching Event of Japan Partner" title="Recognitions">
                        <p class="img-desc">일본 파트너 제품 출시 이벤트</p>
                    </div>
                    <div class="new1 item">
                        <img src="assets/img/slider/Signing Ceremony Between TiCON & CorePlanet Korea.jpg" alt="TiCON & CorePlanet Korea" title="Recognitions">
                        <p class="img-desc">TiCON & COREPLANET 코리아 업무제휴에 관한 협약 체결식</p>
                    </div>
                    <div class="new1 item">
                        <img src="assets/img/slider/Signing Ceremony Between TiCON & OJWorld  Korea.jpg" alt="TiCON & OJWorld  Korea" title="Recognitions">
                        <p class="img-desc">TiCON & OJWORLD 코리아 업무제휴에 관한 협약 체결식</p>
                    </div>
                    <div class="new1 item">
                        <img src="assets/img/slider/Lets enjoy the power of solution.png" alt="TiCON Logo" title="Recognitions">
                        <p class="img-desc">솔루션의 힘을 즐기자</p>
                    </div>
                    <div class="new1 item">
                        <img src="assets/img/Company_About_1.png" alt="TiCon Family In Bangladesh Office" title="Recognitions">
                        <p class="img-desc">방글라데시 사무소의 티콘 가족</p>
                    </div>
                    <div class="new1 item">
                        <img src="assets/img/anniversary.png" alt="TiCon Family In Bangladesh Office" title="Recognitions">
                        <p class="img-desc">12주년 기념식!</p>
                    </div>
                    <div class="new1 item">
                        <img src="assets/img/blessbit_award.png" alt="TiCon Family In Bangladesh Office" title="Recognitions">
                        <p class="img-desc">BASIS National ICT Award 2019에서 BlessBIT 부문 1위 수상</p>
                    </div>
                    <div class="new1 item">
                        <img src="assets/img/news_of_award.png" alt="TiCon Family In Bangladesh Office" title="Recognitions">
                        <p class="img-desc">국내 전자신문에서 National  ICT Award에 대한 뉴스</p>
                    </div>
                    <div class="new1 item">
                        <img src="assets/img/trophy_certificate.png" alt="TiCon Family In Bangladesh Office" title="Recognitions">
                        <p class="img-desc">BASIS National ICT Award 2019에서 1위 러너즈업 트로피 및 인증서</p>
                    </div>
                    <div class="new1 item">
                        <img src="assets/img/aws_apn_card.png" alt="TiCon Family In Bangladesh Office" title="Recognitions">
                        <p class="img-desc">방글라데시의 첫 번째 AWS 테크놀로지 파트너!</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-block-6" style=" background-image: url('Streaming/img/slider/slider-1.png');">
            <div class="container">
                <form action="{{url('/home/siteuseradd')}}" method="post">
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
                                <option value="ECommerce and Web Solution">E-커머스 & 웹 솔루션</option>
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

    