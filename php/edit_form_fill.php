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

    // var_dump($row);

    // echo
    // "<html>
    // <body>
    // <p class = 'wepInfo' id='$weapon_name'>$weapon_name</p>
    // <p class = 'wepInfo' id='$weapon_type'>$weapon_type</p>
    // <p class = 'wepInfo' id='$weapon_source'>$weapon_source</p>
    // <p class = 'wepInfo' id='$pattern_count'>$pattern_count</p>
    // <p class = 'wepInfo' id='$base_impact'>$base_impact</p>
    // <p class = 'wepInfo' id='$base_range'>$base_range</p>
    // <p class = 'wepInfo' id='$base_stability'>$base_stability</p>
    // <p class = 'wepInfo' id='$base_handling'>$base_handling</p>
    // <p class = 'wepInfo' id='$base_reload'>$base_reload</p>
    // <p class = 'wepInfo' id='$base_AA'>$base_AA</p>
    // <p class = 'wepInfo' id='$base_zoom'>$base_zoom</p>
    // <p class = 'wepInfo' id='$base_recoil'>$base_recoil</p>
    // <p class = 'wepInfo' id='$base_RPM'>$base_RPM</p>
    // <p class = 'wepInfo' id='$base_draw'>$base_draw</p>
    // <p class = 'wepInfo' id='$base_accuracy'>$base_accuracy</p>
    // <p class = 'wepInfo' id='$base_mag'>$base_mag</p>
    // <p class = 'wepInfo' id='$icon_file_path'>$icon_file_path</p>
    // </body>
    // </html>
    // ";

    echo json_encode($row);

    return $result;
}

mysqli_close($conn);
}

if(isset($_POST['function']))
    {if($_POST['function'] == 'loadWeapons'){
        loadWeaponForm();
    }}

?>