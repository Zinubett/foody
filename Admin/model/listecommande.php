<?php 
require("connexion.php");




function get_all_commande()
{

$con=connect_db();

$commande=array();
$sql="SELECT * FROM `restaurant`, `commande`,`client` WHERE `commande`.`etat_commande`=0 and `client`.`id_client`=`commande`.`id_client` and `restaurant`.`id_rest`=`commande`.`id_rest`
;";
$result=$con->query($sql);

foreach($result as $ligne){
      $commande[]=$ligne;

}

return $commande;

}

?>