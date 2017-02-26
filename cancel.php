<style>
body
{background:radial-gradient(white,lightgrey,white);
	color:#370506;
	font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
}
#popup_box
{
	height:350px;
	width:400px;
	color:#05847E;
	font-family:Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", serif;
	margin:0 auto;
	margin-top:100px;
	padding:10px;
	text-align:center;
	box-shadow:2px 2px 5px 5px #030B2A;
}
#pop_head{float:left;}
.crs{
					position:fixed;
					right:450px;
					top:90px;}
					#submit
					{
						color:#0F0357;
						text-shadow:1px 1px 1px;
						font-family:cursive;
						padding:5px;
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
<div id="pop_head"><h2 style="text-align:center;color:black;text-shadow:1px 1px 2px;letter-spacing:1px;word-spacing:7px;">SEAT CANCELLATION</h2></div><img class="crs" src="pics/icon/cross2.png" onclick="popup_close()"/>
<br/>
<br/>
<br/>
<br/>
<form method="post" action="cancelling.php">
<br/>
<label for="pnr">PNR NO.</label>
<br/>
<input type="number" id="pnr" name="pnr"/>
<br/>
<br/>
<label for="seat">HOW MANY SEATS YOU WANT TO CANCEL?</label>
<br/>
<input type="number" id="seat" name="seat"/>
<br/>
<br/>
<input type="submit" value="SUBMIT" id="submit">
</form>
</div>