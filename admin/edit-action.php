<?php
include('login-check.php');
include('../database.php');

// Prepare an UPDATE SQL statement with posted data
$statement = $db_connection->prepare(
    "UPDATE GalleryPhoto SET Title=?, Short_Description=? WHERE ID=?"
);
// Replace ?s
$statement->bindParam(1, $_POST['title']);
$statement->bindParam(2, $_POST['shortDescription']);
$statement->bindParam(3, $_POST['ID'], PDO::PARAM_INT);

// Execute the UPDATE statement
$statement->execute();

// Update thumbnail
if (!empty($_FILES['thumbnailImage']['name'])){

    // Move file from temp location
    move_uploaded_file (
        $_FILES['thumbnailImage']['tmp_name'],
        '../_uploads/' . $_FILES['thumbnailImage']['name']
    );
}

// Update filename in the database
$statement = $db_connection->prepare(
    "UPDATE GalleryPhoto SET Thumbnail_Image=? WHERE ID=?"
);

// Replace those ?'s
$statement -> bindParam(1, $_FILES['thumbnailImage']['name']);
$statement -> bindParam(2, $_POST['ID'], PDO::PARAM_INT);

// Excaute!
$statement->execute();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<title>EOG Update Data</title>
    	<link rel="stylesheet" href="../_css/style.css">
    </head>
    <body>
      <header>
        <img src="../_images/logo.svg" alt="logo" >
        <h1>Eric's Orchid Photo Gallery</h1>
      </header>

      <main>
        <h2>New Data Updated</h2>
      </main>

      <nav>
        <ul>
          <li><a href="select.php">OPTIONS</a></li>
          <li><a href="logout.php">LOGOUT</a></li>
        </ul>
      </nav>

    </body>
</html>
