<html>
<head>
<title>LogIn Form</title>
<!-------------------JAVA SCRIPT CODE START------------------>
<SCRIPT LANGUAGE="JavaScript">
function ChkLogin()
{
    
	var message;
	var myusername = document.form.myusername.value;
    var mypassword = document.form.mypassword.value;
    var myregistration = document.form.myregistration.value;
	if (myusername=="" || mypassword=="" || myregistration=="")
	{
		if (myusername=="" && mypassword=="" && myregistration=="") 
			{
				message = "Please input your username,password and registration no.";
			} 
		else if (myusername=="") 
			{
				message = "Please input your username.";
			} 
		else if (mypassword =="") 
			{    
				message = "Please input your password.";
			}
		else if(myregistration =="")
			{    
				message = "Please input your Registration no";
			}
		alert(message);
		return false;
 
    }
	else 
	{
		makeExternalPopup();
		return true;
	}
}
</script>
</head>
<body>
<form name="form" method="post" action="checklogin.php"onsubmit="return ChkLogin(this);">
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" >
<tr>
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3"><strong>Member Login </strong></td>
</tr>
<tr>
<td width="78">Username</td>
<td width="6">:</td>
<td width="294"><input name="myusername" type="text" id="myusername"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="mypassword" type="password" id="mypassword"></td>
</tr>
<tr>
<td>Regist. no</td>
<td>:</td>
<td><input name="myregistration" type="password" id="myregistration"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input STYLE="background-color: #8b008b; color: #ffff00; font-weight: bold; font-size: 10pt;" type="submit"  name="Submit" value="Login" ></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
</form>
</body>
</html>
