<?php
if(isset($_GET["showfile"])) {

    if(!file_exists("./files/".$_GET["showfile"])) {
        die("Die Datei existiert nicht");
    }

    $sql = "SELECT * FROM foxbox_files WHERE crypto_name = '".$_GET["showfile"]."'";
    $query = $db->query($sql);
    $file = $query->fetch(PDO::FETCH_OBJ);

    // header('Content-Description: File Transfer'); muss man bei http-protocol als content-type angeben
    header("Content-Type: ".$file->mime_type);
    header("Content-Disposition: attachment; filename=\"".$file->file_name."\"");

    readfile("./files/".$file->crypto_name);

    die(); // wichtig, damit Programm hier beendet wird
}

?>