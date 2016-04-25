<?php
include('login-check.php');
include('../database.php');

// Query for specific table data
$statement = $db_connection->query(
    "SELECT * FROM AdminUser"
);


?>

<!DOCTYPE html>
<html lang="en">
  <head>
  	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EOG Delete Admin User List</title>
    <link rel="stylesheet" href="../_css/style.css">
  </head>

  <body>

    <header>
        <img src="../_images/logo.svg" alt="logo" >
        <h1>Eric's Orchid Photo Gallery</h1>
    </header>

      <main>
          <form id="deleteUserListForm" method="post" action="delete-user.php">
           <h3>Delete Admin User List</h3>
            <div class="formElements">
              <table id="deleteUserListTable">
                  <tbody>
      <?php while($item = $statement->fetch(PDO::FETCH_ASSOC)): ?>
                    <tr>
                        <td class="tableData"><label>User Name:</label></td>
                        <td class="tableData"><?php echo $item['UserName']; ?></td>
                    </tr>
                    <tr>
                      <td class="tableData">&nbsp;</td>
                      <td class="tableData deleteLastTd">
                        <a href="delete-user.php?id=<?php echo $item['ID']; ?>" style='background:red; color: #fff;'>DELETE</a>
                      </td>
                    </tr>
        <?php endwhile; ?>
                  </tbody>
                </table>
         </div>   <!-- end .formElements -->
      </form>
    </main>

    <nav >
      <ul>
        <li><a href="add.php">ADD DATA</a></li>
        <li><a href="edit-list.php">EDIT DATA</a></li>
        <li><a href="logout.php">LOGOUT</a></li>
      </ul>
    </nav>

  </body>
</html>
