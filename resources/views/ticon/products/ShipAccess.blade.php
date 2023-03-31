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
                <img src="{{ asset('assets/img/products/ShipAccess_BIG.png') }}" alt="" class="service-details-img">
            </div>
            <div class="col-sm-6 s-content-part">
                <p class="vertical-praimary-heading">ShipEntry</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">Platform:</p>
                <p class="vertical-secondary-text animatable fadeInUp ">Android</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">Used Technology :</p>

                <p class="vertical-secondary-text animatable fadeInUp">MVVM with Jetpack components</p>    
             
                <p class="vertical-secondary-heading animatable fadeInUp ">Product Description: </p>
                <ul style="list-style-type:circle;" class="animatable fadeInUp " >
                    <li><span>&rarr;</span>QR code And ID card scanner</li>
                    <li><span>&rarr;</span>Google Cloud Vision API</li>
                    <li><span>&rarr;</span>Retrofit, Room Database</li>
                    <!-- <li><span>&rarr;</span>Customization, re-engineering of existing applications & frameworks.</li> -->
                
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