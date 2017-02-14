    <?php

    if(isset($_GET["renamefileid"])) {

        if($loggedin) {

            $sql = "SELECT * FROM foxbox_files WHERE id = '".$_GET["renamefileid"]."'";
            $query = $db->query($sql);
            $file = $query->fetch(PDO::FETCH_OBJ);

            if($file->user_id == $userdata->id) {

                $sql = "UPDATE foxbox_files SET file_name = '".$_POST["filename"]."' WHERE id = '".$_GET["renamefileid"]."'";
                echo $sql;
                $db->query($sql);
                header("Location: ./?folder=".$file->directory_id);

            }
        }
    }

    ?>