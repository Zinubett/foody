<?php 
require("connexion.php");




function get_all_commandereçu()
{

$con=connect_db();

$commande=array();
$sql="SELECT * FROM `commande`,`client`,`restaurant`

						 WHERE `commande`.`id_client`=`client`.`id_client`

						  and `commande`.`id_rest`= `restaurant`.`id_rest`

						   and `commande`.`etat_commande`=1
 ";
$result=$con->query($sql);

foreach($result as $ligne){
      $commande[]=$ligne;

}

return $commande;

}

?>