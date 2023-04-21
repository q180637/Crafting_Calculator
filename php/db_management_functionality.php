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

    $sql ="INSERT INTO weapons(weapon_name, weapon_type, weapon_source, pattern_count, base_impact, base_range, base_stability, base_handling, base_reload, base_AA, base_zoom, base_recoil, base_RPM, base_draw, base_accuracy, base_mag, icon_file_path) VALUES ('$weapon_name', '$weapon_type', '$weapon_source', '$pattern_count', '$base_impact', NULLIF('$base_range',''), '$base_stability', '$base_handling', '$base_reload', '$base_AA', '$base_zoom', '$base_recoil', NULLIF('$base_RPM',''), NULLIF('$base_draw',''), NULLIF('$base_accuracy',''), '$base_mag', '$icon_file_path')";



    if(mysqli_query($conn, $sql)){
        echo "<h3 class=\"success\">Record added to database</h3>";
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
    
    $sql = "INSERT INTO perks(perk_name, perk_desc, perk_type, perk_impact_change, perk_range_change, perk_stab_change, perk_handling_change, perk_reload_change, perk_AA_change, perk_zoom_change, perk_recoil_change, perk_RPM_change, perk_draw_time_change, perk_accuracy_change, perk_mag_size_change, perk_dmg_buff, perk_drowned_cost, perk_res_element_cost, perk_res_alloy_cost, perk_ascendant_alloy_cost, perk_glimmer_cost, perk_e_core_cost, icon_file_path)VALUES('$perk_name', '$perk_desc', '$perk_type', '$perk_impact_change', '$perk_range_change', '$perk_stab_change', '$perk_handling_change', '$perk_reload_change', '$perk_AA_change', '$perk_zoom_change', '$perk_recoil_change', '$perk_RPM_change', '$perk_draw_time_change', '$perk_accuracy_change', '$perk_mag_size_change', '$perk_dmg_buff', '$perk_drowned_cost', '$perk_res_element_cost', '$perk_res_alloy_cost', '$perk_ascendant_alloy_cost', '$perk_glimmer_cost', '$perk_e_core_cost', '$icon_file_path')";

    if(mysqli_query($conn, $sql)){
        echo "<h3 class=\"success\">Record added to database</h3>";
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

    $usernameInput = $_REQUEST['username'];
    $passwordInput = $_REQUEST['password'];
    $admin = $_REQUEST['is_admin'];

    $sql = "INSERT INTO logon(account_username, account_password, is_admin) VALUES('$usernameInput', '$passwordInput', '$admin')";
    
    if(mysqli_query($conn, $sql)){
        echo "<h3 id=\"insertSuccess\" class=\"success\"> Record added to database</h3>";
    }
    else{
        echo "<h3 id=\"insertFail\">Error: Record failed to add. $sql. </h3>"
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

    $frameWepID = $_REQUEST['frame_bridge_weapon_ID'];
    $framePerkID = $_REQUEST['weapon_frame_ID'];

    $sql = "INSERT INTO framebridge(frame_bridge_weapon_ID, weapon_frame_ID)VALUES('$frameWepID', '$framePerkID')";
    
    if(mysqli_query($conn, $sql)){
        echo "<h3 class=\"success\">Record added to database</h3>";
    }
    else{
        echo "Error: Record failed to add. $sql. "
        .mysqli_error($conn);
    }
    
    mysqli_close($conn);
}

function addToBarrels(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

    $barrelWepID = $_REQUEST['barrel_bridge_weapon_ID'];
    $barrelPerkID = $_REQUEST['weapon_barrel_ID'];

    $sql = "INSERT INTO barrelbridge(barrel_bridge_weapon_ID, weapon_barrel_ID)VALUES('$barrelWepID', '$barrelPerkID')";
    
    if(mysqli_query($conn, $sql)){
        echo "<h3 class=\"success\">Record added to database</h3>";
    }
    else{
        echo "Error: Record failed to add. $sql. "
        .mysqli_error($conn);
    }
    
    mysqli_close($conn);
}

function addToMags(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

    $magWepID = $_REQUEST['mag_bridge_weapon_ID'];
    $magPerkID = $_REQUEST['weapon_mag_ID'];

    $sql = "INSERT INTO magbridge(mag_bridge_weapon_ID, weapon_mag_ID)VALUES('$magWepID', '$magPerkID')";
    
    if(mysqli_query($conn, $sql)){
        echo "<h3 class=\"success\">Record added to database</h3>";
    }
    else{
        echo "Error: Record failed to add. $sql. "
        .mysqli_error($conn);
    }
    
    mysqli_close($conn);
}

function addToTrait1(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

    $trait1WepID = $_REQUEST['trait1_bridge_weapon_ID'];
    $trait1PerkID = $_REQUEST['weapon_trait_ID'];

    $sql = "INSERT INTO trait1bridge(trait1_bridge_weapon_ID, weapon_trait1_I)VALUES('$trait1WepID', 'trait1PerkID')";
    
    if(mysqli_query($conn, $sql)){
        echo "<h3 class=\"success\">Record added to database</h3>";
    }
    else{
        echo "Error: Record failed to add. $sql. "
        .mysqli_error($conn);
    }
    
    mysqli_close($conn);
}

function addToTrait2(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

    $trait2WepID = $_REQUEST['trait2_bridge_weapon_ID'];
    $trait2PerkID = $_REQUEST['weapon_trait2_ID'];

    $sql = "INSERT INTO trait2bridge(trait2_bridge_weapon_ID, weapon_trait2_ID)VALUES('$trait2WepID', '$trait2PerkID')";
    
    if(mysqli_query($conn, $sql)){
        echo "<h3 class=\"success\">Record added to database</h3>";
    }
    else{
        echo "Error: Record failed to add. $sql. "
        .mysqli_error($conn);
    }
    
    mysqli_close($conn);
}

function fillWeaponRecordList(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');
    
    $sql = "SELECT weapon_ID, weapon_name from weapons";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $records = array();
        while($row = $result->fetch_assoc()){
            $arrayadd = "<option id=w".$row["weapon_ID"]." onclick=\"loadWeapons(".$row["weapon_ID"].")\" value=".$row["weapon_name"].">".$row['weapon_name']."</option>";
            array_push($records, $arrayadd);
        }
        $recordExport = array_map('trim', $records);
        echo json_encode($recordExport);
        return $recordExport;
    } else{
        echo "No records";
    }
    mysqli_close($conn);
}

function fillPerksRecordList(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

    $sql = "SELECT perk_ID,  perk_name from perks";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $records = array();
        while($row = $result->fetch_assoc()){
            $arrayadd = "<option id=p".$row["perk_ID"]." onclick=\"loadPerks(".$row["perk_ID"].")\" value=".$row["perk_name"].">".$row['perk_name']."</option>";
            array_push($records, $arrayadd);
        }$recordExport = array_map('trim', $records);
        echo json_encode($recordExport);
        return $records;
    } else{
        echo "No records";
    }
    mysqli_close($conn);
}

function fillLogonRecordList(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

    

    $sql = "SELECT user_ID, account_username from logon";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $records = array();
        while($row = $result->fetch_assoc()){
            $arrayadd = "<option id=l".$row['user_ID']." onclick=\"loadLogon(".$row['user_ID'].")\" value=".$row['account_username'].">".$row['account_username']."</option>";
            array_push($records, $arrayadd);
        }$recordExport = array_map('trim', $records);
        echo json_encode($recordExport);
        return $records;
    } else{
        echo "No records";
    }
    mysqli_close($conn);
}

function fillFrameRecordList(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

    $sql = "SELECT framebridge.frame_combo_ID, frameBridge.frame_bridge_weapon_ID,framebridge.weapon_frame_ID,perks.perk_ID,weapons.weapon_ID,perks.perk_name,weapons.weapon_name from framebridge INNER JOIN perks on framebridge.frame_bridge_weapon_ID = perks.perk_ID INNER join weapons on framebridge.weapon_frame_ID = weapons.weapon_ID";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $records = array();
        while($row = $result->fetch_assoc()){
            $arrayadd = "<option id=f".$row["frame_bridge_weapon_ID"].$row["weapon_frame_ID"]." onclick=\"loadFrames(".$row['frame_combo_ID'].")\" value=".$row["weapon_name"].$row["perk_name"].">".$row["weapon_name"]." ".$row["perk_name"]."</option>";
            array_push($records, $arrayadd);
        }$recordExport = array_map('trim', $records);
        echo json_encode($recordExport);
        return $records;
    } else{
        echo "No records";
    }
    mysqli_close($conn);
}

function fillBarrelRecordList(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

    $sql = "SELECT barrelbridge.barrel_combo_ID, barrelBridge.barrel_bridge_weapon_ID,barrelbridge.weapon_barrel_ID,perks.perk_ID,weapons.weapon_ID,perks.perk_name,weapons.weapon_name from barrelbridge INNER JOIN perks on barrelbridge.weapon_barrel_ID = perks.perk_ID INNER join weapons on barrelbridge.barrel_bridge_weapon_ID = weapons.weapon_ID";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $records = array();
        while($row = $result->fetch_assoc()){
            $arrayadd = "<option id=f".$row["barrel_bridge_weapon_ID"].$row["weapon_barrel_ID"]." onclick=\"loadBarrels(".$row['barrel_combo_ID'].")\" value=".$row["weapon_name"].$row["perk_name"].">".$row["weapon_name"]." ".$row["perk_name"]."</option>";
            array_push($records, $arrayadd);
        }$recordExport = array_map('trim', $records);
        echo json_encode($recordExport);
        return $records;
    } else{
        echo "No records";
    }
    mysqli_close($conn);
}

function fillMagRecordList(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

    $sql = "SELECT magbridge.mag_combo_ID, magbridge.mag_bridge_weapon_ID,magbridge.weapon_mag_ID,perks.perk_ID,weapons.weapon_ID,perks.perk_name,weapons.weapon_name from magbridge INNER JOIN perks on magbridge.weapon_mag_ID = perks.perk_ID INNER join weapons on magbridge.mag_bridge_weapon_ID = weapons.weapon_ID";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $records = array();
        while($row = $result->fetch_assoc()){
            $arrayadd = "<option id=f".$row["mag_bridge_weapon_ID"].$row["weapon_mag_ID"]." onclick=\"loadMags(".$row['mag_combo_id'].")\" value=".$row["weapon_name"].$row["perk_name"].">".$row["weapon_name"]." ".$row["perk_name"]."</option>";
            array_push($records, $arrayadd);
        }$recordExport = array_map('trim', $records);
        echo json_encode($recordExport);
        return $records;
    } else{
        echo "No records";
    }
    mysqli_close($conn);
}

function fillTrait1RecordList(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

    $sql = "SELECT trait1bridge.trait1_combo_ID, trait1bridge.trait1_bridge_weapon_ID,trait1bridge. weapon_trait_ID,perks.perk_ID,weapons.weapon_ID,perks.perk_name,weapons.weapon_name from trait1bridge INNER JOIN perks on trait1bridge. weapon_trait_ID = perks.perk_ID INNER join weapons on trait1bridge.trait1_bridge_weapon_ID = weapons.weapon_ID";
    $result = $conn->query($sql);


    if($result->num_rows > 0){
        $records = array();
        while($row = $result->fetch_assoc()){
            $arrayadd = "<option id=f".$row["trait1_bridge_weapon_ID"].$row["weapon_trait_ID"]." onclick=\"loadTrait1(".$row['trait1_combo_ID'].")\" value=".$row["weapon_name"].$row["perk_name"].">".$row["weapon_name"]." ".$row["perk_name"]."</option>";
            array_push($records, $arrayadd);
        }$recordExport = array_map('trim', $records);
        echo json_encode($recordExport);
        return $records;
    } else{
        echo "No records";
    }
    mysqli_close($conn);
}

function fillTrait2RecordList(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

    $sql = "SELECT trait2bridge.trait2_combo_id, trait2bridge.trait2_bridge_weapon_ID,trait2bridge.weapon_trait2_ID,perks.perk_ID,weapons.weapon_ID,perks.perk_name,weapons.weapon_name from trait2bridge INNER JOIN perks on trait2bridge.weapon_trait2_ID = perks.perk_ID INNER join weapons on trait2bridge.trait2_bridge_weapon_ID = weapons.weapon_ID";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $records = array();
        while($row = $result->fetch_assoc()){
            $arrayadd = "<option id=f".$row["trait2_bridge_weapon_ID"].$row["weapon_trait2_ID"]." onclick=\"loadTrait2(".$row['trait2_combo_id'].")\" value=".$row["weapon_name"].$row["perk_name"].">".$row["weapon_name"]." ".$row["perk_name"]."</option>";
            array_push($records, $arrayadd);
        }$recordExport = array_map('trim', $records);
        echo json_encode($recordExport);
        return $records;
    } else{
        echo "No records";
    }
    mysqli_close($conn);
}




if(isset($_POST['function'])){
    if($_POST['function'] == 'fillWeaponRecordList'){
        
        fillWeaponRecordList();
    }
    else  if($_POST['function'] == 'fillPerksRecordList'){
        fillPerksRecordList();
    }
    else  if($_POST['function'] == 'fillLogonRecordList'){
        fillLogonRecordList();
    }
    else  if($_POST['function'] == 'fillFrameRecordList'){
        fillFrameRecordList();
    }
    else  if($_POST['function'] == 'fillBarrelRecordList'){
        fillBarrelRecordList();
    }
    else  if($_POST['function'] == 'fillMagRecordList'){
        fillMagRecordList();
    }
    else  if($_POST['function'] == 'fillTrait1RecordList'){
        fillTrait1RecordList();
    }
    else  if($_POST['function'] == 'fillTrait2RecordList'){
        fillTrait2RecordList();
    }
}
