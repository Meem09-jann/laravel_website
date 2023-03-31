@extends('layouts.masterblog')
@push('css')
    <style>
        .container-main{
            height: 100vh;
            display:grid;
            grid-template-columns: 1fr 4fr;
            padding-top: 50px;
        }

        .container-nav{
            height: 100%; 
            min-height: 100%;
            background-color: #028ad6;
        } 
            
        .sidebar-menu{
            position: fixed;
            padding-top: 50px;
        }

        .menu-items{
            margin: 20px;
            font-size: initial;
            color: white;
            font-weight: 600;
        }

        .menu-items> li{
            padding: 15px 5px;
        }

        @media (max-width:767.98px){
            .container-main{
                display:grid;
                grid-template-columns: 1fr;
                padding-top: 50px;
            }
            .container-nav{
                display:none;
            }
        }

        .main-row1{
            display: flex;
            flex-direction: column;
            border-radius: 10px;
            background-color: #ffffff;
            align-items: center;
            padding: 0px 20px;
        }

        .main-row1-img-tag{
        display: grid;
        grid-template-columns: 40% 60%;
        width: 80%;
        }
        
        @media screen and (max-width: 800px) {
            .main-row1-img-tag{
                display: grid;
                grid-template-columns:1fr;
                width: 100%;        
            }
        }

        .main-row1-img{
            margin: auto;
            line-height: 0;
            overflow: hidden;
            position: relative;
            width: 100%;
            height: auto;
            padding: 20px;
            align-items: center;  
        }

        .writer-profile-img{
            margin: auto;
            padding: 0;
        }

        .main-row1-img img{
            width: 100%!important;
            object-fit: cover;
            object-position: top center;
        } 

        .main-row1-tag{
            margin: 20px;
            position: relative;
            display: flex;
            flex-direction: column;
            height: 90%;
            width: auto;
            justify-content: space-between;      
        }

        .main-row1-tag > div{
            padding: 15px 0px 15px 10px;
            border-style: dotted;
            border-width: 0px 0px 1px 0px;
            border-color: #14a0de;
            color: #747e81;
            font-size: 15;
        }
        
    </style>
@endpush
@section('content')
    <!-- Main Container Start -->
    <div class="container-table">
        <div class="Contact-Section wrapper ispage aboutsec1">

            <!-- FLASH MESSAGE-->
                @include('includes.flashmsg')  
            <!-- FLASH MESSAGE END--> 
            
            <div class="writerInfo">
                <div class="form-group" style="margin-top: 50px; padding: 0 20px;">
                    <h4 style="color: #6c6c6c;">Writer Profile</h4> 
                </div>
            </div> 
            
            <div class="main-row1">
                <div class="main-row1-img-tag">
                    <div class="writer-profile-img" >
                        <div class="main-row1-img">
                            <img 
                            class="lazy loaded" src="https://media.istockphoto.com/vectors/man-in-the-shirt-and-tie-businessman-avatar-or-male-face-icon-vector-vector-id1173599830?k=20&m=1173599830&s=170667a&w=0&h=f-xN6U2zWwcLcQw68Y5OLqL4VvStOp-8PFLE9TTHmqA=" data-src="#" data-was-processed="true">                               
                        </div>
                        <div class="main-row1-bio">
                            <h5>Bio:</h5>
                            <p>{{ Auth::guard('writer')->user()->bio == NULL ? '': Auth::guard('writer')->user()->bio }}</p>                             
                        </div>
                    </div>

                    <div class="main-row1-tag">

                        <div class="writer">
                            <a href="#">
                                <span class="elementor-icon-list-icon">
                                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                </span>
                                <span class="elementor-icon-list-text elementor-post-info__item elementor-post-info__item--type-author">
                                <span class="elementor-post-info__item-prefix"></span>
                                Name: </span> {{Auth::guard('writer')->user()->firstName}}{{" "}}{{Auth::guard('writer')->user()->lastName}} 
                            </a>
                        </div>

                        <div class="date">
                            <span class="elementor-icon-list-icon">
                            <i class="fa fa-birthday-cake" aria-hidden="true"></i>
                            </span>
                            <span class="elementor-icon-list-text elementor-post-info__item elementor-post-info__item--type-date">
                            Date of Barth: </span>{{  Auth::guard('writer')->user()->dob == NULL ? '':Auth::guard('writer')->user()->dob }}                          
                        </div>

                        <div class="work">
                            <span class="elementor-icon-list-icon">
                                <i class="fa fa-briefcase" aria-hidden="true"></i>
                                </span>
                            <span class="elementor-icon-list-text elementor-post-info__item elementor-post-info__item--type-time">
                            Work:  </span> {{  Auth::guard('writer')->user()->work == NULL ? '': Auth::guard('writer')->user()->work }}
                        </div>

                        <div class="email">
                            <span class="elementor-icon-list-icon">
                                <i class="fa fa-envelope-open-o" aria-hidden="true"></i>
                            </span>
                            <span class="elementor-icon-list-text elementor-post-info__item elementor-post-info__item--type-time">
                            Email: </span> {{Auth::guard('writer')->user()->email}}
                        </div>
                        

                        <div class="phone">
                            <span class="elementor-icon-list-icon">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </span>
                            <span class="elementor-icon-list-text elementor-post-info__item elementor-post-info__item--type-comments">
                            Phone: </span> {{  Auth::guard('writer')->user()->phone == NULL ? '': Auth::guard('writer')->user()->phone }}    
                        </div>

                        <div class="website">
                            <a target="_blank"href="{{ Auth::guard('writer')->user()->website != NULL ? url(Auth::guard('writer')->user()->website) : '#' }}">
                            <span class="elementor-icon-list-icon">
                                <i class="fa fa-globe" aria-hidden="true"></i>
                            </span>
                            <span class="elementor-icon-list-text elementor-post-info__item elementor-post-info__item--type-comments">
                            Website: </span> {{  Auth::guard('writer')->user()->website == NULL ? '': Auth::guard('writer')->user()->website }}
                            </a>
                        </div>

                        <div class="add">
                            <a href="{{url('/blog/writer/blogadd')}}">
                            <span class="elementor-icon-list-icon">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </span>
                            <span class="elementor-icon-list-text elementor-post-info__item elementor-post-info__item--type-comments" style="color: Green; font-weight: 600;">
                            Add Blog</span> 
                            </a>
                        </div>

                        <div class="edit">  
                            <a href="{{url('/blog/writer/profile/update')}}">
                            <span class="elementor-icon-list-icon">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </span>
                            <span class="elementor-icon-list-text elementor-post-info__item elementor-post-info__item--type-comments" style="color: #22b3e6; font-weight: 600;">
                            Edit Profile</span> 
                            </a>
                        </div>

                        <div class="logout"> 
                            <a href="{{url('/writerlogout')}}">
                            <span class="elementor-icon-list-icon">
                                <i class="fa fa-sign-out" aria-hidden="true"></i>
                            </span>
                            <span class="elementor-icon-list-text elementor-post-info__item elementor-post-info__item--type-comments" style="color: #fd3333; font-weight: 600;">
                            Logout</span> 
                            </a>
                        </div>
                        
                    
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Content -->
@endsection

@push('js')
@endpush
    