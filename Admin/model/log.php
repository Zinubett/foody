<?php

$lg=$_POST['lg'];
$mp=$_POST['mp'];  



$db=mysqli_connect("localhost","root","","restaurant");

$sql="SELECT * FROM `admin` WHERE `login_admin`='$lg' and `mp_admin`='$mp' ; ";

$result=mysqli_query($db,$sql);

$count=mysqli_num_rows($result);

if ($count>0)
{$row =mysqli_fetch_assoc($result);

	echo "success";
	session_start();
	$_SESSION["log"]="1";
	$_SESSION["id_admin"]=$row["id_admin"];
	$_SESSION["nom_admin"]=$row["nom_admin"];
}
else  echo "failed";


?>