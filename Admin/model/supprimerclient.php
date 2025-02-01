<?php
require("connexion.php");
$connexion=connect_db();



$id_client=$_POST['id_client'];


$sql="DELETE FROM `client` WHERE `id_client`='$id_client'";

$result=$connexion->query($sql);

if($result){
	echo "client  a été supprimer !";
}
else echo "Erreur !";
?>