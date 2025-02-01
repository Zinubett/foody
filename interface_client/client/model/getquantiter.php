<?php

require("connexion.php");
$con=connect_db();



$id_continue=$_POST['id_continue'];

$sql=" SELECT * FROM `contenue` WHERE `id_continue`='$id_continue' ";

$result=$con->query($sql);

if($result){

$contenue=$result->fetch();
echo json_encode($contenue);
 }




?>