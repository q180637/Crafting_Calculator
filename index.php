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
        <script src="js/tool.js"></script>
        <script src="js/save_build.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    </head>
    <body  onload="loadWepOnLoad()">
        <div class="mobile" id="mobile">
            <nav>
                <img class="logo"src="img/destiny_logo.png" alt="Destiny Logo for Button"  onclick="burger_flyout()">
                <header>
                    Calculator Tool
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
                        <option value="Choose a Weapon" selected = "selected" hidden ="hidden">Choose a Weapon</option>
                    </select>
                    <select name="frame" id="frame">
                        <option value="Choose a weapon frame or" selected = "selected" hidden ="hidden">Choose a Weapon frame</option>
                    </select>
                    <select name="barrel" id="barrel">
                        <option value="Choose a weapon barrel or bowstring" selected = "selected" hidden ="hidden">Choose a Weapon barrel</option>
                    </select>
                    <select name="magazine" id="magazine">
                        <option value="Choose a weapon magazine or arrowshaft" selected = "selected" hidden ="hidden">Choose a Weapon magazine</option>
                    </select>
                    <select name="trait1" id="trait1">
                        <option value="Choose a Trait in Column 1" selected = "selected" hidden ="hidden">Choose a Weapon Trait Column 1 Perk</option>
                    </select>
                    <select name="trait2" id="trait2">
                        <option value="Choose a Trait in Column 2" selected = "selected" hidden ="hidden">Choose a Weapon Trait Column 2 Perk</option>
                    </select>
                </div>
                <div class="stats">
                    <div class="statHeader">
                        Weapon Stats
                    </div>
                    <div class="statList" id="mStats">
                    </div>
                </div>
                <div class="cost">
                    <div class="weaponCost">
                        Weapon Cost
                    </div>
                    <div class="costList" id="mCosts">
                        
                    </div>
                    <input type="submit" id="mobileSave" class="saveBuild" value="Save this build" name ="saveBuild" onclick="saveMobileBuild()">
                    </input>
                </div>
            </div>
        </div>
        <div class="desktop" id="desktop">
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
                <div class="dropdowns">
                    <select name="weapon" id="desktopWeapon">
                        <option value="Choose a Weapon" selected = "selected" hidden ="hidden">Choose a Weapon</option>
                    </select>
                    <select name="frame" id="desktopFrame">
                        <option value="Choose a weapon frame or" selected = "selected" hidden ="hidden">Choose a Weapon frame</option>
                    </select>
                    <select name="barrel" id="desktopBarrel">
                        <option value="Choose a weapon barrel or bowstring" selected = "selected" hidden ="hidden">Choose a Weapon barrel</option>
                    </select>
                    <select name="magazine" id="desktopMagazine">
                        <option value="Choose a weapon magazine or arrowshaft" selected = "selected" hidden ="hidden">Choose a Weapon magazine</option>
                    </select>
                    <select name="trait1" id="desktopTrait1">
                        <option value="Choose a Trait in Column 1" selected = "selected" hidden ="hidden">Choose a Weapon Trait Column 1 Perk</option>
                    </select>
                    <select name="trait2" id="desktopTrait2">
                        <option value="Choose a Trait in Column 2" selected = "selected" hidden ="hidden">Choose a Weapon Trait Column 2 Perk</option>
                    </select>
                </div>
                <div class="stats">
                    <div class="statHeader">
                        Weapon Stats
                    </div>
                    <div class="statList" id="dStats">

                    </div>
                </div>
                <div class="cost">
                    <div class="weaponCost">
                        Weapon Cost
                    </div>
                    <div class="costList" id="dCost">
                        
                    </div>
                    <input type="submit" id="desktopSave" class="saveBuild" value="Save this build" name ="saveBuild" onclick="saveDesktopBuild()"></input>
                </div>
            </div>
        </div>
        <div id="dump">

        </div>
    </body>
</html>