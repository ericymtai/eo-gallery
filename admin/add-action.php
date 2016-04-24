<?php

include('login-check.php');
include('../database.php');

//check if thumnail image submitted
if (!empty($_FILES['thumbnailImage']['name'])) {
    // move uploaded image from temp folder into uploads
    move_uploaded_file(
        $_FILES['thumbnailImage']['tmp_name'], '../_uploads/' . $_FILES['thumbnailImage']['name']
    );
}

// Prepare an INSERT statement with posted data
$statement = $db_connection->prepare(
    "INSERT INTO GalleryPhoto(Title, Short_Description, Thumbnail_Image) VALUES(?, ?, ?)"
);

// Replace ?s with actual values
$statement->bindParam(1, $_POST['title']);
$statement->bindParam(2, $_POST['shortDescription']);
$statement->bindParam(3, $_FILES['thumbnailImage']['name']);

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
      <h2>New Photo Data Added</h2>
    </main>

    <nav>
      <ul>
        <li><a href="edit-list.php">EDIT DATA</a></li>
        <li><a href="logout.php">LOGOUT</a></li>
      </ul>
    </nav>

  </body>
</html>
