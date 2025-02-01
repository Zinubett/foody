
<?php
  session_start()  ;
   if (!empty ($_SESSION["log"])) {



?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <title>YOUR FOOD </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/magnific-popup.css">


    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/script.js"></script>
  </head>
  <body onload="listerestaurantt(); ">
    
    <header role="banner">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="index.html">YOUR FOOD</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link active" href="conindex.php">Acceuil</a>
              </li>
              
              
              <li class="nav-item">
                <a class="nav-link" href="conapropos.php">A propos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="concontacternous.php">Contacter nous</a>
              </li>
            </ul>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item cta-btn">
                <a href="../index.php">Déconnecter</a>
              </li>
            </ul>
        
            
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->
    
    <div class="slider-wrap">
      <section class="home-slider owl-carousel">


        <div class="slider-item" style="background-image: url('img/sandwitch.jpg');">
          
          <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
              <div class="col-md-8 text-center col-sm-12 ">
                <h1 data-aos="fade-up">BON APPÉTIT</h1>
               
              
              </div>
            </div>
          </div>

        </div>

        <div class="slider-item" style="background-image: url('img/gateau_1.jpeg');">
          <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
              <div class="col-md-8 text-center col-sm-12 ">
                <h1 data-aos="fade-up">Nourriture délicieuse
</h1>
               
               
              </div>
            </div>
          </div>
          
        </div>

      </section>
    <!-- END slider -->
    </div> 
    

      <section class="section bg-light top-slant-white">

      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 text-center heading-wrap">
              <h2>Passer commande</h2>
            </div>
          </div>
        </div>
      </div>
      <button type="button" class="btn btn-primary btn-flat" style="margin-left: 1200px;" onclick="consulterpanier()"><i class="fa fa-shopping-cart">Consuler Panier</i></button>
        <div class="container">
          <div class="row" id="listerestaurant">
        
          <!-- END slider -->
          </div>
        </div>
      
    </section> <!-- .section -->
    
    

   




  

    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#cf1d16"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    

    <script src="js/main.js"></script>
    
<div class="modal fade" id="getmenu" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">LISTE MENU</h5>
        <button type="button" class="close" onclick='document.location.reload(false)' aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
       <table class="table">
  <thead>
    <tr>
     
      <th scope="col">Nom Menu</th>
      <th scope="col">Prix</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody id="listemenu">

   
  </tbody>

</table>

  <input type="hidden" id="id_rest_hidden" name="">

      </div>
      
    </div>
  </div>
</div>










<!-- Modal -->
<div class="modal fade" id="consulterpanier" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">LISTE MENU</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <table class="table">
  <thead>
    <tr>
     
      <th scope="col"> Menu</th>
      <th scope="col"> Prix</th>

      <th scope="col">Quantiter</th>
      <th>Prix</th>
    </tr>
  </thead>
  <tbody id="panier">

   
  </tbody>

</table>
   <input type="button" value="Passer Commande" class="btn btn-success" style="margin-left: 200px;" data-toggle="modal" data-target="#PASSERCOMMANDE" name="">

  

      </div>
      
    </div>
  </div>
</div>








<!-- Modal -->
<div class="modal fade" id="updatquantiter"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter Quantiter</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form class="form-horizontal">
                                <div class="form-group">
                                    <label for="focusedinput" class="col-sm-2 control-label">Quantiter </label>
                                    <div class="col-sm-8">
                                        <input type="text"  class="form-control1 "  id="upquantiter" >
                                    </div> 
                                </div>

   <input type="button" value="Valider" class="btn btn-success" style="margin-left: 200px;" onclick="modifierquantiter()" name="">

       </form>

  <input type="hidden" id="id_continue_hidden" >
<input type="hidden" id="hiddenrestaurant" name="">
      </div>
      
    </div>
  </div>
</div>





<!-- Modal -->
<div class="modal fade" id="PASSERCOMMANDE" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Corrdonnée Commande</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form class="form-horizontal">
                                <div class="form-group">
                                    <label for="focusedinput" class="col-sm-6 control-label">Date Livraison </label>
                                    <div class="col-7">
                                        <input type="date"  class="form-control "  id="adddatelivraison" >
                                    </div> 
                                </div>

                                <div class="form-group">
                                    <label for="focusedinput" class="col-sm-6 control-label">Heure Livraison </label>
                                    <div class="col-7">
                                        <input type="text"  class="form-control "  id="addheurelivraison" >
                                    </div> 
                                </div>

                                <div class="form-group">
                                    <label for="focusedinput" class="col-sm-6 control-label">Adresse Livraison </label>
                                    <div class="col-7">
                                        <input type="text"  class="form-control "  id="addadresselivraison" >
                                    </div> 
                                </div>
                                <div class="form-group">
                                    <label for="focusedinput" class="col-sm-6 control-label">Téléphone </label>
                                    <div class="col-7">
                                        <input type="text"  class="form-control "  id="addtelephoneivraison" >
                                    </div> 
                                </div>
<input type="hidden" id="hiddenclient" name="">
   <input type="button" value="Valider" class="btn btn-success" style="margin-left: 200px;" onclick="ajoutercommande()" name="">

       </form>
      </div>
      
    </div>
  </div>
</div>
   
  </body>
</html>




<?php
   }

   else {
      header('Location: index.php');
  
    }



?>