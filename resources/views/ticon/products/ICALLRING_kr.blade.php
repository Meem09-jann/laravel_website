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
                <!-- <img src="{{ asset('assets/img/social-media-advertising-tree.png') }}" alt="" class="service-details-bg"> -->
                <!-- <div style="width: 60%;height: 68vh;"></div> -->
                <img src="{{ asset('assets/img/products/mobile-marketing_web-2244x1122-500x500.png') }}" alt="" class="service-details-img">
            </div>
            <div class="col-sm-6 s-content-part">
                <p class="vertical-praimary-heading">ICALLRING</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">클라이언트 명:</p>

                <p class="vertical-secondary-text animatable fadeInUp ">TW Mobile</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">플랫폼:</p>

                <p class="vertical-secondary-text animatable fadeInUp ">안드로이드</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">사용된 테크놀로지 :</p>

                <p class="vertical-secondary-text animatable fadeInUp ">Eclipse, NetBeans, Visual Studio, PHP(Codeigniter), SQL Lite, MySQL Database</p>  
                
                <p class="vertical-secondary-heading animatable fadeInUp ">제품 설명: </p>
                <ul style="list-style-type:circle;" class="animatable fadeInUp " >
                    <li><span>&rarr;</span>편집, 데코레이트 이미지 및 비디오</li>
                    <li><span>&rarr;</span>ICallRing 쿠폰</li>
                    <li><span>&rarr;</span>그룹 분류</li>
                    <li><span>&rarr;</span>최근 통화보기</li>
                    <li><span>&rarr;</span>광고 비디오 및 이미지를 벨소리로 </li>
                
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
