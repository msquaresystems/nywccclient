<div class="container">
    <div class="hero-unit" style="height:auto; overflow:hidden; position:relative; display:block;">
		<div class="span12 row">
			<p style="font-size:13px;color:#ffffff;font-weight:bold; width:1020px;">*Please complete the intake form before fill-up the followup form</p>
			<form method="POST" class="links offset1"  id="followup_search" name="followup_search" style="margin-left:70px;">
				<div class="span12 row" style="text-align:left;margin-left:245px;"><span id="search_err_msg" style="color:blue;font-size:12px;font-weight:bold;"></span> </div>
				<div class="span4 row" style="float:left;margin-left:130px;">
					<label><b>First Name</b></label>
				</div>
				<div class="span5 row" style="float:left;margin-left:-240px;">
					<input type="text" name="clientfirstname" id="clientfirstname" placeholder="First Name" style="min-height:27px;">
				</div>
				<div class="span4 row" style="float:left;margin-left:130px;">
					<label><b>Last Name</b></label>
				</div>
				<div class="span5 row" style="float:left;margin-left:-240px;">
					<input type="text" name="clientlastname" id="clientlastname" placeholder="Last Name" style="min-height:27px;">
				</div>
				<div class="span3 row" style="margin-left:-110px;"></div>
				<div class="span4 row" style="float:left;margin-left:125px;">
					<label><b>Email</b></label>
				</div>
				<div class="span4 row" style="float:left;margin-left:-185px;">
					<input type="text" name="clientemail" id="clientemail" placeholder="Email" style="min-height:27px;">
				</div>
				<div class="span3 row" style="margin-left:-90px;">
					<span id="search_err_lastname_msg" style="color:blue;font-size:12px;font-weight:bold;"></span>
				</div>
				<div class="span4 row" style="float:left;margin-left:125px;">
					<label><b>Age</b></label>
				</div>
				<div class="span4 row" style="float:left;margin-left:-110px;">
					<select name="clientage" id="clientage" class="pull-left">
					  <option value="">--select--</option>
					  <option value="Under 25"> >Under 25</option>
					  <option value="25-30"> >25-30</option>
					  <option value="31-40"> >31-40</option>
					  <option value="41-50"> >41-50</option>
					  <option value="51-60"> >51-60</option>
					  <option value="61+"> >61+</option>
					</select>
				</div>
				<div class="span3 row" style="margin-left:-90px;">
					<span id="search_err_cell_msg" style="color:blue;font-size:12px;font-weight:bold;"></span>
				</div>
				<div class="span4 row" style="float:left;margin-left:125px;">
					<label><b>Telephone</b></label>
				</div>
				<div class="span4 row" style="float:left;margin-left:-185px;">
					<input type="text" name="clienttelephone" id="clienttelephone" placeholder="Telephone" style="min-height:27px;">
				</div>
				<div class="span3 row" style="margin-left:-90px;">
					<span id="search_err_workphone_msg" style="color:blue;font-size:12px;font-weight:bold;"></span>
				</div>
				<div class="span4 row" style="float:left;margin-left:125px;">
					<label><b>Business Name</b></label>
				</div>
				<div class="span4 row" style="float:left;margin-left:-185px;">
					<input type="text" name="clientbusiness_name" id="clientbusiness_name" placeholder="Business Name" style="min-height:27px;">
				</div>
				<div class="span3 row" style="margin-left:-90px;">
					<span id="search_err_homephone_msg" style="color:blue;font-size:12px;font-weight:bold;"></span>
				</div>
				<div class="span3 row"></div>
				<div class="span4 row"></div>
				<div class="span4 row" style="margin-left:-140px;">
					<input type="submit" name="search" class="btn btn-large" style="height:40px;" value="search">  
				</div>
				<div id="searchresult" style="margin-top:-50px; margin-bottom:80px;"> 
				</div>
			</form>
		</div>
		<div class="span12 row">
			<div id="clientsearchresult"></div>
		</div>
	</div>
	
	
	<form name="follow_intakeform" id="follow_intakeform" method="POST" enctype="multipart/form-data">	
		<div id="FollowEdittForm"></div>
	</form>
	<div id="ClientEdittForm"></div>
	<div style=" height:80px; background-color:#CD793C;">
			<div style="float:right;">
				<a href="http://www.msquaresystems.com/" target="_blank"><p style=" margin-right:20px; margin-top:5px; margin-bottom:0px;background-attachment: scroll;background-clip: border-box;background-color: rgba(0, 0, 0, 0); background-image: url('img/m2systems_logo.png'); background-origin: padding-box; background-repeat: no-repeat; background-size: 200px auto; height:48px; width:200px;"></p></a>
				<p style=" margin-right:20px;margin-bottom:0px; font-size:13px; color:#000;">powered by M-Square Systems Inc.</p>
			</div>
	</div>
</div>

