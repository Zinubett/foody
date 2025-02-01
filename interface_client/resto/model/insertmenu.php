<?php

   require("connexion.php");
    $connexion=connect_db();
         

               $Libelle=$_POST['Libelle'];
               $Prix=$_POST['Prix'];
               $Description=$_POST['Description'];
               $Images=$_POST['Images'];
               
              

                    
$sql="INSERT INTO `menu`(`id_menu`, `nom_repas`, `prix_unitaire`, `description`, `image`) VALUES (NULL,'$Libelle','$Prix','$Description','$Images');";

                      $resultat=$connexion ->query($sql);

                      if($resultat){
                      	echo"menu ajouter";

                      }
                      else echo "erreur ";



                      ?>