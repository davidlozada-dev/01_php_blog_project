<!-- header -->
<?php require_once "includes/header.php";?>

<!-- sidebar -->
<?php require_once "includes/sidebar.php";?>

	<!-- main container -->
	<div id="main">
			<h1>Last entries</h1>

				<?php 

					$entries = find_last_entries();

						if (!empty($entries)) {
							while ($entry = mysqli_fetch_assoc($entries)){

							echo  "<article class='entry'>" 
								. "<h2>" . ucwords($entry['title_ent']) . "</h2>"
								. "<span class='category-date'>"
								. ucwords($entry['name_cat'])	
								. " | "
								. date('F j, Y', strtotime(($entry['date_ent'])))
								. "</span>"
								. "<p>"
								. substr($entry['description_ent'], 0, 180) . "..."
								. "</p>"
								. "</article>";
							} 
						}
						
				?>

		
			<div id="see-all">
				<a href="">See all entries</a>
			</div>
	</div>
	<!-- end of main container -->

<!-- footer -->
<?php require_once "includes/footer.php"?>

