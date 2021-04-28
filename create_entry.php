<!-- redirect -->
<?php require_once "includes/redirect.php"?>

<!-- header -->
<?php require_once "includes/header.php"; ?>

<!-- sidebar -->
<?php require_once "includes/sidebar.php"; ?>

<!-- begin of main container -->
<div id="main">
	<h1>Create entry</h1>
	<p>
		Add a new entry.
	</p>
	<form action="save_entry.php" method="POST">
		<label for="entry-name">Entry's Title: </label>
		<input type="text" name="entry-name" id="entry-name">
		<?php echo isset($_SESSION["error"]) ? throw_error($_SESSION["error"], "title") : " " ; ?>

		<label for="entry-description">Entry's Description: </label>
		<textarea name="entry-description" id="entry-description"></textarea>
		<?php echo isset($_SESSION["error"]) ? throw_error($_SESSION["error"], "description") : " " ; ?>

		<label for="entry-category">Entry's Category: </label>
		<select name="entry-category" id="entry-category">
			<?php 

			$categories = find_categories($db);

			if (!empty($categories)): 
			while ($category = mysqli_fetch_assoc($categories)) :
			?>

			<option value="<?= $category['ID_cat'] ?>">
				<?= $category["name_cat"]?>
			</option>

			<?php 

			endwhile;
			endif;
			?>
		</select>
		<?php echo isset($_SESSION["error"]) ? throw_error($_SESSION["error"], "category") : " " ; ?>

		<input type="submit" name="save-entry-submit" value="Create">
	</form>
	<?php delete_error_without_signing_out(); ?>
</div>
<!-- end of main container -->

<?php require_once "includes/footer.php";?>
