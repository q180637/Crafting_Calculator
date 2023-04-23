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


if(isset($_POST['function'])){
    if($_POST['function'] == "save"){{
        saveBuild();
    }}
}

?>
