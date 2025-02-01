<?php
require("connexion.php");
$connexion=connect_db();



$id_continue=$_POST['id_continue'];


$sql="DELETE FROM `contenue` WHERE `id_continue`='$id_continue'";

$result=$connexion->query($sql);

if($result){
	echo "l'ordre  a été supprimer !";
}
else echo "Erreur !";
?>