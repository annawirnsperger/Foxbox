<?php
if(isset($_POST["create_dir"])) {
    if($loggedin) {

        $sql = "INSERT INTO foxbox_directories (parent_id, user_id, dir_name) 
                VALUES ('".$_GET["folder"]."', '".$userdata->id."', '".$_POST["dir_name"]."')";
        $db->query($sql);

    }
}

?>