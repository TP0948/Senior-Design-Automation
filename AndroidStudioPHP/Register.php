<?php
    $con = mysqli_connect("localhost", "root", "", "user");
    
    $email = $_POST["email"];
    $password = $_POST["password"];
    $statement = mysqli_prepare($con, "INSERT INTO user (email, password) VALUES (?, ?)");
    mysqli_stmt_bind_param($statement, "siss", $email, $password);
    mysqli_stmt_execute($statement);
    
    $response = array();
    $response["success"] = true;  
    
    print_r(json_encode($response));
?>
