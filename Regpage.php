<?php
include("db.php");

$a= $_POST["FullNam"];
$b= $_POST["Emailid"];
$c= $_POST["MobNo"];
$d= $_POST["Pass"];
$e= $_POST["Cpass"];
$g= $_POST["Accid"];
$ee= $_POST['Address'];

$mess="";
$mess.=Fullnamevalid($a,"Enter Full Name");
$mess.=EmailValid($b,"Plz Enter valid Email");
$mess.=DatbaseValid($b,"Email All Ready Register");
$mess.=Passvalid($d,"Plz Enter Password",8);
$mess.=EqualValid($d,$e,"Password Conformation Fail");
$mess.=DatbaseValid1($g,"Bank Account No. All Ready Register");


	//++++++++Full Name Only+++++++++++++++
	function Fullnamevalid($names,$nametital)
	{
         if(!preg_match('/^[_a-z]+( [_a-z]+)$/i',$names))
         {
         return $nametital.",";
         }
	}

	//++++++++Email Valid+++++++++++++++
	function EmailValid($names,$nametital)
	{
		if(!preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/', $names))
		{
			 return $nametital.",";
		}
	}

		//++++++++Not Empty+++++++++++++++
	function nullvalid($names,$nametital)
	{
		if($names=="")
		{
         return $nametital.",";
		}	
	}

//++++++++Data Base Valid+++++++++++++++
	function DatbaseValid($valuechk,$nametital)
	{
	global $conn;
	$result = $conn->query("select * from  customer where Email='".$valuechk."'");
 
	if($result->num_rows>=1)
		{
		 return $nametital.",";
		}
	}

//++++++++Data Base Valid+++++++++++++++
	function DatbaseValid1($valuechk,$nametital)
	{
	global $conn;
	$result = $conn->query("select * from  customer where Accid='".$valuechk."'");
	if($result->num_rows>=1)
		{
		 return $nametital.",";
		}
	}

	function Passvalid($names,$nametital,$length)
	{
		$x=strlen($names);
		if($x<$length)
		{
			return $nametital."(Min Length $length),";
		}
	}

//++++++++Equal Valid+++++++++++++++
	function EqualValid($names1,$names2,$nametital)
	{
		if($names1!=$names2 || $names1=="")
		{
			 return $nametital.",";
		}
	}

if($mess=="")
{

$a=$conn->query("INSERT INTO customer(Name,Email,Mob,pass,Address,Accid) VALUES ('$a','$b','$c','$d','$ee','$g')");

echo "<script> alert('Thank For Registration.!'); location.href=\"index.php?page=5\";</script>";
}
else
{
echo "<font color='#FF0000' >Registration Fail:".$mess."</font>";
}

?>
