//Admin Login Form Validation

$("#adminuserlogin").submit(function () {
	
	var username	=	$("#username").val();
	var password	=	$("#password").val();
	var emailReg 	=   /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	var charregx 	= /^[A-Za-z]+$/;
	
	if(username=='')
	{
		$("#validation_errors").html("Enter Your Registered Email");
		$("#username").val('');
		$("#username").focus();
		return false;
	}
	else if (!emailReg.test(username)) {
		
		$("#validation_errors").html("Enter Valid Email");
		$("#username").val('');
		$("#username").focus();
		return false;
		
	}
	else if(password=='')
	{
		$("#validation_errors").html("Enter Password");
		$("#password").val('');
		$("#password").focus();
		return false;
	}
	});


		
	//Enable signup popup window
	
	$("#signupclick").click(function () {
		$("#adloginen").css("display","none");
		$("#sgregisteren").css("display","block");
	});
	
	//Enable login popup window
	
	$("#loginclick").click(function () {
		
		$("#adloginen").css("display","block");
		$("#sgregisteren").css("display","none");
		
	});

	//Enable Forget Password 

	$("#forgetpasswordclickk").click(function () {

		//alert(123);

		$("#forgotpassword").css("display","block");
		$("#adloginen").css("display","none");
		$("#sgregisteren").css("display","none");

	});
	
	//Singup Validation 
	
	$("#adminsignup").submit(function () {
	//alert(123);
	var nickname	=	$("#nickname").val();
	var email		=	$("#signupemail").val();
	var password	=	$("#signuppass1").val();
	var cpassword	=	$("#signuppass2").val();
	var emailReg 	=   /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	var charregx 	=   /^[A-Za-z]+$/;

/*$('#foo').keyup(function() {
    if (regx.test(this.value)) $('#bar').val('correct');
    else  $('#bar').val('incorrect');
});
*/

	if(nickname=='')
	{
		$("#signupvalidation_errors").html("Enter Your Name");
		$("#nickname").val('');
		$("#nickname").focus();
		return false;
	}
	else if(!charregx.test(nickname))
	{
		$("#signupvalidation_errors").html("Enter Alpha Only");
		$("#nickname").val('');
		$("#nickname").focus();
		return false;
	}
	else if(nickname.length<3)
	{
		$("#signupvalidation_errors").html("Enter Minimum 3 Characters");
		$("#nickname").val('');
		$("#nickname").focus();
		return false;
	}
	else if (email=='') {
		
		$("#signupvalidation_errors").html("Enter Your Email");
		$("#signupemail").val('');
		$("#signupemail").focus();
		return false;
		
	}
	else if (!emailReg.test(email)) {
		
		$("#signupvalidation_errors").html("Enter Valid Email");
		$("#signupemail").val('');
		$("#signupemail").focus();
		return false;
		
	}
	else if(password=='')
	{
		$("#signupvalidation_errors").html("Enter Password");
		$("#signuppass1").val('');
		$("#signuppass1").focus();
		return false;
	}
	else if(password.length<5)
	{
		$("#signupvalidation_errors").html("Enter Maximum 5 Characters");
		$("#signuppass1").val('');
		$("#signuppass1").focus();
		return false;
	}
	else if(cpassword=='')
	{
		$("#signupvalidation_errors").html("Enter Confirm Password");
		$("#signuppass2").val('');
		$("#signuppass2").focus();
		return false;
	}
	else if(password!=cpassword)
	{
		$("#signupvalidation_errors").html("MisMatch Passwords");
		$("#signuppass1").val('');
		$("#signuppass1").focus();
		return false;
	}
	else{
		$.ajax({
            url:'scripts/availableuser.php', 
            data: "email="+email,
            type: "POST",
            success: function(data){
                if(data !=0){             
					//
					//alert(data); 
					$("#signupvalidation_errors").html(email+" Already Taken");
					$("#signupemail").val("");
					$("#signupemail").focus();
					return false;               
                }
                else{
                	//alert(data);
                	$("#adminsignup").submit();
                }
        	}
      	});
      	return false;
	}
});

//Get Employee list for particular clients
function getEmployees(clientid)
{
//alert(clientid);
if (clientid=="")
          {
            document.getElementById("searchresult").innerHTML="";
            return false;
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
                document.getElementById("searchresult").innerHTML=xmlhttp.responseText;
              }
              else
              {  
                document.getElementById("searchresult").style.display="none";
                alert("You must complete the intake form"); 
                window.location.href="index.php";
              }
            }
          }
          xmlhttp.open("GET","scripts/clientlist.php?cid="+clientid,true);
          xmlhttp.send();
          return false;
	}
