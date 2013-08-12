<?php

    $userPasswords = array(
        'andrejbranch' => '123456',
        'hossthebossross' => '654321',
    );

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!array_key_exists($username, $userPasswords)) {
        // redirect to login page with error username not exists
        var_dump('user not exist');
        die;
    }

    if ($userPasswords[$username] !==$password) {
        // redirect to login page with error password incorrect
        var_dump('password incorret');
        die;
    }

    //start the session
    session_start();

    //set token
    $_SESSION['ross_toekn'] = 'set';

    // redirect to homepage
    header('Location: index.php');
    die();

?>

