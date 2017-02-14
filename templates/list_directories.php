<!DOCTYPE html>
<html>
<head>

    <style>
        span {  /* Dateien und Ordner bearbeiten Links*/
            color: grey;

        }
        #Button_Text {  /*Dateien und Ordner bearbeiten Text*/
            font-size: 0.75em;
        }
        .glyphicon { /*Dateien und Ordner bearbeiten Icon*/
            font-size: 0.75em;
        }
        li.foldericon {  /*Ordner und Filenamen*/
            list-style-type: none;
            text-indent: -1.4em;
            font-size: 0.95em;
        }
        li {
            list-style-type: none;
        }

        li.foldericon:before /* Ordner und File Icon*/
        {
            font-family: FontAwesome;
            color: cornflowerblue;
            content: "\f114"; /*Font-Awesome Unicode*/
            float: left;
            width: 1.4em;
        }

        h5 {
            font-size: 1.125em;
        }

    </style>
</head>
<body>


<?php
        echo "<ul id=\"OrdnerDateien\"><li class=\"listing\"><h5>Ordner und Dateien</h5><hr></li>";
        echo "<ul>";

        // show folders
        $sql = "SELECT * FROM foxbox_directories WHERE user_id = '".$userdata->id."' AND parent_id = '".$folder."'";
        $query = $db->query($sql);
        while($row = $query->fetch(PDO::FETCH_OBJ)) {

            echo "<li id=\"Ordner\" class='foldericon'>";
            echo "<a href=\"index.php?folder=".$row->id."\">".$row->dir_name."</a>";
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"index.php?deletefolder=".$row->id."\"><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span><span id='Button_Text'>Löschen</span></a>";
            echo "</li>";
        }

        echo "</ul>";
?>
</body>
</html>
