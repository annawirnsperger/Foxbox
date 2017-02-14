<?php

//Prüft ob User bereits existiert

$sql = "SELECT * FROM foxbox_user WHERE session_id = '".$session."' LIMIT 1";
$query = $db->query($sql);
while($row = $query->fetch(PDO::FETCH_OBJ)) {
    // existiert User, setze loggedin = true
    $loggedin = true;
    // speichere User-Daten in Variable $userdata
    $userdata = $row;

    break;
}

?>