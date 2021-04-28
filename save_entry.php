<?php 
if (isset($_POST)) {
//bring db_connection.php file
	require_once "includes/db_connection.php";

	$entry_title = isset($_POST["entry-name"]) ? mysqli_real_escape_string($db, $_POST["entry-name"]) : false;

	$entry_description = isset($_POST["entry-description"]) ? mysqli_real_escape_string($db, $_POST["entry-description"]) : false;

	$category_name = isset($_POST["entry-category"]) ? mysqli_real_escape_string($db, $_POST["entry-category"]) : false;

	$user = $_SESSION["user"]["ID_use"];
}

//create a variable to store the errors
$error = array();

//validate data input from the create entry form
if (empty($entry_title)) {
	$error["title"] = "Unvalid title";
}

if (empty($entry_description)) {
	$error["description"] = "Unvalid description";
}

if (empty($category_name) && !is_numeric($category_name)) {
	$error["category"] = "Unvalid category";
}

/*
if (!empty($category_name) && !is_numeric($category_name) && !preg_match("/[0-9]/", $category_name)) {
	$validated_name = true;
}else{
	$validated_name = false;
	$error["name"] = "Invalid name";
}
*/

if (count($error) == 0) {
	$sql = "INSERT INTO entries VALUES(null, $user, $category_name, '$entry_title', '$entry_description', CURDATE())";

	$save_entry = mysqli_query($db, $sql);

	header("location: index.php");
}else{
	$_SESSION["error"] = $error;
	header("location: create_entry.php");
}



?>