<?php

    session_start();

    // unset the ross_token session key
    unset($_SESSION['ross_token']);

    // redirect to login
    header('Location: login.php');
    die;
?>

