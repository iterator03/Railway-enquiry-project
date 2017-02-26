<?php
session_start();

$name=$_POST['name'];
$eml=$_POST['email'];
$pass=$_POST['password'];
$cpass=$_POST['cpassword'];

if('$name'==" "||'$eml'==" "||'$pass'==" "||'$cpass'==" ")
{
	echo("Please enter the field");
}
else 
{if('$pass'!='$cpass')
{
		echo("Password dont match");
}
else
{
mysql_connect("localhost","root","");
mysql_select_db("railways");
$res="SELECT *FROM register WHERE email='$eml' ";
$result=mysql_query($res);
$count=mysql_num_rows($result);
if($count==0)
{
$query="INSERT INTO register(Username,Password,Email) VALUES('$name',MD5('$pass'),'$eml')";

mysql_query($query);
$_SESSION['name'] = $name;
	header("location:train.php");
}
}}
?>