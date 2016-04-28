<?php

ob_start();
include('../database.php');

// $password = md5($_POST['password']);
// $a = $_POST['password'];
// $options = [
//   'cost' => 11,
//   'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
// ];
// $password = password_hash($_POST['password'] , PASSWORD_DEFAULT, $options);

// $hash = password_hash('password', PASSWORD_DEFAULT);
// $password = password_verify($a, $hash);

// password_verify('password', $item['Password'])
// Query for specific table data
$statement = $db_connection->query(
    'SELECT * FROM AdminUser'
);
// var_dump($_POST['password']);
// $item = $statement->fetch(PDO::FETCH_ASSOC);
while($item = $statement->fetch(PDO::FETCH_ASSOC)):
// var_dump($item['Password']);

if ($_POST['userName'] == $item['UserName'] &&  password_verify($_POST['password'], $item['Password'] )) {
var_dump(password_verify(!$_POST['password'], $item['Password'] ));

session_start();

  $_SESSION['flag'] = TRUE;

  // Redirect to index
  header('location:select.php');
  exit();
}
  endwhile;
header('location:index.php');

?>
