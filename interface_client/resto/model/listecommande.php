<?php 
require("connexion.php");

session_start();



function get_all_commande()
{
$id=$_SESSION["id_rest"];
$con=connect_db();

$commande=array();
$sql="SELECT * FROM `commande`,`menu`,`contenue` 
                WHERE `commande`.`valider_restaurant`='1' 
                      and `contenue`.`id_menu`= `menu`.`id_menu`
                       
                       and `menu`.`restaurant`='$id'

                       ORDER by `commande`.`id_cmd`




                        ";
$result=$con->query($sql);

foreach($result as $ligne){
      $commande[]=$ligne;

}

return $commande;

}

?>