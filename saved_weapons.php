<?php
session_start();
if(isset($_SESSION['username'])){
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta author="Ben Richardson">
        <meta name="description" content="">
        <title>Saved Weapons</title>
        <link href="css/main.css" rel="stylesheet">
        <link href="css/saves.css" rel="stylesheet">
        <link rel="icon" href="img/destiny_logo.png" title="Destiny logo favicon" alt="Destiny logo favicon">
        <script src="js/burger_menu.js"></script>
        <script src="js/saved_weapons.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    </head>
    <body onload="loadSaves()">
        <div class="mobile">
            <nav>
                <img class="logo"src="img/destiny_logo.png" alt="Destiny Logo for Button"  onclick="burger_flyout()">
                <header>
                    Your Weapons
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
                <select name="saveList" id="mSaveList">
                <option value="Choose a Weapon" selected = "selected" hidden ="hidden">Choose a Weapon</option>
                </select>
                <div id="mWeapon">

                </div>
                <div id="mFrame">

                </div>
                <div id="mBarrel">

                </div>
                <div id="mMag">

                </div>
                <div id="mT1">

                </div>
                <div id="mT2">

                </div>
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
                <select name="saveList" id="dSaveList">
                <option value="Choose a Weapon" selected = "selected" hidden ="hidden">Choose a Weapon</option>
                </select>
                <div id="dWeapon">

                </div>
                <div id="dFrame">

                </div>
                <div id="dBarrel">

                </div>
                <div id="dMag">

                </div>
                <div id="dT1">

                </div>
                <div id="dT2">
                    
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