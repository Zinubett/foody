<?php
require("connexion.php");
$connexion=connect_db();



$id_menu=$_POST['id_menu'];


$sql="UPDATE `menu` SET `jour`='1' WHERE `id_menu`='$id_menu'";

$result=$connexion->query($sql);

if($result){
	echo "menu de jour  a été supprimer !";
}
else echo "Erreur !";
?>