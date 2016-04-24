
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EOG Log in</title>
	<link rel="stylesheet" href="../_css/style.css">
</head>
<body>


	<header>
    	<img src="../_images/logo.svg" alt="logo" >
    	<h1>Eric's Orchid Photo Gallery</h1>
	</header>

	<main>
      <form  id="logInForm" method="post" action="login-action.php">
       <h3>Admin User - LOG IN</h3>
        <div class="formElements">
        	<table id="logInTable">
                    <tr>
                        <td class="tableData"><label for="userName">User Name:</label></td>
                        <td class="tableData"><input type="text" name="userName" id="userName" size="35" placeholder="Your User Name: " autofocus  required ></td>
                    </tr>
                    <tr>
                        <td class="tableData"><label for="password">Password:</label></td>
                        <td class="tableData"><input type="password" name="password" id="password" required></td>
                    </tr>
            </table>

            <input type="submit" value="SUBMIT">
         </div>   <!-- end .formElements -->
      </form>
    </main>

</body>
</html>
