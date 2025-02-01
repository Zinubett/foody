<?php 
require("connexion.php");




function get_all_commande()
{

$con=connect_db();

$commande=array();
$sql="SELECT * FROM `commande` WHERE `etat_commande`!=0;";
$result=$con->query($sql);

foreach($result as $ligne){
      $commande[]=$ligne;

}

return $commande;

}

?>