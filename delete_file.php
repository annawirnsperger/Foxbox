<?php
if(isset($_GET["deletefile"])) {

    if($loggedin) {

        $sql = "SELECT * FROM foxbox_files WHERE id = '".$_GET["deletefile"]."'";
        $query = $db->query($sql);
        $file = $query->fetch(PDO::FETCH_OBJ);

        if($file->user_id == $userdata->id) {

            unlink("./files/".$file->crypto_name);

            $sql = "DELETE FROM foxbox_files WHERE id = '".$file->id."'";
            $db->query($sql);
            header("Location: ./?folder=".$file->directory_id);
        }
    }
}
?>