<?php
include('../config.php');

$clientIID =  $_GET['cntid'];

$getEditMemberQuery   = mysql_query("SELECT * FROM intake WHERE id='".$clientIID."'");

$row=mysql_fetch_array($getEditMemberQuery);
?>
<style>
  #address {
	border: 1px solid #FFF;
	width: 505px;
	padding-right: 2px;
	margin-bottom:10px;
  }
  #address .td_field {
	font-size: 10pt;
	width:10%!important;
  }
  #address .td_label {
	width:1%!important;
  }
  
  #address_per {
	border: 1px solid #FFF;
	width: 505px;
	padding-right: 2px;
	margin-bottom:10px;
  }
  #address_per .td_field {
	font-size: 10pt;
	width:10%!important;
  }
  #address_per .td_label {
	width:1%!important;
  }

  .pac-container:after{
	content:none !important; 
  }
</style>

<div class="hero-unit" style="height:auto; overflow:hidden; position:relative; display:block;">
	<div class="span12">
		<div class="span12 row" id="mem_validation_errors" style="font-size:12px; font-weight:bold; margin-left:-10px;color:red;" align="center"></div>
			<div class="row_head">            
				<div class="row">
					<input type="hidden" name="membership_id" value="<?php if(!empty($row['id'])){echo $row['id'];}?>" />	
					<div class="row_split">
						<div class="span5">
						  <label>First Name:</label>
						</div>
						<div class="span7">
							<input type="text" name="first_name" id="mem_first_name" class="pull-left" value="<?php if(!empty($row['first_name'])){echo $row['first_name'];}?>" />
							<span id="mem_spanfirst_name" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>

					<div class="row_split">
						<div class="span5">
						  <label>Last Name:</label>
						</div>
						<div class="span7">
							<input type="text" name="last_name" id="mem_last_name" class="pull-left" value="<?php if(!empty($row['last_name'])){echo $row['last_name'];}?>" />
							<span id="mem_spanlast_name" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>

					<div class="row_split">
						<div class="span5">
						  <label>Email:</label>
						</div>
						<div class="span7">
						  <input type="text" name="email" id="mem_email" class="pull-left" value="<?php if(!empty($row['email'])){echo $row['email'];}?>" />
						 <span id="mem_spanemail" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>
					<div class="row_split">
						<div class="span5">
						  <label>Gender:</label>
						</div>
						<div class="span7">
							<label class="radio" style="width:100px;">
							<input type="radio" name="gender" id="mem_gender1" value="Male" <?php if(!empty($row['gender']) && $row['gender']=='Male' ){echo 'CHECKED';}?> />Male</label>
							<label class="radio" style="width:100px;">
							<input type="radio" name="gender" id="mem_gender2" value="Female" <?php if(!empty($row['gender']) && $row['gender']=='Female' ){echo 'CHECKED';}?> />Female</label>
							 <span id="mem_spangender" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						 </div>	
					</div>
					
					<div class="row_split">
						<div class="span5">
						  <label>Race and Ethnicity:</label>
						</div>
						<div class="span7">
						   <select name="race_ethnicity" id="mem_race_ethnicity" class="pull-left">
							  <option  value="">--select--</option>
							  <option <?php if(!empty($row['race_ethnicity']) && $row['race_ethnicity']=='White' ){echo 'SELECTED';}?>   value="White">White</option>
							  <option <?php if(!empty($row['race_ethnicity']) && $row['race_ethnicity']=='Asian' ){echo 'SELECTED';}?>   value="Asian">Asian</option>
							  <option <?php if(!empty($row['race_ethnicity']) && $row['race_ethnicity']=='Hispanic/Latino' ){echo 'SELECTED';}?>   value="Hispanic/Latino">Hispanic/Latino</option>
							  <option <?php if(!empty($row['race_ethnicity']) && $row['race_ethnicity']=='Black/Africa American' ){echo 'SELECTED';}?>   value="Black/Africa American">Black/Africa American</option>
							  <option <?php if(!empty($row['race_ethnicity']) && $row['race_ethnicity']=='American Indian/Alaska Native' ){echo 'SELECTED';}?>   value="American Indian/Alaska Native">American Indian/Alaska Native</option>
							  <option <?php if(!empty($row['race_ethnicity']) && $row['race_ethnicity']=='Pacific Islander' ){echo 'SELECTED';}?>   value="Pacific Islander">Pacific Islander</option>
							  <option <?php if(!empty($row['race_ethnicity']) && $row['race_ethnicity']=='Native Hawaiian' ){echo 'SELECTED';}?>   value="Native Hawaiian">Native Hawaiian</option>
							  <option <?php if(!empty($row['race_ethnicity']) && $row['race_ethnicity']=='Caucasian' ){echo 'SELECTED';}?>   value="Caucasian">Caucasian</option>
							  <option <?php if(!empty($row['race_ethnicity']) && $row['race_ethnicity']=='Other' ){echo 'SELECTED';}?>   value="Other">Other</option>
						  </select>
						  <span id="mem_spanrace_ethnicity" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>
					<div class="row_split" id="mem_race_ethnicity_other_div" style="display: none; float:right; margin-right:110px;">
						<input type="text" name="race_ethnicity_other_in" id="mem_race_ethnicity_other_in" class="pull-left" value="<?php if(!empty($row['race_ethnicity_other_in'])){echo $row['race_ethnicity_other_in'];}?>" />
						<span id="mem_spanrace_ethnicity_other_in" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
					</div>

					<div class="row_split">
						<div class="span5">
						  <label>Do you have health insurance coverage?</label>
						 </div>
						<div class="span7">
							<label class="radio">
							<input type="radio" name="health_insurance" id="mem_health_insurance1" value="yes" <?php if(!empty($row['health_insurance']) && $row['health_insurance']=='yes' ){echo 'CHECKED';}?> />Yes</label>
							<label class="radio">
							<input type="radio" name="health_insurance" id="mem_health_insurance2" value="no" <?php if(!empty($row['health_insurance']) && $row['health_insurance']=='no' ){echo 'CHECKED';}?> />No</label>
							<span id="mem_spanhealth_insurance" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						 </div>	
					</div>
					
					<div class="row_split">
						 <div class="span5">
						  <label>Is English your primary language?</label>
						 </div>
						 <div class="span7">
							<label class="radio">
							<input type="radio" name="primary_language" id="mem_primary_language1" value="yes" <?php if(!empty($row['primary_language']) && $row['primary_language']=='yes' ){echo 'CHECKED';}?> />Yes</label>
							<label class="radio">
							<input type="radio" name="primary_language" id="mem_primary_language2" value="no" <?php if(!empty($row['primary_language']) && $row['primary_language']=='no' ){echo 'CHECKED';}?> />No</label>
							<span id="mem_spanprimary_language" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						  </div>	
					</div>

					<div id="mem_primary_language_other_div" style="display: none; float:right; margin-right:110px;">
						<input type="text" name="primary_language_other_in" id="mem_primary_language_other_in" class="pull-left" value="<?php if(!empty($row['primary_language_other_in'])){echo $row['primary_language_other_in'];}?>" />
						<span id="mem_spanprimary_language_other_in" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
					</div>

					<div class="row_split">
						  <div class="span5">
						   <label>Time in Business:</label>
						  </div>
						  <div class="span7">
							<select name="time_in_business" id="mem_time_in_business" class="pull-left">
							  <option   value="">--select--</option>
							  <option <?php if(!empty($row['time_in_business']) && $row['time_in_business']=='Existing (More than 2 yrs)' ){echo 'SELECTED';}?>  value="Existing (More than 2 yrs)" >Existing (More than 2 yrs)</option>
							  <option <?php if(!empty($row['time_in_business']) && $row['time_in_business']=='StartUp (Less than 2 yrs)' ){echo 'SELECTED';}?>  value="StartUp (Less than 2 yrs)" >StartUp (Less than 2 yrs)</option>
							  <option <?php if(!empty($row['time_in_business']) && $row['time_in_business']=='Aspiring (Not yet created)' ){echo 'SELECTED';}?>  value="Aspiring (Not yet created)" >Aspiring (Not yet created)</option>
							</select>
							<span id="mem_spantime_in_business" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						  </div>
					</div>

					<div class="row_split">
						<div class="span5">
						  <label>Fax:</label>
						 </div>
						<div class="span7">
						  <input type="text" name="fax" id="mem_fax"  class="pull-left" value="<?php if(!empty($row['fax'])){echo $row['fax'];}?>" />
						  <span id="mem_spanfax" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>
						
					<div class="row_split">
						<div class="span5">
						  <label>Website:</label>
						</div>
						<div class="span7">
						  <input type="text" name="website" id="mem_website"  class="pull-left" value="<?php if(!empty($row['website'])){echo $row['website'];}?>" />
						  <span id="mem_spanwebsite" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>

				</div>


				<div class="row" style="margin-top:15px;">
					<input type="hidden" name="street_number" id="street_number" /> 
					<input type="hidden" name="route" id="route" /> 
					<input type="hidden" name="locality" id="locality" /> 
					<input type="hidden" name="administrative_area_level_1" id="administrative_area_level_1" /> 
					<input type="hidden" name="postal_code" id="postal_code" /> 
					<input type="hidden" name="country" id="country" /> 

					<div class="row_split">
						  <div class="span5">
						  <label>Physical Address:</label>
						  </div>
						  <div class="span7">
						  <input type="text" name="physical_address" id="mem_physical_address" class="pull-left" value="<?php if(!empty($row['physical_address'])){echo $row['physical_address'];}?>" />
						  <span id="mem_spanphysical_address" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						  </div>
					</div>
					
					<div class="row_split" style="width:505px; margin-left:30px;">
						<table id="address">
							<tr>
								<td class="td_label">
									<div class="span5" style="width:62px; margin-left:5px;">
										<label>Address1: </label>
									</div>
								</td>
								<td class="td_field">
									<div class="span7" style="width:150px; margin-left:0px;">
										<input type="text" class="pull-left" name="physical_address1" id="mem_physical_address1" value="<?php if(!empty($row['physical_address1'])){echo $row['physical_address1'];}?>" style="width:160px; margin-bottom:2px;" />
									</div>
								</td>
								<td class="td_label">
									<div class="span5" style="width:62px; margin-left:5px;">
										<label>Address2: </label>
									</div>
								</td>
								<td class="td_field">
									<div class="span7" style="width:150px; margin-left:0px;">
										<input type="text" class="pull-left" name="physical_address2" id="mem_physical_address2" value="<?php if(!empty($row['physical_address2'])){echo $row['physical_address2'];}?>" style="width:160px; margin-bottom:2px;" />
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
										<input type="text" class="pull-left" name="physical_city" id="mem_physical_city" value="<?php if(!empty($row['physical_city'])){echo $row['physical_city'];}?>" style="width:160px; margin-bottom:2px;" />
									</div>
								</td>
								<td class="td_label">
									<div class="span5" style="width:62px; margin-left:5px;">
										<label>State:</label>
									</div>
								</td>
								<td class="td_field">
									<div class="span7" style="width:150px; margin-left:0px;">
										<input type="text" class="pull-left" name="physical_state" id="mem_physical_state" value="<?php if(!empty($row['physical_state'])){echo $row['physical_state'];}?>" style="width:160px; margin-bottom:2px;" />
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
										<input type="text" class="pull-left" name="physical_zip" id="mem_physical_zip" value="<?php if(!empty($row['physical_zip'])){echo $row['physical_zip'];}?>" style="width:160px; margin-bottom:2px;" />
									</div>
								</td>
								<td class="td_label">
									<div class="span5" style="width:62px; margin-left:5px;">
										<label>Country:</label>
									</div>
								</td>
								<td class="td_field">
									<div class="span7" style="width:150px; margin-left:0px;">
										<input type="text" class="pull-left" name="physical_country" id="mem_physical_country" value="<?php if(!empty($row['physical_country'])){echo $row['physical_country'];}?>" style="width:160px; margin-bottom:2px;" />
									</div>
								</td>
							</tr>
						</table>
					</div>

					<div class="row_split">
						<div class="span5">
						  <label>Same as physical address: </label>
						 </div>
						<div class="span7">
							<label class="checkbox">
							<input type="checkbox" name="address_business_same" id="mem_address_business_same" value="addr_busi_addr_same"></label>
						 </div>	
					</div>
					
					<div class="row_split">
						  <div class="span5">
						  <label>Business Address:</label>
						  </div>
						  <div class="span7">
						  <input type="text" name="business_address" id="mem_business_address" class="pull-left" value="<?php if(!empty($row['business_address'])){echo $row['business_address'];}?>" />
						  <span id="mem_spanbusiness_address" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						  </div>
					</div>

					<div class="row_split" style="width:505px; margin-left:30px;">
						<table id="address">
							<tr>
								<td class="td_label">
									<div class="span5" style="width:62px; margin-left:5px;">
										<label>Address1:</label>
									</div>
								</td>
								<td class="td_field">
									<div class="span7" style="width:150px; margin-left:0px;">
										<input type="text" class="pull-left" name="business_address1" id="mem_business_address1" value="<?php if(!empty($row['business_address1'])){echo $row['business_address1'];}?>" style="width:160px; margin-bottom:2px;" />
									</div>
								</td>
								<td class="td_label">
									<div class="span5" style="width:62px; margin-left:5px;">
										<label>Address2:</label>
									</div>
								</td>
								<td class="td_field">
									<div class="span7" style="width:150px; margin-left:0px;">
										<input type="text" class="pull-left" name="business_address2" id="mem_business_address2" value="<?php if(!empty($row['business_address2'])){echo $row['business_address2'];}?>" style="width:160px; margin-bottom:2px;" />
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
										<input type="text" class="pull-left" name="business_city" id="mem_business_city" value="<?php if(!empty($row['business_city'])){echo $row['business_city'];}?>" style="width:160px; margin-bottom:2px;" />
									</div>
								</td>
								<td class="td_label">
									<div class="span5" style="width:62px; margin-left:5px;">
										<label>State:</label>
									</div>
								</td>
								<td class="td_field">
									<div class="span7" style="width:150px; margin-left:0px;">
										<input type="text" class="pull-left" name="business_state" id="mem_business_state" value="<?php if(!empty($row['business_state'])){echo $row['business_state'];}?>" style="width:160px; margin-bottom:2px;" />
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
										<input type="text" class="pull-left" name="business_zip" id="mem_business_zip" value="<?php if(!empty($row['business_zip'])){echo $row['business_zip'];}?>" style="width:160px; margin-bottom:2px;" />
									</div>
								</td>
								<td class="td_label">
									<div class="span5" style="width:62px; margin-left:5px;">
										<label>Country:</label>
									</div>
								</td>
								<td class="td_field">
									<div class="span7" style="width:150px; margin-left:0px;">
										<input type="text" class="pull-left" name="business_country" id="mem_business_country" value="<?php if(!empty($row['business_country'])){echo $row['business_country'];}?>" style="width:160px; margin-bottom:2px;" />
									</div>
								</td>
							</tr>
						</table>
					</div>
					
					
				</div>
		    </div>	
	</div>  
</div>

<?php
if(!empty($row['typeofindustry'])){
$Split_Industry = explode(',',$row['typeofindustry']);
}
?>


<h4>Type Of Industry</h4>
<br>
<div class="hero-unit" style="min-height:150px; height:auto; overflow:hidden; position:relative; display:block;">
<div class="span12 type_industry" id="mem_typeofindustry">
	   <div class="row">
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array('Advertising' ,$Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" id="mem_advertising" value="Advertising">Advertising</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array('financial' , $Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" value="financial" id="mem_Financial">Financial</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array('Marketing' , $Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" id="mem_marketing" value="Marketing">Marketing</label>  
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Architecture' ,$Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" id="mem_architecture" value="Architecture">Architecture</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Fine Arts',$Split_Industry )){echo 'CHECKED';}?>  name="typeofindustry[]" id="mem_selltogovt" value="Fine Arts">Fine Arts</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Mail Order' ,$Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" id="mem_mail_order" value="Mail Order">Mail Order</label>  
		  </div>
	   </div> 
		 
	   <div class="row">
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Automobile' ,$Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" id="mem_automobile" value="Automobile">Automobile</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array('Food/Beverge Service' , $Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" id="mem_food_beverge_service" value="Food/Beverge Service">Food/Beverge Service</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array('New Media', $Split_Industry )){echo 'CHECKED';}?>  name="typeofindustry[]" id="mem_new_media" value="New Media">New Media</label>  
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array('Beauty/Cosmetology' , $Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" id="mem_beauty_cosmetology" value="Beauty/Cosmetology">Beauty/Cosmetology</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Furniture and Fixtures' ,$Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" id="mem_furniture_fixtures" value="Furniture and Fixtures">Furniture and Fixtures</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Performing Arts',$Split_Industry )){echo 'CHECKED';}?>  name="typeofindustry[]" id="mem_performing_arts" value="Performing Arts">Performing Arts</label>  
		  </div>
	   </div>
	   
	   <div class="row">
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array('Catering' , $Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" id="mem_catering" value="Catering">Catering</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array('Fashion', $Split_Industry )){echo 'CHECKED';}?>  name="typeofindustry[]" id="mem_fashion" value="Fashion">Fashion</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Plumbing',$Split_Industry )){echo 'CHECKED';}?>  name="typeofindustry[]" id="mem_plumbing" value="Plumbing">Plumbing</label>  
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Chemical/Pharmaceutical' ,$Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" id="mem_chemical_pharmaceutical" value="Chemical/Pharmaceutical">Chemical/Pharmaceutical</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Construction',$Split_Industry )){echo 'CHECKED';}?>  name="typeofindustry[]" id="mem_construction" value="Construction">Construction</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Printing & Publishing' ,$Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" id="mem_printing_publishing" value="Printing & Publishing">Printing & Publishing</label>  
		  </div>
	   </div> 
	   
	   <div class="row">
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Childcare',$Split_Industry )){echo 'CHECKED';}?>  name="typeofindustry[]" id="mem_childcare" value="Childcare">Childcare</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array('healthcare' , $Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" id="mem_healthcare" value="healthcare">Healthcare</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Personal Services' ,$Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" id="mem_personal_services" value="Personal Services">Personal Services</label>  
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Computer',$Split_Industry )){echo 'CHECKED';}?>  name="typeofindustry[]" id="mem_computer" value="Computer">Computer</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array('Hospitality', $Split_Industry )){echo 'CHECKED';}?>  name="typeofindustry[]" id="mem_hospitality" value="Hospitality">Hospitality</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Real Estate',$Split_Industry )){echo 'CHECKED';}?>  name="typeofindustry[]" id="mem_real_estate" value="Real Estate">Real Estate</label>  
		  </div>
	   </div>
	   
	   <div class="row">
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array('Education/Training', $Split_Industry )){echo 'CHECKED';}?>  name="typeofindustry[]" id="mem_education_training" value="Education/Training">Education/Training</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Human Resources',$Split_Industry )){echo 'CHECKED';}?>  name="typeofindustry[]" id="mem_human_resources" value="Human Resources">Human Resources</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Telecommunications' ,$Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" id="mem_telecommunications" value="Telecommunications">Telecommunications</label>  
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Engineering' ,$Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" id="mem_engineering" value="Engineering">Engineering</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Information Technology' ,$Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" id="mem_information_technology" value="Information Technology">Information Technology</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Transportation',$Split_Industry )){echo 'CHECKED';}?>  name="typeofindustry[]" id="mem_transportation" value="Transportation">Transportation</label>  
		  </div>
	   </div>
	   
	   <div class="row">
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Electrical/Electronic' ,$Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" id="mem_electrical_electronic" value="Electrical/Electronic">Electrical/Electronic</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array('Jewelry' , $Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" id="mem_jewelry" value="Jewelry">Jewelry</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Travel Services',$Split_Industry )){echo 'CHECKED';}?>  name="typeofindustry[]" id="mem_travel_services" value="Travel Services">Travel Services</label>  
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Environmental' ,$Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" id="mem_environmental" value="Environmental">Environmental</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array('Lumber' , $Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" id="mem_lumber" value="Lumber">Lumber</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array('Flower shop/Edible' , $Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" id="mem_flower_shop_edible" value="Flower shop/Edible">Flower shop/Edible</label>
		  </div>
	   </div> 

	   <div class="row">
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Other' ,$Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" id="mem_typeofindustry_other_check" value="Other">Other</label>  
		  </div>
		  <span id="mem_spantypeofindustry" style="color:blue; font-size:12px; margin-left:25px;" class="pull-left"></span>
	   </div> 
	   
	   
	  <div id="mem_typeofindustry_other_div" style="display: none;">
			<input type="text" name="typeofindustry_other_in" id="mem_typeofindustry_other_in" class="pull-left" value="<?php if(!empty($row['typeofindustry_other_in'])){echo $row['typeofindustry_other_in'];}?>" />
			<span id="mem_spantypeofindustry_other_in" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
	  </div>
</div>
</div>

<?php
if(!empty($row['typeofmwbe'])){
$Split_MWBE = explode(',',$row['typeofmwbe']);
}
?>

<h4>Type of MWBE Certification</h4>
<br>
<div class="hero-unit" style="min-height:50px; height:auto; overflow:hidden; position:relative; display:block;">
	<div id="mem_typeofmwbe" class="span12 type_mwbe">
		   <div class="row">
			  <div class="span2">
				<label class="checkbox">
				<input type="checkbox" <?php if(!empty($Split_MWBE) && in_array('City',$Split_MWBE) ){echo 'CHECKED';}?> name="typeofmwbe[]" id="mem_City" value="City">City</label>
			  </div>
			  <div class="span2">
				<label class="checkbox">
				<input type="checkbox" <?php if(!empty($Split_MWBE) && in_array('State',$Split_MWBE) ){echo 'CHECKED';}?> name="typeofmwbe[]" id="mem_State" value="State">State</label>
			  </div>
			  <div class="span2">
				<label class="checkbox">
				<input type="checkbox" <?php if(!empty($Split_MWBE) && in_array('Federal',$Split_MWBE) ){echo 'CHECKED';}?> name="typeofmwbe[]" id="mem_Federal" value="Federal">Federal</label>  
			  </div>
			  <div class="span2">
				<label class="checkbox">
				<input type="checkbox" <?php if(!empty($Split_MWBE) && in_array('Port Authority',$Split_MWBE) ){echo 'CHECKED';}?> name="typeofmwbe[]" id="mem_Port_Authority" value="Port Authority">Port Authority</label>
			  </div>
			  <div class="span2">
				<label class="checkbox">
				<input type="checkbox" <?php if(!empty($Split_MWBE) && in_array('Dormitory Authority',$Split_MWBE) ){echo 'CHECKED';}?> name="typeofmwbe[]" id="mem_Dormitory_Authority" value="Dormitory Authority">Dormitory Authority</label>
			  </div>
		   </div>   
		   <div class="row">
			  <div class="span2">
				<label class="checkbox">
				<input type="checkbox" <?php if(!empty($Split_MWBE) && in_array('School of Construction',$Split_MWBE) ){echo 'CHECKED';}?> name="typeofmwbe[]" id="mem_School_Construction" value="School of Construction">School of Construction</label>  
			  </div>
			  <div class="span2">
				<label class="checkbox">
				<input type="checkbox" <?php if(!empty($Split_MWBE) && in_array('NY/NJ Purchasing Council Others',$Split_MWBE) ){echo 'CHECKED';}?> name="typeofmwbe[]" id="mem_NY_NJ_Purchasing_Council" value="NY/NJ Purchasing Council Others">NY/NJ Purchasing Council Others</label>
			  </div>
			  <div class="span2">
				<label class="checkbox">
				<input type="checkbox" <?php if(!empty($Split_MWBE) && in_array('Other',$Split_MWBE) ){echo 'CHECKED';}?> name="typeofmwbe[]" id="mem_typeofmwbe_other_check" value="Other">Other</label>  
			  </div>
			  <span id="mem_spantypeofmwbe" style="color:blue; font-size:12px; margin-left:25px;" class="pull-left"></span>
		   </div>  

		  <div id="typeofmwbe_other_div" style="display: none;">
				<input type="text" name="typeofmwbe_other_in" id="mem_typeofmwbe_other_in" class="pull-left" value="<?php if(!empty($row['typeofmwbe_other_in'])){echo $row['typeofmwbe_other_in'];}?>" />
				<span id="mem_typeofmwbe_other_in" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
		  </div>
	</div>
</div>



<?php
if(!empty($row['services_needed'])){
$Split_Service = explode(',',$row['services_needed']);
}
?>

<h4>Service(s) Needed</h4>
<br>
<div class="hero-unit" style="min-height:75px; height:auto; overflow:hidden; position:relative; display:block;">
<div id="mem_services_needed" class="span12 service_need">
	   <div class="row">
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Service) && in_array('One-On-One Business Counseling',$Split_Service) ){echo 'CHECKED';}?>  name="services_needed[]" id="mem_One-On-One_business_counseling" value="One-On-One Business Counseling">One-On-One Business Counseling</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Service) && in_array('Government Regulations',$Split_Service)){echo 'CHECKED';}?>  name="services_needed[]" id="mem_government_regulations" value="Government Regulations" >Government Regulations</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Service) && in_array('Marketing/Promotion',$Split_Service)){echo 'CHECKED';}?>  name="services_needed[]" id="mem_marketing_promotion" value="Marketing/Promotion">Marketing/Promotion</label>  
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Service) && in_array('Networking',$Split_Service )){echo 'CHECKED';}?>  name="services_needed[]" id="mem_networking" value="Networking">Networking</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Service) && in_array('Financing',$Split_Service )){echo 'CHECKED';}?>  name="services_needed[]" id="mem_financing" value="Financing">Financing</label>
		  </div>
	   </div>   
	   <div class="row">
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Service) && in_array('Export/Import',$Split_Service )){echo 'CHECKED';}?>  name="services_needed[]" id="mem_export_import" value="Export/Import">Export/Import</label>  
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Service) && in_array('Human Resources Assistance',$Split_Service )){echo 'CHECKED';}?>  name="services_needed[]" id="mem_human_resources_assistance" value="Human Resources Assistance">Human Resources Assistance</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Service) && in_array('Professional Development',$Split_Service )){echo 'CHECKED';}?>  name="services_needed[]" id="mem_professional_development" value="Professional Development">Professional Development</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Service) && in_array('Business Plan Development',$Split_Service )){echo 'CHECKED';}?>  name="services_needed[]" id="mem_business_plan_development" value="Business Plan Development">Business Plan Development</label>  
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Service) && in_array('Certification',$Split_Service )){echo 'CHECKED';}?>  name="services_needed[]" id="mem_certification" value="Certification">Certification</label>
		  </div>
	   </div> 
	   <div class="row">
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Service) && in_array('Procurement/Government Contracts',$Split_Service )){echo 'CHECKED';}?>  name="services_needed[]" id="mem_procurement_government_contracts" value="Procurement/Government Contracts">Procurement/Government Contracts</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Service) && in_array('Business Registration',$Split_Service )){echo 'CHECKED';}?>  name="services_needed[]" id="mem_business_registration" value="Business Registration">Business Registration</label>  
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Service) && in_array('Training',$Split_Service )){echo 'CHECKED';}?>  name="services_needed[]" id="mem_training" value="Training">Training</label>  
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Service) && in_array('Health Insurance Coverage',$Split_Service)){echo 'CHECKED';}?>  name="services_needed[]" id="mem_services_needed_coverage" value="Health Insurance Coverage">Health Insurance Coverage</label>  
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Service) && in_array('Other',$Split_Service )){echo 'CHECKED';}?>  name="services_needed[]" id="mem_services_need_other_check" value="Other">Other</label>  
		  </div>
		  <span id="mem_spanservices_needed" style="color:blue; font-size:12px; margin-left:25px;" class="pull-left"></span>
	  </div>
	  
	  <div id="mem_services_need_other_div" style="display: none;">
			<input type="text" name="services_need_other_in" id="mem_services_need_other_in" class="pull-left" value="<?php if(!empty($row['services_need_other_in'])){echo $row['services_need_other_in'];}?>" />
			<span id="mem_spanservices_need_other_in" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
	  </div>
	  
</div>
</div>


<div class="hero-unit" style="height:auto; overflow:hidden; position:relative; display:block;">
<div class="span12">
  <div class="span12 row" id="mem_validation_errors" style="font-size:12px; font-weight:bold; margin-left:-10px;color:red;" align="center"></div>
  <div class="row_head">            
		<div class="row">
			<div class="row_split">
				<div class="span5">
				  <label>Describe Services and Products Offered:</label>
				</div>
				<div class="span7">
				  <textarea rows="3" name="products_offered" id="mem_products_offered" class="pull-left"><?php if(!empty($row['products_offered'])){echo $row['products_offered'];}?></textarea>
				  <span id="mem_spanproducts_offered" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
				</div>
			</div>
			<div class="row_split">
				<div class="span5">
				  <label>Are you a women/Minority Owned Business?</label>
				</div>
				<div class="span7">
					<label class="radio" style="width:92px;">
					<input type="radio" name="women_minority_owned" id="mem_women_minority_owned1" value="women_owned" <?php if(!empty($row['women_minority_owned']) && $row['women_minority_owned']=='women_owned' ){echo 'CHECKED';}?> />Women Owned</label>
					<label class="radio" style="width:95px;">
					<input type="radio" name="women_minority_owned" id="mem_women_minority_owned2" value="minority_owned" <?php if(!empty($row['women_minority_owned']) && $row['women_minority_owned']=='minority_owned' ){echo 'CHECKED';}?> />Minority Owned</label>
					<label class="radio" style="width:95px;">
					<input type="radio" name="women_minority_owned" id="women_minority_owned3" value="none" <?php if(!empty($row['women_minority_owned']) && $row['women_minority_owned']=='none' ){echo 'CHECKED';}?> />None</label>
					<span id="mem_spanwomen_minority_owned" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
				</div>
			</div>
			<div class="row_split">
				<div class="span5">
				  <label>Counselor's notes:</label>
				</div>
				<div class="span7">
				  <textarea rows="3" name="counselor_notes" id="mem_counselor_notes" class="pull-left"><?php if(!empty($row['counselor_notes'])){echo $row['counselor_notes'];}?></textarea>
				  <span id="mem_spancounselor_notes" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
				</div>
			</div>
			
			<div class="row_split">
				<div class="span5">
				  <label>Number of employees:</label>
				</div>
				<div class="span7">
				  <select name="numberofemployees" id="mem_numberofemployees" class="pull-left">
					  <option  value="">--select--</option>
					  <option <?php if(!empty($row['numberofemployees']) && $row['numberofemployees']=='None' ){echo 'SELECTED';}?>   value="None">None</option>
					  <option <?php if(!empty($row['numberofemployees']) && $row['numberofemployees']=='1-10' ){echo 'SELECTED';}?>   value="1-10">1-10</option>
					  <option <?php if(!empty($row['numberofemployees']) && $row['numberofemployees']=='10 -25' ){echo 'SELECTED';}?>   value="10 -25">10 -25</option>
					  <option <?php if(!empty($row['numberofemployees']) && $row['numberofemployees']=='25 - 100' ){echo 'SELECTED';}?>   value="25 - 100">25 - 100</option>
					  <option <?php if(!empty($row['numberofemployees']) && $row['numberofemployees']=='50 and above' ){echo 'SELECTED';}?>   value="50 and above">50 and above</option>
				   </select>
				   <span id="mem_spannumberofemployees" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
				</div>
			</div>
	   </div>
	 
	   <div class="row">

			<div class="row_split">
				<div class="span5">
				  <label>Time Spent:</label>
				</div>
				<div class="span7">
				  <select name="time_spent" id="mem_time_spent" class="pull-left">
					  <option value="">--select--</option>
					  <option <?php if(!empty($row['time_spent']) && $row['time_spent']=='15mins' ){echo 'SELECTED';}?>   value="15mins">15 minutes</option>
					  <option <?php if(!empty($row['time_spent']) && $row['time_spent']=='30mins' ){echo 'SELECTED';}?>   value="30mins">30 minutes</option>
					  <option <?php if(!empty($row['time_spent']) && $row['time_spent']=='45mins' ){echo 'SELECTED';}?>   value="45mins"> 45 minutes</option>
					  <option <?php if(!empty($row['time_spent']) && $row['time_spent']=='1hr' ){echo 'SELECTED';}?>   value="1hr"> 1 hour</option>
					  <option <?php if(!empty($row['time_spent']) && $row['time_spent']=='1hr30mins' ){echo 'SELECTED';}?>   value="1hr30mins">  1 hour 30 minutes</option>
					  <option <?php if(!empty($row['time_spent']) && $row['time_spent']=='2hr' ){echo 'SELECTED';}?>   value="2hr">  2 hour</option>
					  <option <?php if(!empty($row['time_spent']) && $row['time_spent']=='2hr30mins' ){echo 'SELECTED';}?> value="2hr30mins"> 2 hour and 30 minutes</option>
					  <option <?php if(!empty($row['time_spent']) && $row['time_spent']=='morethan 3hrs' ){echo 'SELECTED';}?> value="morethan 3hrs"> more than 3 hours</option>
					  <option <?php if(!empty($row['time_spent']) && $row['time_spent']=='>3hrs <5hrs' ){echo 'SELECTED';}?> value=">3hrs <5hrs">  > 3 hours < 5 hours</option>
					  <option <?php if(!empty($row['time_spent']) && $row['time_spent']=='>5hrs <8hrs' ){echo 'SELECTED';}?> value=">5hrs <8hrs"> > 5 hours < 8 hours</option>
					</select>
					<span id="mem_spantime_spent" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
			   </div> 
			</div>
			
			<div class="row_split">
				<div class="span5">
				  <label>Business Structure:</label>
				</div>
				<div class="span7">
				  <select name="business_structure" id="mem_business_structure" class="pull-left">
					  <option value="">--select--</option>
					  <option <?php if(!empty($row['business_structure']) && $row['business_structure']=='Sole Proprietorship' ){echo 'SELECTED';}?>   value="Sole Proprietorship">Sole Proprietorship</option>
					  <option <?php if(!empty($row['business_structure']) && $row['business_structure']=='Partnership' ){echo 'SELECTED';}?>   value="Partnership">Partnership</option>
					  <option <?php if(!empty($row['business_structure']) && $row['business_structure']=='S Corporation' ){echo 'SELECTED';}?>   value="S Corporation">"S" Corporation</option>
					  <option <?php if(!empty($row['business_structure']) && $row['business_structure']=='C Corporation' ){echo 'SELECTED';}?>   value="C Corporation">"C" Corporation</option>
					  <option <?php if(!empty($row['business_structure']) && $row['business_structure']=='LLC' ){echo 'SELECTED';}?>   value="LLC">LLC</option>
					  <option <?php if(!empty($row['business_structure']) && $row['business_structure']=='Not-for-profit' ){echo 'SELECTED';}?>   value="Not-for-profit">Not-for-profit</option>
				   </select>
				   <span id="mem_spanbusiness_structure" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
			   </div> 
			</div>

			<div class="row_split">
			   <div class="span5">
				  <label>Counselor's Name:</label>
				</div>
				<div class="span7">
				  <input type="text" name="counselor_name" id="mem_counselor_name" class="pull-left" value="<?php if(!empty($row['counselor_name'])){echo $row['counselor_name'];}?>" />
				  <span id="mem_counselor_name" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
			   </div>
			</div>
		
			<div id="mem_percentage_business_div">
				<div class="row_split">
				   <div class="span5">
					  <label>Percentage of business that's  woman/minority owned?</label>
					</div>
					<div class="span7">
					  <input type="text" name="percentageofbusiness" id="mem_percentageofbusiness" class="pull-left" value="<?php if(!empty($row['percentageofbusiness'])){echo $row['percentageofbusiness'];}?>" />
					  <span id="mem_spanpercentageofbusiness" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
				   </div>
				</div>
				<?php 
					if(!empty($row['percentageofbusiness'])){
						$per_num = str_replace("%","",$row['percentageofbusiness']);
					}
				?>
				<div class="row_split" style="width:505px; margin-left:30px; <?php if($per_num == 100){ ?>display: none; <?php } ?>" id="mem_percentage_business_other_div">
				<?php 
				$per_first_name_data 			 = unserialize($row['per_first_name']);
				$per_last_name_data 			 = unserialize($row['per_last_name']);
				$per_email_data      			 = unserialize($row['per_email']);
				$per_phone_num_data  			 = unserialize($row['per_phone_num']);
				$child_percentageofbusiness_data = unserialize($row['child_percentageofbusiness']);
				if (is_array($child_percentageofbusiness_data)) {
					for($per=0; $per<count($child_percentageofbusiness_data); $per++){
				?>
					<table id="address_per">
						<tr>
							<td class="td_label">
								<div class="span5" style="width:62px; margin-left:5px;">
									<label>First Name:</label>
								</div>
							</td>
							<td class="td_field">
								<div class="span7" style="width:150px; margin-left:0px;">
									<input type="text" class="pull-left" name="per_first_name[]" id="mem_per_first_name" value="<?php if(!empty($per_first_name_data[$per])){echo $per_first_name_data[$per];}?>" style="width:160px; margin-bottom:2px;" />
								</div>
							</td>
							<td class="td_label">
								<div class="span5" style="width:62px; margin-left:5px;">
									<label>Last Name:</label>
								</div>
							</td>
							<td class="td_field">
								<div class="span7" style="width:150px; margin-left:0px;">
									<input type="text" class="pull-left" name="per_last_name[]" id="mem_per_last_name" value="<?php if(!empty($per_last_name_data[$per])){echo $per_last_name_data[$per];}?>" style="width:160px; margin-bottom:2px;" />
								</div>
							</td>
						</tr>
						<tr>
							<td class="td_label">
								<div class="span5" style="width:62px; margin-left:5px;">
									<label>Email:</label>
								</div>
							</td>
							<td class="td_field">
								<div class="span7" style="width:150px; margin-left:0px;">
									<input type="text" class="pull-left" name="per_email[]" id="mem_per_email" value="<?php if(!empty($per_email_data[$per])){echo $per_email_data[$per];}?>" style="width:160px; margin-bottom:2px;" />
								</div>
							</td>
							<td class="td_label">
								<div class="span5" style="width:62px; margin-left:5px;">
									<label>Phone Number:</label>
								</div>
							</td>
							<td class="td_field">
								<div class="span7" style="width:150px; margin-left:0px;">
									<input type="text" class="pull-left" name="per_phone_num[]" id="mem_per_phone_num" value="<?php if(!empty($per_phone_num_data[$per])){echo $per_phone_num_data[$per];}?>" style="width:160px; margin-bottom:2px;" />
								</div>
							</td>
						</tr>
						<tr>
							<td class="td_label">
								<div class="span5" style="width:62px; margin-left:5px;">
									<label>Percentage:</label>
								</div>
							</td>
							<td class="td_field">
								<div class="span7" style="width:150px; margin-left:0px;">
									<input type="text" class="pull-left" name="child_percentageofbusiness[]" id="mem_child_percentageofbusiness" value="<?php if(!empty($child_percentageofbusiness_data[$per])){echo $child_percentageofbusiness_data[$per];}?>" style="width:160px; margin-bottom:2px;" />
								</div>
							</td>
							<td colspan="2" <?php if($per>0){ ?> id="mem_percentage_close" <?php }else{ ?> id="mem_add_plus" <?php } ?>><?php if($per>0){ ?><img style="float:right;cursor: pointer;" src="img/closebox.png" onClick="mem_sub_per_each_func(<?php echo $per; ?>)" /><?php } ?></td>
						</tr>
					</table>
				<?php
					}
				}
				?>	
				</div>
			</div>
			
			<div class="row_split">
			   <div class="span5">
				  <label>Services Provided:</label>
				</div>
				<div class="span7">
				  <select name="services_provided" id="mem_services_provided" class="pull-left">
					  <option value="">--select--</option>
					  <option <?php if(!empty($row['services_provided']) && $row['services_provided']=='In Person' ){echo 'SELECTED';}?>   value="In Person">In Person</option>
					  <option <?php if(!empty($row['services_provided']) && $row['services_provided']=='Telephone' ){echo 'SELECTED';}?>   value="Telephone">Telephone</option>
					  <option <?php if(!empty($row['services_provided']) && $row['services_provided']=='E-mail' ){echo 'SELECTED';}?>   value="E-mail">E-mail</option>
					  <option <?php if(!empty($row['services_provided']) && $row['services_provided']=='Other' ){echo 'SELECTED';}?>   value="Other">Other</option>
				   </select>
				   <span id="mem_spanservices_provided" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
			   </div> 
			</div>

			<div class="row_split" id="mem_services_provided_other_div" style="display: none; float:right; margin-right:110px;">
				<input type="text" name="services_provided_other_in" id="mem_services_provided_other_in" class="pull-left" value="<?php if(!empty($row['services_provided_other_in'])){echo $row['services_provided_other_in'];}?>" />
				<span id="mem_spanservices_provided_other_in" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
			</div>

			<div class="row_split">
			   <div class="span5">
				  <label>Client's Signature:</label>
				</div>
				<div class="span7">
				  <input type="file" name="client_signature" id="client_signature" class="pull-left" />
				</div>
			</div>
		  <center>
		  <div class="span8 row">
			 <br />
			  <input type="submit" name="intakeform" id="mem_intakeform" class="btn btn-large" style="height:26px; padding:1px; font-size:18px; font-weight:bold; width:80px;" value="Submit">
			  <input type="button" class="btn btn-large" type="cancel" style="height:26px; padding:1px; font-size:18px; font-weight:bold; width:80px;" value="Cancel" />
			  
		  </div></center>
			
			
	  </div>	
   </div>		 
</div>  
</div>
