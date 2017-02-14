    <?php

    if(isset($_GET["deletefolder"])) {

        $sql = "SELECT * FROM foxbox_directories WHERE id = '".$_GET["deletefolder"]."'";
        $query = $db->query($sql);
        $folder = $query->fetch(PDO::FETCH_OBJ);

        if($folder->user_id == $userdata->id) {

            $sql = "DELETE FROM foxbox_directories WHERE id = '".$folder->id."'";
            $db->query($sql);
            header("Location: ./?folder=".$folder->parent_id);
        }
    }

    ?>