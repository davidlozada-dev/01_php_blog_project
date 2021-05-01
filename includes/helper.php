<?php 
//create a function for throwing errors
function throw_error($error, $key){
	$alert = " ";

	if (isset($error[$key]) && !empty($key)){
		$alert = "<div class='error-alert'>" . $error[$key] . "</div>";
	}

	return $alert;
}

//create a function for unsetting the superglobal SESSION and destroying the session
function delete_error(){
	$_SESSION["error"] = null;

	session_unset();
}

//create a function for unsetting the superglobal SESSION without destroying the session
function delete_error_without_signing_out(){
	$_SESSION["error"] = null;
}

//create a function for unsetting the superglobal SESSION when updating a profile
function delete_updating_success_message(){
	$_SESSION["update-completed"] = null;
}

//create a function for selecting the existing categories from the database
function find_categories($db){


	$sql = "SELECT * FROM categories ORDER BY name_cat ASC";

	$categories = mysqli_query($db, $sql);

	$result = array();

	if ($categories && mysqli_num_rows($categories) >= 1){
		$result = $categories;	
	}

	return $result;
}

//create a function for selecting the existing categories from the database
function find_category($db, $id){

	$ID_cat = (int)$id;

	$sql = "SELECT * FROM categories WHERE ID_cat = $ID_cat";

	$category = mysqli_query($db, $sql);

	$result = mysqli_fetch_assoc($category);

	return $result;
}

//create a function for finding the last entries
function find_last_entries(){
	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "01_php_blog_project";


	$db = mysqli_connect($server, $username, $password, $database);

	$sql = "SELECT e. *, c.name_cat FROM entries e INNER JOIN categories c ON e.ID_cat = c.ID_cat ORDER BY e.ID_ent DESC LIMIT 4";

	$entries = mysqli_query($db, $sql);

	$result = array();

	if ($entries && mysqli_num_rows($entries) >= 1){
		$result = $entries;
	}

	return $result;
}

//create a function for finding all entries
function find_all_entries(){
	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "01_php_blog_project";


	$db = mysqli_connect($server, $username, $password, $database);

	$sql = "SELECT e. *, c.name_cat FROM entries e INNER JOIN categories c ON e.ID_cat = c.ID_cat ORDER BY e.ID_ent DESC";

	$entries = mysqli_query($db, $sql);

	$result = array();

	if ($entries && mysqli_num_rows($entries) >= 1){
		$result = $entries;
	}

	return $result;
}

//create a function for finding entries by category
function find_category_entries($id){
	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "01_php_blog_project";

	$ID_cat = (int)$id;

	$db = mysqli_connect($server, $username, $password, $database);

	$sql = "SELECT e. *, c.name_cat FROM entries e INNER JOIN categories c ON e.ID_cat = c.ID_cat WHERE e.ID_cat = $ID_cat ORDER BY e.ID_ent DESC";

	$entries = mysqli_query($db, $sql);

	$result = array();

	if ($entries && mysqli_num_rows($entries) >= 1){
		$result = $entries;
	}

	return $result;
}

//create a function for finding an entry
function find_entry($db, $id){

	$ID_ent = (int)$id;

	$sql = "SELECT e. *, c.name_cat FROM entries e INNER JOIN categories c ON e.ID_cat = c.ID_cat WHERE e.ID_ent = $ID_ent";

	$entry = mysqli_query($db, $sql);

	$result = array();

	if ($entry && mysqli_num_rows($entry) == 1){
		$result = mysqli_fetch_assoc($entry);
	}

	return $result;
}

//create a function for finding entries that match the user's search input
function search_for_entries($db, $pattern){

	$wildcard = (string)$pattern;
	
	$sql = "SELECT e. *, c.name_cat FROM entries e INNER JOIN categories c ON e.ID_cat = c.ID_cat WHERE title_ent LIKE '%$wildcard%'";

	$search = mysqli_query($db, $sql);


	$result = $search;

	return $result;
}
?>

