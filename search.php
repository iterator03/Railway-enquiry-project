<style>
body
{
	background:radial-gradient(white,lightgrey,white);
	color:#370506;
	font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
}
table
{
	cellspacing:15px;
	cellpadding:20px;
	width:900px;
	color:#370909;
	 margin-top:50px;
     border:5px 2px outset grey;	 
	}
	td
	{   padding:5px;
	     color:black;
		text-align:center;
		font-size:16px;
		font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
	}
	tr
	{
		box-shadow:1px 1px 1px black;
	}
	th
	{
		box-shadow:2px 2px 1px grey;
		padding:3px;
		letter-spacing:1.1px;
		color:#3B0405;}
		h2
{
	color:#291B80;
	text-shadow:2px 2px 3px #29E194;
	letter-spacing:1.2px;
	margin-top:20px;
	margin-bottom:0px;
}
</style>
<h2 align="center"> TRAIN DETAILS
</h2>
<table align="center">
<?php
session_start();
 mysql_connect("localhost","root","");
 mysql_select_db("railways");
 echo "<tr>";
echo"<th>TRAIN NO.</th>";
echo"<th>TRAIN NAME</th>";
echo"<th>SOURCE</th>";
echo"<th>DESTINATION</th>";
echo"<th>ARRIVAL</th>";
echo"<th>DEPATURE</th>";
echo"<th>SEATS AVAILABLE</th>";
echo"<th>BOOK NOW</th>";
echo"</tr>";
 if(isset($_POST["submit1"]))
 {   $source=$_POST['source'];
 $dest=$_POST['dest'];
	$query="SELECT *FROM train WHERE Source='$source' and Destination='$dest' ";
	$res = mysql_query($query);
	while($row=mysql_fetch_array($res))
	{    echo "<tr>";
		echo "<td>".$row[0]."</td>";
		echo "<td>".$row[1]."</td>";
		echo "<td>".$row[2]."</td>";
		echo "<td>".$row[3]."</td>";
		echo "<td>".$row[4]."</td>";
		echo "<td>".$row[5]."</td>";
		echo "<td>".$row[6]."</td>";
		echo "<td>";
		echo "<a href='Book.php?train_no=$row[0]' name='link1'>".BOOK."</a>";
		echo "</td>";
		echo "</tr>";
	}
 }
 else if(isset($_POST["submit2"]))
 {  $name=$_POST['name'];
 $query="SELECT *FROM train WHERE Train_name='$name' ";
	$res=mysql_query($query);
	while($row=mysql_fetch_array($res))
	{    echo "<tr>";
		echo "<td>".$row[0]."</td>";
		echo "<td>".$row[1]."</td>";
		echo "<td>".$row[2]."</td>";
		echo "<td>".$row[3]."</td>";
		echo "<td>".$row[4]."</td>";
		echo "<td>".$row[5]."</td>";
		echo "<td>".$row[6]."</td>";
		echo "<td>";
		echo "<a href='Book.php?train_no=$row[0]' name='link2'>".BOOK."</a>";
		echo "</td>";
		echo "</tr>";
	}
 }
 echo "</table>";
 
 ?>