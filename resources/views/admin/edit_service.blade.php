<!-- <link href="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="screen" href="https://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
 -->
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
</style>
<div class="row" style="padding-top:10px;">
    <div class="col-md-12">
    <!-- Flash -->
       
     
        <div class="row">
            <div class="col-md-12">
             <!-- errorvalidation -->
            </div>
        </div>
    </div>
    <div class="col-md-12">
        
        <div class="well text-center">
            <h3>Update Service content</h3>


<!-- <div class="container"> -->
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal<?php echo $i;?>" style="width: 75%; font-size: 130%; margin-bottom: 2%"><?php echo $content[$i]['title'];?></button>

  <!-- Modal -->
  <div class="modal fade" id="myModal<?php echo $i;?>" role="dialog" style="top: 2%;">
    <div class="modal-dialog modal-sm">

      <div class="modal-content" style="width: 171%; margin-left: -35%;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="margin-bottom: 2%"><?php echo $content[$i]['title'];?></h4>
      </div>
            <form action="<?php echo site_url().'/admin/updateService/'.$content[$i]['id'] ?>" method="post"  enctype="multipart/form-data" role="form">
                <div class="col-md-12">
                    <div class="form-group col-md-12" >
                        <p>Title</p>
                        <textarea class="form-control" id="id_mensagem" name="title"><?php echo $content[$i]['title'];?> </textarea>
                        
                    </div>
                    <div class="form-group form-group col-md-12">
                        <p>Text</p>
                        <textarea class="form-control" id="id_mensagem" name="text"><?php echo $content[$i]['text'];?> </textarea>
                         
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Upload Logo</label>
                        <div class="input-group">
                            <span class="input-group-btn">
                                <span class="btn btn-default btn-file1 btn-file">
                                    Browse… <input type="file" id="imgInp1" name="img_url[]">
                                </span>
                            </span>
                            <input type="text" class="form-control"  readonly>
                        </div>
                        <img id='img-upload1' class="img-responsive"/>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Upload Service Front Image</label>
                        <div class="input-group">
                            <span class="input-group-btn">
                                <span class="btn btn-default btn-file2 btn-file">
                                    Browse… <input type="file" id="imgInp2" name="img_url[]">
                                </span>
                            </span>
                            <input type="text" class="form-control" readonly>
                        </div>
                        <img id='img-upload2' class="img-responsive"/>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Upload Service Background Image</label>
                        <div class="input-group">
                            <span class="input-group-btn">
                                <span class="btn btn-default btn-file3 btn-file">
                                    Browse… <input type="file" id="imgInp3" name="img_url[]">
                                </span>
                            </span>
                            <input type="text" class="form-control" readonly>
                        </div>
                        <img id='img-upload3' class="img-responsive"/>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
           </form>




      </div>
    </div>
  </div>



        </div>
    </div>
</div>





<!--     <script type="text/javascript"
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
    </script> -->
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
        $(document).on('change', '.btn-file :file', function() {
        var input = $(this),
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [label]);
        });

        $('.btn-file :file').on('fileselect', function(event, label) {
            
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
                    $(this).parents('.form-group').find('.img-responsive').attr('src', e.target.result);
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        }

        $(".btn-file :file").change(function(){
            readURL(this);
        });     
    });
    </script>


<!--     <script type="text/javascript">
     $(document).ready( function() {
        $(".btn-file").on('change', '.btn-file :file', function() {
        var input = $(this),
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [label]);
        });

        $(this).on('fileselect', function(event, label) {
            
            var input = $(this).parents('.input-group').find(':text'),
                log = label;
            
            if( input.length ) {
                input.val(log);
            } else {
                // if( log ) alert(log);
            }
        });
        
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function (e) {
                    $(this).find('img').attr('src', e.target.result);
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        }

        $(this).find('img').change(function(){
            readURL(this);
         });     
    });
    </script> -->

<!--     <script type="text/javascript">
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
                    $('#img-upload2').attr('src', e.target.result);
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp2").change(function(){
            readURL(this);
        });     
    });
    </script>

    <script type="text/javascript">
     $(document).ready( function() {
        $(document).on('change', '.btn-file3 :file', function() {
        var input = $(this),
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [label]);
        });

        $('.btn-file3 :file').on('fileselect', function(event, label) {
            
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
                    $('#img-upload3').attr('src', e.target.result);
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp3").change(function(){
            readURL(this);
        });     
    });
    </script> -->