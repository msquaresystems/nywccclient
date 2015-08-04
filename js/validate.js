$(document).ready(function()
{
  $("#cellno").mask("(999) 999-9999");
});
$(document).ready(function()
{
  $("#homephone").mask("(999) 999-9999");
});
$(document).ready(function()
{
  $("#workphone").mask("(999) 999-9999");
});

/*Intake Signature upload*/	
var valuesToSubmit;
var input = document.getElementById("client_signature"),
valuesToSubmit = new FormData(); 
input.addEventListener("change", function (evt) {
	var i = 0, len = this.files.length, img, reader, file;
	for ( ; i < len; i++ ) {
		file = this.files[i];
			
		if (valuesToSubmit) {
			valuesToSubmit.append("client_signature[]", file);
		}
	}
}, false);


/*Form Submit*/
$("#intakeform").submit(function(e) {
	e.preventDefault();
	var membership_want                	= $('input[name=membership_want]:checked').val();
	var firstname             			= $("#first_name").val();
	var lastname             			= $("#last_name").val();
	var email            				= $("#email").val();
    var gender		     				= $('input[name=gender]:checked').val();
    var age              				= $("#age").val();
    var education						= $("#education").val();
    var race_ethnicity					= $("#race_ethnicity").val();
    var race_ethnicity_other_in			= $("#race_ethnicity_other_in").val();  
    var health_insurance				= $('input[name=health_insurance]:checked').val();
	var primary_language                = $('input[name=primary_language]:checked').val();
	var primary_language_other_in		= $("#primary_language_other_in").val();
    var business_name					= $("#business_name").val();
    var time_in_business				= $("#time_in_business").val();
    var physical_address				= $("#physical_address").val();
    var physical_address1				= $("#physical_address1").val();
    var physical_city					= $("#physical_city").val();
    var physical_state					= $("#physical_state").val();
    var physical_zip					= $("#physical_zip").val();
    var business_address				= $("#business_address").val();
    var business_address1				= $("#business_address1").val();
    var business_city					= $("#business_city").val();
    var business_state					= $("#business_state").val();
    var business_zip					= $("#business_zip").val();
    var telephone        				= $("#telephone").val();
    var fax								= $("#fax").val();
    var website          				= $("#website").val();
    var typeofbusiness					= $("#typeofbusiness input:checked").length;    
    var typeofbusiness_other            = $("#typeofbusiness_other_check input:checked").val();    
    var typeofbusiness_other_in			= $("#typeofbusiness_other_in").val();    
    var typeofindustry					= $("#typeofindustry input:checked").length;    
    var typeofindustry_other_in			= $("#typeofindustry_other_in").val();    
    var typeofmwbe				 		= $("#typeofmwbe input:checked").length;    
    var typeofmwbe_other_in				= $("#typeofmwbe_other_in").val();    
    var services_needed					= $("#services_needed input:checked").length;    
    var services_need_other_in			= $("#services_need_other_in").val();    
    var products_offered				= $("#products_offered").val();    
    var women_minority_owned			= $('input[name=women_minority_owned]:checked').val();    
    var counselor_notes					= $("#counselor_notes").val();    
    var numberofemployees				= $("#numberofemployees").val();    
    var time_spent						= $("#time_spent").val();    
    var business_structure				= $("#business_structure").val();    
    var counselor_name			    	= $("#counselor_name").val();    
    var percentageofbusiness			= $("#percentageofbusiness").val();    
    var services_provided				= $("#services_provided").val();    
    var services_provided_other_in		= $("#services_provided_other_in").val();    
	var email_regex 					= /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	var fax_regex	 					= /^[0-9 \-\s \( \)]*$/;

	
	/* 	function validateFax(checkField) {
		if (checkField.value.length > 0) {
			var faxRegEx = /[\+? *[1-9]+]?[0-9 ]+/;
			if (!checkField.value.match(faxRegEx)) {
				return false;
			}
		}
		return true;
	}
	 */	
	
	var validate_error = [];

	/*first name*/
	if(firstname == '')
    {
      $("#spanfirst_name").css('display','block');
      $("#spanfirst_name").html("Enter the fisrt name");
      $("#first_name").val('');
      $("#first_name").focus();
	  validate_error[0] = 'no';
    }else{
      $("#spanfirst_name").css('display','none');
	  validate_error[0] = 'yes';
	}

	/*last name*/
	if(lastname == '')
    {
      $("#spanlast_name").css('display','block');
      $("#spanlast_name").html("Enter the last name");
      $("#last_name").val('');
      $("#last_name").focus();
	  validate_error[1] = 'no';
    }else{
      $("#spanlast_name").css('display','none');
	  validate_error[1] = 'yes';
	}
	
    /*email*/
	if(email == '')
    {
      $("#spanemail").css('display','block');
      $("#spanemail").html("Enter the email");
      $("#email").val('');
      $("#email").focus();
	  validate_error[2] = 'no';
    }else if(!email_regex.test(email)){
      $("#spanemail").css('display','block');
      $("#spanemail").html("Enter the valid email");
      $("#email").focus();
	  validate_error[2] = 'no';
	}else{
      $("#spanemail").css('display','none');
	  validate_error[2] = 'yes';
	}


    /*gender*/
	if(typeof gender === "undefined")
    {
      $("#spangender").css('display','block');
      $("#spangender").html("Select the gender");
      $("#gender").val('');
      $("#gender").focus();
	  validate_error[3] = 'no';
    }else{
      $("#spangender").css('display','none');
	  validate_error[3] = 'yes';
	}


    /*age*/
	if(age == '')
	{
	  $("#spanage").css('display','block');
	  $("#spanage").html("Select the age");
	  $("#age").val('');
	  $("#age").focus();
	  validate_error[4] = 'no';
	}else{
	  $("#spanage").css('display','none');
	  validate_error[4] = 'yes';
	}
	
    /*education*/
	if(education == '')
	{
	  $("#spaneducation").css('display','block');
	  $("#spaneducation").html("Select the education");
	  $("#education").val('');
	  $("#education").focus();
	  validate_error[5] = 'no';
	}else{
	  $("#spaneducation").css('display','none');
	  validate_error[5] = 'yes';
	}
	
    /*race_ethnicity*/
	if(race_ethnicity == '')
    {
      $("#spanrace_ethnicity").css('display','block');
      $("#spanrace_ethnicity").html("Select the race ethnicity");
      $("#race_ethnicity").val('');
      $("#race_ethnicity").focus();
	  validate_error[6] = 'no';
    }else{
      $("#spanrace_ethnicity").css('display','none');
	  validate_error[6] = 'yes';
	}

	/*race_ethnicity_other_in*/
	if(race_ethnicity == 'Other')
    {
		if(race_ethnicity_other_in == '')
		{
		  $("#spanrace_ethnicity").css('display','block');
		  $("#spanrace_ethnicity").html("Enter the race ethnicity");
		  $("#race_ethnicity_other_in").val('');
		  $("#race_ethnicity_other_in").focus();
		  validate_error[7] = 'no';
		}else{
		  $("#spanrace_ethnicity").css('display','none');
		  validate_error[7] = 'yes';
		}
	}
	
    /*health_insurance*/
	if(typeof health_insurance === "undefined")
    {
      $("#spanhealth_insurance").css('display','block');
      $("#spanhealth_insurance").html("select the health insurance");
      $("#health_insurance").val('');
      $("#health_insurance").focus();
	  validate_error[8] = 'no';
    }else{
      $("#spanhealth_insurance").css('display','none');
	  validate_error[8] = 'yes';
	}

	/*primary_language*/
	if(typeof primary_language === "undefined")
    {
      $("#spanprimary_language").css('display','block');
      $("#spanprimary_language").html("Select the primary language");
      $("#primary_language").val('');
      $("#primary_language").focus();
	  validate_error[9] = 'no';
    }else if(primary_language == 'no'){
		/*primary_language_other_in*/
		  if(primary_language_other_in == '')
		  {
			$("#spanprimary_language").css('display','block');
			$("#spanprimary_language").html("Enter the primary language");
			$("#primary_language_other_in").val('');
			$("#primary_language_other_in").focus();
			validate_error[10] = 'no';
		  }else{
			$("#spanprimary_language").css('display','none');
			validate_error[10] = 'yes';
		  }
	}else{
      $("#spanprimary_language").css('display','none');
	  validate_error[9] = 'yes';
	}

    /*business_name*/
	if(business_name == '')
	{
	  $("#spanbusiness_name").css('display','block');
	  $("#spanbusiness_name").html("Enter the business name");
	  $("#business_name").val('');
	  $("#business_name").focus();
	  validate_error[11] = 'no';
	}else{
	  $("#spanbusiness_name").css('display','none');
	  validate_error[11] = 'yes';
	}

    /*time_in_business*/
	if(time_in_business == '')
    {
      $("#spantime_in_business").css('display','block');
      $("#spantime_in_business").html("Select the time in business");
      $("#time_in_business").val('');
      $("#time_in_business").focus();
	  validate_error[12] = 'no';
    }else{
      $("#spantime_in_business").css('display','none');
	  validate_error[12] = 'yes';
	}

    /*physical address */
	if(physical_address == '')
    {
		$("#spanphysical_address").css('display','block');
		$("#spanphysical_address").html("Enter the physical address");
		$("#physical_address").val('');
		$("#physical_address").focus();
		validate_error[13] = 'no';
    }else if(physical_address1 == ''){
		$("#spanphysical_address").css('display','block');
		$("#spanphysical_address").html("Enter the valid address");
		$("#physical_address1").val('');
		$("#physical_address1").focus();
		validate_error[13] = 'no';
    }else if(physical_city == ''){
		/*physical city*/
		$("#spanphysical_address").css('display','block');
		$("#spanphysical_address").html("Enter the city");
		$("#physical_city").val('');
		$("#physical_city").focus();
		validate_error[13] = 'no';
	}else if(physical_state == ''){
		/*physical state*/
		$("#spanphysical_address").css('display','block');
		$("#spanphysical_address").html("Enter the state");
		$("#physical_state").val('');
		$("#physical_state").focus();
		validate_error[13] = 'no';
	}else if(physical_zip == ''){
		/*physical zip*/
		$("#spanphysical_address").css('display','block');
		$("#spanphysical_address").html("Enter the zip");
		$("#physical_zip").val('');
		$("#physical_zip").focus();
		validate_error[13] = 'no';
	}else{
		$("#spanphysical_address").css('display','none');
		validate_error[13] = 'yes';
	}

    /*business address */
	if(business_address == '')
    {
		$("#spanbusiness_address").css('display','block');
		$("#spanbusiness_address").html("Enter the business address");
		$("#business_address").val('');
		$("#business_address").focus();
		validate_error[14] = 'no';
    }else if(business_address1 == ''){
		$("#spanbusiness_address").css('display','block');
		$("#spanbusiness_address").html("Enter the valid address");
		$("#business_address1").val('');
		$("#business_address1").focus();
		validate_error[14] = 'no';
    }else if(physical_city == ''){
		/*physical city*/
		$("#spanbusiness_address").css('display','block');
		$("#spanbusiness_address").html("Enter the city");
		$("#business_city").val('');
		$("#business_city").focus();
		validate_error[14] = 'no';
	}else if(physical_state == ''){
		/*physical state*/
		$("#spanbusiness_address").css('display','block');
		$("#spanbusiness_address").html("Enter the state");
		$("#business_state").val('');
		$("#business_state").focus();
		validate_error[14] = 'no';
	}else if(physical_zip == ''){
		/*physical zip*/
		$("#spanbusiness_address").css('display','block');
		$("#spanbusiness_address").html("Enter the zip");
		$("#business_zip").val('');
		$("#business_zip").focus();
		validate_error[14] = 'no';
	}else{
		$("#spanbusiness_address").css('display','none');
		validate_error[14] = 'yes';
	}

    /*telephone*/
	if(telephone == '' || telephone == '(___) ___-____')
    {
	  $("#spantelephone").css('display','block');
      $("#spantelephone").html("Enter the telephone");
      $("#telephone").val('');
      $("#telephone").focus();
	  validate_error[15] = 'no';
    }else{ 
      $("#spantelephone").css('display','none');
	  validate_error[15] = 'yes';
	}

	/*fax*/
	if(fax != '')
    {
	  if(!fax.match(fax_regex)) {
      $("#spanfax").css('display','block');
      $("#spanfax").html("Enter the valid fax");
      $("#fax").focus();
	  validate_error[16] = 'no';
	  }
	}else{ 
      $("#spanfax").css('display','none');
	  validate_error[16] = 'yes';
	}

    /*typeofbusiness*/
	if(typeofbusiness < 1 )
	{
	  $("#spantypeofbusiness").css('display','block');
	  $("#spantypeofbusiness").html("Select the type of business atleast one");
	  $("#typeofbusiness").val('');
	  $("#typeofbusiness").focus();
	  validate_error[17] = 'no';
	}else{
	  $("#spantypeofbusiness").css('display','none');
	  validate_error[17] = 'yes';
	}

    /*typeofbusiness_other_in*/
	if(typeofbusiness_other == 'Other')
    {
		if(typeofbusiness_other_in == '')
		{
		  $("#spantypeofbusiness").css('display','block');
		  $("#spantypeofbusiness").html("Enter the type of business");
		  $("#typeofbusiness_other_in").val('');
		  $("#typeofbusiness_other_in").focus();
	      validate_error[18] = 'no';
		}else{
		  $("#spantypeofbusiness").css('display','none');
	  	  validate_error[18] = 'yes';
		}
	}
	
    /*typeofindustry*/
	if(typeofindustry < 1)
    {
      $("#spantypeofindustry").css('display','block');
      $("#spantypeofindustry").html("Select the type of industry atleast one");
      $("#typeofindustry").val('');
      $("#typeofindustry").focus();
	  validate_error[19] = 'no';
    }else{
      $("#spantypeofindustry").css('display','none');
	  validate_error[19] = 'yes';
	}

	if(typeofindustry == 'Other')
    {
		/*typeofindustry_other_in*/
		if(typeofindustry_other_in == '')
		{
		  $("#spantypeofindustry").css('display','block');
		  $("#spantypeofindustry").html("Enter the type of industry");
		  $("#typeofindustry_other_in").val('');
		  $("#typeofindustry_other_in").focus();
		  validate_error[20] = 'no';
		}else{
		  $("#spantypeofindustry").css('display','none');
		  validate_error[20] = 'yes';
		}
	}
	
    /*typeofmwbe*/
/* 	if(typeofmwbe < 1)
    {
      $("#spantypeofmwbe").css('display','block');
      $("#spantypeofmwbe").html("Select the type of MWBE Certification atleast one");
      $("#typeofmwbe").val('');
      $("#typeofmwbe").focus();
	  validate_error[21] = 'no';
    }else{
      $("#spantypeofmwbe").css('display','none');
	  validate_error[21] = 'yes';
	}

	if(typeofmwbe == 'Other')
    {
		if(typeofmwbe_other_in == '')
		{
		  $("#spantypeofmwbe").css('display','block');
		  $("#spantypeofmwbe").html("Enter the type of MWBE Certification");
		  $("#typeofmwbe_other_in").val('');
		  $("#typeofmwbe_other_in").focus();
		  validate_error[22] = 'no';
		}else{
		  $("#spantypeofmwbe").css('display','none');
		  validate_error[22] = 'yes';
		}
	}
 */	
    /*services_needed*/
	if(services_needed < 1)
    {
      $("#spanservices_needed").css('display','block');
      $("#spanservices_needed").html("Select the services needed atleast one");
      $("#services_needed").val('');
      $("#services_needed").focus();
	  validate_error[23] = 'no';
    }else{
      $("#spanservices_needed").css('display','none');
	  validate_error[23] = 'yes';
	}


    /*services_need_other_in*/
	if(services_needed == 'Other')
    {
		if(services_need_other_in == '')
		{
		  $("#spanservices_needed").css('display','block');
		  $("#spanservices_needed").html("Enter the services needed");
		  $("#services_need_other_in").val('');
		  $("#services_need_other_in").focus();
		  validate_error[24] = 'no';
		}else{
		  $("#spanservices_needed").css('display','none');
	  	  validate_error[24] = 'yes';
		}
	}

    /*products_offered*/
	if(products_offered == '')
    {
      $("#spanproducts_offered").css('display','block');
      $("#spanproducts_offered").html("Enter the products offered");
      $("#products_offered").val('');
      $("#products_offered").focus();
	  validate_error[25] = 'no';
    }else{
      $("#spanproducts_offered").css('display','none');
	  validate_error[25] = 'yes';
	}


    /*women_minority_owned*/
	if(typeof women_minority_owned === "undefined")
    {
      $("#spanwomen_minority_owned").css('display','block');
      $("#spanwomen_minority_owned").html("Select the women/minority owned");
      $("#women_minority_owned").val('');
      $("#women_minority_owned").focus();
	  validate_error[26] = 'no';
    }else{
      $("#spanwomen_minority_owned").css('display','none');
	  validate_error[26] = 'yes';
	}


    /*counselor_notes*/
	if(counselor_notes == '')
    {
      $("#spancounselor_notes").css('display','block');
      $("#spancounselor_notes").html("Enter the counselor notes");
      $("#counselor_notes").val('');
      $("#counselor_notes").focus();
	  validate_error[27] = 'no';
    }else{
      $("#spancounselor_notes").css('display','none');
	  validate_error[27] = 'yes';
	}

    /*numberofemployees*/
	if(numberofemployees == '')
    {
      $("#spannumberofemployees").css('display','block');
      $("#spannumberofemployees").html("Select the number of employees");
      $("#numberofemployees").val('');
      $("#numberofemployees").focus();
	  validate_error[28] = 'no';
    }else{
      $("#spannumberofemployees").css('display','none');
	  validate_error[28] = 'yes';
	}

    /*time_spent*/
	if(time_spent == '')
    {
      $("#spantime_spent").css('display','block');
      $("#spantime_spent").html("Select the time spent");
      $("#time_spent").val('');
      $("#time_spent").focus();
	  validate_error[29] = 'no';
    }else{
      $("#spantime_spent").css('display','none');
	  validate_error[29] = 'yes';
	}


    /*business_structure*/
	if(business_structure == '')
    {
      $("#spanbusiness_structure").css('display','block');
      $("#spanbusiness_structure").html("Select the business structure");
      $("#business_structure").val('');
      $("#business_structure").focus();
	  validate_error[30] = 'no';
    }else{
      $("#spanbusiness_structure").css('display','none');
	  validate_error[30] = 'yes';
	}


    /*counselor_name*/
	if(counselor_name == '')
    {
      $("#spancounselor_name").css('display','block');
      $("#spancounselor_name").html("Enter the counselor's name");
      $("#counselor_name").val('');
      $("#counselor_name").focus();
	  validate_error[31] = 'no';
    }else{
      $("#spancounselor_name").css('display','none');
	  validate_error[31] = 'yes';
	}


    /*percentageofbusiness*/
	if(percentageofbusiness == '')
    {
      $("#spanpercentageofbusiness").css('display','block');
      $("#spanpercentageofbusiness").html("Enter the percentage of business");
      $("#percentageofbusiness").val('');
      $("#percentageofbusiness").focus();
	  validate_error[32] = 'no';
    }else{
        $("#spanpercentageofbusiness").css('display','none');
	    validate_error[32] = 'yes';
	}

		
    /*services_provided*/
	if(services_provided == '')
    {
      $("#spanservices_provided").css('display','block');
      $("#spanservices_provided").html("Select the services provided");
      $("#services_provided").val('');
      $("#services_provided").focus();
	  validate_error[33] = 'no';
    }else{
      $("#spanservices_provided").css('display','none');
	  validate_error[33] = 'yes';
	}


    /*services_provided_other_in*/
	if(services_provided == 'Other')
    {
		if(services_provided_other_in == '')
		{
		  $("#spanservices_provided").css('display','block');
		  $("#spanservices_provided").html("Enter the services provided");
		  $("#services_provided_other_in").val('');
		  $("#services_provided_other_in").focus();
		  validate_error[34] = 'no';
		}else{
		  $("#spanservices_provided").css('display','none');
		  validate_error[34] = 'yes';
		}
	}
	
	if($.inArray("no", validate_error)!==-1){
		/* for (var i = 0; i < validate_error.length; i++) {
		alert(i+'===='+validate_error[i]);
		} */ 
		return false;
	}else{
	    $('#spinner').show();
		var result = $(this).serializeArray(); 
		$.each(result, function(key, val) {
			valuesToSubmit.append(val.name,val.value);
		});
		$.ajax({
			  url:'scripts/intake.php?submit=yes', 
			  data:valuesToSubmit,
			  type:'POST',
			  processData: false,
			  contentType: false,
			  success: function(data){
				  if(data>0){    
					  $('#spinner').hide();
					  alert('Successfully Membership form Saved');
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
/* end intake form */


/* follow intake form script*/
var follow_valuesToSubmit;

/*Signature upload*/	
//var follow_input = document.getElementById("follow_client_signature");
follow_valuesToSubmit = new FormData();
/* follow_input.addEventListener("change", function (evt) {
	var p = 0, lens = this.files.length, img, reader, file;
	for ( ; p < lens; p++ ) {
		filev = this.files[p];
			
		if (follow_valuesToSubmit) {
			follow_valuesToSubmit.append("follow_client_signature[]", filev);
		}
	}
}, false);
 */
/*Form Submit*/
$("#follow_intakeform").submit(function(e) {
	e.preventDefault();
	var firstname             			= $("#first_name").val();
	var lastname             			= $("#last_name").val();
	var email            				= $("#email").val();
    var gender		     				= $('input[name=gender]:checked').val();
    var age              				= $("#age").val();
    var education						= $("#education").val();
    var race_ethnicity					= $("#race_ethnicity").val();
    var race_ethnicity_other_in			= $("#race_ethnicity_other_in").val();  
    var health_insurance				= $('input[name=health_insurance]:checked').val();
	var primary_language                = $('input[name=primary_language]:checked').val();
	var primary_language_other_in		= $("#primary_language_other_in").val();
    var business_name					= $("#business_name").val();
    var time_in_business				= $("#time_in_business").val();
    var physical_address				= $("#physical_address").val();
    var physical_address1				= $("#physical_address1").val();
    var physical_city					= $("#physical_city").val();
    var physical_state					= $("#physical_state").val();
    var physical_zip					= $("#physical_zip").val();
    var business_address				= $("#business_address").val();
    var business_address1				= $("#business_address1").val();
    var business_city					= $("#business_city").val();
    var business_state					= $("#business_state").val();
    var business_zip					= $("#business_zip").val();
    var fax								= $("#fax").val();
    var website          				= $("#website").val();
    var typeofbusiness					= $("#typeofbusiness input:checked").length;    
    var typeofbusiness_other            = $("#typeofbusiness_other_check input:checked").val();    
    var typeofbusiness_other_in			= $("#typeofbusiness_other_in").val();    
    var typeofindustry					= $("#typeofindustry input:checked").length;    
    var typeofindustry_other_in			= $("#typeofindustry_other_in").val();    
    var typeofmwbe				 		= $("#typeofmwbe input:checked").length;
    var typeofmwbe_other_in				= $("#typeofmwbe_other_in").val();    
    var services_needed					= $("#services_needed input:checked").length;    
    var services_need_other_in			= $("#services_need_other_in").val();    
    var products_offered				= $("#products_offered").val();    
    var women_minority_owned			= $('input[name=women_minority_owned]:checked').val();    
    var counselor_notes					= $("#counselor_notes").val();    
    var time_spent						= $("#time_spent").val();    
    var business_structure				= $("#business_structure").val();    
    var numberofemployees				= $("#numberofemployees").val();    
    var counselor_name			    	= $("#counselor_name").val();    
    var percentageofbusiness			= $("#percentageofbusiness").val();    
    var per_first_name					= $("#per_first_name").val();    
    var per_last_name					= $("#per_last_name").val();    
    var per_email						= $("#per_email").val();    
    var per_phone_num					= $("#per_phone_num").val();    
    var services_provided				= $("#services_provided").val();    
    var services_provided_other_in		= $("#services_provided_other_in").val();    
	var email_regex 					= /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

	var validate_error = [];

	/*first name*/
	if(firstname == '')
    {
      $("#spanfirst_name").css('display','block');
      $("#spanfirst_name").html("Enter the fisrt name");
      $("#first_name").val('');
      $("#first_name").focus();
	  validate_error[0] = 'no';
    }else{
      $("#spanfirst_name").css('display','none');
	  validate_error[0] = 'yes';
	}

	/*last name*/
	if(lastname == '')
    {
      $("#spanlast_name").css('display','block');
      $("#spanlast_name").html("Enter the last name");
      $("#last_name").val('');
      $("#last_name").focus();
	  validate_error[1] = 'no';
    }else{
      $("#spanlast_name").css('display','none');
	  validate_error[1] = 'yes';
	}
	
    /*email*/
	if(email == '')
    {
      $("#spanemail").css('display','block');
      $("#spanemail").html("Enter the email");
      $("#email").val('');
      $("#email").focus();
	  validate_error[2] = 'no';
    }else if(!email_regex.test(email)){
      $("#spanemail").css('display','block');
      $("#spanemail").html("Enter the valid email");
      $("#email").focus();
	  validate_error[2] = 'no';
	}else{
      $("#spanemail").css('display','none');
	  validate_error[2] = 'yes';
	}


    /*gender*/
	if(typeof gender === "undefined")
    {
      $("#spangender").css('display','block');
      $("#spangender").html("Select the gender");
      $("#gender").val('');
      $("#gender").focus();
	  validate_error[3] = 'no';
    }else{
      $("#spangender").css('display','none');
	  validate_error[3] = 'yes';
	}


    /*age*/
	if(age == '')
	{
	  $("#spanage").css('display','block');
	  $("#spanage").html("Select the age");
	  $("#age").val('');
	  $("#age").focus();
	  validate_error[4] = 'no';
	}else{
	  $("#spanage").css('display','none');
	  validate_error[4] = 'yes';
	}
	
    /*education*/
	if(education == '')
	{
	  $("#spaneducation").css('display','block');
	  $("#spaneducation").html("Select the education");
	  $("#education").val('');
	  $("#education").focus();
	  validate_error[5] = 'no';
	}else{
	  $("#spaneducation").css('display','none');
	  validate_error[5] = 'yes';
	}
	
    /*race_ethnicity*/
	if(race_ethnicity == '')
    {
      $("#spanrace_ethnicity").css('display','block');
      $("#spanrace_ethnicity").html("Select the race ethnicity");
      $("#race_ethnicity").val('');
      $("#race_ethnicity").focus();
	  validate_error[6] = 'no';
    }else{
      $("#spanrace_ethnicity").css('display','none');
	  validate_error[6] = 'yes';
	}

	/*race_ethnicity_other_in*/
	if(race_ethnicity == 'Other')
    {
		if(race_ethnicity_other_in == '')
		{
		  $("#spanrace_ethnicity").css('display','block');
		  $("#spanrace_ethnicity").html("Enter the race ethnicity");
		  $("#race_ethnicity_other_in").val('');
		  $("#race_ethnicity_other_in").focus();
		  validate_error[7] = 'no';
		}else{
		  $("#spanrace_ethnicity").css('display','none');
		  validate_error[7] = 'yes';
		}
	}
	
    /*health_insurance*/
	if(typeof health_insurance === "undefined")
    {
      $("#spanhealth_insurance").css('display','block');
      $("#spanhealth_insurance").html("select the health insurance");
      $("#health_insurance").val('');
      $("#health_insurance").focus();
	  validate_error[8] = 'no';
    }else{
      $("#spanhealth_insurance").css('display','none');
	  validate_error[8] = 'yes';
	}

	/*primary_language*/
	if(typeof primary_language === "undefined")
    {
      $("#spanprimary_language").css('display','block');
      $("#spanprimary_language").html("Select the primary language");
      $("#primary_language").val('');
      $("#primary_language").focus();
	  validate_error[9] = 'no';
    }else if(primary_language == 'no'){
		/*primary_language_other_in*/
		  if(primary_language_other_in == '')
		  {
			$("#spanprimary_language").css('display','block');
			$("#spanprimary_language").html("Enter the primary language");
			$("#primary_language_other_in").val('');
			$("#primary_language_other_in").focus();
			validate_error[10] = 'no';
		  }else{
			$("#spanprimary_language").css('display','none');
			validate_error[10] = 'yes';
		  }
	}else{
      $("#spanprimary_language").css('display','none');
	  validate_error[9] = 'yes';
	}


    /*business_name*/
	if(business_name == '')
	{
	  $("#spanbusiness_name").css('display','block');
	  $("#spanbusiness_name").html("Enter the business name");
	  $("#business_name").val('');
	  $("#business_name").focus();
	  validate_error[11] = 'no';
	}else{
	  $("#spanbusiness_name").css('display','none');
	  validate_error[11] = 'yes';
	}

    /*time_in_business*/
	if(time_in_business == '')
    {
      $("#spantime_in_business").css('display','block');
      $("#spantime_in_business").html("Select the time in business");
      $("#time_in_business").val('');
      $("#time_in_business").focus();
	  validate_error[12] = 'no';
    }else{
      $("#spantime_in_business").css('display','none');
	  validate_error[12] = 'yes';
	}

    /*physical address */
	if(physical_address == '')
    {
		$("#spanphysical_address").css('display','block');
		$("#spanphysical_address").html("Enter the physical address");
		$("#physical_address").val('');
		$("#physical_address").focus();
		validate_error[13] = 'no';
    }else if(physical_address1 == ''){
		$("#spanphysical_address").css('display','block');
		$("#spanphysical_address").html("Enter the valid address");
		$("#physical_address1").val('');
		$("#physical_address1").focus();
		validate_error[13] = 'no';
    }else if(physical_city == ''){
		/*physical city*/
		$("#spanphysical_address").css('display','block');
		$("#spanphysical_address").html("Enter the city");
		$("#physical_city").val('');
		$("#physical_city").focus();
		validate_error[13] = 'no';
	}else if(physical_state == ''){
		/*physical state*/
		$("#spanphysical_address").css('display','block');
		$("#spanphysical_address").html("Enter the state");
		$("#physical_statephysical_state").val('');
		$("#physical_state").focus();
		validate_error[13] = 'no';
	}else if(physical_zip == ''){
		/*physical zip*/
		$("#spanphysical_address").css('display','block');
		$("#spanphysical_address").html("Enter the zip");
		$("#physical_zip").val('');
		$("#physical_zip").focus();
		validate_error[13] = 'no';
	}else{
		$("#spanphysical_address").css('display','none');
		validate_error[13] = 'yes';
	}

    /*business address */
	if(business_address == '')
    {
		$("#spanbusiness_address").css('display','block');
		$("#spanbusiness_address").html("Enter the business address");
		$("#business_address").val('');
		$("#business_address").focus();
		validate_error[14] = 'no';
    }else if(business_address1 == ''){
		$("#spanbusiness_address").css('display','block');
		$("#spanbusiness_address").html("Enter the valid address");
		$("#business_address1").val('');
		$("#business_address1").focus();
		validate_error[14] = 'no';
    }else if(physical_city == ''){
		/*physical city*/
		$("#spanbusiness_address").css('display','block');
		$("#spanbusiness_address").html("Enter the city");
		$("#business_city").val('');
		$("#business_city").focus();
		validate_error[14] = 'no';
	}else if(physical_state == ''){
		/*physical state*/
		$("#spanbusiness_address").css('display','block');
		$("#spanbusiness_address").html("Enter the state");
		$("#business_state").val('');
		$("#business_state").focus();
		validate_error[14] = 'no';
	}else if(physical_zip == ''){
		/*physical zip*/
		$("#spanbusiness_address").css('display','block');
		$("#spanbusiness_address").html("Enter the zip");
		$("#business_zip").val('');
		$("#business_zip").focus();
		validate_error[14] = 'no';
	}else{
		$("#spanbusiness_address").css('display','none');
		validate_error[14] = 'yes';
	}
	
    /*typeofbusiness*/
	if(typeofbusiness < 1 )
	{
	  $("#spantypeofbusiness").css('display','block');
	  $("#spantypeofbusiness").html("Select the type of business atleast one");
	  $("#typeofbusiness").val('');
	  $("#typeofbusiness").focus();
	  validate_error[15] = 'no';
	}else{
	  $("#spantypeofbusiness").css('display','none');
	  validate_error[15] = 'yes';
	}

    /*typeofbusiness_other_in*/
	if(typeofbusiness_other == 'Other')
    {
		if(typeofbusiness_other_in == '')
		{
		  $("#spantypeofbusiness").css('display','block');
		  $("#spantypeofbusiness").html("Enter the type of business");
		  $("#typeofbusiness_other_in").val('');
		  $("#typeofbusiness_other_in").focus();
	      validate_error[16] = 'no';
		}else{
		  $("#spantypeofbusiness").css('display','none');
	  	  validate_error[16] = 'yes';
		}
	}

    /*typeofindustry*/
	if(typeofindustry < 1)
    {
      $("#spantypeofindustry").css('display','block');
      $("#spantypeofindustry").html("Select the type of industry atleast one");
      $("#typeofindustry").val('');
      $("#typeofindustry").focus();
	  validate_error[17] = 'no';
    }else{
      $("#spantypeofindustry").css('display','none');
	  validate_error[17] = 'yes';
	}

	if(typeofindustry == 'Other')
    {
		/*typeofindustry_other_in*/
		if(typeofindustry_other_in == '')
		{
		  $("#spantypeofindustry").css('display','block');
		  $("#spantypeofindustry").html("Enter the type of industry");
		  $("#typeofindustry_other_in").val('');
		  $("#typeofindustry_other_in").focus();
		  validate_error[18] = 'no';
		}else{
		  $("#spantypeofindustry").css('display','none');
		  validate_error[18] = 'yes';
		}
	}

	
   /*typeofmwbe*/
	/* if(typeofmwbe < 1)
    {
      $("#spantypeofmwbe").css('display','block');
      $("#spantypeofmwbe").html("Select the type of MWBE Certification atleast one");
      $("#typeofmwbe").val('');
      $("#typeofmwbe").focus();
	  validate_error[19] = 'no';
    }else{
      $("#spantypeofmwbe").css('display','none');
	  validate_error[19] = 'yes';
	}

	if(typeofmwbe == 'Other')
    {
		if(typeofmwbe_other_in == '')
		{
		  $("#spantypeofmwbe").css('display','block');
		  $("#spantypeofmwbe").html("Enter the type of MWBE Certification");
		  $("#typeofmwbe_other_in").val('');
		  $("#typeofmwbe_other_in").focus();
		  validate_error[20] = 'no';
		}else{
		  $("#spantypeofmwbe").css('display','none');
		  validate_error[20] = 'yes';
		}
	} */
	
	
    /*services_needed*/
	if(services_needed < 1)
    {
      $("#spanservices_needed").css('display','block');
      $("#spanservices_needed").html("Select the services needed atleast one");
      $("#services_needed").val('');
      $("#services_needed").focus();
	  validate_error[21] = 'no';
    }else{
      $("#spanservices_needed").css('display','none');
	  validate_error[21] = 'yes';
	}


    /*services_need_other_in*/
	if(services_needed == 'Other')
    {
		if(services_need_other_in == '')
		{
		  $("#spanservices_needed").css('display','block');
		  $("#spanservices_needed").html("Enter the services needed");
		  $("#services_need_other_in").val('');
		  $("#services_need_other_in").focus();
		  validate_error[22] = 'no';
		}else{
		  $("#spanservices_needed").css('display','none');
	  	  validate_error[22] = 'yes';
		}
	}

    /*products_offered*/
	if(products_offered == '')
    {
      $("#spanproducts_offered").css('display','block');
      $("#spanproducts_offered").html("Enter the products offered");
      $("#products_offered").val('');
      $("#products_offered").focus();
	  validate_error[23] = 'no';
    }else{
      $("#spanproducts_offered").css('display','none');
	  validate_error[23] = 'yes';
	}


    /*women_minority_owned*/
	if(typeof women_minority_owned === "undefined")
    {
      $("#spanwomen_minority_owned").css('display','block');
      $("#spanwomen_minority_owned").html("Select the women/minority owned");
      $("#women_minority_owned").val('');
      $("#women_minority_owned").focus();
	  validate_error[24] = 'no';
    }else{
      $("#spanwomen_minority_owned").css('display','none');
	  validate_error[24] = 'yes';
	}


    /*counselor_notes*/
	if(counselor_notes == '')
    {
      $("#spancounselor_notes").css('display','block');
      $("#spancounselor_notes").html("Enter the counselor notes");
      $("#counselor_notes").val('');
      $("#counselor_notes").focus();
	  validate_error[25] = 'no';
    }else{
      $("#spancounselor_notes").css('display','none');
	  validate_error[25] = 'yes';
	}

    /*numberofemployees*/
	if(numberofemployees == '')
    {
      $("#spannumberofemployees").css('display','block');
      $("#spannumberofemployees").html("Select the number of employees");
      $("#numberofemployees").val('');
      $("#numberofemployees").focus();
	  validate_error[26] = 'no';
    }else{
      $("#spannumberofemployees").css('display','none');
	  validate_error[26] = 'yes';
	}

    /*time_spent*/
	if(time_spent == '')
    {
      $("#spantime_spent").css('display','block');
      $("#spantime_spent").html("Select the time spent");
      $("#time_spent").val('');
      $("#time_spent").focus();
	  validate_error[27] = 'no';
    }else{
      $("#spantime_spent").css('display','none');
	  validate_error[27] = 'yes';
	}


    /*business_structure*/
	if(business_structure == '')
    {
      $("#spanbusiness_structure").css('display','block');
      $("#spanbusiness_structure").html("Select the business structure");
      $("#business_structure").val('');
      $("#business_structure").focus();
	  validate_error[28] = 'no';
    }else{
      $("#spanbusiness_structure").css('display','none');
	  validate_error[28] = 'yes';
	}


    /*counselor_name*/
	if(counselor_name == '')
    {
      $("#spancounselor_name").css('display','block');
      $("#spancounselor_name").html("Enter the counselor's name");
      $("#counselor_name").val('');
      $("#counselor_name").focus();
	  validate_error[29] = 'no';
    }else{
      $("#spancounselor_name").css('display','none');
	  validate_error[29] = 'yes';
	}


    /*percentageofbusiness*/
	if(percentageofbusiness == '')
    {
      $("#spanpercentageofbusiness").css('display','block');
      $("#spanpercentageofbusiness").html("Enter the percentage of business");
      $("#percentageofbusiness").val('');
      $("#percentageofbusiness").focus();
	  validate_error[30] = 'no';
    }else if(percentageofbusiness < 100){
	
			if(per_first_name == ''){
				$("#spanpercentageofbusiness").css('display','block');
				$("#spanpercentageofbusiness").html("Enter the first name");
				$("#per_first_name").val('');
				$("#per_first_name").focus();
				validate_error[30] = 'no';
			}else if(per_last_name == ''){
				/*physical city*/
				$("#spanpercentageofbusiness").css('display','block');
				$("#spanpercentageofbusiness").html("Enter the last name");
				$("#per_last_name").val('');
				$("#per_last_name").focus();
				validate_error[30] = 'no';
			}else if(per_email == ''){
				/*physical state*/
				$("#spanpercentageofbusiness").css('display','block');
				$("#spanpercentageofbusiness").html("Enter the email address");
				$("#per_email").val('');
				$("#per_email").focus();
				validate_error[30] = 'no';
			}else if(!email_regex.test(per_email)){
				$("#spanpercentageofbusiness").css('display','block');
				$("#spanpercentageofbusiness").html("Enter the valid email");
				$("#per_email").focus();
				validate_error[30] = 'no';
			}else if(per_phone_num == ''){
				/*physical zip*/
				$("#spanpercentageofbusiness").css('display','block');
				$("#spanpercentageofbusiness").html("Enter the phone number");
				$("#per_phone_num").val('');
				$("#per_phone_num").focus();
				validate_error[30] = 'no';
			}
	}else{
        $("#spanpercentageofbusiness").css('display','none');
	    validate_error[30] = 'yes';
	}


    /*services_provided*/
	if(services_provided == '')
    {
      $("#spanservices_provided").css('display','block');
      $("#spanservices_provided").html("Select the services provided");
      $("#services_provided").val('');
      $("#services_provided").focus();
	  validate_error[31] = 'no';
    }else{
      $("#spanservices_provided").css('display','none');
	  validate_error[31] = 'yes';
	}


    /*services_provided_other_in*/
	if(services_provided == 'Other')
    {
		if(services_provided_other_in == '')
		{
		  $("#spanservices_provided").css('display','block');
		  $("#spanservices_provided").html("Enter the services provided");
		  $("#services_provided_other_in").val('');
		  $("#services_provided_other_in").focus();
		  validate_error[32] = 'no';
		}else{
		  $("#spanservices_provided").css('display','none');
		  validate_error[32] = 'yes';
		}
	}


	if($.inArray("no", validate_error)!==-1){
		/* for (var i = 0; i < validate_error.length; i++) {
		alert(i+'===='+validate_error[i]);
		} */ 
		return false;
	}else{
	    $('#spinner').show();
		var result = $(this).serializeArray(); 
		$.each(result, function(key, val) {
			if(val.name == 'city_1'){
				follow_valuesToSubmit.append('city',val.value);
			}else if(val.name == 'state_1'){
				follow_valuesToSubmit.append('state',val.value);
			}else{
				follow_valuesToSubmit.append(val.name,val.value);
			}
		});
		$.ajax({
			  url:'scripts/intake.php?submit=yes', 
			  data:follow_valuesToSubmit,
			  type:'POST',
			  processData: false,
			  contentType: false,
			  success: function(data){
				  if(data>0){    
				      $('#spinner').hide();
					  alert('Successfully Membership form Saved');
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
/* end follow intake form */



/* membership form script*/
	var mem_valuesToSubmit;

	/*Signature upload*/	
	var mem_input = document.getElementById("mem_client_signature"), 
	mem_valuesToSubmit = new FormData();
	if(mem_input){
		mem_input.addEventListener("change", function (evt) {
			var i = 0, len = this.files.length, img, reader, file;
			for ( ; i < len; i++ ) {
				file = this.files[i];
					
				if (mem_valuesToSubmit) {
					mem_valuesToSubmit.append("client_signature[]", file);
				}
			}
		}, false);
	}
	
	/*Form Submit*/
	$("#mem_membershipform").submit(function(e) {
	e.preventDefault();
	var first_name             			= $("#mem_first_name").val();
	var last_name             			= $("#mem_last_name").val();
	var email            				= $("#mem_email").val();
    var gender		     				= $('input[name=gender]:checked').val();
    var race_ethnicity					= $("#mem_race_ethnicity").val();
    var race_ethnicity_other_in			= $("#mem_race_ethnicity_other_in").val();  
	var health_insurance				= $('input[name=health_insurance]:checked').val();
	var primary_language                = $('input[name=primary_language]:checked').val();
	var primary_language_other_in		= $("#mem_primary_language_other_in").val();
    var time_in_business				= $("#mem_time_in_business").val();
    var physical_address				= $("#mem_physical_address").val();
    var physical_address1				= $("#mem_physical_address1").val();
    var physical_city					= $("#mem_physical_city").val();
    var physical_state					= $("#mem_physical_state").val();
    var physical_zip					= $("#mem_physical_zip").val();
    var business_address				= $("#mem_business_address").val();
    var business_address1				= $("#mem_business_address1").val();
    var business_city					= $("#mem_business_city").val();
    var business_state					= $("#mem_business_state").val();
    var business_zip					= $("#mem_business_zip").val();
    var typeofindustry					= $("#mem_typeofindustry input:checked").length;    
    var typeofindustry_other_in			= $("#mem_typeofindustry_other_in").val();    
    var typeofmwbe				 		= $("#mem_typeofmwbe input:checked").length;    
    var typeofmwbe_other_in				= $("#mem_typeofmwbe_other_in").val();    
    var services_needed					= $("#mem_services_needed input:checked").length;    
    var services_need_other_in			= $("#mem_services_need_other_in").val();    
    var products_offered				= $("#mem_products_offered").val();    
    var women_minority_owned			= $('input[name=women_minority_owned]:checked').val();    
    var counselor_notes					= $("#mem_counselor_notes").val();    
    var numberofemployees				= $("#mem_numberofemployees").val();    
    var time_spent						= $("#mem_time_spent").val();    
    var business_structure				= $("#mem_business_structure").val();    
    var counselor_name					= $("#mem_counselor_name").val();    
    var percentageofbusiness			= $("#mem_percentageofbusiness").val();    
    var per_first_name					= $("#mem_per_first_name").val();    
    var per_last_name					= $("#mem_per_last_name").val();    
    var per_email						= $("#mem_per_email").val();    
    var per_phone_num					= $("#mem_per_phone_num").val();    
    var services_provided				= $("#mem_services_provided").val();    
    var services_provided_other_in		= $("#mem_services_provided_other_in").val();    
	var email_regex 					= /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;


	var validate_error = [];

	/*First Name*/
	if(first_name == '')
    {
      $("#mem_spanfirst_name").css('display','block');
      $("#mem_spanfirst_name").html("Enter the first name");
      $("#mem_first_name").val('');
      $("#mem_first_name").focus();
	  validate_error[0] = 'no';
    }else{
      $("#mem_spanfirst_name").css('display','none');
	  validate_error[0] = 'yes';
	}

	/*Last Name*/
	if(last_name == '')
    {
      $("#mem_spanlast_name").css('display','block');
      $("#mem_spanlast_name").html("Enter the last name");
      $("#mem_last_name").val('');
      $("#mem_last_name").focus();
	  validate_error[1] = 'no';
    }else{
      $("#mem_spanlast_name").css('display','none');
	  validate_error[1] = 'yes';
	}


    /*email*/
	if(email == '')
    {
      $("#mem_spanemail").css('display','block');
      $("#mem_spanemail").html("Enter the email");
      $("#mem_email").val('');
      $("#mem_email").focus();
	  validate_error[2] = 'no';
    }else if(!email_regex.test(email)){
      $("#mem_spanemail").css('display','block');
      $("#mem_spanemail").html("Enter the valid email");
      $("#mem_email").focus();
	  validate_error[2] = 'no';
	}else{
      $("#mem_spanemail").css('display','none');
	  validate_error[2] = 'yes';
	}


    /*gender*/
	if(typeof gender === "undefined")
    {
      $("#mem_spangender").css('display','block');
      $("#mem_spangender").html("Select the gender");
      $("#mem_gender").val('');
      $("#mem_gender").focus();
	  validate_error[3] = 'no';
    }else{
      $("#mem_spangender").css('display','none');
	  validate_error[3] = 'yes';
	}

    /*race_ethnicity*/
	if(race_ethnicity == '')
    {
      $("#mem_spanrace_ethnicity").css('display','block');
      $("#mem_spanrace_ethnicity").html("Select the race ethnicity");
      $("#mem_race_ethnicity").val('');
      $("#mem_race_ethnicity").focus();
	  validate_error[4] = 'no';
    }else{
      $("#mem_spanrace_ethnicity").css('display','none');
	  validate_error[4] = 'yes';
	}


	/*race_ethnicity_other_in*/
	if(race_ethnicity == 'Other')
    {
		if(race_ethnicity_other_in == '')
		{
		  $("#mem_spanrace_ethnicity").css('display','block');
		  $("#mem_spanrace_ethnicity").html("Enter the race ethnicity");
		  $("#mem_race_ethnicity_other_in").val('');
		  $("#mem_race_ethnicity_other_in").focus();
		  validate_error[5] = 'no';
		}else{
		  $("#mem_spanrace_ethnicity").css('display','none');
		  validate_error[5] = 'yes';
		}
	}

    /*health_insurance*/
	if(typeof health_insurance === "undefined")
    {
      $("#mem_spanhealth_insurance").css('display','block');
      $("#mem_spanhealth_insurance").html("select the health insurance");
      $("#mem_health_insurance").val('');
      $("#mem_health_insurance").focus();
	  validate_error[6] = 'no';
    }else{
      $("#mem_spanhealth_insurance").css('display','none');
	  validate_error[6] = 'yes';
	}

	
	/*primary_language*/
	if(typeof primary_language === "undefined")
    {
      $("#mem_spanprimary_language").css('display','block');
      $("#mem_spanprimary_language").html("Select the primary language");
      $("#mem_primary_language").val('');
      $("#mem_primary_language").focus();
	  validate_error[7] = 'no';
    }else if(primary_language == 'no'){
		/*primary_language_other_in*/
		  if(primary_language_other_in == '')
		  {
			$("#mem_spanprimary_language").css('display','block');
			$("#mem_spanprimary_language").html("Enter the primary language");
			$("#mem_primary_language_other_in").val('');
			$("#mem_primary_language_other_in").focus();
			validate_error[8] = 'no';
		  }else{
			$("#mem_spanprimary_language").css('display','none');
			validate_error[8] = 'yes';
		  }
	}else{
      $("#mem_spanprimary_language").css('display','none');
	  validate_error[7] = 'yes';
	}


	/*time_in_business*/
	if(time_in_business == '')
    {
      $("#mem_spantime_in_business").css('display','block');
      $("#mem_spantime_in_business").html("Select the time in business");
      $("#mem_time_in_business").val('');
      $("#mem_time_in_business").focus();
	  validate_error[9] = 'no';
    }else{
      $("#mem_spantime_in_business").css('display','none');
	  validate_error[9] = 'yes';
	}


   /*physical address */
	if(physical_address == '')
    {
		$("#mem_spanphysical_address").css('display','block');
		$("#mem_spanphysical_address").html("Enter the physical address");
		$("#mem_physical_address").val('');
		$("#mem_physical_address").focus();
		validate_error[10] = 'no';
    }else if(physical_address1 == ''){
		$("#mem_spanphysical_address").css('display','block');
		$("#mem_spanphysical_address").html("Enter the valid address");
		$("#mem_physical_address1").val('');
		$("#mem_physical_address1").focus();
		validate_error[10] = 'no';
    }else if(physical_city == ''){
		/*physical city*/
		$("#mem_spanphysical_address").css('display','block');
		$("#mem_spanphysical_address").html("Enter the city");
		$("#mem_physical_city").val('');
		$("#mem_physical_city").focus();
		validate_error[10] = 'no';
	}else if(physical_state == ''){
		/*physical state*/
		$("#mem_spanphysical_address").css('display','block');
		$("#mem_spanphysical_address").html("Enter the state");
		$("#mem_physical_statephysical_state").val('');
		$("#mem_physical_state").focus();
		validate_error[10] = 'no';
	}else if(physical_zip == ''){
		/*physical zip*/
		$("#mem_spanphysical_address").css('display','block');
		$("#mem_spanphysical_address").html("Enter the zip");
		$("#mem_physical_zip").val('');
		$("#mem_physical_zip").focus();
		validate_error[10] = 'no';
	}else{
		$("#mem_spanphysical_address").css('display','none');
		validate_error[10] = 'yes';
	}

    /*business address */
	if(business_address == '')
    {
		$("#mem_spanbusiness_address").css('display','block');
		$("#mem_spanbusiness_address").html("Enter the business address");
		$("#mem_business_address").val('');
		$("#mem_business_address").focus();
		validate_error[11] = 'no';
    }else if(business_address1 == ''){
		$("#mem_spanbusiness_address").css('display','block');
		$("#mem_spanbusiness_address").html("Enter the valid address");
		$("#mem_business_address1").val('');
		$("#mem_business_address1").focus();
		validate_error[11] = 'no';
    }else if(physical_city == ''){
		/*physical city*/
		$("#mem_spanbusiness_address").css('display','block');
		$("#mem_spanbusiness_address").html("Enter the city");
		$("#mem_business_city").val('');
		$("#mem_business_city").focus();
		validate_error[11] = 'no';
	}else if(physical_state == ''){
		/*physical state*/
		$("#mem_spanbusiness_address").css('display','block');
		$("#mem_spanbusiness_address").html("Enter the state");
		$("#mem_business_state").val('');
		$("#mem_business_state").focus();
		validate_error[11] = 'no';
	}else if(physical_zip == ''){
		/*physical zip*/
		$("#mem_spanbusiness_address").css('display','block');
		$("#mem_spanbusiness_address").html("Enter the zip");
		$("#mem_business_zip").val('');
		$("#mem_business_zip").focus();
		validate_error[11] = 'no';
	}else{
		$("#mem_spanbusiness_address").css('display','none');
		validate_error[11] = 'yes';
	}


    /*typeofindustry*/
	if(typeofindustry < 1)
    {
      $("#mem_spantypeofindustry").css('display','block');
      $("#mem_spantypeofindustry").html("Select the type of industry atleast one");
      $("#mem_typeofindustry").val('');
      $("#mem_typeofindustry").focus();
	  validate_error[12] = 'no';
    }else{
      $("#mem_spantypeofindustry").css('display','none');
	  validate_error[12] = 'yes';
	}

	if(typeofindustry == 'Other')
    {
		/*typeofindustry_other_in*/
		if(typeofindustry_other_in == '')
		{
		  $("#mem_spantypeofindustry").css('display','block');
		  $("#mem_spantypeofindustry").html("Enter the type of industry");
		  $("#mem_typeofindustry_other_in").val('');
		  $("#mem_typeofindustry_other_in").focus();
		  validate_error[13] = 'no';
		}else{
		  $("#mem_spantypeofindustry").css('display','none');
		  validate_error[13] = 'yes';
		}
	}

    /*typeofmwbe*/
	/* if(typeofmwbe < 1)
    {
      $("#mem_spantypeofmwbe").css('display','block');
      $("#mem_spantypeofmwbe").html("Select the type of MWBE Certification atleast one");
      $("#typeofmwbe").val('');
      $("#typeofmwbe").focus();
	  validate_error[14] = 'no';
    }else{
      $("#mem_spantypeofmwbe").css('display','none');
	  validate_error[14] = 'yes';
	}

	if(typeofmwbe == 'Other')
    {
		if(typeofmwbe_other_in == '')
		{
		  $("#mem_spantypeofmwbe").css('display','block');
		  $("#mem_spantypeofmwbe").html("Enter the type of MWBE Certification");
		  $("#mem_typeofmwbe_other_in").val('');
		  $("#mem_typeofmwbe_other_in").focus();
		  validate_error[15] = 'no';
		}else{
		  $("#mem_spantypeofmwbe").css('display','none');
		  validate_error[15] = 'yes';
		}
	} */
	

    /*services_needed*/
	if(services_needed < 1)
    {
      $("#mem_spanservices_needed").css('display','block');
      $("#mem_spanservices_needed").html("Select the services needed atleast one");
      $("#mem_services_needed").val('');
      $("#mem_services_needed").focus();
	  validate_error[16] = 'no';
    }else{
      $("#mem_spanservices_needed").css('display','none');
	  validate_error[16] = 'yes';
	}


    /*services_need_other_in*/
	if(services_needed == 'Other')
    {
		if(services_need_other_in == '')
		{
		  $("#mem_spanservices_needed").css('display','block');
		  $("#mem_spanservices_needed").html("Enter the services needed");
		  $("#mem_services_need_other_in").val('');
		  $("#mem_services_need_other_in").focus();
		  validate_error[17] = 'no';
		}else{
		  $("#mem_spanservices_needed").css('display','none');
	  	  validate_error[17] = 'yes';
		}
	}

    /*products_offered*/
	if(products_offered == '')
    {
      $("#mem_spanproducts_offered").css('display','block');
      $("#mem_spanproducts_offered").html("Enter the products offered");
      $("#mem_products_offered").val('');
      $("#mem_products_offered").focus();
	  validate_error[18] = 'no';
    }else{
      $("#mem_spanproducts_offered").css('display','none');
	  validate_error[18] = 'yes';
	}


    /*women_minority_owned*/
	if(typeof women_minority_owned === "undefined")
    {
      $("#mem_spanwomen_minority_owned").css('display','block');
      $("#mem_spanwomen_minority_owned").html("Select the women/minority owned");
      $("#mem_women_minority_owned").val('');
      $("#mem_women_minority_owned").focus();
	  validate_error[19] = 'no';
    }else{
      $("#mem_spanwomen_minority_owned").css('display','none');
	  validate_error[19] = 'yes';
	}


    /*counselor_notes*/
	if(counselor_notes == '')
    {
      $("#mem_spancounselor_notes").css('display','block');
      $("#mem_spancounselor_notes").html("Enter the counselor notes");
      $("#mem_counselor_notes").val('');
      $("#mem_counselor_notes").focus();
	  validate_error[20] = 'no';
    }else{
      $("#mem_spancounselor_notes").css('display','none');
	  validate_error[20] = 'yes';
	}

    /*numberofemployees*/
	if(numberofemployees == '')
    {
      $("#mem_spannumberofemployees").css('display','block');
      $("#mem_spannumberofemployees").html("Select the number of employees");
      $("#mem_numberofemployees").val('');
      $("#mem_numberofemployees").focus();
	  validate_error[21] = 'no';
    }else{
      $("#mem_spannumberofemployees").css('display','none');
	  validate_error[21] = 'yes';
	}

    /*time_spent*/
	if(time_spent == '')
    {
      $("#mem_spantime_spent").css('display','block');
      $("#mem_spantime_spent").html("Select the time spent");
      $("#mem_time_spent").val('');
      $("#mem_time_spent").focus();
	  validate_error[22] = 'no';
    }else{
      $("#mem_spantime_spent").css('display','none');
	  validate_error[22] = 'yes';
	}


    /*business_structure*/
	if(business_structure == '')
    {
      $("#mem_spanbusiness_structure").css('display','block');
      $("#mem_spanbusiness_structure").html("Select the business structure");
      $("#mem_business_structure").val('');
      $("#mem_business_structure").focus();
	  validate_error[23] = 'no';
    }else{
      $("#mem_spanbusiness_structure").css('display','none');
	  validate_error[23] = 'yes';
	}


    /*counselor_name*/
	if(counselor_name == '')
    {
      $("#mem_spancounselor_name").css('display','block');
      $("#mem_spancounselor_name").html("Enter the counselor name");
      $("#mem_counselor_name").val('');
      $("#mem_counselor_name").focus();
	  validate_error[24] = 'no';
    }else{
      $("#mem_spancounselor_name").css('display','none');
	  validate_error[24] = 'yes';
	}

    /*percentageofbusiness*/
	if(percentageofbusiness == '')
    {
      $("#mem_spanpercentageofbusiness").css('display','block');
      $("#mem_spanpercentageofbusiness").html("Enter the percentage of business");
      $("#mem_percentageofbusiness").val('');
      $("#mem_percentageofbusiness").focus();
	  validate_error[25] = 'no';
    }else if(percentageofbusiness < 100){
	
		if(per_first_name == ''){
			$("#mem_spanpercentageofbusiness").css('display','block');
			$("#mem_spanpercentageofbusiness").html("Enter the first name");
			$("#mem_per_first_name").val('');
			$("#mem_per_first_name").focus();
			validate_error[25] = 'no';
		}else if(per_last_name == ''){
			/*physical city*/
			$("#mem_spanpercentageofbusiness").css('display','block');
			$("#mem_spanpercentageofbusiness").html("Enter the last name");
			$("#mem_per_last_name").val('');
			$("#mem_per_last_name").focus();
			validate_error[25] = 'no';
		}else if(per_email == ''){
			/*physical state*/
			$("#mem_spanpercentageofbusiness").css('display','block');
			$("#mem_spanpercentageofbusiness").html("Enter the email address");
			$("#mem_per_email").val('');
			$("#mem_per_email").focus();
			validate_error[25] = 'no';
		}else if(!email_regex.test(per_email)){
			$("#mem_spanpercentageofbusiness").css('display','block');
			$("#mem_spanpercentageofbusiness").html("Enter the valid email");
			$("#mem_per_email").focus();
			validate_error[25] = 'no';
		}else if(per_phone_num == ''){
			/*physical zip*/
			$("#mem_spanpercentageofbusiness").css('display','block');
			$("#mem_spanpercentageofbusiness").html("Enter the phone number");
			$("#mem_per_phone_num").val('');
			$("#mem_per_phone_num").focus();
			validate_error[25] = 'no';
		}
	}else{
        $("#mem_spanpercentageofbusiness").css('display','none');
	    validate_error[25] = 'yes';
	}

    /*services_provided*/
	if(services_provided == '')
    {
      $("#mem_spanservices_provided").css('display','block');
      $("#mem_spanservices_provided").html("Select the services provided");
      $("#mem_services_provided").val('');
      $("#mem_services_provided").focus();
	  validate_error[26] = 'no';
    }else{
      $("#mem_spanservices_provided").css('display','none');
	  validate_error[26] = 'yes';
	}


    /*services_provided_other_in*/
	if(services_provided == 'Other')
    {
		if(services_provided_other_in == '')
		{
		  $("#mem_spanservices_provided").css('display','block');
		  $("#mem_spanservices_provided").html("Enter the services provided");
		  $("#mem_services_provided_other_in").val('');
		  $("#mem_services_provided_other_in").focus();
		  validate_error[27] = 'no';
		}else{
		  $("#mem_spanservices_provided").css('display','none');
		  validate_error[27] = 'yes';
		}
	}
	
	if($.inArray("no", validate_error)!==-1){
		/* for (var i = 0; i < validate_error.length; i++) {
		alert(i+'===='+validate_error[i]);
		} */ 
		return false;
	}else{
	    $('#spinner').show();
		var result = $(this).serializeArray(); 
		$.each(result, function(key, val) {
			mem_valuesToSubmit.append(val.name,val.value);
		});
		$.ajax({
			  url:'scripts/intake.php?submit=yes', 
			  data:mem_valuesToSubmit,
			  type:'POST',
			  processData: false,
			  contentType: false,
			  success: function(data){
				  if(data == 1){    
				      $('#spinner').hide();
					  alert('Successfully Membership form Saved');
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
/* end mebershipform form */


/*Start Login Module */
$(document).ready(function(){	
	$("#loginform").submit(function(){

	      var email=$("#lemail").val();
	      var passwd=$("#lpassword").val();
	      var emailRegex=/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	      if(email=='')
	      {
	      	$("#email_error_msg").html("Enter the Email");
	      	$("#lemail").focus();
	      	return false;	
	      }
	      
	      else if(passwd=='')
	      {
	      	$("#passwd_error_msg").html("Please Enter Password");
	      	$("#lpassword").focus();	
			$("#username_error_msg").css("display","none");
	      	return false;
	      }
	});
});
	



$(document).ready(function()
{
  $("#work").mask("(999) 999-9999");
  $("#cell").mask("(999) 999-9999");

});


/* change password*/
$(document).ready(function()
{
$("#changepwdform").submit(function()
{
//alert('change');
var opwd=$("#oldpwd").val();
var npwd=$("#newpwd").val();
var cnpwd=$("#cnewpwd").val();

if(opwd=='')
{
  //alert('opwd');
  $("#cpwd_err").html("Enter old password");
  $("#oldpwd").val();
  $("#oldpwd").focus();
  return false;
}
else if(npwd=='')
{
  $("#cpwd_err").html("Enter new password");
  $("#newpwd").val();
  $("#newpwd").focus();
  return false;
}
else if(cnpwd=='')
{
  $("#cpwd_err").html("Enter confirm new password");
  $("#cnewpwd").val();
  $("#cnewpwd").focus();
  return false;
}
});
});

/* end change password*/
/*Check availability username or email*/
$(".checkavailable").change(function() {

  var name    = $(this).val();
  var params  = $(this).data('params');
  $.ajax({
          url :'scripts/availableusername.php', 
          data:"name="+name+"&params="+params,
          type: "POST",
          success: function(data){
            if(data=='username' || data=='email'){

              if(data=='username'){

                  $("#signup_err_msg").html(data+" Already Taken");
                  $("#uname").val("");
                  $("#uname").focus();
                  return false;       
              }
              else{

                 $("#signup_err_msg").html(data+" Already Taken");
                 $("#email").val("");
                 $("#email").focus();
                  return false;       
                }

            }
            else{
                $("#signup_err_msg").html(data+" is Available");
                $("#signup_err_msg").css("color","blue");
                return false;
                }
            }
      });
});

/*start forgot username*/
$(document).ready(function(){ 
$("#usernameform").submit(function(e) {

      e.preventDefault();

      //alert('sdfsdf');
      var fuser       =$("#fuser").val();
      var emailRegex  =/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
      var intRegex    =/[0-9 -()+]+$/;
      if(fuser == '')
      {    
        $("#fuser_err").html("Please enter your email");
        $("#fuser").focus();
        return false;
      }
      else if(!emailRegex.test(fuser))
      {    
        $("#fuser_err").html("Please enter valid email id");
        $("#fuser").focus();
        return false;
      }
      else
      {
          //alert("fdasdasda");
          var valuesTo=$(this).serialize();       
          $.ajax({
              url :'scripts/availableusername.php', 
              data:"email="+fuser,
              type: "POST",
              success: function(data)
              {
                if(data>0)
                {
                   // alert(data); 
                    $("#fuser_err_msg").html(email+ "is Available");                  
                    $.ajax({
                      url :'scripts/forgotusername.php', 
                      data:valuesTo,
                      type: 'POST',
                      success: function(result)
                      {
                        //alert(result);
                        if(result>0)
                        {                                 
                            // window.location.href='../index.php';
                            alert("You will receive the username to your mail");

                            window.location.href='index.php';
                        }
                        else 
                        {
                          $("#fuser_err_msg").html("Your are Not Registered");
                          $("#fuser").focus();
                          return false;
                        }
                      }
                  });               
                }
                else{
                    $("#fuser_err_msg").html("Your are Not Registered");
                    $("#fuser").focus();
                    return false;
                }
              }
            });
          return false;
        }

    });
});
/* end fusername*/

/* start forgot password*/
$(document).ready(function(){ 
$("#passwordform").submit(function(e) {

        e.preventDefault();

      var ftpass =$("#ftpassmail").val();      
      var emailRegex=/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
      var intRegex  =/[0-9 -()+]+$/;
      if(ftpass == '')
      {    
        $("#fpwd_err").html("Please enter your email");
        $("#ftpassmail").focus();
        return false;
      }
      else if(!emailRegex.test(ftpass))
      {    
        $("#fpwd_err").html("Enter valid email id");
        $("#ftpassmail").focus();
        return false;
      }
      else
        {
          var valuesTo=$(this).serialize();       
          $.ajax({
              url :'scripts/availableusername.php', 
              data:"email="+ftpass,
              type: "POST",
              success: function(data)
              {
                if(data>0)
                {
                    //salert(data); 
                    $("#fpass_err_msg").html(email+ "is Available");
                    $.ajax({
                      url :'scripts/forgotpwd.php', 
                      data:valuesTo,
                      type: 'POST',
                      success: function(result)
                      {
                        //alert(result);
                        if(result>0)
                        {                                 
                            // window.location.href='../index.php';
                            alert("You will receive the password to your mail");
                            window.location.href='index.php';
                        }
                        else 
                        {
                          $("#fpass_err_msg").html("Your are Not Registered.");
                          $("#ftpassmail").focus();
                          return false;
                        }
                      }
                  });               
                }
                else
                {
                  $("#fpass_err_msg").html("Your are Not Registered.");
                  $("#ftpassmail").focus();
                  return false;
                }

              }
            });
          return false;
        }


});

});
/*end forgot password*/




/*start emp profile*/
$("#profileform").submit(function() 
{
    var pfname    = $("#pfname").val();
    var plname    = $("#plname").val();
    var pdob      = $("#birthdate").val();
    var pusername = $("#puname").val();
    var pemail    = $("#pemail").val();
    var phwork    = $("#phworkk").val();
    var pcellno   = $("#cellnno").val();
    var paddr     = $("#pro_physical_address").val();
    var paddr1    = $("#pro_physical_address1").val();
    var pcity     = $("#pro_physical_city").val();
    var pstate    = $("#pro_physical_state").val();
    var pzip      = $("#pro_physical_zip").val();
    //alert(phwork);
    var emailRegex   = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    var characterReg = /^[a-zA-Z ]+$/;
    var intRegex     = /[0-9 -()+]+$/;

    if(pfname=='')
    {
      $("#profile_err").html("Enter your firstname");
      $("#pfname").val('');
      $("#pfname").focus();
      return false;
    }
    else if(!characterReg.test(pfname))
    {
      $("#profile_err").html("Enter Characters Only ");
      $("#pfname").val('');
      $("#pfname").focus();
      return false;
    }
    else if(pdob=='')
    {
      $("#profile_err").html("Enter your Date of Birth");
      $("#birthdate").val('');
      $("#birthdate").focus();
      return false;
    }
    else if(pusername=='')
    {
      $("#profile_err").html("Enter Username");
      $("#puname").val('');
      $("#puname").focus();
      return false;
    }
    else if(pfname.length<3)
    {
      $("#profile_err").html("Enter Minimum 5 Characters");
      $("#pfname").val('');
      $("#pfname").focus();
      return false;
    }
    else if(plname=='')
    {
      $("#profile_err").html("Enter your lastname");
      $("#plname").val('');
      $("#plname").focus();
      return false;
    }
    else if(!characterReg.test(plname))
    {
      $("#profile_err").html("Enter Characters Only ");
      $("#plname").val('');
      $("#plname").focus();
      return false;
    }
    else if(pemail=='')
    {
      $("#profile_err").html("Enter your email");
      $("#pemail").val('');
      $("#pemail").focus();
      return false;
    }
    else if(!emailRegex.test(pemail))
    {
      $("#profile_err").html("Enter valid email id");
      $("#pemail").val('');
      $("#pemail").focus();
      return false;
    }
    else if(phwork=='' || phwork == '(___) ___-____' )
    {
      $("#profile_err").html("Enter your work phone number");
      $("#phworkk").val('');
      $("#phworkk").focus();
      return false;
    }
    else if(pcellno=='' || pcellno == '(___) ___-____' )
    {
      $("#profile_err").html("Enter your cell phone number");
      $("#cellnno").val('');
      $("#cellnno").focus();
      return false;
    }
    else if(paddr=='')
    {
      $("#profile_err").html("Enter your address");
      $("#pro_physical_address").val('');
      $("#pro_physical_address").focus();
      return false;
    }
    else if(paddr1=='')
    {
      $("#profile_err").html("Enter your address1");
      $("#pro_physical_address1").val('');
      $("#pro_physical_address1").focus();
      return false;
    }
    else if(pcity=='')
    {
      $("#profile_err").html("Enter your city");
      $("#pro_physical_city").val('');
      $("#pro_physical_city").focus();
      return false;
    }
    else if(pstate=='')
    {
      $("#profile_err").html("Enter your state");
      $("#pro_physical_state").val('');
      $("#pro_physical_state").focus();
      return false;
    }
    else if(pzip=='')
    {
      $("#profile_err").html("Enter your zipcode");
      $("#pro_physical_zip").val('');
      $("#pro_physical_zip").focus();
      return false;
    }

  });
/*end emp profile*/


/*start Intake edit*/
$(document).on("submit", "#InTakeeForm", function(e) {

	e.preventDefault();
	var name             			= $("#itname").val();
	var email            			= $("#itemail").val();
    var address						= $("#itaddress").val();
    var city_state_zip				= $("#itcity_state_zip").val();
    var website          			= $("#itwebsite").val();
    var telephone        			= $("#ittelephone").val();
    var business_name				= $("#itbusiness_name").val();
    var business_address			= $("#itbusiness_address").val();
    var person_working_client		= $("#itperson_working_client").val();    
    var products_offered			= $("#itproducts_offered").val();    
    var time_spent					= $("#ittime_spent").val();    
	var email_regex 				= /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

	var validate_error = [];

	/*name*/
	if(name == '')
    {
      $("#itspanname").css('display','block');
      $("#itspanname").html("Enter the name");
      $("#itname").val('');
      $("#itname").focus();
	  validate_error[0] = 'no';
    }else{
      $("#itspanname").css('display','none');
	  validate_error[0] = 'yes';
	}


    /*email*/
	if(email == '')
    {
      $("#itspanemail").css('display','block');
      $("#itspanemail").html("Enter the email");
      $("#itemail").val('');
      $("#itemail").focus();
	  validate_error[1] = 'no';
    }else if(!email_regex.test(email)){
      $("#itspanemail").css('display','block');
      $("#itspanemail").html("Enter the valid email");
      $("#itemail").focus();
	  validate_error[1] = 'no';
	}else{
      $("#itspanemail").css('display','none');
	  validate_error[1] = 'yes';
	}

    /*address*/
	if(address == '')
    {
      $("#itspan_address").css('display','block');
      $("#itspan_address").html("Enter the address");
      $("#itaddress").val('');
      $("#itaddress").focus();
	  validate_error[11] = 'no';
    }else{
      $("#itspan_address").css('display','none');
	  validate_error[11] = 'yes';
	}

    /*city_state_zip*/
	if(city_state_zip == '')
    {
      $("#itspancity_state_zip").css('display','block');
      $("#itspancity_state_zip").html("Enter the city state zip");
      $("#itcity_state_zip").val('');
      $("#itcity_state_zip").focus();
	  validate_error[12] = 'no';
    }else{
      $("#itspancity_state_zip").css('display','none');
	  validate_error[12] = 'yes';
	}


    /*website*/
	/*if(website == '')
    {
      $("#itspanwebsite").css('display','block');
      $("#itspanwebsite").html("Enter the website");
      $("#itwebsite").val('');
      $("#itwebsite").focus();
	  validate_error[5] = 'no';
    }else{
      $("#itspanwebsite").css('display','none');
	  validate_error[5] = 'yes';
	}*/


    /*telephone*/
	if(telephone == '' || telephone == '(___) ___-____')
    {
      $("#itspantelephone").css('display','block');
      $("#itspantelephone").html("Enter the telephone");
      $("#ittelephone").val('');
      $("#ittelephone").focus();
	  validate_error[4] = 'no';
    }else{ 
      $("#itspantelephone").css('display','none');
	  validate_error[4] = 'yes';
	}


    /*business_name*/
	if(business_name == '')
	{
	  $("#itspanbusiness_name").css('display','block');
	  $("#itspanbusiness_name").html("Enter the business name");
	  $("#itbusiness_name").val('');
	  $("#itbusiness_name").focus();
	  validate_error[9] = 'no';
	}else{
	  $("#itspanbusiness_name").css('display','none');
	  validate_error[9] = 'yes';
	}


    /*business_address*/
	if(business_address == '')
	{
	  $("#itspanbusiness_address").css('display','block');
	  $("#itspanbusiness_address").html("Enter the business address");
	  $("#itbusiness_address").val('');
	  $("#itbusiness_address").focus();
	  validate_error[18] = 'no';
	}else{
	  $("#itspanbusiness_address").css('display','none');
	  validate_error[18] = 'yes';
	}

    /*person_working_client*/
	if(person_working_client == '')
    {
      $("#itspanperson_working_client").css('display','block');
      $("#itspanperson_working_client").html("Enter the person working");
      $("#itperson_working_client").val('');
      $("#itperson_working_client").focus();
	  validate_error[33] = 'no';
    }else{
      $("#itspanperson_working_client").css('display','none');
	  validate_error[33] = 'yes';
	}

    /*products_offered*/
	if(products_offered == '')
    {
      $("#itspanproducts_offered").css('display','block');
      $("#itspanproducts_offered").html("Enter the products offered");
      $("#itproducts_offered").val('');
      $("#itproducts_offered").focus();
	  validate_error[25] = 'no';
    }else{
      $("#itspanproducts_offered").css('display','none');
	  validate_error[25] = 'yes';
	}

    /*time_spent*/
	if(time_spent == '')
    {
      $("#itspantime_spent").css('display','block');
      $("#itspantime_spent").html("Select the time spent");
      $("#ittime_spent").val('');
      $("#ittime_spent").focus();
	  validate_error[30] = 'no';
    }else{
      $("#itspantime_spent").css('display','none');
	  validate_error[30] = 'yes';
	}

	if($.inArray("no", validate_error)!==-1){
		return false;
	}else{
	    $('#spinner').show();
		$.ajax({
			  url:'scripts/updateintakedetails.php?submit=yes', 
			  data:$(this).serialize(),
			  type:'POST',
			  success: function(data){
				  if(data>0){
                      $('#spinner').hide();				  
					  alert('Intake Updated Successfully'); 
					  window.location.href='index.php';   
				  }else{
				      $('#spinner').hide();
					  $("#itform_err").html("Not Updated");
					  return false;
				  }
			  }
		 });
	}
});
/*end intake edit */

  /* Followup search */
$(document).ready( function() {

$("#followup_search").submit( function() {

  var clientfirstname	=   $("#clientfirstname").val();
  var clientlastname 	=   $("#clientlastname").val();
  var clientemail 	    =   $("#clientemail").val();
  var age 			    =   $("#clientage").val();
  var telephone         =   $("#clienttelephone").val();
  var business_name 	=   $("#clientbusiness_name").val();


  if(clientfirstname=='' && clientlastname=='' && clientemail=='' && age=='' && telephone=='' && business_name=='')
  {
    $("#search_err_msg").html("Enter Any Information(Name,Email,Age,Telephone,Business Name)");
    $("#clientname").focus();
    $("#editintakeview").css("display","none");
    return false; 
  }
  else {
        //alert(firstname);

      if (window.XMLHttpRequest)
        {
        // code for IE7+, Firefox, Chrome, Opera, Safari

        //  alert(firstname);
          xmlhttp=new XMLHttpRequest();
        }
      else
        {// code for IE6, IE5
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function()
        {
          //alert(xmlhttp.status);
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
          {
            //alert(xmlhttp.responseText);
            if(xmlhttp.responseText!=0)
            {
             // alert(xmlhttp.responseText);
             // $("#editintakeview").css("display","block");
            // document.getElementById("editintakeview").style.display="block";
              document.getElementById("clientsearchresult").innerHTML=xmlhttp.responseText;
              //document.getElementById("loadintakeForm").style.display="block";
            }
            
          }
        }
        xmlhttp.open("GET","scripts/getclientDetails.php?firstname="+clientfirstname+"&lastname="+clientlastname+"&email="+clientemail+"&age="+age+"&telephone="+telephone+"&business_name="+business_name,true);
        xmlhttp.send();
        return false;
        }
    });
});
              /*$(document).ready(function(){
              $("#followup_search").submit(function(){
                   var search=$("#client_search").val();
                   if(search == '')
                   {
                      $("#search_err_msg").html("Enter your search criteria like(Firstname,Lastname,Cell NO)");
                      $("#client_search").focus();
                      $("#loadintakeForm").css("display","none");
                      $("#showfollowup").css("display","none");search
                      $("#showfollowup2").css("display","none");
                      $("#editintakeview").css("display","none");
                      return false;
                   } 
                  else 
                  {
                        //alert(search);
                      if (search=="")
                        {
                          document.getElementById("searchresult").innerHTML="";
                          return false;
                        }
                      if (window.XMLHttpRequest)
                        {// code for IE7+, Firefox, Chrome, Opera, Safari
                          xmlhttp=new XMLHttpRequest();
                        }
                      elseloadintakeFormloadintakeForm
                        {// code for IE6, IE5
                          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                        }loadintakeFormloadintakeForm
                          xmlhttp.onreadystatechange=function()
                        {
                          //alert(xmlhttp.status);
                        if (xmlhttp.readyState==4 && xmlhttp.status==200)
                          {                    }                    }


                            //alert(xmlhttp.responseText);
                            if(xmlhttp.responseText!=0)
                            {                    }

                              //alert(xmlhttp.responseText);
                              document.getElementById("searchresult").innerHTML=xmlhttp.responseText;
                              //document.getElementById("loadintakeForm").style.display="block";
                            }
                            else
                            {  
                              document.getElementById("searchresult").style.display="none";
                              alert("You must complete the intake form"); 
                              window.location.href="index.php";
                            }
                          }
                        }
                        xmlhttp.open("GET","scripts/searchresult.php?clients="+search,true);
                        xmlhttp.send();
                        return false;
                    }
                });
              });*/
          
 function initdatepicker(){
  Calendar.setup({
      inputField  : "fdate",
      ifFormat    : "%d-%b-%y",
      weekNumbers : false,
      showsTime   : false,
      firstDay    : 1,
      align       : "tl",
      showOthers  : true    
  });
 }

/*start follow up form2*/

/*end followupform*/

/* start followup form2*/
function initdatepicker2(){
  Calendar.setup({
      inputField  : "followup2date",
      ifFormat    : "%d-%b-%y",
      weekNumbers : false,
      showsTime   : false,
      firstDay    : 1,
      align       : "tl",
      showOthers  : true    
  });
 }









/* end followup2*/


/* start report form*/
$(document).on('submit',"#reportform", function() 
{
    //e.preventDefault();
    var rfromdate    = $("#ifromdate").val();
    var rtodate      = $("#itodate").val();

    if(rfromdate=='' && rtodate=='')
    {
      $("#report_err").html("Enter Daterange");
      $("#ifromdate").focus();
      return false;
    }
    else
    {
      $("#report_err").html('');
      if (rfromdate=="" && rtodate=="")
          {
            document.getElementById("reportsgeneration").innerHTML="";
            return;
          }
        if (window.XMLHttpRequest)
          {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
          }
        else
          {// code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
            xmlhttp.onreadystatechange=function()
          {
            //alert(xmlhttp.status);
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
              //alert(xmlhttp.responseText);
              if(xmlhttp.responseText!=0)
              {
                //alert(xmlhttp.responseText);
                document.getElementById("reportsgeneration").innerHTML=xmlhttp.responseText;
                
              }
              else
              {  
                document.getElementById("reportsgeneration").style.display="none";
                //alert(""); 
                window.location.href="index.php";
              }
            }
          }
          xmlhttp.open("POST","scripts/employeereport.php?fromdate="+rfromdate+"&todate="+rtodate,true);
          xmlhttp.send();
          return false;
      }
    
});

/*end report form */


/*followup form1*/
$(document).on('submit',"#followupform1", function(event) {

    event.preventDefault();
    var servicepro      	= $("#servicepro").val();
    var servreq      		= $("#servreq").val();
    var assist          	= $("#assist").val();
    var type_assist      	= $("#type_assist").val();
    var bplan           	= $("#bplan").val();
    var mplan           	= $("#mplan").val();
    var fplan           	= $("#fplan").val();
    var bothers         	= $("#bothers").val();
    var commercial      	= $("#commercial").val();
    var contract        	= $("#contract").val();
    var equip           	= $("#equip").val();
    var otherbd         	= $("#otherbd").val();
    var market_sell     	= $("#market_sell").val();
    var exp_imp         	= $("#exp_imp").val();
	var social          	= $("#social").val();
	var time_spent         	= $("#time_spent").val();
	var breg				= $("#breg input:checked").length;    
    var breg_other_in   	= $("#breg_other_in").val();
	var typeofmwbe			= $("#typeofmwbe input:checked").length;    
    var typeofmwbe_other_in = $("#typeofmwbe_other_in").val();
    var finfo         		= $("#finfo").val();
    var amt_req          	= $("#amt_req").val();
    var bondentity      	= $("#bondentity").val();
    var bondamt         	= $("#bondamt").val();
    var prowriteaward		= $('input[name=prowriteaward]:checked').val();
    var counselor          	= $("#counselor").val();
    var bidentity         	= $("#bidentity").val();
    var bidamt            	= $("#bidamt").val();
    var pentity         	= $("#pentity").val();
	var status				= $("#status input:checked").length;    
    var pamt          		= $("#pamt").val();
    var techass          	= $("#techass").val();
	var bidcontaward        = $('input[name=bidcontaward]:checked').val();
    var eimpact          	= $("#eimpact").val();
    var intRegex     		= /[0-9 -()+]+$/;
    var characterReg 		= /^[a-zA-Z ]+$/;

	var validate_error = [];
	
	/*service provider*/
/* 	if(servicepro == '')
    {
      $("#span_servicepro").css('display','block');
      $("#span_servicepro").html("Enter the service provider");
      $("#servicepro").val('');
      $("#servicepro").focus();
	  validate_error[0] = 'no';
    }else{
      $("#span_servicepro").css('display','none');
	  validate_error[0] = 'yes';
	}
 */
	/*service requested*/
	/* if(servreq == '')
    {
      $("#span_servreq").css('display','block');
      $("#span_servreq").html("Enter the service requested");
      $("#servreq").val('');
      $("#servreq").focus();
	  validate_error[1] = 'no';
    }else{
      $("#span_servreq").css('display','none');
	  validate_error[1] = 'yes';
	} */

	/*assistance*/
	/* if(assist == '')
    {
      $("#span_assist").css('display','block');
      $("#span_assist").html("Enter the assistance");
      $("#assist").val('');
      $("#assist").focus();
	  validate_error[2] = 'no';
    }else{
      $("#span_assist").css('display','none');
	  validate_error[2] = 'yes';
	} */

	/*type of assistance*/
	/* if(type_assist == '')
    {
      $("#span_type_assist").css('display','block');
      $("#span_type_assist").html("Enter the type of assistance");
      $("#type_assist").val('');
      $("#type_assist").focus();
	  validate_error[3] = 'no';
    }else{
      $("#span_type_assist").css('display','none');
	  validate_error[3] = 'yes';
	} */

	/*bplan*/
	/* if(bplan == '')
    {
      $("#span_bplan").css('display','block');
      $("#span_bplan").html("Enter the business plan");
      $("#bplan").val('');
      $("#bplan").focus();
	  validate_error[4] = 'no';
    }else{
      $("#span_bplan").css('display','none');
	  validate_error[4] = 'yes';
	} */

	/*mplan*/
	/* if(mplan == '')
    {
      $("#span_mplan").css('display','block');
      $("#span_mplan").html("Enter the marketing plan");
      $("#mplan").val('');
      $("#mplan").focus();
	  validate_error[5] = 'no';
    }else{
      $("#span_mplan").css('display','none');
	  validate_error[5] = 'yes';
	} */

	/*fplan*/
	/* if(fplan == '')
    {
      $("#span_fplan").css('display','block');
      $("#span_fplan").html("Enter the financial plan");
      $("#fplan").val('');
      $("#fplan").focus();
	  validate_error[6] = 'no';
    }else{
      $("#span_fplan").css('display','none');
	  validate_error[6] = 'yes';
	} */

	/*commercial*/
	/* if(commercial == '')
    {
      $("#span_commercial").css('display','block');
      $("#span_commercial").html("Enter the commercial");
      $("#commercial").val('');
      $("#commercial").focus();
	  validate_error[7] = 'no';
    }else{
      $("#span_commercial").css('display','none');
	  validate_error[7] = 'yes';
	} */

	/*contract*/
	/* if(contract == '')
    {
      $("#span_contract").css('display','block');
      $("#span_contract").html("Enter the contract");
      $("#contract").val('');
      $("#contract").focus();
	  validate_error[8] = 'no';
    }else{
      $("#span_contract").css('display','none');
	  validate_error[8] = 'yes';
	} */

	/*equip*/
	/* if(equip == '')
    {
      $("#span_equip").css('display','block');
      $("#span_equip").html("Enter the puchasing of equipment");
      $("#equip").val('');
      $("#equip").focus();
	  validate_error[9] = 'no';
    }else{
      $("#span_equip").css('display','none');
	  validate_error[9] = 'yes';
	} */
	
	/*market_sell*/
	/* if(market_sell == '')
    {
      $("#span_market_sell").css('display','block');
      $("#span_market_sell").html("Enter the market selling");
      $("#market_sell").val('');
      $("#market_sell").focus();
	  validate_error[10] = 'no';
    }else{
      $("#span_market_sell").css('display','none');
	  validate_error[10] = 'yes';
	} */
	
	/*exp_imp*/
	/* if(exp_imp == '')
    {
      $("#span_exp_imp").css('display','block');
      $("#span_exp_imp").html("Enter the export/import");
      $("#exp_imp").val('');
      $("#exp_imp").focus();
	  validate_error[11] = 'no';
    }else{
      $("#span_exp_imp").css('display','none');
	  validate_error[11] = 'yes';
	} */
	
	/*social*/
	/* if(social == '')
    {
      $("#span_social").css('display','block');
      $("#span_social").html("Enter the social media");
      $("#social").val('');
      $("#social").focus();
	  validate_error[12] = 'no';
    }else{
      $("#span_social").css('display','none');
	  validate_error[12] = 'yes';
	} */

    /*business registration*/
	/* if(breg < 1)
    {
      $("#span_breg").css('display','block');
      $("#span_breg").html("Select the business registration");
      $("#breg").val('');
      $("#breg").focus();
	  validate_error[13] = 'no';
    }else{
      $("#span_breg").css('display','none');
	  validate_error[13] = 'yes';
	} */

	/* if(breg == 'Other')
    {
		if(breg_other_in == '')
		{
		  $("#span_breg_other_in").css('display','block');
		  $("#span_breg_other_in").html("Enter the business registration");
		  $("#breg_other_in").val('');
		  $("#breg_other_in").focus();
		  validate_error[14] = 'no';
		}else{
		  $("#span_breg_other_in").css('display','none');
		  validate_error[14] = 'yes';
		}
	} */
	
	/*typeofmwbe*/
	/* if(typeofmwbe < 1)
    {
      $("#span_typeofmwbe").css('display','block');
      $("#span_typeofmwbe").html("Select the type of MWBE Certification atleast one");
      $("#typeofmwbe").val('');
      $("#typeofmwbe").focus();
	  validate_error[15] = 'no';
    }else{
      $("#span_typeofmwbe").css('display','none');
	  validate_error[15] = 'yes';
	} */

	/* if(typeofmwbe == 'Other')
    {
		if(typeofmwbe_other_in == '')
		{
		  $("#span_typeofmwbe_other_in").css('display','block');
		  $("#span_typeofmwbe_other_in").html("Enter the type of MWBE Certification");
		  $("#typeofmwbe_other_in").val('');
		  $("#typeofmwbe_other_in").focus();
		  validate_error[16] = 'no';
		}else{
		  $("#span_typeofmwbe_other_in").css('display','none');
		  validate_error[16] = 'yes';
		}
	} */
	
	/*finfo*/
	/* if(finfo == '')
    {
      $("#span_finfo").css('display','block');
      $("#span_finfo").html("Enter the financing");
      $("#finfo").val('');
      $("#finfo").focus();
	  validate_error[17] = 'no';
    }else{
      $("#span_finfo").css('display','none');
	  validate_error[17] = 'yes';
	} */
	
	/*amt_req*/
	/* if(amt_req == '')
    {
      $("#span_amt_req").css('display','block');
      $("#span_amt_req").html("Enter the amount requested");
      $("#amt_req").val('');
      $("#amt_req").focus();
	  validate_error[18] = 'no';
    }else{
      $("#span_amt_req").css('display','none');
	  validate_error[18] = 'yes';
	} */
	
	/*bondentity*/
	/* if(bondentity == '')
    {
      $("#span_bondentity").css('display','block');
      $("#span_bondentity").html("Enter the bonding entity");
      $("#bondentity").val('');
      $("#bondentity").focus();
	  validate_error[19] = 'no';
    }else{
      $("#span_bondentity").css('display','none');
	  validate_error[19] = 'yes';
	} */
	
	/*bondamt*/
	/* if(bondamt == '')
    {
      $("#span_bondamt").css('display','block');
      $("#span_bondamt").html("Enter the amount");
      $("#bondamt").val('');
      $("#bondamt").focus();
	  validate_error[20] = 'no';
    }else{
      $("#span_bondamt").css('display','none');
	  validate_error[20] = 'yes';
	} */

	/*prowriteaward*/
	/* if(typeof prowriteaward === "undefined")
    {
      $("#span_prowriteaward").css('display','block');
      $("#span_prowriteaward").html("Select the proposal");
      $("#prowriteaward").val('');
      $("#prowriteaward").focus();
	  validate_error[21] = 'no';
    }else{
      $("#span_prowriteaward").css('display','none');
	  validate_error[21] = 'yes';
	} */
	
	/*counselor*/
	/* if(counselor == '')
    {
      $("#span_counselor").css('display','block');
      $("#span_counselor").html("Enter the counselor");
      $("#counselor").val('');
      $("#counselor").focus();
	  validate_error[22] = 'no';
    }else{
      $("#span_counselor").css('display','none');
	  validate_error[22] = 'yes';
	} */
	
	/*bidentity*/
	/* if(bidentity == '')
    {
      $("#span_bidentity").css('display','block');
      $("#span_bidentity").html("Enter the bidding entity");
      $("#bidentity").val('');
      $("#bidentity").focus();
	  validate_error[23] = 'no';
    }else{
      $("#span_bidentity").css('display','none');
	  validate_error[23] = 'yes';
	} */
	
	/*bidamt*/
	/* if(bidamt == '')
    {
      $("#span_bidamt").css('display','block');
      $("#span_bidamt").html("Enter the bidding amt");
      $("#bidamt").val('');
      $("#bidamt").focus();
	  validate_error[24] = 'no';
    }else{
      $("#span_bidamt").css('display','none');
	  validate_error[24] = 'yes';
	} */
	
	/*pentity*/
	/* if(pentity == '')
    {
      $("#span_pentity").css('display','block');
      $("#span_pentity").html("Enter the proposal entity");
      $("#pentity").val('');
      $("#pentity").focus();
	  validate_error[24] = 'no';
    }else{
      $("#span_pentity").css('display','none');
	  validate_error[24] = 'yes';
	} */
	
	/*status*/
	/* if(status < 1)
    {
      $("#span_status").css('display','block');
      $("#span_status").html("Select the status atleast one");
      $("#status").val('');
      $("#status").focus();
	  validate_error[25] = 'no';
    }else{
      $("#span_status").css('display','none');
	  validate_error[25] = 'yes';
	} */

	/*pamt*/
	/* if(pamt == '')
    {
      $("#span_pamt").css('display','block');
      $("#span_pamt").html("Enter the proposal amount");
      $("#pamt").val('');
      $("#pamt").focus();
	  validate_error[26] = 'no';
    }else{
      $("#span_pamt").css('display','none');
	  validate_error[26] = 'yes';
	} */
	
	/*techass*/
	/* if(techass == '')
    {
      $("#span_techass").css('display','block');
      $("#span_techass").html("Enter the technical assistance");
      $("#techass").val('');
      $("#techass").focus();
	  validate_error[27] = 'no';
    }else{
      $("#span_techass").css('display','none');
	  validate_error[27] = 'yes';
	} */
	
	/*prowriteaward*/
	/* if(typeof prowriteaward === "undefined")
    {
      $("#span_bidcontaward").css('display','block');
      $("#span_bidcontaward").html("Select the bidding contract");
      $("#bidcontaward").val('');
      $("#bidcontaward").focus();
	  validate_error[28] = 'no';
    }else{
      $("#span_bidcontaward").css('display','none');
	  validate_error[28] = 'yes';
	} */
	
	/*eimpact*/
	/* if(eimpact == '')
    {
      $("#span_eimpact").css('display','block');
      $("#span_eimpact").html("Select the economic impact");
      $("#eimpact").val('');
      $("#eimpact").focus();
	  validate_error[29] = 'no';
    }else{
      $("#span_eimpact").css('display','none');
	  validate_error[29] = 'yes';
	} */
	
	
	//if($.inArray("no", validate_error)!==-1){
		/* for (var i = 0; i < validate_error.length; i++) {
		alert(i+'===='+validate_error[i]);
		} */
		//return false;
	//}else{
	   $('#spinner').show();
		var valuesToSubmit=$(this).serialize();    
		$.ajax({
				url:'scripts/followup.php', 
				data:valuesToSubmit,
				type: 'POST',
				success: function(data){
					if(data>0){    
						$('#spinner').hide();
						alert('Saved Successfully');
						window.location.href='index.php';   
					}else{ 
						$('#spinner').hide();
						$("#follow2_err").html("Not Registered");
						return false;
					}
			}
		}); 
	//}

});

/*end followup form 1*/


/*followup form2*/
/*Follow Signature upload*/	
var valuesTof2Submit;
//var f2_input = document.getElementById("f2_client_signature"),
valuesTof2Submit = new FormData()
/* f2_input.addEventListener("change", function (evt) {
	var t = 0, len = this.files.length, img, reader, file;
	for ( ; t < len; t++ ) {
		file = this.files[t];
			
		if (valuesTof2Submit) {
			valuesTof2Submit.append("f2_client_signature[]", file);
		}
	}
}, false);
 */
$(document).on('submit',"#followupform2", function(event) {

    event.preventDefault();
    var f2_clientname     	 = $("#f2_clientname").val();
    var f2_telephone      	 = $("#f2_telephone").val();
    var f2_bname          	 = $("#f2_bname").val();
    var f2_time_spent    	 = $("#f2_time_spent").val();
	var f2_breason		  	 = $("#f2_breason input:checked").length;    
    var f2_breason_other_in  = $("#f2_breason_other_in").val();
    var f2_counselnotes   	 = $("#f2_counselnotes").val();
	var validate_error = [];

	/*f2_clientname*/
	if(f2_clientname == '')
    {
      $("#span_f2_clientname").css('display','block');
      $("#span_f2_clientname").html("Enter the name");
      $("#f2_clientname").val('');
      $("#f2_clientname").focus();
	  validate_error[0] = 'no';
    }else{
      $("#span_f2_clientname").css('display','none');
	  validate_error[0] = 'yes';
	}

	/*f2_telephone*/
	if(f2_telephone == '')
    {
      $("#span_f2_telephone").css('display','block');
      $("#span_f2_telephone").html("Enter the telephone");
      $("#f2_telephone").val('');
      $("#f2_telephone").focus();
	  validate_error[1] = 'no';
    }else{
      $("#span_f2_telephone").css('display','none');
	  validate_error[1] = 'yes';
	}

	/*f2_bname*/
	if(f2_bname == '')
    {
      $("#span_f2_bname").css('display','block');
      $("#span_f2_bname").html("Enter the business name");
      $("#f2_bname").val('');
      $("#f2_bname").focus();
	  validate_error[2] = 'no';
    }else{
      $("#span_f2_bname").css('display','none');
	  validate_error[2] = 'yes';
	}

	/*f2_time_spent*/
	if(f2_time_spent == '')
    {
      $("#span_f2_time_spent").css('display','block');
      $("#span_f2_time_spent").html("Enter the time spent");
      $("#f2_time_spent").val('');
      $("#f2_time_spent").focus();
	  validate_error[3] = 'no';
    }else{
      $("#span_f2_time_spent").css('display','none');
	  validate_error[3] = 'yes';
	}

	/*f2_breason*/
	if(f2_breason < 1)
    {
      $("#span_f2_breason").css('display','block');
      $("#span_f2_breason").html("Select the reason for visit atleast one");
      $("#f2_breason").val('');
      $("#f2_breason").focus();
	  validate_error[4] = 'no';
    }else{
      $("#span_f2_breason").css('display','none');
	  validate_error[4] = 'yes';
	}

	/*f2_breason_other_in*/
	if(f2_breason == 'Other')
    {
		if(f2_breason_other_in == '')
		{
		  $("#span_f2_breason_other_in").css('display','block');
		  $("#span_f2_breason_other_in").html("Enter the reason for visit");
		  $("#f2_breason_other_in").val('');
		  $("#f2_breason_other_in").focus();
		  validate_error[5] = 'no';
		}else{
		  $("#span_f2_breason_other_in").css('display','none');
		  validate_error[5] = 'yes';
		}
	}
	
	
	/*f2_counselnotes*/
	if(f2_counselnotes == '')
    {
      $("#span_f2_counselnotes").css('display','block');
      $("#span_f2_counselnotes").html("Enter the counselor notes");
      $("#f2_counselnotes").val('');
      $("#f2_counselnotes").focus();
	  validate_error[6] = 'no';
    }else{
      $("#span_f2_counselnotes").css('display','none');
	  validate_error[6] = 'yes';
	}

	if($.inArray("no", validate_error)!==-1){
		/* for (var i = 0; i < validate_error.length; i++) {
		alert(i+'===='+validate_error[i]);
		} */
		return false;
	}else{
	    $('#spinner').show();
		var result = $(this).serializeArray(); 
		$.each(result, function(key, val) {
			valuesTof2Submit.append(val.name,val.value);
		});
		$.ajax({
			url:'scripts/followup2.php', 
			data:valuesTof2Submit,
			type:'POST',
			processData: false,
			contentType: false,
			success: function(data){
				if(data>0){
					$('#spinner').hide();
					alert('Saved Successfully');
					window.location.href='index.php';   
				}else{ 
				    $('#spinner').hide();
					alert('Not Saved');
					return false;
				}
			}
		});
	}
});
/*end followup form 2*/


/*GET PREVIOUS EMPLOYEE DETAILS*/

  function getPreviousEmployeeDetails(str)
  {
    //alert(str);
  if (str=="")
    {
    document.getElementById("PreviousEmployeelist").innerHTML="";
   // return;
    }
  if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
    }
  else
    {// code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
  xmlhttp.onreadystatechange=function()
    {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {
        //alert(xmlhttp.responseText);

        document.getElementById("PreviousEmployeelist").innerHTML=xmlhttp.responseText;
    
      }
    }
  xmlhttp.open("GET","scripts/getpreviousemployeelist.php?cntid="+str,true);
  xmlhttp.send();
  return false;
  }



  function getclientlastname(str)
  {
//alert(str);
  if (str=="")
    {
    document.getElementById("searchresult").innerHTML="";
   // return;
    }
  if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
    }
  else
    {// code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
  xmlhttp.onreadystatechange=function()
    {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {
        //alert(xmlhttp.responseText);

        document.getElementById("searchresult").innerHTML=xmlhttp.responseText;
    
      }
    }
  xmlhttp.open("GET","scripts/filter.php?cntid="+str,true)  ;
  xmlhttp.send();
  return false;
  }


  /*Start Script for ClientEditform*/
  function getEditForm(cid)
  { 
		if (cid=="")
		{
		document.getElementById("FollowEdittForm").innerHTML="";
	   // return;
		}
		if (window.XMLHttpRequest)
		{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
		}
		else
		{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function()
		{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		  {
			document.getElementById("ClientEdittForm").innerHTML="";
			//alert(xmlhttp.responseText);
		  //  dialogRef.getModalBody().html(xmlhttp.responseText);
			document.getElementById("FollowEdittForm").innerHTML=xmlhttp.responseText;
			initialize();
			intake_jscript();
			sub_per_each_func();
		  }
		}
		xmlhttp.open("GET","scripts/ClientEditForm.php?cntid="+cid,true);
		xmlhttp.send();
		return false;
  }
  /*End Script for ClientEditform*/

 
  /*Start Script for FollowCreateform*/
  function getFollowCreateForm(cid)
  { 
		if (cid=="")
		{
		document.getElementById("ClientEdittForm").innerHTML="";
	   // return;
		}
		if (window.XMLHttpRequest)
		{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
		}
		else
		{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function()
		{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		  {
			document.getElementById("FollowEdittForm").innerHTML="";
			document.getElementById("ClientEdittForm").innerHTML=xmlhttp.responseText;
				/*Business Registration*/
				var breg_other_in =  $('#breg_other_in'), breg_other_div = $('#breg_other_div');
				$('#businessother_check').change(function() {
					breg_other_in.val('');
					if ($(this).is(':checked')) {
						breg_other_div.slideDown("slow");
					} else {
						breg_other_div.slideUp("slow");
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

		  }
		}
		xmlhttp.open("GET","scripts/FollowCreateForm.php?cntid="+cid,true);
		xmlhttp.send();
		return false;
  }
  /*End Script for FollowCreateform*/


  /*Start Script for Follow2Createform*/
  function getFollow2CreateForm(cid)
  { 
		if (cid=="")
		{
		document.getElementById("ClientEdittForm").innerHTML="";
	   // return;
		}
		if (window.XMLHttpRequest)
		{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
		}
		else
		{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function()
		{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		  {
			document.getElementById("FollowEdittForm").innerHTML="";
			document.getElementById("ClientEdittForm").innerHTML=xmlhttp.responseText;
				/*telephone*/
				$("#f2_telephone").mask("(999) 999-9999");
				/*Reason for visit*/
				var f2_breason_other_in =  $('#f2_breason_other_in'), f2_breason_other_div = $('#f2_breason_other_div');
				$('#f2_breason_other_check').change(function() {
					f2_breason_other_in.val('');
					if ($(this).is(':checked')) {
						f2_breason_other_div.slideDown("slow");
					} else {
						f2_breason_other_div.slideUp("slow");
					}
				});
		  }
		}
		xmlhttp.open("GET","scripts/Follow2CreateForm.php?cntid="+cid,true);
		xmlhttp.send();
		return false;
  }
  /*End Script for Follow2Createform*/
  
  
  /*Start Script for MemberEditform*/
  function getMemberEditForm(cid)
  { 
		if (cid=="")
		{
		document.getElementById("update_memberform").innerHTML="";
	   // return;
		}
		if (window.XMLHttpRequest)
		{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
		}
		else
		{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function()
		{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		  {
			//alert(xmlhttp.responseText);
		  //  dialogRef.getModalBody().html(xmlhttp.responseText);
			document.getElementById("update_memberform").innerHTML=xmlhttp.responseText;
			mem_initialize();
			membership_jscript();
			mem_sub_per_each_func();
		  }
		}
		xmlhttp.open("GET","scripts/MemberEditForm.php?cntid="+cid,true);
		xmlhttp.send();
		return false;
  }
  /*End Script for ClientEditform*/

  
  /*Start Script for followup2Editform*/
  function getFollowupEditForm(fid)
  { 
    //alert(cid) ;

    if (fid=="")
    {
    document.getElementById("ClientEdittForm").innerHTML="";
   // return;
    }
  if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
    }
  else
    {// code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
  xmlhttp.onreadystatechange=function()
    {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {
		document.getElementById("FollowEdittForm").innerHTML="";
        document.getElementById("ClientEdittForm").innerHTML=xmlhttp.responseText;
		
			/*Business Registration*/
			var breg_other_in =  $('#breg_other_in'), breg_other_div = $('#breg_other_div');
			$('#businessother_check').change(function() {
				breg_other_in.val('');
				if ($(this).is(':checked')) {
					breg_other_div.slideDown("slow");
				} else {
					breg_other_div.slideUp("slow");
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

      }
    }
  xmlhttp.open("GET","scripts/followupformedit.php?cntfid="+fid,true);
  xmlhttp.send();
  return false;

  }
  /*End Script for followup2Editform*/

  /*Start Script for followup2Editform*/
  function getFollowup2EditForm(fid)
  { 
    //alert(cid) ;

    if (fid=="")
    {
    document.getElementById("ClientEdittForm").innerHTML="";
   // return;
    }
  if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
    }
  else
    {// code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
  xmlhttp.onreadystatechange=function()
    {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {
		document.getElementById("FollowEdittForm").innerHTML="";
        //alert(xmlhttp.responseText);
      //  dialogRef.getModalBody().html(xmlhttp.responseText);
        document.getElementById("ClientEdittForm").innerHTML=xmlhttp.responseText;
			/*telephone*/
			$("#f2_telephone").mask("(999) 999-9999");
			/*Reason for visit*/
			var f2_breason_other_in =  $('#f2_breason_other_in'), f2_breason_other_div = $('#f2_breason_other_div');
			$('#f2_breason_other_check').change(function() {
				f2_breason_other_in.val('');
				if ($(this).is(':checked')) {
					f2_breason_other_div.slideDown("slow");
				} else {
					f2_breason_other_div.slideUp("slow");
				}
			});
      }
    }
  xmlhttp.open("GET","scripts/followup2formedit.php?cntfid="+fid,true);
  xmlhttp.send();
  return false;

  }
  /*End Script for followup2Editform*/


  /*Start Script for followup2Editform*/
  function getFollowup1EditForm(fid)
  { 
    //alert(cid) ;

    if (fid=="")
    {
    document.getElementById("ClientEdittForm").innerHTML="";
   // return;
    }
  if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
    }
  else
    {// code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
  xmlhttp.onreadystatechange=function()
    {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {
		document.getElementById("FollowEdittForm").innerHTML="";
        //alert(xmlhttp.responseText);
      //  dialogRef.getModalBody().html(xmlhttp.responseText);
        document.getElementById("ClientEdittForm").innerHTML=xmlhttp.responseText;
      }
    }
  xmlhttp.open("GET","scripts/followupformedit.php?cntfid="+fid,true);
  xmlhttp.send();
  return false;

  }
  /*End Script for followup2Editform*/