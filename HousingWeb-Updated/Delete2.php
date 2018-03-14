<?php include "NewProperty2.php";


$id = $_GET["id"];
$sql="DELETE FROM user_properties WHERE ID=$id";
$result = mysql_query($sql) or die("Unable to delete database entry.");
header ("Location: NewProperty2.php");



?>