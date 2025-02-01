<?php

   require("connexion.php");
    $connexion=connect_db();
         

               $nom=$_POST['nom'];
               $telephone=$_POST['telephone'];
               $email=$_POST['email'];
               $message=$_POST['message'];
               
              

                    
$sql="INSERT INTO `contact`(`id_contact`, `nom`, `telephone`, `email`, `message`) VALUES (NULL,'$nom','$telephone','$email','$message');";

                      $resultat=$connexion ->query($sql);

                      if($resultat){
                      	echo"message à envoyée";

                      }
                      else echo "erreur ";



                      ?>