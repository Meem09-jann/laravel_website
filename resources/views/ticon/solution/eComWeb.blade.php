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
            <div class="col-sm-6" style="padding-left: 0px;position: relative; margin-bottom: 10px;">
                <!-- <img src="{{ asset('assets/img/social-media-advertising-tree.png') }}" alt="" class="service-details-bg"> -->
                <!-- <div style="width: 60%;height: 68vh;"></div> -->
                <img src="{{ asset('assets/img/seo-ecommerce.jpg') }}" alt="" class="service-details-img animatable fadeInUp">
            </div>
            <div class="col-sm-6 s-content-part">
                <p class="vertical-praimary-heading">ECOMMERCE & WEB SOLUTION</p>

                <p class="vertical-secondary-text animatable fadeInUP ">TICON CAN PROVIDE ONLINE MARKETPLACES, AUCTIONS, REAL ESTATE, NEWS & BROADCASTING, MEDIA & ENTERTAINMENT, AND SOCIAL NETWORKS & COMMUNITIES.</p>
                <!-- <p class="vertical-secondary-text">We have solid skills and deep expertise in building enterprise solutions of various complexity levels. Our experience in Business Process Management, Resource Planning, Customer Relationship Management, Collaboration and other business
                    domains allows us to provide our customers with the best-practice custom solutions.</p> -->
                <!-- <img src="{{ asset('assets/img/222ed-3.png') }}" alt="" class="img-responsive animatable bounceIn"> -->
                <!-- <p class="vertical-secondary-heading animatable bounceIn ">ACCELERATED PRODUCT DEVELOPMENT FOR:</p> -->
                <ul style="list-style-type:circle;"  >
                    <li class="animatable fadeInUP" ><span>&rarr;</span>B2B and B2C marketplaces</li>
                    <li class="animatable fadeInUP" ><span>&rarr;</span>Auctions and bidding platforms</li>
                    <li class="animatable fadeInUP" ><span>&rarr;</span>Advanced booking applications</li>
                    <li class="animatable fadeInUP" ><span>&rarr;</span>B2B connectivity portals</li>
                    <li class="animatable fadeInUP" ><span>&rarr;</span>Content management systems (CMS)</li>
                    <li class="animatable fadeInUP" ><span>&rarr;</span>Customization, re-engineering of existing applications & frameworks.</li>
                    <li class="animatable fadeInUP" ><span>&rarr;</span>Media publishing</li>
                    <li class="animatable fadeInUP" ><span>&rarr;</span>Social Networking</li>
                    <li class="animatable fadeInUP" ><span>&rarr;</span>Content exchange and delivery</li>
                    <li class="animatable fadeInUP" ><span>&rarr;</span>Social commerce</li>
                    <li class="animatable fadeInUP" ><span>&rarr;</span>Billing solutions</li>
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
