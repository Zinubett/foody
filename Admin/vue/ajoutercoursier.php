<?php
  session_start()  ;
   if (!empty ($_SESSION["log"])) {


?>
<!DOCTYPE html>
<head>
<title>Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/morris.css" type="text/css"/>

<script src="js/jquery2.0.3.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">

<!--logo start-->
<div class="brand">
    <a href="#" class="logo">
        Admin
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="images/2.png">
                <span class="username"><?php   echo $_SESSION["nom_admin"] ; ?></span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="conprofile.php"><i class=" fa fa-suitcase"></i>Profile</a></li>
               
                <li><a href="index.php"><i class="fa fa-key"></i>Déconnection</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>

</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a  href="conacceuil.php">
                      <i class="glyphicon glyphicon-home"></i>
                        
                        <span>Acceuil</span>
                    </a>
                </li>
              
                 <li class="sub-menu">
                    <a href="#">
                       <i class="glyphicon glyphicon-user"></i>
                        <span>Gestion utilisateur  </span>


                    </a>
                       <ul class="sub">
           
                        <li><a href="conlisteclient.php"><i class="glyphicon glyphicon-heart-empty"></i>liste client</a></li>
                        <li><a href="conlisterestaurant.php"> <i class="glyphicon glyphicon-cutlery"></i> liste restaurant </a></li>
                        
                    </ul>
                </li>
                 

                 <li class="sub-menu">
                    <a href="#">
                      <i class="fa fa-bicycle"></i>
                        <span>Gestion coursier  </span>


                    </a>
                       <ul class="sub">
           
                       <li><a href="conajoutercoursier.php"><i class="glyphicon glyphicon-star-empty"></i>Ajouter coursier</a></li>
                        <li><a href="conlistecoursier.php"><i class="glyphicon glyphicon-list"></i>liste coursier </a></li>
                        
                    </ul>
                </li>


                 <li class="sub-menu">
                    <a href="#">
                      <i class="glyphicon glyphicon-shopping-cart"></i>
                        <span>Gestion commande  </span>


                    </a>
                       <ul class="sub">
           
                         <li><a href="conconsultercmd.php"><i class="glyphicon glyphicon-send"></i>liste commande</a></li>
            <li><a href="consuiviecmd.php"><i class="fa fa-cart-arrow-down"></i>suivie commande </a></li>
                        
                    </ul>
                </li>
                <li>
                    <a  href="conmessagereçu.php">
                      <i class="glyphicon glyphicon-envelope"></i>
                        
                        <span>Message reçu</span>
                    </a>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		  <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Ajouter Coursier
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nom:</label>
                                    <input type="text" class="form-control" id="addnom">
                                </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">prenom:</label>
                                    <input type="text" class="form-control" id="addprenom">
                                </div>
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">Num téléphone:</label>
                                    <input type="text" class="form-control" id="addnumtele">
                                </div>
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">Cin:</label>
                                    <input type="text" class="form-control" id="addcin">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">login:</label>
                                    <input type="text" class="form-control" id="addlogin">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">mp:</label>
                                    <input type="text" class="form-control" id="addmp" >
                                </div>
                                
                               
                                
                                <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                           
                                            <input type="button" name="" class="btn btn-primary"  value="valider"  onclick="insertcoursier()">
                                            <button class="btn btn-default" type="submit">Cancel</button>
                                        </div>
                                    </div>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
		<div class="row">
			<div class="panel-body">
				<div class="col-md-12 w3ls-graph">
					<!--agileinfo-grap-->
						
	<!--//agileinfo-grap-->

				</div>
			</div>
		</div>
		<div class="agil-info-calendar">
		<!-- calendar -->

			<!-- tasks -->
			<div class="agile-last-grids">
			
				<div class="clearfix"> </div>
			</div>
		<!-- //tasks -->
		<div class="agileits-w3layouts-stats">
					
					<div class="clearfix"> </div>
				</div>
</section>
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  <p>Zainab Abdelkader and Yosra ben Arfa 2020</p>
			</div>
		  </div>
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>

</body>
</html>
<?php
   }

   else {
      header('Location: index.php');
  
    }



?>
