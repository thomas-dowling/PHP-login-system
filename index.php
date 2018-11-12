<?php 
    //allow config file
    define('__CONFIG__', true);

    //require config file
    require_once "inc/config.php"; 

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="robots" content="follow">
        
        <title>Login Homepage</title>
        
        <base href="/" />
        
        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.22/css/uikit.min.css" />
              
    </head>
    
    <body>
        
        <!-- UIKit theme -->
        <div class="uk-section uk-container">
            <?php 
                echo "Hello WORLD. Today's time is: ";
                echo date("Y m d");
            ?>
            <p>
                <a href="login.php">Login</a>
                <a href="register.php">Register</a>
            </p>
        </div>
        
        <?php require_once "inc/footer.php"; ?>
    </body>
</html>