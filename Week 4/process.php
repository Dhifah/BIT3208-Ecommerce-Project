<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if($username == "admin" && $password == "1234"){

    $_SESSION['user'] = $username;

    echo "Login Successful. Welcome " . $username;

} else {
    echo "Invalid Login Details";
}
?>