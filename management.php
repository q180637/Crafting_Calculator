<?php
session_start();
if(isset($_SESSION['username'])){
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta author="Ben Richardson">
        <meta name="description" content="">
        <title>Database Management Menu</title>
        <link href="css/main.css" rel="stylesheet">
        <link href="css/management.css" rel="stylesheet">
        <link rel="icon" href="img/destiny_logo.png" title="Destiny logo favicon" alt="Destiny logo favicon">
        <script src="js/burger_menu.js"></script>
    </head>
    <body>
        <div class="mobile">
            <nav>
                <img class="logo"src="img/destiny_logo.png" alt="Destiny Logo for Button"  onclick="burger_flyout()">
                <header>
                    Database Management
                </header>
                <ul id="mobile_links">
                    <li class="tool">
                        <a href="index.html">Calculator Tool</a>
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
                <div class="add_button">
                    <a href="add.php">
                        Add Record
                    </a>
                </div>
                <div class="edit_button">
                    <a href="edit.php">
                        Edit/Delete Record
                    </a>
                </div>
                <div class="logout_button">
                    <a href="php/logout.php">
                        Logout
                    </a>
                </div>
            </div>
        </div>
        <div class="desktop">
            <nav>
                <ul class="links">
                    <li>   
                        <a href="index.php"><img class="logo" src="img/destiny_logo.png" alt="Destiny Logo for Button" href = "index.html"></a>
                    </li> 
                    <li class="tool">
                        <a href="index.html">Calculator Tool</a>
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
                <div class="add_button">
                <a href="add.php">
                        Add Record
                    </a>
                </div>
                <div class="edit_button">
                    <a href="edit.php">
                        Edit/Delete Record
                    </a>
                </div>
                <div class="logout_button">
                    <a href="php/logout.php">
                        Logout
                    </a>
                </div>
            </div>
        </div>        
    </body>
</html>
<?php
}

else{
    header("Location: login.php");
    exit();
}