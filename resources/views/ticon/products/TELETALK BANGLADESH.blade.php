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
                <img src="{{ asset('assets/img/products/logistics-mobile-apps-500x500.png') }}" alt="" class="service-details-img">
            </div>
            <div class="col-sm-6 s-content-part">
                <p class="vertical-praimary-heading">MOBILE APPLICATION FOR TELETALK BANGLADESH</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">Client Name:</p>

                <p class="vertical-secondary-text animatable fadeInUp ">Teletalk Bangladesh</p>
                <p class="vertical-secondary-heading animatable fadeInUp ">Platform:</p>

                <p class="vertical-secondary-text animatable fadeInUp ">IPhone, Android and Windows</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">Used Technology :</p>

                <p class="vertical-secondary-text animatable fadeInUp ">Java for Android platform, Swift language for IOS, Visual studio for Windows Platform, Yii2 Framework and MySQL</p>    
                <p class="vertical-secondary-heading animatable fadeInUp ">Product Description: </p>
                <ul style="list-style-type:circle;" class="animatable fadeInUp " >
                    <li><span>&rarr;</span>Subscribe to Tele Tune information.</li>
                    <li><span>&rarr;</span>Missed Call Alert (MCA) subscription information</li>
                    <li><span>&rarr;</span>Enjoy Mobile TV on just one click</li>
                    <li><span>&rarr;</span>SMS Push Pull Service info</li>
                    <li><span>&rarr;</span>Voice Based Service info</li>
                    <li><span>&rarr;</span>Details for applying on School, College, Medical College, e-SIF, e-FF etc</li>
                    <li><span>&rarr;</span>Mobile Financial Service & Utility bill payment information</li>
                    <li><span>&rarr;</span>All Recruitment & SMS based result related information on one click</li>
                
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
