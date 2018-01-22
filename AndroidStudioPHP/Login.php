<?php
    $con = mysqli_connect("localhost", "id4358033_admin", "Poop123poop", "id4358033_homeautomation");
    
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $statement = mysqli_prepare($con, "SELECT * FROM user WHERE email = ? AND password = ?");
    mysqli_stmt_bind_param($statement, "siss", $email, $password);
    mysqli_stmt_execute($statement);
    
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $userID, $email, $password);
    
    $response = array();
    $response["success"] = false;  
    
    while(mysqli_stmt_fetch($statement)){
        $response["success"] = true;  
        $response["email"] = $email;
        $response["password"] = $password;
    }
    
    print_r(json_encode($response));
?>