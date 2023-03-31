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
            <div class="col-sm-6" style="padding-left: 0px;position: relative; margin-bottom: 10px;">
                <!-- <img src="{{ asset('assets/img/social-media-advertising-tree.png') }}" alt="" class="service-details-bg"> -->
                <!-- <div style="width: 60%;height: 68vh;"></div> -->
                <img src="{{ asset('assets/img/seo-ecommerce.jpg') }}" alt="" class="service-details-img animatable fadeInUp">
            </div>
            <div class="col-sm-6 s-content-part">
                <p class="vertical-praimary-heading">E-커머스 및 웹 솔루션</p>

                <p class="vertical-secondary-text animatable fadeInUP ">TiCON은 온라인 마켓플레이스, 경매, 부동산, 뉴스 & 방송, 미디어 & 엔터테인먼트, 소셜 네트워크 & 커뮤니티를 제공할 수 있습니다.</p>
                <!-- <p class="vertical-secondary-text">We have solid skills and deep expertise in building enterprise solutions of various complexity levels. Our experience in Business Process Management, Resource Planning, Customer Relationship Management, Collaboration and other business
                    domains allows us to provide our customers with the best-practice custom solutions.</p> -->
                <!-- <img src="{{ asset('assets/img/222ed-3.png') }}" alt="" class="img-responsive animatable bounceIn"> -->
                <!-- <p class="vertical-secondary-heading animatable bounceIn ">ACCELERATED PRODUCT DEVELOPMENT FOR:</p> -->
                <ul style="list-style-type:circle;"  >
                    <li class="animatable fadeInUP" ><span>&rarr;</span>B2B 및 B2C 마켓플레이스</li>
                    <li class="animatable fadeInUP" ><span>&rarr;</span>경매 및 입찰 플랫폼</li>
                    <li class="animatable fadeInUP" ><span>&rarr;</span>어드밴스드 예약 애플리케이션</li>
                    <li class="animatable fadeInUP" ><span>&rarr;</span>B2B 연결 포털</li>
                    <li class="animatable fadeInUP" ><span>&rarr;</span>콘텐츠 관리 시스템 (CMS)</li>
                    <li class="animatable fadeInUP" ><span>&rarr;</span>커스터마이제이션, 기존 애플리케이션 & 프레임워크의 리엔지니어링</li>
                    <li class="animatable fadeInUP" ><span>&rarr;</span>미디어 출판</li>
                    <li class="animatable fadeInUP" ><span>&rarr;</span>소셜 네트워킹</li>
                    <li class="animatable fadeInUP" ><span>&rarr;</span>콘텐츠 교환 및 전달</li>
                    <li class="animatable fadeInUP" ><span>&rarr;</span>소셜 커머스</li>
                    <li class="animatable fadeInUP" ><span>&rarr;</span>청구 솔루션</li>
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
