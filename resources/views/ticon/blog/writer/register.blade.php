<!-- PAGE START -->
@extends('layouts.master')


<!-- ADD CSS HERE -->
@push('css')
    <style type="text/css">
        .aboutsec1 {
            padding-bottom: 0% !important;
            position: relative;
            /*background-color: #f7f7f7;*/
        }
        
        .innertextleft {
            padding: 3% 0px 10px 0px;
        }
        
        .info_innner {
            margin: 8px 15px;
            background: #fff;
            padding: 10px 0px;
            box-shadow: 0px 0px 3px 0px rgba(0, 0, 0, .4);
            display: flex;
        }
        
        .gm-style .place-card-large {
            margin-left: 222px !important;
            padding: 15px 8px 12px 11px;
        }
        
        .map {
            margin-top: 14%;
            overflow: hidden;
            width: 100%;
            /* padding: 10px;*/
            /*box-shadow: 0px 0px 14px 0px rgba(0,0,0,.5);*/
        }
        
        .Contact-Section.wrapper.ispage.aboutsec1 .row {
            margin-left: 0px;
            margin-right: 0px;
        }
        
        .p-style a {
            text-transform:capitalize;
        }
        @media (max-width:767.98px){
            .info_innner{
                display:block;
            }
        }
        form{
        background-color: white;
        padding: 30px 80px;
        border-radius: 2px;
        }
        
        .formclass{
            width:50%;
            min-width: fit-content;
            margin: auto;
        }
        
        .form-control{
            margin-bottom: 20px;
            border: 1px solid #32c7ef;
        }
        .form-group{
            margin-bottom: 20px;
        
        }
        label{
            color:#767676;
        }
        input{
            border: 1px solid #56b556c9;
        }

        #loginbtn{
            width:100%;
            margin: 10 0;
            background-color: #1faee4;
            border-color: #1faee4;
            padding: 10px;
            
                font-weight: 600;
                font-size: 15;
        }
    </style>
@endpush


@section('content')
    <!-- Main Container Start -->
    <div class="container">

        <div class="formclass">
            <form action="{{url('/register')}}" method="post">


                <div class="from-input" style="width: 300px;"  >

                        <h3 style="padding: 30px;text-align: center;font-weight: 600;">User Create</h3>

                @csrf

                    <div class="form-group">
                    <!-- <label for="name">Name</label><font color=red >*</font> -->
                    <input type="text" class="form-control" name="firstName"  placeholder="First name"><span style="color: red">@error('name'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group">
                    <input type="text" class="form-control" name="lastName"  placeholder="Last name"><span style="color: red">@error('lastName'){{$message}}@enderror</span>
                    </div>

                    <div class="form-group">
                    <!-- <label for="email">Email</label><font color=red >*</font> -->
                    <input type="email" class="form-control" name="email"  placeholder="Enter email"><span style="color: red">@error('email'){{$message}}@enderror</span>
                    <small id="emailHelp" class="form-text text-muted"> valid email should contain '@'</small>
                    </div>


                    <div class="form-group">
                    <!-- <label for="password">Password</label><font color=red >*</font> -->
                    <input type="password" class="form-control" name="password" placeholder="Enter a Password"><span style="color: red">@error('password'){{$message}}@enderror</span>
                    </div>

                    <!-- <div class="form-group">
                
                    <input type="password" class="form-control" name="confirmPass" placeholder="Re enter Password"><span style="color: red">@error('confirmPass'){{$message}}@enderror</span>
                    </div> -->

                    <div class="form-group">
                    <button type="submit" id="loginbtn" name="signup" class="btn btn-primary">Submit</button>
                    
                    <!-- Already have an account?<a href="{{url('writerLogin.php')}}"  style="font-weight: 700;"> Login</a> or go -->
                    <a href="{{url('/blog')}}"  style="font-weight: 700; ">Back</a>
                    </div>



                </div>




            </form>

        </div>
    </div>

    <!-- PAGE CONTANT END -->
@endsection


<!-- ADD JS HERE -->
@push('js')

@endpush

<!-- PAGE END -->
