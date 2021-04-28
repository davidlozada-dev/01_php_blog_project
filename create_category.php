<!-- redirect -->
<?php require_once "includes/redirect.php"?>

<!-- header -->
<?php require_once "includes/header.php"; ?>

<!-- sidebar -->
<?php require_once "includes/sidebar.php"; ?>

<!-- begin of main container -->
<div id="main">
	<h1>Create category</h1>
	<p>
		Add a new category for users to use it.
	</p>
	<form action="save_category.php" method="POST">
		<label for="category-name">Category's Name: </label>
		<input type="text" name="category-name" id="category-name">

		<input type="submit" name="save-category-submit" value="Create">
	</form>

</div>
<!-- end of main container -->

<?php require_once "includes/footer.php";?>