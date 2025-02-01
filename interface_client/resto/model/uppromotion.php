<?php

require("connexion.php");
$con=connect_db();



$nom_promo=$_POST['nom_promo'];
$prix_unitiale=$_POST['prix_unitiale'];

$prix_promo=$_POST['prix_promo'];
$description_promo=$_POST['description_promo'];

$date_debut=$_POST['date_debut'];
$date_fin=$_POST['date_fin'];
$image=$_POST['image'];
$id_promotion=$_POST['id_promotion'];



$sql="  UPDATE `promotion` 
SET `nom_promo`='$nom_promo',`prix_unitiale`='$prix_unitiale',`prix_promo`='$prix_promo',`description_promo`='$description_promo',`date_debut`='$date_debut',`date_fin`='$date_fin',`image`='$image' 
WHERE `id_promo`='$id_promotion' ; " ;




$result=$con->query($sql);
        if ($result) {
        	echo " promotion a été modifié";

        }
        else echo "erreur";


?>