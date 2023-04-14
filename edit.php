<!DOCTYPE html>
<html lang="en">
    <head>
    <?php
        require 'php/db_management_functionality.php';
    ?>
    <?php 
        ini_set('display_errors', 1);  
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
    ?>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta author="Ben Richardson">
        <meta name="description" content="">
        <title>Edit or Delete Records</title>
        <link href="css/main.css" rel="stylesheet">
        <link rel="stylesheet" href="css/edit.css">
        <link rel="icon" href="img/destiny_logo.png" title="Destiny logo favicon" alt="Destiny logo favicon">
        <script src="js/burger_menu.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    </head>
    <body>
        <div class="mobile">
            <nav>
                <img class="logo"src="img/destiny_logo.png" alt="Destiny Logo for Button"  onclick="burger_flyout()">
                <header>
                    Edit or Delete a Record
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
                <label for="tableList" id="tablesDropdown">
                    Select table to edit
                </label>
                    <select name="tableList" id="tableList" method="post" onchange="fillMobileForm()">
                        <option value="default" selected="selected" hidden="hidden">Choose a Table to edit</option>
                        <option value ="weapons">Weapons</option> 
                        <option value ="perks">Perks</option>
                        <option value ="logon">Logon</option>
                        <option value ="frameBridge">Frame Combinations</option>
                        <option value ="barrelBridge">Barrel Combinations</option>
                        <option value ="magBridge">Mag Combinations</option>
                        <option value ="trait1Bridge">Trait Column 1 Combinations</option>
                        <option value ="trait2Bridge">Trait Column 2 Combinations</option>
                    </select>
                <select name="recordList" id="recordList">
                    <?php
                        // this needs to fill with the records in the table selected in tableList
                        $records=fillWeaponRecordList();
                        $i = 0;
                        foreach($records as $list){
                            echo $records[$i];
                            $i++;
                        }
                    ?>
                    <option value="default" selected="selected" hidden="hidden">Choose a Table to Add to</option>
                </select>
                <div id="weapons">
                    <?php
                        if(array_key_exists('save', $_POST)){
                            addToWeapon();
                        }
                    ?>
                    <form id="weapon_form" method="post">
                        <input type="text" id="weapon_name" name="weapon_name" value=""></input>
                        <input type="text" id="weapon_type" name="weapon_type" value=""></input>
                        <input type="text" id="weapon_source" name="weapon_source" value=""></input>
                        <input type="text" id="pattern_count" name="pattern_count" value=""></input>
                        <input type="text" id="base_impact" name="base_impact" value=""></input>
                        <input type="text" id="base_range" name="base_range" value=""></input>
                        <input type="text" id="base_stability" name="base_stability" value=""></input>
                        <input type="text" id="base_handling" name="base_handling" value=""></input>
                        <input type="text" id="base_reload" name="base_reload" value=""></input>
                        <input type="text" id="base_AA" name="base_AA" value=""></input>
                        <input type="text" id="base_zoom" name="base_zoom" value=""></input>
                        <input type="text" id="base_recoil" name="base_recoil" value=""></input>
                        <input type="text" id="base_RPM" name="base_RPM" value=""></input>
                        <input type="text" id="base_draw" name="base_draw" value=""></input>
                        <input type="text" id="base_accuracy" name="base_accuracy" value=""></input>
                        <input type="text" id="base_mag" name="base_mag" value=""></input>
                        <input type="text" id="icon_file_path" name="icon_file_path" value=""></input>
                        <input id="save" type="submit" value="Save and update database" name="save">
                        </input>
                        <input id="delete" type="submit" value="Delete and remove from database" name="delete">
                        </input>
                    </form>
                </div>
                <div id="perks">
                    <?php
                        if(array_key_exists('save_perks', $_POST)){
                            addToPerks();
                        }
                    ?>
                    <form id="perks_form" method="post">
                        <input type="text" id="perk_name" name="perk_name"></input>
                        <input type="text" id="perk_desc" name="perk_desc"></input>
                        <input type="text" id="perk_type" name="perk_type"></input>
                        <input type="text" id="perk_impact_change" name="perk_impact_change"></input>
                        <input type="text" id="perk_range_change" name="perk_range_change"></input>
                        <input type="text" id="perk_stab_change" name="perk_stab_change"></input>
                        <input type="text" id="perk_handling_change" name="perk_handling_change"></input>
                        <input type="text" id="perk_reload_change" name="perk_reload_change"></input>
                        <input type="text" id="perk_AA_change" name="perk_AA_change"></input>
                        <input type="text" id="perk_zoom_change" name="perk_zoom_change"></input>
                        <input type="text" id="perk_recoil_change" name="perk_recoil_change"></input>
                        <input type="text" id="perk_RPM_change" name="perk_RPM_change"></input>
                        <input type="text" id="perk_draw_time_change" name="perk_draw_time_change"></input>
                        <input type="text" id="perk_accuracy_change" name="perk_accuracy_change"></input>
                        <input type="text" id="perk_mag_size_change" name="perk_mag_size_change"></input>
                        <input type="text" id="perk_dmg_buff" name="perk_dmg_buff"></input>
                        <input type="text" id="perk_drowned_cost" name="perk_drowned_cost"></input>
                        <input type="text" id="perk_res_element_cost" name="perk_res_element_cost"></input>
                        <input type="text" id="perk_res_alloy_cost" name="perk_res_alloy_cost"></input>
                        <input type="text" id="perk_ascendant_alloy_cost" name="perk_ascendant_alloy_cost"></input>
                        <input type="text" id="perk_glimmer_cost" name="perk_glimmer_cost"></input>
                        <input type="text" id="perk_e_core_cost" name="perk_e_core_cost"></input>
                        <input type="text" id="icon_file_path" name="icon_file_path"></input>
                        <input id="save" type="submit" value="Save and add to database" name="save_perks">
                        </input>
                        <input id="delete" type="submit" value="Delete and remove from database" name="delete">
                        </input>
                    </form>
                </div>
                <div id="logon">
                    <?php
                        if(array_key_exists('save_logon', $_POST)){
                            addToLogon();
                        }
                    ?>
                    <form id="logon_form" method="post">
                        <input type="text" id="username" name="username"></input>
                        <label for="password" class="passLabel">Edit the user's password</label>
                        <input type="password" id="password" name="password"></input>
                        <label for="admin" class="adminLabel">Choose if the user is an admin</label>
                        <select id="admin" name="admin">
                            <option value="true">True</option>
                            <option value="false">False</option>
                        </select>
                        <input id="save" type="submit" value="Save and add to database" name="save_logon">
                        </input>
                        <input id="delete" type="submit" value="Delete and remove from database" name="delete">
                        </input>
                    </form>
                </div>
                <div id="frames">
                    <?php
                        if(array_key_exists('save_frames', $_POST)){
                            addToFrames();
                        }
                    ?>
                    <form id="frame_form" method="post">
                        <input type="text" id="frame_bridge_weapon_ID" name="frame_bridge_weapon_ID"></input>
                        <input type="text" id="weapon_frame_ID" name="weapon_frame_ID"></input>
                        <input id="save" type="submit" value="Save and add to database" name="save_frames">
                        </input>
                        <input id="delete" type="submit" value="Delete and remove from database" name="delete">
                        </input>
                    </form>
                </div>
                <div id="barrels">
                    <?php
                        if(array_key_exists('save_barrels', $_POST)){
                            addToBarrels();
                        }
                    ?>
                    <form id="barrel_form" method="post">
                        <input type="text" id="barrel_bridge_weapon_ID" name="barrel_bridge_weapon_ID"></input>
                        <input type="text" id="weapon_barrel_ID" name="weapon_barrel_ID"></input>
                        <input id="save" type="submit" value="Save and add to database" name="save_barrels">
                        </input>
                        <input id="delete" type="submit" value="Delete and remove from database" name="delete">
                        </input>
                    </form>
                </div>
                <div id="mags">
                    <?php
                        if(array_key_exists('save_mags', $_POST)){
                            addToMags();
                        }
                    ?>
                    <form id="mag_form" method="post">
                        <input type="text" id="mag_bridge_weapon_ID" name="mag_bridge_weapon_ID"></input>
                        <input type="text" id="weapon_mag_ID" name="weapon_mag_ID"></input>
                        <input id="save" type="submit" value="Save and add to database" name="save_mags">
                        </input>
                        <input id="delete" type="submit" value="Delete and remove from database" name="delete">
                        </input>
                    </form>
                </div>
                <div id="trait1">
                    <?php
                        if(array_key_exists('save_trait1', $_POST)){
                            addToTrait1();
                        }
                    ?>
                    <form id="trait1_form" method="post">
                        <input type="text" id="trait1_bridge_weapon_ID" name="trait1_bridge_weapon_ID"></input>
                        <input type="text" id="weapon_trait_ID" name="weapon_trait_ID"></input>
                        <input id="save" type="submit" value="Save and add to database" name="save_trait1">
                        </input>
                        <input id="delete" type="submit" value="Delete and remove from database" name="delete">
                        </input>
                    </form>
                </div>
                <div id="trait2">
                    <?php
                        if(array_key_exists('save_trait2', $_POST)){
                            addToTrait2();
                        }
                    ?>
                    <form id="trait2_form">
                        <input type="text" id="trait2_bridge_weapon_ID" name="trait2_bridge_weapon_ID"></input>
                        <input type="text" id="weapon_trait2_ID" name="weapon_trait2_ID"></input>
                        <input id="save" type="submit" value="Save and add to database" name="save_trait2">
                        </input>
                        <input id="delete" type="submit" value="Delete and remove from database" name="delete">
                        </input>
                    </form>
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
                <header id="pageTitle">
                    Edit or Delete a Record
                </header>
                <div class="selectTable">
                    
                    <div class="menuHeader">
                        Choose a Table to Edit
                    </div>
                    <button id="wepButton">Weapons</button>
                    <button id="perksButton">Perks</button>
                    <button id="logonButton">Logon</button>
                    <button id="frameButton"> Frame Bridge</button>
                    <button id="barrelButton"> Barrel Bridge</button>
                    <button id="magButton"> Magazine Bridge</button>
                    <button id="trait1Button"> First Trait Bridge</button>
                    <button id="trait2Button"> Second Trait Bridge</button>
                </div>
                <div class="form_area">
                    <div id="desktop_weapons">
                        <?php
                            if(array_key_exists('save', $_POST)){
                            addToWeapon();
                            }
                        ?>
                        <form id="weapon_form_desktop" method="post">
                            <input type="text" id="desktop_weapon_name" name="weapon_name"></input> 
                            <input type="text" id="desktop_weapon_type" name="weapon_type"></input>
                            <input type="text" id="desktop_weapon_source" name="weapon_source"></input>
                            <input type="text" id="desktop_pattern_count" name="pattern_count"></input>
                            <input type="text" id="desktop_base_impact" name="base_impact"></input>
                            <input type="text" id="desktop_base_range" name="base_range"></input>
                            <input type="text" id="desktop_base_stability" name="base_stability"></input>
                            <input type="text" id="desktop_base_handling" name="base_handling"></input>
                            <input type="text" id="desktop_base_reload" name="base_reload"></input>
                            <input type="text" id="desktop_base_AA" name="base_AA"></input>
                            <input type="text" id="desktop_base_zoom" name="base_zoom"></input>
                            <input type="text" id="desktop_base_recoil" name="base_recoil"></input>
                            <input type="text" id="desktop_base_RPM" name="base_RPM"></input>
                            <input type="text" id="desktop_base_draw" name="base_draw"></input>
                            <input type="text" id="desktop_base_accuracy" name="base_accuracy"></input>
                            <input type="text" id="desktop_base_mag" name="base_mag"></input>
                            <input type="text" id="desktop_icon_file_path" name="icon_file_path"></input>
                            <input id="save" type="submit" value="Save and add to database" name="save"></input>
                            <input id="delete" type="submit" value="Delete and remove from database" name="delete"></input>
                        </form>
                    </div>
                    <div id="desktop_perks" >
                        <?php
                            if(array_key_exists('save_perks', $_POST)){
                            addToPerks();
                            }
                        ?>
                        <form id="perks_form_desktop" method="post">
                            <input type="text" id="perk_name" name="perk_name"></input>
                            <input type="text" id="perk_desc" name="perk_desc"></input>
                            <input type="text" id="perk_type" name="perk_type"></input>
                            <input type="text" id="perk_impact_change" name="perk_impact_change"></input>
                            <input type="text" id="perk_range_change" name="perk_range_change"></input>
                            <input type="text" id="perk_stab_change" name="perk_stab_change"></input>
                            <input type="text" id="perk_handling_change" name="perk_handling_change"></input>
                            <input type="text" id="perk_reload_change" name="perk_reload_change"></input>
                            <input type="text" id="perk_AA_change" name="perk_AA_change"></input>
                            <input type="text" id="perk_zoom_change" name="perk_zoom_change"></input>
                            <input type="text" id="perk_recoil_change" name="perk_recoil_change"></input>
                            <input type="text" id="perk_RPM_change" name="perk_RPM_change"></input>
                            <input type="text" id="perk_draw_time_change" name="perk_draw_time_change"></input>
                            <input type="text" id="perk_accuracy_change" name="perk_accuracy_change"></input>
                            <input type="text" id="perk_mag_size_change" name="perk_mag_size_change"></input>
                            <input type="text" id="perk_dmg_buff" name="perk_dmg_buff"></input>
                            <input type="text" id="perk_drowned_cost" name="perk_drowned_cost"></input>
                            <input type="text" id="perk_res_element_cost" name="perk_res_element_cost"></input>
                            <input type="text" id="perk_res_alloy_cost" name="perk_res_alloy_cost"></input>
                            <input type="text" id="perk_ascendant_alloy_cost" name="perk_ascendant_alloy_cost"></input>
                            <input type="text" id="perk_glimmer_cost" name="perk_glimmer_cost"></input>
                            <input type="text" id="perk_e_core_cost" name="perk_e_core_cost"></input>
                            <input type="text" id="icon_file_path" name="icon_file_path"></input>
                            <input id="save" type="submit" value="Save and add to database" name="save_perks"></input>
                            <input id="delete" type="submit" value="Delete and remove from database" name="delete">
                        </input>
                        </form>
                    </div>
                    <div id="desktop_logon">
                        <?php
                            if(array_key_exists('save_logon', $_POST)){
                            addToLogon();
                            }
                        ?>
                        <form id="logon_form_desktop" method="post">
                            <input type="text" id="username" name="username"></input>
                            <label for="password" class="passLabel">Insert the user's password</label>
                            <input type="password" id="password" name="password"></input>
                            <label for="admin" class="adminLabel">Choose if the user is an admin</label>
                            <select id="admin" name="admin">
                                <option value="true">True</option>
                                <option value="false">False</option>
                            </select>
                            <input id="save" type="submit" value="Save and add to database" name="save_logon"></input>
                            <input id="delete" type="submit" value="Delete and remove from database" name="delete">
                        </input>
                        </form>
                    </div>
                    <div id="desktop_frames">
                        <?php
                            if(array_key_exists('save_frames', $_POST)){
                            addToFrames();
                            }
                        ?>
                        <form id="frame_form_desktop" method="post">
                            <input type="text" id="frame_bridge_weapon_ID" name="frame_bridge_weapon_ID"></input>
                            <input type="text" id="weapon_frame_ID" name="weapon_frame_ID"></input>
                            <input id="save" type="submit" value="Save and add to database" name="save_frames"></input>
                            <input id="delete" type="submit" value="Delete and remove from database" name="delete">
                        </input>
                        </form>
                    </div>
                    <div id="desktop_barrels">
                        <?php
                            if(array_key_exists('save_barrels', $_POST)){
                            addToBarrels();
                            }
                        ?>
                        <form id="barrel_form_desktop" method="post">
                            <input type="text" id="barrel_bridge_weapon_ID" name="barrel_bridge_weapon_ID"></input>
                            <input type="text" id="weapon_barrel_ID" name="weapon_barrel_ID"></input>
                            <input id="save" type="submit" value="Save and add to database" name="save_barrels"></input>
                            <input id="delete" type="submit" value="Delete and remove from database" name="delete">
                        </input>
                        </form>
                    </div>
                    <div id="desktop_mags">
                        <?php
                            if(array_key_exists('save_mags', $_POST)){
                            addToMags();
                            }
                        ?>
                        <form id="mag_form_desktop" method="post">
                            <input type="text" id="mag_bridge_weapon_ID" name="mag_bridge_weapon_ID"></input>
                            <input type="text" id="weapon_mag_ID" name="weapon_mag_ID"></input>
                            <input id="save" type="submit" value="Save and add to database" name="save_mags"></input>
                            <input id="delete" type="submit" value="Delete and remove from database" name="delete">
                        </input>
                        </form>
                    </div>
                    <div id="desktop_trait1">
                        <?php
                            if(array_key_exists('save_trait1', $_POST)){
                            addToTrait1();
                            }
                        ?>
                        <form id="trait1_form_desktop" method="post">
                            <input type="text" id="trait1_bridge_weapon_ID" name="trait1_bridge_weapon_ID"></input>
                            <input type="text" id="weapon_trait_ID" name="weapon_trait_ID"></input>
                            <input id="save" type="submit" value="Save and add to database" name="save_trait1"></input>
                            <input id="delete" type="submit" value="Delete and remove from database" name="delete">
                        </input>
                        </form>
                    </div>
                    <div id="desktop_trait2">
                        <?php
                            if(array_key_exists('save_trait2', $_POST)){
                            addToTrait2();
                            }
                        ?>
                        <form id="trait2_form_desktop" method="post">
                            <input type="text" id="trait2_bridge_weapon_ID" name="trait2_bridge_weapon_ID"></input>
                            <input type="text" id="weapon_trait2_ID" name="weapon_trait2_ID"></input>
                            <input id="save" type="submit" value="Save and add to database" name="save_trait2"></input>
                            <input id="delete" type="submit" value="Delete and remove from database" name="delete">
                        </input>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="js/edit_form.js"></script>
    <script>
        document.getElementById('tableList').onchange = mobileTableFill;

        function mobileTableFill(){
            // let t = document.getElementById('tableList');
            
            // let table = t.options[t.selectedIndex].text;
            $.ajax(
                {
                    method: 'POST',
                    url: 'php/db_management_functionality.php',
                    data: "function=fillWeaponRecordList",
                }
            )
        }
    </script>
</html>