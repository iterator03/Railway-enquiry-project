<html>
<head>
<title>Railway Reservation System</title>
<style>
body
{
	background:whitesmoke;
	}
#slider{
	margin-left:320px;
	margin-top:15px;
	margin-right:490px;
	padding:5px;
	background:#012323;
	 box-shadow:5px 5px 8px grey;
	border-radius:15px;
}
#slider img
{
	padding:10px;
	margin-left:35px;
	border-radius:5px;	
}
#header{
	background-image:url("pics/icon/train1.jpg");
	background-repeat:no-repeat;
	height:140px;
	width:inherit;
	box-shadow:2px 2px 5px grey;
	border-radius:5px;
}
h1#heading{
	font-family :Roman;
	color:	#2a52be;
	letter-spacing:1.5px;
	word-spacing:5px;
	text-align:center;
	text-indent:bolder;
	text-shadow:2px 2px 1.5px green;
	padding:10px;
	padding-top:50px;

}
#menu ul li{
	float:left;
	padding:10px;
	color:	#893f45	;
	font-family:cursive;
}
#footer
{
	color:#011336;
	font-family:Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", serif;
	font-size:28px;
	text-shadow:2px 2px 2px white;
	background:lightgrey;
	box-shadow:5px 5px 3px grey;
 height:40px;
}
</style>
<script src="jquery-1.12.0.min.js"></script>
<script>

var len=6;
var counter=0;
var items=Array();

function initial()
{
for(i=1;i<len;i++)
{
items[i]="<img src=pics/r"+(i)+".jpg height='300px' width='400px' class='img_slide' alt='Image cant be displayed'/>"
}
}
function caption_slider()
			{
			var d=document.getElementById("slider");
			d.innerHTML=items[counter+1];
	counter++;
	if(counter==5)
	{
		counter=0;
	}
			}
			setInterval("caption_slider()",4000);
			$(document).ready(function(){
$("#slider").slideUp(3000).fadeToggle(3000);
});
</script>
</head>
<body onload="initial()">
<div id="header">

<h1 id="heading">INDIAN RAILWAY RESERVATION SYSTEM</h1>
</div>
<div id="menu">

<ul type="none">
<li><a href="loginpage.php">LOGIN</a></li>
<li><a href="railways_reg.php">SIGNUP</a></li>
</ul>
</div>
<div id="container">
<div id="slider">
<img src="pics/icon/train.jpg" height="300px" width="400px"/>
</div>
<br/>
<br/>
<br/>
<div id="footer"><marquee>"LOGIN TO BOOK YOUR TICKETS"</marquee></div>
</div>
</body>
</html>