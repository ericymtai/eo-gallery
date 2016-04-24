<?php

include('login-check.php');

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EOG Add Data</title>
	<link rel="stylesheet" href="../_css/style.css">
</head>
<body>

	<header>
    	<img src="../_images/logo.svg" alt="logo" >
    	<h1>Eric's Orchid Photo Gallery</h1>
	</header>

	<main>
      <form  enctype="multipart/form-data" id="addForm" method="post" action="add-action.php">
       <h3>Add New Data</h3>
        <div class="formElements">
        	<table id="addInTable">
                    <tr>
                        <td class="tableData"><label for="title">Title:</label></td>
                        <td class="tableData"><input type="text" name="title" id="title" size="35" placeholder="New title: " autofocus  required ></td>
                    </tr>
                    <tr>
                        <td class="tableData"><label for="shortDescription">Short Description:</label></td>
                        <td class="tableData"><textarea type="text" name="shortDescription" id="shortDescription" placeholder="No more than 30 words: " required></textarea></td>
                    </tr>
										<tr>
                        <td class="tableData"><label for="thumbnailImage">Thumbnail Image:</label></td>
                        <td class="tableData"><input type="file" name="thumbnailImage" id="thumbnailImage" required></td>
                    </tr>
            </table>

            <input type="submit" value="ADD NEW DATA">
         </div>   <!-- end .formElements -->
      </form>
    </main>

		<nav>
			<ul>
				<li><a href="edit-list.php">EDIT DATA</a></li>
				<li><a href="logout.php">LOGOUT</a></li>
			</ul>
		</nav>

	</body>
</html>
