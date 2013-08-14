<?php

    //start the session
    session_start();

    if (isset($_SESSION['ross_token'])) {
        //token is set so redirect to index.php
        header('Location: index.php');
        die();
    }

?>

<!-- user is not logged in so show the login page -->
<html>
    <head>
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
        <link href="login.css" rel="stylesheet">
    </head>
    <body>
        <h1>I'M ROSS AND I'M CRAZY</h1>
        <form action="login_check.php" method="post" class="form-horizontal">
            <div class="control-group">
                <label class="control-label" for="input-username">Username</label>
                <div class="controls">
                    <input name="username" type="text" id="input-username" placeholder="username">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="input=password">password</label>
                <div class="controls">
                     <input name="password" type="password" id="input-password" placeholder="password">
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <label class="checkbox">
                        <input name="remember_me" type="checkbox"> Remember me
                    </label>
                    <button type="submit" class="btn">Sign in</button>
                </div>
            </div>
        </form>

         <script src="http://codeorigin.jquery.com/jquery-2.0.3.min.js"></script>
+        <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    </div>
 </form>
    </body>
</html>
