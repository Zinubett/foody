<?php

require("connexion.php");
$connexion=connect_db();



$id_rest=$_POST['id_rest'];

$sql=" SELECT * FROM `menu` WHERE `restaurant`='$id_rest'  ";



$menu=Array();

$result=$connexion->query($sql);

foreach ($result as $ligne ) {
		$menu[]=$ligne;
	}
	echo  json_encode($menu);




?>