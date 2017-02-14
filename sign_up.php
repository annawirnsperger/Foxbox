<?php
if(isset($_POST["signup"])) {

    $mail = $_POST["mail"];
    $pw1 = $_POST["pw1"];
    $pw2 = $_POST["pw2"];

    // existiert der User bereits mit der Email Adresse
    $sql = "SELECT * FROM foxbox_user WHERE email = '".$mail."'";
    $query = $db->query($sql);
    $user = $query->fetch(PDO::FETCH_OBJ);

    if(!empty($user)) {
       ?>
        <script>alert("Der Benutzer existiert bereits!");</script>
        <?php
    } elseif($pw1 != $pw2)
    {
        ?>
        <script>alert("Die Passwörter unterscheiden sich!");</script>
        <?php
    } else {
        $sql = "INSERT INTO foxbox_user (email, password) VALUES ('".$mail."', '".md5($pw1."salt123")."')";
        $db->query($sql);
        
        //Erfolgsmeldung nach Registrierung
        echo "<div class=\"alert alert-success alert-dismissible\" role=\"alert\" id=\"alert\" style='position:absolute; z-index: 5; left: 50%; margin-top: 0; margin-right: 0; margin-bottom: 0; width:50%'>
				<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
				<strong>Vielen Dank für deine Registrierung! Du kannst dich jetzt einloggen und loslegen.</strong>
				</div>";
    }

}

?>
