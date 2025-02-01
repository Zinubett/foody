<?php
require("connexion.php");
$connexion=connect_db();



$id_cmd=$_POST['id_cmd'];


$sql="UPDATE `commande` SET `etat_commande`=2   WHERE `id_cmd`='$id_cmd'";

$result=$connexion->query($sql);

if($result){
	echo "commabde  a été accepter !";
}
else echo "Erreur !";
?>