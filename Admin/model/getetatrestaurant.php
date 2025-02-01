<?php
require("connexion.php");
$connexion=connect_db();



$id_rest=$_POST['id_rest'];


$sql="UPDATE `restaurant` 
SET `etat`=1 WHERE `id_rest`='$id_rest'";

$result=$connexion->query($sql);

if($result){
	echo "Client  a été valider !";
}
else echo "Erreur !";
?>