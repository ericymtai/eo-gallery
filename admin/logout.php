<?php
session_start();
$_SESSION['flag'] = FALSE;

// Redirect to login
header('location:index.php');

?>
