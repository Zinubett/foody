<?php

   require("connexion.php");
    $connexion=connect_db();
         

               $nom=$_POST['nom'];
               $adresse=$_POST['adresse'];
               $telephone=$_POST['telephone'];
               $facebook=$_POST['facebook'];
               $login=$_POST['login'];
               $mp=$_POST['mp'];
               
               
              

                    
$sql="INSERT INTO `restaurant`(`id_rest`, `nom_rest`, `adresse_rest`, `telefonne_rest`, `facebook_rest`, `email_rest`, `mp_rest`, `etat`) VALUES (NULL,'$nom','$adresse','$telephone','$facebook','$login','$mp','0');";

                      $resultat=$connexion ->query($sql);

                      if($resultat){
                        echo"Restaurant a inscrit";

                      }
                      else echo "erreur ";



                      ?>