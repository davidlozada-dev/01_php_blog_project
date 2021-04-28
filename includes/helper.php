<?php 
//database connection
require_once "db_connection.php";

//create function for throwing errors
function throw_error($error, $key){
	$alert = " ";

	if (isset($error[$key]) && !empty($key)) {
		$alert = "<div class='error-alert'>" . $error[$key] . "</div>";
	}

	return $alert;
}

//create function for closing the session 
function delete_error(){
	$_SESSION["error"] = null;

	session_unset();
}

//create function for selecting the existing categories from the database
function find_categories(){
	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "01_php_blog_project";


	$db = mysqli_connect($server, $username, $password, $database);

	$sql = "SELECT * FROM categories ORDER BY name_cat ASC";

	$categories = mysqli_query($db, $sql);

	$result = array();

	if ($categories && mysqli_num_rows($categories) >= 1) {
		$result = $categories;	
	}

	return $result;
}

?>

