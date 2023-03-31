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
            position: absolute;
            top: 50%;
            left: 25%;
            transform: translateY(-50%);
            width: 60%;
            height: 370px;
            box-shadow: 0px 0px 32px 0px rgba(0, 0, 0, .5);
        }
    </style>
@endpush

@section('content')
    <!-- PAGE CONTANT START -->
    <div class="container-div home-block-3">
        <div class="row mglr">
            <div class="col-sm-6" style="padding-left: 0px;position: relative;margin-bottom: 10px;">
                <img src="{{asset('assets/img/Service_Details.png')}}" alt="" class="service-details-bg">
                <img src="{{asset('assets/img/Service_Details1.png')}}" alt="" class="service-details-img">
            </div>
            <div class="col-sm-6 s-content-part">
                <p class="vertical-praimary-heading">커스텀 소프트웨어 개발</p>

                <p class="vertical-secondary-heading animatable fadeInUp">엔터프라이즈 애플리케이션 개발:</p>
                <p class="vertical-secondary-text animatable fadeInUp">여러 가지 복잡한 수준들의 기업 솔루션을 구축하는 데 있어 견고한 기술과 깊은 전문 지식을 보유하고 있습니다. 비즈니스 프로세스 관리, 리소스 계획, 고객 관계 관리, 협업 및 기타 비즈니스 도메인에 대한 경험을 통해 고객에게 최상의 맞춤형 솔루션을 제공할 수 있습니다.</p>

                <p class="vertical-secondary-heading animatable fadeInUp">어드밴스드 웹 개발:</p>
                <p class="vertical-secondary-text animatable fadeInUp">TiCON은 기업 및 인터넷 중심 프로젝트를 위한 기능이 풍부한 맞춤형 웹 애플리케이션, 사이트 및 포털을 개발합니다. 또한 풀 사이클 웹 솔루션 개발, 배포 및 지원 서비스를 제공합니다.</p>

                <p class="vertical-secondary-heading animatable fadeInUp">모바일 애플리케이션 개발:</p>
                <p class="vertical-secondary-text animatable fadeInUp">TiCON은 기업 및 인터넷 중심 프로젝트를 위한 기능이 풍부한 맞춤형 웹 애플리케이션, 사이트 및 포털을 개발합니다. 또한 풀 사이클 웹 솔루션 개발, 배포 및 지원 서비스를 제공합니다.</p>

            </div>
        </div>
    </div>
    <!-- PAGE CONTANT END -->
@endsection

<!-- ADD JS HERE -->
@push('js')

@endpush

<!-- PAGE END -->
