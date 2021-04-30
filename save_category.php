<?php 
if (isset($_POST)){
//bring db_connection.php file
	require_once "includes/db_connection.php";

	$category_name = isset($_POST["category-name"]) ? mysqli_real_escape_string($db, $_POST["category-name"]) : false;
}

//create a variable to store the errors
$error = array();

//validate name input from the create category form
if (!empty($category_name) && !is_numeric($category_name) && !preg_match("/[0-9]/", $category_name)){
	$validated_name = true;
}else{
	$validated_name = false;
	$error["name"] = "Invalid name";
}

if (count($error) == 0){
	$sql = "INSERT INTO categories VALUES(null, '$category_name')";

	$save_category = mysqli_query($db, $sql);
}

header("location: index.php");

?>