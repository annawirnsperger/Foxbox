<?php 

INCLUDE "dbconnect.php";

// neue Sitzung erzeugen
session_start();
$session = session_id();

// Prüfen, ob User eingeloggt ist
$loggedin = false;

INCLUDE "check_user.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>FoxBox</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="Frameworks/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

    <!-- Einbindung für den JS Zurück Button -->
    <script type="text/javascript"> function goBack() {window.history.back()}</script>
	
	<style>
            body {
                background-image: url("images/forest_fog.jpg");
                background-repeat: no repeat center;
                background-size: 100%;
            }

            #Umbenennen-Well {
                padding: 24px 24px 24px 24px;
                height:170px;
                width:500px;
                position:relative;
            }
			
			.GoBackButton {
				position:relative;
				color:black
			}
			
						/* Tablet */
			@media (min-width:600px) and (max-width:1000px) {
			body {
				font-face:'Roboto' !important;
				background-size:250% 250%;
				background-repeat:no-repeat;
			}
			
			#GoBackButton {
			margin-left:6%;
			position:relative;
			color:black;
		}
		
			#Umbenennen-Well {
               
				margin-top:25%;
				margin-left:6%;
                height:100%;
                width:80%;
                position:relative;
            }
			
		.form-control {
			width:500px;
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
	
	}
	@media screen and (max-width: 600px){
	
		body {
			font-family:'Roboto' !important;
			background-size:250% 250%;
			background-repeat:no-repeat;
	
		}
		
		#GoBackButton {
			margin-left:15%;
		}
		
		#Umbenennen-Well {
               
				margin-top:45%;
				margin-left:15%;
                height:80%;
                width:70%;
                position:relative;
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

	
		
	}
        </style>


</head>
<body>

<?php

INCLUDE "templates/page_navi.php" ?>

<div class="container">
<div class="row">
<div class="col-md-12">
<div class="well well-lg" id="Umbenennen-Well">
<h4>Datei umbenennen</h4>
<form action="./?renamefileid=<?=$_GET["fileid"];?>" method="post">
	<input type="text" name="filename" class="form-control" value="<?=$_GET["filename"];?>" />
	<br>
	<button type="submit" class="btn btn-primary" value="Datei Umbenennen">Datei umbenennen</button>
	<br>
	<br>
</form>

</div>
<p class="btn btn-default" id="GoBackButton" role="button" onclick="goBack()">Zurück</p>
</div>
</div>
</div>

<?php INCLUDE "templates/page_footer.php";?>
</body>
</html>