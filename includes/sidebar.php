<aside id="sidebar">
	<div id="signin" class="block-aside">
		<h3>Sign in</h3>
		<form action="signin.php" method="POST">
			<label for="signin-email">Email:</label>
			<input type="email" name="signin-email" id="signin-email
			<label for="signin-password">Password:</label>
			<input type="password" name="signin-password" id="signin-password">

			<input type="submit" name="signin-submit" value="Sign in">
		</form>
	</div>
	<br />
	<div id="signup" class="block-aside">
		<h3>Sign up</h3>
		<form action="signup.php" method="POST">
			<label for="signup-name">Name:</label>
			<input type="text" name="signup-name" id="signup-name" placeholder="Name">

			<label for="signup-surname">Surname:</label>
			<input type="text" name="signup-surname" id="signup-surname" placeholder="Surname">

			<label for="signup-email">Email:</label>
			<input type="email" name="signup-email" id="signup-email">
						
			<label for="signup-password">Password:</label>
			<input type="password" name="signup-password" id="signup-password">

			<input type="submit" name="signup-submit" value="Sign up">
		</form>
	</div>
</aside>