<!-- COMPANY PAGE START -->
@extends('layouts.master')

<!-- ADD CSS HERE -->
@push('css')
    <style>
         .affix {
            top: 70px;
            z-index: 0 !important;
            width: 25%;
            transition: all .3s;
        }

        .container-div {
            /* background-color: #f8f8f8; */
        }

        .bgcolor {
            margin: 0px;
            padding: 0px;
            display: block;
            /* margin-top: 2%; */
            transition: all .3s;
        }

        @media (max-width: 767.98px) {
            .affix {
                top: 70px;
                z-index: 516 !important;
                width: 100%;
                height: 80px;
                transition: all .3s;

            }
            .affix+.for-affix-top {
                display: block;
                height: 110px;
            }

            .container-div {
                background-color: transparent;
            }
            .pdtp {
                padding-top: 17%;
            }
            .nav-tabs.nav-stacked>li {
                float: left !important;
                width: 50%;
                text-align: center;
            }
            .bgcolor {
                margin-top: 0px;
                background-color: #f8f8f8;
            }
        }

        .nav-pills>li>a {
            border-radius: 0px !important;
        }

        .well {
            min-height: 20px;
            padding: 19px;
            margin-bottom: 20px;
            background-color: #f5f5f5;
            border: 0px solid transparent !important;
            border-radius: 0px !important;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
        }

        .nav-stacked>li {
            /* margin-top: 2px; */
            margin-left: 0;
            width: 90%;
            margin: 0px auto;
        }

        .nav-stacked>li+li {
            margin: 0px auto;
        }

        .nav-pills>li.active>a,
        .nav-pills>li.active>a:focus,
        .nav-pills>li.active>a:hover {
            color: #000;
            background-color: transparent;
        }

        .nav-tabs>li.active>a,
        .nav-tabs>li.active>a:focus,
        .nav-tabs>li.active>a:hover {
            color: #333!important;
            cursor: default;
            border: 1px solid transparent;
            border-bottom-color: transparent;
            /* margin-top: 2px; */
            background:white!important;
            box-shadow: 0px 7px 14px 3px rgba(0, 0, 0, 0.1);
        }
        .nav-tabs>li>a:focus,
        .nav-tabs>li>a:hover {
            color: white!important;
            /* cursor: default; */
            background: #37CDF2!important;
            border-color:transparent;
            /* box-shadow: 0px 7px 14px 3px rgba(0, 0, 0, 0.1); */
        }

        .nav-tabs>li>a {
            padding: 10px 15px;
        }

        @media (max-width: 767.98px) {
            .nav-tabs>li.active>a,
            .nav-tabs>li.active>a:focus,
            .nav-tabs>li.active>a:hover {

                background-color: #ddd;

            }
            .nav-tabs>li>a {
                padding: 5px 15px;
            }
        }

        .nav-tabs {
            border-bottom: 0px solid transparent !important;
        }

        .nav-tabs>li>a {
            margin-right: 0px;
            line-height: 1.42857143;
            border: 1px solid transparent;
            border-radius: 5px !important;
            text-align: left;
            color: white;
            padding-left: 25px;
            font-size: 20px;
            /* font-weight: 600; */
        }
        .nav-tabs>li.active{
            font-weight: 600;
        }
        /* tab bg  */
        .tab_bg{
            background-image: url(./assets/img/tab_background.png);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: bottom;
            border-radius: 10px;
            padding: 35px 5px;
            /* width:80%; */
            margin:auto;
        }
        @media (max-width: 492px) {
            .bgcolor {
                height: max-content;
            }
            .nav-tabs>li>a {

                font-size: 12px;

            }
        }

        #tabs h6.section-title {
            color: #eee;
        }

        #tabs .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            color: #f3f3f3;
            background-color: transparent;
            border-color: transparent transparent #f3f3f3;
            border-bottom: 4px solid !important;
            font-size: 20px;
            font-weight: bold;
        }

        #tabs .nav-tabs .nav-link {
            border: 1px solid transparent;
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem;
            color: #eee;
            font-size: 20px;
        }

        .achivement-img {
            background-color: #fff;
            border-radius: 5px;
            padding: 10px;
            box-shadow: 0px 0px 35px rgba(0, 0, 0, .17);
        }
        .achivement-img-text {
            background: #E1FAFF;
            border-radius: 10px;
            padding: 10px;
            box-shadow: 0px 0px 35px rgba(0, 0, 0, .17);
        }

        .achivement-img-3 {
            background-color: #fff;
            border-radius: 5px;
            padding: 0px;
            box-shadow: 0px 0px 35px rgba(0, 0, 0, .17);
            position: relative;
        }

        .achivement-img-1 {
            width: 100%;
        }

        .achivement-img-2 {
            padding: 15px;
            box-shadow: 0px 0px 35px rgba(0, 0, 0, .17);
        }

        .achivement-img-2 h3 {
            color: #222;
            font-size: 1.8vw;
            font-weight: 600;
        }

        .achivement-img-2 p {
            color: #808080;
            font-size: 1.4vw;
            font-weight: 500;
        }

        .slider1 .slick-prev,
        .slider5 .slick-prev {
            left: auto !important;
            right: 60px;
            text-align: center;
        }

        .slick-next {
            right: 10px;
            text-align: center;
        }

        .slider1,
        .slider5 {}

        .slider1 .slick-arrow,
        .slider5 .slick-arrow {

            position: absolute;
            top: -19px;
            width: 30px;
            height: 30px;
            line-height: 0.5;
            margin-top: -19px;
            border: 1px solid #c5bfbf9c;
            background: transparent;
            color: rgb(103, 100, 100);
            background-color: rgba(255, 255, 255, 0.5);
            box-shadow: 2px 2px 8px 0px rgba(138, 148, 152, 0.63);
            font-family: monospace;
            font-size: 17px;
            z-index: 500;
            outline: none;
            border-radius: 50%;
            text-align: center;

        }

        .slider1 .slick-arrow:hover,
        .slider5 .slick-arrow:hover {


            border: 1px solid #14a2dfc4;

            color: #14a2dfc4;


        }

        .common-company {
            position: absolute;
            top: 0vw;
            right: 5%;
            font-size: 4vw;
            color: #efefef;
            font-weight: 700;
            opacity: 0.6;
            float: right;
            z-index: 0;
        }

        .slick-slide {
            padding: 15px;
            margin-top: .7%;
        }

        .slick-slideshow__slide::after {
            z-index: -1 !important;
        }

        .slick-slideshow__slide:focus {
            outline: none !important;
        }

        .slick-slideshow__slide1::after {
            z-index: -1 !important;
        }

        .slick-slideshow__slide1:focus {
            outline: none !important;
        }


        .new1.item .solution-img {
            width: 25%;
            height: 100%;
            display: block !important;
        }

        .new1.item .achivement-img-4 {
            width: 58% !important;
            height: 100%;
        }

        .new1.item {
            height: auto !important;
            padding: 0px;
            border-radius: 5px;
        }

        .new1.item:focus {
            outline: none;
        }

        .slick-slide:after {
            z-index: -1;
        }



        .achivement-upper {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /* padding: 15px; */
        }

        .left-images {
            width: 40%;
            float: left;
            display: block;
            margin-top: 10%;
        }

        .right-texts {
            width: 60%;
            float: left;
            display: block;
            background-color: transparent;
            margin-top: 7%;
            padding-right: 15px;
        }

        .achivement-img-4 {
            width: 60%;
            display: block;
            margin-left: auto;
            margin-right: auto;
            height: 60%;
            background-color: #fff;
            border: 1px solid #337ab7;
            padding: 10px;
            text-align: left;
        }

        .right-heading {
            color: #000;
            font-size: 17px;
            font-weight: 600;
        }

        .right-peras {
            color: #808080;
            font-size: 13px;
        }

        @media (max-width: 576px) {
            .right-heading {
                font-size: 1.8vw;
            }
            .right-peras {
                font-size: 1.5vw;
            }
            .achivement-img-2 h3 {
                font-size: 2.5vw;
            }
            .achivement-img-2 p {
                font-size: 2.1vw;
            }
        }

        @media (max-width: 376px) {
            .right-heading {
                font-size: 1.5vw;
                margin-top: 1%;
                margin-bottom: 3%;
            }
        }

        .about-txt {
            text-align:justify;
            color: #1E3B65;
            font-size: 15px;
            line-height: 24px;
            font-weight: 500;
            /* padding-right: 10px; */
            margin-bottom: 15px;
            /* padding-left: 10px; */
        }

        .client-slide-outer {
            background-color: #fff;
            padding: 5px;
            width: 100%;
            position: relative;
            box-shadow: 0px 0px 14px rgba(0, 0, 0, .14);
            margin-top: 22px;
        }

        .client-img {
            width: 135px;
            height: 135px;
            border-radius: 50%;
            border: 5px solid #fff;
            position: absolute;
            top: 0;
            left: 50%;
            transform: translate(-50%, -50%);
            box-shadow: 0px 0px 15px #969696;
        }

        @media (max-width: 700px) {
            .client-img {
                width: 12vw;
                height: 12.5vw;
            }
        }

        @media (max-width: 500px) {
            .client-img {
                width: 20vw;
                height: 20.5vw;
            }
        }

        .client-slide-inner {
            background-color: #ffffff;
            padding: 23% 2% 5% 2%;
            text-align: center;
            min-height: 170px;
        }

        .description {
            color: #646464;
            font-size: 15px;
            margin-top: 10px;
        }

        .client-name {
            color: #000;
            font-weight: 700;
            font-size: 16px;
            margin-top: 20px;
        }

        @media (min-width: 767px) and (max-width: 1440px) {
            .client-name {
                margin-top: 50px;
            }
            .client-slide-inner {
                min-height: 210px;
            }
        }

        .client-designation {
            color: #646464;
            font-size: 15px;
            margin-top: 0px;
        }

        /****** Style Star Rating Widget *****/

        .star-ratings-sprite {
            background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/2605/star-rating-sprite.png") repeat-x;
            font-size: 0;
            height: 21px;
            line-height: 0;
            overflow: hidden;
            text-indent: -999em;
            width: 110px;
            margin: 0 auto;
        }

        .star-ratings-sprite-rating {
            background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/2605/star-rating-sprite.png") repeat-x;
            background-position: 0 100%;
            float: left;
            height: 21px;
            display: block;
        }

        .welcome {
            color: #0c0c0c;
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 40px;
        }

        .welcome-pera {
            color: #616161;
            font-size: 18px;
            width: 70%;
        }

        .opening {
            margin-top: 35px;
        }

        .position {
            color: #0c0c0c;
            font-size: 22px;
            font-weight: 700;
            display: inline-block;
            float: left;
        }

        .num-of-open {
            color: #0c0c0c;
            font-size: 22px;
            font-weight: 700;
            display: inline-block;
            float: right;
        }

        .lists-of-positions {
            clear: both;
            margin-top: 15px;
        }

        .lists-of-positions li {
            list-style: none;
            color: #726f6f;
            cursor: pointer;
            padding: 5px;
            font-size: 16px;
            font-weight: 600;
        }

        .lists-of-positions li:hover,
        .lists-of-positions li:focus {
            color: #337ab7;
        }

        .build-scale {
            height: auto;
            position: relative;
            padding-left: 25px;
            padding-right: 8px;
        }

        .scale-text {
            padding: 7%;
            box-shadow: 0px 0px 35px rgba(0, 0, 0, .17);
            width: 85%;
            height: auto;
            overflow: none;
            position: static !important;
            z-index: 100;
            background-color: rgb(255, 254, 254);
            animation: moveInBottomScale;
            animation-duration: 3s;
            animation-delay: 1s;
            margin-left: 12%;
            margin-top: 12%;
        }

        .build-scale-1 {
            display: block;
            position: absolute;
            width: auto;
            height: auto;
            border: 2px solid #4dc0e7;
            z-index: -1;
            top: 0;
            left: 15px;
            right: 60%;
            bottom: 54%;
        }

        .scale-text::after {
            content: " ";
            display: table;
            clear: both;
        }

        @media (max-width:767.98px) {
            .position {
                color: #0c0c0c;
                font-size: 18px;
                font-weight: 600;
                display: inline-block;
                float: left;
            }
            .num-of-open {
                color: #0c0c0c;
                font-size: 18px;
                font-weight: 600;
                display: inline-block;
                float: right;
            }
            .welcome-pera {
                width: 90%;
            }


        }


        .tab-container {
            background-color: #fff;
            padding-top: 8%;
            padding-bottom: 50px;
        }

        @media (min-width: 768px) {
            .scale-text p {
                font-size: 17px;

            }
            .scale-text h3 {
                font-size: 25px;
            }
            
        }
        .pt-5{
            padding-top:2.5rem;
        }
        .pb-5{
            padding-bottom:2.5rem;
        }
        .history-ul li span {
            color: #14a2dfc4;
            margin-right: 10px;
            font-size: 26px;
            font-weight: 700;
            display: block;
            float: left;
            line-height: 24px;
        }

        .history-ul li {
            margin-top: 7px;
            margin-bottom: 7px;
            clear: both;
        }

        .history-ul li p {
            width: 90%;
            float: left;
            color: #6f6f6f;
            font-size: 16px;
            line-height: 30px;
        }

        @media (max-width: 450px) {
            .history-ul li p {
                width: 85%;
            }
        }

        /* bootstrap hack: fix content width inside hidden tabs */

        .tab-content>.tab-pane,
        .pill-content>.pill-pane {
            display: block !important;
            /* undo display:none          */
            height: 0 !important;
            /* height:0 is also invisible */
            overflow: hidden !important;
            /* no-overflow                */
        }

        .tab-content>.active,
        .pill-content>.active {
            height: auto !important;
            /* let the content decide it  */
        }

        .tab-content>.tab-pane.tab-pd.active {
            padding: 30px 20px;
        }

        .development_services_inner {
            position: relative;
            min-height: 306px;
            display: inline-block;
            margin: 0px 0% 30px 0%;
            padding: 15px 25px;
            width: 100%;
            transition: all .5s ease 0s;
            cursor: default;
            background: linear-gradient(114.05deg, #E1FAFF 0%, #FFFFFF 100.7%);
            box-shadow: 0px 23px 34px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .development_services_inner-2 {
            position: relative;
            /* min-height: 280px; */
            display: inline-block;
            margin: 0px 0% 2%;
            padding: 15px 15px;
            width: 100%;
            transition: all .5s ease 0s;
            cursor: default;
            /* background: linear-gradient(114.05deg, #E1FAFF 0%, #FFFFFF 100.7%);
            box-shadow: 0px 23px 34px rgba(0, 0, 0, 0.1); */
            border-radius: 10px;
            background: #E7EEF5;
        }

        /* .dev-mid {
            position: absolute;
            top: 14%;
            left: 50%;
            transform: translateX(-50%);
        } */
        .dev-mid {
            position: absolute;
            top: 50%;
            left: 0;
            transform: translatey(-50%);
        }

        .dev-mid-2 {
            /* position: absolute;
            top: 50%;
            transform: translateY(-50%);
            padding-right:15px; */
        }

        .welcome {
            margin-top: 0;
            color: #0c0c0c;
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 7px;
        }

        .tab-pane h3.common-company {
            display: none;
        }

        .tab-content>.tab-pane.active h3.common-company,
        .pill-content>.tab-pane.active h3.common-company {
            display: block;
        }

        .tab-content>.tab-pane.active {
            /* padding-top: 2%; */
        }

        .welcome1 {
            font-size: 32px;
            margin-bottom: 25px;
        }

        .tab-container {
            /* padding-top: 0px; */
        }

        /*.tab-content{
            padding-top: 8%;
        }*/

        input[type="file"] {
            z-index: -1;
            position: absolute;
            opacity: 0;
            display: none;
        }

        input:focus+label {
            outline: 0px solid;

        }

        input[type="file"]+label {
            padding: 11.5px 15px;
            background-color: aliceblue;
            border-top-left-radius: 4px;
            border-bottom-left-radius: 4px;
            cursor: pointer;
            margin-bottom: 0px;
        }
        .established_txt{
            margin-top:12.5%;text-align:left;padding-left:12%;font-size:18px;
        }
        /* about page css  */
        .right_icon{
            float:right;
            margin-top:3px;
            display:none;
        }
        .active .right_icon{
            display:inline-block;
        }
        .about_details{
            padding:15px 25px;
            /* background: linear-gradient(114.05deg, #E1FAFF 0%, #FFFFFF 100.7%); */
            /* box-shadow: 0px 23px 34px rgba(0, 0, 0, 0.1); */
            border-radius: 10px;
            background: #F1F8FF;
        }
        .p-0{
            padding:0;
        }
        .four_item{
            padding:15px;
            text-align:center;
            /* min-height:300px; */
            margin-bottom:0!important;
            background: #e7eef5 !important;
        }
        .four_item.border-left{
            border-left: 1px solid #3d93da1c;
        }
        .four_item.border-right{
            border-right: 1px solid #3d93da1c;
        }
        .four_item.border-top{
            border-top: 1px solid #3d93da1c;
        }
        .four_item.border-bottom{
            border-bottom: 1px solid #3d93da1c;
        }
        .blue_bg{
            background: #D9F3FF;
        }
        .white_bg{
            background: #FFFFFF;
        }
        .four_item_shadows{
            border-radius: 10px;
            margin-bottom: 15px!important;
            background-color:#e7eef5;
            padding:15px;
            box-shadow: 9px 9px 16px rgba(163, 177, 198, 0.6), -9px -9px 16px rgba(255, 255, 255, 0.6);
        }
        .achievment_div{
            padding:0px 30px;
        }
        .first_item_radious{
            border-top-left-radius: 10px;
        }
        .second_item_radious{
            border-top-right-radius: 10px;
        }
        .third_item_radious{
            border-bottom-left-radius: 10px;
        }
        .fourth_item_radious{
            border-bottom-right-radius: 10px;
        }
        .achievement{
            margin-top:20px;
        }
        .ac_heading{
            color: #1E3B65;
            font-size:23px;
            line-height:45px;
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
            font-style: normal;
            font-weight: bold;
        }
        .achieved{
            margin-top:5px;
            margin-bottom:30px;
        }
        .achieved .heading{
            font-size:20px;
            font-weight: 600;
            color: #3D93DA;
        }
        .achieved .description{
            color: #000000;
            font-size:15px;
            line-height:23px;
        }
        .view_heading{
            font-size:20px;
            color: #1F416D;
            font-weight:700;
        }
        .four_item .count{
            color: #686868;
            font-size:40px;
            font-weight:700;
        }
        .item_icons{
            height:75px;
            width:75px;
            margin-top:20px;
        }
        .value_img{
            width:100%;
        }
        .page_heading{
            color: #1E3B65;
            font-size:30px;
            font-weight:700;
            margin-bottom:30px;
        }
        .culture_item{
            padding: 25px 15px;
            text-align:center;
            background: #E9F5FF;
            border-radius: 10px;
            margin-bottom:30px;
        }
        .offwhite_div{
            background: #F5FBFF;
        }
        .culture_img{
            max-width:100px;
            max-height:100px;
        }
        .culture_item_head{
            color: #3D93DA;
            font-size:20px;
            font-weight:700;
        }
        .culture_item_details{
            font-size:15px;
            color: #3D3D3D;
            line-height:20px;
        }
        .client_img{
            width:100%;
            height:100%;
            margin-bottom:25px;
        }
        .m-0{
            margin:0;
        }
        .parents_div{
            /* background: #EDF8FF; */
            margin-bottom:20px;
        }
        .partner{
            background: #EDF8FF;
            padding:25px 35px;
            border-radius:10px;
        }
        .partner img{
            width:100%;
        }
        .vendors{
            padding:25px 35px;
            background: #EDF8FF;
            border-radius:10px;
        }
        .heading_p{
            color: #1E3B65;
            font-weight:700;
            font-size:25px;
        }
        .p_image{
            margin: 52px 0px;
            max-height: 153px;
            max-width: 400px;
        }
        .v_image{
            display:block;
            margin:20px 0px;
            max-width:100%;
        }
        .slider2 .slick-dots{
            display:none!important;
        }
        .about_div{
            padding:0px ;
            margin-bottom:20px;
        }
        .member_img{
            height:50px;
            max-width:100%;
            margin-bottom:40px;
        }
        .mb-0{
            margin-bottom:0px;
        }
        .pt-0{
            padding-top:0px !important;
        }
        .download-section{
            position: absolute;
            right: 95px;
            top: 37px;
            background: rgba(0,0,0,0.75);
            height: 40px;
            color: white;
            font-size: 23px;
            padding: 5px 10px;
            display: none;
        }
        .download-section a:hover{
            color: white;
        }
        .companyProfile.active .download-section{
            display: block;
        }
        @media (min-width:992px) and (max-width:1375px){
            .established_txt{
                font-size:11.5px;
            }
            
        }
        @media (min-width:1400px) and (max-width:1500px){
            .established_txt{
                font-size:15px;
            }
        }
        @media (min-width:1080px) and (max-width:1440px){
            .member_img {
                height: 40px;
                max-width: 100%;
            }
        }
        @media screen and (max-width: 1375px) {
            .tab_bg{
                width:100%;
            }
        }
        @media (max-width: 768px) {
            .nav-stacked>li+li {
                margin: 0px auto;
            }
            .achievment_div{
                padding:0px;
            }
            .four_item_shadows{
                padding:0!important;
            }
            .about_div{
                padding:0!important;
            }
            .member_img{
                height:auto;
                margin-bottom:25px;
            }
            .achievment_details_div{
                padding:0;
            }
        }
        @media screen and (max-width: 992px) {
            .active .right_icon{
                display:none;
            }
        }
    
        @media (max-width: 1199.98px) {
            .four_item_shadows{
                box-shadow:none!important;
                /* padding:0px 15px; */
            }
            .about_div{
                /* padding: 15px 30px; */
            }
        }
    </style>
@endpush

@section('content')
    <!-- PAGE CONTANT START -->
    <div class="container-div">
        <div class="row mglr">

            <div class="col-lg-3 col-md-4 col-sm-4 pt-5 pb-5">
                <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-pills nav-stacked bgcolor tab_bg" >
                    <li class="active"><a href="#vtab1" data-toggle="tab">About Us<span class="right_icon"><i class="fa fa-chevron-right"></i></span></a> </li>
                    <li><a href="#companyProfile" data-toggle="tab">Profile<span class="right_icon"><i class="fa fa-chevron-right"></i></span></a></li>
                    <li><a href="#vtab3" data-toggle="tab">Achievements<span class="right_icon"><i class="fa fa-chevron-right"></i></span></a></li>
                    <li><a href="#vtab4" data-toggle="tab">Our Team<span class="right_icon"><i class="fa fa-chevron-right"></i></span></a></li>
                    <li><a href="#vtab6" data-toggle="tab">Values We Carry<span class="right_icon"><i class="fa fa-chevron-right"></i></span></a></li>
                    <li><a href="#vtab7" data-toggle="tab">Culture<span class="right_icon"><i class="fa fa-chevron-right"></i></span></a></li>
                    <li><a href="#vtab8" data-toggle="tab">Journey<span class="right_icon"><i class="fa fa-chevron-right"></i></span></a></li>
                    <li><a href="#vtab9" data-toggle="tab">Valued Clients<span class="right_icon"><i class="fa fa-chevron-right"></i></span></a></li>
                    <li><a href="#vtab10" data-toggle="tab">Partner & Vendors<span class="right_icon"><i class="fa fa-chevron-right"></i></span></a></li>
                    <li><a href="#vtab5" data-toggle="tab">Career<span class="right_icon"><i class="fa fa-chevron-right"></i></span></a></li>
                </ul>
                <div class="for-affix-top"></div>
            </div>
            <div class="col-lg-9 col-md-8 col-sm-8 tab-container pt-5">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="vtab1">
                        <div class="row">
                            <div class="col-xs-12" style="margin-bottom: 10px;">
                                <div class="col-lg-7 col-md-12 col-sm-12 achievment_div" style="">
                                    <div class="row">
                                        <div class="col-xs-12 about_div" style="">
                                            <div class="about_details">
                                                <p class="about-txt" style="margin-top:15px;">TiCON System Ltd is doing business for Software Development, IT outsourcing, Communication Services and Consultancy. Our company registered in Korea & Bangladesh.</p>
                                                <p class="about-txt">Since 2007 we have been crafting technologies. Our team is extremely motivated and self-organized so it likely to provide a better result from any stage of a development project assuring the quality is maintained. We expertly develop various Software Products, Customized Technological Solution that helps Startup, Small & Medium Entrepreneurs & Large Enterprises building Cost-effective solution for their business process & services. </p>
                                                <p class="about-txt">Since our inception we have quickly grown strong relationships across the globe and have signed as outsourcing partners for numerous companies. Our expertise has taken us across borders, and we believe our visions will take us beyond success. </p>
                                            
                                            </div>
                                            
                                        </div>
                                        <div class="col-xs-12 p-0">
                                            <div class="development_services_inner-2">
                                                <div class="dev-mid-2">
                                                    <h3 class="welcome" style="padding-left:15px;padding-top:15px;color: #1E3B65;">Member Of </h3>
                                                    <div class="row" style="margin: 0px;padding: 25px 0px;">
                                                        <div class="col-md-4 col-xs-6" >
                                                            <img class="member_img " src="{{ asset('assets/img/basis-1.png')}}" class="img-responsive" alt="BASIS Image" title="" style="">
                                                        </div>
                                                        <div class="col-md-4 col-xs-6" >
                                                            <img class="member_img" src="{{ asset('assets/img/kosa.png')}}" class="img-responsive member__img" alt="KOSA Image" title="" style="">
                                                        </div>
                                                        <div class="col-md-4 col-xs-6">
                                                            <img class="member_img" src="{{ asset('assets/img/logo_kbcci.png')}}" class="img-responsive" alt="KBCCI Image" title="" style="">
                                                        </div>
                                                        <div class="col-md-6 col-xs-6 ">
                                                            <img class="member_img mb-0" src="{{ asset('assets/img/aiia.png')}}" class="img-responsive" alt="KBCCI Image" title="" style="">
                                                        </div>
                                                        <div class="col-md-6 col-xs-6">
                                                            <img class="member_img mb-0" src="{{ asset('assets/img/BCS logo.png')}}" class="img-responsive" alt="BCS Logo" title="" style="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 achievment_details_div" >
                                    <div class="row four_item_shadows m-0">
                                        <div class="col-sm-6 p-0 items">
                                            <div class="blue_bg four_item first_item_radious clients clearfix">
                                                <h2 class="view_heading">Client's</h2>
                                                <h1 class="count">50+</h1>
                                                <img class="item_icons" src="{{ asset('assets/img/clients.png')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 p-0 items">
                                            <div class="white_bg four_item second_item_radious clients clearfix">
                                                <h2 class="view_heading">Years of Experience</h2>
                                                <h1 class="count">13</h1>
                                                <img class="item_icons" src="{{ asset('assets/img/experience.png')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 p-0 items">
                                            <div class="white_bg four_item third_item_radious clients clearfix">
                                                <h2 class="view_heading">Software Products & Service</h2>
                                                <h1 class="count">10+</h1>
                                                <img class="item_icons" src="{{ asset('assets/img/technical-support.png')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 p-0 items">
                                            <div class="blue_bg four_item fourth_item_radious clients clearfix">
                                                <h2 class="view_heading">Team Members</h2>
                                                <h1 class="count">35+</h1>
                                                <img class="item_icons" src="{{ asset('assets/img/team.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>


                    <div role="tabpanel" class="tab-pane fade in" id="vtab3">
                        <!-- <h3 class="common-company">TiCON SYSTEM LIMITED</h3> -->
                        <div class="row mglr" style="margin-top: 25px;">
                            <div class="col-sm-6 col-sm-offset-3 col-xs-12" style="margin-bottom: 10px;">
                                <div class="achivement-img">
                                    <img src="{{ asset('assets/img/Website_Design_14.png')}}" class="achivement-img-1" alt="Image Of Recieving Trophy" title="">
                                </div>

                            </div>

                        </div>

                        <div class="col-sm-6 col-sm-offset-3 col-xs-12" style="margin-bottom: 10px;">
                            <div class="achivement-img"  style="text-align: center;">
                                <span>Recently Recieve Runners Up Trophy for BASIS Football World Cup Mania 2018 App Contest</span>
                            </div>

                        </div>


                        <div class="wrap">
                            <h3 style="padding-left: 15px;font-size: 20px;font-weight: 700;text-align: left;">All Achievements</h3>

                            <div class="slider5">

                                <div class="item new1">
                                    <div class="achivement-img-3">
                                        <img src="{{ asset('assets/img/achievement_bg.png')}}" class="achivement-img-1" alt="Agreement with PSTU Image" title="">

                                        <div class="achivement-upper">
                                            <div class="left-images">
                                                <center>
                                                    <img src="{{ asset('assets/img/pstu.png')}}" alt="Agreement with PSTU Image" title="" class="achivement-img-4">
                                                </center>
                                            </div>
                                            <div class="right-texts">

                                                <h3 class="right-heading">
                                                    Agreement With Patuakhali science and technology university
                                                </h3>
                                                <p class="right-peras">
                                                    Got agreement with leading Bangladeshi public university’s hospital management system in the year 2015 (University name : Patuakhali science and technology university).
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item new1">
                                    <div class="achivement-img-3">
                                        <img src="{{ asset('assets/img/achievement_bg.png')}}" alt="Image of Agreement with World Innovation Japan" title="" class="achivement-img-1">

                                        <div class="achivement-upper">
                                            <div class="left-images">
                                                <center>
                                                    <img src="{{ asset('assets/img/agreement.png')}}" alt="World Innovation" title="" class="achivement-img-4">
                                                </center>
                                            </div>
                                            <div class="right-texts">

                                                <h3 class="right-heading">
                                                    Agreement With World Innovation Japan
                                                </h3>
                                                <p class="right-peras">
                                                    Made Long term agreement with World innovation Japan for their all software project and consultancy, in the year 2014 delivered business process web base system and android app, Karaoke App and system, Android app shopping mall etc. Currently developing streaming system, IPTV and VOD apps.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item new1">
                                    <div class="achivement-img-3">
                                        <img src="{{ asset('assets/img/achievement_bg.png')}}" alt="Teletalk" title="" class="achivement-img-1">

                                        <div class="achivement-upper">
                                            <div class="left-images">
                                                <center>
                                                    <img src="{{ asset('assets/img/teletalk.png')}}" alt="Teletalk" title="" class="achivement-img-4">
                                                </center>
                                            </div>
                                            <div class="right-texts">

                                                <h3 class="right-heading">
                                                    Contract With Teletalk
                                                </h3>
                                                <p class="right-peras">
                                                    Contract with state own Bangladeshi Mobile Operator, Teletalk for App development project.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item new1">
                                    <div class="achivement-img-3">
                                        <img src="{{ asset('assets/img/achievement_bg.png')}}" alt="Agreement With Youstar Ltd" title="" class="achivement-img-1">

                                        <div class="achivement-upper">
                                            <div class="left-images">
                                                <center>
                                                    <img src="{{ asset('assets/img/agreement.png')}}" alt="Agreement With Youstar Ltd" title="" class="achivement-img-4">
                                                </center>
                                            </div>
                                            <div class="right-texts">

                                                <h3 class="right-heading">
                                                    Agreement With Youstar Ltd
                                                </h3>
                                                <p class="right-peras">
                                                    Agreement with Youstar Ltd for developed Embedded Digital Studio 2013.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item new1">
                                    <div class="achivement-img-3">
                                        <img src="{{ asset('assets/img/achievement_bg.png')}}" alt="Partnership With HD Telcom" title="" class="achivement-img-1">

                                        <div class="achivement-upper">
                                            <div class="left-images">
                                                <center>
                                                    <img src="{{ asset('assets/img/partnership.png')}}" alt="Partnership With HD Telcom" title="" class="achivement-img-4">
                                                </center>
                                            </div>
                                            <div class="right-texts">

                                                <h3 class="right-heading">
                                                    Partnership With HD Telcom, Korea
                                                </h3>
                                                <p class="right-peras">
                                                    Long term outsourcing and software development partnership with HD Telcom, Korea.

                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item new1">
                                    <div class="achivement-img-3">
                                        <img src="{{ asset('assets/img/achievement_bg.png')}}" alt="iCallRing" title="" class="achivement-img-1">

                                        <div class="achivement-upper">
                                            <div class="left-images">
                                                <center>
                                                    <img src="{{ asset('assets/img/developed.png')}}" alt="iCallRing" title="" class="achivement-img-4">
                                                </center>
                                            </div>
                                            <div class="right-texts">

                                                <h3 class="right-heading">
                                                    Developed iCallRing, Video & Image Ringtone Apps
                                                </h3>
                                                <p class="right-peras">
                                                    Developed iCallRing, video and image ringtone apps: TWMobile, service provider for this iCallRing.
                                                </p>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="item new1">
                                    <div class="achivement-img-3">
                                        <img src="{{ asset('assets/img/achievement_bg.png')}}" alt="Logo" title="" class="achivement-img-1">

                                        <div class="achivement-upper">
                                            <div class="left-images">
                                                <center>
                                                    <img src="{{ asset('assets/img/developed.png')}}" alt="Logo" title="" class="achivement-img-4">
                                                </center>
                                            </div>
                                            <div class="right-texts">

                                                <h3 class="right-heading">
                                                    Developed Banchin
                                                </h3>
                                                <p class="right-peras">
                                                    Developed Banchin, the social app in the year 2012.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item new1">
                                    <div class="achivement-img-3">
                                        <img src="{{ asset('assets/img/achievement_bg.png')}}" alt="Logo" title="" class="achivement-img-1">

                                        <div class="achivement-upper">
                                            <div class="left-images">
                                                <center>
                                                    <img src="{{ asset('assets/img/developed.png')}}" alt="Logo" title="" class="achivement-img-4">
                                                </center>
                                            </div>
                                            <div class="right-texts">

                                                <h3 class="right-heading">
                                                    Developed 5Dimensial Edu
                                                </h3>
                                                <p class="right-peras">
                                                    Developed 5Dimensial Edu, educational mobile apps: in year 2012.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item new1">
                                    <div class="achivement-img-3">
                                        <img src="{{ asset('assets/img/achievement_bg.png')}}" alt="Logo" title="" class="achivement-img-1">

                                        <div class="achivement-upper">
                                            <div class="left-images">
                                                <center>
                                                    <img src="{{ asset('assets/img/developed.png')}}" alt="Logo" title="" class="achivement-img-4">
                                                </center>
                                            </div>
                                            <div class="right-texts">

                                                <h3 class="right-heading">
                                                    Developed iNEAT
                                                </h3>
                                                <p class="right-peras">
                                                    Developed iNEAT, standard Languages skill test in Korea, 2011.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item new1">
                                    <div class="achivement-img-3">
                                        <img src="{{ asset('assets/img/achievement_bg.png')}}" alt="Logo" title="" class="achivement-img-1">

                                        <div class="achivement-upper">
                                            <div class="left-images">
                                                <center>
                                                    <img src="{{ asset('assets/img/contract.png')}}" alt="Logo" title="" class="achivement-img-4">
                                                </center>
                                            </div>
                                            <div class="right-texts">

                                                <h3 class="right-heading">
                                                    Contract with Grace Global Academy
                                                </h3>
                                                <p class="right-peras">
                                                    Contract with Grace Global Academy of Educational Contents and Apps in year 2011.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item new1">
                                    <div class="achivement-img-3">
                                        <img src="{{ asset('assets/img/achievement_bg.png')}}" alt="Logo" title="" class="achivement-img-1">

                                        <div class="achivement-upper">
                                            <div class="left-images">
                                                <center>
                                                    <img src="{{ asset('assets/img/partnership.png')}}" alt="Logo" title="" class="achivement-img-4">
                                                </center>
                                            </div>
                                            <div class="right-texts">

                                                <h3 class="right-heading">
                                                    Partnership with with Ahlab Inc. (Korea)
                                                </h3>
                                                <p class="right-peras">
                                                    Started Partnership with with Ahlab Inc. (Korea) in Year 2011.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item new1">
                                    <div class="achivement-img-3">
                                        <img src="{{ asset('assets/img/achievement_bg.png')}}" alt="Logo" title="" class="achivement-img-1">

                                        <div class="achivement-upper">
                                            <div class="left-images">
                                                <center>
                                                    <img src="{{ asset('assets/img/m-dev.png')}}" alt="Logo" title="" class="achivement-img-4">
                                                </center>
                                            </div>
                                            <div class="right-texts">

                                                <h3 class="right-heading">
                                                    Mobile Application Development Outsourcing Project
                                                </h3>
                                                <p class="right-peras">
                                                    Started Mobile Application Development outsourcing project in Year 2009
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item new1">
                                    <div class="achivement-img-3">
                                        <img src="{{ asset('assets/img/achievement_bg.png')}}" alt="Logo" title="" class="achivement-img-1">

                                        <div class="achivement-upper">
                                            <div class="left-images">
                                                <center>
                                                    <img src="{{ asset('assets/img/mvoip.png')}}" alt="Logo" title="" class="achivement-img-4">
                                                </center>
                                            </div>
                                            <div class="right-texts">

                                                <h3 class="right-heading">
                                                    Symbian Base MVoIP Solution
                                                </h3>
                                                <p class="right-peras">
                                                    Started Symbian Base MVoIP Solution under brand Name TiVOIZ in the year 2008.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item new1">
                                    <div class="achivement-img-3">
                                        <img src="{{ asset('assets/img/achievement_bg.png')}}" alt="Logo" title="" class="achivement-img-1">

                                        <div class="achivement-upper">
                                            <div class="left-images">
                                                <center>
                                                    <img src="{{ asset('assets/img/partnership.png')}}" alt="Logo" title="" class="achivement-img-4">
                                                </center>
                                            </div>
                                            <div class="right-texts">

                                                <h3 class="right-heading">
                                                    Partnership With Realstream Co. Ltd
                                                </h3>
                                                <p class="right-peras">
                                                    In the Year 2008, Started Calling Card Business in Korea, partnership with Realstream Co. Ltd
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item new1">
                                    <div class="achivement-img-3">
                                        <img src="{{ asset('assets/img/achievement_bg.png')}}" alt="Logo" title="" class="achivement-img-1">

                                        <div class="achivement-upper">
                                            <div class="left-images">
                                                <center>
                                                    <img src="{{ asset('assets/img/outsourcing.png')}}" alt="Logo" title="" class="achivement-img-4">
                                                </center>
                                            </div>
                                            <div class="right-texts">

                                                <h3 class="right-heading">
                                                    Got Outsourcing Software Development Work
                                                </h3>
                                                <p class="right-peras">
                                                    Got Outsourcing Software Development Work Order from Galaxy Telcom, Canada.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item new1">
                                    <div class="achivement-img-3">
                                        <img src="{{ asset('assets/img/achievement_bg.png')}}" alt="Logo" title="" class="achivement-img-1">

                                        <div class="achivement-upper">
                                            <div class="left-images">
                                                <center>
                                                    <img src="{{ asset('assets/img/business.png')}}" alt="Logo" title="" class="achivement-img-4">
                                                </center>
                                            </div>
                                            <div class="right-texts">

                                                <h3 class="right-heading">
                                                    Started Global Telcom Carrier Business
                                                </h3>
                                                <p class="right-peras">
                                                    Started Global Telcom Carrier Business in the year 2007
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>



                    <div role="tabpanel" class="tab-pane fade in" id="vtab4">
                        <h3 style="padding-left: 15px;font-size: 20px;font-weight: 700;">Our Team</h3>
                        <!-- <h3 class="common-company">TiCON SYSTEM LIMITED</h3> -->
                        <div class="slider2 slider1" style="padding-top: 5px;padding-bottom: 5px;">

                            <div class="slick-slideshow__slide1">
                                <div class="client-slide-outer">
                                    <img src="{{ asset('assets/img/mn-islam.png')}}" class="client-img">
                                    <div class="client-slide-inner">
                                        <p class="client-name">M N Islam</p>
                                        <p class="client-designation">CEO</p>
                                    </div>
                                </div>
                            </div>

                            <div class="slick-slideshow__slide1">
                                <div class="client-slide-outer">
                                    <img src="{{ asset('assets/img/azaher.png')}}" class="client-img">
                                    <div class="client-slide-inner">
                                        <!--                                    <div class="star-ratings-sprite"><span style="width:89%" class="star-ratings-sprite-rating"></span></div>-->
                                        <p class="client-name">M Azaher Uddin</p>
                                        <p class="client-designation">COO</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="slick-slideshow__slide1">
                                <div class="client-slide-outer">
                                    <img src="{{ asset('assets/img/rafiq.png')}}" alt="" class="client-img">
                                    <div class="client-slide-inner">
                                        <!--                                    <div class="star-ratings-sprite"><span style="width:89%" class="star-ratings-sprite-rating"></span></div>-->
                                        <p class="client-name">Mohammad Rafiqul Islam</p>
                                        <p class="client-designation">Director</p>
                                    </div>
                                </div>
                            </div>

                            <div class="slick-slideshow__slide1">
                                <div class="client-slide-outer">
                                    <img src="{{ asset('assets/img/anwar_bhai.png')}}" class="client-img">
                                    <div class="client-slide-inner">
                                        <p class="client-name">Anwar Hossain</p>
                                        <p class="client-designation">Director</p>
                                    </div>
                                </div>
                            </div>

                            

                            <div class="slick-slideshow__slide1">
                                <div class="client-slide-outer">
                                    <img src="{{ asset('assets/img/rana.png')}}" alt="" class="client-img">
                                    <div class="client-slide-inner">
                                        <p class="client-name">Bokhtiar Rahman Rana</p>
                                        <p class="client-designation">Chief Technology Officer</p>
                                    </div>
                                </div>
                            </div>

                            <div class="slick-slideshow__slide1">
                                <div class="client-slide-outer">
                                    <img src="{{ asset('assets/img/shaon.png')}}" alt="" class="client-img">
                                    <div class="client-slide-inner">
                                        <p class="client-name">S M Moshiur Rahman</p>
                                        <p class="client-designation">Coordinator, Business & Operation</p>
                                    </div>
                                </div>
                            </div>

                            <div class="slick-slideshow__slide1">
                                <div class="client-slide-outer">
                                    <img src="{{ asset('assets/img/tuhin.png')}}" alt="" class="client-img">
                                    <div class="client-slide-inner">
                                        <p class="client-name">Emdadul Hoque Tuhin</p>
                                        <p class="client-designation">Head Of R&D</p>
                                    </div>
                                </div>
                            </div>

                            <div class="slick-slideshow__slide1">
                                <div class="client-slide-outer">
                                    <img src="{{ asset('assets/img/samia.png')}}" alt="" class="client-img">
                                    <div class="client-slide-inner">
                                        <p class="client-name">Samia Rahman</p>
                                        <p class="client-designation">HR Manager</p>
                                    </div>
                                </div>
                            </div>

                            <div class="slick-slideshow__slide1">
                                <div class="client-slide-outer">
                                    <img src="{{ asset('assets/img/anas.png')}}" alt="" class="client-img">
                                    <div class="client-slide-inner">
                                        <p class="client-name">Md.Anas Bin Numan</p>
                                        <p class="client-designation">Head Of Software Development</p>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slideshow__slide1">
                                <div class="client-slide-outer">
                                    <img src="{{ asset('assets/img/zemu.png')}}" alt="" class="client-img">
                                    <div class="client-slide-inner">
                                        <p class="client-name">Md.Almansur Siddiqui</p>
                                        <p class="client-designation">Software Engineer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-slideshow__slide1">
                                <div class="client-slide-outer">
                                    <img src="{{ asset('assets/img/osman.png')}}" alt="" class="client-img">
                                    <div class="client-slide-inner">
                                        <p class="client-name">Osman Goni</p>
                                        <p class="client-designation">Software Engineer (Android)</p>
                                    </div>
                                </div>
                            </div>

                            <div class="slick-slideshow__slide1">
                                <div class="client-slide-outer">
                                    <img src="{{ asset('assets/img/shohan.jpg')}}" alt="" class="client-img">
                                    <div class="client-slide-inner">
                                        <p class="client-name">Md.Shohanur Rahman</p>
                                        <p class="client-designation">Software Engineer</p>
                                    </div>
                                </div>
                            </div>

                            <div class="slick-slideshow__slide1">
                                <div class="client-slide-outer">
                                    <img src="{{ asset('assets/img/tania.png')}}" alt="" class="client-img">
                                    <div class="client-slide-inner">
                                        <p class="client-name">Tahmina Tania</p>
                                        <p class="client-designation">UI-UX Designer </p>
                                    </div>
                                </div>
                            </div>

                            <div class="slick-slideshow__slide1">
                                <div class="client-slide-outer">
                                    <img src="{{ asset('assets/img/rabbi.png')}}" alt="" class="client-img">
                                    <div class="client-slide-inner">
                                        <p class="client-name">Rabby Uzzaman Khan</p>
                                        <p class="client-designation">Software Engineer</p>
                                    </div>
                                </div>
                            </div>

                            <div class="slick-slideshow__slide1">
                                <div class="client-slide-outer">
                                    <img src="{{ asset('assets/img/Jewel.jpg')}}" alt="" class="client-img">
                                    <div class="client-slide-inner">
                                        <p class="client-name">Md. Jewel Rana</p>
                                        <p class="client-designation">Software Engineer (Android)</p>
                                    </div>
                                </div>
                            </div>

                            <div class="slick-slideshow__slide1">
                                <div class="client-slide-outer">
                                    <img src="{{ asset('assets/img/Minhajul.png')}}" alt="" class="client-img">
                                    <div class="client-slide-inner">
                                        <p class="client-name">Minhajul Ariefn</p>
                                        <p class="client-designation">Business Development Assistant</p>
                                    </div>
                                </div>
                            </div>

                            <div class="slick-slideshow__slide1">
                                <div class="client-slide-outer">
                                    <img src="{{ asset('assets/img/Abir.png')}}" alt="" class="client-img">
                                    <div class="client-slide-inner">
                                        <p class="client-name">Md.Salman Abir</p>
                                        <p class="client-designation">Front-End Developer</p>
                                    </div>
                                </div>
                            </div>
                            <!-- new members -->

                            <div class="slick-slideshow__slide1">
                                <div class="client-slide-outer">
                                    <img src="{{ asset('assets/img/2_Shudipto.png')}}" alt="" class="client-img">
                                    <div class="client-slide-inner">
                                        <p class="client-name">Sudipto Roy</p>
                                        <p class="client-designation">Software Engineer(iOS)</p>
                                    </div>
                                </div>
                            </div>

                            <div class="slick-slideshow__slide1">
                                <div class="client-slide-outer">
                                    <img src="{{ asset('assets/img/3_Akash.png')}}" alt="" class="client-img">
                                    <div class="client-slide-inner">
                                        <p class="client-name">Mahir Abrar Akash</p>
                                        <p class="client-designation">UX & UI Designer</p>
                                    </div>
                                </div>
                            </div>


                            <div class="slick-slideshow__slide1">
                                <div class="client-slide-outer">
                                    <img src="{{ asset('assets/img/4_Shams.png')}}" alt="" class="client-img">
                                    <div class="client-slide-inner">
                                        <p class="client-name">Shams Shahriar</p>
                                        <p class="client-designation">Software Engineeer</p>
                                    </div>
                                </div>
                            </div>

                            <div class="slick-slideshow__slide1">
                                <div class="client-slide-outer">
                                    <img src="{{ asset('assets/img/5_Naim.png')}}" alt="" class="client-img">
                                    <div class="client-slide-inner">
                                        <p class="client-name">Naim Uddin Prince</p>
                                        <p class="client-designation">Software Engineeer</p>
                                    </div>
                                </div>
                            </div>

                            <div class="slick-slideshow__slide1">
                                <div class="client-slide-outer">
                                    <img src="{{ asset('assets/img/6_JunHyoung_Lee.png')}}" alt="" class="client-img">
                                    <div class="client-slide-inner">
                                        <p class="client-name">JunHyoung Lee</p>
                                        <p class="client-designation">Manager of Business Development Department</p>
                                    </div>
                                </div>
                            </div>

                            <div class="slick-slideshow__slide1">
                                <div class="client-slide-outer">
                                    <img src="{{ asset('assets/img/6_Parvej.png')}}" alt="" class="client-img">
                                    <div class="client-slide-inner">
                                        <p class="client-name">Parvej Hosen</p>
                                        <p class="client-designation">Software Engineer</p>
                                    </div>
                                </div>
                            </div>

                            <div class="slick-slideshow__slide1">
                                <div class="client-slide-outer">
                                    <img src="{{ asset('assets/img/reza.jpg')}}" alt="" class="client-img">
                                    <div class="client-slide-inner">
                                        <p class="client-name">Md. Sabekur Reza </p>
                                        <p class="client-designation">Software Engineer (Android)</p>
                                    </div>
                                </div>
                            </div>

                            <div class="slick-slideshow__slide1">
                                <div class="client-slide-outer">
                                    <img src="{{ asset('assets/img/emon.jpg')}}" alt="" class="client-img">
                                    <div class="client-slide-inner">
                                        <p class="client-name">K M Emon Ahmed</p>
                                        <p class="client-designation">Software Engineer</p>
                                    </div>
                                </div>
                            </div>

                            <div class="slick-slideshow__slide1">
                                <div class="client-slide-outer">
                                    <img src="{{ asset('assets/img/mahamudullah.jpg')}}" alt="" class="client-img">
                                    <div class="client-slide-inner">
                                        <p class="client-name">Mahamudullah</p>
                                        <p class="client-designation">Software Engineer(iOS)</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- value we carry  -->
                    <div role="tabpanel" class="tab-pane fade in " id="vtab6">
                        <div class="row">
                            <!-- <h3 class="common-company">TiCON SYSTEM LIMITED</h3> -->
                            <div class="col-xs-12 values" style="padding:0px 15px;">
                                <h4 class="page_heading">Values We Carry</h4>
                                <img class="value_img" src="{{ asset('assets/img/values_we_carry.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    
                    <!-- culture  -->
                    <div role="tabpanel" class="tab-pane fade in " id="vtab7">
                        <div class="row">
                            <!-- <h3 class="common-company">TiCON SYSTEM LIMITED</h3> -->
                            <div class="col-xs-12 values" style="padding:0px 15px;">
                                <h4 class="page_heading">Culture</h4>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="culture_item">
                                    <img class="culture_img" src="{{ asset('assets/img/smart_agile.png')}}" alt="">
                                    <h5 class="culture_item_head">Smart & Agile</h5>
                                    <p class="culture_item_details">We hire smart and agile people who are forward and want to become leaders. That's why more than 80% Of our people have been with TiCON for over five years.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="culture_item">
                                    <img class="culture_img" src="{{ asset('assets/img/freedom.png')}}" alt="">
                                    <h5 class="culture_item_head">Freedom & Imagination</h5>
                                    <p class="culture_item_details">We value Individuals & their needs over processes & rules. We want our people to he creatve& freeth clung, so we never force them into dosed procedures.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="culture_item">
                                    <img class="culture_img" src="{{ asset('assets/img/communication.png')}}" alt="">
                                    <h5 class="culture_item_head">Communication & Interaction</h5>
                                    <p class="culture_item_details">We value continuous communication between our customers and us. A product is only as good as the needs it serves. We always focus on the customer's wants & needs.</p>
                                </div>
                            </div>
                            <div class='col-lg-2 hidden-md hidden-sm hidden-xs'>
                                <div class="culture_item offwhite_div"></div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="culture_item">
                                    <img class="culture_img" src="{{ asset('assets/img/startup.png')}}" alt="">
                                    <h5 class="culture_item_head">Start-up Mindset</h5>
                                    <p class="culture_item_details">We maintain a start-up culture where every employee's opinion is valued and appreciated. At TiCON, we like to challenge ourselves by analyzing any idea's pros and cons.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="culture_item">
                                    <img class="culture_img" src="{{ asset('assets/img/workplace.png')}}" alt="">
                                    <h5 class="culture_item_head">Workplace & Lifestyle</h5>
                                    <p class="culture_item_details">We offer a workplace where everyone can keep a healthy way of life and truly feel at home. A happy employee is also an efficient and productive one.</p>
                                </div>
                            </div>
                            <div class='col-lg-2 hidden-md hidden-sm hidden-xs'>
                                <div class="culture_item offwhite_div"></div>
                            </div>
                        </div>
                    </div>

                    
                    <!-- journey -->
                    <div role="tabpanel" class="tab-pane fade in " id="vtab8">
                        <div class="row">
                            <!-- <h3 class="common-company">TiCON SYSTEM LIMITED</h3> -->
                            <div class="col-xs-12 values" style="padding:0px 15px;">
                                <h4 class="page_heading">Journey</h4>
                                <img class="value_img" src="{{ asset('assets/img/Journey.png')}}" alt="">
                            </div>
                        </div>
                    </div>


                    <!-- Valued Clients -->
                    <div role="tabpanel" class="tab-pane fade in " id="vtab9">
                        <div class="row">
                            <!-- <h3 class="common-company">TiCON SYSTEM LIMITED</h3> -->
                            <div class="col-xs-12 values" style="padding:0px 15px;">
                                <h4 class="page_heading">Valued Clients</h4>
                            </div>
                            <div class="row m-0">
                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                    <img class="client_img" src="{{ asset('assets/img/wilco.png')}}" alt="">
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                    <img class="client_img" src="{{ asset('assets/img/hdtel.png')}}" alt="">
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                    <img class="client_img" src="{{ asset('assets/img/rabbithole.png')}}" alt="">
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                    <img class="client_img" src="{{ asset('assets/img/cmes.png')}}" alt="">
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                    <img class="client_img" src="{{ asset('assets/img/teletalk_logo.png')}}" alt="">
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                    <img class="client_img" src="{{ asset('assets/img/vision.png')}}" alt="">
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                    <img class="client_img" src="{{ asset('assets/img/intra.png')}}" alt="">
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                    <img class="client_img" src="{{ asset('assets/img/ict.png')}}" alt="">
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                    <img class="client_img" src="{{ asset('assets/img/basis_logo.png')}}" alt="">
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                    <img class="client_img" src="{{ asset('assets/img/ineat.png')}}" alt="">
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                    <img class="client_img" src="{{ asset('assets/img/marine.png')}}" alt="">
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                    <img class="client_img" src="{{ asset('assets/img/insight.png')}}" alt="">
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                    <img class="client_img" src="{{ asset('assets/img/umobile.png')}}" alt="">
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                    <img class="client_img" src="{{ asset('assets/img/sirioh.png')}}" alt="">
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                    <img class="client_img" src="{{ asset('assets/img/pstu_logo.png')}}" alt="">
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                    <img class="client_img" src="{{ asset('assets/img/cowell.png')}}" alt="">
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                    <img class="client_img" src="{{ asset('assets/img/grace.png')}}" alt="">
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                    <img class="client_img" src="{{ asset('assets/img/duranta.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Partner  -->
                    <div role="tabpanel" class="tab-pane fade in " id="vtab10">
                        <div class="row">
                            <!-- <h3 class="common-company">TiCON SYSTEM LIMITED</h3> -->
                            <div class="col-lg-6 col-md-6 col-sm-12 parents_div" style="">
                                <div class="partner match">
                                    <h4 class="heading_p">Partner</h4>
                                    <img class="p_image" src="{{ asset('assets/img/AWS_Partner.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 parents_div" style="">
                                <div class="vendors match">
                                    <h4 class="heading_p">Vendors</h4>
                                    <img class="v_image" style="max-height:68px;" src="{{ asset('assets/img/google.png')}}" alt="">
                                    <img class="v_image" style="margin-top:20px;margin-bottom:40px;max-height:68px;"  src="{{ asset('assets/img/azure.png')}}" alt="">
                                    <img class="v_image" style="max-height:68px;" src="{{ asset('assets/img/alibaba.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div role="tabpanel" class="tab-pane tab-pd fade in" id="vtab5">
                        <!--  <h3 class="common-company">TiCON SYSTEM LIMITED</h3> -->
                        <h3 class="welcome welcome1" style="text-align: center;color: #000;margin: 3%;">WELCOME TO TiCON</h3>
    
                        <form action="{{url('/copmany/sendUserCv')}}" enctype="multipart/form-data" method="post" role="form">
                            @csrf
                            <p class="contact-text" style="text-align: left;color: #000;">Send your resume &amp; We will be in touch</p>
                            <div class="row">
                                <div class="col-sm-4 col-xs-12">
                                    <input type="text" class="form-control fch" name="name" placeholder="Full Name" required="">
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <input type="mail" class="form-control fch" name="email" placeholder="Email" required="">
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <input type="text" class="form-control fch" name="solution" placeholder="Position" required="">
                                </div>
                            </div>

                            <div class="row">
                                <h3 style="padding-left: 15px;color: #000;"> Attach your CV</h3>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <!-- <input type="file" name="email" placeholder="Email" required="">
                                    -->
                                    <div class="form-control fch" style="padding-left: 0px;padding-top: 0px;padding-bottom: 0px">
                                        <input type="file" name="file-upload" id="file-upload" multiple required />
                                        <label for="file-upload">Upload file</label>
                                        <div id="file-upload-filename" style="display: inline-block;" title=""></div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <button type="submit" class="btn btn-primary view-more modify">Send</button>
                                </div>
                            </div>


                        </form>
                        <p class="contact-text" style="text-align: center;color: #000;margin: 4%;"> Or you can send CV directly here : career@ticonsys.com</p>
                        <hr>

                        <h3 class="welcome welcome1" style="text-align: center;color: #000;margin-top: 5%;"> Current Openings</h3>

                        <div class="opening">
                            <p class="position">Opening Positions</p>
                            <p class="num-of-open">10 Openings</p>
                            <ul class="lists-of-positions">
                                <li>>> Business Development Assistant</li>
                                <li>>> Software Sales Assistant</li>
                                <li>>> .NET Developer</li>
                                <li>>> Android Developer</li>
                                <li>>> IOS Developer</li>
                                <li>>> Python Developer</li>
                                <li>>> LAMP Developer</li>
                            </ul>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane tab-pd fade in pt-0 companyProfile" id="companyProfile">
                        <iframe 
                            src="https://drive.google.com/file/d/1TI28xspn3gU3AchN9NFx3OgH_8JPWPET/preview"
                            frameBorder="0"
                            scrolling="auto"
                            height="700"
                            width="100%"
                            allow="autoplay"
                        ></iframe>
                        <div class="download-section">
                            <a href="/profile-v6.0.pdf" download="profile">
                                <i class="fa fa-download" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- PAGE CONTANT END -->
@endsection

<!-- ADD JS HERE -->
@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js"></script>
    <script type="text/javascript">
        // same height
        $('.culture_item').matchHeight();
        $('.match').matchHeight();
        $('.clients').matchHeight();

        var main_head_slider = '';
        $(document).ready(function() {
            main_head_slider = $('.slider2').slick({
                autoplay: false,
                autoplaySpeed: 1000,
                dots: false,
                arrows: true,
                slide: '.slick-slideshow__slide1',
                slidesToShow: 4,
                centerMode: false,
                focusOnSelect: true,
                centerPadding: '0px',
                prevArrow: '<button class="slick-prev"> < </button>',
                nextArrow: '<button class="slick-next"> > </button>',
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true,
                            centerMode: false,
                            variableWidth: false,
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            centerMode: false,
                            variableWidth: false,
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            centerMode: false,
                            variableWidth: false,
                        }
                    },

                ]
            });

            $('.nav-tabs a').each(function() {
                var $this = $(this);
                $this.click(function(e) {
                    e.preventDefault();
                    $this.tab('show');
                    //$('.slider2').slick('refresh');
                
                // if our team tab clicked then start the slider from first element
                    if ($this.attr('href') == '#vtab4') {
                        main_head_slider.slick('slickGoTo', 0);
                        main_head_slider.slick('slickPlay');
                    }else{
                        main_head_slider.slick('slickGoTo', 0);
                        main_head_slider.slick('slickPause');
                    }
                    
                    
                });
            });
        })
        

        // var settings = {
            
        // };


        // function setSlideVisibility() {
        //     //Find the visible slides i.e. where aria-hidden="false"
        //     var visibleSlides = $carousel.find('.slick-slideshow__slide[aria-hidden="false"]');
        //     //Make sure all of the visible slides have an opacity of 1
        //     $(visibleSlides).each(function() {
        //         $(this).css('opacity', 1);
        //     });

        //     //Set the opacity of the first and last partial slides.
        //     $(visibleSlides).first().prev().css('opacity', 0);
        // }

        // var elm_slider = $carousel.slick(settings);
        // $carousel.slick('slickGoTo', 1);
        // setSlideVisibility();

        // $carousel.on('afterChange', function() {
        //     setSlideVisibility();
        // });

        
    </script>

    <script type="text/javascript">
        var input = document.getElementById('file-upload');
        var infoArea = document.getElementById('file-upload-filename');

        input.addEventListener('change', showFileName);

        function showFileName(event) {

            // the change event gives us the input it occurred in 
            var input = event.srcElement;

            // the input has an array of files in the `files` property, each one has a name that you can use. We're just using the name here.
            var fileName = input.files[0].name;
            var n = fileName.length;

            if (n > 15) {
                var m = n - 7;
                var res = fileName.substring(0, 5);
                var last = fileName.substring(m, n);
                var fileNameOf = res + '..' + last;
                infoArea.textContent = ' ' + fileNameOf;
                infoArea.title = fileName;
            }
            else{
                infoArea.textContent = ' ' + fileName;
            }
            // use fileName however fits your app best, i.e. add it into a div
            
        }
    </script>

    <script type="text/javascript">
        // $(window).resize(function(){
        //     if (window.matchMedia('(min-width: 1440px)').matches){
        //         $('.nav.nav-tabs').affix({offset: {top: 360} });
        //     }else{
        //        $('.nav.nav-tabs').affix({offset: {top: 360} }); 
        //     }
        // }).trigger('resize');
    </script>
@endpush

<!-- COMPANY PAGE END -->

    