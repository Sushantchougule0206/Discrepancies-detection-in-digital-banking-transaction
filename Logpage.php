<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
include("db.php");

$d= $_POST["UserEmail"];
$e= $_POST["UserPass"];

$result = $conn->query("select * From customer where Email='$d' and Pass ='$e'");

while($row = $result->fetch_assoc())
	{	
			$_SESSION['userid'] = $row['CID'];
			$_SESSION['username']= $row['Name'];
	}
		

if($_SESSION['userid']!="" and $_SESSION['username']!="")
	{
		echo "<script> location.href=\"index.php?page=1\";</script>";
	}
	else
	{
	    echo "<font color='#FF0000' >Login Fail plz Check Email and Password.!</font>";
	}

?>
