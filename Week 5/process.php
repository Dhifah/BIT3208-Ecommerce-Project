<?php
session_start();
include "db.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0){

    $_SESSION['user'] = $username;

    echo "Login Successful. Welcome " . $username;

} else {
    echo "Invalid Login Details";
}
?>