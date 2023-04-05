<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta author="Ben Richardson">
        <meta name="description" content="">
        <title>Add to Database</title>
        <link href="css/main.css" rel="stylesheet">
        <link href="css/add.css" rel="stylesheet">
        <link rel="icon" href="img/destiny_logo.png" title="Destiny logo favicon" alt="Destiny logo favicon">
        <script src="js/burger_menu.js"></script>
        
    </head>
    <body>
        <div class="mobile">
        <nav>
                <img class="logo"src="img/destiny_logo.png" alt="Destiny Logo for Button"  onclick="burger_flyout()">
                <header>
                    Add Record
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
                <label for="tableList">
                    Select table to add to
                </label>
                <select name="tableList" id="tableList">
                <script src="js/add_form.js"></script>
                    <option value ="logon">Logon</option>
                    <option value ="perks">Perks</option>
                    <option value ="weapons">Weapons</option>
                    <option value ="frameBridge">Frame Combinations</option>
                    <option value ="barrelBridge">Barrel Combinations</option>                                              
                    <option value ="magBridge">Mag Combinations</option>
                    <option value ="trait1Bridge">Trait Column 1 Combinations</option>
                    <option value ="trait2Bridge">Trait Column 2 Combinations</option>
                </select>
                <div id="weapons">

                </div>
                <div id="perks">

                </div>
                <div id="logon">

                </div>
                <div id="frames">

                </div>
                <div id="barrels">
                    
                </div>
                <div id="mags">

                </div>
                <div id="trait1">

                </div>
                <div id="trait2">

                </div>
                <input class="save" type="submit" value="Save and add to database">
                </input>
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

            </div>
        </div>
    </body>
</html>


<!-- TODO GET FIELD DIVS TO ONLY APPEAR AS THEY ARE SELECTED -->