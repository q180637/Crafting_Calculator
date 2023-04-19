<?php
session_start();
if(isset($_SESSION['username'])){
?>



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
                <label for="tableList" id="tablesDropdown">
                    Select table to edit
                </label>
                    <select name="tableList" id="tableList" method="post" onchange="mobileTableFill()">
                        <option value="default" selected="selected" hidden="hidden">Choose a Table to edit</option>
                        <option value ="weapons" onclick="answer()">Weapons</option>
                        <option value ="perks" onclick="answer()">Perks</option>
                        <option value ="logon" onclick="answer()">Logon</option>    
                        <option value ="frameBridge" onclick="answer()">Frame Combinations</option>
                        <option value ="barrelBridge" onclick="answer()">Barrel Combinations</option>                                             
                        <option value ="magBridge" onclick="answer()">Mag Combinations</option>
                        <option value ="trait1Bridge" onclick="answer()">Trait Column 1 Combinations</option>
                        <option value ="trait2Bridge" onclick="answer()">Trait Column 2 Combinations</option>
                    </select>
                <select name="recordList" id="recordList">
                <?php
                    $fillWep=fillWeaponRecordList();
                    $i = 0;
                    foreach($fillWep as $list){
                        echo $fillWep[$i];
                        $i++;
                    }
                ?>
                <script>
                    function mobileTableFill() {
                        let t = document.getElementById('tableList');
                        if (t.value == "weapons") {

                            $.ajax({
                                url: 'php/db_management_functionality.php',
                                type: 'POST',
                                contentType: 'json',
                                data: "function=fillWeaponRecordList",
                            })
                        } else if (t.value == "perks") {
                            $.ajax({
                                contentType: 'application/json',
                                type: 'POST',
                                url: 'php/db_management_functionality.php',
                                data: "function=fillPerksRecordList",
                            })
                        } else if (t.value == "logon") {
                            $.ajax({
                                contentType: 'application/json',
                                type: 'POST',
                                url: 'php/db_management_functionality.php',
                                data: "function=fillLogonRecordList",
                            })
                        } else if (t.value == "frameBridge") {
                            $.ajax({
                                contentType: 'application/json',
                                type: 'POST',
                                url: 'php/db_management_functionality.php',
                                data: "function=fillFrameRecordList",
                            })
                        } else if (t.value == "barrelBridge") {
                            $.ajax({
                                contentType: 'application/json',
                                type: 'POST',
                                url: 'php/db_management_functionality.php',
                                data: "function=fillBarrelRecordList",
                            })
                        } else if (t.value == "magBridge") {
                            $.ajax({
                                contentType: 'application/json',
                                type: 'POST',
                                url: 'php/db_management_functionality.php',
                                data: "function=fillMagRecordList",
                            })
                        } else if (t.value == "trait1Bridge") {
                            $.ajax({
                                contentType: 'application/json',
                                type: 'POST',
                                url: 'php/db_management_functionality.php',
                                data: "function=fillTrait1RecordList",
                            })
                        } else if (t.value == "trait2Bridge") {
                            $.ajax({
                                contentType: 'application/json',
                                type: 'POST',
                                url: 'php/db_management_functionality.php',
                                data: "function=fillTrait2RecordList",
                            })
                        }
                    }
                    </script>
                    <?php
                        // this needs to fill with the records in the table selected in tableList
                        
                        // $fillPerks=fillPerksRecordList();
                        // $i = 0;
                        // foreach($fillPerks as $list){
                        //     echo $fillPerks[$i];
                        //     $i++;
                        // }
                        // $fillFrames=fillFrameRecordList();
                        // $i = 0;
                        // foreach($fillFrames as $list){
                        //     echo $fillFrames[$i];
                        //     $i++;
                        // }
                        
                    ?>
                    <option value="default" selected="selected" hidden="hidden">Choose a weapon to Edit</option>
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
        <!-- <script src="js/edit_form.js"></script> -->
        <script> src="js/add_form.js"</script>
        <?php include "php/edit_form_fill.php"?>
    </body>
    <script> //putting the form on screen on tablelist change
        var e = document.getElementById('tableList');

        function answer(){
            const remove = document.querySelectorAll('.success');
            for (const el of remove){
                el.remove();
            }
            if (e.value =="logon"){
                document.getElementById('weapon_form').style.visibility = 'hidden';
                document.getElementById('perks_form').style.visibility = 'hidden';
                document.getElementById('logon_form').style.visibility = 'visible';
                document.getElementById('logon_form').style.zIndex = '100';
                document.getElementById('frame_form').style.visibility = 'hidden';
                document.getElementById('barrel_form').style.visibility = 'hidden';
                document.getElementById('mag_form').style.visibility = 'hidden';
                document.getElementById('trait1_form').style.visibility = 'hidden';
                document.getElementById('trait2_form').style.visibility = 'hidden';
            }
            else if (e.value =="perks"){
                document.getElementById('weapon_form').style.visibility = 'hidden';
                document.getElementById('perks_form').style.visibility = 'visible';
                document.getElementById('perks_form').style.zIndex = '100';
                document.getElementById('logon_form').style.visibility = 'hidden';
                document.getElementById('frame_form').style.visibility = 'hidden';
                document.getElementById('barrel_form').style.visibility = 'hidden';
                document.getElementById('mag_form').style.visibility = 'hidden';
                document.getElementById('trait1_form').style.visibility = 'hidden';
                document.getElementById('trait2_form').style.visibility = 'hidden';
            }
            else if (e.value =="weapons"){
                document.getElementById('weapon_form').style.visibility = 'visible';
                document.getElementById('weapon_form').style.zIndex = '100';
                document.getElementById('perks_form').style.visibility = 'hidden';
                document.getElementById('logon_form').style.visibility = 'hidden';
                document.getElementById('frame_form').style.visibility = 'hidden';
                document.getElementById('barrel_form').style.visibility = 'hidden';
                document.getElementById('mag_form').style.visibility = 'hidden';
                document.getElementById('trait1_form').style.visibility = 'hidden';
                document.getElementById('trait2_form').style.visibility = 'hidden';
            }
            else if (e.value =="frameBridge"){
                document.getElementById('weapon_form').style.visibility = 'hidden';
                document.getElementById('perks_form').style.visibility = 'hidden';
                document.getElementById('logon_form').style.visibility = 'hidden';
                document.getElementById('frame_form').style.visibility = 'visible';
                document.getElementById('frame_form').style.zIndex = '100';
                document.getElementById('barrel_form').style.visibility = 'hidden';
                document.getElementById('mag_form').style.visibility = 'hidden';
                document.getElementById('trait1_form').style.visibility = 'hidden';
                document.getElementById('trait2_form').style.visibility = 'hidden';
            }
            else if (e.value =="barrelBridge"){
                document.getElementById('weapon_form').style.visibility = 'hidden';
                document.getElementById('perks_form').style.visibility = 'hidden';
                document.getElementById('logon_form').style.visibility = 'hidden';
                document.getElementById('frame_form').style.visibility = 'hidden';
                document.getElementById('barrel_form').style.visibility = 'visible';
                document.getElementById('barrel_form').style.zIndex = '100';
                document.getElementById('mag_form').style.visibility = 'hidden';
                document.getElementById('trait1_form').style.visibility = 'hidden';
                document.getElementById('trait2_form').style.visibility = 'hidden';
            }
            else if (e.value =="magBridge"){
                document.getElementById('weapon_form').style.visibility = 'hidden';
                document.getElementById('perks_form').style.visibility = 'hidden';
                document.getElementById('logon_form').style.visibility = 'hidden';
                document.getElementById('frame_form').style.visibility = 'hidden';
                document.getElementById('barrel_form').style.visibility = 'hidden';
                document.getElementById('mag_form').style.visibility = 'visible';
                document.getElementById('mag_form').style.zIndex = '100';
                document.getElementById('trait1_form').style.visibility = 'hidden';
                document.getElementById('trait2_form').style.visibility = 'hidden';
            }
            else if (e.value =="trait1Bridge"){
                document.getElementById('weapon_form').style.visibility = 'hidden';
                document.getElementById('perks_form').style.visibility = 'hidden';
                document.getElementById('logon_form').style.visibility = 'hidden';
                document.getElementById('frame_form').style.visibility = 'hidden';
                document.getElementById('barrel_form').style.visibility = 'hidden';
                document.getElementById('mag_form').style.visibility = 'hidden';
                document.getElementById('trait1_form').style.visibility = 'visible';
                document.getElementById('trait1_form').style.zIndex = '100';
                document.getElementById('trait2_form').style.visibility = 'hidden';
            }
            else if (e.value =="trait2Bridge"){
                document.getElementById('weapon_form').style.visibility = 'hidden';
                document.getElementById('perks_form').style.visibility = 'hidden';
                document.getElementById('logon_form').style.visibility = 'hidden';
                document.getElementById('frame_form').style.visibility = 'hidden';
                document.getElementById('barrel_form').style.visibility = 'hidden';
                document.getElementById('mag_form').style.visibility = 'hidden';
                document.getElementById('trait1_form').style.visibility = 'hidden';
                document.getElementById('trait2_form').style.visibility = 'visible';
                document.getElementById('trait2_form').style.zIndex = '100';
            }
            else{
                document.getElementById('weapon_form').style.visibility = 'hidden';
                document.getElementById('perks_form').style.visibility = 'hidden';
                document.getElementById('logon_form').style.visibility = 'hidden';
                document.getElementById('frame_form').style.visibility = 'hidden';
                document.getElementById('barrel_form').style.visibility = 'hidden';
                document.getElementById('mag_form').style.visibility = 'hidden';
                document.getElementById('trait1_form').style.visibility = 'hidden';
                document.getElementById('trait2_form').style.visibility = 'hidden';
            }
        }
    </script>
    
    <script>
        let r = document.getElementById('tableList');
        let record = r.value;
        function loadWeapons(){
            let w = document.getElementById('recordList').innerHTML;
            $.ajax(
                {
                    url: 'php/edit_form_fill.php',
                    type: 'POST',
                    dataType: 'json',
                    // data: JSON.stringify({functionName: "loadWeapons"} + {selectedWeapon: "w"}),
                    data: "function=loadWeapons",
                    success: function(response){
                        // console.log("test");
                        // console.log(response);
                        var weapon_name = response['weapon_name'];
                        var weapon_type = response['weapon_type'];
                        var weapon_source = response['weapon_source'];

                        let wepName = document.getElementById('weapon_name');
                        wepName.value = weapon_name;
                    }
                }
            )
        }
    </script>
</html>

<?php
}

else{
    header("Location: login.php");
    exit();
}