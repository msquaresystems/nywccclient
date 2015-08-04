<?php
include('../config.php');
$clientIID =  $_GET['cntid'];
$getEditMemberQuery   = mysql_query("SELECT * FROM intake WHERE id='".$clientIID."'");
$row=mysql_fetch_array($getEditMemberQuery);
?>

<div class="hero-unit" style="height:auto; overflow:hidden; position:relative; display:block;">
	<div class="span12">
		<p style="font-weight:bold;margin-bottom:30px; width:1030px;">UPDATE CLIENT DETAILS</p>
		<div class="span12 row" id="validation_errors" style="font-size:12px; font-weight:bold; margin-left:-10px;color:red;" align="center"></div>
			<div class="row_head">            
				<div class="row">
					<input type="hidden" name="membership_id" value="<?php if(!empty($row['id'])){echo $row['id'];}?>" />		
					<div class="row_split">
						<div class="span5">
						  <label>First Name:</label>
						</div>
						<div class="span7">
							<input type="text" name="first_name" id="first_name" class="pull-left" value="<?php if(!empty($row['first_name'])){echo $row['first_name'];}?>" />
							<span id="spanfirst_name" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>

					<div class="row_split">
						<div class="span5">
						  <label>Last Name:</label>
						</div>
						<div class="span7">
							<input type="text" name="last_name" id="last_name" class="pull-left" value="<?php if(!empty($row['last_name'])){echo $row['last_name'];}?>" />
							<span id="spanlast_name" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>

					<div class="row_split">
						<div class="span5">
						  <label>Email:</label>
						</div>
						<div class="span7">
						  <input type="text" name="email" id="email" class="pull-left" value="<?php if(!empty($row['email'])){echo $row['email'];}?>" />
						 <span id="spanemail" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>
					
					<div class="row_split">
						<div class="span5">
						  <label>Gender:</label>
						</div>
						<div class="span7">
							<label class="radio" style="width:100px;">
							<input type="radio" name="gender" id="gender1" value="Male" <?php if(!empty($row['gender']) && $row['gender']=='Male' ){echo 'CHECKED';}?> />Male</label>
							<label class="radio" style="width:100px;">
							<input type="radio" name="gender" id="gender2" value="Female" <?php if(!empty($row['gender']) && $row['gender']=='Female' ){echo 'CHECKED';}?> />Female</label>
							 <span id="spangender" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						 </div>	
					</div>
					
					<div class="row_split" id="age_div">
						 <div class="span5">
						  <label>Age:</label>
						 </div>
						 <div class="span7">
						  <select name="age" id="age" class="pull-left">
							  <option value="">--select--</option>
							  <option <?php if(!empty($row['age']) && $row['age']=='Under 25' ){echo 'SELECTED';}?> value="Under 25"> >Under 25</option>
							  <option <?php if(!empty($row['age']) && $row['age']=='25-30' ){echo 'SELECTED';}?> value="25-30"> >25-30</option>
							  <option <?php if(!empty($row['age']) && $row['age']=='31-40' ){echo 'SELECTED';}?> value="31-40"> >31-40</option>
							  <option <?php if(!empty($row['age']) && $row['age']=='41-50' ){echo 'SELECTED';}?> value="41-50"> >41-50</option>
							  <option <?php if(!empty($row['age']) && $row['age']=='51-60' ){echo 'SELECTED';}?> value="51-60"> >51-60</option>
							  <option <?php if(!empty($row['age']) && $row['age']=='61+' ){echo 'SELECTED';}?> value="61+"> >61+</option>
						  </select>
						  <span id="spanage" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						 </div>
					</div>

					<div class="row_split" id="education_div">
						<div class="span5">
						  <label>Education:</label>
						</div>
						<div class="span7">
						  <select name="education" id="education" class="pull-left">
							  <option value="">--select--</option>
							  <option <?php if(!empty($row['education']) && $row['education']=='Grade Scholl/Junior High' ){echo 'SELECTED';}?> value="Grade Scholl/Junior High">Grade Scholl/Junior High</option>
							  <option <?php if(!empty($row['education']) && $row['education']=='High Scholl/GED' ){echo 'SELECTED';}?> value="High Scholl/GED">High Scholl/GED</option>
							  <option <?php if(!empty($row['education']) && $row['education']=='2Yr.College/Trade School' ){echo 'SELECTED';}?> value="2Yr.College/Trade School"> 2Yr.College/Trade School</option>
							  <option <?php if(!empty($row['education']) && $row['education']=='4Yr.College' ){echo 'SELECTED';}?> value="4Yr.College"> >4Yr.College</option>
							  <option <?php if(!empty($row['education']) && $row['education']=='Graduate School' ){echo 'SELECTED';}?> value="Graduate School">Graduate School</option>
						  </select>
						  <span id="spaneducation" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>	
					</div>

					<div class="row_split">
						<div class="span5">
						  <label>Race and Ethnicity:</label>
						</div>
						<div class="span7">
						   <select name="race_ethnicity" id="race_ethnicity" class="pull-left">
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
						  <span id="spanrace_ethnicity" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>
					<div class="row_split" id="race_ethnicity_other_div" style="display: none; float:right; margin-right:110px;">
						<input type="text" name="race_ethnicity_other_in" id="race_ethnicity_other_in" class="pull-left" value="<?php if(!empty($row['race_ethnicity_other_in'])){echo $row['race_ethnicity_other_in'];}?>" />
						<span id="spanrace_ethnicity_other_in" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
					</div>

					<div class="row_split">
						<div class="span5">
						  <label>Do you have health insurance coverage?</label>
						 </div>
						<div class="span7">
							<label class="radio">
							<input type="radio" name="health_insurance" id="health_insurance1" value="yes" <?php if(!empty($row['health_insurance']) && $row['health_insurance']=='yes' ){echo 'CHECKED';}?> />Yes</label>
							<label class="radio">
							<input type="radio" name="health_insurance" id="health_insurance2" value="no" <?php if(!empty($row['health_insurance']) && $row['health_insurance']=='no' ){echo 'CHECKED';}?> />No</label>
							<span id="spanhealth_insurance" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						 </div>	
					</div>
					
					<div class="row_split" id="annual_income_div">
						<div class="span5">
						  <label>Annual Household Income:</label>
						</div>
						<div class="span7">
							<select name="annual_income" id="annual_income" class="pull-left">
							  <option value="">--select--</option>
							  <option <?php if(!empty($row['annual_income']) && $row['annual_income']=='Less than $20k per yr' ){echo 'SELECTED';}?> value="Less than $20k per yr">Less than $20k per yr</option>
							  <option <?php if(!empty($row['annual_income']) && $row['annual_income']=='$50k to $80k per yr' ){echo 'SELECTED';}?> value="$50k to $80k per yr">$50k to $80k per yr</option>
							  <option <?php if(!empty($row['annual_income']) && $row['annual_income']=='$21k to $50k per yr' ){echo 'SELECTED';}?> value="$21k to $50k per yr">$21k to $50k per yr</option>
							  <option <?php if(!empty($row['annual_income']) && $row['annual_income']=='Over $80k' ){echo 'SELECTED';}?> value="Over $80k"> >Over $80k</option>
							</select>
						    <span id="spanannual_income" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>	
					</div>

					<div class="row_split">
						 <div class="span5">
						  <label>Is English your primary language?</label>
						 </div>
						 <div class="span7">
							<label class="radio">
							<input type="radio" name="primary_language" id="primary_language1" value="yes" <?php if(!empty($row['primary_language']) && $row['primary_language']=='yes' ){echo 'CHECKED';}?> />Yes</label>
							<label class="radio">
							<input type="radio" name="primary_language" id="primary_language2" value="no" <?php if(!empty($row['primary_language']) && $row['primary_language']=='no' ){echo 'CHECKED';}?> />No</label>
							<span id="spanprimary_language" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						  </div>	
					</div>

					<div id="primary_language_other_div" style="display: none; float:right; margin-right:110px;">
						<input type="text" name="primary_language_other_in" id="primary_language_other_in" class="pull-left" value="<?php if(!empty($row['primary_language_other_in'])){echo $row['primary_language_other_in'];}?>" />
						<span id="spanprimary_language_other_in" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
					</div>
					
					<div class="row_split" id="business_name_div">
						  <div class="span5">
						  <label>Business Name:</label>
						  </div>
						  <div class="span7">
						  <input type="text" name="business_name" id="business_name" class="pull-left" value="<?php if(!empty($row['business_name'])){echo $row['business_name'];}?>" />
						  <span id="spanbusiness_name" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						  </div>
					</div>

					<div class="row_split">
						  <div class="span5">
						   <label>Time in Business:</label>
						  </div>
						  <div class="span7">
							<select name="time_in_business" id="time_in_business" class="pull-left">
							  <option   value="">--select--</option>
							  <option <?php if(!empty($row['time_in_business']) && $row['time_in_business']=='Existing (More than 2 yrs)' ){echo 'SELECTED';}?>  value="Existing (More than 2 yrs)" >Existing (More than 2 yrs)</option>
							  <option <?php if(!empty($row['time_in_business']) && $row['time_in_business']=='StartUp (Less than 2 yrs)' ){echo 'SELECTED';}?>  value="StartUp (Less than 2 yrs)" >StartUp (Less than 2 yrs)</option>
							  <option <?php if(!empty($row['time_in_business']) && $row['time_in_business']=='Aspiring (Not yet created)' ){echo 'SELECTED';}?>  value="Aspiring (Not yet created)" >Aspiring (Not yet created)</option>
							</select>
							<span id="spantime_in_business" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						  </div>
					</div>
				</div>

				<div class="row">

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
						  <input type="text" name="physical_address" id="physical_address" class="pull-left" value="<?php if(!empty($row['physical_address'])){echo $row['physical_address'];}?>" />
						  <span id="spanphysical_address" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
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
										<input type="text" class="pull-left" name="physical_address1" id="physical_address1" value="<?php if(!empty($row['physical_address1'])){echo $row['physical_address1'];}?>" style="width:160px; margin-bottom:2px;" />
									</div>
								</td>
								<td class="td_label">
									<div class="span5" style="width:62px; margin-left:5px;">
										<label>Address2: </label>
									</div>
								</td>
								<td class="td_field">
									<div class="span7" style="width:150px; margin-left:0px;">
										<input type="text" class="pull-left" name="physical_address2" id="physical_address2" value="<?php if(!empty($row['physical_address2'])){echo $row['physical_address2'];}?>" style="width:160px; margin-bottom:2px;" />
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
										<input type="text" class="pull-left" name="physical_city" id="physical_city" value="<?php if(!empty($row['physical_city'])){echo $row['physical_city'];}?>" style="width:160px; margin-bottom:2px;" />
									</div>
								</td>
								<td class="td_label">
									<div class="span5" style="width:62px; margin-left:5px;">
										<label>State:</label>
									</div>
								</td>
								<td class="td_field">
									<div class="span7" style="width:150px; margin-left:0px;">
										<input type="text" class="pull-left" name="physical_state" id="physical_state" value="<?php if(!empty($row['physical_state'])){echo $row['physical_state'];}?>" style="width:160px; margin-bottom:2px;" />
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
										<input type="text" class="pull-left" name="physical_zip" id="physical_zip" value="<?php if(!empty($row['physical_zip'])){echo $row['physical_zip'];}?>" style="width:160px; margin-bottom:2px;" />
									</div>
								</td>
								<td class="td_label">
									<div class="span5" style="width:62px; margin-left:5px;">
										<label>Country:</label>
									</div>
								</td>
								<td class="td_field">
									<div class="span7" style="width:150px; margin-left:0px;">
										<input type="text" class="pull-left" name="physical_country" id="physical_country" value="<?php if(!empty($row['physical_country'])){echo $row['physical_country'];}?>" style="width:160px; margin-bottom:2px;" />
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
							<input type="checkbox" name="address_business_same" id="address_business_same" value="addr_busi_addr_same"></label>
						 </div>	
					</div>
					
					<div class="row_split">
						  <div class="span5">
						  <label>Business Address:</label>
						  </div>
						  <div class="span7">
						  <input type="text" name="business_address" id="business_address" class="pull-left" value="<?php if(!empty($row['business_address'])){echo $row['business_address'];}?>" />
						  <span id="spanbusiness_address" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
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
										<input type="text" class="pull-left" name="business_address1" id="business_address1" value="<?php if(!empty($row['business_address1'])){echo $row['business_address1'];}?>" style="width:160px; margin-bottom:2px;" />
									</div>
								</td>
								<td class="td_label">
									<div class="span5" style="width:62px; margin-left:5px;">
										<label>Address2:</label>
									</div>
								</td>
								<td class="td_field">
									<div class="span7" style="width:150px; margin-left:0px;">
										<input type="text" class="pull-left" name="business_address2" id="business_address2" value="<?php if(!empty($row['business_address2'])){echo $row['business_address2'];}?>" style="width:160px; margin-bottom:2px;" />
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
										<input type="text" class="pull-left" name="business_city" id="business_city" value="<?php if(!empty($row['business_city'])){echo $row['business_city'];}?>" style="width:160px; margin-bottom:2px;" />
									</div>
								</td>
								<td class="td_label">
									<div class="span5" style="width:62px; margin-left:5px;">
										<label>State:</label>
									</div>
								</td>
								<td class="td_field">
									<div class="span7" style="width:150px; margin-left:0px;">
										<input type="text" class="pull-left" name="business_state" id="business_state" value="<?php if(!empty($row['business_state'])){echo $row['business_state'];}?>" style="width:160px; margin-bottom:2px;" />
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
										<input type="text" class="pull-left" name="business_zip" id="business_zip" value="<?php if(!empty($row['business_zip'])){echo $row['business_zip'];}?>" style="width:160px; margin-bottom:2px;" />
									</div>
								</td>
								<td class="td_label">
									<div class="span5" style="width:62px; margin-left:5px;">
										<label>Country:</label>
									</div>
								</td>
								<td class="td_field">
									<div class="span7" style="width:150px; margin-left:0px;">
										<input type="text" class="pull-left" name="business_country" id="business_country" value="<?php if(!empty($row['business_country'])){echo $row['business_country'];}?>" style="width:160px; margin-bottom:2px;" />
									</div>
								</td>
							</tr>
						</table>
					</div>


					<div class="row_split">
						<div class="span5">
						  <label>Fax:</label>
						 </div>
						<div class="span7">
						  <input type="text" name="fax" id="fax"  class="pull-left" value="<?php if(!empty($row['fax'])){echo $row['fax'];}?>" />
						  <span id="spanfax" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>
					
					<div class="row_split">
						<div class="span5">
						  <label>Website:</label>
						</div>
						<div class="span7">
						  <input type="text" name="website" id="website"  class="pull-left" value="<?php if(!empty($row['website'])){echo $row['website'];}?>" />
						  <span id="spanwebsite" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>
	
				</div>
		    </div>	
	</div>  
</div>

<?php
if(!empty($row['typeofbusiness'])){
$Split_Business = explode(',',$row['typeofbusiness']);
}
?>

<h4>Type Of Business</h4>
<br>
<div class="hero-unit" style="min-height:50px; height:auto; overflow:hidden; position:relative; display:block;">
	<div class="span12 type_business" id="typeofbusiness">
		   <div class="row">
			  <div class="span2">
				<label class="checkbox">
				<input type="checkbox" <?php if(!empty($Split_Business) && in_array('Designer' ,$Split_Business)){echo 'CHECKED';}?> name="typeofbusiness[]" id="designer" value="Designer">Designer</label>
			  </div>
			  <div class="span2">
				<label class="checkbox">
				<input type="checkbox" <?php if(!empty($Split_Business) && in_array('Manufacturer' ,$Split_Business)){echo 'CHECKED';}?> name="typeofbusiness[]" id="manufacturer" value="Manufacturer">Manufacturer</label>
			  </div>
			  <div class="span2">
				<label class="checkbox">
				<input type="checkbox" <?php if(!empty($Split_Business) && in_array('Distributor' ,$Split_Business)){echo 'CHECKED';}?> name="typeofbusiness[]" id="distributor" value="Distributor">Distributor</label>  
			  </div>
			  <div class="span2">
				<label class="checkbox">
				<input type="checkbox" <?php if(!empty($Split_Business) && in_array('Mail Order' ,$Split_Business)){echo 'CHECKED';}?> name="typeofbusiness[]" id="mail_order" value="Mail Order">Mail Order</label>
			  </div>
			  <div class="span2">
				<label class="checkbox">
				<input type="checkbox" <?php if(!empty($Split_Business) && in_array('Street Vendor' ,$Split_Business)){echo 'CHECKED';}?> name="typeofbusiness[]" id="street_vendor" value="Street Vendor">Street Vendor</label>
			  </div>
			  <div class="span2">
				<label class="checkbox">
				<input type="checkbox" <?php if(!empty($Split_Business) && in_array('Retail Trade' ,$Split_Business)){echo 'CHECKED';}?> name="typeofbusiness[]" id="retail_trade" value="Retail Trade">Retail Trade</label>  
			  </div>
		   </div>   
		   <div class="row">
			  <div class="span2">
				<label class="checkbox">
				<input type="checkbox" <?php if(!empty($Split_Business) && in_array('Import/Export' ,$Split_Business)){echo 'CHECKED';}?> name="typeofbusiness[]" id="import_export" value="Import/Export">Import/Export</label>
			  </div>
			  <div class="span2">
				<label class="checkbox">
				<input type="checkbox" <?php if(!empty($Split_Business) && in_array('Not-for-Profit' ,$Split_Business)){echo 'CHECKED';}?> name="typeofbusiness[]" id="not-for-profit" value="Not-for-Profit">Not-for-Profit</label>
			  </div>
			  <div class="span2">
				<label class="checkbox">
				<input type="checkbox" <?php if(!empty($Split_Business) && in_array('Services' ,$Split_Business)){echo 'CHECKED';}?> name="typeofbusiness[]" id="services" value="Services">Services</label>  
			  </div>
			  <div class="span2">
				<label class="checkbox">
				<input type="checkbox" <?php if(!empty($Split_Business) && in_array('Wholesale Trade' ,$Split_Business)){echo 'CHECKED';}?> name="typeofbusiness[]" id="wholesale_trade" value="Wholesale Trade">Wholesale Trade</label>
			  </div>
			  <div class="span2">
				<label class="checkbox">
				<input type="checkbox" <?php if(!empty($Split_Business) && in_array('Trade Association' ,$Split_Business)){echo 'CHECKED';}?> name="typeofbusiness[]" id="trade_association" value="Trade Association">Trade Association</label>
			  </div>
			  <div class="span2">
				<label class="checkbox">
				<input type="checkbox" <?php if(!empty($Split_Business) && in_array('Other' ,$Split_Business)){echo 'CHECKED';}?> name="typeofbusiness[]" id="typeofbusiness_other_check" value="Other">Other</label>  
			  </div>
			  <span id="spantypeofbusiness" style="color:blue; font-size:12px; margin-left:25px;" class="pull-left"></span>
		   </div>  

		  <div id="typeofbusiness_other_div" style="display: none;">
				<input type="text" name="typeofbusiness_other_in" id="typeofbusiness_other_in" class="pull-left" value="<?php if(!empty($row['typeofbusiness_other_in'])){echo $row['typeofbusiness_other_in'];}?>" />
				<span id="spantypeofbusiness_other_in" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
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
<div class="span12 type_industry" id="typeofindustry">
	   <div class="row">
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array('Advertising' ,$Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" id="advertising" value="Advertising">Advertising</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array('financial' , $Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" value="financial" id="Financial">Financial</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array('Marketing' , $Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" id="marketing" value="Marketing">Marketing</label>  
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Architecture' ,$Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" id="architecture" value="Architecture">Architecture</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Fine Arts',$Split_Industry )){echo 'CHECKED';}?>  name="typeofindustry[]" id="selltogovt" value="Fine Arts">Fine Arts</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Mail Order' ,$Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" id="mail_order" value="Mail Order">Mail Order</label>  
		  </div>
	   </div> 
		 
	   <div class="row">
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Automobile' ,$Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" id="automobile" value="Automobile">Automobile</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array('Food/Beverge Service' , $Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" id="food_beverge_service" value="Food/Beverge Service">Food/Beverge Service</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array('New Media', $Split_Industry )){echo 'CHECKED';}?>  name="typeofindustry[]" id="new_media" value="New Media">New Media</label>  
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array('Beauty/Cosmetology' , $Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" id="beauty_cosmetology" value="Beauty/Cosmetology">Beauty/Cosmetology</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Furniture and Fixtures' ,$Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" id="furniture_fixtures" value="Furniture and Fixtures">Furniture and Fixtures</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Performing Arts',$Split_Industry )){echo 'CHECKED';}?>  name="typeofindustry[]" id="performing_arts" value="Performing Arts">Performing Arts</label>  
		  </div>
	   </div>
	   
	   <div class="row">
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array('Catering' , $Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" id="catering" value="Catering">Catering</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array('Fashion', $Split_Industry )){echo 'CHECKED';}?>  name="typeofindustry[]" id="fashion" value="Fashion">Fashion</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Plumbing',$Split_Industry )){echo 'CHECKED';}?>  name="typeofindustry[]" id="plumbing" value="Plumbing">Plumbing</label>  
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Chemical/Pharmaceutical' ,$Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" id="chemical_pharmaceutical" value="Chemical/Pharmaceutical">Chemical/Pharmaceutical</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Construction',$Split_Industry )){echo 'CHECKED';}?>  name="typeofindustry[]" id="construction" value="Construction">Construction</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Printing & Publishing' ,$Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" id="printing_publishing" value="Printing & Publishing">Printing & Publishing</label>  
		  </div>
	   </div> 
	   
	   <div class="row">
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Childcare',$Split_Industry )){echo 'CHECKED';}?>  name="typeofindustry[]" id="childcare" value="Childcare">Childcare</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array('healthcare' , $Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" id="healthcare" value="healthcare">Healthcare</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Personal Services' ,$Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" id="personal_services" value="Personal Services">Personal Services</label>  
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Computer',$Split_Industry )){echo 'CHECKED';}?>  name="typeofindustry[]" id="computer" value="Computer">Computer</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array('Hospitality', $Split_Industry )){echo 'CHECKED';}?>  name="typeofindustry[]" id="hospitality" value="Hospitality">Hospitality</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Real Estate',$Split_Industry )){echo 'CHECKED';}?>  name="typeofindustry[]" id="real_estate" value="Real Estate">Real Estate</label>  
		  </div>
	   </div>
	   
	   <div class="row">
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array('Education/Training', $Split_Industry )){echo 'CHECKED';}?>  name="typeofindustry[]" id="education_training" value="Education/Training">Education/Training</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Human Resources',$Split_Industry )){echo 'CHECKED';}?>  name="typeofindustry[]" id="human_resources" value="Human Resources">Human Resources</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Telecommunications' ,$Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" id="telecommunications" value="Telecommunications">Telecommunications</label>  
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Engineering' ,$Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" id="engineering" value="Engineering">Engineering</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Information Technology' ,$Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" id="information_technology" value="Information Technology">Information Technology</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Transportation',$Split_Industry )){echo 'CHECKED';}?>  name="typeofindustry[]" id="transportation" value="Transportation">Transportation</label>  
		  </div>
	   </div>
	   
	   <div class="row">
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Electrical/Electronic' ,$Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" id="electrical_electronic" value="Electrical/Electronic">Electrical/Electronic</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array('Jewelry' , $Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" id="jewelry" value="Jewelry">Jewelry</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Travel Services',$Split_Industry )){echo 'CHECKED';}?>  name="typeofindustry[]" id="travel_services" value="Travel Services">Travel Services</label>  
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Environmental' ,$Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" id="environmental" value="Environmental">Environmental</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array('Lumber' , $Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" id="lumber" value="Lumber">Lumber</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array('Flower shop/Edible' , $Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" id="flower_shop_edible" value="Flower shop/Edible">Flower shop/Edible</label>
		  </div>
	   </div> 

	   <div class="row">
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Industry) && in_array( 'Other' ,$Split_Industry)){echo 'CHECKED';}?>  name="typeofindustry[]" id="typeofindustry_other_check" value="Other">Other</label>  
		  </div>
		  <span id="spantypeofindustry" style="color:blue; font-size:12px; margin-left:25px;" class="pull-left"></span>
	   </div> 

	  <div id="typeofindustry_other_div" style="display: none;">
			<input type="text" name="typeofindustry_other_in" id="typeofindustry_other_in" class="pull-left" value="<?php if(!empty($row['typeofindustry_other_in'])){echo $row['typeofindustry_other_in'];}?>" />
			<span id="spantypeofindustry_other_in" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
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
	<div id="typeofmwbe" class="span12 type_mwbe">
		   <div class="row">
			  <div class="span2">
				<label class="checkbox">
				<input type="checkbox" <?php if(!empty($Split_MWBE) && in_array('City',$Split_MWBE) ){echo 'CHECKED';}?> name="typeofmwbe[]" id="City" value="City">City</label>
			  </div>
			  <div class="span2">
				<label class="checkbox">
				<input type="checkbox" <?php if(!empty($Split_MWBE) && in_array('State',$Split_MWBE) ){echo 'CHECKED';}?> name="typeofmwbe[]" id="State" value="State">State</label>
			  </div>
			  <div class="span2">
				<label class="checkbox">
				<input type="checkbox" <?php if(!empty($Split_MWBE) && in_array('Federal',$Split_MWBE) ){echo 'CHECKED';}?> name="typeofmwbe[]" id="Federal" value="Federal">Federal</label>  
			  </div>
			  <div class="span2">
				<label class="checkbox">
				<input type="checkbox" <?php if(!empty($Split_MWBE) && in_array('Port Authority',$Split_MWBE) ){echo 'CHECKED';}?> name="typeofmwbe[]" id="Port_Authority" value="Port Authority">Port Authority</label>
			  </div>
			  <div class="span2">
				<label class="checkbox">
				<input type="checkbox" <?php if(!empty($Split_MWBE) && in_array('Dormitory Authority',$Split_MWBE) ){echo 'CHECKED';}?> name="typeofmwbe[]" id="Dormitory_Authority" value="Dormitory Authority">Dormitory Authority</label>
			  </div>
		   </div>   
		   <div class="row">
			  <div class="span2">
				<label class="checkbox">
				<input type="checkbox" <?php if(!empty($Split_MWBE) && in_array('School of Construction',$Split_MWBE) ){echo 'CHECKED';}?> name="typeofmwbe[]" id="School_Construction" value="School of Construction">School of Construction</label>  
			  </div>
			  <div class="span2">
				<label class="checkbox">
				<input type="checkbox" <?php if(!empty($Split_MWBE) && in_array('NY/NJ Purchasing Council Others',$Split_MWBE) ){echo 'CHECKED';}?> name="typeofmwbe[]" id="NY_NJ_Purchasing_Council" value="NY/NJ Purchasing Council Others">NY/NJ Purchasing Council Others</label>
			  </div>
			  <div class="span2">
				<label class="checkbox">
				<input type="checkbox" <?php if(!empty($Split_MWBE) && in_array('Other',$Split_MWBE) ){echo 'CHECKED';}?> name="typeofmwbe[]" id="typeofmwbe_other_check" value="Other">Other</label>  
			  </div>
			  <span id="spantypeofmwbe" style="color:blue; font-size:12px; margin-left:25px;" class="pull-left"></span>
		   </div>  

		  <div id="typeofmwbe_other_div" style="display: none;">
				<input type="text" name="typeofmwbe_other_in" id="typeofmwbe_other_in" class="pull-left" value="<?php if(!empty($row['typeofmwbe_other_in'])){echo $row['typeofmwbe_other_in'];}?>" />
				<span id="typeofmwbe_other_in" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
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
<div id="services_needed" class="span12 service_need">
	   <div class="row">
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Service) && in_array('One-On-One Business Counseling',$Split_Service) ){echo 'CHECKED';}?>  name="services_needed[]" id="One-On-One_business_counseling" value="One-On-One Business Counseling">One-On-One Business Counseling</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Service) && in_array('Government Regulations',$Split_Service)){echo 'CHECKED';}?>  name="services_needed[]" id="government_regulations" value="Government Regulations" >Government Regulations</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Service) && in_array('Marketing/Promotion',$Split_Service)){echo 'CHECKED';}?>  name="services_needed[]" id="marketing_promotion" value="Marketing/Promotion">Marketing/Promotion</label>  
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Service) && in_array('Networking',$Split_Service )){echo 'CHECKED';}?>  name="services_needed[]" id="networking" value="Networking">Networking</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Service) && in_array('Financing',$Split_Service )){echo 'CHECKED';}?>  name="services_needed[]" id="financing" value="Financing">Financing</label>
		  </div>
	   </div>   
	   <div class="row">
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Service) && in_array('Export/Import',$Split_Service )){echo 'CHECKED';}?>  name="services_needed[]" id="export_import" value="Export/Import">Export/Import</label>  
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Service) && in_array('Human Resources Assistance',$Split_Service )){echo 'CHECKED';}?>  name="services_needed[]" id="human_resources_assistance" value="Human Resources Assistance">Human Resources Assistance</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Service) && in_array('Professional Development',$Split_Service )){echo 'CHECKED';}?>  name="services_needed[]" id="professional_development" value="Professional Development">Professional Development</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Service) && in_array('Business Plan Development',$Split_Service )){echo 'CHECKED';}?>  name="services_needed[]" id="business_plan_development" value="Business Plan Development">Business Plan Development</label>  
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Service) && in_array('Certification',$Split_Service )){echo 'CHECKED';}?>  name="services_needed[]" id="certification" value="Certification">Certification</label>
		  </div>
	   </div> 
	   <div class="row">
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Service) && in_array('Procurement/Government Contracts',$Split_Service )){echo 'CHECKED';}?>  name="services_needed[]" id="procurement_government_contracts" value="Procurement/Government Contracts">Procurement/Government Contracts</label>
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Service) && in_array('Business Registration',$Split_Service )){echo 'CHECKED';}?>  name="services_needed[]" id="business_registration" value="Business Registration">Business Registration</label>  
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Service) && in_array('Training',$Split_Service )){echo 'CHECKED';}?>  name="services_needed[]" id="training" value="Training">Training</label>  
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Service) && in_array('Health Insurance Coverage',$Split_Service)){echo 'CHECKED';}?>  name="services_needed[]" id="services_needed_coverage" value="Health Insurance Coverage">Health Insurance Coverage</label>  
		  </div>
		  <div class="span2">
			<label class="checkbox">
			<input type="checkbox" <?php if(!empty($Split_Service) && in_array('Other',$Split_Service )){echo 'CHECKED';}?>  name="services_needed[]" id="services_need_other_check" value="Other">Other</label>  
		  </div>
		  <span id="spanservices_needed" style="color:blue; font-size:12px; margin-left:25px;" class="pull-left"></span>
	  </div>
	  
	  <div id="services_need_other_div" style="display: none;">
			<input type="text" name="services_need_other_in" id="services_need_other_in" class="pull-left" value="<?php if(!empty($row['services_need_other_in'])){echo $row['services_need_other_in'];}?>" />
			<span id="spanservices_need_other_in" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
	  </div>
	  
</div>
</div>


<div class="hero-unit" style="height:auto; overflow:hidden; position:relative; display:block;">
<div class="span12">
  <div class="span12 row" id="validation_errors" style="font-size:12px; font-weight:bold; margin-left:-10px;color:red;" align="center"></div>
  <div class="row_head">            
		<div class="row">
			<div class="row_split">
				<div class="span5">
				  <label>Describe Services and Products Offered:</label>
				</div>
				<div class="span7">
				  <textarea rows="3" name="products_offered" id="products_offered" class="pull-left"><?php if(!empty($row['products_offered'])){echo $row['products_offered'];}?></textarea>
				  <span id="spanproducts_offered" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
				</div>
			</div>
			<div class="row_split">
				<div class="span5">
				  <label>Are you a women/Minority Owned Business?</label>
				</div>
				<div class="span7">
					<label class="radio" style="width:92px;">
					<input type="radio" name="women_minority_owned" id="women_minority_owned1" value="women_owned" <?php if(!empty($row['women_minority_owned']) && $row['women_minority_owned']=='women_owned' ){echo 'CHECKED';}?> />Women Owned</label>
					<label class="radio" style="width:95px;">
					<input type="radio" name="women_minority_owned" id="women_minority_owned2" value="minority_owned" <?php if(!empty($row['women_minority_owned']) && $row['women_minority_owned']=='minority_owned' ){echo 'CHECKED';}?> />Minority Owned</label>
					<label class="radio" style="width:95px;">
					<input type="radio" name="women_minority_owned" id="women_minority_owned3" value="none" <?php if(!empty($row['women_minority_owned']) && $row['women_minority_owned']=='none' ){echo 'CHECKED';}?> />None</label>
					<span id="spanwomen_minority_owned" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
				</div>
			</div>
			<div class="row_split">
				<div class="span5">
				  <label>Counselor's notes:</label>
				</div>
				<div class="span7">
				  <textarea rows="3" name="counselor_notes" id="counselor_notes" class="pull-left"><?php if(!empty($row['counselor_notes'])){echo $row['counselor_notes'];}?></textarea>
				  <span id="spancounselor_notes" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
				</div>
			</div>
			
			<div class="row_split">
				<div class="span5">
				  <label>Number of employees:</label>
				</div>
				<div class="span7">
				  <select name="numberofemployees" id="numberofemployees" class="pull-left">
					  <option  value="">--select--</option>
					  <option <?php if(!empty($row['numberofemployees']) && $row['numberofemployees']=='None' ){echo 'SELECTED';}?>   value="None">None</option>
					  <option <?php if(!empty($row['numberofemployees']) && $row['numberofemployees']=='1-10' ){echo 'SELECTED';}?>   value="1-10">1-10</option>
					  <option <?php if(!empty($row['numberofemployees']) && $row['numberofemployees']=='10 -25' ){echo 'SELECTED';}?>   value="10 -25">10 -25</option>
					  <option <?php if(!empty($row['numberofemployees']) && $row['numberofemployees']=='25 - 100' ){echo 'SELECTED';}?>   value="25 - 100">25 - 100</option>
					  <option <?php if(!empty($row['numberofemployees']) && $row['numberofemployees']=='50 and above' ){echo 'SELECTED';}?>   value="50 and above">50 and above</option>
				   </select>
				   <span id="spannumberofemployees" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
				</div>
			</div>
	   </div>
	 
	   <div class="row">

			<div class="row_split">
				<div class="span5">
				  <label>Time Spent:</label>
				</div>
				<div class="span7">
				  <select name="time_spent" id="time_spent" class="pull-left">
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
					<span id="spantime_spent" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
			   </div> 
			</div>
	   
			<div class="row_split">
				<div class="span5">
				  <label>Business Structure:</label>
				</div>
				<div class="span7">
				  <select name="business_structure" id="business_structure" class="pull-left">
					  <option value="">--select--</option>
					  <option <?php if(!empty($row['business_structure']) && $row['business_structure']=='Sole Proprietorship' ){echo 'SELECTED';}?>   value="Sole Proprietorship">Sole Proprietorship</option>
					  <option <?php if(!empty($row['business_structure']) && $row['business_structure']=='Partnership' ){echo 'SELECTED';}?>   value="Partnership">Partnership</option>
					  <option <?php if(!empty($row['business_structure']) && $row['business_structure']=='S Corporation' ){echo 'SELECTED';}?>   value="S Corporation">"S" Corporation</option>
					  <option <?php if(!empty($row['business_structure']) && $row['business_structure']=='C Corporation' ){echo 'SELECTED';}?>   value="C Corporation">"C" Corporation</option>
					  <option <?php if(!empty($row['business_structure']) && $row['business_structure']=='LLC' ){echo 'SELECTED';}?>   value="LLC">LLC</option>
					  <option <?php if(!empty($row['business_structure']) && $row['business_structure']=='Not-for-profit' ){echo 'SELECTED';}?>   value="Not-for-profit">Not-for-profit</option>
				   </select>
				   <span id="spanbusiness_structure" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
			   </div> 
			</div>

			<div class="row_split">
			   <div class="span5">
				  <label>Counselor's Name:</label>
				</div>
				<div class="span7">
				  <input type="text" name="counselor_name" id="counselor_name" class="pull-left" value="<?php if(!empty($row['counselor_name'])){echo $row['counselor_name'];}?>" />
				  <span id="spancounselor_name" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
			   </div>
			</div>

			<div id="percentage_business_div">
				<div class="row_split">
				   <div class="span5">
					  <label>Percentage of business that's  woman/minority owned?</label>
					</div>
					<div class="span7">
					  <input type="text" name="percentageofbusiness" id="percentageofbusiness" class="pull-left" value="<?php if(!empty($row['percentageofbusiness'])){echo $row['percentageofbusiness'];}?>" />
					  <span id="spanpercentageofbusiness" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
				   </div>
				</div>
				<?php 
					if(!empty($row['percentageofbusiness'])){
						$per_num = str_replace("%","",$row['percentageofbusiness']);
					}
				?>
				<div class="row_split" style="width:505px; margin-left:30px; <?php if($per_num == 100){ ?>display: none; <?php } ?>" id="percentage_business_other_div">
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
									<input type="text" class="pull-left" name="per_first_name[]" id="per_first_name" value="<?php if(!empty($per_first_name_data[$per])){echo $per_first_name_data[$per];}?>" style="width:160px; margin-bottom:2px;" />
								</div>
							</td>
							<td class="td_label">
								<div class="span5" style="width:62px; margin-left:5px;">
									<label>Last Name:</label>
								</div>
							</td>
							<td class="td_field">
								<div class="span7" style="width:150px; margin-left:0px;">
									<input type="text" class="pull-left" name="per_last_name[]" id="per_last_name" value="<?php if(!empty($per_last_name_data[$per])){echo $per_last_name_data[$per];}?>" style="width:160px; margin-bottom:2px;" />
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
									<input type="text" class="pull-left" name="per_email[]" id="per_email" value="<?php if(!empty($per_email_data[$per])){echo $per_email_data[$per];}?>" style="width:160px; margin-bottom:2px;" />
								</div>
							</td>
							<td class="td_label">
								<div class="span5" style="width:62px; margin-left:5px;">
									<label>Phone Number:</label>
								</div>
							</td>
							<td class="td_field">
								<div class="span7" style="width:150px; margin-left:0px;">
									<input type="text" class="pull-left" name="per_phone_num[]" id="per_phone_num" value="<?php if(!empty($per_phone_num_data[$per])){echo $per_phone_num_data[$per];}?>" style="width:160px; margin-bottom:2px;" />
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
									<input type="text" class="pull-left" name="child_percentageofbusiness[]" id="child_percentageofbusiness" value="<?php if(!empty($child_percentageofbusiness_data[$per])){echo $child_percentageofbusiness_data[$per];}?>" style="width:160px; margin-bottom:2px;" />
								</div>
							</td>
							<td colspan="2" <?php if($per>0){ ?> id="percentage_close" <?php }else{ ?> id="add_plus" <?php } ?>><?php if($per>0){ ?><img style="float:right;cursor: pointer;" src="img/closebox.png" onClick="sub_per_each_func(<?php echo $per; ?>)" /><?php } ?></td>
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
				  <select name="services_provided" id="services_provided" class="pull-left">
					  <option value="">--select--</option>
					  <option <?php if(!empty($row['services_provided']) && $row['services_provided']=='In Person' ){echo 'SELECTED';}?>   value="In Person">In Person</option>
					  <option <?php if(!empty($row['services_provided']) && $row['services_provided']=='Telephone' ){echo 'SELECTED';}?>   value="Telephone">Telephone</option>
					  <option <?php if(!empty($row['services_provided']) && $row['services_provided']=='E-mail' ){echo 'SELECTED';}?>   value="E-mail">E-mail</option>
					  <option <?php if(!empty($row['services_provided']) && $row['services_provided']=='Other' ){echo 'SELECTED';}?>   value="Other">Other</option>
				   </select>
				   <span id="spanservices_provided" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
			   </div> 
			</div>

			<div class="row_split" id="services_provided_other_div" style="display: none; float:right; margin-right:110px;">
				<input type="text" name="services_provided_other_in" id="services_provided_other_in" class="pull-left" value="<?php if(!empty($row['services_provided_other_in'])){echo $row['services_provided_other_in'];}?>" />
				<span id="spanservices_provided_other_in" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
			</div>

			<div class="row_split">
			   <div class="span5">
				  <label>Client's Signature:</label>
				</div>
				<div class="span7">
				  <input type="file" name="follow_client_signature" id="follow_client_signature" class="pull-left" />
				</div>
			</div>
		  <center>
		  <div class="span8 row">
			 <br />
			  <input type="submit" name="follow_intakeform" id="follow_intakeform" class="btn btn-large" style="height:26px; padding:1px; font-size:18px; font-weight:bold; width:80px;" value="Submit">
			  <input type="button" class="btn btn-large" type="cancel" style="height:26px; padding:1px; font-size:18px; font-weight:bold; width:80px;" value="Cancel" />
			  
		  </div></center>
			
	  </div>	
   </div>		 
</div>  
</div>
