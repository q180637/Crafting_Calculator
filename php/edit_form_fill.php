<?php
function loadWeaponForm(){

    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, 'db_calculator_tool');

    $sql = "SELECT * FROM weapons";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();

        $weapon_ID = $row['weapon_ID'];
        $weapon_name = $row['weapon_name'];
        $weapon_type = $row['weapon_type'];
        $weapon_source = $row['weapon_source'];
        $pattern_count = $row['pattern_count'];
        $base_impact = $row['base_impact'];
        $base_range = $row['base_range'];
        $base_stability = $row['base_stability'];
        $base_handling = $row['base_handling'];
        $base_reload = $row['base_reload'];
        $base_AA = $row['base_AA'];
        $base_zoom = $row['base_zoom'];
        $base_recoil = $row['base_recoil'];
        $base_RPM = $row['base_RPM'];
        $base_draw = $row['base_draw'];
        $base_accuracy = $row['base_accuracy'];
        $base_mag = $row['base_mag'];
        $icon_file_path = $row['icon_file_path'];

        echo json_encode($row);

        return $result;
    }

    mysqli_close($conn);
}

function loadPerksForm(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, 'db_calculator_tool');

    $sql = "SELECT * FROM perks";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();

        $perk_name = $row['perk_name'];
        $perk_desc = $row['perk_desc'];
        $perk_type = $row['perk_type'];
        $perk_impact_change = $row['perk_impact_change'];
        $perk_range_change = $row['perk_range_change'];
        $perk_stab_change = $row['perk_stab_change'];
        $perk_handling_change = $row['perk_handling_change'];
        $perk_reload_change = $row['perk_reload_change'];
        $perk_AA_change = $row['perk_AA_change'];
        $perk_zoom_change = $row['perk_zoom_change'];
        $perk_recoil_change = $row['perk_recoil_change'];
        $perk_RPM_change = $row['perk_RPM_change'];
        $perk_draw_time_change = $row['perk_draw_time_change'];
        $perk_accuracy_change = $row['perk_accuracy_change'];
        $perk_mag_size_change = $row['perk_mag_size_change'];
        $perk_dmg_buff = $row['perk_dmg_buff'];
        $perk_drowned_cost = $row['perk_drowned_cost'];
        $perk_res_element_cost = $row['perk_res_element_cost'];
        $perk_res_alloy_cost = $row['perk_res_alloy_cost'];
        $perk_ascendant_alloy_cost = $row['perk_ascendant_alloy_cost'];
        $perk_glimmer_cost = $row['perk_glimmer_cost'];
        $perk_e_core_cost = $row['perk_e_core_cost'];
        $icon_file_path = $row['icon_file_path'];
        

        echo json_encode($row);

        return $result;
    }

    mysqli_close($conn);
}

function loadLogonForm(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, 'db_calculator_tool');

    $sql = "SELECT * FROM logon";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();

        $usernameInput = $row['username'];
        $passwordInput = $row['password'];
        $admin = $row['admin'];

        echo json_encode($row);

        return $result;
    }

    mysqli_close($conn);
}

function loadFrameForm(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

    $sql = "SELECT frameBridge.frame_bridge_weapon_ID,framebridge.weapon_frame_ID,perks.perk_ID,weapons.weapon_ID,perks.perk_name,weapons.weapon_name from framebridge INNER JOIN perks on framebridge.frame_bridge_weapon_ID = perks.perk_ID INNER join weapons on framebridge.weapon_frame_ID = weapons.weapon_ID";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();

        $frameWepID = $row['frame_bridge_weapon_ID'];
        $framePerkID = $row['weapon_frame_ID'];

        echo json_encode($row);

        return $result;
    }

    mysqli_close($conn);
}

function loadBarrelForm(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');


    $sql = "SELECT barrelBridge.barrel_bridge_weapon_ID,barrelbridge.weapon_barrel_ID,perks.perk_ID,weapons.weapon_ID,perks.perk_name,weapons.weapon_name from barrelbridge INNER JOIN perks on barrelbridge.weapon_barrel_ID = perks.perk_ID INNER join weapons on barrelbridge.barrel_bridge_weapon_ID = weapons.weapon_ID";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();

        $barrelWepID = $row['barrel_bridge_weapon_ID'];
        $barrelPerkID = $row['weapon_barrel_ID'];

        echo json_encode($row);

        return $result;
    }

    mysqli_close($conn);
}

function loadMagsForm(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');


    $sql = "SELECT magBridge.mag_bridge_weapon_ID,magbridge.weapon_mag_ID,perks.perk_ID,weapons.weapon_ID,perks.perk_name,weapons.weapon_name from magbridge INNER JOIN perks on magbridge.weapon_mag_ID = perks.perk_ID INNER join weapons on magbridge.mag_bridge_weapon_ID = weapons.weapon_ID";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();

        $magWepID = $row['mag_bridge_weapon_ID'];
        $magPerkID = $row['weapon_mag_ID'];

        echo json_encode($row);

        return $result;
    }

    mysqli_close($conn);
}

function loadTrait1Form(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');


    $sql = "SELECT trait1Bridge.trait1_bridge_weapon_ID,trait1bridge. weapon_trait_ID,perks.perk_ID,weapons.weapon_ID,perks.perk_name,weapons.weapon_name from trait1bridge INNER JOIN perks on trait1bridge. weapon_trait_ID = perks.perk_ID INNER join weapons on trait1bridge.trait1_bridge_weapon_ID = weapons.weapon_ID";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();

        $trait1WepID = $row['trait1_bridge_weapon_ID'];
        $trait1PerkID = $row[' weapon_trait_ID'];

        echo json_encode($row);

        return $result;
    }

    mysqli_close($conn);
}

function loadTrait2Form(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');


    $sql = "SELECT trait2Bridge.trait2_bridge_weapon_ID,trait2bridge.weapon_trait2_ID,perks.perk_ID,weapons.weapon_ID,perks.perk_name,weapons.weapon_name from trait2bridge INNER JOIN perks on trait2bridge.weapon_trait2_ID = perks.perk_ID INNER join weapons on trait2bridge.trait2_bridge_weapon_ID = weapons.weapon_ID";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();

        $trait2WepID = $row['trait2_bridge_weapon_ID'];
        $trait2PerkID = $row['weapon_trait2_ID'];

        echo json_encode($row);

        return $result;
    }

    mysqli_close($conn);
}

if(isset($_POST['function']))
    {if($_POST['function'] == 'loadWeapons'){
        loadWeaponForm();
    }else if($_POST['function'] == 'loadPerks'){
        loadPerksForm();
    }else if($_POST['function'] == 'loadLogon'){
        loadLogonForm();
    }else if($_POST['function'] == 'loadFrames'){
        loadFrameForm();
    }
    else if($_POST['function'] == 'loadBarrels'){
        loadBarrelForm();
    }else if($_POST['function'] == 'loadMags'){
        loadMagsForm();
    }else if($_POST['function'] == 'loadTrait1'){
        loadTrait1Form();
    }
    else if($_POST['function'] == 'loadTrait2'){
        loadTrait2Form();
    }
}

?>