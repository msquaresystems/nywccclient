<style type="text/css">
.member{
  position:relative;
}
</style>
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


<!-- Intake Form -->
<div class="container">
    <hr>
    <h4></h4>
    <br>
    <!-- Form -->
     <form name="intakeform" id="intakeform" method="POST" enctype="multipart/form-data">
        <div class="hero-unit" style="height:auto; overflow:hidden; position:relative; display:block;">
            <div class="span12">
		  <div class="span12 row" id="validation_errors" style="font-size:12px; font-weight:bold; margin-left:-10px;color:red;" align="center"></div>
		  <div class="row_head">            
				<div class="row">
					<div class="row_split" id="membership_want_hide">
						<div class="span5">
						  <label>Do you want to become a member?</label>
						</div>
						<div class="span7">
							<label class="radio">
							<input type="radio" name="membership_want" id="membership_want1" value="yes" CHECKED />Yes</label>
							<label class="radio" style="width:100px;">
							<input type="radio" name="membership_want" id="membership_want2" value="no" />No</label>
							<span id="spanmembership_want" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						 </div>
					</div>

					<div class="row_split">
						<div class="span5">
						  <label>First Name:</label>
						</div>
						<div class="span7">
							<input type="text" name="first_name" id="first_name" class="pull-left" value="" />
							<span id="spanfirst_name" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>

					<div class="row_split">
						<div class="span5">
						  <label>Last Name:</label>
						</div>
						<div class="span7">
							<input type="text" name="last_name" id="last_name" class="pull-left" value="" />
							<span id="spanlast_name" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>

					<div class="row_split">
						<div class="span5">
						  <label>Email:</label>
						</div>
						<div class="span7">
						  <input type="text" name="email" id="email" class="pull-left" value="" />
						  <img src="img/ajax-loader.gif" class="email_loading" style="display:none; margin-top:5px;" />
						  <span id="spanemail" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>

					<div class="row_split">
						<div class="span5">
						  <label>Gender:</label>
						</div>
						<div class="span7">
							<label class="radio" style="width:100px;">
							<input type="radio" name="gender" id="gender1" value="Male" />Male</label>
							<label class="radio" style="width:100px;">
							<input type="radio" name="gender" id="gender2" value="Female" />Female</label>
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
							  <option value="Under 25"> >Under 25</option>
							  <option value="25-30"> >25-30</option>
							  <option value="31-40"> >31-40</option>
							  <option value="41-50"> >41-50</option>
							  <option value="51-60"> >51-60</option>
							  <option value="61+"> >61+</option>
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
							  <option value="Grade Scholl/Junior High">Grade Scholl/Junior High</option>
							  <option value="High Scholl/GED">High Scholl/GED</option>
							  <option value="2Yr.College/Trade School"> 2Yr.College/Trade School</option>
							  <option value="4Yr.College"> >4Yr.College</option>
							  <option value="Graduate School">Graduate School</option>
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
							  <option value="">--select--</option>
							  <option value="White">White</option>
							  <option value="Asian">Asian</option>
							  <option value="Hispanic/Latino">Hispanic/Latino</option>
							  <option value="Black/Africa American">Black/Africa American</option>
							  <option value="American Indian/Alaska Native">American Indian/Alaska Native</option>
							  <option value="Pacific Islander">Pacific Islander</option>
							  <option value="Native Hawaiian">Native Hawaiian</option>
							  <option value="Caucasian">Caucasian</option>
							  <option value="Other">Other</option>
						  </select>
						  <span id="spanrace_ethnicity" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>
					<div class="row_split" id="race_ethnicity_other_div" style="display: none; float:right; margin-right:110px;">
						<input type="text" name="race_ethnicity_other_in" id="race_ethnicity_other_in" class="pull-left" value="" />
						<span id="spanrace_ethnicity_other_in" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
					</div>

					<div class="row_split">
						<div class="span5">
						  <label>Do you have health insurance coverage?</label>
						 </div>
						<div class="span7">
							<label class="radio">
							<input type="radio" name="health_insurance" id="health_insurance1" value="yes" />Yes</label>
							<label class="radio">
							<input type="radio" name="health_insurance" id="health_insurance2" value="no" />No</label>
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
							  <option value="Less than $20k per yr">Less than $20k per yr</option>
							  <option value="$50k to $80k per yr">$50k to $80k per yr</option>
							  <option value="$21k to $50k per yr">$21k to $50k per yr</option>
							  <option value="Over $80k"> >Over $80k</option>
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
							<input type="radio" name="primary_language" id="primary_language1" value="yes" />Yes</label>
							<label class="radio">
							<input type="radio" name="primary_language" id="primary_language2" value="no" />No</label>
							<span id="spanprimary_language" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						  </div>	
					</div>

					<div id="primary_language_other_div" style="display: none; float:right; margin-right:110px;">
						<input type="text" placeholder="Primary Language Name" name="primary_language_other_in" id="primary_language_other_in" class="pull-left" value="" />
						<span id="spanprimary_language_other_in" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
					</div>

					<div class="row_split" id="business_name_div">
						  <div class="span5">
						  <label>Business Name:</label>
						  </div>
						  <div class="span7">
						  <input type="text" name="business_name" id="business_name" class="pull-left" value="" />
						  <span id="spanbusiness_name" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						  </div>
					</div>

					<div class="row_split">
						  <div class="span5">
						   <label>Time in Business:</label>
						  </div>
						  <div class="span7">
							<select name="time_in_business" id="time_in_business" class="pull-left">
							  <option value="">--select--</option>
							  <option value="Existing (More than 2 yrs)">Existing (More than 2 yrs)</option>
							  <option value="StartUp (Less than 2 yrs)">StartUp (Less than 2 yrs)</option>
							  <option value="Aspiring (Not yet created)">Aspiring (Not yet created)</option>
							</select>
							<span id="spantime_in_business" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
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
						  <input type="text" name="physical_address" id="physical_address" class="pull-left" value="" />
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
										<input type="text" class="pull-left" name="physical_address1" id="physical_address1" value="" style="width:160px; margin-bottom:2px;" />
									</div>
								</td>
								<td class="td_label">
									<div class="span5" style="width:62px; margin-left:5px;">
										<label>Address2: </label>
									</div>
								</td>
								<td class="td_field">
									<div class="span7" style="width:150px; margin-left:0px;">
										<input type="text" class="pull-left" name="physical_address2" id="physical_address2" value="" style="width:160px; margin-bottom:2px;" />
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
										<input type="text" class="pull-left" name="physical_city" id="physical_city" value="" style="width:160px; margin-bottom:2px;" />
									</div>
								</td>
								<td class="td_label">
									<div class="span5" style="width:62px; margin-left:5px;">
										<label>State:</label>
									</div>
								</td>
								<td class="td_field">
									<div class="span7" style="width:150px; margin-left:0px;">
										<input type="text" class="pull-left" name="physical_state" id="physical_state" value="" style="width:160px; margin-bottom:2px;" />
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
										<input type="text" class="pull-left" name="physical_zip" id="physical_zip" value="" style="width:160px; margin-bottom:2px;" />
									</div>
								</td>
								<td class="td_label">
									<div class="span5" style="width:62px; margin-left:5px;">
										<label>Country:</label>
									</div>
								</td>
								<td class="td_field">
									<div class="span7" style="width:150px; margin-left:0px;">
										<input type="text" class="pull-left" name="physical_country" id="physical_country" value="" style="width:160px; margin-bottom:2px;" />
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
						  <input type="text" name="business_address" id="business_address" class="pull-left" value="" />
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
										<input type="text" class="pull-left" name="business_address1" id="business_address1" value="" style="width:160px; margin-bottom:2px;" />
									</div>
								</td>
								<td class="td_label">
									<div class="span5" style="width:62px; margin-left:5px;">
										<label>Address2:</label>
									</div>
								</td>
								<td class="td_field">
									<div class="span7" style="width:150px; margin-left:0px;">
										<input type="text" class="pull-left" name="business_address2" id="business_address2" value="" style="width:160px; margin-bottom:2px;" />
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
										<input type="text" class="pull-left" name="business_city" id="business_city" value="" style="width:160px; margin-bottom:2px;" />
									</div>
								</td>
								<td class="td_label">
									<div class="span5" style="width:62px; margin-left:5px;">
										<label>State:</label>
									</div>
								</td>
								<td class="td_field">
									<div class="span7" style="width:150px; margin-left:0px;">
										<input type="text" class="pull-left" name="business_state" id="business_state" value="" style="width:160px; margin-bottom:2px;" />
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
										<input type="text" class="pull-left" name="business_zip" id="business_zip" value="" style="width:160px; margin-bottom:2px;" />
									</div>
								</td>
								<td class="td_label">
									<div class="span5" style="width:62px; margin-left:5px;">
										<label>Country:</label>
									</div>
								</td>
								<td class="td_field">
									<div class="span7" style="width:150px; margin-left:0px;">
										<input type="text" class="pull-left" name="business_country" id="business_country" value="" style="width:160px; margin-bottom:2px;" />
									</div>
								</td>
							</tr>
						</table>
					</div>


					<div class="row_split">
						 <div class="span5">
						  <label>Telephone:</label>
						 </div>
						 <div class="span7">
						  <input type="text" name="telephone" id="telephone"  class="pull-left" value="" />
						  <img src="img/ajax-loader.gif" class="telephone_loading" style="display:none; margin-top:5px;" />
						  <span id="spantelephone" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						 </div>
					</div>

					<div class="row_split">
						<div class="span5">
						  <label>Fax:</label>
						 </div>
						<div class="span7">
						  <input type="text" name="fax" id="fax"  class="pull-left" value="" />
						  <span id="spanfax" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>

					<div class="row_split">
						<div class="span5">
						  <label>Website:</label>
						</div>
						<div class="span7">
					      <input type="text" name="website" id="website"  class="pull-left" value="" />
						  <span id="spanwebsite" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>
					
				</div>
		  </div>	
		</div>  
      </div>
	  
	  <h4>Type Of Business</h4>
      <br>
      <div class="hero-unit" style="min-height:50px; height:auto; overflow:hidden; position:relative; display:block;">
        <div class="span12 type_business" id="typeofbusiness">
			   <div class="row">
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofbusiness[]" id="designer" value="Designer">Designer</label>
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofbusiness[]" id="manufacturer" value="Manufacturer">Manufacturer</label>
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofbusiness[]" id="distributor" value="Distributor">Distributor</label>  
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofbusiness[]" id="mail_order" value="Mail Order">Mail Order</label>
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofbusiness[]" id="street_vendor" value="Street Vendor">Street Vendor</label>
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofbusiness[]" id="retail_trade" value="Retail Trade">Retail Trade</label>  
				  </div>
			   </div>   
			   <div class="row">
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofbusiness[]" id="import_export" value="Import/Export">Import/Export</label>
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofbusiness[]" id="not-for-profit" value="Not-for-Profit">Not-for-Profit</label>
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofbusiness[]" id="services" value="Services">Services</label>  
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofbusiness[]" id="wholesale_trade" value="Wholesale Trade">Wholesale Trade</label>
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofbusiness[]" id="trade_association" value="Trade Association">Trade Association</label>
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofbusiness[]" id="typeofbusiness_other_check" value="Other">Other</label>  
				  </div>
				  <span id="spantypeofbusiness" style="color:blue; font-size:12px; margin-left:25px;" class="pull-left"></span>
			   </div>  

			  <div id="typeofbusiness_other_div" style="display: none;">
					<input type="text" name="typeofbusiness_other_in" id="typeofbusiness_other_in" class="pull-left" value="" />
					<span id="spantypeofbusiness_other_in" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
			  </div>
        </div>
      </div>
	  
	  

	  <h4>Type Of Industry</h4>
      <br>
      <div class="hero-unit" style="min-height:150px; height:auto; overflow:hidden; position:relative; display:block;">
        <div class="span12 type_industry" id="typeofindustry">
			   <div class="row">
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofindustry[]" id="advertising" value="Advertising">Advertising</label>
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofindustry[]" value="financial" id="Financial">Financial</label>
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofindustry[]" id="marketing" value="Marketing">Marketing</label>  
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofindustry[]" id="architecture" value="Architecture">Architecture</label>
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofindustry[]" id="selltogovt" value="Fine Arts">Fine Arts</label>
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofindustry[]" id="mail_order" value="Mail Order">Mail Order</label>  
				  </div>
			   </div> 
			     
			   <div class="row">
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofindustry[]" id="automobile" value="Automobile">Automobile</label>
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofindustry[]" id="food_beverge_service" value="Food/Beverge Service">Food/Beverge Service</label>
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofindustry[]" id="new_media" value="New Media">New Media</label>  
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofindustry[]" id="beauty_cosmetology" value="Beauty/Cosmetology">Beauty/Cosmetology</label>
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofindustry[]" id="furniture_fixtures" value="Furniture and Fixtures">Furniture and Fixtures</label>
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofindustry[]" id="performing_arts" value="Performing Arts">Performing Arts</label>  
				  </div>
			   </div>
			   
			   <div class="row">
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofindustry[]" id="catering" value="Catering">Catering</label>
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofindustry[]" id="fashion" value="Fashion">Fashion</label>
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofindustry[]" id="plumbing" value="Plumbing">Plumbing</label>  
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofindustry[]" id="chemical_pharmaceutical" value="Chemical/Pharmaceutical">Chemical/Pharmaceutical</label>
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofindustry[]" id="construction" value="Construction">Construction</label>
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofindustry[]" id="printing_publishing" value="Printing & Publishing">Printing & Publishing</label>  
				  </div>
			   </div> 
			   
			   <div class="row">
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofindustry[]" id="childcare" value="Childcare">Childcare</label>
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofindustry[]" id="healthcare" value="healthcare">Healthcare</label>
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofindustry[]" id="personal_services" value="Personal Services">Personal Services</label>  
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofindustry[]" id="computer" value="Computer">Computer</label>
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofindustry[]" id="hospitality" value="Hospitality">Hospitality</label>
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofindustry[]" id="real_estate" value="Real Estate">Real Estate</label>  
				  </div>
			   </div>
			   
			   <div class="row">
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofindustry[]" id="education_training" value="Education/Training">Education/Training</label>
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofindustry[]" id="human_resources" value="Human Resources">Human Resources</label>
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofindustry[]" id="telecommunications" value="Telecommunications">Telecommunications</label>  
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofindustry[]" id="engineering" value="Engineering">Engineering</label>
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofindustry[]" id="information_technology" value="Information Technology">Information Technology</label>
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofindustry[]" id="transportation" value="Transportation">Transportation</label>  
				  </div>
			   </div>
			   
			   <div class="row">
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofindustry[]" id="electrical_electronic" value="Electrical/Electronic">Electrical/Electronic</label>
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofindustry[]" id="jewelry" value="Jewelry">Jewelry</label>
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofindustry[]" id="travel_services" value="Travel Services">Travel Services</label>  
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofindustry[]" id="environmental" value="Environmental">Environmental</label>
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofindustry[]" id="lumber" value="Lumber">Lumber</label>
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofindustry[]" id="flower_shop_edible" value="Flower shop/Edible">Flower shop/Edible</label>
				  </div>
			   </div> 
		   
			   <div class="row">
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofindustry[]" id="typeofindustry_other_check" value="Other">Other</label>  
				  </div>
				  <span id="spantypeofindustry" style="color:blue; font-size:12px; margin-left:25px;" class="pull-left"></span>
			   </div> 
			   
			  <div id="typeofindustry_other_div" style="display: none;">
					<input type="text" name="typeofindustry_other_in" id="typeofindustry_other_in" class="pull-left" value="" />
					<span id="spantypeofindustry_other_in" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
			  </div>
        </div>
      </div>

	  

	  <h4>Type of MWBE Certification</h4>
      <br>
      <div class="hero-unit" style="min-height:50px; height:auto; overflow:hidden; position:relative; display:block;">
        <div id="typeofmwbe" class="span12 type_mwbe">
        	   <div class="row">
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofmwbe[]" id="City" value="City">City</label>
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofmwbe[]" id="State" value="State">State</label>
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofmwbe[]" id="Federal" value="Federal">Federal</label>  
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofmwbe[]" id="Port_Authority" value="Port Authority">Port Authority</label>
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofmwbe[]" id="Dormitory_Authority" value="Dormitory Authority">Dormitory Authority</label>
				  </div>
			   </div>   
			   <div class="row">
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofmwbe[]" id="School_Construction" value="School of Construction">School of Construction</label>  
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofmwbe[]" id="NY_NJ_Purchasing_Council" value="NY/NJ Purchasing Council Others">NY/NJ Purchasing Council Others</label>
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="typeofmwbe[]" id="typeofmwbe_other_check" value="Other">Other</label>  
				  </div>
				  <span id="spantypeofmwbe" style="color:blue; font-size:12px; margin-left:25px;" class="pull-left"></span>
			   </div>  

			  <div id="typeofmwbe_other_div" style="display: none;">
					<input type="text" name="typeofmwbe_other_in" id="typeofmwbe_other_in" class="pull-left" value="" />
					<span id="typeofmwbe_other_in" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
			  </div>
        </div>
      </div>


	  
	  <h4>Service(s) Needed</h4>
      <br>
      <div class="hero-unit" style="min-height:75px; height:auto; overflow:hidden; position:relative; display:block;">
        <div id="services_needed" class="span12 service_need">
			   <div class="row">
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="services_needed[]" id="One-On-One_business_counseling" value="One-On-One Business Counseling">One-On-One Business Counseling</label>
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="services_needed[]" id="government_regulations" value="Government Regulations" >Government Regulations</label>
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="services_needed[]" id="marketing_promotion" value="Marketing/Promotion">Marketing/Promotion</label>  
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="services_needed[]" id="networking" value="Networking">Networking</label>
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="services_needed[]" id="financing" value="Financing">Financing</label>
				  </div>
			   </div>   
			   <div class="row">
			   	  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="services_needed[]" id="export_import" value="Export/Import">Export/Import</label>  
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="services_needed[]" id="human_resources_assistance" value="Human Resources Assistance">Human Resources Assistance</label>
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="services_needed[]" id="professional_development" value="Professional Development">Professional Development</label>
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="services_needed[]" id="business_plan_development" value="Business Plan Development">Business Plan Development</label>  
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="services_needed[]" id="certification" value="Certification">Certification</label>
				  </div>
			   </div> 
			   <div class="row">
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="services_needed[]" id="procurement_government_contracts" value="Procurement/Government Contracts">Procurement/Government Contracts</label>
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="services_needed[]" id="business_registration" value="Business Registration">Business Registration</label>  
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="services_needed[]" id="training" value="Training">Training</label>  
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="services_needed[]" id="health_insurance_coverage" value="Health Insurance Coverage">Health Insurance Coverage</label>  
				  </div>
				  <div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="services_needed[]" id="services_need_other_check" value="Other">Other</label>  
				  </div>
				  <span id="spanservices_needed" style="color:blue; font-size:12px; margin-left:25px;" class="pull-left"></span>
			  </div>
			  
			  <div id="services_need_other_div" style="display: none;">
					<input type="text" name="services_need_other_in" id="services_need_other_in" class="pull-left" value="" />
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
						  <textarea rows="3" name="products_offered" id="products_offered" class="pull-left"></textarea>
						  <span id="spanproducts_offered" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>
					<div class="row_split">
						<div class="span5">
						  <label>Are you a women/Minority Owned Business?</label>
						</div>
						<div class="span7">
							<label class="radio" style="width:92px;">
							<input type="radio" name="women_minority_owned" id="women_minority_owned1" value="women_owned" />Women Owned</label>
							<label class="radio" style="width:95px;">
							<input type="radio" name="women_minority_owned" id="women_minority_owned2" value="minority_owned" />Minority Owned</label>
							<label class="radio" style="width:95px;">
							<input type="radio" name="women_minority_owned" id="women_minority_owned3" value="none" />None</label>
							<span id="spanwomen_minority_owned" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>
					<div class="row_split">
						<div class="span5">
						  <label>Counselor's notes:</label>
						</div>
						<div class="span7">
						  <textarea rows="3" name="counselor_notes" id="counselor_notes" class="pull-left"></textarea>
						  <span id="spancounselor_notes" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>
					<div class="row_split">
						<div class="span5">
						  <label>Number of employees:</label>
						</div>
						<div class="span7">
						  <select name="numberofemployees" id="numberofemployees" class="pull-left">
							  <option value="">--select--</option>
							  <option value="None">None</option>
							  <option value="1-10">1-10</option>
							  <option value="10 -25">10 -25</option>
							  <option value="25 - 100">25 - 100</option>
							  <option value="50 and above">50 and above</option>
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
							  <option value="15mins">15 minutes</option>
							  <option value="30mins">30 minutes</option>
							  <option value="45mins"> 45 minutes</option>
							  <option value="1hr"> 1 hour</option>
							  <option value="1hr30mins">  1 hour 30 minutes</option>
							  <option value="2hr">  2 hour</option>
							  <option value="2hr30mins"> 2 hour and 30 minutes</option>
							  <option value="morethan 3hrs"> more than 3 hours</option>
							  <option value=">3hrs <5hrs">  > 3 hours < 5 hours</option>
							  <option value=">5hrs <8hrs"> > 5 hours < 8 hours</option>
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
							  <option value="Sole Proprietorship">Sole Proprietorship</option>
							  <option value="Partnership">Partnership</option>
							  <option value="S Corporation">"S" Corporation</option>
							  <option value="C Corporation">"C" Corporation</option>
							  <option value="LLC">LLC</option>
							  <option value="Not-for-profit">Not-for-profit</option>
						   </select>
						   <span id="spanbusiness_structure" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
					   </div> 
					</div>

					<div class="row_split">
					   <div class="span5">
						  <label>Counselor's Name:</label>
						</div>
						<div class="span7">
						  <input type="text" name="counselor_name" id="counselor_name" class="pull-left" value="" />
						  <span id="spancounselor_name" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
					   </div>
					</div>
					<div id="percentage_business_div">
						<div class="row_split">
						   <div class="span5">
							  <label>Percentage of business that's  woman/minority owned?</label>
							</div>
							<div class="span7">
							  <input type="text" name="percentageofbusiness" id="percentageofbusiness" class="per_input pull-left" value="" />
							  <span id="spanpercentageofbusiness" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						   </div>
						</div>
						
						<div class="row_split" style="width:505px; margin-left:30px; display: none;" id="percentage_business_other_div">
						</div>
					</div>	
					
					<div class="row_split">
					   <div class="span5">
						  <label>Services Provided:</label>
						</div>
						<div class="span7">
						  <select name="services_provided" id="services_provided" class="pull-left">
							  <option value="">--select--</option>
							  <option value="In Person">In Person</option>
							  <option value="Telephone">Telephone</option>
							  <option value="E-mail">E-mail</option>
							  <option value="Other">Other</option>
						   </select>
						   <span id="spanservices_provided" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
					   </div> 
					</div>

					<div class="row_split" id="services_provided_other_div" style="display: none; float:right; margin-right:110px;">
						<input type="text" name="services_provided_other_in" id="services_provided_other_in" class="pull-left" value="" />
						<span id="spanservices_provided_other_in" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
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
					  <input type="submit" name="intakeform" id="intakeform" class="btn btn-large" style="height:26px; padding:1px; font-size:18px; font-weight:bold; width:80px;" value="Submit">
					  <input type="button" class="btn btn-large" type="cancel" style="height:26px; padding:1px; font-size:18px; font-weight:bold; width:80px;" value="Cancel" />
					  
				  </div></center>
					
					
			  </div>	
		   </div>		 
		</div>  
      </div>
		<div style=" height:80px; background-color:#D1A345;">
			<div style="float:right;">
				<a href="http://www.msquaresystems.com/" target="_blank"><p style=" margin-right:20px; margin-top:5px; margin-bottom:0px;background-attachment: scroll;background-clip: border-box;background-color: rgba(0, 0, 0, 0); background-image: url('img/m2systems_logo.png'); background-origin: padding-box; background-repeat: no-repeat; background-size: 200px auto; height:48px; width:200px;"></p></a>
				<p style=" margin-right:20px;margin-bottom:0px; font-size:13px; color:#000;">powered by M-Square Systems Inc.</p>
			</div>
		</div>
    
  </form>
</div>



<script type="text/javascript" src="js/bootstrap.min.js"></script> 

<script src="js/jquery.ui.addresspicker.js"></script>

<script type="text/javascript">
$('#timepicker1').timepicker();
</script>
