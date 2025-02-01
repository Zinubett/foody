<?php

   require("connexion.php");
    $connexion=connect_db();
         

               $Nom=$_POST['Nom'];
               $prenom=$_POST['prenom'];
               $num_tele=$_POST['num_tele'];
               $cin=$_POST['cin'];
               $login=$_POST['login'];
               $mp=$_POST['mp'];
               
              

                    
$sql="INSERT INTO `coursier`(`id_coursier`, `nom_coursier`, `prenom_coursier`, `cin`, `tele_coursier`, `login_coursier`, `mp_coursier`) VALUES (NULL,'$Nom','$prenom','$cin','$num_tele','$login','$mp') ;";

                      $resultat=$connexion ->query($sql);

                      if($resultat){
                      	echo"Coursier ajouter";

                      }
                      else echo "erreur ";



                      ?>