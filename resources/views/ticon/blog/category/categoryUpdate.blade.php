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
<!-- Begin Page Content -->
    <div class="container-table">
        <div class="Contact-Section wrapper ispage aboutsec1">
            
            <!-- FLASH MESSAGE-->
                @include('includes.flashmsg')  
            <!-- FLASH MESSAGE END--> 

            <div class="formclass">
                <form action="{{url('/categoryupdate/'.$category->id) }}" method="post">
                    <h3 style="text-align: center; padding-bottom: 30px;color: #464646;font-weight: 600;">Update Category</h3>
                    @csrf     

                    <div class="form-group">
                        <h6 style="color: #939393;font-size: 10px;">Name of the Category</h6>
                        <input type="text" class="form-control" name="categoryName"  value="{{old('cateName',$category->categoryName)}}">
                    </div>

                    <div class="form-group" style="font-size: 12;">
                        <button type="submit" name="updateBtn" id="loginbtn" class="btn btn-success">Update</button>
                        <a href="{{url('/blog/admin/categories')}}"  style="font-weight: 700;color: #a1a1a1;font-size: 14 ">Back</a>
                    </div>
                
                </form>
            </div>   
        </div>
    </div>
<!-- End Page Content -->
@endsection

@push('js')
@endpush