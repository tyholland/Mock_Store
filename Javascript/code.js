function show(url) 
{
	newwindow = window.open(url,'name','height=380px,width=400px,left=300px,resizable,scrollbars=yes');
	if (window.focus)
	{
		newwindow.focus()
	}
} 

function Alert()
{
	alert("Your username or password is wrong");
}

function Alert2()
{
	alert("There is already an account with this information");
}

function Alert3()
{
	alert("You have to sign in before you can buy anything");
}

function Info()
{
	lname = document.reg.lname.value;
	fname = document.reg.fname.value;
	email = document.reg.email.value;
	user2 = document.reg.user.value;
	pwd1 = document.reg.pwd1.value;
	pwd2 = document.reg.pwd2.value;
	
	msg = "";
	
	if ( (lname == "") || (fname == "") || (email == "") || (user2== "") || (pwd1 == "") || (pwd2 == "") )
	{
		alert("All fields are required ");
		return false;
	}
	
	if ( pwd1 != pwd2 )
	{
		msg += "Your passwords don't match \n";
	}

	llen = lname.length;
	flen = fname.length;

	
	if ( !isNaN(fname) )
	{
		msg += "First Name can't contain numbers \n";
	}
	
	if ( !isNaN(lname) )
	{
		msg += "Last Name can't contain numbers \n";
	}

	if ( llen <= 2 )
	{
		msg += "Last Name has to be 3 or more characters long \n";
	}
	
	if ( flen <= 2 )
	{
		msg += "First Name has to be 3 or more characters long \n";
	}
	
	pos = email.indexOf("@",0);
	if (pos == -1)
	{
		msg += "You dont have an @ sign \n";
	}
	else
	{
		pos2 = email.indexOf("@", pos + 1) 
		if (pos2 != -1)
		{
			msg += "Too many @ signs. \n";
		}
	}
	pos3 = email.indexOf(".", pos + 1);
	diff = pos3 - pos;
	if(diff <= 3)
	{
		msg += "domain name is too short";
	}

	if (msg == "")
	{
		return true;
	}
	else
	{
		alert(msg);
		return false;
	}
}

function Info2()
{
	user = document.log.user.value;
	pwd = document.log.pwd.value;
	
	msg = "";
	
	if ( (user == "") || (pwd == "") )
	{
		alert("Both fields are required");
		return false;
	}
	
		if (msg == "")
	{
		return true;
	}
	else
	{
		alert(msg);
		return false;
	}
}

function Email()
{
	lname = document.mail.lname.value;
	fname = document.mail.fname.value;
	email = document.mail.email.value;
	message = document.mail.message.value;
	
	msg = "";
	
	if ( (lname == "") || (fname == "") || (email == "") || (message== "") )
	{
		alert("All fields are required ");
		return false;
	}

	llen = lname.length;
	flen = fname.length;

	
	if ( !isNaN(fname) )
	{
		msg += "First Name can't contain numbers \n";
	}
	
	if ( !isNaN(lname) )
	{
		msg += "Last Name can't contain numbers \n";
	}

	if ( llen <= 2 )
	{
		msg += "Last Name has to be 3 or more characters long \n";
	}
	
	if ( flen <= 2 )
	{
		msg += "First Name has to be 3 or more characters long \n";
	}
	
	pos = email.indexOf("@",0);
	if (pos == -1)
	{
		msg += "You dont have an @ sign \n";
	}
	else
	{
		pos2 = email.indexOf("@", pos + 1) 
		if (pos2 != -1)
		{
			msg += "Too many @ signs. \n";
		}
	}
	pos3 = email.indexOf(".", pos + 1);
	diff = pos3 - pos;
	if(diff <= 3)
	{
		msg += "domain name is too short";
	}

	if (msg == "")
	{
		return true;
	}
	else
	{
		alert(msg);
		return false;
	}
}

function Confirm()
{
	lname = document.acc.lname.value;
	fname = document.acc.fname.value;
	email = document.acc.email.value;
	user2 = document.acc.user.value;
	pwd1 = document.acc.pwd1.value;
	
	msg = "";
	
	if ( (lname == "") || (fname == "") || (email == "") || (user2== "") || (pwd1 == "") )
	{
		alert("Your First and Last name, Email, Username, and Old Password are required");
		return false;
	}

	llen = lname.length;
	flen = fname.length;

	
	if ( !isNaN(fname) )
	{
		msg += "First Name can't contain numbers \n";
	}
	
	if ( !isNaN(lname) )
	{
		msg += "Last Name can't contain numbers \n";
	}

	if ( llen <= 2 )
	{
		msg += "Last Name has to be 3 or more characters long \n";
	}
	
	if ( flen <= 2 )
	{
		msg += "First Name has to be 3 or more characters long \n";
	}
	
	pos = email.indexOf("@",0);
	if (pos == -1)
	{
		msg += "You dont have an @ sign \n";
	}
	else
	{
		pos2 = email.indexOf("@", pos + 1) 
		if (pos2 != -1)
		{
			msg += "Too many @ signs. \n";
		}
	}
	pos3 = email.indexOf(".", pos + 1);
	diff = pos3 - pos;
	if(diff <= 3)
	{
		msg += "domain name is too short";
	}

	if (msg == "")
	{
		return true;
	}
	else
	{
		alert(msg);
		return false;
	}
}

function Update()
{
	lname = document.acc.lname.value;
	fname = document.acc.fname.value;
	email = document.acc.email.value;
	user2 = document.acc.user.value;
	pwd1 = document.acc.pwd1.value;
	pwd2 = document.acc.pwd2.value;
	pwd3 = document.acc.pwd3.value;
	
	msg = "";
	
	if ( (lname == "") || (fname == "") || (email == "") || (user2== "") || (pwd1 == "") )
	{
		alert("All preset fields are required");
		return false;
	}
	
	if ( pwd3 != pwd2 )
	{
		msg += "Your passwords don't match \n";
	}
	
	if ( (pwd3 === pwd1) || (pwd2 == pwd1) )
	{
		msg += "Your new password has to be different from the old password \n";
	}

	llen = lname.length;
	flen = fname.length;

	
	if ( !isNaN(fname) )
	{
		msg += "First Name can't contain numbers \n";
	}
	
	if ( !isNaN(lname) )
	{
		msg += "Last Name can't contain numbers \n";
	}

	if ( llen <= 2 )
	{
		msg += "Last Name has to be 3 or more characters long \n";
	}
	
	if ( flen <= 2 )
	{
		msg += "First Name has to be 3 or more characters long \n";
	}
	
	pos = email.indexOf("@",0);
	if (pos == -1)
	{
		msg += "You dont have an @ sign \n";
	}
	else
	{
		pos2 = email.indexOf("@", pos + 1) ;
		if (pos2 != -1)
		{
			msg += "Too many @ signs. \n";
		}
	}
	pos3 = email.indexOf(".", pos + 1);
	diff = pos3 - pos;
	if(diff <= 3)
	{
		msg += "domain name is too short";
	}

	if (msg == "")
	{
		return true;
	}
	else
	{
		alert(msg);
		return false;
	}
}