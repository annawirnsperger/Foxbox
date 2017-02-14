<!DOCTYPE html>
<html>
<head>
    <link href="css/page_header.css" rel="stylesheet">

	<style>
            body {
                background-image: url("images/forest_fog.jpg");
                background-repeat: no repeat center;
                background-size: 100%;
            }
			
			#meineDateien {
				color:white;
				padding-left: 15px;
				font-family: 'Roboto', sans-serif, Verdana, Arial;
			}
	
					/* Tablet */
	@media (min-width:600px) and (max-width:1000px) {
			body {
				font-family:'Roboto' !important;
				background-size:250% 250%;
				background-repeat:no-repeat;
			}
			#Upload-Well {
				margin-bottom:15%;
			}
		
			#meineDateien {
				margin-top:15%;
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
			background-size:200% 500%;
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
		
		#OrdnerDateien {
			margin-left:10%;
		}

		#DateienZeile {
			margin-left:10%;
		}

		#Ordner {
			margin-left:10%
			}
		
		#Upload-Well {
			margin-buttom:10%;
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
		
		#meineDateien {
			font-family:"Helvetica" !important;
			margin-top:0%;
			text-align:center;
		}
		
		#Upload-Well {
			margin-bottom:20%;
		}
	
		#OrdnerDateien {
			margin-left:-10%;
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
		
		#Button_Text {
			display:none;
		}
		
		ul {
			margin-left:-10%;
		}
		
	}
	
			
        </style>

</head>
<body>

<div class="container">
    <div class="row" id="Wells_all">

    <h2 id="meineDateien">Meine Dateien</h2>
        
<?php

// Ein parent ordner angegeben?
if(!isset($_GET["folder"])) {
    $folder = 0;
} else {
    $folder = $_GET["folder"];
}

// Directories und files ausgeben
INCLUDE "templates/list_directory_and_files.php";

// Formulare für directory erstellen und file upload
INCLUDE "templates/create_and_upload.php";

?>

</div>
</div>

<?php INCLUDE "templates/page_footer.php";?>
</body>
</html>