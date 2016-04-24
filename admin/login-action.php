<?php

ob_start();
include('login-check.php');
include('../database.php');

$password = md5('password');

// Query for specific table data
$statement = $db_connection->query(
    "SELECT * FROM AdminUser"
);

// Loop through each item
while($item = $statement->fetch(PDO::FETCH_ASSOC)):

// Check if the user name and password are both matched
if ($_POST['userName'] == $item['UserName'] && $password == $item['Password']  ) {

  $_SESSION['flag'] = TRUE;

  // Redirect to select page if matched
  header('location:select.php');
  exit();
}
  endwhile;

  // Redirect to index page if not matched
header('location:index.php');

?>
