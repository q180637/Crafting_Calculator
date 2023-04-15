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
            <div class="body_wrapper">
                <div class="dropdowns">
                    <select name="weapon" id="weapon">
                        <option value="Choose a Weapon" selected = "selected" hidden ="hidden"></option>
                    </select>
                    <select name="frame" id="frame">
                        <option value="Choose a weapon frame or" selected = "selected" hidden ="hidden"></option>
                    </select>
                    <select name="barrel" id="barrel">
                        <option value="Choose a weapon barrel or bowstring" selected = "selected" hidden ="hidden"></option>
                    </select>
                    <select name="magazine" id="magazine">
                        <option value="Choose a weapon magazine or arrowshaft" selected = "selected" hidden ="hidden"></option>
                    </select>
                    <select name="trait1" id="trait1">
                        <option value="Choose a Trait in Column 1" selected = "selected" hidden ="hidden"></option>
                    </select>
                    <select name="trait2" id="trait2">
                        <option value="Choose a Trait in Column 2" selected = "selected" hidden ="hidden"></option>
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
                        <input type="submit" class="saveBuild" value="Save this build" name ="saveBuild">
                    
                        </input>
                    </div>
                </div>
            </div>
        </div>
        <div class="desktop">
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
            <div class="body_wrapper">
                <header>
                    Calculator Tool
                </header>
                <div class="weaponList">
                    <div class="wepListHead">
                        Choose a Weapon
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
                        <input type="submit" class="saveBuild" value="Save this build" name ="saveBuild">
                    
                        </input>
                    </div>
                </div>
            </div>
        </div>        
    </body>
</html>