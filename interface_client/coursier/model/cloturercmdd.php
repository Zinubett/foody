<?php
require("connexion.php");
$connexion=connect_db();



$id_cmd=$_POST['id_cmd'];


$sql="UPDATE `commande` SET `etat_commande`=4   WHERE `id_cmd`='$id_cmd'";

$result=$connexion->query($sql);

if($result){
	echo "commabde  a été clôturer !";
}
else echo "Erreur !";
?>