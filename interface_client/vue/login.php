<!DOCTYPE HTML>
<!--
	Astral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Authentification</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper-->
			<div id="wrapper">

				<!-- Nav -->
					<nav id="nav">
						<a href="#" class="icon fa-home"><span>Restaurant</span></a>
						<a href="#work" class="fa fa-bicycle"><span>Coursier</span></a>
						<a href="#contact" class="fa fa-address-card-o"><span>Client</span></a>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Me -->
							<article id="home" class="panel">
								
		                     	<header>
									<h2>Connecter</h2>
								</header>
						      
						                <div class="w3layouts-main">
								   <form >
									<div>
										<div class="row">
											<div class="col-6 col-12-medium">
												<input type="email" name="name" placeholder="MAIL" id="addemailc" />
											</div>
											<div class="col-6 col-12-medium">
												<input type="password" name="email" placeholder="Mot de passe" required="" id="addmpc" />
											</div>
						<button type="button" style="margin-left: 200px; margin-top: 60px; width: 300PX;" class="btn btn-primary" name="login" id="submit">Connecter</button>

									</div>
								</form>
		
		
</div>

								
								
							</article>

						<!-- Work -->
							<article id="work" class="panel">
	<header>
									<h2>Connecter</h2>
								</header><div class="w3layouts-main">
								   <form >
									<div>
										<div class="row">
											<div class="col-6 col-12-medium">
												<input type="email" name="name" placeholder="MAIL" id="ademail" />
											</div>
											<div class="col-6 col-12-medium">
												<input type="password" name="email" placeholder="Mot de passe" required="" id="addmpt" />
											</div>
						<button type="button" style="margin-left: 200px; margin-top: 60px; width: 300PX;" class="btn btn-primary" name="login" id="addd">Connecter</button>

									</div>
								</form>
		
		
</div>

		
							
							</article>

						<!-- Contact -->
							<article id="contact" class="panel">
								<header>
									<h2>Connecter</h2>
								</header>
							  <div class="w3layouts-main">
								   <form >
									<div>
										<div class="row">
											<div class="col-6 col-12-medium">
												<input type="email" name="name" placeholder="MAIL" id="addmaile" />
											</div>
											<div class="col-6 col-12-medium">
												<input type="password" name="email" placeholder="Mot de passe" required="" id="admp" />
											</div>
				<button type="submit" style="margin-left: 200px; margin-top: 60px; width: 300PX;" class="btn btn-primary" name="login" id="connecterclient">Connecter</button>

									</div>
								</form>
		
		
</div>

							</article>
						

					</div>

				<!-- Footer -->
					<div id="footer">
						<ul class="copyright">
							<li>YOSRA BEN ARFA & ZAINAB ABDELKADER 2020</li>
						</ul>
					</div>

			</div>
			<link rel="stylesheet" href="assets/css/bootstrap.min.css" >

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="assets/js/jquery-3.3.1.min.js" ></script>
			<script src="js/jquery-3.2.1.min.js" ></script>

			<script src="assets/js/jquery-3.3.1.slim.min.js" ></script>
			<script src="assets/js/jquery-3.3.1.min.js" ></script>

			<script src="assets/js/popper.min.js" ></script>

			<script src="assets/js/bootstrap.min.js" ></script>

			<script src="assets/js/scriptlogin.js" ></script>
			<script>
$(document).ready(function(){

  $("#submit").click(function(){
    var lg=$('#addemailc').val();
    var mp=$('#addmpc').val();
    $.post("model/logrestaut.php",
    {
      lg: lg,
      mp: mp
    },
    function(data,status){alert(data);
      if (data=="success") {
       
        
           $(location).attr("href","resto/conindex.php"); 
        
        
      }
      else {
          $("#reponse").html("Probleme de connexion");
          $("#reponse").fadeIn("slow");
          $("#addemailc").val('');
          $("#addmpc").val('');
      }

    });
  });

      $("#addemailc").keypress(function(){
      $("#reponse").text('');
      });

});
</script>
			<script>
$(document).ready(function(){

  $("#addd").click(function(){
    var log=$('#ademail').val();
    var mtp=$('#addmpt').val();
    $.post("model/logcoursier.php",
    {
      log: log,
      mtp: mtp
    },
    function(data,status){
      if (data=="success") {
       
        
           $(location).attr("href","coursier/conindex.php"); 
        
        
      }
      else {
          $("#reponse").html("Probleme de connexion");
          $("#reponse").fadeIn("slow");
          $("#addmail").val('');
          $("#addmpt").val('');
      }

    });
  });

      $("#addmail").keypress(function(){
      $("#reponse").text('');
      });

});
</script>

			<script>
$(document).ready(function(){

  $("#connecterclient").click(function(){
    var connect=$('#addmaile').val();
    var pass=$('#admp').val();
    $.post("model/log.php",
    {
      connect: connect,
      pass: pass
    },
    function(data,status){
      if (data=="success") {
       
        
           $(location).attr("href","client/conindex.php"); 
        
        
      }
      else {
          $("#reponse").html("Probleme de connexion");
          $("#reponse").fadeIn("slow");
          $("#addmaile").val('');
          $("#addmp").val('');
      }

    });
  });

      $("#addmaile").keypress(function(){
      $("#reponse").text('');
      });

});
</script>





	</body>
</html>





