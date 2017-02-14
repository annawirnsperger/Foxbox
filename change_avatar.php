    <?php

    if(isset($_POST["changeavatar"])) {

        if($loggedin) {
            // Infos zu der Datei anfordern
            $tmp_name = $_FILES["avatar"]["tmp_name"];   // tmp_name=temporärer Dateiname, unter dem die hochgeladene Datei auf dem Server gespeichert wurde.
            $file_name = $_FILES["avatar"]["name"];		 // name=ursprünglicher Dateiname auf Computer des Benutzers
            $mime_type = $_FILES["avatar"]["type"];		// type=mime-Type der Datei, wird nicht von PHP geprüft

            // Avatar in den Ordner legen
            move_uploaded_file($tmp_name, "./avatars/".$file_name); //Verschiebt hochgeladene Datei an neuen Ort

            $sql = "UPDATE foxbox_user SET avatar = '".$file_name."' WHERE id = '".$userdata->id."'";
            // Neuer Avatar wird über das SQL-Statement als Profilbild festgelegt

            $db->query($sql); //"Über diese Verbindung (db) soll mit der Methode query das sql ausgeführt werden"
            header("Location: ./?page=settings");
        }}

    ?>