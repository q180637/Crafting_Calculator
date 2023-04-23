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
            $arrayadd = "<option id=f".$row["frame_bridge_weapon_ID"].$row["weapon_frame_ID"]."  onclick=\"calculateFrames(".$row["perk_ID"].")\" value=".$row["weapon_name"].$row["perk_name"].">".$row["perk_name"]."</option>";
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
            $arrayadd = "<option id=f".$row["barrel_bridge_weapon_ID"].$row["weapon_barrel_ID"]."  onclick=\"calculateBarrels(".$row["perk_ID"].")\" value=".$row["weapon_name"].$row["perk_name"].">".$row["perk_name"]."</option>";
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
            $arrayadd = "<option id=f".$row["mag_bridge_weapon_ID"].$row["weapon_mag_ID"]." onclick=\"calculateMag(".$row["perk_ID"].")\" value=".$row["weapon_name"].$row["perk_name"].">".$row["perk_name"]."</option>";
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
            $arrayadd = "<option id=f".$row["trait1_bridge_weapon_ID"].$row["weapon_trait_ID"]." onclick=\"calculateTrait1(".$row["perk_ID"].")\" value=".$row["weapon_name"].$row["perk_name"].">".$row["perk_name"]."</option>";
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
            $arrayadd = "<option id=f".$row["trait2_bridge_weapon_ID"].$row["weapon_trait2_ID"]." onclick=\"calculateTrait2(".$row["perk_ID"].")\" value=".$row["weapon_name"].$row["perk_name"].">".$row["perk_name"]."</option>";
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
            $arrayadd = "<p class=\"impact\"id=\"impact\" value=".$row["base_impact"]."> Impact: ".$row['base_impact']."</p> <p class=\"range\"id=\"range\" value=".$row["base_range"]."> Range: ".$row['base_range']."</p> <p class=\"stability\"id=\"stability\" value=".$row["base_stability"]."> Stability: ".$row['base_stability']."</p> <p class=\"handling\"id=\"handling\" value=".$row["base_handling"]."> Handling: ".$row['base_handling']."</p> <p class=\"reload\"id=\"reload\" value=".$row["base_reload"]."> Reload Speed: ".$row['base_reload']."</p> <p class=\"aa\"id=aa value=".$row["base_AA"]."> Aim Assistance: ".$row['base_AA']."</p> <p class=\"zoom\"id=\"zoom\" value=".$row["base_zoom"]."> Zoom: ".$row['base_zoom']."</p> <p class=\"recoil\"id=\"recoil\" value=".$row["base_recoil"]."> Recoil Direction: ".$row['base_recoil']."</p> <p class=\"RPM\"id=\"rpm\" value=".$row["base_RPM"]."> Rate of Fire: ".$row['base_RPM']." RPM</p> <p class=\"draw\"id=\"draw\" value=".$row["base_draw"]."> Draw Time: ".$row['base_draw']."</p> <p class=\"accuracy\"id=\"accuracy\" value=".$row["base_accuracy"]."> Accuracy: ".$row['base_accuracy']."</p> <p class=\"magsize\"id=\"magsize\" value=".$row["base_mag"]."> Magazine Size: ".$row['base_mag']."</p>";
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
    
    $sql = "SELECT perk_impact_change, perk_range_change, perk_stab_change, perk_handling_change, perk_reload_change, perk_AA_change, perk_zoom_change, perk_recoil_change, perk_RPM_change, perk_draw_time_change, perk_accuracy_change, perk_mag_size_change, perk_dmg_buff, perk_drowned_cost, perk_res_element_cost, perk_res_alloy_cost, perk_ascendant_alloy_cost, perk_glimmer_cost, perk_e_core_cost from perks where perk_ID = $selected";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $records = array();
        while($row = $result->fetch_assoc()){
            
            $arrayadd = "<p class=\"hide\"id=\"impactchange\" value=".$row["perk_impact_change"]."></p> 
            <p class=\"hide\"id=\"rangechange\" value=".$row["perk_range_change"]."></p>
            <p class=\"hide\"id=\"stabilitychange\" value=".$row["perk_stab_change"]."></p>
            <p class=\"hide\"id=\"handlingchange\" value=".$row["perk_handling_change"]."></p> 
            <p class=\"hide\"id=\"reloadchange\" value=".$row["perk_reload_change"]."></p> 
            <p class=\"hide\"id=\"aachange\" value=".$row["perk_AA_change"]."></p> 
            <p class=\"hide\"id=\"zoomchange\" value=".$row["perk_zoom_change"]."></p> 
            <p class=\"hide\"id=\"recoilchange\" value=".$row["perk_recoil_change"]."></p> 
            <p class=\"hide\"id=\"RPMchange\" value=".$row["perk_RPM_change"]."></p> 
            <p class=\"hide\"id=\"drawchange\" value=".$row["perk_draw_time_change"]."></p> 
            <p class=\"hide\"id=\"accuracychange\" value=".$row["perk_accuracy_change"]."></p> 
            <p class=\"hide\"id=\"magchange\" value=".$row["perk_mag_size_change"]."></p> 
            <p class=\"hide\"id=\"dmgchange\" value=".$row["perk_dmg_buff"]."></p> 
            <p class=\"drowned_cost\"id=\"drownedchange\" value=".$row["perk_drowned_cost"]."></p> 
            <p class=\"resel_cost\"id=\"reselchange\" value=".$row["perk_res_element_cost"]."></p> 
            <p class=\"res_alloy_cost\"id=\"resalloychange\" value=".$row["perk_res_alloy_cost"]."></p> 
            <p class=\"ascendant_alloy_cost\"id=\"ascendantchange\" value=".$row["perk_ascendant_alloy_cost"]."></p> 
            <p class=\"glimmer_cost\"id=\"glimmerchange\" value=".$row["perk_glimmer_cost"]."></p> 
            <p class=\"ecore_cost\"id=\"ecorechange\" value=".$row["perk_e_core_cost"]."></p>";
            
        }array_push($records, $arrayadd);
        //$recordExport = array_map('trim', $records);
        echo json_encode($records);
        return $records;
    } else{
        echo "No records";
    }echo json_encode($records);
    return $records;
}

function getBarrelStats(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

    $selected = $_POST['selectedBarrel'];
    
    $sql = "SELECT perk_impact_change, perk_range_change, perk_stab_change, perk_handling_change, perk_reload_change, perk_AA_change, perk_zoom_change, perk_recoil_change, perk_RPM_change, perk_draw_time_change, perk_accuracy_change, perk_mag_size_change, perk_dmg_buff, perk_drowned_cost, perk_res_element_cost, perk_res_alloy_cost, perk_ascendant_alloy_cost, perk_glimmer_cost, perk_e_core_cost from perks where perk_ID = $selected";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $records = array();
        while($row = $result->fetch_assoc()){
            
            $arrayadd = "<p class=\"hide\"id=\"impactchange2\" value=".$row["perk_impact_change"]."></p> 
            <p class=\"hide\"id=\"rangechange2\" value=".$row["perk_range_change"]."></p>
            <p class=\"hide\"id=\"stabilitychange2\" value=".$row["perk_stab_change"]."></p>
            <p class=\"hide\"id=\"handlingchange2\" value=".$row["perk_handling_change"]."></p> 
            <p class=\"hide\"id=\"reloadchange2\" value=".$row["perk_reload_change"]."></p> 
            <p class=\"hide\"id=\"aachange2\" value=".$row["perk_AA_change"]."></p> 
            <p class=\"hide\"id=\"zoomchange2\" value=".$row["perk_zoom_change"]."></p> 
            <p class=\"hide\"id=\"recoilchange2\" value=".$row["perk_recoil_change"]."></p> 
            <p class=\"hide\"id=\"RPMchange2\" value=".$row["perk_RPM_change"]."></p> 
            <p class=\"hide\"id=\"drawchange2\" value=".$row["perk_draw_time_change"]."></p> 
            <p class=\"hide\"id=\"accuracychange2\" value=".$row["perk_accuracy_change"]."></p> 
            <p class=\"hide\"id=\"magchange2\" value=".$row["perk_mag_size_change"]."></p> 
            <p class=\"hide\"id=\"dmgchange2\" value=".$row["perk_dmg_buff"]."></p> 
            <p class=\"hide\"id=\"drownedchange2\" value=".$row["perk_drowned_cost"]."></p> 
            <p class=\"hide\"id=\"reselchange2\" value=".$row["perk_res_element_cost"]."></p> 
            <p class=\"hide\"id=\"resalloychange2\" value=".$row["perk_res_alloy_cost"]."></p> 
            <p class=\"hide\"id=\"ascendantchange2\" value=".$row["perk_ascendant_alloy_cost"]."></p> 
            <p class=\"hide\"id=\"glimmerchange2\" value=".$row["perk_glimmer_cost"]."></p> 
            <p class=\"hide\"id=\"ecorechange2\" value=".$row["perk_e_core_cost"]."></p>";
            
        }array_push($records, $arrayadd);
        //$recordExport = array_map('trim', $records);
        echo json_encode($records);
        return $records;
    } else{
        echo "No records";
    }echo json_encode($records);
    return $records;
}

function getMagStats(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

    $selected = $_POST['selectedMag'];
    
    $sql = "SELECT perk_impact_change, perk_range_change, perk_stab_change, perk_handling_change, perk_reload_change, perk_AA_change, perk_zoom_change, perk_recoil_change, perk_RPM_change, perk_draw_time_change, perk_accuracy_change, perk_mag_size_change, perk_dmg_buff, perk_drowned_cost, perk_res_element_cost, perk_res_alloy_cost, perk_ascendant_alloy_cost, perk_glimmer_cost, perk_e_core_cost from perks where perk_ID = $selected";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $records = array();
        while($row = $result->fetch_assoc()){
            
            $arrayadd = "<p class=\"hide\"id=\"impactchange3\" value=".$row["perk_impact_change"]."></p> 
            <p class=\"hide\"id=\"rangechange3\" value=".$row["perk_range_change"]."></p>
            <p class=\"hide\"id=\"stabilitychange3\" value=".$row["perk_stab_change"]."></p>
            <p class=\"hide\"id=\"handlingchange3\" value=".$row["perk_handling_change"]."></p> 
            <p class=\"hide\"id=\"reloadchange3\" value=".$row["perk_reload_change"]."></p> 
            <p class=\"hide\"id=\"aachange3\" value=".$row["perk_AA_change"]."></p> 
            <p class=\"hide\"id=\"zoomchange3\" value=".$row["perk_zoom_change"]."></p> 
            <p class=\"hide\"id=\"recoilchange3\" value=".$row["perk_recoil_change"]."></p> 
            <p class=\"hide\"id=\"RPMchange3\" value=".$row["perk_RPM_change"]."></p> 
            <p class=\"hide\"id=\"drawchange3\" value=".$row["perk_draw_time_change"]."></p> 
            <p class=\"hide\"id=\"accuracychange3\" value=".$row["perk_accuracy_change"]."></p> 
            <p class=\"hide\"id=\"magchange3\" value=".$row["perk_mag_size_change"]."></p> 
            <p class=\"hide\"id=\"dmgchange3\" value=".$row["perk_dmg_buff"]."></p> 
            <p class=\"drowned_cost\"id=\"drownedchange3\" value=".$row["perk_drowned_cost"]."></p> 
            <p class=\"resel_cost\"id=\"reselchange3\" value=".$row["perk_res_element_cost"]."></p> 
            <p class=\"res_alloy_cost\"id=\"resalloychange3\" value=".$row["perk_res_alloy_cost"]."></p> 
            <p class=\"ascendant_alloy_cost\"id=\"ascendantchange3\" value=".$row["perk_ascendant_alloy_cost"]."></p> 
            <p class=\"glimmer_cost\"id=\"glimmerchange3\" value=".$row["perk_glimmer_cost"]."></p> 
            <p class=\"ecore_cost\"id=\"ecorechange3\" value=".$row["perk_e_core_cost"]."></p>";
            
        }array_push($records, $arrayadd);
        //$recordExport = array_map('trim', $records);
        echo json_encode($records);
        return $records;
    } else{
        echo "No records";
    }echo json_encode($records);
    return $records;
}

function getTrait1Stats(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

    $selected = $_POST['selectedTrait1'];
    
    $sql = "SELECT perk_impact_change, perk_range_change, perk_stab_change, perk_handling_change, perk_reload_change, perk_AA_change, perk_zoom_change, perk_recoil_change, perk_RPM_change, perk_draw_time_change, perk_accuracy_change, perk_mag_size_change, perk_dmg_buff, perk_drowned_cost, perk_res_element_cost, perk_res_alloy_cost, perk_ascendant_alloy_cost, perk_glimmer_cost, perk_e_core_cost from perks where perk_ID = $selected";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $records = array();
        while($row = $result->fetch_assoc()){
            
            $arrayadd = "<p class=\"hide\"id=\"impactchange4\" value=".$row["perk_impact_change"]."></p> 
            <p class=\"hide\"id=\"rangechange4\" value=".$row["perk_range_change"]."></p>
            <p class=\"hide\"id=\"stabilitychange4\" value=".$row["perk_stab_change"]."></p>
            <p class=\"hide\"id=\"handlingchange4\" value=".$row["perk_handling_change"]."></p> 
            <p class=\"hide\"id=\"reloadchange4\" value=".$row["perk_reload_change"]."></p> 
            <p class=\"hide\"id=\"aachange4\" value=".$row["perk_AA_change"]."></p> 
            <p class=\"hide\"id=\"zoomchange4\" value=".$row["perk_zoom_change"]."></p> 
            <p class=\"hide\"id=\"recoilchange4\" value=".$row["perk_recoil_change"]."></p> 
            <p class=\"hide\"id=\"RPMchange4\" value=".$row["perk_RPM_change"]."></p> 
            <p class=\"hide\"id=\"drawchange4\" value=".$row["perk_draw_time_change"]."></p> 
            <p class=\"hide\"id=\"accuracychange4\" value=".$row["perk_accuracy_change"]."></p> 
            <p class=\"hide\"id=\"magchange4\" value=".$row["perk_mag_size_change"]."></p> 
            <p class=\"hide\"id=\"dmgchange4\" value=".$row["perk_dmg_buff"]."></p> 
            <p class=\"drowned_cost\"id=\"drownedchange4\" value=".$row["perk_drowned_cost"]."></p> 
            <p class=\"resel_cost\"id=\"reselchange4\" value=".$row["perk_res_element_cost"]."></p> 
            <p class=\"res_alloy_cost\"id=\"resalloychange4\" value=".$row["perk_res_alloy_cost"]."></p> 
            <p class=\"ascendant_alloy_cost\"id=\"ascendantchange4\" value=".$row["perk_ascendant_alloy_cost"]."></p> 
            <p class=\"glimmer_cost\"id=\"glimmerchange4\" value=".$row["perk_glimmer_cost"]."></p> 
            <p class=\"ecore_cost\"id=\"ecorechange4\" value=".$row["perk_e_core_cost"]."></p>";
            
        }array_push($records, $arrayadd);
        //$recordExport = array_map('trim', $records);
        echo json_encode($records);
        return $records;
    } else{
        echo "No records";
    }echo json_encode($records);
    return $records;
}

function getTrait2Stats(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    // Create connection
    $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');

    $selected = $_POST['selectedTrait2'];
    
    $sql = "SELECT perk_impact_change, perk_range_change, perk_stab_change, perk_handling_change, perk_reload_change, perk_AA_change, perk_zoom_change, perk_recoil_change, perk_RPM_change, perk_draw_time_change, perk_accuracy_change, perk_mag_size_change, perk_dmg_buff, perk_drowned_cost, perk_res_element_cost, perk_res_alloy_cost, perk_ascendant_alloy_cost, perk_glimmer_cost, perk_e_core_cost from perks where perk_ID = $selected";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $records = array();
        while($row = $result->fetch_assoc()){
            
            $arrayadd = "<p class=\"hide\"id=\"impactchange5\" value=".$row["perk_impact_change"]."></p> 
            <p class=\"hide\"id=\"rangechange5\" value=".$row["perk_range_change"]."></p>
            <p class=\"hide\"id=\"stabilitychange5\" value=".$row["perk_stab_change"]."></p>
            <p class=\"hide\"id=\"handlingchange5\" value=".$row["perk_handling_change"]."></p> 
            <p class=\"hide\"id=\"reloadchange5\" value=".$row["perk_reload_change"]."></p> 
            <p class=\"hide\"id=\"aachange5\" value=".$row["perk_AA_change"]."></p> 
            <p class=\"hide\"id=\"zoomchange5\" value=".$row["perk_zoom_change"]."></p> 
            <p class=\"hide\"id=\"recoilchange5\" value=".$row["perk_recoil_change"]."></p> 
            <p class=\"hide\"id=\"RPMchange5\" value=".$row["perk_RPM_change"]."></p> 
            <p class=\"hide\"id=\"drawchange5\" value=".$row["perk_draw_time_change"]."></p> 
            <p class=\"hide\"id=\"accuracychange5\" value=".$row["perk_accuracy_change"]."></p> 
            <p class=\"hide\"id=\"magchange5\" value=".$row["perk_mag_size_change"]."></p> 
            <p class=\"hide\"id=\"dmgchange5\" value=".$row["perk_dmg_buff"]."></p> 
            <p class=\"drowned_cost\"id=\"drownedchange5\" value=".$row["perk_drowned_cost"]."></p> 
            <p class=\"resel_cost\"id=\"reselchange5\" value=".$row["perk_res_element_cost"]."></p> 
            <p class=\"res_alloy_cost\"id=\"resalloychange5\" value=".$row["perk_res_alloy_cost"]."></p> 
            <p class=\"ascendant_alloy_cost\"id=\"ascendantchange5\" value=".$row["perk_ascendant_alloy_cost"]."></p> 
            <p class=\"glimmer_cost\"id=\"glimmerchange5\" value=".$row["perk_glimmer_cost"]."></p> 
            <p class=\"ecore_cost\"id=\"ecorechange5\" value=".$row["perk_e_core_cost"]."></p>";
            
        }array_push($records, $arrayadd);
        //$recordExport = array_map('trim', $records);
        echo json_encode($records);
        return $records;
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