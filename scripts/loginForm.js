function ValidateUsername()  
{  
	var inputtxt = document.forms["loginForm"]["username"].value;
	var letters = /^[A-Za-z]+$/;  
	if(inputtxt.match(letters))  
	{  
		return true;  
	}  
	else  
	{  
		alert("Enter only Letters!"); 
		document.loginForm.username.focus();  
		return false;  
	}  
} 