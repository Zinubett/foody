<?php
require("connexion.php");
session_start();
$connexion=connect_db();

$id_client=$_SESSION["id_client"];


$restaurant=Array();

$sql="
SELECT * FROM `contenue`,`menu` WHERE `contenue`.`id_menu`=`menu`.`id_menu` and `contenue`.`id_client`='$id_client' and `contenue`.`date`=curdate() 
;
";

$result=$connexion->query($sql);

foreach ($result as $ligne ) {
		$panier[]=$ligne;
	}
	echo  json_encode($panier);






?>