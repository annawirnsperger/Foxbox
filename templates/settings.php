<!DOCTYPE html>
<html>
<head>
    <link href="css/settings.css" rel="stylesheet">
	
	<!-- Einbindung für den JS Zurück Button -->
    <script type="text/javascript"> function goBack() {window.history.back()}</script>

    <style>
        body {
            background-image: url("images/forest_fog.jpg");
            background-repeat: no repeat center;
            background-size: 100%;
        }
		
		#meineEinstellungen {
			color:white;
		}
		
	
				/* Tablet */
	@media (min-width:600px) and (max-width:1000px) {
			body {
				font-family:'Roboto' !important;
				background-size:250% 250%;
				background-repeat:no-repeat;
			}
			#Avatar-Well {
				margin-bottom:10%;
			}
			#meineEinstellungen {
				margin-top:15%;
				margin-left:3%;
			}
			
			.navbar {
			height:5%;
			background: #d2d2d2;
			opacity:1;
			color: white !important;
			border: none;
			z-index: 1;
		}
		
		.navbar:hover {
			background-color:lightgrey!important;
		}


		#navbar li a {
			color: white !important;
			font-weight: bold;
			background-color:#d2d2d2 !important;
		}
		

		.navbar .navbar-brand {
			font-size: 16pt;
			color: darkorange;
		}
			
		
		
			}
			
					/* Landscape */
	@media only screen and (min-width : 321px) and (max-width:667px) 
	
	{
		
		body {
			font-family:'Roboto' !important;
			background-size:300% 300%;
			background-repeat:no-repeat;
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
	
	}
	@media screen and (max-width: 600px){
	
		body {
			font-family:'Roboto' !important;
			background-size:250% 300%;
			background-repeat:no-repeat;
	
		}
		
		#meineEinstellungen {
				color:white;
				text-align:center;
				font-family: 'Roboto', sans-serif, Verdana, Arial;
				margin-top:35%;
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
			font-size: 16pt;
			color: darkorange;
		}
		
			
		#Avatar-Well {
			margin-bottom:20%;
		}
		
	
	
		
	}
	
    </style>
</head>


<body>

<div class="container" id="settings-container">
    <div class="row">
        <h2 id="meineEinstellungen">Meine Einstellungen</h2>

<?php

INCLUDE "templates/form_change_email.php";
INCLUDE "templates/form_change_password.php";
INCLUDE "templates/form_change_avatar.php";


?>

</div>
</div>
<?php INCLUDE "templates/page_footer.php";?>
</body>
</html>

