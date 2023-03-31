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
            position: absolute;
            top: 50%;
            left: 25%;
            transform: translateY(-50%);
            width: 60%;
            height: 370px;
            box-shadow: 0px 0px 32px 0px rgba(0, 0, 0, .5);
        }
    </style>
@endpush

@section('content')
    <!-- PAGE CONTANT START -->
    <div class="container-div home-block-3">
        <div class="row mglr">
            <div class="col-sm-6" style="padding-left: 0px;position: relative;margin-bottom: 10px;">
                <img src="{{asset('assets/img/Service_Details.png')}}" alt="" class="service-details-bg">
                <img src="{{asset('assets/img/Service_Details1.png')}}" alt="" class="service-details-img">
            </div>
            <div class="col-sm-6 s-content-part">
                <p class="vertical-praimary-heading">Custom Software Development</p>

                <p class="vertical-secondary-heading animatable fadeInUp">Enterprise Application Development:</p>
                <p class="vertical-secondary-text animatable fadeInUp">We have solid skills and deep expertise in building enterprise solutions of various complexity levels. Our experience in Business Process Management, Resource Planning, Customer Relationship Management, Collaboration and other business
                    domains allows us to provide our customers with the best-practice custom solutions.</p>

                <p class="vertical-secondary-heading animatable fadeInUp">Advanced Web Development:</p>
                <p class="vertical-secondary-text animatable fadeInUp">TiCON develops feature-rich custom web applications, sites and portals for corporate and internet-focused projects. Moreover, we do deliver full-cycle web solutions development, deployment and support services</p>

                <p class="vertical-secondary-heading animatable fadeInUp">Mobile Application Development:</p>
                <p class="vertical-secondary-text animatable fadeInUp">TiCON develops feature-rich custom web applications, sites and portals for corporate and internet-focused projects. Moreover, we do deliver full-cycle web solutions development, deployment and support services</p>

            </div>



        </div>



    </div>
    <!-- PAGE CONTANT END -->
@endsection

<!-- ADD JS HERE -->
@push('js')

@endpush

<!-- PAGE END -->
