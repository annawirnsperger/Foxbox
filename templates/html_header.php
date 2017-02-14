<!DOCTYPE html>
<html>
<head>
    
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Plugin JavaScript Easing -->
    <script src="Frameworks/bootstrap-3.3.7-dist/jquery.easing/jquery.easing.1.3.min.js"></script>

    <!-- Verweis auf JS-Datei für OnePager -->
    <script src="js/scrolling-nav.js"></script>

    <link href="css/html_header.css" rel="stylesheet">
	
	
	<style>
	
	/* Tablet */
	@media (min-width:600px) and (max-width:1000px) {
		
		#Advantages1 {
			display:none;
		}
		#Advantages2 {
			display:none;
		}
		#Advantages3 {
			display:none;
		}
		#Advantages4 {
			display:none;
		}
		.blockquote-reverse {
			display:none;
		}
		
		.home-section {
			height:auto !important;
			min-height:50% !important;
			padding-top:8%;
		}
		
		#Home_Slogan {
			font-size:1.125em !important;
			margin-top:5% !important;
		}
		
		.registrieren-section {
			height:auto;
			min-height:40% !important;
			padding-top:8%;
		}
		
	}
	
	/* Landscape */
	@media only screen and (min-width : 321px) and (max-width:667px) 
	
	{
		body {
			font-family:'Roboto' !important;
		}

		.navbar {
			height:5%;
			background: #d2d2d2;
			opacity:1;
			color: black !important;
			border: none;
			z-index: 1;
		}
		
		.navbar:hover {
			background-color:lightgrey!important;
		}


		#navbar li a {
			color: black !important;
			font-weight: bold;
			background-color:#d2d2d2 !important;
			border:1px solid darkgrey;
		}
		
		#Home_Slogan {
			font-size:100% !important;
			margin-top:5% !important;
		}
		
		#Login_Caption {
			display:none;
		}
		
		
		#Signup_Slogan {
			font-size: 100% !important;
		}
		
		#Signup_Slogan2 {
			display:none;
		}
		
		#Advantages1 {
			display:none;
		}
		#Advantages2 {
			display:none;
		}
		#Advantages3 {
			display:none;
		}
		#Advantages4 {
			display:none;
		}
		.blockquote-reverse {
			display:none;
		}

	
	}

	

	@media screen and (max-width: 600px){
	
		body {
			font-family:'Roboto' !important;
		}
		
		.navbar {
			height:5%;
			background: #d2d2d2;
			opacity:1;
			color: black !important;
			border: none;
			z-index: 1;
		}
		
		.navbar:hover {
			background-color:lightgrey!important;
		}


		#navbar li a {
			color: black !important;
			font-weight: bold;
			background-color:#d2d2d2 !important;
		}
		

		.navbar .navbar-brand {
			font-size: 1.4em;
			color: darkorange;
		}
		
		body {
			font-family:'Roboto' !important;
		}
		
		#Login_Well {
		max-width:60%;
		min-width:20%;
		height:30%;
		width:auto;
		margin-bottom:7%;
		}
		
		.form-group {
			margin:0.625em 0.625em 0.625em 0.625em;
		}
		#login_button {
			margin-left:0.625em;
		}
		
		#signup_button {
			margin-left:0.625em;
			margin-top:0.625em;
			margin-bottom:0.625em;
		}
		#nochkeinkonto{
			text-align:center;
			margin:left:0.625em;
		}
		
		#Login_Caption {
			display:none;
		}
		
		.home-section {
			height:auto !important;
			min-height:65% !important;
			padding-top:8%;
		}
		
		.registrieren-section {
			height:auto;
			min-height:65% !important;
			padding-top:8%;
		}
		
		#Home_Slogan {
			font-size:80% !important;
			font-weight:bold;
			margin-top:15% !important;
		}
		
		#Signup_Well {
			max-width:60%;
			min-width:20%;
			height:30%;
			width:auto;
		}
		
		#Signup_Slogan {
			font-size: 100% !important;
		}
		
		#Signup_Slogan2 {
			display:none;
		}
		
		#Advantages1 {
			display:none;
		}
		#Advantages2 {
			display:none;
		}
		#Advantages3 {
			display:none;
		}
		#Advantages4 {
			display:none;
		}
		.blockquote-reverse {
			display:none;
		}
	}
	</style>
	
	
	<!--
	<style>
	@media screen and (max-width: 900px){
		#Login_Well {
		max-width:60%;
		min-width:40%;
		height:30%;
		width:30%;
		padding-bottom:20px;
		}
		
		#Login_Caption {
			aria-hidden:"false";
		}
	}
	
	</style>
	-->

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

 <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="#">FoxBox</a>

                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="page-scroll hover_needed"><a href="#Home">Home</a></li>
                        <li class="page-scroll hover_needed"><a href="#ÜberFoxBox">Über uns</a></li>
                        <li class="page-scroll hover_needed"><a href="#Registrieren">Registrieren</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
        </div>
 </nav>
 



	<section id="Home" class="home-section">

        <style>
            .home-section {
                background-image: url("images/forest_green.jpg");
                background-repeat: no repeat center;
                background-size: cover;
            }
        </style>

	<h2 id="Home_Slogan">Wirst du bei fehlender Datensicherheit auch fuchsteufelswild? <br> Sei ein Fuchs und speichere deine Dateien – auf Foxbox.</h2>
    <br>
	
	<div class="container">
	<div class="row">
		<div class="col-xs-6 col-md-4"></div>
		<div class="col-xs-6 col-md-4"></div>
				<div class="well well-lg" id="Login_Well">
				<div class="Login_Form">

				<h3 id="Login_Caption" style="text-align:center">Jetzt einloggen!</h3>
			
					<?php
						INCLUDE "notloggedin_showforms.php";
					?>
				</div>
				</div>
	<div class="col-xs-6 col-md-4"></div>
	</div>
	</div>
	
        

	</section>

    <section id="ÜberFoxBox" class="über-section">
        
	 <div class="container">
	 <div class="row">
		<div id="ÜberUnsText" class="col-md-5">
            <img src="images/Foxbox_Logo.png" alt="FoxBox_Logo" height="200px" width="auto" id="Logo">
            <p>Foxbox entstand im Rahmen des Moduls Web-/Medienprojekt im dritten Semester des Studiengangs Online-Medien-Management. Die drei Füchse Sophia Eichler, Florian Koch und Anna Wirnsperger machten es sich zur ehrenvollen Aufgabe, eine ausgefuchste Internetseite zu erschaffen, auf der man sicher und ohne großen Aufwand seine Dateien ablegen, löschen und teilen kann. Mit Erfolg: am 16. Februar 2017 wurde die Seite offiziell vor einem großen Publikum präsentiert und gelaunched.</p>
		</div>
		<div id="Meinungen" class="col-md-7">

            <blockquote class="blockquote-reverse">
                <p>Noch nie zuvor war es so einfach meine Urlaubsbilder schnell und sicher aufzubewahren!</p>
                <footer><cite title="Source Title">Lena Müller</cite></footer>
            </blockquote>

            <blockquote class="blockquote-reverse">
            <p>Ich weiß nicht, was ich ohne FoxBox tun würde. Die Gewissheit, dass alle meine wichtigsten Daten immer überall zugänglich sind lässt sich durch nichts ersetzen.</p>
            <footer><cite title="Source Title">Tom Schneider</cite></footer>
            </blockquote>

            <blockquote class="blockquote-reverse">
            <p>Mit FoxBox komme ich sogar ohne viel Erfahrung einwandfrei zurecht. Einfach hochladen und schon kann ich alle meine Fotos mit meinen Liebsten teilen! Einfach toll.</p>
            <footer><cite title="Source Title">Herta König</cite></footer>
            </blockquote>

		</div>
	</div>
	</div>
		
	</section>

    <section id="Registrieren" class="registrieren-section">

        <style>
            .registrieren-section {
                background-image: url("images/wood_chopped.jpg");
                background-repeat: no repeat center;
                background-size: cover;
            }
        </style>

	<div class="container">
	<div class="row">
	<div id="Signup" class="col-md-6">
        <h2 id="Signup_Slogan">Jetzt kostenlos registrieren!<h2>

     <div class="well well-lg" id="Signup_Well">
	<h3 id="Signup_Slogan2">Hier bist du auf der richtigen Fährte.</h3>
        <?php 
			INCLUDE "signup.php";
		?>
	</div>
    </div>
	<!-- <div id="Advantages_whole" class="col-md-6"> -->
		<!-- <h3>Unsere Vorteile auf einen Blick</h3> -->
        <div class="col-md-6">
        <div class="container" id="Advantages">

        <div class="row" id="Advantages1">
                <div class="col-md-1" id= "Advantages_Icon">
                <span class="glyphicon glyphicon-certificate" aria-hidden="true"></span>
                </div>
            
                <div class="col-md-5" id="Advantages_Slogan">
                Die Sicherheit deiner Daten ist bei uns garantiert!
                </div>
        </div>

        <div class="row" id="Advantages2">
                <div class="col-md-1" id= "Advantages_Icon">
                    <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                </div>

                <div class="col-md-5" id="Advantages_Slogan">
                    Greife auf deine Daten zu - immer und überall.
                </div>
            </div>

        <div class="row" id="Advantages4">
                <div class="col-md-1" id="Advantages_Icon">
                    <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                </div>

                <div class="col-md-5" id="Advantages_Slogan">
                    Sharing is Caring - teile Dateien mit deinen Freunden!
                </div>
            </div>

        <div class="row" id="Advantages3">
            <div class="col-md-1" id="Advantages_Icon">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
            </div>

            <div class="col-md-5" id="Advantages_Slogan">
                Über 1. Millionen zufriedene Nutzer
            </div>
        </div>

        <div class="row" id="Advantages4">
            <div class="col-md-1" id="Advantages_Icon">
               <span class="glyphicon glyphicon-piggy-bank" aria-hidden="true"></span>
            </div>

            <div class="col-md-5" id="Advantages_Slogan">
                FoxBox ist und bleibt garantiert kostenlos.
            </div>
        </div>

        </div>
	</div>
	</div>
	</div>
	
    </section>

	<?php 
		INCLUDE "templates/html_footer.php";
	?>
	
</body>
</html>