<?php

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
            $arrayadd = "<option id=w".$row["weapon_ID"]." onclick=\"getPerks(".$row["weapon_ID"].")\" value=".$row["weapon_name"].">".$row['weapon_name']."</option>";
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

function getFrames(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, 'db_calculator_tool');

    $selected = $_POST['selected'];

    $frames = "SELECT frameBridge.frame_combo_ID,frameBridge.frame_bridge_weapon_ID,framebridge.weapon_frame_ID,perks.perk_ID,weapons.weapon_ID,perks.perk_name,weapons.weapon_name from framebridge INNER JOIN perks on  framebridge.weapon_frame_ID= perks.perk_ID INNER join weapons on framebridge.frame_bridge_weapon_ID = weapons.weapon_ID WHERE frameBridge.frame_bridge_weapon_ID= $selected";

    $result = $conn->query($frames);

    if($result->num_rows > 0){
        $records = array();
        while($row = $result->fetch_assoc()){
            $arrayadd = "<option id=f".$row["frame_bridge_weapon_ID"].$row["weapon_frame_ID"]."  onclick=\"calculate(".$row["perk_ID"].")\" value=".$row["weapon_name"].$row["perk_name"].">".$row["perk_name"]."</option>";
            array_push($records, $arrayadd);
        }$recordExport = array_map('trim', $records);
        echo json_encode($recordExport);
        return $records;
    } else{
        echo "No records";
    }
    
    mysqli_close($conn);
}

function getBarrels(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, 'db_calculator_tool');

    $selected = $_POST['selected'];

    $sql = "SELECT barrelbridge.barrel_combo_ID, barrelBridge.barrel_bridge_weapon_ID,barrelbridge.weapon_barrel_ID,perks.perk_ID,weapons.weapon_ID,perks.perk_name,weapons.weapon_name from barrelbridge INNER JOIN perks on barrelbridge.weapon_barrel_ID = perks.perk_ID INNER join weapons on barrelbridge.barrel_bridge_weapon_ID = weapons.weapon_ID where barrelbridge.barrel_bridge_weapon_ID = $selected";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $records = array();
        while($row = $result->fetch_assoc()){
            $arrayadd = "<option id=f".$row["barrel_bridge_weapon_ID"].$row["weapon_barrel_ID"]."  onclick=\"calculate(".$row["perk_ID"].")\" value=".$row["weapon_name"].$row["perk_name"].">".$row["perk_name"]."</option>";
            array_push($records, $arrayadd);
        }$recordExport = array_map('trim', $records);
        echo json_encode($recordExport);
        return $records;
    } else{
        echo "No records";
    }
    mysqli_close($conn);
}

function getMags(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

    $selected = $_POST['selected'];

    $sql = "SELECT magbridge.mag_combo_ID, magbridge.mag_bridge_weapon_ID,magbridge.weapon_mag_ID,perks.perk_ID,weapons.weapon_ID,perks.perk_name,weapons.weapon_name from magbridge INNER JOIN perks on magbridge.weapon_mag_ID = perks.perk_ID INNER join weapons on magbridge.mag_bridge_weapon_ID = weapons.weapon_ID where magbridge.mag_bridge_weapon_ID = $selected";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $records = array();
        while($row = $result->fetch_assoc()){
            $arrayadd = "<option id=f".$row["mag_bridge_weapon_ID"].$row["weapon_mag_ID"]." onclick=\"calculate(".$row["perk_ID"].")\" value=".$row["weapon_name"].$row["perk_name"].">".$row["perk_name"]."</option>";
            array_push($records, $arrayadd);
        }$recordExport = array_map('trim', $records);
        echo json_encode($recordExport);
        return $records;
    } else{
        echo "No records";
    }
    mysqli_close($conn);
}

function getTrait1s(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

    $selected = $_POST['selected'];

    $sql = "SELECT trait1bridge.trait1_combo_ID, trait1bridge.trait1_bridge_weapon_ID,trait1bridge. weapon_trait_ID,perks.perk_ID,weapons.weapon_ID,perks.perk_name,weapons.weapon_name from trait1bridge INNER JOIN perks on trait1bridge. weapon_trait_ID = perks.perk_ID INNER join weapons on trait1bridge.trait1_bridge_weapon_ID = weapons.weapon_ID";
    $result = $conn->query($sql);


    if($result->num_rows > 0){
        $records = array();
        while($row = $result->fetch_assoc()){
            $arrayadd = "<option id=f".$row["trait1_bridge_weapon_ID"].$row["weapon_trait_ID"]." onclick=\"calculate(".$row["perk_ID"].")\" value=".$row["weapon_name"].$row["perk_name"].">".$row["perk_name"]."</option>";
            array_push($records, $arrayadd);
        }$recordExport = array_map('trim', $records);
        echo json_encode($recordExport);
        return $records;
    } else{
        echo "No records";
    }
    mysqli_close($conn);
}

function getTrait2s(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

    $selected = $_POST['selected'];

    $sql = "SELECT trait2bridge.trait2_combo_id, trait2bridge.trait2_bridge_weapon_ID,trait2bridge.weapon_trait2_ID,perks.perk_ID,weapons.weapon_ID,perks.perk_name,weapons.weapon_name from trait2bridge INNER JOIN perks on trait2bridge.weapon_trait2_ID = perks.perk_ID INNER join weapons on trait2bridge.trait2_bridge_weapon_ID = weapons.weapon_ID";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $records = array();
        while($row = $result->fetch_assoc()){
            $arrayadd = "<option id=f".$row["trait2_bridge_weapon_ID"].$row["weapon_trait2_ID"]." onclick=\"calculate(".$row["perk_ID"].")\" value=".$row["weapon_name"].$row["perk_name"].">".$row["perk_name"]."</option>";
            array_push($records, $arrayadd);
        }$recordExport = array_map('trim', $records);
        echo json_encode($recordExport);
        return $records;
    } else{
        echo "No records";
    }
    mysqli_close($conn);
}

function getWepStats(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

    $selected = $_POST['selected'];
    
    $sql = "SELECT * from weapons where weapon_ID = $selected";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $records = array();
        while($row = $result->fetch_assoc()){
            $arrayadd = "<p class=\"impact\"id=w".$row["weapon_ID"]." value=".$row["base_impact"]."> Impact: ".$row['base_impact']."</p> <p class=\"range\"id=w".$row["weapon_ID"]." value=".$row["base_range"]."> Range: ".$row['base_range']."</p> <p class=\"stability\"id=w".$row["weapon_ID"]." value=".$row["base_stability"]."> Stability: ".$row['base_stability']."</p> <p class=\"handling\"id=w".$row["weapon_ID"]." value=".$row["base_handling"]."> Handling: ".$row['base_handling']."</p> <p class=\"reload\"id=w".$row["weapon_ID"]." value=".$row["base_reload"]."> Reload Speed: ".$row['base_reload']."</p> <p class=\"aa\"id=w".$row["weapon_ID"]." value=".$row["base_AA"]."> Aim Assistance: ".$row['base_AA']."</p> <p class=\"zoom\"id=w".$row["weapon_ID"]." value=".$row["base_zoom"]."> Zoom: ".$row['base_zoom']."</p> <p class=\"recoil\"id=w".$row["weapon_ID"]." value=".$row["base_recoil"]."> Recoil Direction: ".$row['base_recoil']."</p> <p class=\"RPM\"id=w".$row["weapon_ID"]." value=".$row["base_RPM"]."> Rate of Fire: ".$row['base_RPM']." RPM</p> <p class=\"draw\"id=w".$row["weapon_ID"]." value=".$row["base_draw"]."> Draw Time: ".$row['base_draw']."</p> <p class=\"accuracy\"id=w".$row["weapon_ID"]." value=".$row["base_accuracy"]."> Accuracy: ".$row['base_accuracy']."</p> <p class=\"magsize\"id=w".$row["weapon_ID"]." value=".$row["base_mag"]."> Magazine Size: ".$row['base_mag']."</p>";
            array_push($records, $arrayadd);
        }
        $recordExport = array_map('trim', $records);
        echo json_encode($recordExport);
        return $recordExport;
    } else{
        echo "No records";
    }echo json_encode($records);
    return $records;
}

function getFrameStats(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

    $selected = $_POST['selectedFrame'];
    
    $sql = "SELECT * from perks where perk_ID = $selected";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $records = array();
        while($row = $result->fetch_assoc()){
            $arrayadd = $row['perk_impact_change'].$row['perk_range_change'].$row['perk_stab_change'].$row['perk_handling_change'].$row['perk_reload_change'].$row['perk_AA_change'].$row['perk_zoom_change'].$row['perk_recoil_change'].$row['perk_RPM_change'].$row['perk_draw_time_change'].$row['perk_accuracy_change'].$row['perk_mag_size_change'].$row['perk_dmg_buff'].$row['perk_drowned_cost'].$row['perk_res_element_cost'].$row['perk_res_alloy_cost'].$row['perk_ascendant_alloy_cost'].$row['perk_glimmer_cost'].$row['perk_e_core_cost'];
            array_push($records, $arrayadd);
        }
        $recordExport = array_map('trim', $records);
        echo json_encode($recordExport);
        return $recordExport;
    } else{
        echo "No records";
    }echo json_encode($records);
    return $records;
}

if(isset($_POST['function'])){
    if($_POST['function'] == 'fillWeaponRecordList'){
        fillWeaponRecordList();
    }
    else if($_POST['function'] == 'getFrames'){
        getFrames();
    }
    else if($_POST['function'] == 'getBarrels'){
        getBarrels();
    }
    else if($_POST['function'] == 'getMags'){
        getMags();
    }
    else if($_POST['function'] == 'getTrait1s'){
        getTrait1s();
    }
    else if($_POST['function'] == 'getTrait2s'){
        getTrait2s();
    }
    else if($_POST['function'] == 'getWepStats'){
        getWepStats();
    }
    else if($_POST['function'] == 'getFrameStats'){
        getFrameStats();
    }
    else if($_POST['function'] == 'getBarrelStats'){
        getBarrelStats();
    }
    else if($_POST['function'] == 'getMagStats'){
        getMagStats();
    }
    else if($_POST['function'] == 'getTrait1Stats'){
        getTrait1Stats();
    }
    else if($_POST['function'] == 'getTrait2Stats'){
        getTrait2Stats();
    }
}

?>