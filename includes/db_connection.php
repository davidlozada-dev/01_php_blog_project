<?php 
if (!isset($_SESSION)){
	session_start();	
}

//database connection
$server = "localhost";
$username = "root";
$password = "";
$database = "01_php_blog_project";


$db = mysqli_connect($server, $username, $password, $database);

?>