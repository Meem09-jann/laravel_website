<!-- PAGE START -->
@extends('layouts.master')


<!-- ADD CSS HERE -->
@push('css')
    <style type="text/css">
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
            <form action="{{url('/admin/login')}}" method="post">
            @csrf

                <h3 style="text-align: center; padding-bottom: 30px;color: #464646;font-weight: 600;">Admin Login</h3>

                @if(Session::has('incorrect'))
                <div class="alert alert-danger " >
                <span class="close" data-dismiss="alert" >×</span>
                <strong style="text-align:center; color: red;">{{Session::get('incorrect')}}</strong>
                </div>
                @endif
                @error('email')<span style="color: red">{{$message}}</span>@enderror


                <div class="form-group">
                  <!--<label for="email">Email</label><font color=red >*</font>-->
                  <input type="email" class="form-control" name="email"  placeholder="Enter email" required="" aria-label="email">  
                  <!-- <small id="emailHelp" class="form-text text-muted">your valid email should contain '@'</small> -->
                </div>


                <div class="form-group">
                  <!--<label for="password">Password</label><font color=red >*</font>-->
                  <input type="password" class="form-control" name="password" placeholder="Enter a Password" required="" aria-label="password"><span style="color: red">@error('password'){{$message}}@enderror</span>
                </div>

              

                <div class="form-group" style="font-size: 12;">
                <button type="submit" name="adminLogin" id="loginbtn"class="btn btn-success">Login</button>
              
                Go back to <a href="{{url('/blog')}}"  style="font-weight: 700;color: #0992d8;font-size: 14 ">Blog</a> page
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
