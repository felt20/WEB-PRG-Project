<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/img/kapino.ico">
        <title>Kapino</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

        <!--     Fonts and icons     -->
            <!-- CDN's -->
                <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
                <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
                    <!--font-awesome-->
                <script src="https://use.fontawesome.com/7e20b3e3f4.js"></script>
                    <!--lobster|lobster2|montserrat-->
                <link href="https://fonts.googleapis.com/css?family=Lobster|Lobster+Two|Montserrat" rel="stylesheet">
            <!-- Host -->
                <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/font-awesome/css/font-awesome.min.css"/>
        
        

        <!-- CSS Files -->
        <link href="<?php echo base_url(); ?>bootstrap/bootstrap3/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/css/material-kit.css" rel="stylesheet"/>
        <link href="<?php echo base_url(); ?>assets/css/signup.css" rel="stylesheet"/>
    </head>

    <body class="signup-page">
        <!-- NAVBAR -->
        <nav class="navbar navbar-success navbar-absolute">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#landing-navbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand"><!--<i class="fa fa-coffee"></i>-->Kapino</a>
                </div>
                
                <div class="navbar-collapse collapse" id="landing-navbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="#"><i class="fa fa-shopping-basket "></i> The Market</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><i class="fa fa-comments"></i> About Us</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#signInModal"><i class="fa fa-user"></i> Sign in</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- /NAVBAR -->
        <!--  WRAPPER -->
        <div class="wrapper">
            <div class="header header-filter" id="background">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="card card-signup">
                            <!--<form class="form" data-toggle="validator" method="post"> -->
                                <div class="header header-info text-center" >
                                    <h3 class="montserrat">
                                        Sign Up!
                                    </h3>
                                    <div class="social-line">
										<a href="#pablo" class="btn btn-just-icon">
											<i class="fa fa-facebook-square"></i>
										</a>
										<a href="#pablo" class="btn btn-just-icon">
											<i class="fa fa-twitter"></i>
										</a>
										<a href="#pablo" class="btn btn-just-icon">
											<i class="fa fa-google-plus"></i>
										</a>
									</div>
                                    <p class="text-divider">Or be Classical</p>
                                </div>
                                <?php echo form_open_multipart('KapinoController/addUsers');?>
                                <div class="content">
                                    <!-- F.Name & L.Name -->
                                    <div class="form-group">
                                        <div class="row">
                                            <!--<?php echo form_open_multipart('KapinoController/addUsers');?>-->
                                            <div class="col-sm-6">
                                                <div class="form-group has-feedback">
                                                <div class="input-group has-feedback">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">face</i>
                                                    </span>
                                                    
                                                        <input id="inputFirstName" type="text" class="form-control" maxlength="50" placeholder="First Name" name="firstname" <?php if(isset($firstname)){ echo "value = '". $firstname ."'"; } ?> required/>
                                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                        <div class="help-block with-errors"></div>
                                                    
                                                </div>
                                                </div>
                                            </div>
                                            <!--<?=form_close();?>
                                             <?php echo form_open_multipart('KapinoController/addUsers');?>-->
                                            <div class="col-sm-6">
                                                <div class="form-group has-feedback">
                                                <div class="input-group has-feedback">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">face</i>
                                                    </span>
                                                    
                                                        <input id="inputLastName" type="text" class="form-control" maxlength="50" placeholder="Last Name" name="lastname" <?php if(isset($lastname)){ echo "value = '". $lastname ."'"; } ?> required/>
                                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                        <div class="help-block with-errors"></div>
                                                    
                                                </div>
                                                </div>
                                            </div>
                                            <!--<?=form_close();?>-->
                                        </div>
                                    </div>
                                <!-- F.Name & L.Name -->
                                                        <!-- <?php echo form_open_multipart('KapinoController/addUsers');?>-->
                                <!-- Email Address -->
                                    <div class="form-group has-feedback">
                                        <div class="input-group has-feedback">
                                            <span class="input-group-addon">
                                                <i class="material-icons">email</i>
                                            </span> 
                                                <input id="inputEmail" class="form-control" type="email" required data-error="Invalid Email Address" placeholder="Email Address" name="email" <?php if(isset($email)){ echo "value = '". $email ."'"; } ?> />
                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                <!-- Email Address -->
                                                        <!--<?=form_close();?>-->
                                                        
                                <!-- Password & Password Confirmation -->
                                    <div class="form-group">
                                        <div class="row">
                                                    <!-- <?php echo form_open_multipart('KapinoController/addUsers');?>-->
                                            <div class="col-sm-6">
                                                <div class="form-group has-feedback">
                                                <div class="input-group has-feedback">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">lock_open</i>
                                                    </span>
                                                        <label for="inputPassword" class="control-label">Password</label>
                                                        <input id="inputPassword" type="password" class="form-control" data-minlength="6" name="password" <?php if(isset($password)){ echo "value = '". $password ."'"; } ?> required/>
                                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                        <div class="help-block">
                                                            Minimum of 6 Characters 
                                                        </div>
                                                </div>
                                                </div>
                                            </div>
                                                        <!--<?=form_close();?>-->
                                            <div class="col-sm-6">
                                                <div class="form-group has-feedback">
                                                <div class="input-group has-feedback">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">lock</i>
                                                    </span>
                                                        <label for="inputVerifyPassword" class="control-label">Verify Password</label>
                                                        <input id="inputVerifyPassword" type="password" class="form-control" data-minlength="6" data-match="#inputPassword" data-match-error="Bobo, Hindi Match" required>
                                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                        <div class="help-block with-errors"></div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <!-- /Password & Password Confirmation -->
                                <!-- Address -->
                                    <!-- <?php echo form_open_multipart('KapinoController/addUsers');?>-->
                                    <div class="form-group has-feedback">
                                    <div class="input-group has-feedback">
                                        <span class="input-group-addon">
                                            <i class="material-icons">location_on</i>
                                        </span>
                                        
                                        <label for="inputAddress" class="control-label">Address</label>
                                        <textarea class="form-control" rows="2" id="inputAddress" placeholder="Enter Your Address Here" maxlength="100" name="address" <?php if(isset($address)){ echo "value = '". $address ."'"; } ?> required></textarea>
                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                        <div class="help-block with-errors"></div>
                                        
                                    </div>
                                    </div>
                                <!-- /Address -->   
                                    <div class="form-group text-right">
                                        <button id="submitButton" type="submit" class="btn btn-primary btn-raised btn-info">Submit</button>
                                    </div>
                                    
                            </div>
                            <?=form_close();?>
                        <!-- </form> -->
                    </div>
                </div>
            </div>
        </div>
            <!--  FOOTER -->
        <footer class="footer">
	        <div class="container">
	            <nav class="pull-left">
	                <ul>
	                    <li>
	                        <a href="<?php echo base_url(); ?>">
	                            Home
	                        </a>
	                    </li>
						<li>
	                        <a href="#">
	                           About Us
	                        </a>
	                    </li>
	                    <li>
	                        <a href="#">
	                           Contact Us
	                        </a>
	                    </li>
	                    <li>
	                        <a href="#">
	                            Facebook
	                        </a>
	                    </li>
	                </ul>
	            </nav>
	            
	        </div>
	    </footer>
        <!-- /FOOTER -->
        </div>
        </div>
        <!-- /WRAPPER -->
    </body>

<!--   Core JS Files   -->

<script src="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/js/jquery.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>bootstrap/bootstrap3/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/js/material.min.js"></script>


<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/js/nouislider.min.js" type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/js/material-kit.js" type="text/javascript"></script>
<script type="text/javascript">
    $().ready(function(){
			// the body of this function is in assets/material-kit.js
			$(window).on('scroll', materialKit.checkScrollForTransparentNavbar);
            $('#Submitbutton').click( function () {
                alert($('#inputFirstName').val());
                console.log($('#inputFirstName').val());
        });
    });
</script>
<script src="<?php echo base_url(); ?>assets/js/validator.min.js"></script>

</html>
