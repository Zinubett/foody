<?php

require("connexion.php");
$con=connect_db();



$quantite=$_POST['quantite'];

$id_continue=$_POST['id_continue'];



$sql=" UPDATE `contenue` SET `quantite`='$quantite' WHERE `id_continue`='$id_continue' ; " ;




$result=$con->query($sql);
        if ($result) {
        	echo " quantiter a été modifié";

        }
        else echo "erreur";


?>