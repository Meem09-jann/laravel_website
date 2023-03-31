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
                <p class="vertical-praimary-heading">SOFTWARE PRODUCT DEVELOPMENT</p>

                <p class="vertical-secondary-text animatable fadeInUp" style="margin-top: 50px;">TiCON is a full-cycle software product development (SPD) service provider and supports you at any stage of your product evolution – from a simple idea to product implementation, support and maintenance.</p>
                <!-- <p class="vertical-secondary-text">We have solid skills and deep expertise in building enterprise solutions of various complexity levels. Our experience in Business Process Management, Resource Planning, Customer Relationship Management, Collaboration and other business
                    domains allows us to provide our customers with the best-practice custom solutions.</p> -->
                <img src="{{ asset('assets/img/wwed-1.png')}}" alt="" class="img-responsive animatable fadeInUp">
                <p class="vertical-secondary-heading animatable fadeInUp ">ACCELERATED PRODUCT DEVELOPMENT FOR:</p>
                <ul style="list-style-type:circle;line-height: 27px;" class="animatable fadeInUp space" >
                    <li><span>&rarr;</span>Independent Software Vendors (ISVs)</li>
                    <li><span>&rarr;</span>Software base any service Provider</li>
                    <li><span>&rarr;</span>LIVE Streaming & Video on Demand Service Provider</li>
                    <li><span>&rarr;</span>Hardware Vendors, Specially Android Platform and IOT</li>
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
