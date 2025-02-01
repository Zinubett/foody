<?php 
require("connexion.php");




function get_all_coursier()
{

$con=connect_db();

$coursier=array();
$sql="SELECT * FROM `coursier`;";
$result=$con->query($sql);

foreach($result as $ligne){
      $coursier[]=$ligne;

}

return $coursier;

}

?>