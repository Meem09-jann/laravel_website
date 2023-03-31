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
                <!-- <img src="{{ asset('assets/img/social-media-advertising-tree.png') }}" alt="" class="service-details-bg"> -->
                <!-- <div style="width: 60%;height: 68vh;"></div> -->
                <img src="{{ asset('assets/img/consultency.png') }}" alt="" class="service-details-img">
            </div>
            <div class="col-sm-6 s-content-part">
                <p class="vertical-praimary-heading">TECHNOLOGY CONSULTING</p>

                <p class="vertical-secondary-text animatable fadeInUp" style="margin-top: 50px;">From resolving specific IT-related issues to strategic business transformation fueled by IT, we deliver technology consulting services to companies across multiple domain areas. We are aimed to become your reliable IT partner with the functional know-how, detailed understanding, resources and in-depth expertise to ensure that your business, management and staff use Information Technology efficiently, effectively and in-line with your goals and business challenges.</p>
                <!-- <p class="vertical-secondary-text">We have solid skills and deep expertise in building enterprise solutions of various complexity levels. Our experience in Business Process Management, Resource Planning, Customer Relationship Management, Collaboration and other business
                    domains allows us to provide our customers with the best-practice custom solutions.</p> -->
                <!-- <img src="{{ asset('assets/img/wwed-1.png') }}" alt="" class="img-responsive animatable fadeInUp"> -->
                <!-- <p class="vertical-secondary-heading animatable fadeInUp ">ACCELERATED PRODUCT DEVELOPMENT FOR:</p> -->
                <ul style="list-style-type:circle;line-height: 27px;">
                    <li class="animatable fadeInUp" ><span>&rarr;</span>IT Infrastructure Audit</li>
                    <li class="animatable fadeInUp" ><span>&rarr;</span>IT Strategy Development</li>
                    <li class="animatable fadeInUp" ><span>&rarr;</span>Software Architecture Review and Planning</li>
                    <li class="animatable fadeInUp" ><span>&rarr;</span>Application Security Consulting</li>
                    <li class="animatable fadeInUp" ><span>&rarr;</span>Project Requirements Definition and Design</li>
                    <li class="animatable fadeInUp" ><span>&rarr;</span>Choice of Technology / Framework</li>
                    <li class="animatable fadeInUp" ><span>&rarr;</span>Business Process Analysis and Formalization</li>
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
