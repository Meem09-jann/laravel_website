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

                <img src="{{ asset('assets/img/products/tigergen.png') }}" alt="" class="service-details-img">
            </div>
            <div class="col-sm-6 s-content-part">
                <p class="vertical-praimary-heading">Tiger Gen</p>

               <!--  <p class="vertical-secondary-heading animatable fadeInUp ">Client Name:</p>
                <p class="vertical-secondary-text animatable fadeInUp ">Will Co. Ltd (Japan)</p> -->


                <p class="vertical-secondary-heading animatable fadeInUp ">Platform:</p>
                <p class="vertical-secondary-text animatable fadeInUp ">Android, iOS</p>


                <p class="vertical-secondary-heading animatable fadeInUp ">Used Technology :</p>
                <p class="vertical-secondary-text animatable fadeInUp ">BlessBit Streaming Engine (TiCON Streaming Engine), FFmpeg, Netty, NGiNX, Custom Player, Objective-C, AFNetworking, Java</p>


                <p class="vertical-secondary-heading animatable fadeInUp ">Product Description: </p>
                <ul style="list-style-type:circle;" class="animatable fadeInUp " >
                    <li><span>&rarr;</span>Customized Streaming Player.</li>
                    <li><span>&rarr;</span>Super-fast scoreboard.</li>
                    <li><span>&rarr;</span>Notifications for live matches.</li>
                    <li><span>&rarr;</span>Schedules of upcoming matches.</li>  
                     <li><span>&rarr;</span>Non-Exclusive video content and match highlights videos.</li>
                    <li><span>&rarr;</span>Rankings, Stats and Records.</li>
                    <li><span>&rarr;</span>Live Gazi TV (GTV) Broadcasting.</li>  
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