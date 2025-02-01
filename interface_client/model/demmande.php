<?php

   require("connexion.php");
    $connexion=connect_db();
         

               $nom=$_POST['nom'];
               $prenom=$_POST['prenom'];
               $telephone=$_POST['telephone'];
               $numcin=$_POST['numcin'];
               $login=$_POST['login'];
               $mp=$_POST['mp'];
               $adresse=$_POST['adresse'];
               
              

                    
$sql="INSERT INTO `client`(`id_client`, `nom_client`, `prenom_client`, `telephonne_client`, `numcin_client`, `login_client`, `mp_client`, `adresse_client`, 
`etat`) VALUES (NULL,'$nom','$prenom','$telephone','$numcin','$login','$mp','$adresse','0');";

                      $resultat=$connexion ->query($sql);

                      if($resultat){
                        echo"client a inscrit";

                      }
                      else echo "erreur ";



                      ?>