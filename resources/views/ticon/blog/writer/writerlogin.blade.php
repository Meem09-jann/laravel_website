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
            <form action="{{url('/writer/login')}}" method="post">


            @csrf   
                <h3 style="text-align: center; padding-bottom: 30px;color: #464646;font-weight: 600;">Writer Login</h3>
                @if( Session::get('incorrect') )
                  <div class="alert alert-danger " >
                                        <span class="close" data-dismiss="alert" >×</span>
                                        <strong style="text-align:center; color: red;">{{Session::get('incorrect')}} </strong>                     
                  </div>
                @endif
              
            
                <div class="form-group">
                    <!--<label for="email">Email</label><font color=red >*</font>-->
                    <input type="email" class="form-control" name="email"  placeholder="Enter email" required="" aria-label="email"><span style="color: red">@error('email'){{$message}}@enderror</span>
                    <!-- <small id="emailHelp" class="form-text text-muted">your valid email should contain '@'</small> -->
                </div>


                <div class="form-group">
                    <!--<label for="password">Password</label><font color=red >*</font>-->
                    <input type="password" class="form-control" name="password" placeholder="Enter a Password" required="" aria-label="Password"><span style="color: red">@error('password'){{$message}}@enderror</span>
                </div>

            

                <div class="form-group" style="font-size: 13;">
                    <button type="submit" name="writerLogin" id="loginbtn"class="btn btn-success">Login</button>
                    <div style="text-align: center;">
                    Does not have an accout? <a href="{{url('/blog/writer/register')}}"   style="font-weight: 700;color: #0992d8;font-size: 14 ">Register</a> 
                    <!-- <br> or <br>
                    Request for blog account here at  <a href="mailto:moshiur@ticonsys.com?cc=minhajul@ticonsys.com&subject=Reg: Blog writing request"   style="font-weight: 700;color: #0992d8;font-size: 14 ">Email</a>  -->
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
