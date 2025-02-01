<?php
require("connexion.php");
$connexion=connect_db();



$id_cmd =$_POST['id_cmd'];


$sql="SELECT * FROM `commande` WHERE `valider_restaurant`=1 and `valider_coursier`!=0";

$result=$connexion->query($sql);

if($result){
	echo "coursier a été changer !";
}
else echo "Erreur !";
?>