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
            box-shadow: 0px 0px 32px 0px rgba(0, 0, 0, .5);
            display: block;
            margin: 0px auto;
        }
        .space li span {
            margin-right: 10px;
        }   
        .vertical-praimary-heading::after {
            bottom: -6px;
        }
    </style>
@endpush


@section('content')
    <!-- PAGE CONTANT START -->
    <div class="container-div home-block-3">
        <div class="row mglr ">
            <div class="col-sm-6" style="margin-bottom: 10px;">
                <img src="{{ asset('assets/img/products/fotoboss.png') }}" alt="" class="service-details-img">
            </div>
            <div class="col-sm-6 s-content-part">
                <p class="vertical-praimary-heading">FotoBoss</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">클라이언트 명:-</p>

                <p class="vertical-secondary-text animatable fadeInUp ">HD Signature, 대한민국</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">플랫폼:</p>

                <p class="vertical-secondary-text animatable fadeInUp ">웹 애플리케이션</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">사용된 테크놀로지 :</p>

                <p class="vertical-secondary-text animatable fadeInUp">Kravla Web Crawler, PHP(CodeIgniter), MySQL Database, JavaScript</p>


                <p class="vertical-secondary-heading animatable fadeInUp ">제품 설명: </p>
                <ul style="list-style-type:circle;" class="animatable fadeInUp " >
                    <li><span>&rarr;</span>커스텀 할 수 있는 독특한 프런트엔드 디자인.</li>
                    <li><span>&rarr;</span>3단계의 사용자 액세스가 가능한 광범위한 기능을 갖춘 전체 CMS.</li>
                    <li><span>&rarr;</span>사진 저장을 위해 AWS S3를 사용.</li>
                    <li><span>&rarr;</span>모든 소셜 플랫폼 공유와 함께 소셜 로그인/가입은 이미 통합되어 있습니다.</li>
                    <li><span>&rarr;</span>자세한 분석 & 보고가 가능합니다.</li>

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
