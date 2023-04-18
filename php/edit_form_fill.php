<?php
if(isset($_POST['functionName']))
    {if($_POST['functionName'] == 'weapons') 
        {function loadWeaponForm(){
                // header('Content-Type: application/json');
            
                $servername = "localhost";
                $username = "root";
                $password = "";
            
                $selected = $_REQUEST['recordList'];
            
                // Create connection
                $conn = new mysqli($servername, $username, $password, 'db_calculator_tool');
            
                $sql = "SELECT * FROM weapons";
                $result = $conn->query($sql);

                if($result->num_rows > 0){
                    $row = $result ->fetch_assoc();

                    $weapon_ID = $result['weapon_ID'];
                    $weapon_name = $result['weapon_name'];
                    $weapon_type = $result['weapon_type'];
                    $weapon_source = $result['weapon_source'];
                    $pattern_count = $result['pattern_count'];
                    $base_impact = $result['base_impact'];
                    $base_range = $result['base_range'];
                    $base_stability = $result['base_stability'];
                    $base_handling = $result['base_handling'];
                    $base_reload = $result['base_reload'];
                    $basvisibilitye_AA = $result['base_AA'];
                    $base_zoom = $result['base_zoom'];
                    $base_recoil = $result['base_recoil'];
                    $base_RPM = $result['base_RPM'];
                    $base_draw = $result['base_draw'];
                    $base_accuracy = $result['base_accuracy'];
                    $base_mag = $result['base_mag'];
                    $icon_file_path = $result['icon_file_path'];

                    echo
                    "<p style='visibility:hidden;' id='$weapon_name'>$weapon_name</p>
                    <p style='visibility:hidden;' id='$weapon_type'>$weapon_type</p>
                    <p style='visibility:hidden;' id='$weapon_source'>$weapon_source</p>
                    <p style='visibility:hidden;' id='$pattern_count'>$pattern_count</p>
                    <p style='visibility:hidden;' id='$base_impact'>$base_impact</p>
                    <p style='visibility:hidden;' id='$base_range'>$base_range</p>
                    <p style='visibility:hidden;' id='$base_stability'>$base_stability</p>
                    <p style='visibility:hidden;' id='$base_handling'>$base_handling</p>
                    <p style='visibility:hidden;' id='$base_reload'>$base_reload</p>
                    <p style='visibility:hidden;' id='$base_AA'>$base_AA</p>
                    <p style='visibility:hidden;' id='$base_zoom'>$base_zoom</p>
                    <p style='visibility:hidden;' id='$base_recoil'>$base_recoil</p>
                    <p style='visibility:hidden;' id='$base_RPM'>$base_RPM</p>
                    <p style='visibility:hidden;' id='$base_draw'>$base_draw</p>
                    <p style='visibility:hidden;' id='$base_accuracy'>$base_accuracy</p>
                    <p style='visibility:hidden;' id='$base_mag'>$base_mag</p>
                    <p style='visibility:hidden;' id='$icon_file_path'>$icon_file_path</p>
                    ";
                }
            
                var_dump($sql);
                
                echo json_encode(array($result));
            
                mysqli_close($conn);
            }
        }
    }
?>