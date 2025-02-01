<?php

$lg=$_POST['lg'];
$mp=$_POST['mp'];  



$db=mysqli_connect("localhost","root","","restaurant");

$sql="SELECT * FROM `restaurant` WHERE `email_rest`='$lg' and `mp_rest`='$mp' ; ";

$result=mysqli_query($db,$sql);

$count=mysqli_num_rows($result);

if ($count>0)
{$row =mysqli_fetch_assoc($result);
	echo "success";
	session_start();
	$_SESSION["log"]="1";
	$_SESSION["id_rest"]=$row["id_rest"];
	$_SESSION["nom_rest"]=$row["nom_rest"];
	
}
else  echo "failed";


?>