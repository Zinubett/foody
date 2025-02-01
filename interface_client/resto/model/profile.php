<?php 
require("connexion.php");
session_start();
function get_all_coordonne()
{$id=$_SESSION["id_rest"];
	$con=connect_db();
	$restaurant= array ();

	$sql="SELECT * FROM `restaurant` WHERE `id_rest`='$id' 
 ";

	$result=$con->query($sql);
	foreach($result as $ligne){ 
		$restaurant[]=$ligne;
	}
	return $restaurant;
}
