

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
  <body onload="listerestaurant();listepromotion();">
    
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
                <a class="nav-link active" href="index.php">Acceuil</a>
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
                <a class="nav-link" href="authentification.php">Authentifier</a>
              </li>
            </ul>
        
             <ul class="navbar-nav ml-auto">
              <li class="nav-item cta-btn">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modifier">  s'inscrire</button>
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
    

    <section class="section bg-light py-5  bottom-slant-gray">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="">
            <span class="wrap-icon"><span class="flaticon-dinner d-block mb-4"></span></span>
            <h3 class="mb-2 text-primary">BON APPÉTIT</h3>
            
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="100">
            <span class="wrap-icon"><span class="flaticon-fish d-block mb-4"></span></span>
            <h3 class="mb-2 text-primary">FRUIT DE MER</h3>
           
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="200">
            <span class="wrap-icon"><span class="flaticon-hot-coffee-rounded-cup-on-a-plate-from-side-view d-block mb-4"></span></span>
            <h3 class="mb-2 text-primary"> CAFÉS</h3>
           
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="300">
            <span class="wrap-icon"><span class="flaticon-meat d-block mb-4"></span></span>
            <h3 class="mb-2 text-primary">LA VIANDE</h3>
           
          </div>
        </div>
      </div>
    </section>
    

    
    <section class="section ">

      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid mb-5">
          <div class="row" data-aos="fade">
            <div class="col-md-12 text-center heading-wrap">
              <h2>Nos restaurant</h2>
            </div>
          </div>
        </div>
        <div class="owl-carousel centernonloop">
          
         <div id="restaurant"></div>
        
        </div>
      </div>

    </section>


     <section class="section bg-light  top-slant-white bottom-slant-gray">

      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row" data-aos="fade">
            <div class="col-md-12 text-center heading-wrap">
              <h2>Nos Promotion</h2>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
                               <div class="row no-gutters">
          <div class="col-md-6">
           <div class="sched d-block d-lg-flex">
              <div class="bg-image order-2" style="background-image: url('img/dishes_4.jpg');" data-aos="fade"></div>
                <div class="text order-1">
        
             <div id="promotion"></div>
       </div>
     </div>
   </div>
 </div>

      </div>
    </section> 



    <footer class="site-footer" role="contentinfo">
     
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4 mb-5">
            <h3>A propos nous</h3>
            
            <ul class="list-unstyled footer-link d-flex footer-social">
              
              <li><a href="#" class="p-2"><span class="fa fa-facebook"></span></a></li>
              
              <li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
            </ul>

          </div>
          <div class="col-md-5 mb-5">
            
            <div>
              <h3>Information sur notre contact </h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block">
                  <span class="d-block text-black">Address:34 Street Name, City Name Here, United States</span>
                  </li>
                <li class="d-block"><span class="d-block text-black">phone:+1 242 4942 290</span></li>
                <li class="d-block"><span class="d-block text-black">Email:info@yourdomain.com</span></li>
              </ul>
            </div>
          </div>
          
          <div class="col-md-3">
          
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-md-center text-left">
          <p>YOSRA BEN ARFA & ZAINAB ABDELKADER 2020</p>
          </div>
        </div>
      </div>
    </footer>
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
   


    <div class="modal fade" id="modifier" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">inscription </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <div id="page-wrapper">
      <div class="main-page">
        <div class="forms validation">
         
        
          <div class="row">
            <div class="col-md-6 validation-grids widget-shadow" data-example-id="basic-forms"> 
              <div class="form-title">
                <h4> Client:</h4>
              </div>
              <div class="form-body">
                <form data-toggle="validator">
                  <div class="form-group">
                    <input type="text" class="form-control" id="addnom" placeholder="Nom" required>
                  </div>
                   <div class="form-group">
                    <input type="text" class="form-control" id="addprenom" placeholder="Prénom" required>
                  </div>
                    <div class="form-group">
                    <input type="text" class="form-control" id="addcin" placeholder="Cin" required>
                  </div>
                    <div class="form-group">
                    <input type="text" class="form-control" id="addtele" placeholder="Télephone" required>
                  </div>
                    <div class="form-group">
                    <input type="text" class="form-control" id="addadresse" placeholder="Adresse" required>
                  </div>
                  <div class="form-group has-feedback">
                    <input type="email" class="form-control" id="addemail" placeholder="Email" data-error="Bruh, that email address is invalid" required>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    
                  </div>
                  <div class="form-group">
                    <input type="password" data-toggle="validator" data-minlength="6" class="form-control" id="addmp" placeholder="Mot de passe" required>
                   
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirmer mot de passe" required>
                    <div class="help-block with-errors"></div>
                  </div>
                 
                 
                  <div class="form-group">
                     <button type="button"  class="btn btn-primary" onclick="inscrire()">s'inscrire</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-6 validation-grids validation-grids-right">
              <div class="widget-shadow" data-example-id="basic-forms"> 
                <div class="form-title">
                  <h4> Restaurant :</h4>
                </div>
               <div class="form-body">
                <form data-toggle="validator">
                  <div class="form-group">
                    <input type="text" class="form-control" id="addnomr" placeholder="Nom" required>
                  </div>
                   <div class="form-group">
                    <input type="text" class="form-control" id="addadresser" placeholder="Adresse" required>
                  </div>
                   <div class="form-group">
                    <input type="text" class="form-control" id="addteler" placeholder="Télephone" required>
                  </div>
                    <div class="form-group">
                    <input type="text" class="form-control" id="addfacebookr" placeholder="Facebook" required>
                  </div>
                   
                 
                  <div class="form-group has-feedback">
                    <input type="email" class="form-control" id="addemailr" placeholder="Email" data-error="Bruh, that email address is invalid" required>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                  
                  </div>
                  <div class="form-group">
                    <input type="password" data-toggle="validator" data-minlength="6" class="form-control" id="addmpr" placeholder="Mot de passe" required>
                    
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" id="inputPasswordConfirmr" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirmer mot de passe" required>
                    <div class="help-block with-errors"></div>
                  </div>
                 
                 
                  <div class="form-group">
                     <button type="button"  class="btn btn-primary" onclick="inscrir()">s'inscrire</button>
                  </div>
                </form>
              </div>
              </div>
             
            </div>
            <div class="clearfix"> </div> 
          </div>
        </div>
      </div>
    </div>
      </div>
     
    </div>
  </div>
</div>

  </body>
</html>
