<?php
require("connexion.php");

$connexion=connect_db();


$promotion=Array();

$sql="
SELECT * FROM `promotion` ;

";

$result=$connexion->query($sql);

foreach ($result as $ligne ) {
		$promotion[]=$ligne;
	}
	echo  json_encode($promotion);






?>