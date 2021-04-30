<!-- redirect -->
<?php require_once "includes/redirect.php"?>

<!-- header -->
<?php require_once "includes/header.php"; ?>

<!-- sidebar -->
<?php require_once "includes/sidebar.php"; ?>

<!-- begin of main container -->
<div id="main">
	<h1>Edit profile</h1>
	<?php 
	//show update message
		if (isset($_SESSION["update-completed"])){
			echo "<div class='success-alert'>" . $_SESSION["update-completed"] . "</div>";
		}elseif (isset($_SESSION["error"]["database"])){
			echo "<div class='error-alert'>" . $_SESSION["error"]["database"] . "</div>";
		}
	?>
	<form action="save_edit.php" method="POST">
		<label for="editprofile-name">Name:</label>
		<input type="text" name="editprofile-name" id="editprofile-name" placeholder="<?=$_SESSION["user"]["name_use"]?>">
		<?php echo isset($_SESSION["error"]) ? throw_error($_SESSION["error"], "name") : " "; ?>

		<label for="editprofile-surname">Surname:</label>
		<input type="text" name="editprofile-surname" id="editprofile-surname" placeholder="<?=$_SESSION["user"]["surname_use"]?>">
		<?php echo isset($_SESSION["error"]) ? throw_error($_SESSION["error"], "surname") : " "; ?>

		<label for="editprofile-email">Email:</label>
		<input type="email" name="editprofile-email" id="editprofile-email" placeholder="<?=$_SESSION["user"]["email_use"]?>">
		<?php echo isset($_SESSION["error"]) ? throw_error($_SESSION["error"], "email") : " "; ?>

		<input type="submit" name="editprofile-submit" value="Update">
	</form>
	<?php delete_error_without_signing_out() ?>
	<?php delete_updating_success_message(); ?>
</div>
<!-- end of main container -->

<?php require_once "includes/footer.php";?>