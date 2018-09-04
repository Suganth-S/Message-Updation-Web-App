var err_msg="";
function isAlphaNumeric(e)
{ // Alphanumeric only

//	var k;
	//document.all ? k=e.keycode : k=e.which;
	var k;
	if (window.event)
		k = window.event.keyCode;  //for IE
	else
		k = evt.which;  //for firefox
		return((k>47 && k<58)||(k>64 && k<91)||(k>96 && k<123)||k==0);
}

function onlyAlphabets(evt) 
{
	var charCode;
	if (window.event)
		charCode = window.event.keyCode;  //for IE
	else
		charCode = evt.which;  //for firefox
	if (charCode == 32) //for &lt;space&gt; symbol
		return true;
	if (charCode > 31 && charCode < 65) //for characters before 'A' in ASCII Table
		return false;
	if (charCode > 90 && charCode < 97) //for characters between 'Z' and 'a' in ASCII Table
		return false;
	if (charCode > 122) //for characters beyond 'z' in ASCII Table
		return false;
	return true;
}
	
function isNumberKey(evt)
{ // Numbers only
	var charCode;
	if (window.event)
		charCode = window.event.keyCode;  //for IE
	else
		charCode = evt.which;  //for firefox
	
	if (charCode > 31 && (charCode < 48 || charCode > 57))
		return false;
	return true;
}

function pwdMatch()
{
	var pwd=document.getElementById("password").value;
	var cpwd=document.getElementById("cpassword").value;
	if(cpwd!=pwd)
	{
		document.getElementById("password").style.border = "1px solid #FF0000";
		document.getElementById("cpassword").style.border = "1px solid #FF0000";
	}
	else
	{
		document.getElementById("cpassword").style.border = "";
		document.getElementById("password").style.border = "";
	}
}



function checkMail(emailId)
{
	
	var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
	 if(!(expr.test(emailId)))
	 {
		 alert("Invalid E-Mail");
		 return false;
	 }
	
}

function isMobileNo(mobile) {
	 
        var pattern = /^\d{10}$/;
        if (!pattern.test(mobile)) {
                alert("It is not valid mobile number.input 10 digits number!");
            return false;
		}

    }
	
function formValidation() 
{
	//Check Boxes Validation
	var b = 0, chk=document.getElementsByName("tech[]");
	for(j=0;j<chk.length;j++) 
	{
		if(chk.item(j).checked == true) 
		{
			b++;
		}
	}
	
	if(b)
		err_msg="";
	else
		{
			alert("Select Technical Proficiency");
			err_msg="Technical";
		}
	

//Branch Select Box Validation

	var branch=document.getElementById('branch');
	var year=document.getElementById('year');
	if(branch.value==0)
	{
		alert("Please select the Branch");
		err_msg="Branch";
	}
	else
		err_msg="";
	
	if(year.value==0)
	{
		alert("Please select the Year");
		err_msg="Year";
	}
	else
		err_msg="";
	
	//Form Submission
	
	if(err_msg=="")
		return true;
	else
		return false;
	
}



