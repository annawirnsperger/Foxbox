<!DOCTYPE html>
<html>
<head>

        <link href="css/page_header.css" rel="stylesheet">

</head>
<body>

<div class="col-md-8">
        <div class="well well-lg" id="Dateien-Well">
<?php
// wenn parent directory angegeben, dann die ID dieses folders auslesen,
// wegen Parameter für zurück-Link
if($folder != 0) {
$sql = "SELECT * FROM foxbox_directories WHERE id = '".$folder."'";
$query = $db->query($sql);
$row = $query->fetch(PDO::FETCH_OBJ);
INCLUDE "templates/go_directory_back_link.php";
}
?>



<?php
  // Ausgabe des aktuellen Ordnernamens
        if ($row->dir_name) { ?> <p class="aktueller_ordner"><i class="fa fa-folder-open" aria-hidden="true"></i> <span class="ordner_name"><?=$row->dir_name;?></span></p> <?php }
        ?>


<?php

        // Directories und files ausgeben
 INCLUDE "templates/list_directories.php";
 INCLUDE "templates/list_files.php";
        ?>
</div>
</div>
</body>
</html>