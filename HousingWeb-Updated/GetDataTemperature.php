<?php
	$servername = "192.168.1.30";
    $username = "nodered"; 
    $password = "nodered";   
    
    $database="nodered";
    
    
    $conn = new mysqli($servername, $username, $password, $database);

    $sql = "SELECT  `Sensor`, `Date` FROM `MQTTData` WHERE `Sensor` = 'Temperature'";
    $query = mysqli_query($conn, $sql);
    
    if ( ! $query ) {
        echo mysqli_error($conn);
        die;
    }
    
    $data = array();
    
    for ($x = 0; $x < mysqli_num_rows($query); $x++) {
        $data[] = mysqli_fetch_assoc($query);
    }
    
	
	
	header('Content-Type: application/json');
    echo json_encode($data);     
     
    mysqli_close($conn);
?>
