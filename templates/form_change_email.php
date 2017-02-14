<!DOCTYPE html>
<html>
<head>
    
    <link href="css/settings.css" rel="stylesheet">

</head>
<body>

<div class="col-md-4" id="Email-Col">
    <div class="well well-lg" id="Email-Well">

<h4>Email Adresse ändern</h4>

        <form action="./" method="POST">
            <input type="email" name="email" class="form-control" value="<?=$userdata->email;?>" /><br />  <!--  Wert der E-Mail-Adresse wird übergeben-->
            <button type="submit" class="btn btn-primary" name="changemail">Email ändern</button>
        </form>
    </div>
</div>
</body>
</html>
