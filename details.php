
<?php


include('database.php');

  // Prepare a SELECT SQL statement
$statement = $db_connection->prepare(
	"SELECT * FROM GalleryPhoto WHERE ID=?"
);

// Replace ? with ID of item
$statement->bindParam(1, $_GET['id'], PDO::PARAM_INT);

// Execute the SELECT statement
$statement->execute();


?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>EOG Details</title>
		<link rel="stylesheet" href="_css/style.css">
	</head>

	<body>

		<header>
	    	<img src="_images/logo.svg" alt="logo" >
	    	<h1>Eric's Orchid Photo Gallery</h1>
		</header>

		<div class="large_container container">
			<div class="large_content content clearfix">

<?php while($item = $statement->fetch(PDO::FETCH_ASSOC)): ?>

				<div class="large_photo-container">
					<div class="large_photo">
						<div class="large_photo-description large_back">
							<h3><?php echo $item['Title']; ?></h3>
							<p><?php echo $item['Short_Description']; ?></p>
					</div>	<!--  end large_photo-description back -->
				  		<img class="large_front" src="_uploads/<?php echo $item['Thumbnail_Image']; ?>" alt="<?php echo $item['Title']; ?>" >
					</div>	<!--  end large_photo-->
				</div>	<!--  end large_photo-container -->

<?php endwhile; ?>

			</div>	<!--  end content clearfix -->
		</div>	<!--  end container -->

		<nav>
			<ul>
				<li style="margin: 3em 0 4em;"><a href="index.php">GALLERY</a></li>
			</ul>
		</nav>
</body>
</html>
