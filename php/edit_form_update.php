<?php
//updates
function updateWeapon(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

    $weapon_ID = $_REQUEST['weapon_ID'];
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


    $sql ="UPDATE weapons SET(weapon_name = '$weapon_name', weapon_type = '$weapon_type', weapon_source = '$weapon_source', pattern_count = '$pattern_count', base_impact = '$base_impact', base_range = NULLIF('$base_range',''), base_stability = '$base_stability', base_handling = '$base_handling', base_reload = '$base_reload', base_AA = '$base_AA', base_zoom = '$base_zoom', base_recoil = '$base_recoil', base_RPM = NULLIF('$base_RPM',''), base_draw = NULLIF('$base_draw',''), base_accuracy = NULLIF('$base_accuracy',''), base_mag = '$base_mag', icon_file_path = '$icon_file_path') WHERE weapon_ID = $weapon_ID";



    if(mysqli_query($conn, $sql)){
        echo "<h3 class=\"success\">Record added to database</h3>";
    }
    else{
        echo "Error: Record failed to add. $sql. "
        .mysqli_error($conn);
    }
    
    mysqli_close($conn);
}

function updatePerks(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

    $perk_ID = $_REQUEST['perk_ID'];
    $perk_name = $_REQUEST['perk_name'];
    $perk_desc = $_REQUEST['perk_desc'];
    $perk_type = $_REQUEST['perk_type'];
    $perk_impact_change = $_REQUEST['perk_impact_change'];
    $perk_range_change = $_REQUEST['perk_range_change'];
    $perk_stab_change = $_REQUEST['perk_stab_change'];
    $perk_handling_change = $_REQUEST['perk_handling_change'];
    $perk_reload_change = $_REQUEST['perk_reload_change'];
    $perk_AA_change = $_REQUEST['perk_AA_change'];
    $perk_zoom_change = $_REQUEST['perk_zoom_change'];
    $perk_recoil_change = $_REQUEST['perk_recoil_change'];
    $perk_RPM_change = $_REQUEST['perk_RPM_change'];
    $perk_draw_time_change = $_REQUEST['perk_draw_time_change'];
    $perk_accuracy_change = $_REQUEST['perk_accuracy_change'];
    $perk_mag_size_change = $_REQUEST['perk_mag_size_change'];
    $perk_dmg_buff = $_REQUEST['perk_dmg_buff'];
    $perk_drowned_cost = $_REQUEST['perk_drowned_cost'];
    $perk_res_element_cost = $_REQUEST['perk_res_element_cost'];
    $perk_res_alloy_cost = $_REQUEST['perk_res_alloy_cost'];
    $perk_ascendant_alloy_cost = $_REQUEST['perk_ascendant_alloy_cost'];
    $perk_glimmer_cost = $_REQUEST['perk_glimmer_cost'];
    $perk_e_core_cost = $_REQUEST['perk_e_core_cost'];
    $icon_file_path = $_REQUEST['icon_file_path'];
    
    $sql = "UPDATE perks SET(perk_name = '$perk_name', perk_desc = '$perk_desc', perk_type = '$perk_type', perk_impact_change = '$perk_impact_change', perk_range_change = '$perk_range_change', perk_stab_change = '$perk_stab_change', perk_handling_change = '$perk_handling_change', perk_reload_change = '$perk_reload_change', perk_AA_change = '$perk_AA_change', perk_zoom_change = '$perk_zoom_change', perk_recoil_change = '$perk_recoil_change', perk_RPM_change = '$perk_RPM_change', perk_draw_time_change = '$perk_draw_time_change', perk_accuracy_change = '$perk_accuracy_change', perk_mag_size_change = '$perk_mag_size_change', perk_dmg_buff = '$perk_dmg_buff', perk_drowned_cost = '$perk_drowned_cost', perk_res_element_cost = '$perk_res_element_cost', perk_res_alloy_cost = '$perk_res_alloy_cost', perk_ascendant_alloy_cost = '$perk_ascendant_alloy_cost', perk_glimmer_cost = '$perk_glimmer_cost', perk_e_core_cost = '$perk_e_core_cost', icon_file_path = '$icon_file_path') WHERE perk_ID = $perk_ID";

    if(mysqli_query($conn, $sql)){
        echo "<h3 class=\"success\">Record added to database</h3>";
    }
    else{
        echo "Error: Record failed to add. $sql. "
        .mysqli_error($conn);
    }
    
    mysqli_close($conn);
}

function updateLogon(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

    $user_ID = $_REQUEST['user_ID'];
    $usernameInput = $_REQUEST['username'];
    $passwordInput = $_REQUEST['password'];
    $admin = $_REQUEST['is_admin'];

    $sql = "UPDATE logon SET (account_username ='$usernameInput', account_password ='$passwordInput', is_admin = '$admin') WHERE user_ID = $user_ID";
    
    if(mysqli_query($conn, $sql)){
        echo "<h3 id=\"insertSuccess\" class=\"success\"> Record added to database</h3>";
    }
    else{
        echo "<h3 id=\"insertFail\">Error: Record failed to add. $sql. </h3>"
        .mysqli_error($conn);
    }
    
    mysqli_close($conn);
}

function updateFrames(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

    $fComboID = $_REQUEST['frame_combo_ID'];
    $frameWepID = $_REQUEST['frame_bridge_weapon_ID'];
    $framePerkID = $_REQUEST['weapon_frame_ID'];

    $sql = "UPDATE framebridge SET (frame_bridge_weapon_ID = '$frameWepID', weapon_frame_ID = '$framePerkID') WHERE frame_combo_ID = $fComboID";
    
    if(mysqli_query($conn, $sql)){
        echo "<h3 class=\"success\">Record added to database</h3>";
    }
    else{
        echo "Error: Record failed to add. $sql. "
        .mysqli_error($conn);
    }
    
    mysqli_close($conn);
}

function updateBarrels(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

    $barrelComboID = $_REQUEST['barrel_combo_ID'];
    $barrelWepID = $_REQUEST['barrel_bridge_weapon_ID'];
    $barrelPerkID = $_REQUEST['weapon_barrel_ID'];

    $sql = "UPDATE barrelbridge SET (barrel_bridge_weapon_ID = '$barrelWepID', weapon_barrel_ID = '$barrelPerkID') WHERE barrel_combo_ID = $barrelComboID";
    
    if(mysqli_query($conn, $sql)){
        echo "<h3 class=\"success\">Record added to database</h3>";
    }
    else{
        echo "Error: Record failed to add. $sql. "
        .mysqli_error($conn);
    }
    
    mysqli_close($conn);
}

function updateMags(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

    $magComboID = $_REQUEST['mag_combo_ID'];
    $magWepID = $_REQUEST['mag_bridge_weapon_ID'];
    $magPerkID = $_REQUEST['weapon_mag_ID'];

    $sql = "UPDATE magbridge SET (mag_bridge_weapon_ID = '$magWepID', weapon_mag_ID = '$magPerkID') WHERE mag_combo_ID = $magComboID";
    
    if(mysqli_query($conn, $sql)){
        echo "<h3 class=\"success\">Record added to database</h3>";
    }
    else{
        echo "Error: Record failed to add. $sql. "
        .mysqli_error($conn);
    }
    
    mysqli_close($conn);
}

function updateTrait1(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

    $trait1ComboID = $_REQUEST['trait1_combo_ID'];
    $trait1WepID = $_REQUEST['trait1_bridge_weapon_ID'];
    $trait1PerkID = $_REQUEST['weapon_trait_ID'];

    $sql = "UPDATE trait1bridge SET (trait1_bridge_weapon_ID = '$trait1WepID', weapon_trait1_ID = '$trait1PerkID') WHERE trait1_combo_ID = $trait1ComboID";
    
    if(mysqli_query($conn, $sql)){
        echo "<h3 class=\"success\">Record added to database</h3>";
    }
    else{
        echo "Error: Record failed to add. $sql. "
        .mysqli_error($conn);
    }
    
    mysqli_close($conn);
}

function updateTrait2(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

    $trait2ComboID = $_REQUEST['trait2_combo_ID'];
    $trait2WepID = $_REQUEST['trait2_bridge_weapon_ID'];
    $trait2PerkID = $_REQUEST['weapon_trait2_ID'];

    $sql = "UPDATE trait2bridge SET (trait2_bridge_weapon_ID = '$trait2WepID', weapon_trait2_ID = '$trait2PerkID') WHERE trait2_combo_ID = $trait2ComboID";
    
    if(mysqli_query($conn, $sql)){
        echo "<h3 class=\"success\">Record added to database</h3>";
    }
    else{
        echo "Error: Record failed to add. $sql. "
        .mysqli_error($conn);
    }
    
    mysqli_close($conn);
}


//deletes
function deleteWeapon(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

    $weapon_ID = $_REQUEST['weapon_ID'];
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


    $sql ="DELETE FROM weapons WHERE weapon_ID = $weapon_ID";



    if(mysqli_query($conn, $sql)){
        echo "<h3 class=\"success\">Record added to database</h3>";
    }
    else{
        echo "Error: Record failed to add. $sql. "
        .mysqli_error($conn);
    }
    
    mysqli_close($conn);
}

function deletePerks(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

    $perk_ID = $_REQUEST['perk_ID'];
    $perk_name = $_REQUEST['perk_name'];
    $perk_desc = $_REQUEST['perk_desc'];
    $perk_type = $_REQUEST['perk_type'];
    $perk_impact_change = $_REQUEST['perk_impact_change'];
    $perk_range_change = $_REQUEST['perk_range_change'];
    $perk_stab_change = $_REQUEST['perk_stab_change'];
    $perk_handling_change = $_REQUEST['perk_handling_change'];
    $perk_reload_change = $_REQUEST['perk_reload_change'];
    $perk_AA_change = $_REQUEST['perk_AA_change'];
    $perk_zoom_change = $_REQUEST['perk_zoom_change'];
    $perk_recoil_change = $_REQUEST['perk_recoil_change'];
    $perk_RPM_change = $_REQUEST['perk_RPM_change'];
    $perk_draw_time_change = $_REQUEST['perk_draw_time_change'];
    $perk_accuracy_change = $_REQUEST['perk_accuracy_change'];
    $perk_mag_size_change = $_REQUEST['perk_mag_size_change'];
    $perk_dmg_buff = $_REQUEST['perk_dmg_buff'];
    $perk_drowned_cost = $_REQUEST['perk_drowned_cost'];
    $perk_res_element_cost = $_REQUEST['perk_res_element_cost'];
    $perk_res_alloy_cost = $_REQUEST['perk_res_alloy_cost'];
    $perk_ascendant_alloy_cost = $_REQUEST['perk_ascendant_alloy_cost'];
    $perk_glimmer_cost = $_REQUEST['perk_glimmer_cost'];
    $perk_e_core_cost = $_REQUEST['perk_e_core_cost'];
    $icon_file_path = $_REQUEST['icon_file_path'];
    
    $sql = "DELETE FROM perks WHERE perk_ID = $perk_ID";

    if(mysqli_query($conn, $sql)){
        echo "<h3 class=\"success\">Record added to database</h3>";
    }
    else{
        echo "Error: Record failed to add. $sql. "
        .mysqli_error($conn);
    }
    
    mysqli_close($conn);
}

function deleteLogon(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

    $user_ID = $_REQUEST['user_ID'];
    $usernameInput = $_REQUEST['username'];
    $passwordInput = $_REQUEST['password'];
    $admin = $_REQUEST['is_admin'];

    $sql = "DELETE FROM logon WHERE user_ID = $user_ID";
    
    if(mysqli_query($conn, $sql)){
        echo "<h3 id=\"insertSuccess\" class=\"success\"> Record added to database</h3>";
    }
    else{
        echo "<h3 id=\"insertFail\">Error: Record failed to add. $sql. </h3>"
        .mysqli_error($conn);
    }
    
    mysqli_close($conn);
}

function deleteFrames(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

    $fComboID = $_REQUEST['frame_combo_ID'];
    $frameWepID = $_REQUEST['frame_bridge_weapon_ID'];
    $framePerkID = $_REQUEST['weapon_frame_ID'];

    $sql = "DELETE FROM framebridge WHERE frame_combo_ID = $fComboID";
    
    if(mysqli_query($conn, $sql)){
        echo "<h3 class=\"success\">Record added to database</h3>";
    }
    else{
        echo "Error: Record failed to add. $sql. "
        .mysqli_error($conn);
    }
    
    mysqli_close($conn);
}

function deleteBarrels(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

    $barrelComboID = $_REQUEST['barrel_combo_ID'];
    $barrelWepID = $_REQUEST['barrel_bridge_weapon_ID'];
    $barrelPerkID = $_REQUEST['weapon_barrel_ID'];

    $sql = "DELETE FROM barrelbridge WHERE barrel_combo_ID = $barrelComboID";
    
    if(mysqli_query($conn, $sql)){
        echo "<h3 class=\"success\">Record added to database</h3>";
    }
    else{
        echo "Error: Record failed to add. $sql. "
        .mysqli_error($conn);
    }
    
    mysqli_close($conn);
}

function deleteMags(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

    $magComboID = $_REQUEST['mag_combo_ID'];
    $magWepID = $_REQUEST['mag_bridge_weapon_ID'];
    $magPerkID = $_REQUEST['weapon_mag_ID'];

    $sql = "DELETE FROM magbridge WHERE mag_combo_ID = $magComboID";
    
    if(mysqli_query($conn, $sql)){
        echo "<h3 class=\"success\">Record added to database</h3>";
    }
    else{
        echo "Error: Record failed to add. $sql. "
        .mysqli_error($conn);
    }
    
    mysqli_close($conn);
}

function deleteTrait1(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

    $trait1ComboID = $_REQUEST['trait1_combo_ID'];
    $trait1WepID = $_REQUEST['trait1_bridge_weapon_ID'];
    $trait1PerkID = $_REQUEST['weapon_trait_ID'];

    $sql = "DELETE FROM trait1bridge WHERE trait1_combo_ID = $trait1ComboID";
    
    if(mysqli_query($conn, $sql)){
        echo "<h3 class=\"success\">Record added to database</h3>";
    }
    else{
        echo "Error: Record failed to add. $sql. "
        .mysqli_error($conn);
    }
    
    mysqli_close($conn);
}

function deleteTrait2(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

    $trait2ComboID = $_REQUEST['trait2_combo_ID'];
    $trait2WepID = $_REQUEST['trait2_bridge_weapon_ID'];
    $trait2PerkID = $_REQUEST['weapon_trait2_ID'];

    $sql = "DELETE FROM trait2bridge WHERE trait2_combo_ID = $trait2ComboID";
    
    if(mysqli_query($conn, $sql)){
        echo "<h3 class=\"success\">Record added to database</h3>";
    }
    else{
        echo "Error: Record failed to add. $sql. "
        .mysqli_error($conn);
    }
    
    mysqli_close($conn);
}
?>