<?php
require("connexion.php");

$connexion=connect_db();


$restaurant=Array();

$sql="
SELECT * FROM `restaurant` ;

";

$result=$connexion->query($sql);

foreach ($result as $ligne ) {
		$restaurant[]=$ligne;
	}
	echo  json_encode($restaurant);






?>