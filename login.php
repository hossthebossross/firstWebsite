<?php

    //start the session
    session_start();

    if (isset($_SESSION['ross_token'])) {
        //token is ser so redirect to index.php
        header('Location: index.php');
        die();
    }
?>


