<?php

include('login-check.php');
include('../database.php');

// Prepare an DELETE SQL statement
$statement = $db_connection->prepare(
    "DELETE  FROM  GalleryPhoto WHERE ID=?"
);

// Replace ?s
$statement->bindParam(1, $_POST['ID'], PDO::PARAM_INT);

// Execute the DELETE statement
$statement->execute();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EOG Delete Data</title>
	<link rel="stylesheet" href="../_css/style.css">
</head>
    <body>

      <header>
          <img src="../_images/logo.svg" alt="logo" >
          <h1>Eric's Orchid Photo Gallery</h1>
      </header>

      <main>
        <h2>Data Deleted</h2>
      </main>

      <nav>
        <ul>
          <li><a href="add.php">ADD DATA</a></li>
          <li><a href="edit-list.php">EDIT DATA</a></li>
          <li><a href="logout.php">LOGOUT</a></li>
        </ul>
      </nav>


    </body>
</html>
