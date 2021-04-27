<!---call helper.php file -->
<?php require_once "helper.php"; ?>

<aside id="sidebar">
	<?php 
		if (isset($_SESSION["user"])) {
			echo "<div id='signedin-user' class='block-aside'><h3>". "Welcome " . ucfirst($_SESSION["user"]["name_use"]) . " " . ucfirst($_SESSION["user"]["surname_use"]) . "</h3></div>";
		}
	?>

	<div id="signin" class="block-aside">
		<h3>Sign in</h3>
		<form action="signin.php" method="POST">
			<label for="signin-email">Email:</label>
			<input type="email" name="signin-email" id="signin-email">
			
			<label for="signin-password">Password:</label>
			<input type="password" name="signin-password" id="signin-password">

			<input type="submit" name="signin-submit" value="Sign in">
		</form>
	</div>
	<br />
	<div id="signup" class="block-aside">
		<h3>Sign up</h3>
		<?php 
		//show sign up message
			if (isset($_SESSION["signup-completed"])){
				echo "<div class='success-alert'>" . $_SESSION["signup-completed"] . "</div>";
			}elseif (isset($_SESSION["error"]["database"])) {
				echo "<div class='error-alert'>" . $_SESSION["error"]["database"] . "</div>";
			}
		?>
		<form action="signup.php" method="POST">
			<label for="signup-name">Name:</label>
			<input type="text" name="signup-name" id="signup-name" placeholder="Name">
			<?php echo isset($_SESSION["error"]) ? throw_error($_SESSION["error"], "name") : " "; ?>

			<label for="signup-surname">Surname:</label>
			<input type="text" name="signup-surname" id="signup-surname" placeholder="Surname">
			<?php echo isset($_SESSION["error"]) ? throw_error($_SESSION["error"], "surname") : " "; ?>

			<label for="signup-email">Email:</label>
			<input type="email" name="signup-email" id="signup-email">
			<?php echo isset($_SESSION["error"]) ? throw_error($_SESSION["error"], "email") : " "; ?>

			<label for="signup-password">Password:</label>
			<input type="password" name="signup-password" id="signup-password">
			<?php echo isset($_SESSION["error"]) ? throw_error($_SESSION["error"], "password") : " "; ?>

			<input type="submit" name="signup-submit" value="Sign up">
		</form>
		<?php delete_error(); ?>
	</div>
</aside>