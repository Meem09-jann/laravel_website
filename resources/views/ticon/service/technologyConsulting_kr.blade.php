<!-- PAGE START -->
@extends('layouts.master')

<!-- ADD CSS HERE -->
@push('css')
    <style>
        .service-details-bg {
            width: 60%;
            height: 600px;
        }
        
        .service-details-img {
            width: 65%;
            height: 370px;
            box-shadow: 0px 0px 30px -7px rgba(0, 0, 0, .5);
            margin: 0px auto;
            display: block;
            transition: all .3s;
        }
        
        .space li span {
            margin-right: 10px;
        }
    </style>
@endpush

@section('content')
    <!-- PAGE CONTANT START -->
    <div class="container-div home-block-3">
        <div class="row mglr ">
            <div class="col-sm-6" style="padding-left: 0px;position: relative;margin-bottom: 10px;">
                <!-- <img src="{{ asset('assets/img/social-media-advertising-tree.png') }}" alt="" class="service-details-bg"> -->
                <!-- <div style="width: 60%;height: 68vh;"></div> -->
                <img src="{{ asset('assets/img/consultency.png') }}" alt="" class="service-details-img">
            </div>
            <div class="col-sm-6 s-content-part">
                <p class="vertical-praimary-heading">테크놀로지 컨설팅</p>

                <p class="vertical-secondary-text animatable fadeInUp" style="margin-top: 50px;">특정 IT 관련 문제를 해결하는 것에서부터 IT에 의해 추진되는 전략적 비즈니스 혁신에 이르기까지, 여러 도메인 영역에 걸쳐 기업에 테크놀로지 컨설팅 서비스를 제공합니다. 귀사의 비즈니스, 관리 및 직원이 목표와 비즈니스 과제에 맞춰 정보 테크놀로지를 효율적이고 효과적으로 사용할 수 있도록 기능 노하우, 세부 이해, 리소스 및 심층적인 전문 지식을 갖춘 신뢰할 수 있는 IT 파트너가 되는 것을 목표로 합니다.</p>
                <!-- <p class="vertical-secondary-text">We have solid skills and deep expertise in building enterprise solutions of various complexity levels. Our experience in Business Process Management, Resource Planning, Customer Relationship Management, Collaboration and other business
                    domains allows us to provide our customers with the best-practice custom solutions.</p> -->
                <!-- <img src="{{ asset('assets/img/wwed-1.png') }}" alt="" class="img-responsive animatable fadeInUp"> -->
                <!-- <p class="vertical-secondary-heading animatable fadeInUp ">ACCELERATED PRODUCT DEVELOPMENT FOR:</p> -->
                <ul style="list-style-type:circle;line-height: 27px;">
                    <li class="animatable fadeInUp" ><span>&rarr;</span>IT 인프라 감사</li>
                    <li class="animatable fadeInUp" ><span>&rarr;</span>IT 전략 개발</li>
                    <li class="animatable fadeInUp" ><span>&rarr;</span>소프트웨어 아키텍처 검토 및 계획</li>
                    <li class="animatable fadeInUp" ><span>&rarr;</span>애플리케이션 보안 컨설팅</li>
                    <li class="animatable fadeInUp" ><span>&rarr;</span>프로젝트 요구 사항 정의 및 설계</li>
                    <li class="animatable fadeInUp" ><span>&rarr;</span>테크놀로지/프레임워크 선택</li>
                    <li class="animatable fadeInUp" ><span>&rarr;</span>비즈니스 프로세스 분석 및 형식화</li>
                </ul>


            </div>
        </div>
    </div>
    <!-- PAGE CONTANT END -->
@endsection

<!-- ADD JS HERE -->
@push('js')

@endpush

<!-- PAGE END -->
