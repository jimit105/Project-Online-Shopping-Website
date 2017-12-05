function ValidateFname()  
{  
	var inputtxt = document.forms["signupForm"]["fname"].value;
	var letters = /^[A-Za-z]+$/;  
	if(inputtxt.match(letters))  
	{  
		return true;  
	}  
	else  
	{  
		alert("Enter only Letters!"); 
		document.signupForm.fname.focus();  
		return false;  
	}  
} 

function ValidateLname()  
{  
	var inputtxt = document.forms["signupForm"]["lname"].value;
	var letters = /^[A-Za-z]+$/;  
	if(inputtxt.match(letters))  
	{  
		return true;  
	}  
	else  
	{  
		alert("Enter only Letters!"); 
		document.signupForm.Lname.focus();  
		return false;  
	}  
} 

function ValidateEmail()  
{  
	var checkmail = document.forms["signupForm"]["email"].value;
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
	if(checkmail.match(mailformat))  
	{  
		document.myForm.emailAddr.focus();  
		return true;  
	}  
	else  
	{  
		alert("Invalid Email Address!");  
		document.signupForm.email.focus();  
		return false;  
	}  
}  

function ValidateMobile()  
{
	var checkmobile = document.forms["signupForm"]["phone"].value;
	var numbers = /^[0-9]+$/;  
	if(checkmobile.match(numbers))  
	{  
		return true;  
	}  
	else  
	{  
		alert("Invalid Mobile Number!");  
		document.signupForm.phone.focus();  
		return false;  
	}  
}