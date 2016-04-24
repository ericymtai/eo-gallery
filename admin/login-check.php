<?php

// Set flag in session if username and password are incorrect
session_start();

if ($_SESSION['flag'] != TRUE) {
    header('location:index.php');
    exit();
}


?>
