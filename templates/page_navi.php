<html>
<head>
    <link href="css/page_navi.css" rel="stylesheet">
	
	<style>
		/* Tablet */
		
		@media (min-width:600px) and (max-width:1000px) {
			
			.avatar_anzeige {
			float: left !important;
		}

		.avatar_hello {
			float: left !important;
			margin-top: 10% !important;
			width: 80% !important;
			margin-left:10% !important; 
			margin-right:4% !important;
			margin-bottom:5% !important;
			color: white;
		}

			
		}
	
	
		/* Landscape */
	@media only screen and (min-width : 321px) and (max-width:667px) 
	
	{
		body {
			font-family:"Helvetica" !important;
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
			font-family:"Helvetica" !important;

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
		
		.avatar_anzeige {
			float: left !important;
		}

		.avatar_hello {
			float: left !important;
			margin-top: 20% !important;
			width: 80% !important;
			margin-left:10% !important; 
			margin-right:4% !important;
			margin-bottom:5% !important;
			color: white;
		}

		
		
	}
	</style>
</head>
<body>

<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">FoxBox</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <div id="nav_main">
                <ul class="nav navbar-nav">
                    <li class="hover_needed"> <a href="index.php">Home</a> </li>
                </ul>
            </div>
                <ul class="nav navbar-nav navbar-right">
                    <li class="hover_needed"><a href="index.php?page=settings">Einstellungen</a></li>
                    <li class="hover_needed"><a href="index.php?page=logout">Abmelden</a></li>

                </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="avatar_hello">
    <div class="avatar_anzeige"><?php
        if(!empty($userdata->avatar)) {
            echo "<img src=\"./avatars/".$userdata->avatar."\" width=\"40\">";
        } else {
            echo "<img src=\"./images/no-avatar.jpg\" width=\"40\">";
        }
      ?></div>
    <p>Hallo! Du bist eingeloggt als:<br><?=$userdata->email;?></p>

</div>

</body>
</html>
