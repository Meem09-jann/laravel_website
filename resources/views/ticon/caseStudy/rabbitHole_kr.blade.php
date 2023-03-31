<!-- PAGE START -->
@extends('layouts.master')

<!-- ADD CSS HERE -->
@push('css')
    <style>
        .case_study_con>*{
            font-family: 'Roboto', sans-serif;
        }
        .mast__title.transformNone{
            text-transform:none;
            letter-spacing:0;
        }
        .casestudy_no{
            color:#d7d7d7;
            font-size:4.5vw;
            display:inline-block;
            font-family: 'Roboto', sans-serif;
            margin:0px;
        }
        .casestudy_no span{
            color: #058ed7;
            margin-left: 0;
        }
        .main_rows{
            padding: 6% 0px 4%;
        }
        .casestudy_title{
            color:#141414;
            font-family: 'Roboto', sans-serif;
            font-size:2.2vw;
            margin:0px;
            padding-top:10px;
            font-weight: 400;
        }
        .case-cols{
            margin-bottom:15px;
        }
        .casestudyinfo{
            color:#353535;
            font-family: 'Roboto', sans-serif;
            font-size:1.1vw;
        }

        @media (max-width:1024px){
            .casestudyinfo{
                font-size:1.5vw;
            }
        }
        @media (max-width:767.98px){
            .casestudyinfo{
                font-size:13px;
            }
            .casestudy_title{
                font-size:18px;
            }
            .casestudy_no{
            font-size:5.5vw;}
            
        }
        hr {
            margin-top:0px;
            margin-bottom:0px;
        }
        .case_inner_col .casestudyinfo{
            padding-left:15px;
        }
        .case_inner_col,.case_inner_col1 {
            margin-bottom:4%;
        }
        .case_inner_col::before{
            content: "";
            width: 3px;
            height: 50px;
            background: #058ed7;
            position: absolute;
            top: 5px;
        }
        .choose_no{
            width: 32px;
            height: 32px;
            display: inline-block;
            text-align: center;
            border-radius: 50%;
            border: 2px solid #d7d7d7;
            line-height: 28px;
            font-size: 16px;
            color: #058ed7;;
            font-weight: 600;
        }
        .choose_title{
            color:#058ed7;
            font-weight:600;
            text-transform:uppercase;
            margin-bottom:0px;
            font-size:16px;
        }
        @media (min-width: 1200px){
            .container.case_study_con {
                width: 100%;
                padding: 0px 10%;
            }
        }
        @media (max-width:767.98px){
            .case_inner_col::before {
                content: "";
                width: 2px;
                height: 12px;
                background: #058ed7;
                position: absolute;
                top: 3px;
            }
        }
    </style>
@endpush
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

@section('content')
    <!-- PAGE CONTANT START -->
    <div class="container case_study_con">
        <div class="row main_rows">
            <div class="col-sm-4 case-cols">
                <h3 class="casestudy_no">01<span>.</span></h3>
                <h3 class="casestudy_title"><strong>개요</strong></h3>
            </div>

            <div class="col-sm-8 case-cols">
                <p class="casestudyinfo">당사의 제품 군중 하나인 스트리밍 솔루션 “BlessBit”를 활용한 사업자의 서비스 사례이며, 우수한 기능과 확장성, 유연성이 뛰어난 SaaS 플랫폼을 활용하여 비즈니스의 확신을 높이는 서비스는 info@ticonsys.com으로 문의해 주십시오.</p>
            </div>
            
        </div>
        <hr/>


        <div class="row main_rows">
            <div class="col-sm-4 case-cols">
                <h3 class="casestudy_no">02<span>.</span></h3>
                <h3 class="casestudy_title"><strong>RabbitHoleBD : 방글라데시 최초의 OTT 플랫폼</strong></h3>
            </div>

            <div class="col-sm-8 case-cols">
                <p class="casestudyinfo">2017부터 시작한 “RabbitholeBD”는 프리미엄 콘텐츠를 유료 서비스 제공하는 사업을 시작했으며, 프리미엄 스포츠 콘텐츠 서비스를 추가 확대로 충성도 있는 고객을 창출하고 매출이 확대되면서, 다른 프리미엄 유료 콘텐츠를 확대하는 비즈니스 모델을 추진하였으나 수년 동안 운영 후에는 기술적인 문제로 충성도 있는 유료 가입자 확보에 어려움이 발생되었으며, 당사의 “BlessBit”를 도입하여 문제를 해결하여, 사업자 <a href="https://www.rabbitholebd.com" target="_blank">RabbitHoleBD.com</a> 는 유료 가입자의 확보와 고객에게 고품질의 서비스를 제공하는 경험을 하고 있습니다.</p>
            </div>
        </div>
        <hr/>

        <div class="row main_rows">
            <div class="col-sm-4 case-cols">
                <h3 class="casestudy_no">03<span>.</span></h3>
                <h3 class="casestudy_title"><strong>도전과 기회</strong></h3>
            </div>

            <div class="col-sm-8 case-cols">
                <p class="casestudyinfo">“BlessBit”의 도입 전에 “RabbitHoleBD”의 문제는 아래와 같습니다</p>

                <div class="row">
                    <div class="col-sm-4 case_inner_col">
                        <p class="casestudyinfo">라이브 콘텐츠 제공 : 대규모 이벤트의 시작 시점에 시스템 다운되는 현상</p>
                    </div>
                    <div class="col-sm-4 case_inner_col">
                        <p class="casestudyinfo">시스템의 확장 불가 : 고정된 가입자에게만 서비스 제공</p>
                    </div>
                    <div class="col-sm-4 case_inner_col">
                        <p class="casestudyinfo">수동으로 리소스를 변경 :  항상 양쪽 종단에 리소스가 필요 (클라이언트-솔루션 공급자)</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 case_inner_col">
                        <p class="casestudyinfo">광고 관리가 제대로 응답하지 않아 광고 전달 타이밍이 어색</p>
                    </div>
                    <div class="col-sm-4 case_inner_col">
                        <p class="casestudyinfo">고정된 하드웨어/리소스 할당으로 인해 항상 고비용 구조의 인프라스트럭처</p>
                    </div>
                </div>
            </div>
        </div>
        <hr/>

        <div class="row main_rows">
            <div class="col-sm-4 case-cols">
                <h3 class="casestudy_no">04<span>.</span></h3>
                <h3 class="casestudy_title"><strong>“RabbitholeBD”</strong>가<strong>“BlessBit”</strong>을 선택한 이유</h3>
            </div>

            <div class="col-sm-8 case-cols">
                <div class="row">
                    <div class="col-sm-4 case_inner_col1">
                        <p class="choose_no">1</p>
                        <p class="choose_title">뛰어난 확장성과 유연성의 시스템 구조로</p>
                        <p class="casestudyinfo">월드컵 기간 최대 414,644명의 동시 사용자 접속 서비스를 제공 <br> 수동 작업이 거의 필요하지 않을 정도로 뛰어난 확장성 제공</p>
                    </div>
                    <div class="col-sm-4 case_inner_col1">
                        <p class="choose_no">2</p>
                        <p class="choose_title">콘텐츠 보안</p>
                        <p class="casestudyinfo">맞춤형 인증 시스템을 구현이며, CloudFront를 일대일 요청 및 응답 기능과 결합하여 콘텐츠를 보호하는 새로운 방법으로 오버헤드가 거의 없는 장점</p>
                    </div>
                    <div class="col-sm-4 case_inner_col1">
                        <p class="choose_no">3</p>
                        <p class="choose_title">다이내믹 광고 푸셔</p>
                        <p class="casestudyinfo">클라이언트는 원하는 시간에 언제든지 실시간으로 광고를 보낼 수 있고, 주문형 콘텐츠의 경우 클라이언트는 광고를 예약도 하고, 정확한 시간에 내보냄</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 case_inner_col1">
                        <p class="choose_no">4</p>
                        <p class="choose_title">강력한 트랜스코더</p>
                        <p class="casestudyinfo">가장 적합한 ffmpeg 프로필을 결정으로 클라이언트는 눈을 즐겁게 하는 시청뿐만 아니라 동시에 최적화된 CPU/GPU로 완벽하게 즐기게 됨</p>
                    </div>
                    <div class="col-sm-4 case_inner_col1">
                        <p class="choose_no">5</p>
                        <p class="choose_title">다이내믹 리포팅 제공</p>
                        <p class="casestudyinfo">자체 분석(자체 개발 AI 포함)과 타사분석 툴의 조합으로 관리 패널에서 광범위한 리포팅 기능 이용</p>
                    </div>
                </div>
            </div>
        </div>
        <hr/>

        <div class="row main_rows">
            <div class="col-sm-4 case-cols">
                <h3 class="casestudy_no">05<span>.</span></h3>
                <h3 class="casestudy_title"><strong>아키텍처</strong></h3>
            </div>

            <div class="col-sm-8 case-cols">
                <p class="casestudyinfo">“RabbitHoleBD.com”에서 사용되고 있는 아키텍처이며, 이 방법으로 운영 효율과 경제성을 달성</p>
                
                <img src="{{ asset('assets/img/CaseStudy.png')}}" alt="" class="img-responsive">
            </div>
        </div>
        <hr/>

        <div class="row main_rows">
            <div class="col-sm-4 case-cols">
                <h3 class="casestudy_no">06<span>.</span></h3>
                <h3 class="casestudy_title"><strong>“RabbitHoleBD”</strong>의 결과</h3>
            </div>

            <div class="col-sm-8 case-cols">
                <p class="casestudyinfo">RabbitHoleBD의 결과는 다음과 같습니다:</p>

                <div class="row">
                    <div class="col-sm-4 case_inner_col">
                        <p class="casestudyinfo">라이브 스트리밍에 AWS CloudFront를 사용해 고객은 엄청난 비용 절감 효과</p>
                    </div>
                    <div class="col-sm-4 case_inner_col">
                        <p class="casestudyinfo">강력한 보안을  AWS CloudFront와 함께 사용해 고객은 보안 및 비용 절감을 긍정적으로 실현</p>
                    </div>
                    <div class="col-sm-4 case_inner_col">
                        <p class="casestudyinfo">AWS RDS 및 ElastiCache를 사용하여 시스템 효율성이 향상되고 성능이 최고 수준으로 향상</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 case_inner_col">
                        <p class="casestudyinfo">백업으로 AWS Snapshot 및 AMI는 필요에 따라 새 웹 서버를 자동으로 제거하고 또는 배포하는 것이 “RabbitHoleBD.com”의 주요 비용 절감 지점이며, 리소스 낭비도 방지</p>
                    </div>
                    <div class="col-sm-4 case_inner_col">
                        <p class="casestudyinfo">AWS S3 및 CloudFront 기반 VOD 콘텐츠 전송은 “RabbitHoleBD” 시청자에게 확실한 체험을 보장</p>
                    </div>
                </div>
            </div>
        </div>
        <hr/>

        <div class="row main_rows">
            <div class="col-sm-4 case-cols">
                <h3 class="casestudy_no">07<span>.</span></h3>
                <h3 class="casestudy_title"><strong>결론</strong></h3>
            </div>

            <div class="col-sm-8 case-cols">
                <p class="casestudyinfo">“BlessBit”을 도입한 “RabbitHoleBD”는 수익, 성장, 비즈니스 확장 및 큰 고객 만족도를 크게 향상하여 장기적인 서비스를 가능하게 했고, 현재 90만 명의 등록 사용자를 보유한 “RabbitHoleBD”은 목표했던 프리미엄 콘텐츠 제공이 가능하다는 자신감을 확보
                <br><br>
                “BlessBit”을 통해 “RabbitHoleBD”은 비용 및 테크니컬 오버헤드를 최소화하며, 최고 수준의 서비스 제공
                <br><br>소프트웨어 및 웹 사이트에 대한 우수한 고객 지원과 결합하여 “RabbitHoleBD”의 서비스가 큰 성공을 거두는 데 일조 <br><br>티콘시스템은 “RabbitHoleBD”와 지속적인 협력으로 고객의 성공을 함께할 기대하고 있습니다.
                </p>
            </div>
            
        </div>
    </div>
    <!-- PAGE CONTANT END -->
@endsection

<!-- ADD JS HERE -->
@push('js')
    <script>
        $(document).ready(function() {
            $('.mast__title').addClass('transformNone');
        })
    </script>
@endpush

<!-- PAGE END -->
