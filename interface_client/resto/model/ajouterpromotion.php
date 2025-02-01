<?php

   require("connexion.php");
    $connexion=connect_db();
         
 $Images=$_POST['Images'];
               $Libelle=$_POST['Libelle'];
               $Prix_unitiale=$_POST['Prix_unitiale'];
                 $Prix_promo=$_POST['Prix_promo'];
               $Description=$_POST['Description'];
                 $date_debut=$_POST['date_debut'];
                 $date_fin=$_POST['date_fin'];
              
               
              

                    
$sql="INSERT INTO `promotion`(`id_promo`, `nom_promo`, `prix_unitiale`, `prix_promo`, `description_promo`, `date_debut`, `date_fin`,`image`) VALUES (NULL,'$Libelle',' $Prix_unitiale','$Prix_promo','$Description','$date_debut','$date_fin','$Images');";

                      $resultat=$connexion ->query($sql);

                      if($resultat){
                      	echo"promotion ajouter";

                      }
                      else echo "erreur ";



                      ?>