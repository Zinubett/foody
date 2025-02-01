<?php
require("connexion.php");
$connexion=connect_db();



$id_cmd=$_POST['id_cmd'];


$sql="UPDATE `commande` SET `valider_restaurant`=2,`etat_commande`=5  WHERE  `id_cmd`='$id_cmd'";

$result=$connexion->query($sql);

if($result){
	echo "commande  a été traiter !";
}
else echo "Erreur !";
?>