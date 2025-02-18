<?php
  session_start()  ;
   if (!empty ($_SESSION["log"])) {



?>
<!DOCTYPE html>
<head>
<title>Coursier</title>
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
<!-- calendar -->
<link rel="stylesheet" href="css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
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
        Coursier
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
                <span class="username"><?php   echo $_SESSION["nom_coursier"]; ?></span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="conprofile.php"><i class=" fa fa-suitcase"></i>Profile</a></li>
               
                <li><a href="../index.php"><i class="fa fa-key"></i>Déconnection</a></li>
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
                    <a href="conlistecommandereçu.php">
                        <i class="glyphicon glyphicon-shopping-cart"></i>
                        <span>Commande reçu</span>


                    </a>
                   
                </li>
                <li>
                    <a href="conlistecmdaccepter.php">
                       <i class="glyphicon glyphicon-send"></i>
                        <span>Commande accepter </span>
                    </a>
                </li>
            
               
            </ul>       </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	
<section class="wrapper">
        <div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
    Liste commande reçu
    </div>
    <div>
       <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>

          <tr>
            <th>Nom_Client</th>
            <th>Adresse_client</th>
            <th>Telephone_client</th>
            <th >Adresse_resto</th>
            <th >Nom_resto</th>
            <th >Prix_cmd</th>
            <th >Date_cmd</th>
            <th >Heur_cmd</th>
           
            
          </tr>

        </thead>

        <tbody>
            <?php foreach ($commande as $me)  :       ?>

          <tr data-expanded="true">
            
             <td><?php echo  $me['nom_client'] ;  ?></td>
            <td><?php echo  $me['adresse_client'] ;  ?></td>
            <td><?php echo  $me['telephonne_client'] ;  ?></td>
            <td><?php echo  $me['adresse_rest'] ;  ?></td>
            <td><?php echo  $me['nom_rest'] ;  ?></td>
            <td><?php echo  $me['prix_cmd'] ;  ?></td>
            <td><?php echo  $me['date_cmd'] ;  ?></td>
            <td><?php echo  $me['heur'] ;  ?></td>
            
            <td>
                
                   <button type="button" class="btn btn-primary" onclick="accepter(<?php echo  $me['id_cmd'] ;  ?>)">Accepter</button>

                   <button type="button" class="btn btn-danger" onclick="refuser(<?php echo  $me['id_cmd'] ;  ?>)">Refuser</button>
               


            </td>
          </tr>
         <?php  endforeach ;    ?>
        </tbody>
      </table>
    </div>
  </div>
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