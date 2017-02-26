
<style>
body
{
	margin:40px;
	background:radial-gradient(white,lightgrey,white);
	color:#370506;
	font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
}
fieldset
{
	    margin: 0 auto;
    padding: 10px;
    color: #1f0b3e;
    background: #2b0e3a;
    height: 360px;
    width: 303px;
    box-shadow: 5px 5px 5px #9775ce;
    font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
    letter-spacing: 1.5px;
    word-spacing: 7px;

}
input
{
	height:25px;
	border-radius:4px;
	color:#361D04;
	padding:5px;}
hr
{
	position:relative;
	top:170px;}
	.submit{
		color: #040F64;
		text-shadow:1px 1px 1px;
		letter-spacing:1.5px;
		padding:3px;
		font-family:cursive;
		
	}
h2
{
	color:#291B80;
	text-shadow:2px 2px 2px #29E194;
	letter-spacing:1.2px;
}
td{
	color:white;}
#hide
{
	display:none;}
</style>
</head>
<div id="hide"><a href="cancel.php">CANCEL BOOKED TICKETS</a></div>
<body> 
<h2 align="center">SEAT AVAILABILITY</h2>
<fieldset>
<form action="search.php" method="post" name="searchform" id="searchform"> 
<table align="center" cellpadding="10px" cellspacing="5px">
<tr>
<td><label for="source">SOURCE</label></td>
<td><input type="text" name="source" id="source"/></td>
</tr>
<tr>
<td><label for="dest">DESTINATION</label></td>
<td><input type="text" name="dest" id="dest"/></td></tr>
<tr><td></td><td><button class="submit" name="submit1" id="submit1" value="submit">SUBMIT QUERY</button></td></tr>
<tr><hr></tr>
<tr><td><b>OR</b></td></tr></form>
<form action="search.php" method="post" name="searchform2" id="searchform2"> 
<tr>
<td><label for="name">TRAIN NAME</label></td>
<td><input type="text" name="name" id="name"/></td>
</tr>
<tr><td></td><td><button class="submit" name="submit2" id="submit2" value="submit">SUBMIT QUERY</button></td></tr>
</form></table></fieldset>