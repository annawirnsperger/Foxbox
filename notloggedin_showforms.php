<?php

if(!isset($_GET["page"])) {

		// Wurde Loginformular abgesendet? Wenn ja, dann ist Anmeldung fehlgeschlagen
		if(isset($_POST["login"])) {
			echo "<div class=\"alert alert-danger\" role=\"alert\" id=\"alert\" style=\"padding: 8px 8px 8px 8px;\">
				<strong>Login fehlgeschlagen</strong><br> Versuche es erneut.</div>";
		}
	
	INCLUDE "templates/form_login.php";



	} else if (isset($_GET["page"]) && $_GET["page"] == "signup") { 

		INCLUDE "templates/signup.php";

	}
	
?>