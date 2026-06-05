<?php

$username = $_POST['username'];
$password = $_POST['password'];

if($username == "" || $password == ""){
    echo "All fields are required";
}
else if(strlen($password) < 6){
    echo "Password too weak";
}
else{
    echo "Welcome " . $username;
}

?>