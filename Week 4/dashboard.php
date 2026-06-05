<?php
session_start();

if(!isset($_SESSION['user'])){
    echo "Access denied. Please login first.";
    exit();
}

echo "Welcome to Dashboard, " . $_SESSION['user'];
?>
