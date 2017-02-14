<?php
if(isset($_GET["deleteavatar"])) {

    echo "delete avatar";

    if($loggedin) {

        unlink("./avatars/".$userdata->avatar); // unlink: löscht eine Datei

        $sql = "UPDATE foxbox_user SET avatar = '' WHERE id = '".$userdata->id."'";
		// Avatar-Angabe wird über das SQL-Statement entleert
		
        $db->query($sql);

        header("Location: ./?page=settings");

    }
}

?>