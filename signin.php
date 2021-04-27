<?php 
//connect to the database and start a session
require_once "includes/db_connection.php";

//collect data from the sign in form
if (isset($_POST)) {
	$email = (isset($_POST["signin-email"])) ? $_POST["signin-email"] : false;
	$password = (isset($_POST["signin-password"])) ? $_POST["signin-password"] : false;

//create a sql statement to verify the credentials
	$sql = "SELECT * FROM users WHERE email_use = '$email'";

	$signin = mysqli_query($db, $sql);

//Verify the password
	if ($signin && mysqli_num_rows($signin) == 1) {
		$user = mysqli_fetch_assoc($signin);

		$verify = password_verify($password, $user["password_use"]);
		
//Save the user data with the superglobal session
		if ($verify) {

			$_SESSION["user"] = $user;

			if (isset($_SESSION["error"]["signin"])) {
				session_unset($_SESSION["error"]["signin"]);
			}

//Create an error message if credentials were denied
		}else{
			$_SESSION["error"]["signin"] = "Oops! You couldn't sign in, please try again.";
		}

	}else{
		$_SESSION["error"]["signin"] = "Oops! You couldn't sign in, please try again.";
	}
}

//Redirect to the index.php 
header("location: index.php");
?>