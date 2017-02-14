<?php

INCLUDE "dbconnect.php";

// neue Sitzung erzeugen
session_start();
$session = session_id();

//Prüfen, ob User eingeloggt ist
$loggedin = false;

INCLUDE "check_user.php";
INCLUDE "login.php";
INCLUDE "logout.php";

INCLUDE "sign_up.php";
INCLUDE "change_email.php";
INCLUDE "change_pw.php";

INCLUDE "change_avatar.php";
INCLUDE "delete_avatar.php";

INCLUDE "create_folder.php";
INCLUDE "delete_folder.php";

INCLUDE "upload_file.php";
INCLUDE "delete_file.php";
INCLUDE "rename_file.php";
INCLUDE "get_file.php";

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

    <!-- Einbindung Google Font Roboto -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto">

    <!-- Einbindung Font-Awesome-->
    <link rel="stylesheet" href="Frameworks/font-awesome-4.7.0/css/font-awesome.min.css">

    <!-- Einbindung Favicon Fuchs -->
    <link rel="shortcut icon" href="images/fox_box_logo.ico">

</head>
<body>
<?php
// Wenn User nicht eingeloggt ist (session leer) wird loginformular oder registrierung angezeigt
if(!$loggedin) {

// HTML-Header ausgeben
	INCLUDE "templates/html_header.php";

} else {

	// page header anzeigen
	INCLUDE ("templates/page_header.php");

	// Wenn keine andere Seite angefordert, wird Datei/Ordnerliste angezeigt
    if(!isset($_GET["page"])) {

    // Home Elemente anzeigen
    INCLUDE "home_elemente.php";

        // Wenn $_GET["page"] und Settings, dann Settings anzeigen
    } else if ($_GET["page"] == "settings") {

		// Settings-Formulare anzeigen
        INCLUDE "templates/settings.php";
    }
}
?>
</body>
</html>
