<?php
require("connexion.php");
$connexion=connect_db();



$id_coursier =$_POST['id_coursier'];


$sql="DELETE FROM `coursier` WHERE `id_coursier`='$id_coursier'";

$result=$connexion->query($sql);

if($result){
	echo "coursier  a été supprimer !";
}
else echo "Erreur !";
?>