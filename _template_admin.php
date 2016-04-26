<!DOCTYPE html>
<html lang="en">
  <head>
  	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EOG Template</title>
    <link rel="stylesheet" href="../_css/style.css">
  </head>

      <body>

        <header>
            <img src="../_images/logo.svg" alt="logo" >
            <h1>Eric's Orchid Photo Gallery</h1>
        </header>

      <main>
          <form  enctype="multipart/form-data"  method="post" action="your-Own-Action-File">
           <h3>your-own-text</h3>
            <div class="formElements">
              <table>
                  <tbody>
                    <tr>
                        <td>
                          <input type="hidden" name="your-Own-Input-Name" >
                        </td>
                        <td class="tableData"><label>&nbsp;</label></td>
                    </tr>
                    <tr>
                        <td class="tableData"><label>&nbsp;</label></td>
                        <td class="tableData"><input type="text" name="your-Own-Input-Name" size="35" required></td>
                    </tr>
                    <tr>
                        <td class="tableData"><label>&nbsp;</label></td>
                        <td class="tableData"><textarea cols="30" rows="10" required></textarea></td>
                    </tr>
                    <tr>
                        <td class="tableData"><label>&nbsp;</label></td>
                        <td class="tableData"><input type="file" name="your-Own-Input-Name" required></td>
                    </tr>
                </tbody>
              </table>
                  <input type="submit">
           </div>   <!-- end .formElements -->
        </form>
      </main>

      <nav>
        <ul>
          <li><a href="#">your-own-page-name</a></li>
          <li><a href="#">your-own-page-name</a></li>
        </ul>
      </nav>

    </body>
</html>
