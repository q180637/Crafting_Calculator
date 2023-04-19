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
                                url: 'php/db_management_functionality.php',
                                type: 'POST',
                                contentType: 'json',
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
                            
                        $fillPerks=fillPerksRecordList();
                        $i = 0;
                        foreach($fillPerks as $list){
                            echo $fillPerks[$i];
                            $i++;
                        }
                        $fillLogon=fillLogonRecordList();
                        $i = 0;
                        foreach($fillLogon as $list){
                            echo $fillLogon[$i];
                            $i++;
                        }
                        $fillFrames=fillFrameRecordList();
                        $i = 0;
                        foreach($fillFrames as $list){
                            echo $fillFrames[$i];
                            $i++;
                        }
                        $fillBarrels=fillBarrelRecordList();
                        $i = 0;
                        foreach($fillBarrels as $list){
                            echo $fillBarrels[$i];
                            $i++;
                        }
                        $fillMag=fillMagRecordList();
                        $i = 0;
                        foreach($fillMag as $list){
                            echo $fillMag[$i];
                            $i++;
                        }
                        $fillTrait1=fillTrait1RecordList();
                        $i = 0;
                        foreach($fillTrait1 as $list){
                            echo $fillTrait1[$i];
                            $i++;
                        }
                        $fillTrait2=fillTrait2RecordList();
                        $i = 0;
                        foreach($fillTrait2 as $list){
                            echo $fillTrait2[$i];
                            $i++;
                        }
                    ?>
                    <option value="default" selected="selected" hidden="hidden">Choose a record to Edit</option>
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
                <label for="tableList" id="tablesDropdown">
                    Select table to edit
                </label>
                    <select name="tableList" id="desktopTableList" method="post" onchange="desktopTableFill()">
                        <option value="default" selected="selected" hidden="hidden">Choose a Table to edit</option>
                        <option value ="weapons" onclick="desktopChoice()">Weapons</option>
                        <option value ="perks" onclick="desktopChoice()">Perks</option>
                        <option value ="logon" onclick="desktopChoice()">Logon</option>    
                        <option value ="frameBridge" onclick="desktopChoice()">Frame Combinations</option>
                        <option value ="barrelBridge" onclick="desktopChoice()">Barrel Combinations</option>                                             
                        <option value ="magBridge" onclick="desktopChoice()">Mag Combinations</option>
                        <option value ="trait1Bridge" onclick="desktopChoice()">Trait Column 1 Combinations</option>
                        <option value ="trait2Bridge" onclick="desktopChoice()">Trait Column 2 Combinations</option>
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
                    function desktopTableFill() {
                        let t = document.getElementById('desktopTableList');
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
                                url: 'php/db_management_functionality.php',
                                type: 'POST',
                                contentType: 'json',
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
                            
                        $fillPerks=fillPerksRecordList();
                        $i = 0;
                        foreach($fillPerks as $list){
                            echo $fillPerks[$i];
                            $i++;
                        }
                        $fillLogon=fillLogonRecordList();
                        $i = 0;
                        foreach($fillLogon as $list){
                            echo $fillLogon[$i];
                            $i++;
                        }
                        $fillFrames=fillFrameRecordList();
                        $i = 0;
                        foreach($fillFrames as $list){
                            echo $fillFrames[$i];
                            $i++;
                        }
                        $fillBarrels=fillBarrelRecordList();
                        $i = 0;
                        foreach($fillBarrels as $list){
                            echo $fillBarrels[$i];
                            $i++;
                        }
                        $fillMag=fillMagRecordList();
                        $i = 0;
                        foreach($fillMag as $list){
                            echo $fillMag[$i];
                            $i++;
                        }
                        $fillTrait1=fillTrait1RecordList();
                        $i = 0;
                        foreach($fillTrait1 as $list){
                            echo $fillTrait1[$i];
                            $i++;
                        }
                        $fillTrait2=fillTrait2RecordList();
                        $i = 0;
                        foreach($fillTrait2 as $list){
                            echo $fillTrait2[$i];
                            $i++;
                        }
                    ?>
                    <option value="default" selected="selected" hidden="hidden">Choose a record to Edit</option>
                </select>
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
        var d = document.getElementById('desktopTableList');
        function answer() {
            const remove = document.querySelectorAll('.success');
            for (const el of remove) {
                el.remove();
            }
            if (e.value == "logon") {
                document.getElementById('weapon_form').style.visibility = 'hidden';
                document.getElementById('perks_form').style.visibility = 'hidden';
                document.getElementById('logon_form').style.visibility = 'visible';
                document.getElementById('logon_form').style.zIndex = '100';
                document.getElementById('frame_form').style.visibility = 'hidden';
                document.getElementById('barrel_form').style.visibility = 'hidden';
                document.getElementById('mag_form').style.visibility = 'hidden';
                document.getElementById('trait1_form').style.visibility = 'hidden';
                document.getElementById('trait2_form').style.visibility = 'hidden';
            } else if (e.value == "perks") {
                document.getElementById('weapon_form').style.visibility = 'hidden';
                document.getElementById('perks_form').style.visibility = 'visible';
                document.getElementById('perks_form').style.zIndex = '100';
                document.getElementById('logon_form').style.visibility = 'hidden';
                document.getElementById('frame_form').style.visibility = 'hidden';
                document.getElementById('barrel_form').style.visibility = 'hidden';
                document.getElementById('mag_form').style.visibility = 'hidden';
                document.getElementById('trait1_form').style.visibility = 'hidden';
                document.getElementById('trait2_form').style.visibility = 'hidden';
            } else if (e.value == "weapons") {
                document.getElementById('weapon_form').style.visibility = 'visible';
                document.getElementById('weapon_form').style.zIndex = '100';
                document.getElementById('perks_form').style.visibility = 'hidden';
                document.getElementById('logon_form').style.visibility = 'hidden';
                document.getElementById('frame_form').style.visibility = 'hidden';
                document.getElementById('barrel_form').style.visibility = 'hidden';
                document.getElementById('mag_form').style.visibility = 'hidden';
                document.getElementById('trait1_form').style.visibility = 'hidden';
                document.getElementById('trait2_form').style.visibility = 'hidden';
            } else if (e.value == "frameBridge") {
                document.getElementById('weapon_form').style.visibility = 'hidden';
                document.getElementById('perks_form').style.visibility = 'hidden';
                document.getElementById('logon_form').style.visibility = 'hidden';
                document.getElementById('frame_form').style.visibility = 'visible';
                document.getElementById('frame_form').style.zIndex = '100';
                document.getElementById('barrel_form').style.visibility = 'hidden';
                document.getElementById('mag_form').style.visibility = 'hidden';
                document.getElementById('trait1_form').style.visibility = 'hidden';
                document.getElementById('trait2_form').style.visibility = 'hidden';
            } else if (e.value == "barrelBridge") {
                document.getElementById('weapon_form').style.visibility = 'hidden';
                document.getElementById('perks_form').style.visibility = 'hidden';
                document.getElementById('logon_form').style.visibility = 'hidden';
                document.getElementById('frame_form').style.visibility = 'hidden';
                document.getElementById('barrel_form').style.visibility = 'visible';
                document.getElementById('barrel_form').style.zIndex = '100';
                document.getElementById('mag_form').style.visibility = 'hidden';
                document.getElementById('trait1_form').style.visibility = 'hidden';
                document.getElementById('trait2_form').style.visibility = 'hidden';
            } else if (e.value == "magBridge") {
                document.getElementById('weapon_form').style.visibility = 'hidden';
                document.getElementById('perks_form').style.visibility = 'hidden';
                document.getElementById('logon_form').style.visibility = 'hidden';
                document.getElementById('frame_form').style.visibility = 'hidden';
                document.getElementById('barrel_form').style.visibility = 'hidden';
                document.getElementById('mag_form').style.visibility = 'visible';
                document.getElementById('mag_form').style.zIndex = '100';
                document.getElementById('trait1_form').style.visibility = 'hidden';
                document.getElementById('trait2_form').style.visibility = 'hidden';
            } else if (e.value == "trait1Bridge") {
                document.getElementById('weapon_form').style.visibility = 'hidden';
                document.getElementById('perks_form').style.visibility = 'hidden';
                document.getElementById('logon_form').style.visibility = 'hidden';
                document.getElementById('frame_form').style.visibility = 'hidden';
                document.getElementById('barrel_form').style.visibility = 'hidden';
                document.getElementById('mag_form').style.visibility = 'hidden';
                document.getElementById('trait1_form').style.visibility = 'visible';
                document.getElementById('trait1_form').style.zIndex = '100';
                document.getElementById('trait2_form').style.visibility = 'hidden';
            } else if (e.value == "trait2Bridge") {
                document.getElementById('weapon_form').style.visibility = 'hidden';
                document.getElementById('perks_form').style.visibility = 'hidden';
                document.getElementById('logon_form').style.visibility = 'hidden';
                document.getElementById('frame_form').style.visibility = 'hidden';
                document.getElementById('barrel_form').style.visibility = 'hidden';
                document.getElementById('mag_form').style.visibility = 'hidden';
                document.getElementById('trait1_form').style.visibility = 'hidden';
                document.getElementById('trait2_form').style.visibility = 'visible';
                document.getElementById('trait2_form').style.zIndex = '100';
            } else {
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
        function desktopChoice() {
        const remove = document.querySelectorAll('.success');
        for (const el of remove) {
            el.remove();
        }
        if(d.value ==  "weapons"){
            document.getElementById('pageTitle').innerHTML = "Edit a Weapon Record";
            document.getElementById('weapon_form_desktop').style.visibility = 'visible';
            document.getElementById('weapon_form_desktop').style.zIndex = '100';
            document.getElementById('perks_form_desktop').style.visibility = 'hidden';
            document.getElementById('logon_form_desktop').style.visibility = 'hidden';
            document.getElementById('frame_form_desktop').style.visibility = 'hidden';
            document.getElementById('barrel_form_desktop').style.visibility = 'hidden';
            document.getElementById('mag_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait1_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait2_form_desktop').style.visibility = 'hidden';
        }
        else if (d.value == "perks") {
            document.getElementById('pageTitle').innerHTML = "Edit a Perk Record";
            document.getElementById('weapon_form_desktop').style.visibility = 'hidden';
            document.getElementById('perks_form_desktop').style.visibility = 'visible';
            document.getElementById('perks_form_desktop').style.zIndex = '100';
            document.getElementById('logon_form_desktop').style.visibility = 'hidden';
            document.getElementById('frame_form_desktop').style.visibility = 'hidden';
            document.getElementById('barrel_form_desktop').style.visibility = 'hidden';
            document.getElementById('mag_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait1_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait2_form_desktop').style.visibility = 'hidden';
        }
        else if (d.value == "logon") {
            document.getElementById('pageTitle').innerHTML = "Edit a User Record";
            document.getElementById('weapon_form_desktop').style.visibility = 'hidden';
            document.getElementById('perks_form_desktop').style.visibility = 'hidden';
            document.getElementById('logon_form_desktop').style.visibility = 'visible';
            document.getElementById('logon_form_desktop').style.zIndex = '100';
            document.getElementById('frame_form_desktop').style.visibility = 'hidden';
            document.getElementById('barrel_form_desktop').style.visibility = 'hidden';
            document.getElementById('mag_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait1_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait2_form_desktop').style.visibility = 'hidden';
        }
        else if (d.value == "frameBridge") {
            document.getElementById('pageTitle').innerHTML = "Edit a Frame Combination";
            document.getElementById('weapon_form_desktop').style.visibility = 'hidden';
            document.getElementById('perks_form_desktop').style.visibility = 'hidden';
            document.getElementById('logon_form_desktop').style.visibility = 'hidden';
            document.getElementById('frame_form_desktop').style.visibility = 'visible';
            document.getElementById('frame_form_desktop').style.zIndex = '100';
            document.getElementById('barrel_form_desktop').style.visibility = 'hidden';
            document.getElementById('mag_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait1_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait2_form_desktop').style.visibility = 'hidden';
        }
        else if(d.value == "barrelBridge"){
            document.getElementById('pageTitle').innerHTML = "Edit a Barrel Combination";
            document.getElementById('weapon_form_desktop').style.visibility = 'hidden';
            document.getElementById('perks_form_desktop').style.visibility = 'hidden';
            document.getElementById('logon_form_desktop').style.visibility = 'hidden';
            document.getElementById('frame_form_desktop').style.visibility = 'hidden';
            document.getElementById('barrel_form_desktop').style.visibility = 'visible';
            document.getElementById('barrel_form_desktop').style.zIndex = '100';
            document.getElementById('mag_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait1_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait2_form_desktop').style.visibility = 'hidden';
        } else if (d.value == "magBridge") {
            document.getElementById('pageTitle').innerHTML = "Edit a Mag Combination";
            document.getElementById('weapon_form_desktop').style.visibility = 'hidden';
            document.getElementById('perks_form_desktop').style.visibility = 'hidden';
            document.getElementById('logon_form_desktop').style.visibility = 'hidden';
            document.getElementById('frame_form_desktop').style.visibility = 'hidden';
            document.getElementById('barrel_form_desktop').style.visibility = 'hidden';
            document.getElementById('mag_form_desktop').style.zIndex = '100';
            document.getElementById('mag_form_desktop').style.visibility = 'visible';
            document.getElementById('trait1_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait2_form_desktop').style.visibility = 'hidden';
        }
        else if (d.value == "trait1Bridge") {
            document.getElementById('pageTitle').innerHTML = "Edit a Trait Column 1 Combination";
            document.getElementById('weapon_form_desktop').style.visibility = 'hidden';
            document.getElementById('perks_form_desktop').style.visibility = 'hidden';
            document.getElementById('logon_form_desktop').style.visibility = 'hidden';
            document.getElementById('frame_form_desktop').style.visibility = 'hidden';
            document.getElementById('barrel_form_desktop').style.visibility = 'hidden';
            document.getElementById('mag_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait1_form_desktop').style.zIndex = '100';
            document.getElementById('trait1_form_desktop').style.visibility = 'visible';
            document.getElementById('trait2_form_desktop').style.visibility = 'hidden';
        }
        else if (d.value == "trait2Bridge") {
            document.getElementById('pageTitle').innerHTML = "Edit a Trait Column 2 Combination";
            document.getElementById('weapon_form_desktop').style.visibility = 'hidden';
            document.getElementById('perks_form_desktop').style.visibility = 'hidden';
            document.getElementById('logon_form_desktop').style.visibility = 'hidden';
            document.getElementById('frame_form_desktop').style.visibility = 'hidden';
            document.getElementById('barrel_form_desktop').style.visibility = 'hidden';
            document.getElementById('mag_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait1_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait2_form_desktop').style.zIndex = '100';
            document.getElementById('trait2_form_desktop').style.visibility = 'visible';
        }
        else {
            document.getElementsByTagName('header').innerHTML = "Edit a Record";
            document.getElementById('weapon_form_desktop').style.visibility = 'hidden';
            document.getElementById('perks_form_desktop').style.visibility = 'hidden';
            document.getElementById('logon_form_desktop').style.visibility = 'hidden';
            document.getElementById('frame_form_desktop').style.visibility = 'hidden';
            document.getElementById('barrel_form_desktop').style.visibility = 'hidden';
            document.getElementById('mag_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait1_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait2_form_desktop').style.visibility = 'hidden';
        }
        }
    </script>
    
    <script> //puts records into form on recordlist change
        function loadWeapons(){
            $.ajax(
                {
                    url: 'php/edit_form_fill.php',
                    type: 'POST',
                    dataType: 'json',
                    data: "function=loadWeapons",
                    success: function(response){
                        var weapon_name = response['weapon_name'];
                        var weapon_type = response['weapon_type'];
                        var weapon_source = response['weapon_source'];
                        var pattern_count = response['pattern_count'];
                        var base_impact = response['base_impact'];
                        var base_range = response['base_range'];
                        var base_stability = response['base_stability'];
                        var base_handling = response['base_handling'];
                        var base_reload = response['base_reload'];
                        var base_AA = response['base_AA'];
                        var base_zoom = response['base_zoom'];
                        var base_recoil = response['base_recoil'];
                        var base_RPM = response['base_RPM'];
                        var base_draw = response['base_draw'];
                        var base_accuracy = response['base_accuracy'];
                        var base_mag = response['base_mag'];
                        var icon_file_path = response['icon_file_path'];

                        let wepName = document.getElementById('weapon_name');
                        wepName.value = weapon_name;
                        let wepType = document.getElementById('weapon_type');
                        wepType.value = weapon_type;
                        let wepSource = document.getElementById('weapon_source');
                        wepSource.value = weapon_source;
                        let patternCount = document.getElementById('pattern_count');
                        patternCount.value = pattern_count;
                        let impact = document.getElementById('base_impact');
                        impact.value = base_impact;
                        let range = document.getElementById('base_range');
                        range.value = base_range;
                        let stab = document.getElementById('base_stability');
                        stab.value = base_stability;
                        let handling = document.getElementById('base_handling');
                        handling.value = base_handling;
                        let reload = document.getElementById('base_reload');
                        reload.value = base_reload;
                        let aa = document.getElementById('base_AA');
                        aa.value = base_AA;
                        let zoom = document.getElementById('base_zoom');
                        zoom.value = base_zoom;
                        let recoil = document.getElementById('base_recoil');
                        recoil.value = base_recoil;
                        let rpm = document.getElementById('base_RPM');
                        rpm.value = base_RPM;
                        let draw = document.getElementById('base_draw');
                        draw.value = base_draw;
                        let accuracy = document.getElementById('base_accuracy');
                        accuracy.value = base_accuracy;
                        let mag = document.getElementById('base_mag')
                        mag.value = base_mag;
                        let file = document.getElementById('icon_file_path');
                        file.value = icon_file_path;
                    }
                }
            )
        }
        function loadPerks(){
            $.ajax(
                {
                    url: 'php/edit_form_fill.php',
                    type: 'POST',
                    dataType: 'json',
                    data: "function=loadPerks",
                    success: function(response){
                        var perk_name = response['perk_name'];
                        var perk_desc = response['perk_desc'];
                        var perk_type = response['perk_type'];
                        var perk_impact_change = response['perk_impact_change'];
                        var perk_name = response['perk_name'];
                        var perk_range_change = response['perk_range_change'];
                        var perk_stab_change = response['perk_stab_change'];
                        var perk_handling_change = response['perk_handling_change'];
                        var perk_reload_change = response['perk_reload_change'];
                        var perk_AA_change = response['perk_AA_change'];
                        var perk_zoom_change = response['perk_zoom_change'];
                        var perk_recoil_change = response['perk_recoil_change'];
                        var perk_RPM_change = response['perk_RPM_change'];
                        var perk_draw_time_change = response['perk_draw_time_change'];
                        var perk_accuracy_change = response['perk_accuracy_change'];
                        var perk_mag_size_change = response['perk_mag_size_change'];
                        var perk_dmg_buff = response['perk_dmg_buff'];
                        var perk_drowned_cost = response['perk_drowned_cost'];
                        var perk_res_element_cost = response['perk_res_element_cost'];
                        var perk_res_alloy_cost = response['perk_res_alloy_cost'];
                        var perk_ascendant_alloy_cost = response['perk_ascendant_alloy_cost'];
                        var perk_glimmer_cost = response['perk_glimmer_cost'];
                        var perk_e_core_cost = response['perk_e_core_cost'];
                        var icon_file_path = response['icon_file_path'];

                        let perkName = document.getElementById('perk_name');
                        perkName.value = perk_name;
                        let perkDesc = document.getElementById('perk_desc');
                        perkDesc.value = perk_desc;
                        let perkType = document.getElementById('perk_type');
                        perkType.value = perk_type;
                        let perkImpact = document.getElementById('perk_impact_change');
                        perkImpact.value = perk_impact_change;
                        let perkRange = document.getElementById('perk_range_change');
                        perkRange.value = perk_range_change;
                        let perkStab = document.getElementById('perk_stab_change');
                        perkStab.value = perk_stab_change;
                        let perkHand = document.getElementById('perk_handling_change');
                        perkHand.value = perk_handling_change;
                        let perkReload = document.getElementById('perk_reload_change');
                        perkReload.value = perk_reload_change;
                        let perkAA = document.getElementById('perk_AA_change');
                        perkAA.value = perk_AA_change;
                        let perkZoom = document.getElementById('perk_zoom_change');
                        perkZoom.value = perk_zoom_change;
                        let perkRecoil = document.getElementById('perk_recoil_change');
                        perkRecoil.value = perk_recoil_change;
                        let perkRPM = document.getElementById('perk_RPM_change');
                        perkRPM.value = perk_RPM_change;
                        let perkDraw = document.getElementById('perk_draw_time_change');
                        let perkAccuracy = document.getElementById('perk_accuracy_change');
                        perkAccuracy.value = perk_accuracy_change;
                        let perkMag = document.getElementById('perk_mag_size_change');
                        perkMag.value = perk_mag_size_change;
                        let perkDmg = document.getElementById('perk_dmg_buff');
                        perkDmg.value = perk_dmg_buff;
                        let drowned = document.getElementById('perk_drowned_cost');
                        drowned.value = perk_drowned_cost;
                        let resElement = document.getElementById('perk_res_element_cost');
                        resElement.value = perk_res_element_cost;
                        let resAlloy = document.getElementById('perk_res_alloy_cost');
                        let ascAlloy = document.getElementById('perk_ascendant_alloy_cost');
                        ascAlloy.value = perk_ascendant_alloy_cost;
                        let glimmer = document.getElementById('perk_glimmer_cost');
                        glimmer.value = perk_glimmer_cost;
                        let ecore = document.getElementById('perk_e_core_cost');
                        ecore.value = perk_e_core_cost;
                        let file = document.getElementById('icon_file_path');
                        file.value = icon_file_path;
                    }
                }
            )
        }
        function loadLogon(){
            $.ajax(
                {
                    url: 'php/edit_form_fill.php',
                    type: 'POST',
                    dataType: 'json',
                    data: "function=loadLogon",
                    success: function(){
                        var usernameInput = response['username'];
                        var passwordInput = response['password'];
                        var admin = response['admin'];

                        let unameIn = document.getElementById('username');
                        unameIn.value = usernameInput;
                        let pwordIn = document.getElementById('password');
                        pwordIn.value = passwordInput;
                        let isAdmin = document.getElementById('admin');
                        isAdmin.value = admin;
                    }
                }
            )
        }
        function loadFrames(){
            $.ajax(
                {
                    url: 'php/edit_form_fill.php',
                    type: 'POST',
                    dataType: 'json',
                    data: "function=loadFrames",
                    success: function(response){
                        var frameWepID = response['frame_bridge_weapon_ID'];
                        var frameWepName = response['weapon_name'];
                        var framePerkID = response['weapon_frame_ID'];
                        var framePerkName = response['perk_name'];

                        let fWepID = document.getElementById('frame_bridge_weapon_ID');
                        fWepID.value = frameWepName;
                        let fPerkID = document.getElementById('weapon_frame_ID');
                        fPerkID.value = framePerkName;
                    }
                }
            )
        }
        function loadBarrels(){
            $.ajax(
                {
                    url: 'php/edit_form_fill.php',
                    type: 'POST',
                    dataType: 'json',
                    data: "function=loadBarrels",
                    success: function(response){
                        var barrelWepID = response['barrel_bridge_weapon_ID'];
                        var barrelWepName = response['weapon_name'];
                        var barrelPerkID = response['weapon_barrel_ID'];
                        var barrelPerkName = response['perk_name'];

                        let bWepID = document.getElementById('barrel_bridge_weapon_ID');
                        bWepID.value = barrelWepName;
                        let bPerkID = document.getElementById('weapon_barrel_ID');
                        bPerkID.value = barrelPerkName;
                    }
                }
            )
        }
        function loadMags(){
            $.ajax(
                {
                    url: 'php/edit_form_fill.php',
                    type: 'POST',
                    dataType: 'json',
                    data: "function=loadMags",
                    success: function(response){
                        var magWepID = response['mag_bridge_weapon_ID'];
                        var magWepName = response['weapon_name'];
                        var magPerkID = response['weapon_mag_ID'];
                        var magPerkName = response['perk_name'];

                        let bWepID = document.getElementById('mag_bridge_weapon_ID');
                        bWepID.value = magWepName;
                        let bPerkID = document.getElementById('weapon_mag_ID');
                        bPerkID.value = magPerkName;
                    }
                }
            )
        }
        function loadTrait1(){
            $.ajax(
                {
                    url: 'php/edit_form_fill.php',
                    type: 'POST',
                    dataType: 'json',
                    data: "function=loadTrait1",
                    success: function(response){
                        var trait1WepID = response['trait1_bridge_weapon_ID'];
                        var trait1WepName = response['weapon_name'];
                        var trait1PerkID = response['weapon_trait1_ID'];
                        var trait1PerkName = response['perk_name'];

                        let t1WepID = document.getElementById('trait1_bridge_weapon_ID');
                        t1WepID.value = trait1WepName;
                        let t1PerkID = document.getElementById('weapon_trait1_ID');
                        t1PerkID.value = trait1PerkName;
                    }
                }
            )
        }
        function loadTrait2(){
            $.ajax(
                {
                    url: 'php/edit_form_fill.php',
                    type: 'POST',
                    dataType: 'json',
                    data: "function=loadTrait2",
                    success: function(response){
                        var trait2WepID = response['trait2_bridge_weapon_ID'];
                        var trait2WepName = response['weapon_name'];
                        var trait2PerkID = response['weapon_trait2_ID'];
                        var trait2PerkName = response['perk_name'];

                        let t2WepID = document.getElementById('trait2_bridge_weapon_ID');
                        t2WepID.value = trait2WepName;
                        let t2PerkID = document.getElementById('weapon_trait2_ID');
                        t2PerkID.value = trait2PerkName;
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