<?php
require("connexion.php");
$connexion=connect_db();



$id_client=$_POST['id_client'];


$sql="UPDATE `client`  SET `etat`=1 where `id_client`='$id_client' ";

$result=$connexion->query($sql);

if($result){
	echo "Client  a été valider !";
}
else echo "Erreur !";
?>