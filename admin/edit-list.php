
<?php

include('login-check.php');
include('../database.php');

// Query for specific table data
$statement = $db_connection->query(
    "SELECT * FROM GalleryPhoto"
);


?>

<!DOCTYPE html>
<html lang="en">
  <head>
  	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EOG Edit-List Data</title>
    <link rel="stylesheet" href="../_css/style.css">
  </head>

  <body>

    <header>
        <img src="../_images/logo.svg" alt="logo" >
        <h1>Eric's Orchid Photo Gallery</h1>
    </header>

    <nav>
      <ul>
        <li><a href="add.php">ADD DATA</a></li>
        <li><a href="logout.php">LOGOUT</a></li>
      </ul>
    </nav>

      <main>
          <form  enctype="multipart/form-data" id="editListForm" method="post" action="edit.php">
           <h3>Edit-List</h3>
            <div class="formElements">
              <table id="editListTable">
                  <tbody>
      <?php while($item = $statement->fetch(PDO::FETCH_ASSOC)): ?>
                    <tr>
                        <td class="tableData"><label for="title">Title:</label></td>
                        <td class="tableData"><?php echo $item['Title']; ?></td>
                    </tr>
                    <tr>
                        <td class="tableData"><label for="shortDescription">Description:</label></td>
                        <td class="tableData"><?php echo $item['Short_Description']; ?></td>
                    </tr>
                    <tr>
                        <td class="tableData"><label for="thumbnailImage">Image:</label></td>
                        <td class="tableData"><img src="../_uploads/<?php echo $item['Thumbnail_Image']; ?>" alt="<?php echo $item['Title']; ?>"></td>
                    </tr>
                    <tr>
                      <td class="tableData">&nbsp;</td>
                      <td class="tableData lastTd">
                        <a href="edit.php?id=<?php echo $item['ID']; ?>">CHOOSE</a>
                        <a href="delete.php?id=<?php echo $item['ID']; ?>" style='background:red; color: #fff;'>DELETE</a>
                      </td>
                    </tr>
        <?php endwhile; ?>
                  </tbody>
                </table>
         </div>   <!-- end .formElements -->
      </form>
    </main>

    <footer>
      <ul>
        <li><a href="add.php">ADD DATA</a></li>
        <li><a href="logout.php">LOGOUT</a></li>
      </ul>
    </footer>

  </body>
</html>
