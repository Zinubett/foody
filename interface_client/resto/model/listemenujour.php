<?php 
require("connexion.php");




function get_all_menujour()
{

$con=connect_db();

$menujour=array();
$sql="SELECT * FROM `menu` WHERE `jour`=1";
$result=$con->query($sql);

foreach($result as $ligne){
      $menujour[]=$ligne;

}

return $menujour;

}

?>