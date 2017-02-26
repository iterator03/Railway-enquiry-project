<html>
<head>
<title>Registration Form</title>
<style>
body{
	background:radial-gradient(white,lightgrey,white);
	color:#370506;
	font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
}
input{
	height:28px;
	border-radius:3px;
	box-shadow:2px 2px 2px grey;
	color:#6e7f80;
	font-family:cursive;
}
fieldset
{
	width:400px;
	box-shadow:5px 5px 5px grey;
	margin:0 auto;
	color:	#3d2b1f;

}
legend
{
	text-shadow:2px 2px 2px;
	padding:6px;
	font-family:cursive;
 color:black;
 font-size:25px;
}
.error
{
	font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
	padding:3px;
	color:#AA21CF;
}
</style>
		<script src="pics/jquery-1.12.0.min.js"></script>
        <script src="pics/jquery.validate.js"></script>
        <script src="signupform.js"></script>
</head>
<body>
<center>
<fieldset>
<legend><b>Registration</b></legend>
<form method="post" name="regform" id="regform" autocomplete="off" action="r_handler.php">
<table cellpadding="10px" cellspacing="10px">
<tr>
<td><label for="name">USERNAME</label></td>
<td><input type="text" name="name" id="name"/>&nbsp;&nbsp;&nbsp;<br/></td>
</tr>
<tr>
<td><label for="password">PASSWORD</label></td>
<td><input type="password" name="password" id="password"/>&nbsp;&nbsp;&nbsp;<br/></td>
</tr>
<tr>
<td><label for="cpassword">CONFIRM
PASSWORD</label></td>
<td><input type="password" name="cpassword"/>&nbsp;&nbsp;&nbsp;<br/></td>
</tr>
<span id="errmsg"></span>
<tr>
<td><label for="email">EMAIL</label></td>
<td><input type="email" name="email" id="email"/>&nbsp;&nbsp;&nbsp;<br/></td>
</tr>
<tr>
<td>
<input type="submit" value="SUBMIT"/></td>
<td>
<input type="reset" value="RESET"/></td></tr>
</table>
</form>
</fieldset>
</center>
</body>
</html>