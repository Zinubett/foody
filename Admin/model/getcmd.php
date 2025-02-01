<?php
require("connexion.php");
$connexion=connect_db();



$id_cmd =$_POST['id_cmd'];


$sql="SELECT * from `commande`   WHERE `id_cmd`='$id_cmd'";


$result=$con->query($sql);

if($result){

$cmd=$result->fetch();
echo json_encode($cmd);
 }

?>