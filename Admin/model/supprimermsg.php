
<?php
require("connexion.php");
$connexion=connect_db();



$id_contact=$_POST['id_contact'];


$sql="DELETE FROM `contact` WHERE `id_contact`='$id_contact'";

$result=$connexion->query($sql);

if($result){
	echo "message  a été supprimer !";
}
else echo "Erreur !";
?>