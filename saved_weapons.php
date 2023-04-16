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
    </head>
    <body>
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
                <div class="dropdowns">
                    <select name="weapon" id="weapon">
                        <option value="Choose one of your Saved Weapons" selected = "selected" hidden ="hidden">Choose one of your Saved Weapons</option>
                    </select>
                </div>
                <div class="stats">
                    <div class="statHeader">
                        Weapon Stats
                    </div>
                    <div class="statList">
                        <div id="impact">

                        </div>
                        <div id="range">

                        </div>
                        <div id="stab">

                        </div>
                        <div id="handling">

                        </div>
                        <div id="reload">

                        </div>
                        <div id="aa">

                        </div>
                        <div id="zoom">

                        </div>
                        <div id="recoilDir">

                        </div>
                        <div id="rpm">

                        </div>
                        <div id="draw">

                        </div>
                        <div id="accuracy">

                        </div>
                        <div id="mag">
                            
                        </div>
                    </div>
                </div>
                <div class="cost">
                    <div class="weaponCost">
                        Weapon Cost
                    </div>
                    <div class="costList">
                        <div id="resonantElement">

                        </div>
                        <div id="drownedElement">

                        </div>
                        <div id="glimmer">

                        </div>
                        <div id="ecore">

                        </div>
                        <div id="ascendantAlloy">

                        </div>
                        <input type="submit" class="removeBuild" value="Remove this build" name ="removeBuild">
                        </input>
                    </div>
                </div>
            </div>
        </div>
        <div class="desktop">
            <nav>
                <ul class="links">
                    <li>   
                        <img class="logo" src="img/destiny_logo.png" alt="Destiny Logo for Button" href = "index.php">
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
                <header>
                    Your Weapons
                </header>
                <div class="weaponList">
                    <div class="wepListHead">
                        Choose one of Your Saved Builds
                    </div>
                </div>
                <div class="toolArea">
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
                            Impact:
                        </h4>
                        <h4 class="range">
                            Range:
                        </h4>
                        <h4 class="stab">
                            Stability:
                        </h4>
                        <h4 class="handling">
                            Handling:
                        </h4>
                        <h4 class="reload">
                            Reload Speed:
                        </h4>
                        <h4 class="aa">
                            Aim Assistance:
                        </h4>
                        <h4 class="zoom">
                            Zoom:
                        </h4>
                        <h4 class="recoil">
                            Recoil Direction:
                        </h4>
                        <h4 class="rpm">
                            RPM:
                        </h4>
                        <h4 class="draw">
                            Draw Time:
                        </h4>
                        <h4 class="accuracy">
                            Accuracy:
                        </h4>
                        <h4 class="mag">
                            Magazine Size:
                        </h4>
                        <h4 class="resElement">
                            Resonant Element Cost:
                        </h4>
                        <h4 class="drownedElement">
                            Drowned Element Cost:
                        </h4>
                        <h4 class="glimmer">
                            Glimmer Cost:
                        </h4>
                        <h4 class="ecore">
                            Enhancement Core Cost:
                        </h4>
                        <h4 class="ascendantAlloy">
                            Ascendant Alloy Cost:
                        </h4>
                        <input type="submit" class="removeBuild" value="Remove this build" name ="removeBuild">
                        </input>
                    </div>
                </div>
            </div>
        </div>        
    </body>
</html>