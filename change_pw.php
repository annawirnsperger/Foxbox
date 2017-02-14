    <?php

    if(isset($_POST["changepassword"])) {  // Prüft, ob Variable existiert und nicht NULL ist.
        if($loggedin) {

            $pw1 = $_POST["pw1"];   //Eingegebeneer Wert im Formular für name="pw1"
            $pw2 = $_POST["pw2"];    //Eingegebeneer Wert im Formular für name="pw2"

            if ($pw1 != $pw2) {     // Wenn pw1 nicht gleich pw2 ist
                ?>
                <script>alert("Die Passwörter unterscheiden sich!");</script>
                <?php
            } else {  // ansonsten:

                $sql = "UPDATE foxbox_user SET password = '" . md5($_POST["pw1"] . "salt123") . "' WHERE id = '" . $userdata->id . "'";
                // SQL-Statement: Aktualisiere den foxbox_user: füge das neue Passwort an der Stelle ein
                // wo sich die User-ID des Nutzers befindet

                $query = $db->query($sql); //"Über diese Verbindung (db) soll mit der Methode query das sql ausgeführt werden"

                header("Location: .\index.php?page=settings"); //Weiterleitung des Nutzers auf Einstellungen-Seite
            }
        }
    }
    ?>