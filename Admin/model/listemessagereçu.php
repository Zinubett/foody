<?php 
require("connexion.php");




function get_all_message()
{

$con=connect_db();

$contact=array();
$sql="SELECT * FROM `contact` ;";
$result=$con->query($sql);

foreach($result as $ligne){
      $contact[]=$ligne;

}

return $contact;

}

?>