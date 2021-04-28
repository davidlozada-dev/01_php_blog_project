<!-- database connection -->
<?php require_once "db_connection.php"; ?>

<!-- helper-->
<?php require_once "includes/helper.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Video Game Blog</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css?v1.6">
</head>
<body>
	<!-- header -->

	<header id="header">
		<!-- logo -->
		<div id="logo">
			<a href="index.php">
				<h1>Video Game Blog</h1>
			</a>
		</div>

		<!-- menu -->
		<div id="menu">
			<nav>
				<ul>
					<li>
						<a href="index.php">Home</a>
					</li>
					
					<?php 
					
					$categories = find_categories($db);

						if (!empty($categories)) {
							while ($category = mysqli_fetch_assoc($categories)){

							echo "<li>" . "<a href='category.php?id=". $category['ID_cat'] ."'>" . ucwords($category['name_cat']) . "</a>" . "</li>";
							} 
						}
						
					?>

					<li>
						<a href="index.php">About Me</a>
					</li>
					<li>
						<a href="index.php">Contact</a>
					</li>
				</ul>
			</nav>
			<div class="clearfix"></div>
		</div>
	</header>

	<div id="container">
