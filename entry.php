<!-- header -->
<?php require_once "includes/header.php";?>

<!-- sidebar -->
<?php require_once "includes/sidebar.php";?>


<?php

$entry = find_entry($db, $_GET["id"]);


//it verifies if the category exists and if it doesn't it redirects to the index.php file
if (!isset($entry["ID_ent"])){
	header("location: index.php");
}

?>

	<!-- main container -->
	<div id="main">
		<h1><?= ucwords($entry["title_ent"])?></h1>

		<a href="category.php?id=<?=$entry["ID_cat"]?>">
			<h2><?= ucwords($entry["name_cat"])?></h2>
		</a>

		<h4><?=date('F j, Y', strtotime(($entry['date_ent'])))?></h4>
		
		<p>
			<?= ucwords($entry["description_ent"])?>
		</p>
	</div>
	<!-- end of main container -->
	
<!-- footer -->
<?php require_once "includes/footer.php"?>

