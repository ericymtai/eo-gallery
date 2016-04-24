<?php

include('login-check.php');

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EOG SignUp Admin</title>
	<link rel="stylesheet" href="../_css/style.css">
</head>
<body>

	<header>
    	<img src="../_images/logo.svg" alt="logo" >
    	<h1>Eric's Orchid Photo Gallery</h1>
	</header>

	<main>
      <form id="signUpForm" method="post" action="signup-action.php">
       <h3>Sign-Up Admin User</h3>
        <div class="formElements">
        	<table id="signUpTable">
                    <tr>
                        <td class="tableData"><label for="userName">User Name:</label></td>
                        <td class="tableData"><input type="text" name="userName" id="userName" size="35" placeholder="New Admin User: " autofocus  required ></td>
                    </tr>
                    <tr>
                        <td class="tableData"><label for="password">Password:</label></td>
                        <td class="tableData"><input type="password" name="password" id="password" placeholder="Set Password: " required></td>
                    </tr>
										<tr>
                        <td class="tableData"><label for="confirmPassword">Confirm Password:</label></td>
                        <td class="tableData"><input type="password" name="confirmPassword" id="confirmPassword" placeholder=" Re-type Password: " required></td>
                    </tr>
            </table>

            <input type="submit" value="ADD NEW ADMIN USER">
         </div>   <!-- end .formElements -->
      </form>
    </main>

		<nav>
			<ul>
				<li><a href="edit-list.php">ADD NEW DATA</a></li>
				<li><a href="edit-list.php">EDIT DATA</a></li>
				<li><a href="logout.php">LOGOUT</a></li>
			</ul>
		</nav>

	</body>
</html>
