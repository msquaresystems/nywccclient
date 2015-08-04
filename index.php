<?php
session_start();
include("includes/dbcon.php"); 
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>NYWCC Employee Login</title>
<!-- Stylesheet start here -->
<!-- Stylesheet -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/animations.css" />

<link rel="stylesheet" type="text/css" href="css/superslides.css" />
<link rel="stylesheet" type="text/css" href="css/flexslider.css" />
<link rel="stylesheet" type="text/css" href="css/masonry.css" />
<link rel="stylesheet" type="text/css" href="css/fancybox.css" />
<link rel="stylesheet" type="text/css" href="css/theme.css"/>
<link rel="stylesheet" type="text/css" href="css/preview.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.timepicker.min.css">
<link rel="stylesheet" type="text/css" href="css/color/multicolor.css" id="swap-color" />
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<!--<link rel="shortcut icon" href="img/favicon.ico" />-->
<style type="text/css">
	.spinner {
		position: fixed;
		top: 50%;
		left: 50%;
		margin-left: -50px; /* half width of the spinner gif */
		margin-top: -50px; /* half height of the spinner gif */
		text-align:center;
		z-index:1234;
		overflow: auto;
		width: 100px; /* width of the spinner gif */
		height: 102px; /*hight of the spinner gif +2px to fix IE8 issue */
	}
  #folio label
  {
     color: #fff; 
  }
  input[type="password"]
  {
    width:240px;
  }
  .changecolor + .tooltip > .tooltip-inner {
    background-color: #fff; 
    color: #000; 
    border: 1px solid #CCCCCC; 
}
.intakeerror
{
  color: green;
  //margin-bottom: 20px;
  //margin-top: 10px;
  border:1px solid green;
  display: block;
}
.changecolor + .tooltip.top > .tooltip-arrow{
    bottom:0;
    left:50%;
    margin-left:-5px;
    border-left:5px solid transparent;
    border-right:5px solid transparent;
    border-top:5px solid #CCC
}
.changecolor + .tooltip.left > .tooltip-arrow{
    top:50%;
    right:0;
    margin-top:-5px;
    border-top:5px solid transparent;
    border-bottom:5px solid transparent;
    border-left:5px solid #CCC;
}
.changecolor + .tooltip.bottom > .tooltip-arrow{
    top:0;
    left:50%;
    margin-left:-5px;
    border-left:5px solid transparent;
    border-right:5px solid transparent;
    border-bottom:5px solid #CCC;
}
.changecolor + .tooltip.right > .tooltip-arrow{
    top:50%;
    left:0;
    margin-top:-5px;
    border-top:5px solid transparent;
    border-bottom:5px solid transparent;
    border-right:5px solid #CCC;
}
h1.changefont{

  font-size: 16px;
  font-weight: bold;
}
span.lead
{
  font-size: 14px;
  font-weight: bold;
}
.alreadyclicked
{
  
}

#address_reg {
	border: 1px solid #B2B8BB;
	width: 505px;
	padding-right: 2px;
	margin-bottom:30px;
}
#address_reg .td_field {
	font-size: 10pt;
	width:10%!important;
}
#address_reg .td_label {
	width:1%!important;
	color:#454545;
}
.pac-container:after{
	content:none !important; 
}
</style>

</head>
<body>
<div id="spinner" class="spinner" style="display:none;">
    <img id="img-spinner" src="img/spinner.gif" alt="Loading"/>
</div>

<!-- Slider -->
<div id="slides">

  <ul class="slides-container"> 

    <!-- Slider Single Item -->
    <li><a href="#"><img src="img/sky.jpg" alt="Photo" /></a>
      <div class="slides-detail">
        <h1 class="changefont"><span class="logo_back"></span></h1>
        <span class="lead"> <strong>Employee</strong>Login</span></div>
    </li>
	      <!-- Slider Single Item -->
    <li><a href="#"><img src="img/nn.jpg" alt="Photo" /></a>
      <div class="slides-detail">
        <h1 class="changefont"><span>Intake</span>&nbsp;Form</h1>
      </div>
    </li>
    
    <!-- Slider Single Item -->
    <li><a href="#"><img src="img/man.jpg" alt="Photo" /></a>
      <div class="slides-detail">
        <h1 class="changefont"><span>Followup</span>&nbsp;Form</h1>
      </div>
    </li>

  </ul>

  <!-- Slider Navigation -->
  <div class="slides-navigation"><a href="#" class="prev">
  <i class="icon-angle-left"></i></a> 
  <a href="#" class="next"><i class="icon-angle-right"></i></a>
  </div>

</div>


   <?php if(!isset($_SESSION['id'])) { ?>



<!-- Login Section  -->
<div id="login" class="section">
  <div class="section-title"><i class="icon-user"></i><strong>Signup/Login</strong>
    <p></p>
  </div>
  
  <!-- Login Content  -->
  <div class="container">
    <hr />
     <div class="row-fluid" id="demo-1">
            <div class="span10 offset1">
                <div class="tabbable custom-tabs tabs-animated  flat flat-all hide-label-980 shadow track-url auto-scroll">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#panel1" data-toggle="tab" class="active"><i class="icon-lock"></i>&nbsp;<span>Login Panel</span></a></li>
                        <li><a href="#panel2" data-toggle="tab"><i class="icon-user"></i>&nbsp;<span>Register Panel</span></a></li>
                    </ul>
                    <div class="tab-content ">
                        <div class="tab-pane active" id="panel1">
                            <div class="row-fluid">
                                <div class="span5" id="loginpanel" style="display:block;">
                                  <form method="POST" id="loginform" name="loginform">  
                                    <label>Email</label>
                                      <input type="text" class="input-block-level" name="lemail" id="lemail" placeholder="Enter your Registered Email" style="width:240px;"/>
                                    <div id="email_error_msg" style="font-size:13px;color:red;font-weight:bold;"></div>
									
									<!--
                                    <label>
                                      <a href="#" class="pull-right" id="forgotuname" onClick="showDiv()">
                                        <i class="icon-question-sign"></i>&nbsp;Forgot Username</a>
                                    </label>
                                    -->
									
                                    <label>Password </label>
                                      <input type="password" class="input-block-level" name="lpassword" id="lpassword" />
                                    <div id="passwd_error_msg" style="font-size:13px;color:red;font-weight:bold;"></div>            

                                    <label>
                                      <a href="#" class="pull-right" id="forgotpasswd" ><i class="icon-question-sign"></i>&nbsp;Forgot Password</a>
                                    </label>
									<label>
                                      <a href="admin1"><i class="icon-question-sign"></i>&nbsp;Login as Admin</a>
                                    </label>
                    
                                    <br />
                                    <input type="submit" name="loginsubmit" value="Sign-In" class="btn btn-large" style="height:45px;">
                                  </form>
                                </div>

                                <div class="span5" style="display:none;" id="fusername">
                                 <div class="span12 row" id="fuser_err" style="font-size:12px; font-weight:bold; margin-left:-10px;color:red;" align="center"></div> 
                                  <form  method="POST" id="usernameform" name="usernameform">
                                    <label>Forgot Username</label>
                                      <input type="text" class="input-block-level" name="fuser" id="fuser" placeholder="Enter your registered email"/>
                                        <br>
                                      <input type="submit" name="usersubmit" value="Submit" class="btn btn-large" style="height:45px;">
                                    <a href="#" class="pull-right" id="fbacktologin"><i class="icon-question-sign"></i>&nbsp;Back to Login</a>
                                  </form>
                                </div>

                                <!--Forgot username -->
                                <script type="text/javascript">
                                 function showDiv() 
                                  { 
                                    document.getElementById('forgotuname').style.display = "block"; 
                                    document.getElementById('loginpanel').style.display = "none"; 
                                  } 
                                </script>

                                <div class="span5" style="display:none;" id="fpassword">
                                  <div class="span12 row" id="fpwd_err" style="font-size:12px; font-weight:bold; margin-left:-10px;color:red;" align="center"></div> 
                                    <form method="POST" id="passwordform" name="fgpwdform">
                                      <label>Forgot Password</label>
                                        <input type="text" class="input-block-level" name="ftpassmail" id="ftpassmail" placeholder="Enter your registered email"/>
                                         <br>
                                        <input type="submit" name="pwdsubmit" value="Submit" class="btn btn-large" style="height:45px;">
                                      <a href="#" class="pull-right" id="fbacktopassword"><i class="icon-question-sign"></i>&nbsp;Back to Login</a>
                                    </form>
                                </div>

                                 <!-- end forgot password-->
                                <script type="text/javascript">
                                  function showDiv()
                                  {
                                    //alert('1123');
                                    document.getElementById('fusername').style.display = "block";
                                    document.getElementById('loginpanel').style.display = "none";
                                  }
                                </script>
                                
                                <div class="span4">
                                    <!-- <div class="box">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit fusce vel.
                                        </p>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit fusce vel sapien elit in.
                                        </p>
                                    </div> -->
                                    <!--<div class="box">
                                        Don't Have An Account.<br />
                                        Click Here For <a href="#" data-toggle="tab">Free Register</a>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="panel2">
                          <div class="row-fluid">
                            <div class="span12 row" id="signup_err_msg" style="font-size:12px; font-weight:bold; margin-left:-10px;color:red;" align="center"></div>
								<form method="POST" id="registerform" name="registerform">
									<div class="span12">								
										<div class="row reg_row">

										<div class="row_split">
											<div class="span5 reg_span5">
											  <label>First Name:</label>
											</div>
											<div class="span7">
												<input type="text" name="fname" id="fname" class="pull-left" value="" />
												<span id="reg_spanfirstname" style="color:blue; font-size:12px; margin-top:-12px;" class="pull-left"></span>
											</div>
										</div>
										
										<div class="row_split">
											<div class="span5 reg_span5">
											  <label>Last Name:</label>
											</div>
											<div class="span7">
												<input type="text" name="lname" id="lname" class="pull-left" value="" />
												<span id="reg_spanlastname" style="color:blue; font-size:12px; margin-top:-12px;" class="pull-left"></span>
											</div>
										</div>
										
										<div class="row_split">
											<div class="span5 reg_span5">
											  <label>User Name:</label>
											</div>
											<div class="span7">
												<input type="text" name="uname" id="uname" class="pull-left" value="" />
												<span id="reg_spanusername" style="color:blue; font-size:12px; margin-top:-12px;" class="pull-left"></span>
											</div>
										</div>
										
										<div class="row_split">
											<div class="span5 reg_span5">
											  <label>Email:</label>
											</div>
											<div class="span7">
											  <input type="text" name="reg_email" id="reg_email" class="pull-left" value="" />
											  <span id="reg_spanemail" style="color:blue; font-size:12px; margin-top:-12px;" class="pull-left"></span>
											</div>
										</div>
										
										<div class="row_split">
											<div class="span5 reg_span5">
											  <label>Password:</label>
											</div>
											<div class="span7">
											  <input type="password" name="passwd" id="passwd" class="pull-left" value="" style="width:206px;" />
											  <span id="reg_spanpassword" style="color:blue; font-size:12px; margin-top:-12px;" class="pull-left"></span>
											</div>
										</div>

										<div class="row_split">
											<div class="span5 reg_span5">
											  <label>Repeat Password:</label>
											</div>
											<div class="span7">
											  <input type="password" name="reppasswd" id="reppasswd" class="pull-left" value="" style="width:206px;" />
											  <span id="reg_spanr_password" style="color:blue; font-size:12px; margin-top:-12px;" class="pull-left"></span>
											</div>
										</div>

									</div>

									<div class="row reg_row">
											<input type="hidden" name="street_number" id="street_number" /> 
											<input type="hidden" name="route" id="route" /> 
											<input type="hidden" name="locality" id="locality" /> 
											<input type="hidden" name="administrative_area_level_1" id="administrative_area_level_1" /> 
											<input type="hidden" name="postal_code" id="postal_code" /> 
											<input type="hidden" name="country" id="country" /> 

										<div class="row_split">
											<div class="span5 reg_span5">
											  <label>Phone Work:</label>
											</div>
											<div class="span7">
											  <input type="text" name="work" id="work" class="pull-left" value="" />
											  <span id="reg_spanphone" style="color:blue; font-size:12px; margin-top:-12px;" class="pull-left"></span>
											</div>
										</div>

										<div class="row_split">
											<div class="span5 reg_span5">
											  <label>Cell:</label>
											</div>
											<div class="span7">
											  <input type="text" name="cell" id="cell" class="pull-left" value="" />
											  <span id="reg_spancell" style="color:blue; font-size:12px; margin-top:-12px;" class="pull-left"></span>
											</div>
										</div>

										<div class="row_split">
											<div class="span5 reg_span5">
											  <label>DOB:</label>
											</div>
											<div class="span7">
											  <input type="text" id="birthdate" name="birthdate" data-format="dd/mm/yyyy" class="pull-left" value="" />
											  <span id="reg_spandob" style="color:blue; font-size:12px; margin-top:-12px;" class="pull-left"></span>
											</div>
										</div>
										
										<div class="row_split">
											  <div class="span5 reg_span5">
											  <label>Address:</label>
											  </div>
											  <div class="span7">
											  <input type="text" name="physical_address" id="reg_physical_address" class="pull-left" value="" />
											  <span id="reg_spanaddress" style="color:blue; font-size:12px; margin-top:-12px;" class="pull-left"></span>
											  </div>
										</div>
											
										<div class="row_split" style="width:505px;">
											<table id="address_reg">
												<tr>
													<td class="td_label">
														<div class="span5" style="width:62px; margin-left:5px;">
															<label>Address1: </label>
														</div>
													</td>
													<td class="td_field">
														<div class="span7" style="width:150px; margin-left:0px;">
															<input type="text" class="pull-left" name="physical_address1" id="reg_physical_address1" value="" style="width:160px; margin-bottom:2px;" />
														</div>
													</td>
													<td class="td_label">
														<div class="span5" style="width:62px; margin-left:5px;">
															<label>Address2: </label>
														</div>
													</td>
													<td class="td_field">
														<div class="span7" style="width:150px; margin-left:0px;">
															<input type="text" class="pull-left" name="physical_address2" id="reg_physical_address2" value="" style="width:160px; margin-bottom:2px;" />
														</div>
													</td>
												</tr>
												<tr>
													<td class="td_label">
														<div class="span5" style="width:62px; margin-left:5px;">
															<label>City:</label>
														</div>
													</td>
													<td class="td_field">
														<div class="span7" style="width:150px; margin-left:0px;">
															<input type="text" class="pull-left" name="physical_city" id="reg_physical_city" value="" style="width:160px; margin-bottom:2px;" />
														</div>
													</td>
													<td class="td_label">
														<div class="span5" style="width:62px; margin-left:5px;">
															<label>State:</label>
														</div>
													</td>
													<td class="td_field">
														<div class="span7" style="width:150px; margin-left:0px;">
															<input type="text" class="pull-left" name="physical_state" id="reg_physical_state" value="" style="width:160px; margin-bottom:2px;" />
														</div>
													</td>
												</tr>
												<tr>
													<td class="td_label">
														<div class="span5" style="width:62px; margin-left:5px;">
															<label>Zip code:</label>
														</div>
													</td>
													<td class="td_field">
														<div class="span7" style="width:150px; margin-left:0px;">
															<input type="text" class="pull-left" name="physical_zip" id="reg_physical_zip" value="" style="width:160px; margin-bottom:2px;" />
														</div>
													</td>
													<td class="td_label">
														<div class="span5" style="width:62px; margin-left:5px;">
															<label>Country:</label>
														</div>
													</td>
													<td class="td_field">
														<div class="span7" style="width:150px; margin-left:0px;">
															<input type="text" class="pull-left" name="physical_country" id="reg_physical_country" value="" style="width:160px; margin-bottom:2px;" />
														</div>
													</td>
												</tr>
											</table>
										</div>
										
									  <div class="span8 row">
										  <input type="submit" name="registerform" id="registerform" value="Signup" class="btn btn-large" style="height:40px; padding:1px; font-size:18px; font-weight:bold; width:80px;">
									  </div>

									</div>
								
								</div>

                              </form>  
                            </div>
                          </div>
                        </div>
						
						<div style=" height:80px; background-color:#8E9CA1;">
							<div style="float:right;">
							<a href="http://www.msquaresystems.com/" target="_blank"><p style=" margin-right:20px; margin-top:5px; margin-bottom:0px;background-attachment: scroll;background-clip: border-box;background-color: rgba(0, 0, 0, 0); background-image: url('img/m2systems_logo.png'); background-origin: padding-box; background-repeat: no-repeat; background-size: 200px auto; height:52px; width:200px;"></p></a>
							<p style=" margin-right:20px;margin-bottom:0px;">powered by M-Square Systems Inc.</p>
							</div>
						</div>
						
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
<?php  } else { ?>
<!-- Followup Section -->
<div id="services" class="section">
  <div class="section-title"><i class="icon-share"></i><strong>Followup Form</strong>
    <?php include('includes/followup.php');?>
  </div>
</div>
<!-- Membership Section -->
<div id="membership_sec" class="section">
  <div class="section-title"><i class="icon-circle-arrow-down"></i><strong>Membership</strong>
    <?php include('includes/membership.php');?>
  </div>
</div>
<!-- Intake Section -->
<div id="folio" class="section">
  <div class="section-title"><i class="icon-circle-arrow-down"></i><strong>Intake Form</strong>
    <?php include('includes/intake.php');?>
  </div>
</div>

<!-- Client Details -->
<div id="clientportfolio" class="section">
  <div class="section-title"><i class="icon-circle-arrow-down"></i><strong>Client Details</strong>
    <?php include('includes/assignclients.php');?>
  </div>
</div>


<!-- end change pwd-->
 <script type="text/javascript">
  function showChange()
  {
    document.getElementById('profile').style.display="none";
    document.getElementById('changepassword').style.display="block";
  }

  </script>
<!--My profile-->
<div id="about" class="section" style="display:block;">
  <div class="section-title"><i class="icon-cog"></i><strong>My Profile</strong>
    <!--<p>some text <span>here</span></p>-->
  </div>
  
 <!-- About Content -->
  <div class="container">
  
    <!-- Change Password -->
    <div class="span12" id="changepassword" style="display:none;margin-top:40px;">
    <div class="span12 row" id="cpwd_err" style="font-size:12px; font-weight:bold; margin-left:-10px;color:red;" align="center"></div> 
      <form method="POST" action="scripts/changepassword.php" name="changepwdform" id="changepwdform">
          <div class="span4 row">
            <label>Old Password:</label>
          </div>
          <div class="span4 row">
            <input type="password" name="oldpwd" id="oldpwd" value="">
          </div>

          <div class="span4 row">
            <label>New Password:</label>
          </div>
          <div class="span4 row">
            <input type="password" name="newpwd" id="newpwd" value="">
          </div>

          <div class="span4 row">
            <label>Confirm New Password:</label>
          </div>
          <div class="span4 row">
            <input type="password" name="cnewpwd" id="cnewpwd" value="">
          </div>

          <br><br><br>
          <div class="span8 row">
          <center>  
            <input type="submit" name="changepwdsubmit" id="changepwdsubmit" value="Submit" class="btn btn-large" style="height:42px;">
            <a href="#" id="back" class="btn btn-large" onClick="showPasswdform();" >Back</a>
          </center>  
          </div>

      </form>  
    </div>

    <script type="text/javascript">
     function showPasswdform()
    {
      document.getElementById('changepassword').style.display="none";
      document.getElementById('profile').style.display="block";
    }
    </script>

    <?php
    //echo "SELECT firstname,lastname,phwork,email,address,locality,district,state,zip FROM user WHERE id='".$_SESSION['id']."' AND status='activated'";
    $profile_fetch= mysql_query("SELECT * FROM user WHERE id='".$_SESSION['id']."' AND status='activated'");
    while($profile_query=mysql_fetch_array($profile_fetch))
    {
	?>
    <!-- About ADV -->
    <form method="POST" action="scripts/profile.php" name="profileform" id="profileform">  
    
    <div class="hero-unit text-center" style="min-height:520px;">
      <div class="span12" id="profile">
          <div class="span12 row" id="profile_err" style="font-size:12px; font-weight:bold; margin-left:-10px;color:red;" align="center"></div> 
            <div class="span4 row">
              <label>Firstname:</label>
            </div>
            <div class="span4 row">
              <input type="text" name="pfname" id="pfname" value="<?php if(isset($profile_query['firstname'])) { echo $profile_query['firstname'];}?>">
            </div>
            <div class="span4 row">
              <label>Lastname:</label>
            </div>
            <div class="span4 row">
              <input type="text" name="plname" id="plname" value="<?php if(isset($profile_query['lastname'])) { echo $profile_query['lastname'];}?>">
            </div>
            <div class="span4 row">
              <label>DOB:</label>
            </div>
            <div class="span4 row">
              <input type="text" id="birthdate" name="birthdate" data-format="dd/mm/yyyy" value="<?php if(isset($profile_query['dob'])) { echo $profile_query['dob'];}?>">
            </div>
            <div class="span4 row">
              <label>Username:</label>
            </div>
            <div class="span4 row">
              <input type="text" name="puname" id="puname" value="<?php if(isset($profile_query['username'])) { echo $profile_query['username'];}?>">
            </div>
            <div class="span4 row">
              <label>Email:</label>
            </div>
            <div class="span4 row">
              <input type="text" placeholder="" name="pemail" id="pemail" value="<?php if(isset($profile_query['email'])) { echo $profile_query['email'];}?>" readonly>
            </div>
            <div class="span4 row">
              <label>Phonework:</label>
            </div>
            <div class="span4 row">
              <input type="text"  name="phwork" id="phworkk" value="<?php if(isset($profile_query['phwork'])) { echo $profile_query['phwork'];}?>">
            </div>
            <div class="span4 row">
              <label>Cell No:</label>
            </div>
            <div class="span4 row">
              <input type="text" name="cellno" id="cellnno" value="<?php if(isset($profile_query['cell'])) { echo $profile_query['cell'];}?>">
            </div>

			<div class="span4 row">
              <label>Address:</label>
            </div>
            <div class="span4 row">
              <input type="text" name="physical_address" id="pro_physical_address" value="<?php if(isset($profile_query['physical_address'])) { echo $profile_query['physical_address'];}?>" />
            </div>
			<div class="span4 row">
			</div>
			<div class="span4 row" style="width:505px; margin-left:30px;">
				<table id="address">
					<tr>
						<td class="td_label">
							<div class="span5" style="width:62px; margin-left:5px;">
								<label>Address1: </label>
							</div>
						</td>
						<td class="td_field">
							<div class="span7" style="width:150px; margin-left:0px;">
								<input type="text" class="pull-left" name="physical_address1" id="pro_physical_address1" value="<?php if(isset($profile_query['physical_address1'])) { echo $profile_query['physical_address1'];}?>" style="width:160px; margin-bottom:2px;" />
							</div>
						</td>
						<td class="td_label">
							<div class="span5" style="width:62px; margin-left:5px;">
								<label>Address2: </label>
							</div>
						</td>
						<td class="td_field">
							<div class="span7" style="width:150px; margin-left:0px;">
								<input type="text" class="pull-left" name="physical_address2" id="pro_physical_address2" value="<?php if(isset($profile_query['physical_address2'])) { echo $profile_query['physical_address2'];}?>" style="width:160px; margin-bottom:2px;" />
							</div>
						</td>
					</tr>
					<tr>
						<td class="td_label">
							<div class="span5" style="width:62px; margin-left:5px;">
								<label>City:</label>
							</div>
						</td>
						<td class="td_field">
							<div class="span7" style="width:150px; margin-left:0px;">
								<input type="text" class="pull-left" name="physical_city" id="pro_physical_city" value="<?php if(isset($profile_query['physical_city'])) { echo $profile_query['physical_city'];}?>" style="width:160px; margin-bottom:2px;" />
							</div>
						</td>
						<td class="td_label">
							<div class="span5" style="width:62px; margin-left:5px;">
								<label>State:</label>
							</div>
						</td>
						<td class="td_field">
							<div class="span7" style="width:150px; margin-left:0px;">
								<input type="text" class="pull-left" name="physical_state" id="pro_physical_state" value="<?php if(isset($profile_query['physical_state'])) { echo $profile_query['physical_state'];}?>" style="width:160px; margin-bottom:2px;" />
							</div>
						</td>
					</tr>
					<tr>
						<td class="td_label">
							<div class="span5" style="width:62px; margin-left:5px;">
								<label>Zip code:</label>
							</div>
						</td>
						<td class="td_field">
							<div class="span7" style="width:150px; margin-left:0px;">
								<input type="text" class="pull-left" name="physical_zip" id="pro_physical_zip" value="<?php if(isset($profile_query['physical_zip'])) { echo $profile_query['physical_zip'];}?>" style="width:160px; margin-bottom:2px;" />
							</div>
						</td>
						<td class="td_label">
							<div class="span5" style="width:62px; margin-left:5px;">
								<label>Country:</label>
							</div>
						</td>
						<td class="td_field">
							<div class="span7" style="width:150px; margin-left:0px;">
								<input type="text" class="pull-left" name="physical_country" id="pro_physical_country" value="<?php if(isset($profile_query['physical_country'])) { echo $profile_query['physical_country'];}?>" style="width:160px; margin-bottom:2px;" />
							</div>
						</td>
					</tr>
				</table>
			</div>
			<div class="span4 row">
			</div>
			<div class="span4 row">
				<a href="#" id="changepwd" style="color:#fff;" onClick="showChange();">Change Password</a>
			</div>
            

            <div class="span8 row">
              <center>
              <input type="submit" name="profileform" id="profileform" class="btn btn-large" style="height:42px;" value="Submit">
              <a href="" class="btn btn-large" type="cancel" value="Cancel">Cancel</a>
            </center>
            </div>

            </div>
      	
           
    </div>
	<div style=" height:80px; background-color:#81B56B;">
			<div style="float:right;">
				<a href="http://www.msquaresystems.com/" target="_blank"><p style=" margin-right:20px; margin-top:5px; margin-bottom:0px;background-attachment: scroll;background-clip: border-box;background-color: rgba(0, 0, 0, 0); background-image: url('img/m2systems_logo.png'); background-origin: padding-box; background-repeat: no-repeat; background-size: 200px auto; height:48px; width:200px;"></p></a>
				<p style=" margin-right:20px;margin-bottom:0px; font-size:13px; color:#000;">powered by M-Square Systems Inc.</p>
			</div>
	</div>
    </form> 
    <?php }?>
  </div>
</div>
<!--end my profile-->

<!-- my reports-->
<div id="reports" class="section">
  <div class="section-title"><i class="icon-file"></i><strong>My Reports</strong>
  </div>
  <!-- About Content -->
  <div class="container">
  
    <div class="row"> 
    </div>
    
    <!-- About ADV -->
    <form method="POST" name="reportform" id="reportform">
    <div class="hero-unit text-center" style="height:auto; overflow:hidden; position:relative; display:block;">
      
      <div class="span12" style="margin-left:0px;">
            <div class="span12 row" id="report_err" style="font-size:12px; font-weight:bold; margin-left:-10px;color:red;" align="center"></div>
            
            <div class="span4 row">
              <label style="text-align:right;">Date Range:</label>
            </div>
            <div class="span4 row">
              <input type="text" name="ifromdate" id="ifromdate">
              <input type="text" name="itodate" id="itodate">
            </div>         

            <div class="span12 row"  style="margin-left:0px;">
              <center>
              <input type="submit" name="reportsubmit" id="reportsubmit" class="btn btn-large" style="height:42px;" value="Submit">
              <!--<a href="#" class="btn btn-large" type="cancel" value="Cancel">Cancel</a>-->
            </center>
            <br>
            <div id="reportsgeneration" class="span12 row" style="margin-left:6px;"></div>
            <br>
            </div>

		</div>
    </div>
    
	<div style=" height:80px; background-color:#8E9CA1;">
			<div style="float:right;">
				<a href="http://www.msquaresystems.com/" target="_blank"><p style=" margin-right:20px; margin-top:5px; margin-bottom:0px;background-attachment: scroll;background-clip: border-box;background-color: rgba(0, 0, 0, 0); background-image: url('img/m2systems_logo.png'); background-origin: padding-box; background-repeat: no-repeat; background-size: 200px auto; height:48px; width:200px;"></p></a>
				<p style=" margin-right:20px;margin-bottom:0px; font-size:13px; color:#000;">powered by M-Square Systems Inc.</p>
			</div>
	</div>
    </form> 
    
  </div>

</div>
<!-- end reports-->



<div id="logout" class="section">
  <div class="section-title"></strong>
      <h6>Welcome&nbsp;<span><?php if(isset($_SESSION['fname'])){echo $_SESSION['username'];}?></span>  
</h6> 
      <br><a href="scripts/logout.php" class="btn btn-large">Logout</a>
  </div>
</div>
  
   <!--  <div id="toPopup"> 

        <div class="close"></div>
        <span class="ecs_tooltip">close <span class="arrow"></span></span>

         <p style="font-size:14px;color:#000000;display:block;font-weight:bold;">Find it out client details.</p>
    <br>
   
       <?php //("SELECT intk.firstname,intk.address1,intk.homephone FROM intake as intk INNER JOIN userprojects as up ON intk.id=up.clientid WHERE up.uid='".$_SESSION['id']."'");

        /*$count_userproj=mysql_query("SELECT intk.firstname,intk.address1,intk.cellno FROM intake as intk INNER JOIN userprojects as up ON intk.id=up.clientid WHERE up.uid='".$_SESSION['id']."' AND up.status='open'");
        $numrows       = mysql_num_rows($count_userproj);
        while($userprojnotify=mysql_fetch_array($count_userproj))
        {
           $uprojtotal  = $numrows;
           $uprojcid    = $userprojnotify['firstname'];
           $address     = $userprojnotify['address1'];
           $phone       = $userprojnotify['cellno'];
        // print_r($userprojnotify);*/
        ?>
        <hr>
        <p style="display:block;color:#000000;font-size:12px;">Client Name : <?php //echo $uprojcid; ?></p>
        <br>
        <p style="display:block;color:#000000;font-size:12px;">Address : <?php //echo $address; ?></p>
        <br>
        <p style="display:block;color:#000000;font-size:12px;">Phone  :  <?php //echo $phone; ?></p>
        <hr>

        <?php //}?>
      <!--  <div id="popup_content"> 
                 <!--your content start-->
        
        <!--<p align="center"><a href="#" class="livebox">Click Here Trigger</a></p>
        </div> <!--your content end-->
    
   <!--  </div> --> <!--toPopup end-->
    
 


  <?php } ?>
  


<!-- Switch Section -->
<div class="switch-section"><i class="icon-reorder icon-label"></i>
  <p class="switch-section-cont"><a href="#" class="section-about"><i class="icon-home"></i></a> 
  <a href="#" class="section-services"><i class="icon-share"></i></a><a href="#" class="section-folio"><i class="icon-circle-arrow-down"></i></a> </p>
</div>
<style type="text/css">
  .modal.fade .modal-dialog {
    transform: translate(0px, -25%);
    transition: transform 0.3s ease-out 0s;
    }
    .modal.fade.in .modal-dialog {
        transform: translate(0px, 0px);
    }
  .flyover {
   left: 150%;
   overflow: hidden;
   position: fixed;
   width: 50%;
   opacity: 0.9;
   z-index: 1050;
   transition: left 0.6s ease-out 0s;
}
 
.flyover-centered {
   top: 50%;
   transform: translate(-50%, -50%);
}
</style>
<a href="#" class="section-close">×</a> 
<!-- Scripts --> 
<script type="text/javascript" src="js/jquery-1.10.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<!-- <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>  -->
<script type="text/javascript" src="js/jquery.animate-enhanced.min.js"></script> 
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script> 
<script type="text/javascript" src="js/jquery.superslides.min.js"></script> 
<script type="text/javascript" src="js/jquery.flex.slider-min.js"></script> 
<script type="text/javascript" src="js/jquery.masonry.min.js"></script> 
<script type="text/javascript" src="js/jquery.fancybox.min.js"></script> 
<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script> 
<!--<script src="http://maps.google.com/maps/api/js?sensor=false"></script>-->
<script type="text/javascript" src="js/functions.js"></script>
<script type="text/javascript" src="js/tabs-addon.js"></script>
<script type="text/javascript" src="js/validate.js"></script>
<!--<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>-->
<script type="text/javascript" src="js/jquery.ui.addresspicker.js"></script>
<script type="text/javascript" src="js/calendar.js"></script>
<script type="text/javascript" src="js/calendar-setup.js"></script>
<script type="text/javascript" src="js/calendar-en.js"></script>
<script type="text/javascript" src="js/utilities.js" ></script>
<script type="text/javascript" src="js/dom-min.js"></script>
<script type="text/javascript" src="js/bootstrap.timepicker.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/mask.js"></script>

<style type="text/css">
.ui-menu .ui-menu-item a,.ui-menu .ui-menu-item a.ui-state-hover, .ui-menu .ui-menu-item a.ui-state-active {
	font-weight: normal;
	margin: -1px;
	text-align:left;
	font-size:14px;
	}
.ui-autocomplete-loading { background: white url("img/loading.gif") right center no-repeat; }

.logo_back {
    background-attachment: scroll;
    background-clip: border-box;
    background-color: rgba(0, 0, 0, 0);
    background-image: url("img/LOGO-ENLARGED.gif");
    background-origin: padding-box;
    background-repeat: no-repeat;
    background-size: 550px auto;
    display: block;
    height: 112px;
    margin-left: -20px;
    margin-top: -35px;
    width: 600px;
}
</style>
<script>
$("#loginform").submit(function(e) {
	e.preventDefault();
	var lemail    	   = $("#lemail").val();
	var lpassword  	   = $("#lpassword").val();
	var l_emailRegex   = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	var validate_error = [];

    /*email*/
	if(lemail == '')
    {
      $("#l_spanemail").css('display','block');
      $("#l_spanemail").html("Enter the email");
      $("#l_email").val('');
      $("#l_email").focus();
	  validate_error[1] = 'no';
    }else if(!l_emailRegex.test(lemail)){
      $("#l_spanemail").css('display','block');
      $("#l_spanemail").html("Enter the valid email");
      $("#l_email").focus();
	  validate_error[1] = 'no';
	}else{
      $("#l_spanemail").css('display','none');
	  validate_error[1] = 'yes';
	}

    /*password*/
	if(lpassword == '')
    {
      $("#l_spanpassword").css('display','block');
      $("#l_spanpassword").html("Enter the password");
      $("#passwd").val('');
      $("#passwd").focus();
	  validate_error[2] = 'no';
    }else{
      $("#l_spanpassword").css('display','none');
	  validate_error[2] = 'yes';
	}

	
	if($.inArray("no", validate_error)!==-1){
		/* for (var i = 0; i < validate_error.length; i++) {
		alert(i+'===='+validate_error[i]);
		} */ 
		return false;
	}else{
	    $('#spinner').show();
		$.ajax({
			url: "scripts/login.php?submit=yes",
			type: "post",
			data: $(this).serialize(),
			success: function(getdata) {
				if(getdata == 1){    
					 $('#spinner').hide();
				    window.location.href='index.php';   
				}else if(getdata == 2){    
					 $('#spinner').hide();
					$( "#forgotpasswd" ).trigger( "click" );
				}else{
					 $('#spinner').hide();
					alert('Your account has not been Activated/Terminated.');
					return false;
				}
			}
		});
	}
});



$("#registerform").submit(function(e) {
	e.preventDefault();
	var reg_firstname  		   = $("#fname").val();
	var reg_lastname      	   = $("#lname").val();
	var reg_username   		   = $("#uname").val();
	var reg_emailid    		   = $("#reg_email").val();
	var reg_password   		   = $("#passwd").val();
	var reg_reppass            = $("#reppasswd").val();
	var reg_work       		   = $("#work").val();
	var reg_cell       		   = $("#cell").val();
	var reg_dob        		   = $("#birthdate").val();
	var reg_physical_address   = $("#reg_physical_address").val();
	var reg_physical_address1  = $("#reg_physical_address1").val();
	var reg_physical_city	   = $("#reg_physical_city").val();
	var reg_physical_state	   = $("#reg_physical_state").val();
	var reg_physical_zip	   = $("#reg_physical_zip").val();
	//var reg_emailRegex 	   = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    var reg_emailRegex         = /^[a-z][\w.+-]+@nywcc\.org|.+@msquaresystems\.com$/
	var reg_intRegex   		   = /[0-9 -()+]+$/;
	var reg_charregx   		   = /^[A-Za-z]+$/;
	var reg_alphanum   		   =  /^[a-zA-Z0-9]+$/;
	
	var validate_error = [];

	/*First Name*/
	if(reg_firstname == '')
    {
      $("#reg_spanfirstname").css('display','block');
      $("#reg_spanfirstname").html("Enter the first name");
      $("#fname").val('');
      $("#fname").focus();
	  validate_error[0] = 'no';
    }else{
      $("#reg_spanfirstname").css('display','none');
	  validate_error[0] = 'yes';
	}

	/*Last Name*/
	if(reg_lastname == '')
    {
      $("#reg_spanlastname").css('display','block');
      $("#reg_spanlastname").html("Enter the last name");
      $("#lname").val('');
      $("#lname").focus();
	  validate_error[1] = 'no';
    }else{
      $("#reg_spanlastname").css('display','none');
	  validate_error[1] = 'yes';
	}

	
	/*User Name*/
	if(reg_username == '')
    {
      $("#reg_spanusername").css('display','block');
      $("#reg_spanusername").html("Enter the user name");
      $("#uname").val('');
      $("#uname").focus();
	  validate_error[2] = 'no';
    }else{
      $("#reg_spanusername").css('display','none');
	  validate_error[2] = 'yes';
	}
	
    /*email*/
	if(reg_emailid == '')
    {
      $("#reg_spanemail").css('display','block');
      $("#reg_spanemail").html("Enter the email");
      $("#reg_email").val('');
      $("#reg_email").focus();
	  validate_error[3] = 'no';
    }else if(!reg_emailRegex.test(reg_emailid)){
      $("#reg_spanemail").css('display','block');
      $("#reg_spanemail").html("Enter the valid email");
      $("#reg_email").focus();
	  validate_error[3] = 'no';
	}else{
      $("#reg_spanemail").css('display','none');
	  validate_error[3] = 'yes';
	}
	
    /*password*/
	if(reg_password == '')
    {
      $("#reg_spanpassword").css('display','block');
      $("#reg_spanpassword").html("Enter the password");
      $("#passwd").val('');
      $("#passwd").focus();
	  validate_error[4] = 'no';
    }else{
      $("#reg_spanpassword").css('display','none');
	  validate_error[4] = 'yes';
	}

    /*Repeat password*/
	if(reg_reppass == '')
    {
      $("#reg_spanr_password").css('display','block');
      $("#reg_spanr_password").html("Enter the repeat password");
      $("#reppasswd").val('');
      $("#reppasswd").focus();
	  validate_error[5] = 'no';
    }else if(reg_reppass != reg_password){
      $("#reg_spanr_password").css('display','block');
      $("#reg_spanr_password").html("password match is wrong");
      $("#reppasswd").focus();
	  validate_error[5] = 'no';
    }else{
      $("#reg_spanr_password").css('display','none');
	  validate_error[5] = 'yes';
	}
	
	/*work phone*/
	if(reg_work == '' || reg_work == '(___) ___-____')
    {
      $("#reg_spanphone").css('display','block');
      $("#reg_spanphone").html("Enter the phone number");
      $("#work").val('');
      $("#work").focus();
	  validate_error[6] = 'no';
    }else{ 
      $("#reg_spanphone").css('display','none');
	  validate_error[6] = 'yes';
	}

	/*cell phone*/
	if(reg_work == '' || reg_work == '(___) ___-____')
    {
      $("#reg_spancell").css('display','block');
      $("#reg_spancell").html("Enter the cell number");
      $("#cell").val('');
      $("#cell").focus();
	  validate_error[7] = 'no';
    }else{ 
      $("#reg_spancell").css('display','none');
	  validate_error[7] = 'yes';
	}

	/*date of birth*/
	/* if(reg_dob == '')
    {
      $("#reg_spandob").css('display','block');
      $("#reg_spandob").html("Enter the date of birth");
      $("#birthdate").val('');
      $("#birthdate").focus();
	  validate_error[8] = 'no';
    }else{ 
      $("#reg_spandob").css('display','none');
	  validate_error[8] = 'yes';
	} */

	/*address */
	if(reg_physical_address == '')
    {
		$("#reg_spanaddress").css('display','block');
		$("#reg_spanaddress").html("Enter the address");
		$("#reg_physical_address").val('');
		$("#reg_physical_address").focus();
		validate_error[13] = 'no';
    }else if(reg_physical_address1 == ''){
		$("#reg_spanaddress").css('display','block');
		$("#reg_spanaddress").html("Enter the valid address");
		$("#reg_physical_address1").val('');
		$("#reg_physical_address1").focus();
		validate_error[13] = 'no';
    }else if(reg_physical_city == ''){
		/*physical city*/
		$("#reg_spanaddress").css('display','block');
		$("#reg_spanaddress").html("Enter the city");
		$("#reg_physical_city").val('');
		$("#reg_physical_city").focus();
		validate_error[13] = 'no';
	}else if(reg_physical_state == ''){
		/*physical state*/
		$("#reg_spanaddress").css('display','block');
		$("#reg_spanaddress").html("Enter the state");
		$("#reg_physical_state").val('');
		$("#reg_physical_state").focus();
		validate_error[13] = 'no';
	}else if(reg_physical_zip == ''){
		/*physical zip*/
		$("#reg_spanaddress").css('display','block');
		$("#reg_spanaddress").html("Enter the zip");
		$("#reg_physical_zip").val('');
		$("#reg_physical_zip").focus();
		validate_error[13] = 'no';
	}else{
		$("#reg_spanaddress").css('display','none');
		validate_error[13] = 'yes';
	}

	
	if($.inArray("no", validate_error)!==-1){
		/* for (var i = 0; i < validate_error.length; i++) {
		alert(i+'===='+validate_error[i]);
		} */ 
		return false;
	}else{
	    $('#spinner').show();
		$.ajax({
			url: "scripts/signup.php?submit=yes",
			type: "post",
			data: $(this).serialize(),
			success: function(getdata) {
				if(getdata == 3){
					 $('#spinner').hide();
					alert('You are already registered');
				    window.location.href='index.php';   
				}else if(getdata == 1){
					 $('#spinner').hide();
					alert('Successfully registered');
				    window.location.href='index.php';   
				}else{
				    $('#spinner').hide();
					alert('Not Registered');
					return false;
				}
			}
		});
	}
});
</script>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
<script>
	// This example displays an address form, using the autocomplete feature
	// of the Google Places API to help users fill in the information.
	var placeSearch, physical_autocomplete, business_autocomplete ,mem_physical_autocomplete, mem_business_autocomplete, pro_physical_autocomplete;
	var componentForm = {
		street_number: 'short_name',
		route: 'long_name',
		locality: 'long_name',
		administrative_area_level_1: 'short_name',
		country: 'long_name',
		postal_code: 'short_name'
	};

	/*Intake Form*/
	function initialize() {
	   // Create the autocomplete object, restricting the search
	   // to geographical location types.
		physical_autocomplete = new google.maps.places.Autocomplete(
			/** @type {HTMLInputElement} */(document.getElementById('physical_address')),
			{ types: ['geocode'] }
		);

		business_autocomplete = new google.maps.places.Autocomplete(
			/** @type {HTMLInputElement} */(document.getElementById('business_address')),
			{ types: ['geocode'] }
		);
		// When the user selects an address from the dropdown,
		// populate the address fields in the form.
		google.maps.event.addListener(physical_autocomplete, 'place_changed', function() {
			physical_fillInAddress();
		});
	   
		google.maps.event.addListener(business_autocomplete, 'place_changed', function() {
			business_fillInAddress();
		});

	}

	// [START region_fillform]
	function physical_fillInAddress() {
		// Get the place details from the autocomplete object.
		var physical_place = physical_autocomplete.getPlace();

		// Get each component of the address from the place details
		// and fill the corresponding field on the form.
		for (var i = 0; i < physical_place.address_components.length; i++) {
			var physical_addressType = physical_place.address_components[i].types[0];
			if (componentForm[physical_addressType]) {
				var physical_val = physical_place.address_components[i][componentForm[physical_addressType]];
				if(physical_addressType == 'street_number'){
					document.getElementById('physical_address1').value = physical_val;
				}else if(physical_addressType == 'route'){
					document.getElementById('physical_address2').value = physical_val;
				}else if(physical_addressType == 'locality'){
					document.getElementById('physical_city').value = physical_val;
				}else if(physical_addressType == 'administrative_area_level_1'){
					document.getElementById('physical_state').value = physical_val;
				}else if(physical_addressType == 'country'){
					document.getElementById('physical_country').value = physical_val;
				}else if(physical_addressType == 'postal_code'){
					document.getElementById('physical_zip').value = physical_val;
				}
			}
		}
	}

	// [START region_fillform]
	function business_fillInAddress() {
		// Get the place details from the autocomplete object.
		var business_place = business_autocomplete.getPlace();
	  
		for (var business_component in componentForm) {
			document.getElementById(business_component).value = '';
			document.getElementById(business_component).disabled = false;
		}

		// Get each component of the address from the place details
		// and fill the corresponding field on the form.
		for (var j = 0; j < business_place.address_components.length; j++) {
			var business_addressType = business_place.address_components[j].types[0];
			if (componentForm[business_addressType]) {
				var val = business_place.address_components[j][componentForm[business_addressType]];
				if(business_addressType == 'street_number'){
					document.getElementById('business_address1').value = val;
				}else if(business_addressType == 'route'){
					document.getElementById('business_address2').value = val;
				}else if(business_addressType == 'locality'){
					document.getElementById('business_city').value = val;
				}else if(business_addressType == 'administrative_area_level_1'){
					document.getElementById('business_state').value = val;
				}else if(business_addressType == 'country'){
					document.getElementById('business_country').value = val;
				}else if(business_addressType == 'postal_code'){
					document.getElementById('business_zip').value = val;
				}
			}
		}
	}
	
	
	/*Membership Form*/
	var mem_componentForm = {
		street_number: 'short_name',
		route: 'long_name',
		locality: 'long_name',
		administrative_area_level_1: 'short_name',
		country: 'long_name',
		postal_code: 'short_name'
	};
	function mem_initialize() {
	   // Create the autocomplete object, restricting the search
	   // to geographical location types.
		mem_physical_autocomplete = new google.maps.places.Autocomplete(
			/** @type {HTMLInputElement} */(document.getElementById('mem_physical_address')),
			{ types: ['geocode'] }
		);

		mem_business_autocomplete = new google.maps.places.Autocomplete(
			/** @type {HTMLInputElement} */(document.getElementById('mem_business_address')),
			{ types: ['geocode'] }
		);
		// When the user selects an address from the dropdown,
		// populate the address fields in the form.
		google.maps.event.addListener(mem_physical_autocomplete, 'place_changed', function() {
			mem_physical_fillInAddress();
		});
	   
		google.maps.event.addListener(mem_business_autocomplete, 'place_changed', function() {
			mem_business_fillInAddress();
		});

	}

	// [START region_fillform]
	function mem_physical_fillInAddress() {
		// Get the place details from the autocomplete object.
		var physical_place = mem_physical_autocomplete.getPlace();
		
		// Get each component of the address from the place details
		// and fill the corresponding field on the form.
		for (var i = 0; i < physical_place.address_components.length; i++) {
			var physical_addressType = physical_place.address_components[i].types[0];
			if (mem_componentForm[physical_addressType]) {
				var physical_val = physical_place.address_components[i][mem_componentForm[physical_addressType]];
				if(physical_addressType == 'street_number'){
					document.getElementById('mem_physical_address1').value = physical_val;
				}else if(physical_addressType == 'route'){
					document.getElementById('mem_physical_address2').value = physical_val;
				}else if(physical_addressType == 'locality'){
					document.getElementById('mem_physical_city').value = physical_val;
				}else if(physical_addressType == 'administrative_area_level_1'){
					document.getElementById('mem_physical_state').value = physical_val;
				}else if(physical_addressType == 'country'){
					document.getElementById('mem_physical_country').value = physical_val;
				}else if(physical_addressType == 'postal_code'){
					document.getElementById('mem_physical_zip').value = physical_val;
				}
			}
		}
	}

	// [START region_fillform]
	function mem_business_fillInAddress() {
		// Get the place details from the autocomplete object.
		var business_place = mem_business_autocomplete.getPlace();
	  
		for (var business_component in mem_componentForm) {
			document.getElementById(business_component).value = '';
			document.getElementById(business_component).disabled = false;
		}

		// Get each component of the address from the place details
		// and fill the corresponding field on the form.
		for (var j = 0; j < business_place.address_components.length; j++) {
			var business_addressType = business_place.address_components[j].types[0];
			if (mem_componentForm[business_addressType]) {
				var val = business_place.address_components[j][mem_componentForm[business_addressType]];
				if(business_addressType == 'street_number'){
					document.getElementById('mem_business_address1').value = val;
				}else if(business_addressType == 'route'){
					document.getElementById('mem_business_address2').value = val;
				}else if(business_addressType == 'locality'){
					document.getElementById('mem_business_city').value = val;
				}else if(business_addressType == 'administrative_area_level_1'){
					document.getElementById('mem_business_state').value = val;
				}else if(business_addressType == 'country'){
					document.getElementById('mem_business_country').value = val;
				}else if(business_addressType == 'postal_code'){
					document.getElementById('mem_business_zip').value = val;
				}
			}
		}
	}
	


	/*User Registration Form*/
	var reg_componentForm = {
		street_number: 'short_name',
		route: 'long_name',
		locality: 'long_name',
		administrative_area_level_1: 'short_name',
		country: 'long_name',
		postal_code: 'short_name'
	};

	function reg_initialize() {
	   // Create the autocomplete object, restricting the search
	   // to geographical location types.
		reg_physical_autocomplete = new google.maps.places.Autocomplete(
			/** @type {HTMLInputElement} */(document.getElementById('reg_physical_address')),
			{ types: ['geocode'] }
		);

		// populate the address fields in the form.
		google.maps.event.addListener(reg_physical_autocomplete, 'place_changed', function() {
			reg_physical_fillInAddress();
		});

	}

	// [START region_fillform]
	function reg_physical_fillInAddress() {
		// Get the place details from the autocomplete object.
		var physical_place = reg_physical_autocomplete.getPlace();
		
		// Get each component of the address from the place details
		// and fill the corresponding field on the form.
		for (var i = 0; i < physical_place.address_components.length; i++) {
			var physical_addressType = physical_place.address_components[i].types[0];
			if (reg_componentForm[physical_addressType]) {
				var physical_val = physical_place.address_components[i][reg_componentForm[physical_addressType]];
				if(physical_addressType == 'street_number'){
					document.getElementById('reg_physical_address1').value = physical_val;
				}else if(physical_addressType == 'route'){
					document.getElementById('reg_physical_address2').value = physical_val;
				}else if(physical_addressType == 'locality'){
					document.getElementById('reg_physical_city').value = physical_val;
				}else if(physical_addressType == 'administrative_area_level_1'){
					document.getElementById('reg_physical_state').value = physical_val;
				}else if(physical_addressType == 'country'){
					document.getElementById('reg_physical_country').value = physical_val;
				}else if(physical_addressType == 'postal_code'){
					document.getElementById('reg_physical_zip').value = physical_val;
				}
			}
		}
	}


	/*Profile Update Form*/
	var pro_componentForm = {
		street_number: 'short_name',
		route: 'long_name',
		locality: 'long_name',
		administrative_area_level_1: 'short_name',
		country: 'long_name',
		postal_code: 'short_name'
	};

	function pro_initialize() {
	   // Create the autocomplete object, restricting the search
	   // to geographical location types.
		pro_physical_autocomplete = new google.maps.places.Autocomplete(
			/** @type {HTMLInputElement} */(document.getElementById('pro_physical_address')),
			{ types: ['geocode'] }
		);

		// populate the address fields in the form.
		google.maps.event.addListener(pro_physical_autocomplete, 'place_changed', function() {
			pro_physical_fillInAddress();
		});

	}

	// [START region_fillform]
	function pro_physical_fillInAddress() {
		// Get the place details from the autocomplete object.
		var physical_place = pro_physical_autocomplete.getPlace();
		
		// Get each component of the address from the place details
		// and fill the corresponding field on the form.
		for (var i = 0; i < physical_place.address_components.length; i++) {
			var physical_addressType = physical_place.address_components[i].types[0];
			if (pro_componentForm[physical_addressType]) {
				var physical_val = physical_place.address_components[i][pro_componentForm[physical_addressType]];
				if(physical_addressType == 'street_number'){
					document.getElementById('pro_physical_address1').value = physical_val;
				}else if(physical_addressType == 'route'){
					document.getElementById('pro_physical_address2').value = physical_val;
				}else if(physical_addressType == 'locality'){
					document.getElementById('pro_physical_city').value = physical_val;
				}else if(physical_addressType == 'administrative_area_level_1'){
					document.getElementById('pro_physical_state').value = physical_val;
				}else if(physical_addressType == 'country'){
					document.getElementById('pro_physical_country').value = physical_val;
				}else if(physical_addressType == 'postal_code'){
					document.getElementById('pro_physical_zip').value = physical_val;
				}
			}
		}
	}


</script>

<script type="text/javascript">
$(document).ready(function() {

/*Address auto fill*/
	window.onload=function(){ initialize(); reg_initialize(); mem_initialize(); pro_initialize(); }

/*Registration Form*/
	/*Work*/
	$("#work").mask("(999) 999-9999");

	/*Cell*/
	$("#cell").mask("(999) 999-9999");
	
/*Follow Up FORM*/
	/*Telephone*/
	$("#clienttelephone").mask("(999) 999-9999");

/* Intake validate*/
    intake_jscript();
});	
/*INTAKE FORM*/
function add_html_business_other_div( new_item_id, html_insert ){
	//$("fieldset#"+new_item_id).find(new_item_id).append(html_insert);
	$("#percentage_business_div").find(new_item_id).html(html_insert);
}

function add_append_business_other_div( new_item_id, html_insert ){
	$("#percentage_business_div").find(new_item_id).append(html_insert);
}

function mem_add_html_business_other_div( new_item_id, html_insert ){
	//$("fieldset#"+new_item_id).find(new_item_id).append(html_insert);
	$("#mem_percentage_business_div").find(new_item_id).html(html_insert);
}

function mem_add_append_business_other_div( new_item_id, html_insert ){
	$("#mem_percentage_business_div").find(new_item_id).append(html_insert);
}


var total_per			 		= 0;
var index_count     			= 0; 
var html_business_other_div 	= '';
var total_percentage     		= 100;
var remaining_percentage 		= '';	
var sub_per_total 				= 0;
var mem_total_per 				= 0;
var mem_index_count     		= 0; 
var mem_html_business_other_div = '';
var mem_total_percentage     	= 100;
var mem_remaining_percentage 	= '';	
var mem_sub_per_total 			= 0;

function intake_jscript(get_index){

	/*Email checkavailable*/	
	$("#email").keyup(function() {
		var email_check = $(this).val();
		$(".email_loading").css('display','block');
		$.ajax({
			url :'scripts/already_insert_check.php?email='+email_check, 
			type: "POST",
			success: function(data){
				if(data == 1){
					$("#email").val('');
					$(".email_loading").css('display','none');
					alert("membership is already saved and duplicate is not allowed based on the email");
				}else{
					$(".email_loading").css('display','none');
				}
			}	
		});	
	});
	
	/*Phone checkavailable*/	
	$("#telephone").keyup(function() {
		var telephone_check = $(this).val();
		$(".telephone_loading").css('display','block');
		$.ajax({
			url :'scripts/already_insert_check.php?telephone='+telephone_check, 
			type: "POST",
			success: function(data){
				if(data == 1){
					$("#telephone").val('');
					$(".telephone_loading").css('display','none');
					alert("membership is already saved and duplicate is not allowed based on the phone number");
				}else{
					$(".telephone_loading").css('display','none');
				}
			}	
		});	
	});

	/*address_business_same*/
	 $('#address_business_same').click(function () {
        if ($(this).is(':checked')) {
            $('#business_address').val($('#physical_address').val());
            $('#business_address1').val($('#physical_address1').val());
			$('#business_address2').val($('#physical_address2').val());
            $('#business_city').val($('#physical_city').val());
			$('#business_state').val($('#physical_state').val());
            $('#business_zip').val($('#physical_zip').val());
			$('#business_country').val($('#physical_country').val());
        }
    });

	/*Telephone*/
	$("#telephone").mask("(999) 999-9999");
	
	/*Percentage of business*/
	$("#percentageofbusiness").keypress(function (e){
	  var charCode = (e.which) ? e.which : e.keyCode;
	  if (charCode > 31 && (charCode < 48 || charCode > 57)) {
		return false;
	  }
	});

    $("#percentageofbusiness").keyup(function() {
		var percentage_business_other_div = $('#percentage_business_other_div');
		if($(this).val() != ''){
			if($(this).val() == 100){
				percentage_business_other_div.slideUp("slow");
			}else if($(this).val() < total_percentage){ 
				total_per     += parseInt($(this).val());
				remaining_percentage = total_percentage - $(this).val() ; 
				html_business_other_div = '<table id="address_per"><tr><td class="td_label"><div class="span5" style="width:62px; margin-left:5px;"><label>First Name:</label></div></td><td class="td_field"><div class="span7" style="width:150px; margin-left:0px;"><input type="text" class="pull-left" name="per_first_name[]" id="per_first_name" value="" style="width:160px; margin-bottom:2px;" /></div></td><td class="td_label"><div class="span5" style="width:62px; margin-left:5px;"><label>Last Name:</label></div></td><td class="td_field"><div class="span7" style="width:150px; margin-left:0px;"><input type="text" class="pull-left" name="per_last_name[]" id="per_last_name" value="" style="width:160px; margin-bottom:2px;" /></div></td></tr><tr><td class="td_label"><div class="span5" style="width:62px; margin-left:5px;"><label>Email:</label></div></td><td class="td_field"><div class="span7" style="width:150px; margin-left:0px;"><input type="text" class="pull-left" name="per_email[]" id="per_email" value="" style="width:160px; margin-bottom:2px;" /></div></td><td class="td_label"><div class="span5" style="width:62px; margin-left:5px;"><label>Phone Number:</label></div></td><td class="td_field"><div class="span7" style="width:150px; margin-left:0px;"><input type="text" class="pull-left" name="per_phone_num[]" id="per_phone_num" value="" style="width:160px; margin-bottom:2px;" /></div></td></tr><tr><td class="td_label"><div class="span5" style="width:62px; margin-left:5px;"><label>Percentage:</label></div></td><td class="td_field"><div class="span7" style="width:150px; margin-left:0px;"><input type="text" class="pull-left" name="child_percentageofbusiness[]" id="child_percentageofbusiness" value="'+remaining_percentage+'" style="width:160px; margin-bottom:2px;" /></div></td><td colspan="2" id="add_plus"></td></tr></table>';
				add_html_business_other_div('#percentage_business_other_div',html_business_other_div);
				percentage_business_other_div.slideDown("slow");
			}else if($(this).val() > total_percentage){
				$(this).val('');
				alert('Upto 100% only allowed');
			}
		}else{
			percentage_business_other_div.slideUp("slow");
			total_per = 0;
		} 
		index_count = 0;
		sub_per_each_func();
    });
    
	/*Services Needed*/
    var services_need_other_in =  $('#services_need_other_in'), services_need_other_div = $('#services_need_other_div');
    $('#services_need_other_check').change(function() {
        services_need_other_in.val('');
        if ($(this).is(':checked')) {
            services_need_other_div.slideDown("slow");
        } else {
            services_need_other_div.slideUp("slow");
        }
    });
	
	/*Typeofindustry*/
    var typeofindustry_other_in =  $('#typeofindustry_other_in'), typeofindustry_other_div = $('#typeofindustry_other_div');
    $('#typeofindustry_other_check').change(function() {
        typeofindustry_other_in.val('');
        if ($(this).is(':checked')) {
            typeofindustry_other_div.slideDown("slow");
        } else {
            typeofindustry_other_div.slideUp("slow");
        }
    });
	
	/*Typeofmwbe*/
    var typeofmwbe_other_in =  $('#typeofmwbe_other_in'), typeofmwbe_other_div = $('#typeofmwbe_other_div');
    $('#typeofmwbe_other_check').change(function() {
        typeofmwbe_other_in.val('');
        if ($(this).is(':checked')) {
            typeofmwbe_other_div.slideDown("slow");
        } else {
            typeofmwbe_other_div.slideUp("slow");
        }
    });
	
	
	/*Typeofbusiness*/
    var typeofbusiness_other_in =  $('#typeofbusiness_other_in'), typeofbusiness_other_div = $('#typeofbusiness_other_div');
    $('#typeofbusiness_other_check').change(function() {
        typeofbusiness_other_in.val('');
        if ($(this).is(':checked')) {
            typeofbusiness_other_div.slideDown("slow");
        } else {
            typeofbusiness_other_div.slideUp("slow");
        }
    });
	
	/*Typeofbusiness*/
    var typeofbusiness_other_in =  $('#typeofbusiness_other_in'), typeofbusiness_other_div = $('#typeofbusiness_other_div');
    $('#typeofbusiness_other_check').change(function() {
        typeofbusiness_other_in.val('');
        if ($(this).is(':checked')) {
            typeofbusiness_other_div.slideDown("slow");
        } else {
            typeofbusiness_other_div.slideUp("slow");
        }
    });
	
	/*race_ethnicity*/
    var race_ethnicity_other_in =  $('#race_ethnicity_other_in'), race_ethnicity_other_div = $('#race_ethnicity_other_div');
    $('#race_ethnicity').change(function() {
        race_ethnicity_other_in.val('');
        if ($(this).val() == 'Other') {
            race_ethnicity_other_div.slideDown("slow");
        } else {
            race_ethnicity_other_div.slideUp("slow");
        }
    });
	
	/*services_provided*/
    var services_provided_other_in =  $('#services_provided_other_in'), services_provided_other_div = $('#services_provided_other_div');
    $('#services_provided').change(function() {
        services_provided_other_in.val('');
        if ($(this).val() == 'Other') {
            services_provided_other_div.slideDown("slow");
        } else {
            services_provided_other_div.slideUp("slow");
        }
    });
	
	/*certified_woman_minor*/
    var certified_woman_minor_other_in =  $('#certified_woman_minor_other_in'), certified_woman_minor_other_div = $('#certified_woman_minor_other_div');
    $('#certified_woman_minor1, #certified_woman_minor2').click(function() {
        certified_woman_minor_other_in.val('');
        if ($(this).val() == 'yes') {
            certified_woman_minor_other_div.slideDown("slow");
        } else {
            certified_woman_minor_other_div.slideUp("slow");
        }
    });
	
	/*primary_language*/
    var primary_language_other_in =  $('#primary_language_other_in'), primary_language_other_div = $('#primary_language_other_div');
    $('#primary_language1, #primary_language2').click(function() {
        primary_language_other_in.val('');
        if ($(this).val() == 'no') {
            primary_language_other_div.slideDown("slow");
        } else {
            primary_language_other_div.slideUp("slow");
        }
    });

}

function percentage_add_plus(this_index){
    index_count = 0;
	sub_per_each_func();
	total_per			+= parseInt(sub_per_total);
	remaining_percentage = total_percentage - total_per; 
	html_business_other_div = '<table id="address_per"><tr><td class="td_label"><div class="span5" style="width:62px; margin-left:5px;"><label>First Name:</label></div></td><td class="td_field"><div class="span7" style="width:150px; margin-left:0px;"><input type="text" class="pull-left" name="per_first_name[]" id="per_first_name" value="" style="width:160px; margin-bottom:2px;" /></div></td><td class="td_label"><div class="span5" style="width:62px; margin-left:5px;"><label>Last Name:</label></div></td><td class="td_field"><div class="span7" style="width:150px; margin-left:0px;"><input type="text" class="pull-left" name="per_last_name[]" id="per_last_name" value="" style="width:160px; margin-bottom:2px;" /></div></td></tr><tr><td class="td_label"><div class="span5" style="width:62px; margin-left:5px;"><label>Email:</label></div></td><td class="td_field"><div class="span7" style="width:150px; margin-left:0px;"><input type="text" class="pull-left" name="per_email[]" id="per_email" value="" style="width:160px; margin-bottom:2px;" /></div></td><td class="td_label"><div class="span5" style="width:62px; margin-left:5px;"><label>Phone Number:</label></div></td><td class="td_field"><div class="span7" style="width:150px; margin-left:0px;"><input type="text" class="pull-left" name="per_phone_num[]" id="per_phone_num" value="" style="width:160px; margin-bottom:2px;" /></div></td></tr><tr><td class="td_label"><div class="span5" style="width:62px; margin-left:5px;"><label>Percentage:</label></div></td><td class="td_field"><div class="span7" style="width:150px; margin-left:0px;"><input type="text" class="pull-left" name="child_percentageofbusiness[]" id="child_percentageofbusiness" value="'+remaining_percentage+'" style="width:160px; margin-bottom:2px;" /></div></td><td colspan="2" id="percentage_close"><img style="float:right;cursor: pointer;" src="img/closebox.png" onClick="sub_per_each_func('+index_count+')" /></td></tr></table>';
	add_append_business_other_div('#percentage_business_other_div',html_business_other_div);
	$(this_index).remove();
	index_count = 0;
	sub_per_each_func();
}
 
function sub_per_each_func(get_index){
		
	$("#percentage_business_other_div #address_per").each(function(index){
		index_count = index;
		html_close_icon = '<img style="float:right;cursor: pointer;" src="img/closebox.png" onClick="sub_per_each_func('+index_count+')" />';
		$(this).find("[id=percentage_close]").html(html_close_icon);

		if($("#percentageofbusiness").val()==''){
			total_per      = 0;
			sub_per_total  = 0;
			$(this).find("[id=child_percentageofbusiness][type=text]").val('0');
		}
		
		$(this).find("[id=child_percentageofbusiness][type=text]").keypress(function (e){
			  var charCode = (e.which) ? e.which : e.keyCode;
			  if (charCode > 31 && (charCode < 48 || charCode > 57)) {
				return false;
			  }
		});
		
		/*Percentage Telephone*/
		$(this).find("[id=per_phone_num]").mask("(999) 999-9999");

		if(index > 0){
			sub_per_total += parseInt($(this).find("[id=child_percentageofbusiness][type=text]").val());
		}else{
			total_per      = 0;
			sub_per_total  = 0;
			total_per	  += parseInt($("#percentageofbusiness").val());
			sub_per_total += parseInt($(this).find("[id=child_percentageofbusiness][type=text]").val());
			sub_per_keyup_func();
			
		}
		
		if(get_index != null){
			if (index === get_index) {
				$(this).remove();
				index_count = 0;
				sub_per_each_func();
				if(total_per < total_percentage){ 
					html_add_plus_other = '<img style="float:right;cursor: pointer;" width="30" height="30" src="img/plus.png" onClick="percentage_add_plus(this)" />';
					$("#add_plus").html(html_add_plus_other);
				}
			}
		}	
    });                  
 	
}

function sub_per_keyup_func(){
	$("#percentage_business_other_div #address_per").find("[id=child_percentageofbusiness][type=text]").bind('keyup', function(){
		if($(this).val()!=''){
			index_count = 0;
			sub_per_each_func();
			if(total_per < total_percentage){ 
				total_per			+= parseInt(sub_per_total);
				remaining_percentage = total_percentage - total_per; 
				html_add_plus_other = '<img style="float:right;cursor: pointer;" width="30" height="30" src="img/plus.png" onClick="percentage_add_plus(this)" />';
				$("#add_plus").html(html_add_plus_other);
			}
			if(total_per > total_percentage){ 
				$(this).val('');
				$("#add_plus").html('');
				alert("Upto 100% only allowed");
			}
			if(total_per ==100){ 
				$("#add_plus").html('');
			}			
		}else{
			index_count = 0;
			$("#add_plus").html('');
			sub_per_each_func();
		}
	});
}


/*Membership Form*/
function membership_jscript(){
	//$(document).ready(function() {
	/*Telephone*/
	$("#mem_telephone").mask("(999) 999-9999");

	/*address_business_same*/
	 $('#mem_address_business_same').click(function () {
        if ($(this).is(':checked')) {
            $('#mem_business_address').val($('#mem_physical_address').val());
            $('#mem_business_address1').val($('#mem_physical_address1').val());
			$('#mem_business_address2').val($('#mem_physical_address2').val());
            $('#mem_business_city').val($('#mem_physical_city').val());
			$('#mem_business_state').val($('#mem_physical_state').val());
            $('#mem_business_zip').val($('#mem_physical_zip').val());
			$('#mem_business_country').val($('#mem_physical_country').val());
        }
    });
	
	
	/*Percentage of business*/
    $("#mem_percentageofbusiness").keyup(function() {
		var mem_value = $(this).val();
		var mem_percentage_business_other_div = $('#mem_percentage_business_other_div');
		//mem_value = mem_value.replace('%', '');
		/*Percentage of business other info*/
		if(mem_value < 100){ 
			mem_percentage_business_other_div.slideDown("slow");
		}else{
			mem_percentage_business_other_div.slideUp("slow");
		}
		if(mem_value == ''){
			mem_percentage_business_other_div.slideUp("slow");
		} 
		if(mem_value<101){
			if(mem_value!=''){
				//$(this).val( mem_value+"%" );
			}
		}else{
			$(this).val('');
			alert('Upto 100% only allowed');
		}
    });
	$("#mem_percentageofbusiness").keypress(function (e){
	  var charCode = (e.which) ? e.which : e.keyCode;
	  if (charCode > 31 && (charCode < 48 || charCode > 57)) {
		return false;
	  }
	});

    $("#mem_percentageofbusiness").keyup(function() {
		var mem_percentage_business_other_div = $('#mem_percentage_business_other_div');
		if($(this).val() != ''){
		    
			if($(this).val() == 100){
				mem_percentage_business_other_div.slideUp("slow");
			}else if($(this).val() < mem_total_percentage){ 
				mem_total_per     += parseInt($(this).val());
				mem_remaining_percentage = mem_total_percentage - $(this).val() ; 
				mem_html_business_other_div = '<table id="address_per"><tr><td class="td_label"><div class="span5" style="width:62px; margin-left:5px;"><label>First Name:</label></div></td><td class="td_field"><div class="span7" style="width:150px; margin-left:0px;"><input type="text" class="pull-left" name="per_first_name[]" id="mem_per_first_name" value="" style="width:160px; margin-bottom:2px;" /></div></td><td class="td_label"><div class="span5" style="width:62px; margin-left:5px;"><label>Last Name:</label></div></td><td class="td_field"><div class="span7" style="width:150px; margin-left:0px;"><input type="text" class="pull-left" name="per_last_name[]" id="mem_per_last_name" value="" style="width:160px; margin-bottom:2px;" /></div></td></tr><tr><td class="td_label"><div class="span5" style="width:62px; margin-left:5px;"><label>Email:</label></div></td><td class="td_field"><div class="span7" style="width:150px; margin-left:0px;"><input type="text" class="pull-left" name="per_email[]" id="mem_per_email" value="" style="width:160px; margin-bottom:2px;" /></div></td><td class="td_label"><div class="span5" style="width:62px; margin-left:5px;"><label>Phone Number:</label></div></td><td class="td_field"><div class="span7" style="width:150px; margin-left:0px;"><input type="text" class="pull-left" name="per_phone_num[]" id="mem_per_phone_num" value="" style="width:160px; margin-bottom:2px;" /></div></td></tr><tr><td class="td_label"><div class="span5" style="width:62px; margin-left:5px;"><label>Percentage:</label></div></td><td class="td_field"><div class="span7" style="width:150px; margin-left:0px;"><input type="text" class="pull-left" name="child_percentageofbusiness[]" id="mem_child_percentageofbusiness" value="'+mem_remaining_percentage+'" style="width:160px; margin-bottom:2px;" /></div></td><td colspan="2" id="mem_add_plus"></td></tr></table>';
				mem_add_html_business_other_div('#mem_percentage_business_other_div',mem_html_business_other_div);
				mem_percentage_business_other_div.slideDown("slow");
			}else if($(this).val() > mem_total_percentage){
				$(this).val('');
				alert('Upto 100% only allowed');
			}
		}else{
			mem_percentage_business_other_div.slideUp("slow");
			mem_total_per = 0;
		} 
		mem_index_count = 0;
		mem_sub_per_each_func();
    });

	
	/*Services Needed*/
    var mem_services_need_other_in =  $('#mem_services_need_other_in'), mem_services_need_other_div = $('#mem_services_need_other_div');
    $('#mem_services_need_other_check').change(function() {
        mem_services_need_other_in.val('');
        if ($(this).is(':checked')) {
            mem_services_need_other_div.slideDown("slow");
        } else {
            mem_services_need_other_div.slideUp("slow");
        }
    });
	
	/*Typeofindustry*/
    var mem_typeofindustry_other_in =  $('#mem_typeofindustry_other_in'), mem_typeofindustry_other_div = $('#mem_typeofindustry_other_div');
    $('#mem_typeofindustry_other_check').change(function() {
        mem_typeofindustry_other_in.val('');
        if ($(this).is(':checked')) {
            mem_typeofindustry_other_div.slideDown("slow");
        } else {
            mem_typeofindustry_other_div.slideUp("slow");
        }
    });
	
	/*Typeofbusiness*/
    var mem_typeofbusiness_other_in =  $('#mem_typeofbusiness_other_in'), mem_typeofbusiness_other_div = $('#mem_typeofbusiness_other_div');
    $('#mem_typeofbusiness_other_check').change(function() {
        mem_typeofbusiness_other_in.val('');
        if ($(this).is(':checked')) {
            mem_typeofbusiness_other_div.slideDown("slow");
        } else {
            mem_typeofbusiness_other_div.slideUp("slow");
        }
    });
	
	/*Typeofbusiness*/
    var mem_typeofbusiness_other_in =  $('#mem_typeofbusiness_other_in'), mem_typeofbusiness_other_div = $('#mem_typeofbusiness_other_div');
    $('#mem_typeofbusiness_other_check').change(function() {
        mem_typeofbusiness_other_in.val('');
        if ($(this).is(':checked')) {
            mem_typeofbusiness_other_div.slideDown("slow");
        } else {
            mem_typeofbusiness_other_div.slideUp("slow");
        }
    });
	
	/*race_ethnicity*/
    var mem_race_ethnicity_other_in =  $('#mem_race_ethnicity_other_in'), mem_race_ethnicity_other_div = $('#mem_race_ethnicity_other_div');
    $('#mem_race_ethnicity').change(function() {
        mem_race_ethnicity_other_in.val('');
        if ($(this).val() == 'Other') {
            mem_race_ethnicity_other_div.slideDown("slow");
        } else {
            mem_race_ethnicity_other_div.slideUp("slow");
        }
    });
	
	/*services_provided*/
    var mem_services_provided_other_in =  $('#mem_services_provided_other_in'), mem_services_provided_other_div = $('#mem_services_provided_other_div');
    $('#mem_services_provided').change(function() {
        mem_services_provided_other_in.val('');
        if ($(this).val() == 'Other') {
            mem_services_provided_other_div.slideDown("slow");
        } else {
            mem_services_provided_other_div.slideUp("slow");
        }
    });
	
	/*primary_language*/
    var mem_primary_language_other_in =  $('#mem_primary_language_other_in'), mem_primary_language_other_div = $('#mem_primary_language_other_div');
    $('#mem_primary_language1, #mem_primary_language2').click(function() {
        mem_primary_language_other_in.val('');
        if ($(this).val() == 'no') {
            mem_primary_language_other_div.slideDown("slow");
        } else {
            mem_primary_language_other_div.slideUp("slow");
        }
    });
}


function mem_percentage_add_plus(this_index){
    mem_index_count = 0;
	mem_sub_per_each_func();
	mem_total_per			+= parseInt(mem_sub_per_total);
	mem_remaining_percentage = mem_total_percentage - mem_total_per; 
	mem_html_business_other_div = '<table id="address_per"><tr><td class="td_label"><div class="span5" style="width:62px; margin-left:5px;"><label>First Name:</label></div></td><td class="td_field"><div class="span7" style="width:150px; margin-left:0px;"><input type="text" class="pull-left" name="per_first_name[]" id="mem_per_first_name" value="" style="width:160px; margin-bottom:2px;" /></div></td><td class="td_label"><div class="span5" style="width:62px; margin-left:5px;"><label>Last Name:</label></div></td><td class="td_field"><div class="span7" style="width:150px; margin-left:0px;"><input type="text" class="pull-left" name="per_last_name[]" id="mem_per_last_name" value="" style="width:160px; margin-bottom:2px;" /></div></td></tr><tr><td class="td_label"><div class="span5" style="width:62px; margin-left:5px;"><label>Email:</label></div></td><td class="td_field"><div class="span7" style="width:150px; margin-left:0px;"><input type="text" class="pull-left" name="per_email[]" id="mem_per_email" value="" style="width:160px; margin-bottom:2px;" /></div></td><td class="td_label"><div class="span5" style="width:62px; margin-left:5px;"><label>Phone Number:</label></div></td><td class="td_field"><div class="span7" style="width:150px; margin-left:0px;"><input type="text" class="pull-left" name="per_phone_num[]" id="mem_per_phone_num" value="" style="width:160px; margin-bottom:2px;" /></div></td></tr><tr><td class="td_label"><div class="span5" style="width:62px; margin-left:5px;"><label>Percentage:</label></div></td><td class="td_field"><div class="span7" style="width:150px; margin-left:0px;"><input type="text" class="pull-left" name="child_percentageofbusiness[]" id="mem_child_percentageofbusiness" value="'+mem_remaining_percentage+'" style="width:160px; margin-bottom:2px;" /></div></td><td colspan="2" id="mem_percentage_close"><img style="float:right;cursor: pointer;" src="img/closebox.png" onClick="mem_sub_per_each_func('+mem_index_count+')" /></td></tr></table>';
	mem_add_append_business_other_div('#mem_percentage_business_other_div',mem_html_business_other_div);
	$(this_index).remove();
	mem_index_count = 0;
	mem_sub_per_each_func();
}
 
function mem_sub_per_each_func(get_index){
		
	$("#mem_percentage_business_other_div #address_per").each(function(index){
		mem_index_count = index;
		mem_html_close_icon = '<img style="float:right;cursor: pointer;" src="img/closebox.png" onClick="mem_sub_per_each_func('+mem_index_count+')" />';
		$(this).find("[id=mem_percentage_close]").html(mem_html_close_icon);

		if($("#mem_percentageofbusiness").val()==''){
			mem_total_per      = 0;
			mem_sub_per_total  = 0;
			$(this).find("[id=mem_child_percentageofbusiness][type=text]").val('0');
		}
		
		$(this).find("[id=mem_child_percentageofbusiness][type=text]").keypress(function (e){
			  var charCode = (e.which) ? e.which : e.keyCode;
			  if (charCode > 31 && (charCode < 48 || charCode > 57)) {
				return false;
			  }
		});
		
		/*Percentage Telephone*/
		$(this).find("[id=mem_per_phone_num]").mask("(999) 999-9999");
		
		if(index > 0){
			mem_sub_per_total += parseInt($(this).find("[id=mem_child_percentageofbusiness][type=text]").val());
		}else{
			mem_total_per      = 0;
			mem_sub_per_total  = 0;
			mem_total_per	  += parseInt($("#mem_percentageofbusiness").val());
			mem_sub_per_total += parseInt($(this).find("[id=mem_child_percentageofbusiness][type=text]").val());
			mem_sub_per_keyup_func();
			
		}
		
		if(get_index != null){
			if (index === get_index) {
				$(this).remove();
				mem_index_count = 0;
				mem_sub_per_each_func();
				if(mem_total_per < mem_total_percentage){ 
					mem_html_add_plus_other = '<img style="float:right;cursor: pointer;" width="30" height="30" src="img/plus.png" onClick="mem_percentage_add_plus(this)" />';
					$("#mem_add_plus").html(mem_html_add_plus_other);
				}
			}
		}	
    });                  
 	
}

function mem_sub_per_keyup_func(){
	$("#mem_percentage_business_other_div #address_per").find("[id=mem_child_percentageofbusiness][type=text]").bind('keyup', function(){
		if($(this).val()!=''){
			mem_index_count = 0;
			mem_sub_per_each_func();
			if(mem_total_per < mem_total_percentage){ 
				mem_total_per			+= parseInt(mem_sub_per_total);
				mem_remaining_percentage = mem_total_percentage - mem_total_per; 
				mem_html_add_plus_other = '<img style="float:right;cursor: pointer;" width="30" height="30" src="img/plus.png" onClick="mem_percentage_add_plus(this)" />';
				$("#mem_add_plus").html(mem_html_add_plus_other);
			}
			if(mem_total_per > mem_total_percentage){ 
				$(this).val('');
				$("#mem_add_plus").html('');
				alert("Upto 100% only allowed");
			}
			if(mem_total_per ==100){ 
				$("#mem_add_plus").html('');
			}			
		}else{
			mem_index_count = 0;
			$("#mem_add_plus").html('');
			mem_sub_per_each_func();
		}
	});
}
</script>

<script type="text/javascript">
$(document).ready(function()
{
 $("#phworkk").mask("(999) 999-9999");
 reg_initialize(); pro_initialize();
});
$(document).ready(function()
{
   $("#cellnno").mask("(999) 999-9999");
});
$(document).ready(function()
{
 $("#ithomephone").mask("(999) 999-9999");
});
$(document).ready(function()
{
   $("#itworkphone").mask("(999) 999-9999");
});
</script>
<script>
  Calendar.setup({
      inputField  : "birthdate",
      ifFormat    : "%d-%b-%y",
      weekNumbers : false,
      showsTime   : false,
      firstDay    : 1,
      align       : "tl",
      showOthers  : true    
  });
</script>
<!--<script>
$(document).ready(function() {
   /*$("#dob").datepicker();*/
   $("#dob").datepicker({
   changeYear: true,
   changeMonth: true,
   beforeShow: function(input, obj) {
       $("#dob").after($("#dob").datepicker('widget'));
      }
    });
  });
</script>-->
<script type="text/javascript">
    Calendar.setup({
      inputField  : "ifromdate",
      ifFormat    : "%Y-%m-%d",
      weekNumbers : false,
      showsTime   : false,
      firstDay    : 1,
      align       : "tl",
      showOthers  : true    
  });
</script>
<script type="text/javascript">
    Calendar.setup({
      inputField  : "itodate",
      ifFormat    : "%Y-%m-%d",
      minDate     : new Date(),
      weekNumbers : false,
      showsTime   : false,
      firstDay    : 1,
      align       : "tl",
      showOthers  : true    
  });
</script>
<script type="text/javascript">
    Calendar.setup({
      inputField  : "membrdate",
      ifFormat    : "%d-%b-%y",
      weekNumbers : false,
      showsTime   : false,
      firstDay    : 1,
      align       : "tl",
      showOthers  : true    
  });
</script>
<script type="text/javascript">
    Calendar.setup({
      inputField  : "itdatecalendar",
      ifFormat    : "%d-%b-%y",
      weekNumbers : false,
      showsTime   : false,
      firstDay    : 1,
      align       : "tl",
      showOthers  : true    
  });
</script>



<script type="text/javascript">
  $("#fbacktologin").click(function()
  {
    //alert('back');
    $("#loginpanel").css("display","block");
    $("#fusername").css("display","none");
    });
  </script>    return false;

<script type="text/javascript">
  $("#fbacktopassword").click(function()
    {
      //alert('5678');
      $("#loginpanel").css("display","block");
      $("#fpassword").css("display","none");
    });
</script>
<script type="text/javascript">
    $("#forgotpasswd").click(function()
        {
          //alert('fpwd'); 
          $("#loginpanel").css("display","none");
          $("#fpassword").css("display","block");
    });
</script>
  <script type="text/javascript">
  $(function(){
    var addresspickerMap = $("#addresspicker").addresspicker({
      regionBias: "fr",
      //updateCallback: showCallback,
      mapOptions: {
        zoom: 4,
        center: new google.maps.LatLng(46, 2),
        scrollwheel: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      },
      elements: {
        locality: '#locality',
       administrative_area_level_2: '#district',
        administrative_area_level_1: '#state',
        postal_code: '#zip'
      }
    });

  });
  </script>
  

  <script type="text/javascript">
  $('#notification').popover({
    html: true,
    trigger:'hover',
    container:'#notification',
    placement:'left',
    content: function () {
    return '<div class="box" style="color:#000;font-size:9px;width:80px;text-transform:lowercase;">
            You have assigned a client <?php  if(isset($userprojnotify)){ echo $uprojcid;}?></div>';
    },
    animation: false
  });
  </script>
  <script type="text/javascript">
  $(document).on("click", "#loadintakeForm", function () {

   //  $("#followupformdiv").css("display","none");
    // $("#followupform2div").css("display","none");

     var cid = $("#editclientid").val();

    $("#IntakeformLoad").toggle(function(){
      $(this).addClass("aa");
       $("#followupform2div").removeClass("aaa");
    }, function () {
        $(this).removeClass("aaa");
    });
    
  });
  
  $(document).on('click', ".clientIDD", function(){
      initdatepicker();
        var cid = $(this).attr('data-id');
        $("#clientIIID").val(cid);
       // alert(cid);  
      $("#firstfollowupformdiv").toggle(
        function() {

        $("#firstfollowupformdiv").removeClass("aa");
        $("#firstfollowupformdiv").addClass("aaa");
      }, function() {
        $("#firstfollowupformdiv").removeClass("aaa");
        $("#IntakeformLoad").css("display","none");
      });
  }); 
  
  $(document).on('click', "#showfollowup2", function(){
      initdatepicker2();
      $("#IntakeformLoad").css("display","none");
      $("#telephone").mask("(999) 999-9999");

      $("#followupform2div").toggle(
        function() {
        $("#followupform2div").removeClass("ff");
        $("#followupform2div").addClass("aaa");
        
      }, function() {
         $("#followupform2div").removeClass("aaa");
        //$(this).removeClass("aaa");
       //  $("#IntakeformLoad").css("display","none");
      });
  });

</script>

<script type="text/javascript">
$(document).ready(function(){
  //alert('hi');
  Calendar.setup({
      inputField  : "followup2date",
      ifFormat    : "%d-%b-%y",
      weekNumbers : false,
      showsTime   : false,
      firstDay    : 1,
      align       : "tl",
      showOthers  : true    
  });
});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#reportsgeneration").html('');
	});
	
</script>

</body>
</html>
