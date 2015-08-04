<?php

	//session_start();

	if(!isset($_SESSION['admin_user_id'])){
		
		include("login.php");
		//include("includes/signup.php");
	}
else{ 

	//echo 'ddffd';
	//echo $_SESSION['admin_user_id'];
	include("header-top.php");
	include("sidebar-menu.php"); 
	?>
	<div class="container-fluid" id="pcont">
		  <div class="cl-mcont">
		  
			<div class="stats_bar">
				<div class="butpro butstyle">
					<div class="sub"><h2>CLIENTS</h2><span id="total_clientes">170</span></div>
					<div class="stat"><span class="spk1">
					<canvas style="display: inline-block; width: 74px; height: 16px; vertical-align: top;" width="74" height="16"></canvas>
					</span></div>
				</div>
				<div class="butpro butstyle">
					<div class="sub"><h2>Sales</h2><span>$951,611</span></div>
					<div class="stat"><span class="up"> 13,5%</span></div>
				</div>
				<div class="butpro butstyle">
					<div class="sub"><h2>VISITS</h2><span>125</span></div>
					<div class="stat"><span class="down"> 20,7%</span></div>
				</div>	
				<div class="butpro butstyle">
					<div class="sub"><h2>NEW USERS</h2><span>18</span></div>
					<div class="stat"><span class="equal"> 0%</span></div>
				</div>	
				<div class="butpro butstyle">
					<div class="sub"><h2>AVERAGE</h2><span>3%</span></div>
					<div class="stat"><span class="spk2"></span></div>
				</div>
				<div class="butpro butstyle">
					<div class="sub"><h2>Downloads</h2><span>184</span></div>
					<div class="stat"><span class="spk3"></span></div>
				</div>	

			</div>
</div>
</div>

<?php include("footer.php");
 }  ?>