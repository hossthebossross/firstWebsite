<?php

    $link = mysql_connect('localhost', 'root', 'roscar12');
    if (!$link) {
        die('Could not connect: ' . mysql_error());
}
    // Query database to check if there are any matching users
    //$query = "SELECT * FROM users WHERE user='{$_POST['username']}' AND password='{$_POST['password']}'";
    // mysql_query($query);
    // // This means the query sent to MySQL would be:
    // echo $query;

    $username = $_POST['username'];
    $password = $_POST['password'];

        $query=" SELECT * FROM TEST.users WHERE username = '$username' AND password = '$password'";
        $result=mysql_query($query);

        ($row = mysql_fetch_assoc($result));

    if (!array_key_exists($username, $row)) {
        // redirect to login page with error username not exists
        var_dump('User Does Not Exist');
        die;
    }

    if ($userPasswords[$username] !==$password) {
        // redirect to login page with error password incorrect
        var_dump('password incorrect');
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
 $userPasswords = array(
        'andrejbranch' => '123456',
        'hossthebossross' => '654321',
    );
($row = mysql_fetch_assoc($result)) {
            var_dump($row);
{
            var_dump($row);
            die;
        }

