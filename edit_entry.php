<!-- redirect -->
<?php require_once "includes/redirect.php"?>

<!-- header -->
<?php require_once "includes/header.php"; ?>

<!-- sidebar -->
<?php require_once "includes/sidebar.php"; ?>

<?php

$entry = find_entry($db, $_GET["id"]);


//it verifies if the category exists and if it doesn't it redirects to the index.php file
if (!isset($entry["ID_ent"])){
	header("location: index.php");
}

?>

<!-- begin of main container -->
<div id="main">
	<h1>Edit entry</h1>
	<p>
		Edit <bold>"<?= ucwords($entry["title_ent"])?>"</bold> entry. Please, fill in all the spaces provided.
	</p>
	<form action="save_entry.php?edit=<?= $entry["ID_ent"]?>" method="POST">
		<label for="entry-name">Entry's Title: </label>
		<input type="text" name="entry-name" id="entry-name" placeholder="<?= ucwords($entry["title_ent"])?>">
		<?php echo isset($_SESSION["error"]) ? throw_error($_SESSION["error"], "title") : " " ; ?>

		<label for="entry-description">Entry's Description: </label>
		<textarea name="entry-description" id="entry-description" placeholder="<?=$entry["description_ent"]?>"></textarea>
		<?php echo isset($_SESSION["error"]) ? throw_error($_SESSION["error"], "description") : " " ; ?>

		<label for="entry-category">Entry's Category: </label>
		<select name="entry-category" id="entry-category">
			<?php 

			$categories = find_categories($db);

			if (!empty($categories)): 
			while ($category = mysqli_fetch_assoc($categories)) :
			?>

			<option value="<?= $category["ID_cat"] ?>" <?=$category["ID_cat"] == $entry["ID_cat"] ? "selected = 'selected'" : '' ?>>
				<?= $category["name_cat"]?>
			</option>

			<?php 

			endwhile;
			endif;
			?>
		</select>
		<?php echo isset($_SESSION["error"]) ? throw_error($_SESSION["error"], "category") : " " ; ?>

		<input type="submit" name="save-entry-submit" value="Update">
	</form>
	<?php delete_error_without_signing_out(); ?>
</div>
<!-- end of main container -->

<?php require_once "includes/footer.php";?>
