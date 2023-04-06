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
                    <option value="default" selected="selected" hidden="hidden">Choose a Weapon</option>
                    <option value ="logon" onclick="answer()">Logon</option>
                    <option value ="perks" onclick="answer()">Perks</option>
                    <option value ="weapons" onclick="answer()">Weapons</option>
                    <option value ="frameBridge" onclick="answer()">Frame Combinations</option>
                    <option value ="barrelBridge" onclick="answer()">Barrel Combinations</option>                                              
                    <option value ="magBridge" onclick="answer()">Mag Combinations</option>
                    <option value ="trait1Bridge" onclick="answer()">Trait Column 1 Combinations</option>
                    <option value ="trait2Bridge" onclick="answer()">Trait Column 2 Combinations</option>
                </select>
                <div id="weapons">
                    <div id="weapon_form">
                        <input type="text" id="weapon_name" name="weapon_name" value="Insert Weapon Name"></input> <br><br>
                        <input type="text" id="weapon_type" name="weapon_type" value="Insert Weapon Type"></input><br><br>
                        <input type="text" id="weapon_source" name="weapon_source" value="Insert Weapon Source"></input><br><br>
                        <input type="text" id="pattern_count" name="pattern_count" value="Insert Pattern Count"></input><br><br>
                        <input type="text" id="base_impact" name="base_impact" value="Insert Weapon Impact Stat"></input><br><br>
                        <input type="text" id="base_range" name="base_range" value="Insert Weapon Range Stat"></input><br><br>
                        <input type="text" id="base_stability" name="base_stability" value="Insert Weapon Stability Stat"></input><br><br>
                        <input type="text" id="base_handling" name="base_handling" value="Insert Weapon Handling Stat"></input><br><br>
                        <input type="text" id="base_reload" name="base_reload" value="Insert Weapon Reload Speed Stat"></input><br><br>
                        <input type="text" id="base_AA" name="base_AA" value="Insert Weapon Aim Assist Stat"></input><br><br>
                        <input type="text" id="base_zoom" name="base_zoom" value="Insert Weapon Zoom Stat"></input><br><br>
                        <input type="text" id="base_recoil" name="base_recoil" value="Insert Weapon Recoil Direction Stat"></input><br><br>
                        <input type="text" id="base_RPM" name="base_RPM" value="Insert Weapon Rate of Fire Stat"></input><br><br>
                        <input type="text" id="base_draw" name="base_draw" value="Insert Weapon Draw Time Stat if applicable"></input><br><br>
                        <input type="text" id="base_accuracy" name="base_accuracy" value="Insert Weapon Accuracy Stat if applicable"></input><br><br>
                        <input type="text" id="base_mag" name="base_mag" value="Insert Weapon Mag Size"></input><br><br>
                        <input type="text" id="icon_file_path" name="icon_file_path" value="Insert Weapon Image file Path"></input><br><br>
                    </div>
                </div>
                <div id="perks">
                    <div id="perks_form">
                        <input type="text" id="perk_name" name="perk_name" value="Insert Perk Name"></input>
                        <input type="text" id="perk_desc" name="perk_desc" value="Insert Perk Description"></input>
                        <input type="text" id="perk_type" name="perk_type" value="Insert Perk Type"></input>
                        <input type="text" id="perk_impact_change" name="perk_impact_change" value="Insert Perk Impact Change"></input>
                        <input type="text" id="perk_range_change" name="perk_range_change" value="Insert Perk Range Change"></input>
                        <input type="text" id="perk_stab_change" name="perk_stab_change" value="Insert Perk Stability Change"></input>
                        <input type="text" id="perk_handling_change" name="perk_handling_change" value="Insert Perk Handling Change"></input>
                        <input type="text" id="perk_reload_change" name="perk_reload_change" value="Insert Perk Reload Speed Change"></input>
                        <input type="text" id="perk_AA_change" name="perk_AA_change" value="Insert Perk Aim Assist Change"></input>
                        <input type="text" id="perk_zoom_change" name="perk_zoom_change" value="Insert Perk Zoom Change"></input>
                        <input type="text" id="perk_recoil_change" name="perk_recoil_change" value="Insert Perk Recoil Direction Change"></input>
                        <input type="text" id="perk_RPM_change" name="perk_RPM_change" value="Insert Perk Rate of Fire Change"></input>
                        <input type="text" id="perk_draw_time_change" name="perk_draw_time_change" value="Insert Perk Draw Time Change if applicable"></input>
                        <input type="text" id="perk_accuracy_change" name="perk_accuracy_change" value="Insert Perk Accuracy Change if applicable"></input>
                        <input type="text" id="perk_mag_size_change" name="perk_mag_size_change" value="Insert Perk Mag Size Change"></input>
                        <input type="text" id="perk_dmg_buff" name="perk_dmg_buff" value="Insert Perk Damage Buff"></input>
                        <input type="text" id="perk_drowned_cost" name="perk_drowned_cost" value="Insert Perk Drowned Element Cost"></input>
                        <input type="text" id="perk_res_element_cost" name="perk_res_element_cost" value="Insert Resonant Element Cost"></input>
                        <input type="text" id="perk_res_alloy_cost" name="perk_res_alloy_cost" value="Insert Perk Resonant Alloy Cost"></input>
                        <input type="text" id="perk_ascendant_alloy_cost" name="perk_ascendant_alloy_cost" value="Insert Perk Ascendant Alloy Cost"></input>
                        <input type="text" id="perk_glimmer_cost" name="perk_glimmer_cost" value="Insert Perk Glimmer Cost"></input>
                        <input type="text" id="perk_e_core_cost" name="perk_e_core_cost" value="Insert Perk Enhancement Core Cost"></input>
                        <input type="text" id="icon_file_path" name="icon_file_path" value="Insert Perk Icon File Path"></input>
                    </div>
                </div>
                <div id="logon">
                    <div id="logon_form">
                        <input type="text" id="username" name="username" value="Insert username"></input>
                        <label for="password" class="passLabel">Insert the user's password</label>
                        <input type="password" id="password" name="password"></input>
                        <label for="admin" class="adminLabel">Choose if the user is an admin</label>
                        <select id="admin" name="admin">
                            <option value="true">True</option>
                            <option value="false">False</option>
                        </select>
                    </div>
                </div>
                <div id="frames">
                    <div id="frame_form">
                        <input type="text" id="frame_bridge_weapon_ID" name="frame_bridge_weapon_ID" value="Insert A Weapon ID"></imput>
                        <input type="text" id="weapon_frame_ID" name="weapon_frame_ID" value="Insert a Frame Perk ID"></imput>
                    </div>
                </div>
                <div id="barrels">
                    <div id="barrel_form">
                        <input type="text" id="barrel_bridge_weapon_ID" name="barrel_bridge_weapon_ID" value="Insert A Weapon ID"></imput>
                        <input type="text" id="weapon_barrel_ID" name="weapon_barrel_ID" value="Insert A Barrel Perk ID"></imput>
                    </div>
                </div>
                <div id="mags">
                    <div id="mag_form">
                        <input type="text" id="mag_bridge_weapon_ID" name="mag_bridge_weapon_ID" value="Insert A Weapon ID"></imput>
                        <input type="text" id="weapon_mag_ID" name="weapon_mag_ID" value="Insert A Mag Perk ID"></imput>
                    </div>
                </div>
                <div id="trait1">
                    <div id="trait1_form">
                        <input type="text" id="trait1_bridge_weapon_ID" name="trait1_bridge_weapon_ID" value="Insert A Weapon ID"></imput>
                        <input type="text" id="weapon_trait_ID" name="weapon_trait_ID" value="Insert A Trait Column 1 Perk ID"></imput>
                    </div>
                </div>
                <div id="trait2">
                    <div id="trait2_form">
                        <input type="text" id="trait2_bridge_weapon_ID" name="trait2_bridge_weapon_ID" value="Insert A Weapon ID"></imput>
                        <input type="text" id="weapon_trait2_ID" name="weapon_trait2_ID" value="Insert A Trait Column 2 Perk ID"></imput>
                    </div>
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