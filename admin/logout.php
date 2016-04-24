<?php

session_start();
$_SESSION['flag'] = FALSE;

// Redirect to login page
header('location:index.php');

?>
