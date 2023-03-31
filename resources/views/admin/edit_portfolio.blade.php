@include('admin/header')

<link href="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="screen" href="https://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">

<style type="text/css">
    .btn-file {
        position: relative;
        overflow: hidden;
    }
    .btn-file input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        outline: none;
        background: white;
        cursor: inherit;
        display: block;
    }

    #img-upload{
        width: 100%;
    }    
    .updateRow{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }
    .updateRow > div{
        margin:10px auto;
    }
    .cuadro_intro_hover {
        border: 2px solid #ffffff;
        border-radius: 4%;
        padding: 0px;
        position: relative;
        overflow: hidden;
        height: auto;
    }
    img.img-responsive.product-pi {
        height: 250px;
    }
</style>

<div class="row" style="padding-top:10px;">
    <div class="col-md-12">
    @if ($flash = session('message'))
                    <div class="alert alert-success alert-dismissable" style="margin: 30px 20px;">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <strong style="text-align:center; color: green;" aria-hidden="true">{{Session::get('message')}}</strong>
                    </div>
                    @endif 
                    
                    @if ($flash = session('dltmessage'))
                    <div class="alert alert-danger alert-dismissable" style="margin: 30px 20px;">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <strong style="text-align:center; color: red;" aria-hidden="true">{{Session::get('dltmessage')}}</strong>
                    </div>
                    @endif 

                    @if ($errors->any())
                    <div class="alert-dismissable" style="margin: 30px 20px;">
            
                    <ul>
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissable">  
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>    
                        <li>{{ $error }}</li>
                    </div>
                    @endforeach
                        
                        </ul>
                    </div>
                    @endif
                <!-- FLASH MESSAGE END--> 
    </div>

    <div class="col-md-12">
        
        <div class="well text-center">
            <h3>Update Portfolio content</h3>

  <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">Add New Product</button></span></div>
    <!-- Add product Modal1 -->
    <div class="modal fade" id="myModal" role="dialog" style="top: 2%;">
        <div class="modal-dialog modal-sm">

        <div class="modal-content" style="width: 171%; margin-left: -35%;">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" style="margin-bottom: 2%">Add New Product</h4>
        </div>
                <form action="{{url('/admin/portfolio/insert')}}" method="post"  enctype="multipart/form-data" role="form">
                @csrf  
                    <div class="col-md-12">
                        <div class="form-group col-md-12" >
                            <p>Title :-</p>
                            <textarea class="form-control" id="id_mensagem2" name="title"> </textarea>
                            
                        </div>
                        <div class="form-group col-md-12" >
                            <p>Client Name :-</p>
                            <textarea class="form-control" id="id_mensagem2" name="client_name"> </textarea>
                            
                        </div>
                        <div class="form-group form-group col-md-12">
                            <p>Platform :- </p>
                            <textarea class="form-control" id="id_mensagem2" name="platform"></textarea>
                            
                        </div>
                        <div class="form-group form-group col-md-12">
                            <p>Used Technology :-</p>
                            <textarea class="form-control" id="id_mensagem2" name="used_technology"></textarea>
                            
                        </div>
                        <div class="form-group form-group col-md-12">
                            <p>Product Description :- (use '->' before new paragraph)</p>
                            <textarea class="form-control" id="id_mensagem2" name="product_description"></textarea>
                            
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Image</label>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default btn-file2 btn-file">
                                        Browse… <input type="file" id="img_urlAdd" name="img_url">
                                    </span>
                                </span>
                                <input type="text" class="form-control" style="color: #878484;"  readonly>
                            </div>
                            <img id='img-uploadAdd' class="img-responsive"/>
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary">Update</button>
            </form>

        </div>
        </div>
    </div>

<!-- end of ad product modal1 -->

<div class="updateRow" style="">
@foreach ($Portfolios as $portfolio)
<!-- <div class="container"> -->
  <!-- Trigger the modal with a button -->


   
   
                
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 image  animatable fadeInUp">
            <div class="cuadro_intro_hover ">
                <img src="{{ asset($portfolio->img_url)}}" class="img-responsive product-pi">

                <div class="caption">
                    <div class="blur"></div>
                    <div class="caption-text">
                        <h3 class="overlay-heading">{{$portfolio->title}} </h3>
                        <p class="overlay-text">{{$portfolio->client_name}}</p>

                    </div>
                    <span class="top-left"></span>
                    <span class="top-right"></span>
                    <span class="bottom-left"></span>
                    <span class="bottom-right"></span>
                </div>
            </div>

            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal{{$portfolio->id}}" style="margin-top: 3%">EDIT</button>
        </div>

  
    






        <!-- Modal -->
            <div class="modal fade" id="myModal{{$portfolio->id}}" role="dialog" style="top: 2%;">
                <div class="modal-dialog modal-sm">

                <div class="modal-content" style="width: 171%; margin-left: -35%;">
                <div class="modal-header">
                    <a class="btn btn-sm btn-danger" style="float: left; margin-bottom: 7%" href="{{url('admin/portfolio/delete/'.$portfolio->id)}}">Delete</a>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="margin-bottom: 2%">{{$portfolio->title}} </h4>
                </div>
                        <form action="{{ url('admin/portfolio/update/'.$portfolio->id) }}" method="post"  enctype="multipart/form-data" role="form">
                        @csrf   
                            <div class="col-md-12">
                                <div class="form-group col-md-12" >
                                    <p>Title :-</p>
                                    <textarea class="form-control" id="id_mensagem" name="title">{{$portfolio->title}} </textarea>
                                    
                                </div>
                                <div class="form-group col-md-12" >
                                    <p>Client Name :-</p>
                                    <textarea class="form-control" id="id_mensagem" name="client_name">{{$portfolio->client_name}} </textarea>
                                    
                                </div>
                                <div class="form-group form-group col-md-12">
                                    <p>Platform:-</p>
                                    <textarea class="form-control" id="id_mensagem" name="platform">{{$portfolio->platform}}</textarea>
                                    
                                </div>
                                <div class="form-group form-group col-md-12">
                                    <p>Used Technology :-</p>
                                    <textarea class="form-control" id="id_mensagem" name="used_technology">{{$portfolio->used_technology}}</textarea>
                                    
                                </div>
                                <div class="form-group form-group col-md-12">
                                    <p>Product Description :- (write '->' before each point except the first one)</p>
                                    <textarea class="form-control" id="id_mensagem" name="product_description">{{$portfolio->product_description}}</textarea>
                                    
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Image</label>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <span class="btn btn-default btn-file{{$portfolio->id}} btn-file">
                                                Browse… <input type="file" id="imgInp{{$portfolio->id}}" name="img_url">
                                            </span>
                                        </span>
                                        <input type="text" class="form-control"  readonly>
                                    </div>
                                    <img id='img-upload{{$portfolio->id}}' class="img-responsive" src="{{ asset($portfolio->img_url)}}" />
                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary">Update</button>
                    </form>




                </div>
                </div>
            </div>

    <script type="text/javascript">
     $(document).ready( function() {
        $(document).on('change', '.btn-file{{$portfolio->id}} :file', function() {
        var input = $(this),
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [label]);
        });

        $('.btn-file{{$portfolio->id}} :file').on('fileselect', function(event, label) {
            
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
                    $('#img-upload{{$portfolio->id}}').attr('src', e.target.result);
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp{{$portfolio->id}}").change(function(){
            readURL(this);
        });     
    });
    </script>
@endforeach
</div>
        </div>
    </div>
</div>





    <script type="text/javascript"
     src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js">
    </script> 
    <script type="text/javascript"
     src="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js">
    </script>
    <script type="text/javascript"
     src="https://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
    </script>
    <script type="text/javascript"
     src="https://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">
    </script>
<!--     <script type="text/javascript">
      $('#datetimepicker').datetimepicker({
        format: 'yyyy-MM-dd hh:mm:ss',
      });
    </script>
    <script type="text/javascript">
      $('#datetimepicker1').datetimepicker({
        format: 'yyyy-MM-dd hh:mm:ss',
      });
    </script>
    <script type="text/javascript">
      $('#datetimepicker2').datetimepicker({
        format: 'yyyy-MM-dd hh:mm:ss',
      });
    </script> -->


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
    </script>

@include('admin/footer')