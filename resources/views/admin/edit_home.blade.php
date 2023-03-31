<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="screen" href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
<div class="row" style="padding-top:10px;">
    <div class="col-md-6 col-md-offset-3">
       <!-- Flash -->
      
        <div class="row">
            <div class="col-md-12">
                <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        
        <div class="well text-center">
            <h3>Update Home content</h3>
            <form action="admin/updatehome" method="post" role="form">
                <div class="col-md-12">
                    <div class="form-group col-md-12">
                        <p>Title</p>
                        <textarea class="form-control" id="id_mensagem" name="title"> </textarea>
                        
                    </div>
                    <div class="form-group form-group col-md-12">
                        <p>Title Text</p>
                        <textarea class="form-control" id="id_mensagem" name="title_text"></textarea>
                         
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-md-12">
                        <p>About Text (beside video)</p>
                        <textarea class="form-control" id="id_mensagem" name="video_text">< </textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-md-12">
                        <p>Video URL</p>
                        <textarea class="form-control" id="id_mensagem" name="video_url"></textarea>
                    </div>
                </div>

              
                
                <button type="submit" class="btn btn-primary">Update</button>
           </form>
        </div>
    </div>
</div>
    <script type="text/javascript"
     src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js">
    </script> 
    <script type="text/javascript"
     src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js">
    </script>
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
    </script>
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">
    </script>
    <script type="text/javascript">
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
    </script>