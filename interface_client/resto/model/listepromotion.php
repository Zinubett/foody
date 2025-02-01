<?php 
require("connexion.php");




function get_all_promotion()
{

$con=connect_db();

$promotion=array();
$sql="SELECT * FROM `promotion`";
$result=$con->query($sql);

foreach($result as $ligne){
      $promotion[]=$ligne;

}

return $promotion;

}

?>