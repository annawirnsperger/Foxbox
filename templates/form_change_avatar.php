<!DOCTYPE html>
<html>
<head>
    
    <link href="css/settings.css" rel="stylesheet">

    <script type="text/javascript" src="js/bootstrap-filestyle.min.js"> </script>

</head>
<body>

<div class="col-md-4" id="Avatar-Col">
    <div class="well well-lg" id="Avatar-Well">

<h4>Profilbild ändern</h4>

        <?php
        if(!empty($userdata->avatar)) {  // Wenn Profilbild im Avatar-Ordner vorhanden ist:
            echo "<img src=\"./avatars/".$userdata->avatar."\" width=\"80\"><br>";  // Wird das Bild ausgegeben
            echo "<br>";
            echo "<a href=\".\?deleteavatar=true\" class=\"btn btn-default btn-xs\" role=\"button\">Aktuelles Profilbild löschen</a>"; //Button zum Löschen wird angezeigt
        } else {
            echo "<img src=\"./images/no-avatar.jpg\" width=\"80\">";  // Wenn kein Profilbild angegeben: no-avatar-Bild wird angezeigt
        }
        ?>
        <br>
        <hr>

        <form method="POST" action="./?page=settings" enctype="multipart/form-data"> <!-- Spezifiziert, welcher Content-Typ beim Absenden benutzt werden soll -->
            <input type="file" class="filestyle" data-icon="false" data-buttonText="Durchsuchen" data-placeholder="Kein Bild ausgewählt" name="avatar"> <br>
            <button type="submit" class="btn btn-primary" name="changeavatar">Profilbild ändern</button>

        </form>
    </div>
</div>
</body>
</html>


