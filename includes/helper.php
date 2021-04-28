<?php 
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
function find_categories($db){


	$sql = "SELECT * FROM categories ORDER BY name_cat ASC";

	$categories = mysqli_query($db, $sql);

	$result = array();

	if ($categories && mysqli_num_rows($categories) >= 1) {
		$result = $categories;	
	}

	return $result;
}

function find_last_entries(){
	$server = "localhost";
$username = "root";
$password = "";
$database = "01_php_blog_project";


$db = mysqli_connect($server, $username, $password, $database);

	$sql = "SELECT e. *, c.name_cat FROM entries e INNER JOIN categories c WHERE e.ID_cat = c.ID_cat ORDER BY e.ID_ent DESC LIMIT 4";

	$entries = mysqli_query($db, $sql);

	$result = array();

	if ($entries && mysqli_num_rows($entries) >= 1) {
		$result = $entries;
	}

	return $result;
}

?>

