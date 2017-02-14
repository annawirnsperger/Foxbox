    <?php

    if(isset($_GET["page"]) && $_GET["page"] == "logout") {
        session_regenerate_id();
        session_destroy();
        header("Location: ./");
    }

    ?>