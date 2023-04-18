<!DOCTYPE html>
<?php
        require 'php/db_management_functionality.php';
    ?>
    <?php 
        ini_set('display_errors', 1);  
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta author="Ben Richardson">
        <meta name="description" content="">
        <title>Sign Up</title>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/signup.css">
        <link rel="icon" href="img/destiny_logo.png" title="Destiny logo favicon" alt="Destiny logo favicon">
        <script src="js/burger_menu.js"></script>
    </head>
    <body>
        <div class="mobile">
            <nav>
                <img class="logo"src="img/destiny_logo.png" alt="Destiny Logo for Button"  onclick="burger_flyout()">
                <header>
                    Create an Account
                </header>
                <ul id="mobile_links">
                    <li class="tool">
                        <a href="index.php">Calculator Tool</a>
                    </li>
                    <li class="login">
                        <a href="login.php">Login</a>
                    </li>
                    <li class="saves">
                        <a href="saved_weapons.php">Your Weapons</a>
                    </li>
                </ul>
            </nav>
            <div class="body_wrapper">
                <form id="mobileSignup" method="post">
                    <label for="username" class="username">Choose a username</label>
                    <input type="text" id="username" name="username"></input>
                    <label for="password" class="passLabel">Choose a password</label>
                    <input type="password" id="password" name="password"></input>
                    <input id="sign_in" type="submit" value="Sign in" name="sign_up">
                    </input>
                </form>
            </div>
        </div>
        <div class="desktop">
            <nav>
                <ul class="links">
                    <li>   
                        <a href="index.php"><img class="logo" src="img/destiny_logo.png" alt="Destiny Logo for Button" href = "index.php"></a>
                    </li> 
                    <li class="tool">
                        <a href="index.php">Calculator Tool</a>
                    </li>
                    <li class="login">
                        <a href="login.php">Login</a>
                    </li>
                    <li class="saves">
                        <a href="saved_weapons.php">Your Weapons</a>
                    </li>
                </ul>
            </nav>
            <div class="body_wrapper">
                <header>Sign Up</header>
                <form id="desktopSignup" method="post">
                    <label for="username" class="username">Choose a username</label>
                    <input type="text" id="username" name="username"></input>
                    <label for="password" class="passLabel">Choose a password</label>
                    <input type="password" id="password" name="password"></input>
                    <input id="sign_in" type="submit" value="Sign in" name="save_logon">
                    </input>
                </form>
            </div>
        </div>
        <?php
            if(array_key_exists('save', $_POST)){
            addToLogon();
            }
        ?>
    </body>
</html>