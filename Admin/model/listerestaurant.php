<?php 
require("connexion.php");




function get_all_restaurant()
{

$con=connect_db();

$restaurant=array();
$sql="SELECT * FROM `restaurant` WHERE `etat`=1";
$result=$con->query($sql);

foreach($result as $ligne){
      $restaurant[]=$ligne;

}

return $restaurant;

}

?>