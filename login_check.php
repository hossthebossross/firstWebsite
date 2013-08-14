<?php

    $link = mysql_connect('localhost', 'root', 'roscar12');
    if (!$link) {
        die('Could not connect: ' . mysql_error());
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

        $query=" SELECT username, password FROM TEST.users WHERE username = '$username' AND password = '$password'";
        $result=mysql_query($query);

        $row = mysql_fetch_assoc($result);

    if (!$row) {
        // redirect to login page with error username not exists
        var_dump('User Does Not Exist');
        die;
    }

    //start the session
    session_start();

    //set token
    $_SESSION['ross_token'] = 'set';

    // redirect to homepage
    header('Location: index.php');
    die();

?>
