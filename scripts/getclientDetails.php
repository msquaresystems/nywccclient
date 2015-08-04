<style type="text/css">    
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
<div class="span12 row" style="margin-top:80px;color:#fff; margin-left:0px;">  
<!-- <div class="span2 row">
  <center><a id="showfolowup1" style="color:#ffffff;">
          <img src="img/followup.png" title="View Intake Details"  width="25" height="25"/>Followup1
          </a>
    </center>
</div> -->
<div class="span12 row" id="editintakeview" style="margin-left:0px;"> 
  
<?php

	include('../config.php');
    $i=1;
    $clientfirst_name     	= $_GET['firstname'];
    $clientlast_name     	= $_GET['lastname'];
    $client_email  		 	= $_GET['email'];
    $client_age             = $_GET['age'];
    $client_telephone       = $_GET['telephone'];
    $client_business_name   = $_GET['business_name'];

    if(!empty($clientfirst_name) && ($clientfirst_name!='')){$clientfirst_namequery=" AND first_name='".$clientfirst_name."'";}else{$clientfirst_namequery=" ";}
    if(!empty($clientlast_name) && ($clientlast_name!='')){$clientlast_namequery=" AND last_name='".$clientlast_name."'";}else{$clientlast_namequery=" ";}
    if(!empty($client_email) && ($client_email!='')){$client_emailquery=" AND email='".$client_email."'";}else{$client_emailquery=" ";}
    if(!empty($client_age) && ($client_age!='')){$client_agequery=" AND age='".$client_age."'";}else{$client_agequery=" ";}
    if(!empty($client_telephone) && ($client_telephone!='')){$client_telephonequery=" AND telephone='".$client_telephone."'";}else{$client_telephonequery=" ";}
    if(!empty($client_business_name) && ($client_business_name!='')){$client_business_namequery=" AND business_name='".$client_business_name."'";}else{$client_business_namequery=" ";}

	
    $Query 	  	= mysql_query("SELECT id,user_id,first_name,last_name,email,physical_address1,physical_address2,telephone,website,created_date,business_name,time_spent FROM intake WHERE 1".$clientfirst_namequery.$clientlast_namequery.$client_emailquery.$client_agequery.$client_telephonequery.$client_business_namequery);
	
    $ctintake   = mysql_num_rows($Query);

    if(!empty($ctintake))
    {
	?>
	<table class="table" style="width:1075px;">
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
			<a href="#"  style="display:block;color:#ffffff;" onclick="getEditForm(<?php echo $detailrow['id'];?>)">
			  <img src="img/plus.png" title="View Intake Details"  width="20" height="20"/>
			</a>
		  </td>
		</tr>
		<tr>
			<td colspan="10">
				<?php
				$cid_hidden    = $detailrow['id'];
				$followupquery = mysql_query("SELECT id,clientid,servicepro,servreq,assist,bplan,mplan,fplan,counselor,status,breg FROM followup WHERE clientid='".$detailrow['id']."'");
				$countrows     = mysql_num_rows($followupquery);
				if($countrows > 0){
				?>
				<table class="table" style="width:1055px; background-color:#FFDF94;">
					<tr>
						<th class="listcolor">S.NO</th>
						<th class="listcolor">Service Provider</th>
						<th class="listcolor">Service Requested</th>
						<th class="listcolor">Business Plan</th>
						<th class="listcolor">Marketing Plan</th>
						<th class="listcolor">Financial Plan</th>
						<th class="listcolor">Business Registration</th>
						<th class="listcolor">Counselor</th>
						<th class="listcolor">Status</th>        <!-- <a href="#"  style="display:block;color:#ffffff;" onclick="getEditForm(<?php //echo $detailrow['id'];?>)"> -->
						<th class="listcolor">Action</th>
					</tr>
					<?php
					$k = 1 ;	
					while($getFollowup = mysql_fetch_array($followupquery)){
					?>
					<tr class="table_tr_in">
						<td class="listtextcolor"><?php echo $k; ?></td>
						<td class="listtextcolor"><?php echo $getFollowup['servicepro']; ?></td>        <!-- <a href="#"  style="display:block;color:#ffffff;" onclick="getEditForm(<?php //echo $detailrow['id'];?>)"> -->

						<td class="listtextcolor"><?php echo $getFollowup['servreq']; ?></td>
						<td class="listtextcolor"><?php echo $getFollowup['bplan']; ?></td>
						<td class="listtextcolor"><?php echo $getFollowup['mplan']; ?></td>
						<td class="listtextcolor"><?php echo $getFollowup['fplan']; ?></td>
						<td class="listtextcolor"><?php echo $getFollowup['breg']; ?></td>
						<td class="listtextcolor"><?php echo $getFollowup['counselor']; ?></td>
						<td class="listtextcolor"><?php echo $getFollowup['status']; ?></td>
						<td class="listtextcolor">
						  <a href="#"  style="display:block;color:#ffffff;" onclick="getFollowupEditForm(<?php echo $getFollowup['id'];?>)">
							<img src="img/plus.png" title="View Followup Details"  width="20" height="20"/>
						  </a>

						  <a href="#"  style="display:block;color:#ffffff;" onclick="getFollow2CreateForm(<?php echo $detailrow['id'];?>)">
							<img src="img/plus.png" title="Add Followup1 Details"  width="20" height="20"/>
						  </a>
						  <a href="#"  style="display:block;color:#ffffff;" id="showfollowup2" onclick="getFollow2CreateForm(<?php echo $detailrow['id'];?>)" >
							<img src="img/followup.png" title="Add Followup1 Details"  width="20" height="20"/>
						  </a>
						</td>
					</tr>
					<?php
					$k++;
					}
					?>
					<tr>
						<td colspan="10" style="border-top:none;">
							<?php
							$followup2query = mysql_query("SELECT * FROM followupform2 WHERE clientid='".$detailrow['id']."'");
							$countrows2     = mysql_num_rows($followup2query);
							if($countrows2 > 0){
							?>
							<table class="table follow2table" style="width:1055px; background-color:#FFDF94;">
								<tr>
									<th class="listcolor">S.NO</th>
									<th class="listcolor">Name</th>
									<th class="listcolor">telephone</th>
									<th class="listcolor">Business Name</th>
									<th class="listcolor">Time Spent</th>
									<th class="listcolor">Counselor</th>
									<th class="listcolor">Action</th>
								</tr>
								<?php
								$p = 1 ;	
								while($getFollowup2 = mysql_fetch_array($followup2query)){
								?>
								<tr class="table_tr_in">
									<td class="listtextcolor"><?php echo $p; ?></td>
									<td class="listtextcolor"><?php echo $getFollowup2['f2_clientname']; ?></td> 
									<td class="listtextcolor"><?php echo $getFollowup2['f2_telephone']; ?></td>
									<td class="listtextcolor"><?php echo $getFollowup2['f2_bname']; ?></td>
									<td class="listtextcolor"><?php echo $getFollowup2['f2_time_spent']; ?></td>
									<td class="listtextcolor"><?php echo $getFollowup2['f2_counselnotes']; ?></td>
									<td class="listtextcolor">
									  <a href="#"  style="display:block;color:#ffffff;" onclick="getFollowup2EditForm(<?php echo $getFollowup2['id'];?>)">
										<img src="img/plus.png" title="View Followup Details"  width="20" height="20"/>
									  </a>
									</td>
								</tr>
								<?php
								$p++;
								}
								?>
							</table>
							<?php } ?>	
						</td>
					</tr>
				</table>
				<?php
				}else{
				?>
				<table class="table" style="width:1055px; background-color:#FFDF94;">
					<tr class="table_tr_in">
						<input type="hidden" name="clienTid" class="clienTid" value="<?php echo $detailrow['id']; ?>"> 
						<td colspan="10" style="font-size:12px;">If it is follow up for the same customer again, please <a href="#" style="display:block;color:#000000; font-weight:bold; width:100px;" onclick="getFollowCreateForm(<?php echo $detailrow['id'];?>)">click here.</a></td>
					</tr>
				</table>
				<?php
				}
				?>
			</td>
		</tr>
		<?php 
		$i++;
		}
		?>
  </table>
  <?php }else{ ?>
  <table class="table" style="width:1000px;">
	  <tr>
		<td colspan="9" style="font-size:12px;">No Datas Found.If You are a First time user means Please Go to Intake and Add Intake Details.</td>
	  </tr>
  </table>
  <?php } ?>
</div>
</div>
