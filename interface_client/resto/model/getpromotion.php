<?php

require("connexion.php");
$con=connect_db();



$id_promo=$_POST['id_promo'];

$sql="SELECT * FROM `promotion` WHERE `id_promo`='$id_promo' ";

$result=$con->query($sql);

if($result){

$promotion=$result->fetch();
echo json_encode($promotion);
 }




?>