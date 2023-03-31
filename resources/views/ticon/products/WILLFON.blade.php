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
                <img src="{{ asset('assets/img/products/willfon-1-500x500.jpg') }}" alt="" class="service-details-img">
            </div>
            <div class="col-sm-6 s-content-part">
                <p class="vertical-praimary-heading">WILLFON</p>

                <p class="vertical-secondary-heading animatable fadeInUp ">Client Name:</p>

                <p class="vertical-secondary-text animatable fadeInUp ">Will Co. Ltd (Japan)</p>
                <p class="vertical-secondary-heading animatable fadeInUp ">Platform:</p>
                <p class="vertical-secondary-text animatable fadeInUp "> iOS, Android </p>

                <p class="vertical-secondary-heading animatable fadeInUp ">Used Technology :</p>

                <p class="vertical-secondary-text animatable fadeInUp ">SIP (Session Initial Protocol), Objective C, Visual Studio, SQL Lite, MySQL Database</p>               
               
                <p class="vertical-secondary-heading animatable fadeInUp ">Product Description: </p>
                <p class="vertical-secondary-text animatable fadeInUp ">Willfon is a Free Audio and Video calls from any Android device, including tablets, on any network. All you need is 3G or WiFi and you can connect with other Willfon users anywhere!</p>               
                <p class="vertical-secondary-text animatable fadeInUp ">Willfon users will get register with SMS activation.All users pin number will generated automatically as phone number include country code.User also add contact list and willfon user will display contact list.Another features are keep alive service, add group etc.</p>               
                <p class="vertical-secondary-text animatable fadeInUp ">Business, technology, communication and people concept – close up of woman holding tablet pc computer and having video chat with helpline operator at office or home</p>               



            </div>
        </div>
    </div>
    <!-- PAGE CONTANT END -->
@endsection


<!-- ADD JS HERE -->
@push('js')

@endpush

<!-- PAGE END -->