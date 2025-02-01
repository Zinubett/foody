<?php

   require("connexion.php");
   session_start();
    $connexion=connect_db();
         

               $datelivraison=$_POST['datelivraison'];
               $heurelivraison=$_POST['heurelivraison'];
                 $adresselivraison=$_POST['adresselivraison'];
               $telephonelivraison=$_POST['telephonelivraison'];
               $client=$_SESSION["id_client"];
              


                    
$sql="INSERT INTO `commande`(`id_cmd`, `date_cmd`, `heur`, `adresse_cmd`, `telephone_client`, `id_client`, `id_rest`, `prix_cmd`, `valider_restaurant`, `valider_coursier`, `etat_commande`)

 VALUES (null,'$datelivraison','$heurelivraison','$adresselivraison','$telephonelivraison','$client','1','0','0','0','0')  ;";



                      $resultat=$connexion ->query($sql);

                      if($resultat){
                      	echo"commande a valider";

                      }
                      else echo "erreur ";



                      ?>