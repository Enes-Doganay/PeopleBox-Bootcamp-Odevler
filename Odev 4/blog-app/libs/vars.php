<?php

    session_start();

    if(isset($_SESSION["alert_message"])) {
        echo $_SESSION["alert_message"];
        unset($_SESSION["alert_message"]);
    }
?>