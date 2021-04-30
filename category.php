<!-- header -->
<?php require_once "includes/header.php";?>

<!-- sidebar -->
<?php require_once "includes/sidebar.php";?>


<?php

$category = find_category($db, $_GET["id"]);

//it verifies if the category exists and if it doesn't it redirects to the index.php file
if (!isset($category["ID_cat"])){
	header("location: index.php");
}

?>

	<!-- main container -->
	<div id="main">

		

		<h1><?= ucwords($category["name_cat"])?> entries</h1>

		<?php 

		$entries = find_category_entries($_GET["id"]);

			if (!empty($entries)){
				while ($entry = mysqli_fetch_assoc($entries)){

				echo  "<article class='entry'>"
					. "<a href='entry.php?id=" . $entry["ID_ent"] . "'>" 
					. "<h2>" . ucwords($entry['title_ent']) . "</h2>"
					. "<span class='category-date'>"
					. ucwords($entry['name_cat'])	
					. " | "
					. date('F j, Y', strtotime(($entry['date_ent'])))
					. "</span>"
					. "<p>"
					. substr($entry['description_ent'], 0, 180) . "..."
					. "</p>"
					. "</a>"
					. "</article>";
				} 
			}else{
				echo "<h3 id='no-entries'> Sorry, there are no entries for this category...</h3>";
			}	
		?>
	</div>
	<!-- end of main container -->
	
<!-- footer -->
<?php require_once "includes/footer.php"?>

