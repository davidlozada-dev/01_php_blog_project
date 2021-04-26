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

?>