<style>
body
{
	background:radial-gradient(white,lightgrey,white);
	color:#370506;
	font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
	letter-spacing:1.2px;
}
a
{
	color:#0E0101;
	text-decoration:none;
	box-shadow:1px 1px 1.2px grey;
}
</style>
<center><?php
session_start();
$pnr=$_POST['pnr'];
$seat=$_POST['seat'];
mysql_connect("localhost","root","");
mysql_select_db("railways");
$query="SELECT seats_booked FROM pnr WHERE pnr_no='$pnr' ";
$s=mysql_query($query);
$avail=$s-$seat;
if($seat>$s)
{
	echo "You Have confirmed less seats.";
}
else
{    $query2="UPDATE pnr SET seats_booked='$avail' WHERE pnr_no='$pnr' ";
mysql_query($query1);
echo"<b>";
	echo "Your Seats are cancelled";
	echo "<br/>";
	echo "Thanks for using our service";
	echo "</b>";
}
?></center>
<br/>
<br/>
<center>
<a href="welcome.php">BACK TO QUERY PAGE</a>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php">LOGOUT</a>
</center>