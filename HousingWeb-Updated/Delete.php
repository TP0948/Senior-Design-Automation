<?php include "NewProperty2.php"; 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if( isset($_GET['del'])) {
	$id = $_GET['del'];
	$sql = "DELETE FROM user_properties WHERE ID = '$id'";
     
	
	
	
	/*$sql="DELETE FROM user_properties WHERE ID=$id";*/
	$result = mysqli_query($conn, $sql);
	
	
	
	/*header("Location: /HousingWeb-Updated/Home4.php");*/

	/*echo "<meta http-equiv='refresh' content='0;url=Home4.php'>";*/
}



	/*run_update($sql_i);*/
	echo "Your property has been deleted!";


?>