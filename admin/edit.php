
<?php

include('login-check.php');
include('../database.php');
// Query for specific orchid photo
$statement = $db_connection->prepare(
    "SELECT * FROM GalleryPhoto WHERE ID=?"
);

// Replace ? with the actual ID
$statement->bindParam(1, $_GET['id'], PDO::PARAM_INT);
// var_dump($_GET['id']);
// Run the SQL query
$statement->execute();

$item = $statement->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
  	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EOG Edit Data</title>
    <link rel="stylesheet" href="../_css/style.css">
  </head>

      <body>

        <header>
            <img src="../_images/logo.svg" alt="logo" >
            <h1>Eric's Orchid Photo Gallery</h1>
        </header>

      <main>
          <form  enctype="multipart/form-data" id="editForm" method="post" action="edit-action.php">
           <h3>Edit Data</h3>
            <div class="formElements">
              <table id="editTable">
                  <tbody>
                    <tr>
                        <td>
                          <input name="ID" type="hidden"  value="<?php echo $item['ID']; ?>">
                        </td>
                        <td class="tableData">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="tableData"><label for="title">Title:</label></td>
                        <td class="tableData"><input type="text" name="title" size="35" value="<?php echo $item['Title']; ?>"></td>
                    </tr>
                    <tr>
                        <td class="tableData"><label for="shortDescription">Short Description:</label></td>
                        <td class="tableData"><textarea type="text" name="shortDescription"><?php echo $item['Short_Description']; ?></textarea></td>
                    </tr>
                    <tr>
                        <td class="tableData"><label for="thumbnailImage">Thumbnail Image:</label></td>
                        <td class="tableData"><input type="file" name="thumbnailImage" id="thumbnailImage" required></td>
                    </tr>
                </tbody>
              </table>
                  <input type="submit" value="UPDATE">
           </div>   <!-- end .formElements -->
        </form>
      </main>

      <nav>
        <ul>
          <li><a href="add.php">ADD DATA</a></li>
          <li><a href="logout.php">LOGOUT</a></li>
        </ul>
      </nav>

    </body>
</html>
