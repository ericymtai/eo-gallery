<?php

ob_start();
include('../database.php');

$password = md5('password');

// Query for specific table data
$statement = $db_connection->query(
    "SELECT * FROM AdminUser"
);

// $item = $statement->fetch(PDO::FETCH_ASSOC);
while($item = $statement->fetch(PDO::FETCH_ASSOC)):

if ($_POST['userName'] == $item['UserName'] && $password == $item['Password']  ) {

  session_start();
  $_SESSION['flag'] = TRUE;

  // Redirect to index
  header('location:select.php');
  exit();
}
  endwhile;
header('location:index.php');

?>
