<?php

include('database.php');

// Query for specific orchid photo
$statement = $db_connection->query(
    "SELECT * FROM GalleryPhoto"
);

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EO Gallery</title>
	<link rel="stylesheet" href="_css/style.css">
</head>
<body>

	<header>
    	<img src="_images/logo.svg" alt="logo" >
    	<h1>Eric's Orchid Photo Gallery</h1>
	</header>

	<div class="container">

			<div class="content clearfix">

<?php while($item = $statement->fetch(PDO::FETCH_ASSOC)): ?>

				<div class="photo-container">
          <a href="details.php?id=<?php echo $item['ID']; ?>">
					<div class="photo">
				  		<img id="displayPicture" class="front" src="_uploads/<?php echo $item['Thumbnail_Image']; ?>" alt="<?php echo $item['Title']; ?>" >
							<div class="photo-description back">
					  		<h3><?php echo $item['Title']; ?></h3>
					  		<p><?php echo $item['Short_Description']; ?></p>
						  </div>	<!--  end photo-description back -->
					</div>	<!--  end photo-->
          </a>
				</div>	<!--  end photo-container -->

<?php endwhile; ?>

			</div>	<!--  end content clearfix -->
		</div>	<!--  end container -->

    <nav>
			<ul>
				<li style="margin: 3em 0 4em;"><a href="admin/index.php">ADMIN USER</a></li>
			</ul>
		</nav>


</body>
</html>
