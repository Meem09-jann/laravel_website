@extends('layouts.masterblog')

@push('css')
    <style>
        form{
            background-color: white;
            padding: 30px 80px;
            border-radius: 2px;
        }
        
        .formclass{
            width:100%;
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

        img.img-responsive {
            height: 150px;
        }
        .bootstrap-tagsinput{
            margin: 10px 0px;
        }
        .bootstrap-tagsinput input{
            border: 1px solid #2cc0ec;
            border-radius: 4px;
            padding: 6px 12px;
        }
        .bootstrap-tagsinput .label-info{
            display: inline-block;
            font-size: 15px;
            border-radius: 4px;
            padding: 8px 12px;
            background-color: #d0eff9;
            color: #1ba9e2;
        }
        .bootstrap-tagsinput .tag [data-role="remove"]:after{
            content: "\00d7";
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
                <form action="{{url('/blogadd')}}" method="post"  enctype="multipart/form-data" class="formclass" style="width: 100%; height: auto;">
                    <div class="profile-button"> 
                        <h3 style="padding: 30px;">Add new Blog</h3>
                    </div> 
                    @csrf
                        <div class="form-group">
                            <label for="title"><b>Title</label></b><font color=red >*</font>
                            <input type="text" class="form-control" name="title" id="title"  placeholder="Enter Title" value="{{old('title')}}" aria-label="title">
                            <span style="color:red">@error('blogTitle'){{$message}}@enderror</span>  
                        </div>

                        <div class="form-group">
                            <label for="intro"><b>Small Intro</b> </label><font color=red >*</font>
                            <textarea type="text" class="form-control" id="intro" name="intro"  value="{{old('intro')}}" placeholder="At most 200">{{old('intro')}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="detail"><b>Details</b></label><font color=red >*</font>
                            <textarea type="text" class="form-control mceEditor" name="details" value="{{old('details')}}"  style="border-radius: 5px;">{{old('details')}}</textarea>
                        </div>


                        <div class="form-group">
                            <label for="tag"><b>Tags</b></label>
                            <input type="text" class="form-control" data-role="tagsinput" name="tags" value="{{old('tags')}}" placeholder="Enter tags">
                        </div>

                        <div class="form-group">
                            <label for="image"><b>Cover Image</b> </label><font color=red >*</font>

                            <input class="form-control" type="file" id="img_urlAdd"  name="blogImage"  value="{{old('blogImage')}}" aria-label="blogImage" >               
                            <img id='img-uploadAdd' class="img-responsive"/>
                            <small id="emailHelp" class="form-text text-muted">require image width:800px height:400px</small>                               
                        </div>

                        <div class="form-group">
                            <label for="checkbox" ><b>Category</b></label><br><span style="color:red"></span>
                        
                            @foreach($categories as  $cat) 
                            <input type="checkbox" id="pay1" name="categories[]" value="{{$cat->id}}">
                            <label for="pay1" class=" text-sm text-gray-100">{{$cat->categoryName}}</label> <br>
                            @endforeach                            
                        </div>



                        <div class="form-group">
                        <button type="submit" name="AddNewBlog" class="btn btn-success">Submit</button>      
                        </div>

                </form>
            </div>
                        
        
        </div>
    </div>
    <!-- End Page Content -->
@endsection

@push('js')
    <script type="text/javascript">
        $(document).ready( function() {
            $(document).on('change', '.btn-file2 :file', function() {
            var input = $(this),
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
            input.trigger('fileselect', [label]);
            });

            $('.btn-file2 :file').on('fileselect', function(event, label) {
                
                var input = $(this).parents('.input-group').find(':text'),
                    log = label;
                
                if( input.length ) {
                    input.val(log);
                } else {
                    if( log ) alert(log);
                }
            
            });
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    
                    reader.onload = function (e) {
                        $('#img-uploadAdd').attr('src', e.target.result);
                    }
                    
                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#img_urlAdd").change(function(){
                readURL(this);
            });     
        });


        $(document).ready(function(){
            $('input[name="tags"]').tagsinput({
                trimValue:true,
                confirmKeys:[44],
                focusClass:""
            });
        });
    </script>

@endpush