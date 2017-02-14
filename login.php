<?php

if(isset($_POST["login"])) {

    $email = $_POST["email"];
    $password = md5($_POST["password"]."salt123");


    // suche nach dem User mit dem Username aus $username und dem PW aus $password
    $sql = "SELECT * FROM foxbox_user WHERE email = '".$email."' AND password = '".$password."'";
    $query = $db->query($sql);
    while($row = $query->fetch(PDO::FETCH_OBJ)) {

        // erneuer die Sitzung des Userd in der DB
        $sql = "UPDATE foxbox_user SET session_id = '".$session."' WHERE email = '".$email."'";
        $db->query($sql);
        header("Location: ./");

        break;
    }


}

?>