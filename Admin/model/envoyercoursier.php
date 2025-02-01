<?php

require("connexion.php");
$con=connect_db();




$id_cmd=$_POST['id_cmd'];
$id_coursier=$_POST['id_coursier'];



$sql="  UPDATE `commande` SET 

  `valider_coursier`='$id_coursier'


   WHERE  `id_cmd`='$id_cmd' ; " ;




$result=$con->query($sql);
        if ($result) {
        	echo "la commande est envoyé au coursier";

        }
        else echo "erreur";


?>