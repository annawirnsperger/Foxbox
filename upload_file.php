    <?php

    if(isset($_POST["upload_file"])) {

        if($loggedin) {

            // Datei Informationen holen
            $tmp_name = $_FILES["file"]["tmp_name"];
            $file_name = $_FILES["file"]["name"];
            $mime_type = $_FILES["file"]["type"];
            $directory = $_GET["folder"];

            // cryptischen Dateinamen erzeugen
            $crypto_file_name = md5(time()."a(Z(§)=dfs(/(§ksadkpüdsa");

            // hochgeladene Datein in den Ordner ./files verschieben
            move_uploaded_file($tmp_name, "./files/".$crypto_file_name);

            // Datein in der Datenbank vermerken/speichern
            $sql = "INSERT INTO foxbox_files (user_id, file_name, directory_id, crypto_name, mime_type) 
                    VALUES ('".$userdata->id."', '".$file_name."', '".$directory."', '".$crypto_file_name."', '".$mime_type."')";
            $db->query($sql);
        }

    }

    ?>