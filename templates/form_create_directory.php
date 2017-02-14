<!DOCTYPE html>
<html>
<head>
   
</head>
<body>

<div class="well well-lg" id="Ordner-erstellen-Well">

    <h4>Neuen Ordner erstellen</h4>

<form method="post" action="index.php?folder=<?=$folder;?>">
            <input type="text" class="form-control" name="dir_name" placeholder="Ordnername"> <br>
            <button type="submit" class="btn btn-primary" name="create_dir">Ordner erstellen</button>
</form>

</div>
</body>
</html>
