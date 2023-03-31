<!-- CONTACT PAGE START -->
@extends('layouts.master')

<!-- ADD CSS HERE -->
@push('css')
    <style>
        .aboutsec1 {
            padding-bottom: 0% !important;
            position: relative;
            /*background-color: #f7f7f7;*/
        }
        
        .innertextleft {
            padding: 3% 0px 10px 0px;
        }
        
        .info_innner {
            margin: 8px 15px;
            background: #fff;
            padding: 10px 0px;
            box-shadow: 0px 0px 3px 0px rgba(0, 0, 0, .4);
            display: flex;
        }
        
        .gm-style .place-card-large {
            margin-left: 222px !important;
            padding: 15px 8px 12px 11px;
        }
        
        .map {
            margin-top: 14%;
            overflow: hidden;
            width: 100%;
            /* padding: 10px;*/
            /*box-shadow: 0px 0px 14px 0px rgba(0,0,0,.5);*/
        }
        
        .Contact-Section.wrapper.ispage.aboutsec1 .row {
            margin-left: 0px;
            margin-right: 0px;
        }
        
        .p-style a {
            text-transform:capitalize;
        }
        @media (max-width:767.98px){
            .info_innner{
                display:block;
            }
        }
    </style>
@endpush

@section('content')
    <!-- PAGE CONTANT START -->
    <div class="container">
        <div class="Contact-Section wrapper ispage aboutsec1">
            <div class="row">
                <div class="col-sm-12">
                    <div class="innertextleft">
                        <h3 class="main-title">문의하기<span>.</span></h3>
                        <p class="p-style">TiCON시스템은 IT 아웃소싱 및 소프트웨어 개발 회사이며, 일부 통신 서비스와 컨설팅도 제공합니다. 우리 회사는 대한민국과 방글라데시에 등록하였습니다.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="info_innner clearfix">
                    <div class="col-sm-6">
                        <div class="row" style="padding-top: 20px;padding-bottom: 20px">
                            <div class="col-xs-8">
                                <div class="su-column-inner su-clearfix">
                                    <h3 class="sub-title">방글라데시 오피스</h3>
                                    <p class="p-style">Level 6, House of Veritas, <br>8 Gareeb-e-Nawaz Ave, <br>Sector-13, Uttara , Dhaka-1230, Bangladesh.<br>Phone : +8801777174791</p>
                                    <!-- <p class="p-style">Phone: +8801713525654 <br>Email:- info@ticonsys.com</p> -->
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="su-column-inner su-clearfix">
                                    <h3 class="sub-title">우리를 찾아주세요.</h3>
                                    <!-- <p class="p-style"><a href="#">Email Us</a></p> -->
                                    <p class="p-style">
                                        <a href="https://www.facebook.com/TiconSystem/" target="_blank">facebook</a><br>
                                        <a href="https://www.instagram.com/ticonsys/" target="_blank">instagram</a><br>
                                        <a href="https://twitter.com/ticonsystemltd" target="_blank">twitter</a><br>
                                        <a href="https://www.linkedin.com/company/ticonsys/" target="_blank">linkedin</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3068.0491333132723!2d90.38917754174206!3d23.87025508922483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c4111b8cae87%3A0x5ce8bd0a36678ad0!2sTiCON+System+Ltd.!5e0!3m2!1sen!2sbd!4v1537085551739"
                            height="100%" width="100%" frameborder="0" style="border:0;" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="info_innner clearfix">
                    <div class="col-sm-6">
                        <div style="padding-top: 20px;padding-bottom: 20px">
                            <div class="su-column-inner su-clearfix">
                                <h3 class="sub-title">주식회사 티콘시스템 본사</h3>

                                <p class="p-style">(우) 08380 <br>서울특별시 구로구 디지털로33길 27, 508호 <br>(구로동 197-5 삼성IT밸리)<br>대표전화 : 02-866-1477 <br> 모바일 : 010-9629-1477 & 010-9905-1039 </p>
                                    <!-- (82) 01096291477 -->
                            </div>
                            <br>
                            <div class="su-column-inner su-clearfix">
                                <p class="p-style">
                                    <span style="font-style: bold;color: #1d2330;font-size: 20px;font-weight: 500;">Email:-</span> info@ticonsys.com
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6331.857390204934!2d126.894817!3d37.486009!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8c6413ea7502b3c5!2sTiCON%20System%20Co.%20Ltd.%20(Korea)!5e0!3m2!1sen!2sbd!4v1571204186435!5m2!1sen!2sbd"
                            width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PAGE CONTANT END -->
@endsection

<!-- ADD JS HERE -->
@push('js')

@endpush

<!-- CONTACT PAGE END -->