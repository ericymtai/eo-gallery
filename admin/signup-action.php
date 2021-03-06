<?php

// include('login-check.php');
include('../database.php');

// $password = md5($_POST['password']);

$options = [
  'cost' => 8,
  'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
];
// $password = password_hash($_POST['password'], PASSWORD_BCRYPT, $options );

// Prepare an INSERT statement with POSTED data
$statement = $db_connection->prepare(
    "INSERT INTO AdminUser(userName, Password) VALUES(?, ?)"
);

// Replace ?s with actual values
$statement->bindParam(1, $_POST['userName']);
$statement->bindParam(2, password_hash($_POST['password'], PASSWORD_BCRYPT, $options ));

// Execute the INSERT statement
$statement->execute();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
  	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<title>EOG Add New Data</title>
  	<link rel="stylesheet" href="../_css/style.css">
  </head>
  <body>

    <header>
        <img src="../_images/logo.svg" alt="logo" >
        <h1>Eric's Orchid Photo Gallery</h1>
    </header>

    <main>
      <h2>New Admin User added</h2>
    </main>

    <nav>
      <ul>
        <li><a href="index.php">LOGIN</a></li>
      </ul>
    </nav>


  </body>
</html>
