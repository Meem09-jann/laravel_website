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
                <form action="{{url('/categoryDelete/'.$category->id)}}" method="post">
                    <h3 style="text-align: center; padding-bottom: 30px;color: #464646;font-weight: 600;">Delete Category</h3>
                    @csrf     
                    
                    <div class="form-group">    
                        <input type="hidden" class="form-control" name="cateID" value="{{$category->id}}" >
                    </div>

                    <div class="form-group">
                        <h6 style="color: #939393;font-size: 10px;">Name of the Category</h6>
                        <input type="text" class="form-control" style="border: 1px solid #f3a2a2;" name="name"  value="{{$category->categoryName}}" readonly>
                    </div>

                    <div class="form-group" style="font-size: 12;">
                        <h6 style="color: #939393;font-size: 10px;">This category will delete from all blogs </h6>
                        <button type="submit" name="dltBtn" id="dltBtn" class="btn btn-danger">Delete</button>
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