<!-- HOME PAGE START -->
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
        ul{
            margin-bottom:0;
        }
        .li_icon{
            text-align: center;
            width: 40px;
            display: inline-block;
            float: left;
            height: 100%;
            color: #0d97da;
        }
        .li_data{
            width:calc(100% - 40px);
            display:inline-block;
            float:right;
            height:100%;
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
                        <li class="active"><a href="#vtab1" data-toggle="tab">회사 개요<span class="right_icon"><i class="fa fa-chevron-right"></i></span></a> </li>
                        <li><a href="#companyProfile" data-toggle="tab">프로필<span class="right_icon"><i class="fa fa-chevron-right"></i></span></a></li>
                        <li><a href="#vtab3" data-toggle="tab">수상 실적<span class="right_icon"><i class="fa fa-chevron-right"></i></span></a></li>
                        <li><a href="#vtab4" data-toggle="tab">팀원 소개<span class="right_icon"><i class="fa fa-chevron-right"></i></span></a></li>
                        <li><a href="#vtab6" data-toggle="tab">회사 심볼과 철학<span class="right_icon"><i class="fa fa-chevron-right"></i></span></a></li>
                        <li><a href="#vtab7" data-toggle="tab">작업 환경<span class="right_icon"><i class="fa fa-chevron-right"></i></span></a></li>
                        <li><a href="#vtab8" data-toggle="tab">회사 연혁<span class="right_icon"><i class="fa fa-chevron-right"></i></span></a></li>
                        <li><a href="#vtab9" data-toggle="tab">주요 고객사<span class="right_icon"><i class="fa fa-chevron-right"></i></span></a></li>
                        <li><a href="#vtab10" data-toggle="tab">파트너사 & 공급사<span class="right_icon"><i class="fa fa-chevron-right"></i></span></a></li>
                        <li><a href="#vtab5" data-toggle="tab">인재채용<span class="right_icon"><i class="fa fa-chevron-right"></i></span></a></li>
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
                                                    <p class="about-txt" style="margin-top:15px;">TiCON시스템은 2007년 설립하여 한국의 본사, 방글라데시에 지사를 두고 있으며, 소프트웨어 개발, IT 아웃소싱, 커뮤니케이션 서비스 및 컨설팅 사업을 하고 있습니다</p>
                                                    <p class="about-txt">2007년 창사 이래, 고객가치를 최우선으로 하는 맞춤형 제품으로 스타트 업, 중소기업 및 대기업이 비즈니스 프로세스 및 서비스를 위한 비용 효율적인 솔루션을 구축하는 데 도움이 되는 다양한 소프트웨어 제품, 커스터마이즈드 테크놀로지 솔루션을 전문적으로 개발하여 왔습니다. 최근에는 국내기업 및 대학과 산학 협력을 체결하고  다양한 분야에서 사업영역을 확대하고 있습니다.</p>
                                                    <p class="about-txt">당사는 혁신기술, 검증된 전문가, 개발 경험으로 글로벌 고객과 함께 성장했고, 한국을 비롯한 미국, 일본 등의 아웃소싱 파트너로 사업영역 확대하였습니다. AI, 빅데이터, ERP, 영상 솔루션 등의 기술을 개발 및 공급한 전문 기술기반의 개발 경험은 시간과 장소를 초월하여 국내 및 해외시장에서 고객의 성공을 지원하며, 함께 성장할 것입니다. </p>
                                                
                                                </div>
                                                

                                            </div>


                                            <div class="col-xs-12 p-0">
                                            <div class="development_services_inner-2">
                                                <div class="dev-mid-2">
                                                        <h3 class="welcome" style="padding-left:15px;color: #1E3B65;">회원 </h3>
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
                                                    <h2 class="view_heading">클라이언트</h2>
                                                    <h1 class="count">50+</h1>
                                                    <img class="item_icons" src="{{ asset('assets/img/clients.png')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 p-0 items">
                                                <div class="white_bg four_item second_item_radious clients clearfix">
                                                    <h2 class="view_heading">경험</h2>
                                                    <h1 class="count">13</h1>
                                                    <img class="item_icons" src="{{ asset('assets/img/experience.png')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 p-0 items">
                                                <div class="white_bg four_item third_item_radious clients clearfix">
                                                    <h2 class="view_heading">소프트웨어 제품 및 서비스</h2>
                                                    <h1 class="count">10+</h1>
                                                    <img class="item_icons" src="{{ asset('assets/img/technical-support.png')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 p-0 items">
                                                <div class="blue_bg four_item fourth_item_radious clients clearfix">
                                                    <h2 class="view_heading">팀 구성원</h2>
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
                            <!-- <div class="row mglr" style="margin-top: 25px;">
                                <div class="col-sm-6 col-sm-offset-3 col-xs-12" style="margin-bottom: 10px;">
                                    <div class="achivement-img">
                                        <img src="{{ asset('assets/img/Website_Design_14.png')}}" class="achivement-img-1" alt="Image Of Recieving Trophy" title="">
                                    </div>

                                </div>

                            </div> -->

                            <div class="col-sm-12 mt-5" style="margin-bottom: 10px;margin-top: 20px;">
                                <div class="achivement-img"  style="text-align:left;">
                                    <!-- <span>최근 BASIS Football World Cup Mania 2018 앱 콘테스트에서 러너즈 업 트로피를 수상하였습니다.</span> -->
                                    <ul>
                                        <li>
                                            <div class="li_icon">
                                                <i class="fa fa-arrow-circle-right"></i>
                                            </div> 
                                            <div class="li-data">
                                            한국 고려사이버대학교와 업무협약 체결 : 2021년 (AI, 5G, Big Data 등 4차 산업 관련 장기 협력 R&D 및 사업 개발)
                                            </div>
                                        </li>
                                        <li><div class="li_icon">
                                                <i class="fa fa-arrow-circle-right"></i>
                                            </div> 
                                            <div class="li-data">
                                            방글라데시 최초의 Amazon Web Service 기술 파트너(클라우드 서비스) 선정 : 2019년
                                            </div>
                                        </li>
                                        <li><div class="li_icon">
                                                <i class="fa fa-arrow-circle-right"></i>
                                            </div> 
                                            <div class="li-data">
                                            방글라데시 National ICT Award 비즈니스 서비스솔루션 1위 : 2019년
                                            </div>
                                        </li>
                                        <li><div class="li_icon">
                                                <i class="fa fa-arrow-circle-right"></i>
                                            </div> 
                                            <div class="li-data">
                                            방글라데시 BASIS Football World Cup Mania 2018 앱 콘테스트에서 1위 트로피를 수상 : 2018년
                                            </div>
                                        </li>
                                        <li><div class="li_icon">
                                                <i class="fa fa-arrow-circle-right"></i>
                                            </div> 
                                            <div class="li-data">
                                            한국 IT 중소기업 벤처기업협회 Professional Excellence Award 수상 : 2006년
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>


                            <div class="wrap">
                                <h3 style="padding-left: 15px;font-size: 20px;font-weight: 700;text-align: left;">어치브먼트</h3>

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
                                                        Patuakhali 과학기술 대학과 협약
                                                    </h3>
                                                    <p class="right-peras">
                                                        2015년 방글라데시 공립대학의 선도적인 병원 운영 시스템과 합의(대학명: Patuakali 과학기술 대학)
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
                                                        World Innovation Japan과 협약
                                                    </h3>
                                                    <p class="right-peras">
                                                        모든 소프트웨어 프로젝트 및 컨설팅을 위해 World Innovation Japan과 장기 협약 체결, 2014년 비즈니스 프로세스 웹 기반 시스템 및 안드로이드 앱, Karaoke 앱 및 시스템, 안드로이드 앱 쇼핑몰 등 제공 현재 스트리밍 시스템, IPTV 및 VOD 앱 디벨로핑
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
                                                        Teletalk와 계약
                                                    </h3>
                                                    <p class="right-peras">
                                                        국영 방글라데시 모바일 사업자, Teletalk와 앱 디벨롭먼트 프로젝트 계약
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
                                                        Youstar Ltd와 협약
                                                    </h3>
                                                    <p class="right-peras">
                                                        Youstar Ltd와 임베디드 디지털 스튜디오 2013 디벨롭먼트 협약
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
                                                        HD Telcom과 파트너십, 대한민국
                                                    </h3>
                                                    <p class="right-peras">
                                                        HD Telcom과 장기 아웃소싱 및 소프트웨어 디벨롭먼트 파트너십, 대한민국

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
                                                        iCallRing 디벨롭트, 비디오 및 이미지 벨소리 앱
                                                    </h3>
                                                    <p class="right-peras">
                                                        iCallRing 디벨롭트, 비디오 및 이미지 벨소리 앱: TWMobile, iCallRing의 서비스 공급자
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
                                                        Banchin 디벨롭트
                                                    </h3>
                                                    <p class="right-peras">
                                                        Banchin 디벨롭트, 2012년 소셜 앱 
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
                                                        5Dimensial Edu 디벨롭트
                                                    </h3>
                                                    <p class="right-peras">
                                                        5Dimensial Edu 디벨롭트, 2012년 교육 모바일 앱
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
                                                        iNEAT 디벨롭트
                                                    </h3>
                                                    <p class="right-peras">
                                                        iNEAT 디벨롭트, 2011년 대한민국 표준 언어 기술 시험
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
                                                        Grace Global Academy와 계약
                                                    </h3>
                                                    <p class="right-peras">
                                                        2011년 Grace Global Academy의 교육 콘텐츠와 앱 계약
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
                                                        AhnLab Inc.(대한민국)사와 파트너십
                                                    </h3>
                                                    <p class="right-peras">
                                                        2011년 AhnLab Inc.(대한민국)과 파트너십 시작
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
                                                        모바일 애플리케이션 디벨롭먼트 아웃소싱 프로젝트
                                                    </h3>
                                                    <p class="right-peras">
                                                        2009년 모바일 애플리케이션 디벨롭먼트 아웃소싱 프로젝트 시작
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
                                                        심비안 기반 MVoIP 솔루션
                                                    </h3>
                                                    <p class="right-peras">
                                                        2008년 TiVOIZ라는 브랜드 명으로 심비안 기반 MVoIP 솔루션 시작
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
                                                        Realstream Co. Ltd와 파트너십
                                                    </h3>
                                                    <p class="right-peras">
                                                        2008년, 대한민국에서  콜링 카드 비즈니스 시작, Realstream Co. Ltd와 파트너십
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
                                                        아웃소싱 소프트웨어 디벨롭먼트 작업 수주
                                                    </h3>
                                                    <p class="right-peras">
                                                        캐나다 Galaxy Telcom에서 아웃소싱 소프트웨어 디벨롭먼트 작업 수주
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
                                                        Global Telcom 캐리어 비즈니스 시작
                                                    </h3>
                                                    <p class="right-peras">
                                                        2007년 Global Telcom 캐리어 비즈니스 시작
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>



                        <div role="tabpanel" class="tab-pane fade in" id="vtab4">
                            <h3 style="padding-left: 15px;font-size: 20px;font-weight: 700;">팀원 소개</h3>
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
                                            <!-- <div class="star-ratings-sprite"><span style="width:89%" class="star-ratings-sprite-rating"></span></div>-->
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
                                            <p class="client-designation">디렉터</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="slick-slideshow__slide1">
                                    <div class="client-slide-outer">
                                        <img src="{{ asset('assets/img/anwar_bhai.png')}}" class="client-img">
                                        <div class="client-slide-inner">
                                            <p class="client-name">Anwar Hossain</p>
                                            <p class="client-designation">디렉터</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="slick-slideshow__slide1">
                                    <div class="client-slide-outer">
                                        <img src="{{ asset('assets/img/rana.png')}}" alt="" class="client-img">
                                        <div class="client-slide-inner">
                                            <p class="client-name">Bokhtiar Rahman Rana</p>
                                            <p class="client-designation">CTO</p>
                                        </div>
                                    </div>
                                </div>

                            <div class="slick-slideshow__slide1">
                                    <div class="client-slide-outer">
                                        <img src="{{ asset('assets/img/shaon.png')}}" alt="" class="client-img">
                                        <div class="client-slide-inner">
                                            <p class="client-name">S M Moshiur Rahman</p>
                                            <p class="client-designation">코디네이터, 비즈니스 & 오퍼레이션</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="slick-slideshow__slide1">
                                    <div class="client-slide-outer">
                                        <img src="{{ asset('assets/img/tuhin.png')}}" alt="" class="client-img">
                                        <div class="client-slide-inner">
                                            <p class="client-name">Emdadul Hoque Tuhin</p>
                                            <p class="client-designation">R&D 헤드</p>
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
                                            <p class="client-designation">소프트웨어 디벨롭먼트 헤드</p>
                                        </div>
                                    </div>
                                </div>

                            

                                <div class="slick-slideshow__slide1">
                                    <div class="client-slide-outer">
                                        <img src="{{ asset('assets/img/zemu.png')}}" alt="" class="client-img">
                                        <div class="client-slide-inner">
                                            <p class="client-name">Md.Almansur Siddiqui</p>
                                            <p class="client-designation">소프트웨어 엔지니어</p>
                                        </div>
                                    </div>
                                </div>

                                

                                <div class="slick-slideshow__slide1">
                                    <div class="client-slide-outer">
                                        <img src="{{ asset('assets/img/osman.png')}}" alt="" class="client-img">
                                        <div class="client-slide-inner">
                                            <p class="client-name">Osman Goni</p>
                                            <p class="client-designation">소프트웨어 엔지니어(안드로이드)</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="slick-slideshow__slide1">
                                    <div class="client-slide-outer">
                                        <img src="{{ asset('assets/img/shohan.jpg')}}" alt="" class="client-img">
                                        <div class="client-slide-inner">
                                            <p class="client-name">Md.Shohanur Rahman</p>
                                            <p class="client-designation">주니어 소프트웨어 엔지니어</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="slick-slideshow__slide1">
                                    <div class="client-slide-outer">
                                        <img src="{{ asset('assets/img/tania.png')}}" alt="" class="client-img">
                                        <div class="client-slide-inner">
                                            <p class="client-name">Tahmina Tania</p>
                                            <p class="client-designation">UI-UX 디자이너 </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="slick-slideshow__slide1">
                                    <div class="client-slide-outer">
                                        <img src="{{ asset('assets/img/rabbi.png')}}" alt="" class="client-img">
                                        <div class="client-slide-inner">
                                            <p class="client-name">Rabby Uzzaman Khan</p>
                                            <p class="client-designation">소프트웨어 엔지니어</p>
                                        </div>
                                    </div>
                                </div>

                            
                                <div class="slick-slideshow__slide1">
                                    <div class="client-slide-outer">
                                        <img src="{{ asset('assets/img/Jewel.jpg')}}" alt="" class="client-img">
                                        <div class="client-slide-inner">
                                            <p class="client-name">Md. Jewel Rana</p>
                                            <p class="client-designation">소프트웨어 엔지니어(안드로이드)</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="slick-slideshow__slide1">
                                    <div class="client-slide-outer">
                                        <img src="{{ asset('assets/img/Minhajul.png')}}" alt="" class="client-img">
                                        <div class="client-slide-inner">
                                            <p class="client-name">Minhajul Ariefn</p>
                                            <p class="client-designation">비즈니스 디벨롭먼트 어시스턴트</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="slick-slideshow__slide1">
                                    <div class="client-slide-outer">
                                        <img src="{{ asset('assets/img/Abir.png')}}" alt="" class="client-img">
                                        <div class="client-slide-inner">
                                            <p class="client-name">Md.Salman Abir</p>
                                            <p class="client-designation">프런트-엔드 디벨로퍼</p>
                                        </div>
                                    </div>
                                </div>
                            

                                <div class="slick-slideshow__slide1">
                                    <div class="client-slide-outer">
                                        <img src="{{ asset('assets/img/2_Shudipto.png')}}" alt="" class="client-img">
                                        <div class="client-slide-inner">
                                            <p class="client-name">Sudipto Roy</p>
                                            <p class="client-designation">소프트웨어 엔지니어(iOS)</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="slick-slideshow__slide1">
                                    <div class="client-slide-outer">
                                        <img src="{{ asset('assets/img/3_Akash.png')}}" alt="" class="client-img">
                                        <div class="client-slide-inner">
                                            <p class="client-name">Mahir Abrar Akash</p>
                                            <p class="client-designation">UX & UI 디자이너</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="slick-slideshow__slide1">
                                    <div class="client-slide-outer">
                                        <img src="{{ asset('assets/img/4_Shams.png')}}" alt="" class="client-img">
                                        <div class="client-slide-inner">
                                            <p class="client-name">Shams Shahriar</p>
                                            <p class="client-designation">소프트웨어 엔지니어</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="slick-slideshow__slide1">
                                    <div class="client-slide-outer">
                                        <img src="{{ asset('assets/img/5_Naim.png')}}" alt="" class="client-img">
                                        <div class="client-slide-inner">
                                            <p class="client-name">Naim Uddin Prince</p>
                                            <p class="client-designation">소프트웨어 엔지니어</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="slick-slideshow__slide1">
                                    <div class="client-slide-outer">
                                        <img src="{{ asset('assets/img/6_JunHyoung_Lee.png')}}" alt="" class="client-img">
                                        <div class="client-slide-inner">
                                            <p class="client-name">JunHyoung Lee</p>
                                            <p class="client-designation">비즈니스 디벨롭먼트 디파트먼트 매니저</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="slick-slideshow__slide1">
                                    <div class="client-slide-outer">
                                        <img src="{{ asset('assets/img/6_Parvej.png')}}" alt="" class="client-img">
                                        <div class="client-slide-inner">
                                            <p class="client-name">Parvej Hosen</p>
                                            <p class="client-designation">소프트웨어 엔지니어</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="slick-slideshow__slide1">
                                    <div class="client-slide-outer">
                                        <img src="{{ asset('assets/img/reza.jpg')}}" alt="" class="client-img">
                                        <div class="client-slide-inner">
                                            <p class="client-name">Md. Sabekur Reza </p>
                                            <p class="client-designation">소프트웨어 엔지니어</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="slick-slideshow__slide1">
                                    <div class="client-slide-outer">
                                        <img src="{{ asset('assets/img/emon.jpg')}}" alt="" class="client-img">
                                        <div class="client-slide-inner">
                                            <p class="client-name">K M Emon Ahmed</p>
                                            <p class="client-designation">소프트웨어 엔지니어</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="slick-slideshow__slide1">
                                    <div class="client-slide-outer">
                                        <img src="{{ asset('assets/img/mahamudullah.jpg')}}" alt="" class="client-img">
                                        <div class="client-slide-inner">
                                            <p class="client-name">Mahamudullah</p>
                                            <p class="client-designation">소프트웨어 엔지니어</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="slick-slideshow__slide1">
                                    <div class="client-slide-outer">
                                        <img src="{{ asset('assets/img/Fakru.png')}}" alt="" class="client-img">
                                        <div class="client-slide-inner">
                                            <p class="client-name">Golam Fakruddin Ahmed</p>
                                            <p class="client-designation">Director Strategy & Market Development</p>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>

                        <!-- value we carry  -->
                        <div role="tabpanel" class="tab-pane fade in " id="vtab6">
                            <div class="row">
                                <!-- <h3 class="common-company">TiCON SYSTEM LIMITED</h3> -->
                                <div class="col-xs-12 values" style="padding:0px 15px;">
                                    <h4 class="page_heading">팀 철학</h4>
                                    <img class="value_img" src="{{asset('assets/img/values_we_carry_kr.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <!-- culture  -->
                        <div role="tabpanel" class="tab-pane fade in " id="vtab7">
                            <div class="row">
                                <!-- <h3 class="common-company">TiCON SYSTEM LIMITED</h3> -->
                                <div class="col-xs-12 values" style="padding:0px 15px;">
                                    <h4 class="page_heading">작업 환경</h4>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="culture_item">
                                        <img class="culture_img" src="{{ asset('assets/img/smart_agile.png')}}" alt="">
                                        <h5 class="culture_item_head">스마트 & Agile</h5>
                                        <p class="culture_item_details">미래지향적인 인재로 고객 중심의 유연하고 신속한 맞춤 개발조직을 유지하며, 직원의 80% 이상이 5년 이상 근속하는 기술과 경험이 우수한 인재 보유</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="culture_item">
                                        <img class="culture_img" src="{{ asset('assets/img/freedom.png')}}" alt="">
                                        <h5 class="culture_item_head">자유와 상상력</h5>
                                        <p class="culture_item_details">창의적이고 자유로운 분위기로 고객의 요구에 가치를 부여하는 차별화된 제품을 개발 및 공급</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="culture_item">
                                        <img class="culture_img" src="{{ asset('assets/img/communication.png')}}" alt="">
                                        <h5 class="culture_item_head">소통 및 상호 작용</h5>
                                        <p class="culture_item_details">고객의 요구를 정확히 이해하고 개발조직과 실시간 끊임없이 소통하여 고객 만족의 제품과 서비스를 제공</p>
                                    </div>
                                </div>
                                <div class='col-lg-2 hidden-md hidden-sm hidden-xs'>
                                    <div class="culture_item offwhite_div"></div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="culture_item">
                                        <img class="culture_img" src="{{ asset('assets/img/startup.png')}}" alt="">
                                        <h5 class="culture_item_head">스타트 업 사고</h5>
                                        <p class="culture_item_details">개인의 의견을 존중하고 자유로운 제안, 개선 및 항상 도전하는 인재를 중시하는 창업문화를 유지</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="culture_item">
                                        <img class="culture_img" src="{{ asset('assets/img/workplace.png')}}" alt="">
                                        <h5 class="culture_item_head">근무 환경</h5>
                                        <p class="culture_item_details">회사 구성원이 건강한 삶의 방식을 유지하고 가족 같은 분위기의 기업문화로 효율적이고, 생산적인 근무환경을 지원</p>
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
                                    <h4 class="page_heading">여정</h4>
                                    <img class="value_img" src="{{ asset('assets/img/Journey_kr.png')}}" alt="">
                                </div>
                            </div>
                        </div>


                        <!-- Valued Clients -->
                        <div role="tabpanel" class="tab-pane fade in " id="vtab9">
                            <div class="row">
                                <!-- <h3 class="common-company">TiCON SYSTEM LIMITED</h3> -->
                                <div class="col-xs-12 values" style="padding:0px 15px;">
                                    <h4 class="page_heading">소중한 클라이언트</h4>
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
                                        <h4 class="heading_p">파트너사</h4>
                                        <img class="p_image" src="{{ asset('assets/img/AWS_Partner.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 parents_div" style="">
                                    <div class="vendors match">
                                        <h4 class="heading_p"> 공급사</h4>
                                        <img class="v_image" style="max-height:68px;" src="{{ asset('assets/img/google.png')}}" alt="">
                                        <img class="v_image" style="margin-top:20px;margin-bottom:40px;max-height:68px;"  src="{{ asset('assets/img/azure.png')}}" alt="">
                                        <img class="v_image" style="max-height:68px;" src="{{ asset('assets/img/alibaba.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div role="tabpanel" class="tab-pane tab-pd fade in" id="vtab5">
                            <!--  <h3 class="common-company">TiCON SYSTEM LIMITED</h3> -->
                            <h3 class="welcome welcome1" style="text-align: center;color: #000;margin: 3%;">TiCON시스템에 오신것을 환영합니다.</h3>

                            <form action="{{url('/copmany/sendUserCv')}}" enctype="multipart/form-data" method="post" role="form">

                                <p class="contact-text" style="text-align: left;color: #000;">당사는 우수한 인재를 상시 채용하고 있으니, 이력서를 보내주시면 저희가 연락하겠습니다.</p>
                                <div class="row">
                                    <div class="col-sm-4 col-xs-12">
                                        <input type="text" class="form-control fch" name="name" placeholder="성명" required="">
                                    </div>
                                    <div class="col-sm-4 col-xs-12">
                                        <input type="mail" class="form-control fch" name="email" placeholder="이메일" required="">
                                    </div>
                                    <div class="col-sm-4 col-xs-12">
                                        <input type="text" class="form-control fch" name="solution" placeholder="직책" required="">
                                        <!--                                 <select name="solution" id="solution" class="form-control fch">
                                            <option value="Others">Select One</option>
                                            <option value="Business Development">Business Development</option>
                                            <option value="Full Stack Development">Full Stack Developer</option>
                                            <option value="PHP Developer">PHP Developer</option>
                                            <option value="Java Developer">Java Developer</option>
                                            <option value=".NET Developer">.NET Developer</option>
                                            <option value="JavaScript Developer">JavaScript Developer</option>
                                            <option value="Others">Others</option>
                                        </select> -->
                                    </div>
                                </div>

                                <div class="row">
                                    <h3 style="padding-left: 15px;color: #000;"> CV 첨부</h3>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <!-- <input type="file" name="email" placeholder="Email" required="">
                                        -->
                                        <div class="form-control fch" style="padding-left: 0px;padding-top: 0px;padding-bottom: 0px">
                                            <input type="file" name="file-upload" id="file-upload" multiple required />
                                            <label for="file-upload">파일 업로드</label>
                                            <div id="file-upload-filename" style="display: inline-block;" title=""></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <button type="submit" class="btn btn-primary view-more modify">보내기</button>
                                    </div>
                                </div>


                            </form>
                            <p class="contact-text" style="text-align: center;color: #000;margin: 4%;">또는 해당 이메일 주소로 직접 CV를 보낼 수 있습니다: - career@ticonsys.com</p>
                            <hr>

                            <h3 class="welcome welcome1" style="text-align: center;color: #000;margin-top: 5%;"> 채용 정보</h3>

                            <div class="opening">
                                <p class="position">인재 채용</p>
                                <p class="num-of-open">10 오프닝</p>
                                <ul class="lists-of-positions">
                                    <li>>> 사업 개발 및 기획자</li>
                                    <li>>> 소프트웨어 영업 경력자</li>
                                    <li>>> .NET 개발자</li>
                                    <li>>> 안드로이드 개발자</li>
                                    <li>>> iOS 개발자</li>
                                    <li>>> 파이썬 개발자</li>
                                    <li>>> LAMP 개발자</li>
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

    <script src="{{asset('assets/js/matchHeight.js')}}"></script>
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

<!-- HOME PAGE END -->

    