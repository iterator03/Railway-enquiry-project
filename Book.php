<?php
session_start();
$train_no=$_GET['train_no'];
echo "TRAIN NO IS:";
echo $train_no;
$_SESSION['$train_no']=$train_no;
?>

<style>
#popup_box
{
	height:200px;
	width:400px;
	color:#05847E;
	font-family:Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", serif;
	margin:0 auto;
	margin-top:200px;
	padding:10px;
	text-align:center;
	box-shadow:2px 2px  5px 5px #030B2A;
}
#pop_head{float:left;}
.crs{
					position:fixed;
					right:450px;
					top:220px;}
					.btn{
						color:white;
						background:#360B0B;
						padding:5px;
						text-align:center;
						border-radius:2px;
					}
					input
					{
						height:30px;
						border-radius:2px;
						}
</style>
<script>
function open_popup()
				{
		
	document.getElementById("popup_box").style.display="block";
				}
				function popup_close()
				{
	document.getElementById("popup_box").style.display="none";
		}
</script>
<div id ="popup_box">
<div id="pop_head"><h2 style="text-align:center;color:black;text-shadow:1px 1px 2px;letter-spacing:1px;word-spacing:7px;">SEAT SELECTION</h2></div><img class="crs" src="pics/icon/cross2.png" onclick="popup_close()"/>
<br/>
<br/>
<br/>
<br/>
<form method="post" action="valid.php">
<label for="seat">HOW MANY SEATS YOU WANT TO BOOK?</label>
<br/>
<br/>
<input type="number" id="seat" name="seat"/>
&nbsp;&nbsp;
<input type="submit" value="submit" class="btn">
</form>
</div>
