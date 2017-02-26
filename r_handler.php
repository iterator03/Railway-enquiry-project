<?php
session_start();

$name=$_POST['name'];
$eml=$_POST['email'];
$pass=$_POST['password'];
$cpass=$_POST['cpassword'];

mysql_connect("localhost","root","");
mysql_select_db("railways");
$res="SELECT *FROM register WHERE email='$eml' ";
$result=mysql_query($res);
$query="INSERT INTO register(Username,Password,Email,DateTime) VALUES('$name',MD5('$pass'),'$eml',NOW())";

mysql_query($query);
$_SESSION['u_eml'] = $eml;
	header("location:welcome.php");
?>	

















?>