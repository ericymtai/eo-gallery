<?php
session_start();
// Set flag in session if username and password are incorrect


if ($_SESSION['flag'] != TRUE) {
    header('location:index.php');
    exit();
}


?>
