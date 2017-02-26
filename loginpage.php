<style>

body
{
	background:#F3D5D5;}
#login_box{
	width:55%;
	margin:0 auto;
color: burlywood;
    background: #190514;
	
}
#pop_head{
background:#964d4d;
    padding: 10px 0;
    width: 100%;
    overflow:hidden;
position:relative;}
.login_error{
    display: none;
    width: 100%;
    color: #da534d;
    padding: 3px 0;
    font-style: normal;
    font-size: 11px;
clear: both;}
.login_content .row .rowl
{
	width:20%;
	float:left;
}
.login_content .row .rowr
{
	width:80%;
	float:left;
}
.row .erLbl {
   // display:block;
    -webkit-animation: vibrate 400ms;
    -moz-animation: vibrate 400ms;
    animation: vibrate 400ms;
}
.erLbl {
    display:none;
    width: 100%;
    color: #da534d;
    padding: 3px 0;
    font-style: normal;
    font-size: 11px;
    clear: both;
}
.login_content .row{
	padding:10px 0px;
	width:100%;
	margin:20px;
}
.row_forget{
	text-align:right;
	text-transform:capitalize;
}
.loginLay {
    width:60%;
    margin:0 auto;
    padding:50px 0 10px;
}
button{
	padding:5px;
	letter-spacing:0.8px;
	font-family:arial;
	text-shadow:1px 1px 1px;cursor:pointer;
}
.rowl
{width:100px;}
a
{
	text-decoration:none;
	color:brown;
}
#pop_head{float:left;}
.crs{
					position:fixed;
					right:305px;
					top:0px;}
</style>
<Script>
				function open_popup()
				{
		
	document.getElementById("login_box").style.display="block";
				}
				function popup_close()
				{
	document.getElementById("login_box").style.display="none";
		}
				
		</script>
        <script src="pics/jquery-1.12.0.min.js"></script>
        <script src="pics/jquery.validate.js"></script>

<div id="login_box">
<div id="pop_head"><h2 style="text-align:center;color:white;text-shadow:1px 1px 2px;letter-spacing:1px;word-spacing:7px;">USER LOGIN</h2></div><img class="crs" src="pics/icon/cross2.png" onclick="popup_close()"/>
<div class="login_content">
<form id="login_form" class="loginLay" method="post" action="l_handler.php">
<div class="row">
<div class="row"><i class="login_error" style="display:'inline-block';text-align:'center';">Invalid Details.Please fill valid combination.</i></div>
<div class="row">
<div class="rowl"><label for="elogin">EMAIL ID</label></div><div class="rowr"><input type="text" name="u_eml" id="u_eml" placeholder="Enter valid email-address" required/><i class="erLbl">Please enter valid email address</i>
</div></div>
<div class="row"><div class="rowl"><label for="epass">PASSWORD</label></div><div class="rowr"><input type="password" id="password" name="u_pass" required/></div>
</div>
<div class="row_forget"><a href="" target="_blank">Forgot your password?</a></div>
<div class="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button value="login">LOGIN</button></div>
<div class="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>"Not as a member yet?"</span><a href="railways_reg.php">Register now</a></div>
<div class="row"><cite>In case you are using a public/shared computer we recommend that you logout to prevent any un-authorized access to your account</cite></div>
</div>
</form> 
</div>
</div>