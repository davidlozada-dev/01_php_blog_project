<?php 
//connect to the database and start a session
require_once "includes/db_connection.php";

//collect data from the sign in form
$signin_email = (isset($_POST["signin-email"])) ? mysqli_real_escape_string($db, $_POST["signin-email"]) : false;
$signin_password = (isset($_POST["signin-password"])) ? mysqli_real_escape_string($db, $_POST["signin-password"]) : false;

//check the password

//create a sql statement to verify the credentials

//Save the user data with the superglobal session

//Create an error message

//Redirect to the index.php 
?>