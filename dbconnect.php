

        <?php

        $dsn="mysql:host=localhost;dbname=u-aw129";
        $dbuser="aw129";
        $dbpass="kuba9uoLee";


        try {
            $db = new PDO($dsn, $dbuser, $dbpass);
        }

        catch (PDOException $e)
        {
            echo "Fehler bei der Datenbankverbindung";
            echo $e->getMessage();
            die();
        }

        ?>