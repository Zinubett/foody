<?php

$log=$_POST['log'];
$mtp=$_POST['mtp'];  



$db=mysqli_connect("localhost","root","","restaurant");

$sql="SELECT * FROM `coursier` WHERE `login_coursier`='$log' and `mp_coursier`='$mtp' ; ";

$result=mysqli_query($db,$sql);

$count=mysqli_num_rows($result);

if ($count>0)
{$row =mysqli_fetch_assoc($result);
	echo "success";
	session_start();
	$_SESSION["log"]="1";
	$_SESSION["id_coursier"]=$row["id_coursier"];
	$_SESSION["nom_coursier"]=$row["nom_coursier"];
}
else  echo "failed";


?>