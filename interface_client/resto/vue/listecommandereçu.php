<?php
  
   if (!empty ($_SESSION["log"])) {



?>
<!DOCTYPE html>
<head>
<title>Restaurant</title>
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
        Restaurant
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
                <span class="username"><?php   echo $_SESSION["nom_rest"]; ?></span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="conprofil.php"><i class=" fa fa-suitcase"></i>Profile</a></li>
               
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
                    <a  href="conacceil.php">
                        <i class="glyphicon glyphicon-home"></i>
                        
                        <span>Acceuil</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <a href="conajoutermenu.php">
                        <i class="glyphicon glyphicon-cutlery"></i> 
                       
                        <span>Ajouter au Menu</span>


                    </a>
                   
                </li>
                <li>
                    <a href="conlistemenu.php">
                        <i class="glyphicon glyphicon-list-alt"></i> 
                       
                        <span>Liste menu </span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="conmenudejour.php">
                       <i class="glyphicon glyphicon-list-alt"></i> 
                        <span>Menu de jour</span>
                    </a>
                 
                </li>
                 <li class="sub-menu">
                    <a href="#">
                        <i class="glyphicon glyphicon-gift"></i> 
                        <span>Promotion </span>


                    </a>
                    <ul class="sub">
                        <li><a href="conlistepromotion.php"> <i class="glyphicon glyphicon-gift"></i> Liste Promotion</a></li>
                        <li><a href="conajouterpromotion.php"><i class="glyphicon glyphicon-gift"></i>Ajouter promotion </a></li>
                        
                    </ul>
                </li>
                  <li class="sub-menu">
                    <a href="conlistecmdreçu.php">
                        <i class="glyphicon glyphicon-shopping-cart"></i>
                       
                        <span>Liste commande</span>
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
            <th>Commande</th>
            <th>Nom_menu</th>
            <th>Quentité</th>
            
           
            
          </tr>

        </thead>

        <tbody>
       <?php foreach ($commande as $me)  :       ?>

          <tr data-expanded="true">
            <td><?php echo  $me['id_cmd'] ;  ?></td>
            <td><?php echo  $me['nom_repas'] ;  ?></td>
            <td><?php echo  $me['quantite'] ;  ?></td>
            
            
            <td>
            	<button type="button" class="btn btn-primary" onclick="traiter(<?php echo  $me['id_cmd'] ;  ?>)">prêt</button>
            	
                


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
<!-- morris JavaScript -->	
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}
		
		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			data: [
				{period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
				{period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
				{period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
				{period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
				{period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
				{period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
				{period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
				{period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
				{period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
			
			],
			lineColors:['#eb6f6f','#926383','#eb6f6f'],
			xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});
		
	   
	});
	</script>
<!-- calendar -->
	<script type="text/javascript" src="js/monthly.js"></script>
	
	<!-- //calendar -->
</body>
</html>
<?php
   }

   else {
      header('Location: index.php');
  
    }



?>
