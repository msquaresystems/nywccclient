<form name="followupform2" id="followupform2" method="POST" enctype="multipart/form-data">
	<div class="hero-unit"  style="min-height:85px; height:auto; overflow:hidden; position:relative; display:block;" >
		<div class="span12">
			<p style="font-weight:bold;margin-bottom:30px; width:1030px;">FOLLOWUP2 FORM</p>
			<div class="row_head">            
				<div class="row">
					<input type="hidden" name="clientid" value="<?php if(!empty($_REQUEST['cntid'])){echo $_REQUEST['cntid'];}?>" />	
					<div class="row_split">
						<div class="span5">
						  <label>Name:</label>
						</div>
						<div class="span7">
							<input type="text" name="f2_clientname" id="f2_clientname" class="pull-left" value="" />
							<span id="span_f2_clientname" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>

					<div class="row_split">
						<div class="span5">
						  <label>telephone:</label>
						</div>
						<div class="span7">
							<input type="text" name="f2_telephone" id="f2_telephone" class="pull-left" value="" />
							<span id="span_f2_telephone" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="row_split">
						<div class="span5">
						  <label>Business Name:</label>
						</div>
						<div class="span7">
						  <input type="text" name="f2_bname" id="f2_bname" class="pull-left" value="" />
						  <span id="span_f2_bname" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>

					<div class="row_split">
						<div class="span5">
							<label>Time Spent:</label>
						</div>
						<div class="span7">
							<select name="f2_time_spent" id="f2_time_spent" class="pull-left">
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
							<span id="span_f2_time_spent" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
					    </div>
					</div>
				</div>
			</div>	
		</div>  
	</div>
	

	<h4>Reason for Visit / Call</h4>
	<br>
	<div class="hero-unit" style="min-height:50px; height:auto; overflow:hidden; position:relative; display:block;">
		<div id="f2_breason" class="span12 f2_breason">
			<div class="row">
				<div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="f2_breason[]" id="bcounsel" value="bcounsel">One-On-One Business Counseling</label>
				</div>
				<div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="f2_breason[]" id="govtreg" value="govtreg">Government Regulations</label>
				</div>
				<div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="f2_breason[]" id="promotion" value="promotion">Marketing/Promotion</label>  
				</div>
				<div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="f2_breason[]" id="proc" value="proc">Procurement/Government Contracts</label>
				</div>
				<div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="f2_breason[]" id="financing" value="financing">Financing</label>
				</div>
			</div>   
			<div class="row">
				<div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="f2_breason[]" id="expimp" value="expimp">Export/Import</label>  
				</div>
				<div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="f2_breason[]" id="hra" value="hra">Human Resources Assistance</label>
				</div>
				<div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="f2_breason[]" id="profdev" value="profdev">Professional Development</label>  
				</div>
				<div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="f2_breason[]" id="bplandev" value="bplandev">Business Plan Development</label>
				</div>
				<div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="f2_breason[]" id="networking" value="networking">Networking</label>
				</div>
			</div>  

			<div class="row">
				<div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="f2_breason[]" id="certification" value="certification">Certification</label>
				</div>
				<div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="f2_breason[]" id="bregistration" value="bregistration">Business Registration</label>
				</div>
				<div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="f2_breason[]" id="training" value="training">Training</label>
				</div>
				<div class="span2">
					<label class="checkbox">
					<input type="checkbox" name="f2_breason[]" id="f2_breason_other_check" value="Other">Other</label>
				</div>
				<span id="span_f2_breason" style="color:blue; font-size:12px; margin-left:25px;" class="pull-left"></span>
			</div>  

			<div id="f2_breason_other_div" style="display: none;">
				<input type="text" name="f2_breason_other_in" id="f2_breason_other_in" class="pull-left" value="" />
				<span id="span_f2_breason_other_in" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
			</div>
		</div>
	</div>

	<div class="hero-unit" style="min-height:50px; height:auto; overflow:hidden; position:relative; display:block;">
        <div class="span12">
		  <div class="row_head">            
				<div class="row">
					<div class="row_split">
						<div class="span5">
						  <label>Counselor's Notes:</label>
						</div>
						<div class="span7">
						  <textarea rows="3" name="f2_counselnotes" id="f2_counselnotes" class="pull-left"></textarea>
						  <span id="span_f2_counselnotes" style="color:blue; font-size:12px; margin-top:-15px;" class="pull-left"></span>
						</div>
					</div>
			   </div>
			 
			   <div class="row">
					<div class="row_split">
					   <div class="span5">
						  <label>Client's Signature:</label>
						</div>
						<div class="span7">
						  <input type="file" name="f2_client_signature" id="f2_client_signature" class="pull-left" />
						</div>
					</div>
					<div class="row_split">
						<br />
						<div class="span8 row" style="width:200px;">
							<input type="submit" name="followupform2" id="followupform2" class="btn btn-large" style="height:26px; padding:1px; font-size:18px; font-weight:bold; width:80px;" value="Submit">
							<input type="button" class="btn btn-large" type="cancel" style="height:26px; padding:1px; font-size:18px; font-weight:bold; width:80px;" value="Cancel" />
						</div>
					</div>	
			  </div>	
		   </div>		 
		</div>  
    </div>
  </form>
