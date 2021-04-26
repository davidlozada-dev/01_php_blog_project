<?php 
session_start();

// collect data from the sign up form
if(isset($_POST["signup-submit"])){
	$name = isset($_POST["signup-name"]) ? $_POST["signup-name"] : false;
	$surname = isset($_POST["signup-surname"]) ? $_POST["signup-surname"] : false;
	$email = isset($_POST["signup-email"]) ? $_POST["signup-email"] : false;
	$password = isset($_POST["signup-password"]) ? $_POST["signup-password"] : false; 
}

//create a variable to store the errors
$error = array();

//validate data from the sign up form
// 1st validate the name input
if (!empty($name) && !is_numeric($name) && !preg_match("/[0-9]/", $name)) {
	$validated_name = true;
}else{
	$validated_name = false;
	$error["name"] = "Invalid name";
}

// 2nd validate the surname inpur
if (!empty($surname) && !is_numeric($surname) && !preg_match("/[0-9]/", $surname)) {
	$validated_surname = true;
}else{
	$validated_surname = false;
	$error["surname"] = "Invalid surname";
}

// 3rd validate the email input
if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$validated_email = true;
}else{
	$validated_email = false;
	$error["email"] = "Invalid email";
}
 
// 4th validate the password input 
if (!empty($password) && ($password_length = strlen($password) >= 8 ) ) {
	$validated_password = true;
}else{
	$validated_password = false;
	$error["password"] ="Invalid password";
}

//create a variable to store the actual user's sign up status
$signup_status = null;

// store validated data from the sign up form in the database
if(count($error) == 0){
	$signup_status = true;
}else{
	$_SESSION["error"] = $error;
	header("location: index.php");
}
?>