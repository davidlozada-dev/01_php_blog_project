<?php 
//check if  superglobal POST is set
if (isset($_POST["editprofile-submit"])){

//bring the db_connection file
	require_once "includes/db_connection.php";

//start the session
	if (!isset($_SESSION)) {
		session_start();	
	}	
	
//collect data from the sign up form
	$name = isset($_POST["editprofile-name"]) ? mysqli_real_escape_string($db, trim($_POST["editprofile-name"])) : false;
	$surname = isset($_POST["editprofile-surname"]) ? mysqli_real_escape_string($db, trim($_POST["editprofile-surname"])) : false;
	$email = isset($_POST["editprofile-email"]) ? mysqli_real_escape_string($db, trim($_POST["editprofile-email"])) : false;
}

//create a variable to store the errors
$error = array();

//validate data from the edit profile form
	//	1st validate the name input
if (!empty($name) && !is_numeric($name) && !preg_match("/[0-9]/", $name)) {
	$validated_name = true;
}else{
	$validated_name = false;
	$error["name"] = "Invalid name";
}

	//	2nd validate the surname inpur
if (!empty($surname) && !is_numeric($surname) && !preg_match("/[0-9]/", $surname)) {
	$validated_surname = true;
}else{
	$validated_surname = false;
	$error["surname"] = "Invalid surname";
}

	//	3rd validate the email input
if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$validated_email = true;
}else{
	$validated_email = false;
	$error["email"] = "Invalid email";
}

//create a variable to store the actual user's sign up status
$signup_status = null;

//store validated data from the sign up form in the database
if (count($error) == 0){

	$signup_status = true;

	$user = $_SESSION["user"];
 
	$ID_use = (int)$user["ID_use"];

//create a sql sentence to update the user's data in the database
	$sql = "UPDATE users SET name_use = '$name', surname_use = '$surname', email_use = '$email' WHERE ID_use = $ID_use";

//execute the sql sentence to update the user's data in the database
	$insert_data = mysqli_query($db, $sql);

	if ($insert_data) {
		$_SESSION["user"]["name_use"] = $name;
		$_SESSION["user"]["surname_use"] = $surname;
		$_SESSION["user"]["email"] = $email;

		$_SESSION["update-completed"] = "Great! You have successfully updated your data.";
	}else{
		$_SESSION["error"]["database"] = "Oops! We couldn't update your data, please try again.";
	}

}else{
	$_SESSION["error"] = $error;
	header("location: edit_profile.php");
}

header("location: edit_profile.php");
?>