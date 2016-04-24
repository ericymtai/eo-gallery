
<?php

include('login-check.php');
include('../database.php');

// Prepare a SELECT SQL statement with POSTED data
$statement = $db_connection->prepare(
    "SELECT * FROM GalleryPhoto WHERE ID=?"
);

// Replace ? with the actual ID
$statement->bindParam(1, $_GET['id'], PDO::PARAM_INT);

// Execute the SELECT statement
$statement->execute();

$item = $statement->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EOG Delete Data</title>
  <link rel="stylesheet" href="../_css/style.css">
</head>

<header>
    <img src="../_images/logo.svg" alt="logo" >
    <h1>Eric's Orchid Photo Gallery</h1>
</header>

    <body>

      <main>
          <form id="deleteForm" method="post" action="delete-action.php">
           <h3>Delete Data</h3>
            <div class="formElements">
              <table id="deleteTable">
                  <tbody>
                    <tr>
                        <td>
                          <input type="hidden" name="ID" value="<?php echo $item['ID']; ?>">
                        </td>
                        <td class="tableData">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="tableData"><label>Title:</label></td>
                        <td class="tableData"><?php echo $item['Title']; ?></td>
                    </tr>
                    <tr>
                        <td class="tableData"><label>Description:</label></td>
                        <td class="tableData"><?php echo $item['Short_Description']; ?>"></td>
                    </tr>
                    <tr>
                        <td class="tableData"><label>Image:</label></td>
                        <td class="tableData"><img src="../_uploads/<?php echo $item['Thumbnail_Image']; ?>" alt="<?php echo $item['Title']; ?>"></td>
                    </tr>
                  </tbody>
                </table>
                  <input type="submit" value="CONFIRM DELETE">
         </div>   <!-- end .formElements -->
      </form>
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
