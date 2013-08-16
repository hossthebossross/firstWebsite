<?php

    session_start();

    unset($_SESSION['ross_token']);

    //token is unset so redirect to login.php
        header('Location: login.php');
        die();

?>
