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
                <img src="{{ asset('assets/img/products/software-development-1-500x500.png') }}" alt="" class="service-details-img">
                
            </div>
            <div class="col-sm-6 s-content-part">
                <p class="vertical-praimary-heading">J VISION</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">클라이언트 명:</p>

                <p class="vertical-secondary-text animatable fadeInUp ">Will Co. Ltd (일본)</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">플랫폼:</p>
                <p class="vertical-secondary-text animatable fadeInUp ">안드로이드, 셋 톱 박스</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">사용된 테크놀로지 :</p>

                <p class="vertical-secondary-text animatable fadeInUp ">BlessBit Streaming Engine (TiCON Streaming Engine), FFmpeg, Netty, NGiNX, PHP (CodeIgniter), EXO Player (Android Native Player), Vitamio, MySQL Database.</p>                <!-- <p class="vertical-secondary-text">We have solid skills and deep expertise in building enterprise solutions of various complexity levels. Our experience in Business Process Management, Resource Planning, Customer Relationship Management, Collaboration and other business
                    domains allows us to provide our customers with the best-practice custom solutions.</p> -->
                <!-- <img src="<?php //echo base_url();?>./assets/img/222ed-3.png" alt="" class="img-responsive animatable fadeInUp"> -->
                <p class="vertical-secondary-heading animatable fadeInUp ">제품 설명: </p>
                <ul style="list-style-type:circle;" class="animatable fadeInUp " >
                    <li><span>&rarr;</span>웹 기반 콘텐츠 관리 시스템</li>
                    <li><span>&rarr;</span>웹 기반 사용자 관리 시스템</li>
                    <li><span>&rarr;</span>일본어 라이브 TV 콘텐츠</li>
                    <!-- <li><span>&rarr;</span>Blogging</li> -->
                    <!-- <li><span>&rarr;</span>Event</li> -->
                
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