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

                <img src="{{ asset('assets/img/products/nrb.png') }}" alt="" class="service-details-img">
            </div>
            <div class="col-sm-6 s-content-part">
                <p class="vertical-praimary-heading">NRB TV</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">클라이언트 명:</p>
                <p class="vertical-secondary-text animatable fadeInUp ">NRBTV Canada</p>


                <p class="vertical-secondary-heading animatable fadeInUp ">플랫폼:</p>
                <p class="vertical-secondary-text animatable fadeInUp ">안드로이드</p>


                <p class="vertical-secondary-heading animatable fadeInUp ">사용된 테크놀로지 :</p>
                <p class="vertical-secondary-text animatable fadeInUp ">BlessBit Streaming Engine (TiCON Streaming Engine), FFmpeg, Netty, NGiNX, Custom Player, Java, Android Studio</p>


                <p class="vertical-secondary-heading animatable fadeInUp ">제품 설명: </p>
                <ul style="list-style-type:circle;" class="animatable fadeInUp " >
                    <li><span>&rarr;</span>안드로이드 기반 TV 채널.</li>
                    <li><span>&rarr;</span>커스텀 디자인된 비디오 플레이어.</li>
                    <li><span>&rarr;</span>버퍼리스 비디오 스트리밍</li>
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