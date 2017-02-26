<style>
body
{
	color:#350405;
	background:whitesmoke;
	font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
	padding:10px;
}
</style>
<a href="welcome.php"><?php  
session_start();
?>Back</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php">LOGOUT</a>
<?php
session_start();

$a=$_POST['seat'];
echo "<br/>";
$u_eml=$_SESSION['u_eml'];
$train_no=$_SESSION['$train_no'];
echo "<h4>YOUR LOGIN EMAIL ID IS:<br/></h4>".$u_eml;
echo "<br/>";
echo "<h3>TRAIN NO. IS<br/></h3>";
echo $_SESSION['$train_no'];
echo "<br/>";
mysql_connect("localhost","root","");
mysql_select_db("railways");
echo"<br/>";
$query="SELECT Seats_Availability FROM train WHERE Train_no='$train_no' ";
$r=mysql_query($query);
$avail=$r-$a;
echo "REMAINING SEATS:  ";
echo $avail;
echo "<br/>";
if($avail>0)
{echo "<h2 align='center'>SEATS ARE CONFIRMED</h2>";
	echo "<br/>";
	$pnr=rand().rand();
	echo "<h4>YOUR PNR NUMBER IS</h4>".$pnr;
	$query2="UPDATE train SET Seats_Availability='$avail' WHERE Train_no='$train_no' ";
	mysql_query($query2);
echo "<br/>";
$query3="INSERT INTO pnr(User_email,Train_no,pnr_no,seats_booked) VALUES('$u_eml','$train_no','$pnr','$a')";
mysql_query($query3);
}
else
{
	echo "Not enough seats present";
	echo "<br/>";
}

?>
<br/>
<a href="cancel.php">CANCEL MY TICKET</a>