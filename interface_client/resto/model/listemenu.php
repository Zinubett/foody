<?php 
require("connexion.php");




function get_all_menu()
{

$con=connect_db();

$menu=array();
$sql="SELECT * FROM `menu` WHERE `restaurant`='4' ";
$result=$con->query($sql);

foreach($result as $ligne){
      $menu[]=$ligne;

}

return $menu;

}

?>