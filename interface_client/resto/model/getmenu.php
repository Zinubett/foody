<?php

require("connexion.php");
$con=connect_db();



$id_menu=$_POST['id_menu'];

$sql="SELECT * FROM `menu` WHERE `id_menu`='$id_menu' ";

$result=$con->query($sql);

if($result){

$menu=$result->fetch();
echo json_encode($menu);
 }




?>