<?php 
require("connexion.php");




function get_all_client()
{

$con=connect_db();

$client=array();
$sql="SELECT * FROM `client` WHERE `etat`=0";
$result=$con->query($sql);

foreach($result as $ligne){
      $client[]=$ligne;

}

return $client;

}



function get_all_restaurant()
{

$con=connect_db();

$restaurant=array();
$sql="SELECT * FROM `restaurant` WHERE `etat`=0";
$result=$con->query($sql);

foreach($result as $ligne){
      $restaurant[]=$ligne;

}

return $restaurant;

}

?>