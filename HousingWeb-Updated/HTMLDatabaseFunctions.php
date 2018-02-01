<?php
   session_start();
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "users";
    $dbport = 3306;
    
    $_SESSION['SERVER'] = $servername;
    $_SESSION['USER'] = $username;
    $_SESSION['PASS'] = $password;
    $_SESSION['DB'] = $database;
    
    $conn = new mysqli($servername, $username, $password, $database, $dbport);
    
    if ($database->connect_error) {
        die("Connection Failed: " . $db->connect_error);
    }
    
    
function check_login($user, $pass)
    {
        global $conn;
        $msg = 'Login Denied';
        $retvalue = False;
        
        $sql = "SELECT password from users WHERE email = '$user'";
        $qry = mysqli_query($conn, $sql ,MYSQLI_ASSOC);
   
       
        
while($result = mysqli_fetch_array($qry,MYSQLI_ASSOC)){
    
        $dbpass = $result['password'];
         $_SESSION['uid'] = $result['uid'];
        
        if ($dbpass == $pass)
        {
            $retvalue = True;
           
        }
        }
        return $retvalue;
    }
	
/*Registering new account
function add_NEWUSER ($FName, $LName, $email, $password) {
	global $conn;
	$sql_i = "INSERT INTO users (FName, LName, email, password) VALUES " . " ('$Fname', '$LName', '$email' , '$password')";
	run_update($sql_i); 
}
	*/
 ?>

