<?php
function DB_connect(){


    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    else{
    echo "Connected successfully <br>";
}

return $conn;
}