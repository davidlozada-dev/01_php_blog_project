<?php 

require_once "includes/db_connection.php";

if (isset($_SESSION["user"]) && $_GET["id"]){
	
	$ID_use = $_SESSION["user"]["ID_use"];

	$ID_ent = $_GET["id"];

	$sql = "DELETE FROM entries WHERE ID_ent = $ID_ent AND ID_use = $ID_use";

	$delete = mysqli_query($db, $sql);

	
	if ($delete){
		echo "<h1> You have successfully deleted the entry </h1>";
		header("refresh:3; url=index.php");
	}else{
		echo "<h1> You have not deleted the entry </h1>";
		header("refresh:3; url=index.php");
	}
}

?>