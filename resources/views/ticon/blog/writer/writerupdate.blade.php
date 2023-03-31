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
        #loginbtn{
            width:100%;
            margin: 10 0;
            padding: 10px;
            background-color: #2fc4ee;
            border-color: #2ec2ed;
            font-weight: 600;
            font-size: 15;
        }
        .form-control{
            margin-bottom: 20px;
            border: 1px solid #2cc0ec;
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
    </style>
@endpush
@section('content')
    <!-- Main Container Start -->
    <div class="container-table">
        <div class="Contact-Section wrapper ispage aboutsec1">

            <!-- FLASH MESSAGE-->
               @include('includes.flashmsg')  
            <!-- FLASH MESSAGE END--> 
            
            <div class="WriterInfo">     
                <div class="formclass">
                    
                    <form action="{{url('/writerupdate/'.Auth::guard('writer')->user()->id)}}" method="post">
                        
                        <h3 style="text-align: center; padding-bottom: 30px;color: #464646;font-weight: 600;">Update Profile</h3>
                        @csrf     
                        
                        <div class="form-group">    
                            <input type="hidden" class="form-control" name="id" value="{{Auth::guard('writer')->user()->id}}" >
                        </div>

                        <div class="form-group">
                            <h6 style="color: #939393;font-size: 10px;">First Name</h6>
                            <input type="text" class="form-control" name="firstName"  value="{{old('firstName',Auth::guard('writer')->user()->firstName)}}">
                        </div>

                        <div class="form-group">
                            <h6 style="color: #939393;font-size: 10px;">Last Name</h6>
                            <input type="text" class="form-control" name="lastName"  value="{{old('lastName',Auth::guard('writer')->user()->lastName)}}">                   
                        </div>

                        <div class="form-group">
                            <h6 style="color: #939393;font-size: 10px;">Work</h6>
                            <input type="text" class="form-control" name="work" value="{{old('work',Auth::guard('writer')->user()->work)}}">
                        </div>

                        <div class="form-group">
                            <h6 style="color: #939393;font-size: 10px;">Date of birth</h6>
                            <input type="date" class="form-control" name="dob" value="{{old('dob',Auth::guard('writer')->user()->dob)}}">
                        </div>

                        <div class="form-group">
                            <h6 style="color: #939393;font-size: 10px;">Website</h6>
                            <input type="text" class="form-control" name="website" value="{{old('website',Auth::guard('writer')->user()->website)}}">
                        </div>

                        <div class="form-group">
                            <h6 style="color: #939393;font-size: 10px;">Phone</h6>
                            <input type="text" class="form-control" name="phone" value="{{old('phone',Auth::guard('writer')->user()->phone)}}">
                        </div>

                        <div class="form-group">
                            <h6 style="color: #939393;font-size: 10px;">Bio</h6>
                            <textarea name="bio"  style="width:100%; border: 1px solid #2cc0ec;" >{{old('bio',Auth::guard('writer')->user()->bio)}}</textarea>
                        </div>

                        <div class="form-group" style="font-size: 12;">
                        <button type="submit" name="updateBtn" id="loginbtn" class="btn btn-success">Update</button>
                        </div>

                    </form>
                    
                </div>
            </div>
                        
        </div>
    </div>
    <!-- End Page Content -->
@endsection

@push('js')
@endpush