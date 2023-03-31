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
              
                <img src="{{ asset('assets/img/Software.png')}}" alt="" class="service-details-img">
            </div>
            <div class="col-sm-6 s-content-part">
                <p class="vertical-praimary-heading">소프트웨어 제품 개발</p>

                <p class="vertical-secondary-text animatable fadeInUp" style="margin-top: 50px;">TiCON은 풀 사이클 소프트웨어 제품 개발 (SPD) 서비스 제공 업체이며 제품 진화의 모든 단계에서 고객을 지원합니다. – 간단한 아이디어에서 제품 구현, 지원 및 유지 보수까지.</p>
                <!-- <p class="vertical-secondary-text">We have solid skills and deep expertise in building enterprise solutions of various complexity levels. Our experience in Business Process Management, Resource Planning, Customer Relationship Management, Collaboration and other business
                    domains allows us to provide our customers with the best-practice custom solutions.</p> -->
                <img src="{{ asset('assets/img/wwed-1_kr.png')}}" alt="" class="img-responsive animatable fadeInUp">
                <p class="vertical-secondary-heading animatable fadeInUp ">가속화된 제품 개발:</p>
                <ul style="list-style-type:circle;line-height: 27px;" class="animatable fadeInUp space" >
                    <li><span>&rarr;</span>독립 소프트웨어 공급 업체(ISVs)</li>
                    <li><span>&rarr;</span>소프트웨어 기반 모든 서비스 제공 업체</li>
                    <li><span>&rarr;</span>라이브 스트리밍 및 주문형 비디오 서비스 제공 업체</li>
                    <li><span>&rarr;</span>하드웨어 공급 업체, 특히 안드로이드) 플랫폼 및 IoT</li>
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
