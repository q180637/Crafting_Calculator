<?php
function DB_connect(){


    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
$conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    else{
    echo "Connected successfully <br>";
}

return $conn;
}

function addToWeapon(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

    $weapon_name = $_REQUEST['weapon_name'];
    $weapon_type = $_REQUEST['weapon_type'];
    $weapon_source = $_REQUEST['weapon_source'];
    $pattern_count = $_REQUEST['pattern_count'];
    $base_impact = $_REQUEST['base_impact'];
    $base_range = $_REQUEST['base_range'];
    $base_stability = $_REQUEST['base_stability'];
    $base_handling = $_REQUEST['base_handling'];
    $base_reload = $_REQUEST['base_reload'];
    $base_AA = $_REQUEST['base_AA'];
    $base_zoom = $_REQUEST['base_zoom'];
    $base_recoil = $_REQUEST['base_recoil'];
    $base_RPM = $_REQUEST['base_RPM'];
    $base_draw = $_REQUEST['base_draw'];
    $base_accuracy = $_REQUEST['base_accuracy'];
    $base_mag = $_REQUEST['base_mag'];
    $icon_file_path = $_REQUEST['icon_file_path'];

    // if(empty($base_accuracy)){
    //     $base_RPM = "NULL";
    // }

    $sql ="INSERT INTO weapons(weapon_name, weapon_type, weapon_source, pattern_count, base_impact, base_range, base_stability, base_handling, base_reload, base_AA, base_zoom, base_recoil, base_RPM, base_draw, base_accuracy, base_mag, icon_file_path) VALUES ('$weapon_name', '$weapon_type', '$weapon_source', '$pattern_count', '$base_impact', '$base_range', '$base_stability', '$base_handling', '$base_reload', '$base_AA', '$base_zoom', '$base_recoil', '$base_RPM', '$base_draw', '$base_accuracy', '$base_mag', '$icon_file_path')";

    if(mysqli_query($conn, $sql)){
        echo "<h3>Record added to database</h3>";
    }
    else{
        echo "Error: Record failed to add. $sql. "
        .mysqli_error($conn);
    }
    
    mysqli_close($conn);
}

function addToPerks(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

    $perk_name = "perk_name";
    $perk_desc = "perk_desc";
    $perk_type = "perk_type";
    $perk_impact_change = "perk_impact_change";
    $perk_range_change = "perk_range_change";
    $perk_stab_change = "perk_stab_change";
    $perk_handling_change = "perk_handling_change";
    $perk_reload_change = "perk_reload_change";
    $perk_AA_change = "perk_AA_change";
    $perk_zoom_change = "perk_zoom_change";
    $perk_recoil_change = "perk_recoil_change";
    $perk_RPM_change = "perk_RPM_change";
    $perk_draw_time_change = "perk_draw_time_change";
    $perk_accuracy_change = "perk_accuracy_change";
    $perk_mag_size_change = "perk_mag_size_change";
    $perk_dmg_buff = "perk_dmg_buff";
    $perk_drowned_cost = "perk_drowned_cost";
    $perk_res_element_cost = "perk_res_element_cost";
    $perk_res_alloy_cost = "perk_res_alloy_cost";
    $perk_ascendant_alloy_cost = "perk_ascendant_alloy_cost";
    $perk_glimmer_cost = "perk_glimmer_cost";
    $perk_e_core_cost = "perk_e_core_cost";
    $icon_file_path = "icon_file_path";
    
    $sql = "INSERT INTO perks(perk_name, perk_desc, perk_type, perk_impact_change, perk_range_change, perk_stab_change, perk_handling_change, perk_reload_change, perk_AA_change, perk_zoom_change, perk_recoil_change, perk_RPM_change, perk_draw_time_change, perk_accuracy_change, perk_mag_size_change, perk_dmg_buff, perk_drowned_cost, perk_res_element_cost, perk_res_alloy_cost, perk_ascendant_alloy_cost, perk_glimmer_cost, perk_e_core_cost, icon_file_path)VALUES('$perk_name', '$perk_desc', '$perk_type', '$perk_impact_change', '$perk_range_change', '$perk_stab_change', '$perk_handling_change', '$perk_reload_change', '$perk_AA_change', '$perk_zoom_change', '$perk_recoil_change', '$perk_RPM_change', '$perk_draw_time_change', '$perk_accuracy_change', '$perk_mag_size_change', '$perk_dmg_buff', '$perk_drowned_cost', '$perk_res_element_cost', '$perk_res_alloy_cost', '$perk_ascendant_alloy_cost', '$perk_glimmer_cost', '$perk_e_core_cost', '$icon_file_path')";

    if(mysqli_query($conn, $sql)){
        echo "<h3>Record added to database</h3>";
    }
    else{
        echo "Error: Record failed to add. $sql. "
        .mysqli_error($conn);
    }
    
    mysqli_close($conn);
}

function addToLogon(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

    $usernameInput = "username";
    $passwordInput = "password";
    $admin = "admin";

    $sql = "INSERT INTO logon('username', 'password', 'admin') VALUES($usernameInput, $passwordInput, $admin)";
    
    if(mysqli_query($conn, $sql)){
        echo "<h3>Record added to database</h3>";
    }
    else{
        echo "Error: Record failed to add. $sql. "
        .mysqli_error($conn);
    }
    
    mysqli_close($conn);
}

function addToFrames(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

    $frameWepID = "frame_bridge_weapon_ID";
    $framePerkID = "weapon_frame_ID";

    $sql = "INSERT INTO framebridge('frame_bridge_weapon_ID', 'weapon_frame_ID')VALUES($frameWepID, $framePerkID)";
    
    if(mysqli_query($conn, $sql)){
        echo "<h3>Record added to database</h3>";
    }
    else{
        echo "Error: Record failed to add. $sql. "
        .mysqli_error($conn);
    }
    
    mysqli_close($conn);
}

function addToBarrels(){
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

    $barrelWepID = "barrel_bridge_weapon_ID";
    $barrelPerkID = "weapon_barrel_ID";

    $sql = "INSERT INTO barrelbridge('barrel_bridge_weapon_ID', 'weapon_barrel_ID')VALUES($barrelWepID, $barrelPerkID)";
    
    if(mysqli_query($conn, $sql)){
        echo "<h3>Record added to database</h3>";
    }
    else{
        echo "Error: Record failed to add. $sql. "
        .mysqli_error($conn);
    }
    
    mysqli_close($conn);
}

function addToMags(){
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

    $magWepID = "mag_bridge_weapon_ID";
    $magPerkID = "weapon_mag_ID";

    $sql = "INSERT INTO magbridge('mag_bridge_weapon_ID', 'weapon_mag_ID')VALUES($magWepID, $magPerkID)";
    
    if(mysqli_query($conn, $sql)){
        echo "<h3>Record added to database</h3>";
    }
    else{
        echo "Error: Record failed to add. $sql. "
        .mysqli_error($conn);
    }
    
    mysqli_close($conn);
}

function addToTrait1(){
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

    $trait1WepID = "trait1_bridge_weapon_ID";
    $trait1PerkID = "weapon_barrel_ID";

    $sql = "INSERT INTO trait1bridge('trait1_bridge_weapon_ID', 'weapon_trait1_ID')VALUES($trait1WepID, $trait1PerkID)";
    
    if(mysqli_query($conn, $sql)){
        echo "<h3>Record added to database</h3>";
    }
    else{
        echo "Error: Record failed to add. $sql. "
        .mysqli_error($conn);
    }
    
    mysqli_close($conn);
}

function addToTrait2(){
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

    $trait2WepID = "trait2_bridge_weapon_ID";
    $trait2PerkID = "weapon_trait2_ID";

    $sql = "INSERT INTO trait2bridge('trait2_bridge_weapon_ID', 'weapon_trait2_ID')VALUES($trait2WepID, $trait2PerkID)";
    
    if(mysqli_query($conn, $sql)){
        echo "<h3>Record added to database</h3>";
    }
    else{
        echo "Error: Record failed to add. $sql. "
        .mysqli_error($conn);
    }
    
    mysqli_close($conn);
}