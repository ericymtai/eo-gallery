<?php
include('../database.php');

// Query for specific Database and create a table
$db_connection->query(
          "CREATE TABLE GalleryPhoto (
              ID INT AUTO_INCREMENT,
              Title VARCHAR(255),
              Short_Description TEXT,
              Thumbnail_Image VARCHAR(255),
              PRIMARY KEY(ID)
            )"
          );
$db_connection->query(
            "CREATE TABLE AdminUser (
                ID INT AUTO_INCREMENT,
                UserName VARCHAR(255),
                Password VARCHAR(255),
                PRIMARY KEY(ID)
              )"
          );
$db_connection->query(
            "INSERT INTO AdminUser(UserName, Password) VALUES('admin', md5('password'))"
          );

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EOG Create Table</title>
	<link rel="stylesheet" href="../_css/style.css">
</head>
<body>


	<header>
    	<img src="../_images/logo.svg" alt="logo" >
    	<h1>Eric's Orchid Photo Gallery</h1>
	</header>


  <main>
    <h2>Table had been created</h2>
  </main>

	<nav>
		<ul>
			<li><a href="index.php">ADMIN USER - LOG IN</a></li>
		</ul>
	</nav>


</body>
</html>
