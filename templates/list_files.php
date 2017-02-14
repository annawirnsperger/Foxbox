<!DOCTYPE html>
<html>
<head>

    <style>
        span {  /* Dateien und Ordner bearbeiten Links*/
            color: grey;

        }
        #Button_Text {  /*Dateien und Ordner bearbeiten Text*/
            font-size: 0.75em;
            text-indent: -2em;
        }
        .glyphicon {    /*Dateien und Ordner bearbeiten Icon*/
            font-size: 0.75em;
            padding-left: 4%;
        }
        li.fileicon {      /*Ordner und Filenamen*/
            list-style-type: none;
            text-indent: -1.4em;
            font-size: 0.95em;
        }

        li.fileicon:before  /* Ordner und File Icon*/
        {
            font-family: FontAwesome;
            color: grey;
            font-size: 14px;
            content: "\f016"; /*Font-Awesome Unicode*/
            float: left;
            width: 1.4em;
        }
    </style>

</head>
<body>

<?php

        echo "<li></li>";
        echo "<ul>";

        // show files
        $sql = "SELECT * FROM foxbox_files WHERE user_id = '".$userdata->id."' AND directory_id = '".$folder."'";
        $query = $db->query($sql);
        while($row = $query->fetch(PDO::FETCH_OBJ)) {

            echo "<li id=\"DateienZeile\" class='fileicon'>";
            echo "<a href=\"index.php?showfile=".$row->crypto_name."\">".$row->file_name."</a>";
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"index.php?deletefile=".$row->id."\"><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span><span id='Button_Text'>Löschen&nbsp;&nbsp;|</span></a>";
            echo " <a href=\"rename.php?fileid=".$row->id."&filename=".$row->file_name."\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span><span id='Button_Text'>Umbenennen&nbsp;&nbsp;|</span></a>";
            echo " <a href=\"share.php?file=".$row->crypto_name."\"><span class=\"glyphicon glyphicon-share-alt\" aria-hidden=\"true\"></span><span id='Button_Text'>Teilen</span></a>";
            echo "</li>";

        }

        echo "</ul>";
        echo "</ul>";
		echo "<br>";
?>

</body>
</html>


