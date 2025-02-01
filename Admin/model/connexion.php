<?php
require("parametre.php");

function connect_db()
{

  $db="mysql:dbname=".BASE.";host".SERVER;

  try{

  	$connexion= new PDO($db,USER,PWD);
  }
  catch(PDOException $e){

  	printf($e ->getMessage());
  }

  return  $connexion;




}

?>