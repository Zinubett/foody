<?php

require("connexion.php");
$con=connect_db();



$id_menu=$_POST['id_menu'];
$nom_menu=$_POST['nom_menu'];

$prix_unitaire=$_POST['prix_unitaire'];
$description=$_POST['description'];
$image=$_POST['image'];

$sql="  UPDATE `menu` SET `nom_repas`='$nom_menu',`prix_unitaire`='$prix_unitaire',`description`='$description',`image`='$image' WHERE `id_menu`='$id_menu' ; " ;




$result=$con->query($sql);
        if ($result) {
        	echo " menu a été modifié";

        }
        else echo "erreur";


?>