<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Capsone-System2" >
	<link rel="shortcut icon" href="images/favicon.png">

	<title>NYWCC Login</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:300,200,100' rel='stylesheet' type='text/css'>

	<!-- Bootstrap core CSS -->
	<link href="js/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

	<link rel="stylesheet" href="fonts/font-awesome-4/css/font-awesome.min.css">

	<!--HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="../../assets/js/html5shiv.js"></script>
	  <script src="../../assets/js/respond.min.js"></script>
	<![endif]-->

	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet" />	

</head>

<body class="texture">

<div id="cl-wrapper" class="login-container">

	<div class="middle-login">
		<div class="block-flat" style="display:block;" id="adloginen">
		<?php
			$url = basename($_SERVER['PHP_SELF']);
			if($url=='index.php')
			{
				$actionUrl 	= 'scripts/login.php';
				$logoimage	= 'images/LOGO.png';
			}
			else
			{
				$actionUrl 	= '../scripts/login.php';
				$logoimage	= '../images/LOGO.png';
			}
			?>
			<div class="header">							
				<h3 class="text-center"><img class="logo-img" src="<?php echo $logoimage; ?>" alt=""/>NYWCC Login</h3>
			</div>
			<div>
			
				<form style="margin-bottom: 0px !important;" class="form-horizontal" action="<?php echo $actionUrl; ?>" name="adminuserlogin" method="POST" id="adminuserlogin">
					<div class="content">
						<!--<h4 class="title">Login Access</h4>-->
						<div id="validation_errors" style="color:#000000; font-size:12px; font-weight:bold;"></div>
							<div class="form-group">
								<div class="col-sm-12">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input type="text" placeholder="Enter registered email" id="username" name="username" class="form-control">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock"></i></span>
										<input type="password" placeholder="Password" id="password" name="password" class="form-control">
									</div>
								</div>
							</div>
					</div>
					<div class="foot">
						<ul class="sub-menu">
						<!--<input class="btn btn-default" data-dismiss="modal" type="button" >Register</button>-->
						<!--<a id="forgetpasswordclickk" name="forgetpasswordclickk" style="text-decoration:none;">Forget Password?</a>-->
						<!-- <a class="btn btn-default"   href="#" id="signupclick" name="signupclick">Register</a> -->

						<input class="btn btn-primary" data-dismiss="modal" type="submit" name="adminlogin" id="adminlogin" value="Log Me In">
					</div>
				</form>
			</div>
		</div>
			<div class="block-flat" style="display:none" id="sgregisteren">
			<div class="header">							
				<h3 class="text-center"><img class="logo-img" src="images/LOGO.png" alt="logo"/>NYWCC</h3>
			</div>
			<div>

				<form style="margin-bottom: 0px !important;" class="form-horizontal" action="scripts/signup.php" id="adminsignup" name="adminsignup" method="POST">
					<div class="content">
						<div id="signupvalidation_errors" style="color:#000000; font-size:12px; font-weight:bold;"></div>
						<h5 class="title text-center"><strong>Sign Up</strong></h5>
              <hr/>
             <!-- <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-6">
                  <button class="btn btn-block btn-trans btn-facebook bg btn-rad" type="button">
                  	<i class="fa fa-facebook"></i> Sign in with Facebook</button>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                  <button class="btn btn-block btn-trans btn-twitter bg btn-rad" type="button">
                  	<i class="fa fa-twitter"></i> Sign in with Twitter</button>
                </div>
              </div>
              <p class="text-center">Or</p>-->
              
							<div class="form-group">
								<div class="col-sm-12">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input type="text" name="nickname" id="nickname" placeholder="Nickname" class="form-control">
									</div>
                  
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
										<input type="text" name="signupemail" id="signupemail" placeholder="E-mail" class="form-control">
									</div>
                  
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-6 col-xs-6">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock"></i></span>
										<input id="signuppass1" type="password" name="signuppassword" placeholder="Password" class="form-control">
									</div>
                  
								</div>
								<div class="col-sm-6 col-xs-6">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock"></i></span>
										<input  id="signuppass2" type="password" name="signupconpassword" placeholder="Confirm Password" class="form-control">
									</div>
                  
								</div>
							</div>
   
              	<a class="btn btn-default"   href="#" id="loginclick" name="loginclick">Login</a>
            	<input class="btn btn-primary" type="submit" id="signupregis" name="signupregis" value="Sign Up">
					</div>
			  </form>
			</div>
		</div>

		<div class="block-flat" id="forgotpassword" style="display:none;">
			<div class="header">							
				<h3 class="text-center"><img class="logo-img" src="images/LOGO.png" alt="logo"/>NYWCC</h3>
			</div>
			<div>

				<form style="margin-bottom: 0px !important;" class="form-horizontal" action="index.html" parsley-validate novalidate>
					<div class="content">
						<h5 class="title text-center"><strong>Forgot your password?</strong></h5>
            				<div id="forgetpwd-error"></div>
              				<hr/>
							<div class="form-group">
								<div class="col-sm-12">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
										<input type="fgemail" name="fgemail" parsley-trigger="change" parsley-error-container="#email-error" required placeholder="Your Email" class="form-control">
									</div>
                  				
								</div>
							</div>
            				<a class="btn btn-default"   href="#" id="loginclick" name="loginclick">Login</a>
            				<input class="btn btn-block btn-primary btn-rad btn-lg" type="submit" name="forgetsubmit" id="forgetsubmit" value="Reset">
					</div>
			  </form>
			</div>
		</div>
		<div class="text-center out-links"><a href="#">&copy; 2014 M-Square Systems</a></div>
	</div> 
	
</div>

<script src="js/jquery.js"></script>
<script src="js/validate.js"></script>
<script src="js/jquery.parsley/parsley.js" type="text/javascript"></script>
<script src="js/behaviour/general.js" type="text/javascript"></script>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.flot/jquery.flot.js"></script>
<script type="text/javascript" src="js/jquery.flot/jquery.flot.pie.js"></script>
<script type="text/javascript" src="js/jquery.flot/jquery.flot.resize.js"></script>
<script type="text/javascript" src="js/jquery.flot/jquery.flot.labels.js"></script>
</body>
</html>
