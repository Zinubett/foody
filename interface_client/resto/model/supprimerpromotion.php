<?php
require("connexion.php");
$connexion=connect_db();



$id_promo=$_POST['id_promo'];


$sql="DELETE FROM `promotion` WHERE `id_promo`='$id_promo'";

$result=$connexion->query($sql);

if($result){
	echo "Promotion  a été supprimer !";
}
else echo "Erreur !";
?>