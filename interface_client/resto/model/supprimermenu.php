<?php
require("connexion.php");
$connexion=connect_db();



$id_menu=$_POST['id_menu'];


$sql="DELETE FROM `menu` WHERE `id_menu`='$id_menu'";

$result=$connexion->query($sql);

if($result){
	echo "menu  a été supprimer !";
}
else echo "Erreur !";
?>