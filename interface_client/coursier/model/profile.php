<?php 
require("connexion.php");
session_start();
function get_all_coordonnee()
{$id=$_SESSION["id_coursier"];
	$con=connect_db();
	$coursier= array ();

	$sql="SELECT * FROM `coursier` WHERE `coursier`.`id_coursier`='$id' 
 ";

	$result=$con->query($sql);
	foreach($result as $ligne){ 
		$coursier[]=$ligne;
	}
	return $coursier;
}
