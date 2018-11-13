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
            <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid="">
                <form class="uk-form-stacked js-register">
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-stacked-text">Email</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-stacked-text" type="email" required='required' placeholder="email@domain.com">
                        </div>
                    </div>                    
                       
                       <div class="uk-margin">
                        <label class="uk-form-label" for="form-stacked-text">Password</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-stacked-text" type="password" required='required' placeholder="Your Password">
                        </div>
                    </div>
                    
                    <div class="uk-margin uk-alert uk-alert-danger js-error" style='display: none;'>
                        test
                    </div>
                    
                    <div class="uk-margin">
                        <button class="uk-button uk-button-default" type="submit">Register</button>
                    </div>

                </form>         
            </div>
        </div>
        
        <?php require_once "inc/footer.php"; ?>
    </body>
</html>