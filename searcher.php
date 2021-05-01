<!-- header -->
<?php require_once "includes/header.php";?>

<!-- sidebar -->
<?php require_once "includes/sidebar.php";?>


<?php

if (!isset($_POST["search"])){
	header("location: index.php");
}

?>

<!-- main container -->
<div id="main">

	<h1>Results</h1>

	<?php 

	$entries = search_for_entries($db, $_POST["search"]);

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

