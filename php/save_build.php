<?php
require "db_management_functionality.php";
function saveBuild(){
    $conn = DB_Connect();

    $user_ID = 2;
    $weapon = $_POST['weapon'];
    $frame = $_POST['frame'];
    $barrel = $_POST['barrel'];
    $mag = $_POST['mag'];
    $trait1 = $_POST['trait1'];
    $trait2 = $_POST['trait2'];

    $sql = "INSERT INTO usersaves(user_ID, saved_weapon_ID, saved_frame_ID, saved_barrel_ID, saved_mag_ID, saved_trait1_ID, saved_trait2_ID) VALUES('$user_ID', '$weapon','$frame', '$barrel', '$mag', '$trait1', '$trait2')";

    if(mysqli_query($conn, $sql)){
        echo "<h3 class=\"success\">Saved build added to database</h3>";
    }
    else{
        echo "Error: Record failed to add. $sql. "
        .mysqli_error($conn);
    }
    
    mysqli_close($conn);
}

function getSavesList(){
    $conn = DB_Connect();
    $user_ID = 2;
    $sql = "SELECT usersaves.save_ID, usersaves.saved_weapon_ID, usersaves.saved_trait1_ID, weapons.weapon_name, weapons.weapon_ID, perks.perk_ID, perks.perk_name FROM usersaves  INNER JOIN weapons on usersaves.saved_weapon_ID = weapons.weapon_ID INNER JOIN perks on usersaves.saved_trait1_ID = perks.perk_ID where user_ID = $user_ID";

    
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $records = array();
        while($row = $result->fetch_assoc()){
            $arrayadd = "<option id=".$row["save_ID"]."  onclick=\"loadSaveToForm(".$row["save_ID"].")\" value=".$row["weapon_name"].">".$row["weapon_name"].$row["perk_name"]."</option>";
            array_push($records, $arrayadd);
        }echo json_encode($records);
        return $records;
    } else{
        echo "No records";
    }
    
    mysqli_close($conn);
}


if(isset($_POST['function'])){
    if($_POST['function'] == "save"){
        saveBuild();
    }
    if($_POST['function'] == "getSavesList"){
        getSavesList();
    }
}

?>
