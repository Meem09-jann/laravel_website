@extends('layouts.masterblog')
@push('css')
    <style>
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
    <div class="container-table">
        <div class="Contact-Section wrapper ispage aboutsec1">
        
            <!-- FLASH MESSAGE-->
                @include('includes.flashmsg')  
            <!-- FLASH MESSAGE END-->  
            

            <div class="formclass">
                <form action="{{url('/addwriter')}}" method="post">
                    <div class="from-input" style="width: 300px;">
                        <h3 style="padding: 30px;text-align: center;font-weight: 600;">User Create</h3>

                        @csrf

                        <div class="form-group">
                        <!-- <label for="name">Name</label><font color=red >*</font> -->
                        <input type="text" class="form-control" name="firstName"  placeholder="First name" value="{{old('name')}}" ><span style="color: red">@error('name'){{$message}}@enderror</span>
                        </div>
                        
                        <div class="form-group">
                        <input type="text" class="form-control" name="lastName"  placeholder="Last name" value="{{old('lastName')}}" ><span style="color: red">@error('lastName'){{$message}}@enderror</span>
                        </div>

                        <div class="form-group">
                        <!-- <label for="email">Email</label><font color=red >*</font> -->
                        <input type="email" class="form-control" name="email"  placeholder="Enter email" value="{{old('email')}}" ><span style="color: red">@error('email'){{$message}}@enderror</span>
                        <small id="emailHelp" class="form-text text-muted"> valid email should contain '@'</small>
                        </div>


                        <div class="form-group">
                        <!-- <label for="password">Password</label><font color=red >*</font> -->
                        <input type="password" class="form-control" name="password" placeholder="Enter a Password"><span style="color: red">@error('password'){{$message}}@enderror</span>
                        </div>

                        <div class="form-group">
                        <button type="submit" id="loginbtn" name="signup" class="btn btn-primary">Submit</button>
                        
                        <!-- Already have an account?<a href="{{url('writerLogin.php')}}"  style="font-weight: 700;"> Login</a> or go -->
                        <a href="{{url('/blog/admin/writers')}}"  style="font-weight: 700; ">Back</a>
                        </div>

                    </div>

                </form>               
            </div>          
        
        </div>
    </div>
    <!-- End Page Content -->
@endsection

@push('js')
@endpush