<?php
session_start();
$eml=$_POST['u_eml'];
$pass=$_POST['u_pass'];
	mysql_connect("localhost","root","");
	mysql_select_db("railways");
	$query="SELECT *FROM register WHERE email='$eml' and password='$pass'";
	$res=mysql_query($query);
	$count=mysql_num_rows($res);
	if($count==0)
	{   echo "Register Please";
	
		header("location:railways_reg.php");
		
	}
	else{
		$_SESSION['u_eml']=$eml;
		header("location:welcome.php");
	}
?>