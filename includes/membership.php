<style type="text/css">
.member{
  position:relative;
}
.label
    {
        font-family: Verdana;
        font-size: medium;
        font-weight: bold;
        color: #000000;
    }
.click
    {
        font-family: Verdana;
        font-size: medium;
        font-weight: bold;
        color: #000000;
        padding:300px;
    }

.Title
    {
        font-family: Verdana;
        font-size: large;
        font-weight: bold;
        color: #FF9900;
    }
    .scrollevent{

     /* overflow-y:auto;*/
    }
#Button1
    {
        width: 64px;
         font-family: Verdana;
        font-size: medium;
        font-weight: bold;
        background-color:Teal;
        color:#FFF;
    }
.black_overlay
  {
    display: none;
    position: absolute;
    top: 0%;
    left: 0%;
    width: 100%;
    height: 100%;
    background-color: black;
    z-index:1001;
    -moz-opacity: 0.8;
    opacity:.80;
    filter: alpha(opacity=80);
  }
.white_content 
  {
    display: none;
    position: absolute;
    top: 25%;
    left: 25%;
    width: 50%;
    height: 50%;
    padding: 16px;
    border: 16px solid #33ccff;
    background-color: white;
    z-index:1002;
    /*overflow: auto;*/
  }
.aa{
  display: none;
}
.ff
{
  display: none;
}
.aaa{
  display: block;
}
.listcolor
{
  color:#000000;
  text-transform: uppercase;
  font-size: 10px;

}
.listtextcolor
{
  font-size: 12px;
}
.table tr th
{
  background-color:#f9f9f9;
}
.table_tr_in td{
  color:#000;
}
</style> 
<?php
$row   = mysql_fetch_array(mysql_query('SELECT * FROM `intake` WHERE user_id="mem_'.$_SESSION['id'].'" and membership_want = "yes"'));
?>
<!-- Intake Form -->
<div class="container">
    <hr>
    <h4></h4>
    <br>
    <!-- Form -->
		<div class="hero-unit" style="height:auto; overflow:hidden; position:relative; display:block; min-height:0px;">
			<div class="span12 row">
				<?php				
				$Query 	  	= mysql_query("SELECT id,user_id,first_name,last_name,email,telephone,website,created_date,business_name,time_spent FROM intake WHERE membership_want='yes'");
				$ctintake   = mysql_num_rows($Query);
				if(!empty($ctintake))
				{
				?>
				<table class="table" style="width:1060px;">
					<tr>
					  <th class="listcolor">S.NO</th>
					  <th class="listcolor">First Name</th>
					  <th class="listcolor">Last Name</th>
					  <th class="listcolor">Email</th>
					  <th class="listcolor">Telephone</th>
					  <th class="listcolor">Website</th>
					  <th class="listcolor">Date</th>
					  <th class="listcolor">Business Name</th>
					  <th class="listcolor">Duration</th>
					  <th class="listcolor">Action</th>
					</tr>
					<?php
					$i = 1;
					while($detailrow = mysql_fetch_array($Query)){
					?>
					<tr>
					  <td class="listtextcolor"><?php echo $i; ?></td>
					  <td class="listtextcolor"><?php echo $detailrow['first_name']; ?></td>
					  <td class="listtextcolor"><?php echo $detailrow['last_name']; ?></td>
					  <td class="listtextcolor"><?php echo $detailrow['email']; ?></td>
					  <td class="listtextcolor"><?php echo $detailrow['telephone']; ?></td>
					  <td class="listtextcolor"><?php echo $detailrow['website']; ?></td>
					  <td class="listtextcolor"><?php echo $detailrow['created_date']; ?></td>
					  <td class="listtextcolor"><?php echo $detailrow['business_name']; ?></td>
					  <td class="listtextcolor"><?php echo $detailrow['time_spent']; ?></td>
					  <td class="listtextcolor">
						<a href="#"  style="display:block;color:#ffffff;" onclick="getMemberEditForm(<?php echo $detailrow['id'];?>)">
						  <img src="img/plus.png" title="View Intake Details"  width="20" height="20"/>
						</a>
					  </td>
					</tr>
					<?php 
					$i++;
					}
					?>
				</table>
				<?php 
				}else{
				?>
				<table class="table" style="width:1060px;">
					<tr>
						<td colspan="9" style="font-size:12px;">No Datas Found.If You are a First time user means Please Go to Intake and Add Intake Details.</td>
					</tr>
				</table>
				<?php
				} 
				?>
			</div>
		</div>
		
		
	<form name="mem_membershipform" id="mem_membershipform" method="POST" enctype="multipart/form-data">
	<div id="update_memberform">
	</div>	
	</form>
		<div style=" height:80px; background-color:#81B56B;">
			<div style="float:right;">
				<a href="http://www.msquaresystems.com/" target="_blank"><p style=" margin-right:20px; margin-top:5px; margin-bottom:0px;background-attachment: scroll;background-clip: border-box;background-color: rgba(0, 0, 0, 0); background-image: url('img/m2systems_logo.png'); background-origin: padding-box; background-repeat: no-repeat; background-size: 200px auto; height:48px; width:200px;"></p></a>
				<p style=" margin-right:20px;margin-bottom:0px; font-size:13px; color:#000;">powered by M-Square Systems Inc.</p>
			</div>
		</div>

</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
