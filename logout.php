<?php

    session_start();
    session_unset();
    session_destroy();
    $_SESSION = array();
  #  if (count($_SESSION) == 0) {
  #  $_SESSION=array();
  #  session_destroy();
    //token is unset so redirect to login.php
        header('Location: login.php');
        die();
  #      }
?>
 # unset($_SESSION['ross_token'], $unset );

