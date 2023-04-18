<?php
session_start();
require "db_management_functionality.php";
$conn = DB_Connect();
if(isset($_POST['username']) && isset($_POST['password'])){

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

$username = validate($_POST['username']);
$password = validate($_POST['password']);

if(empty($username)) {
    echo "Username required";
    header ("Location: ../login.php?error=Username is required");
    exit();
}
else if(empty($password)) {
    echo "Password required";
    header ("Location: ../login.php?error=Password is required");
    exit();
}

$sql = "SELECT * FROM `logon` where account_username = '$username' AND account_password = '$password'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if($row['account_username'] === $username && $row['account_password'] === $password && $row['is_admin'] == 1) {
        echo "Logged In";
        echo "<br>";
        echo $username;
        echo "<br>";
        echo $password;
        $_SESSION['username'] = $row['account_username'];
        header("Location: ../management.php");
        exit();

    }
    else if($row['account_username'] === $username && $row['account_password'] === $password && $row['is_admin'] == 0){
        echo "Logged In";
        echo "<br>";
        echo $username;
        echo "<br>";
        echo $password;
        $_SESSION['username'] = $row['account_username'];
        header("Location: ../saved_weapons.php");
        exit();
    }
    else{
        header("Location: ../login.php?error=Incorrect Username or Password");
        exit();
    }
}
else{
    header("Location: ../login.php?error=Something went wrong. Try again later.");
    exit(); 
}

?>