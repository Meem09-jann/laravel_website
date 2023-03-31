<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="This is app store" />
        <meta name="keywords" content="app store , android store" />
        <meta name="robots" content="index, follow" />
        <title>Admin</title>
        <script src="{{ asset('assets/js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"/>
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"  type="text/css" />

       
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/64683339a5.js" crossorigin="anonymous"></script>
        
        <!-- JS PLUGIN FOR CUSTOM ALERT -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>

    </head>
    <body>
        <div id="lp-register">
            <div class="container wrapper">
                <div class="row">
                    <!-- TOAST SECTION -->
                    <div id="toastDiv">
                        <!-- SHOW FLASH DATA IF ANY -->
                        
                    


                       
                    </div>
                    <!-- TOAST SECTION END  -->

                    <div class="col-sm-6 col-sm-offset-3">
                        <div class="reg-form-container">
                            <!-- REGISTRATION TAB -->
                           
                            <!-- LOGIN TAB -->
                            <div class="tab-pane" id="login">
                                <div class="text-center">
                                    <h3>Login</h3>
                                </div>

                                <!-- error -->
                                @if(Session::has('incorrect'))
                                <div class="alert alert-danger " >
                                <span class="close" data-dismiss="alert" >×</span>
                                <strong style="text-align:center; color: red;">{{Session::get('incorrect')}}</strong>
                                </div>
                                @endif
                                <!-- error -->
                                <p class="text-muted text-center mb-50">Log into your account</p>

                                <!-- LOGIN FORM -->
                                <form name="Login_form" id='login_form' class="mb-50" action="{{url('/admin/signIn')}}" method="POST">
                                  @csrf 
                                    <div class="row">
                                        <div class="form-group col-xs-12">
                                            <label for="loginEmail" class="sr-only">User Name</label>
                                            <input id="loginEmail" class="form-control input-group-lg" type="text" name="username" title="User Name" placeholder="User Name" required/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-xs-12">
                                            <label for="loginPassword" class="sr-only">Password</label>
                                            <input id="loginPassword" class="form-control input-group-lg" type="password" name="password" title="Enter password" placeholder="Password" required/>
                                        </div>
                                    </div>
                                </form>
                                <!-- LOGIN FORM END -->
                                <div class="row">
                                    <!--<div class="col-xs-6">
                                        <p><a href="#">Forgot Password?</a></p>
                                    </div>-->
                                    <div class="col-xs-12" style="text-align: center;">
                                        <button class="btn btn-primary" form="login_form" type="submit" name="logingin" value="Signin">Login Now</button>
                                    </div>
                                </div>
                            </div>
                            <!-- LOGIN TAB END -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
