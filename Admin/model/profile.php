<?php 
require("connexion.php");
session_start();
function get_all_coordonnee()
{$id=$_SESSION["id_admin"];
	$con=connect_db();
	$admin= array ();

	$sql="SELECT * FROM `admin` WHERE  `admin`.`id_admin`='$id' 
 ";

	$result=$con->query($sql);
	foreach($result as $ligne){ 
		$admin[]=$ligne;
	}
	return $admin;
}


