<?php 
require("connexion.php");




function get_all_client()
{

$con=connect_db();

$client=array();
$sql="SELECT * FROM `client` WHERE `etat`=1";
$result=$con->query($sql);

foreach($result as $ligne){
      $client[]=$ligne;

}

return $client;

}

?>