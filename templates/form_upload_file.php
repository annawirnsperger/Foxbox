<!DOCTYPE html>
<html>
<head>
    
	<script type="text/javascript" src="js/bootstrap-filestyle.min.js"></script>

</head>
<body>

<div class="well well-lg" id="Upload-Well">

    <h4>Datei hochladen</h4>

    <form method="post" action="index.php?folder=<?=$folder;?>" enctype="multipart/form-data">
            <input type="file" class="filestyle" data-icon="false" data-buttonText="Durchsuchen" data-placeholder="Keine Datei ausgewählt" name="file" /> <br>
            <button type="submit" class="btn btn-primary" name="upload_file">Hochladen</button>
        </form>

    </div>
</body>
</html>