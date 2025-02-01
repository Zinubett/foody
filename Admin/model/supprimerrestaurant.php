<?php
require("connexion.php");
$connexion=connect_db();



$id_rest =$_POST['id_rest'];


$sql="DELETE FROM `restaurant` WHERE `id_rest`='$id_rest'";

$result=$connexion->query($sql);

if($result){
	echo "restaurant  a été supprimer !";
}
else echo "Erreur !";
?>