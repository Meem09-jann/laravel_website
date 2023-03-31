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
               
                <img src="{{ asset('assets/img/desktopsupport.jpg') }}" alt="" class="service-details-img">
            </div>
            <div class="col-sm-6 s-content-part">
                <p class="vertical-praimary-heading">엔터프라이즈 애플리케이션 통합</p>

                <p class="vertical-secondary-text animatable fadeInUp" style="margin-top: 50px;">서로 다른 부서, 애플리케이션 및 데이터 소스를 포함하고, 직접 처리 요구, 원활한 데이터 교환 및 통합 비즈니스 규칙 실행을 해야 하는 높은 수준의 비즈니스 프로세스를 지원하고 개선할 수 있도록 기업을 지원합니다.</p>
                
                <img src="{{ asset('assets/img/222ed-3_kr.png') }}" alt="" class="img-responsive animatable fadeInUp">
                
                <ul style="list-style-type:circle;line-height: 27px; margin-top:35px;" class="animatable fadeInUp " >
                    <li><span>&rarr;</span>IT 보안 컨설팅.</li>
                    <li><span>&rarr;</span> IT 프로젝트 분석 및 계획.</li>
                    <li><span>&rarr;</span>포인트 투 포인트 통합 및 애드혹 솔루션.</li>
                    <li><span>&rarr;</span>커스텀 미들웨어 개발.</li>
                    <li><span>&rarr;</span>커스텀 데이터베이스 커넥터의 개발.</li>
                    <li><span>&rarr;</span>통합을 가능하게하는 기존 애플리케이션 및 프레임워크의 사용자 커스터마이제이션 및 리엔지니어링.</li>
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
