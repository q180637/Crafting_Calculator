<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta author="Ben Richardson">
        <meta name="description" content="">
        <title>Calculator Tool</title>
        <link href="css/main.css" rel="stylesheet">
        <link href="css/tool.css" rel="stylesheet">
        <link rel="icon" href="img/destiny_logo.png" title="Destiny logo favicon" alt="Destiny logo favicon">
        <script src="js/burger_menu.js"></script>
    </head>
    <body>
        <div class="mobile">
            <div class="body_wrapper">
                <nav>
                    <img class="logo"src="img/destiny_logo.png" alt="Destiny Logo for Button"  onclick="burger_flyout()">
                    <header>
                        Calculator Tool
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
                <div class="dropdowns">
                    <select name="weapon" id="weapon">
                    </select>
                    <select name="frame" id="frame">
                    </select>
                    <select name="barrel" id="barrel">
                    </select>
                    <select name="magazine" id="magazine">
                    </select>
                    <select name="trait1" id="trait=1">
                    </select>
                    <select name="trait2" id="trait2">
                    </select>
                </div>
                <table class="stats">
                    
                </table>
                <table class="cost">

                </table>
            </div>
        </div>
        <div class="desktop">
            <div class="body_wrapper">
                <nav>
                    <ul class="links">
                        <li>   
                            <img class="logo" src="img/destiny_logo.png" alt="Destiny Logo for Button" href = "index.html">
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
                <div class="weaponList">

                </div>
                <div class="perkArea">
                    <div class="frameHolder">

                    </div>
                    <div class="barrelHolder">

                    </div>
                    <div class="magHolder">

                    </div>
                    <div class="col1Holder">

                    </div>
                    <div class="col2Holder">

                    </div>
                </div>
                <div class="statArea">
                    <h4 class="impact">

                    </h4>
                    <h4 class="range">

                    </h4>
                    <h4 class="stab">

                    </h4>
                    <h4 class="handling">

                    </h4>
                    <h4 class="reload">

                    </h4>
                    <h4 class="aa">

                    </h4>
                    <h4 class="zoom">

                    </h4>
                    <h4 class="recoil">

                    </h4>
                    <h4 class="rpm">

                    </h4>
                    <h4 class="draw">

                    </h4>
                    <h4 class="accuracy">

                    </h4>
                    <h4 class="mag">

                    </h4>
                    <h4 class="resElement">

                    </h4>
                    <h4 class="drownedElement">

                    </h4>
                    <h4 class="glimmer">

                    </h4>
                    <h4 class="ecore">

                    </h4>
                    <h4 class="ascendantAlloy">

                    </h4>
                    <input type="submit" class="saveBuild" value="Save this build" name ="saveBuild">
                    
                    </input>
                </div>
            </div>
        </div>        
    </body>
</html>