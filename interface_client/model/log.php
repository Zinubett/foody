<?php

$logn=$_POST['connect'];
$mtpn=$_POST['pass'];  



$db=mysqli_connect("localhost","root","","restaurant");

$sql="SELECT * FROM `client` WHERE `login_client`='$logn' and `mp_client`='$mtpn' ; ";

$result=mysqli_query($db,$sql);

$count=mysqli_num_rows($result);

if ($count>0)
{$row =mysqli_fetch_assoc($result);


	echo "success";
	session_start();
	$_SESSION["log"]="1";

	$_SESSION["id_client"]=$row["id_client"];
}
else  echo "failed";


?>