<?php

require("connexion.php");
session_start();
$con=connect_db();

$id_client=$_SESSION["id_client"];


$id_menu=$_POST['id_menu'];

$sql="INSERT INTO `contenue`(`id_continue`, `quantite`, `id_menu`, `id_client`, `date`) VALUES (null,1,'$id_menu','$id_client',NOW()) ";

$result=$con->query($sql);

if($result){

$menu=$result->fetch();
echo json_encode($menu);
 }




?>