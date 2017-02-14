    <?php

    if(isset($_POST["changemail"])) {      // isset prüft, ob eine Variable existiert und nicht NULL ist.
        if($loggedin) {    // Wenn Nutzer eingeloggt ist:

            $sql = "UPDATE foxbox_user SET email = '".$_POST["email"]."' WHERE id = '".$userdata->id."'";
            // SQL-Statement: Aktualisiere den foxbox_user: füge die neue E-Mail an der Stelle ein
            // wo sich die User-ID des Nutzers befindet

            $query = $db->query($sql); //"Über diese Verbindung (db) soll mit der Methode query das sql ausgeführt werden"
            header("Location: .\index.php?page=settings"); //Weiterleitung des Nutzers auf Einstellungen-Seite

        }
    }

    ?>