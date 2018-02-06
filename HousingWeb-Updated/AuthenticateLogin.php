<?php include "HTMLDatabaseFunctions.php";
    $username = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    
    
    $retstatus = check_login ($username, $password);
    
    if ($retstatus)
    {
        echo '"Success " , "<br>"';
        $_SESSION['login'] = $username;
        header("Location: /HousingWeb-Updated/Home2.php");
        var_dump($_SESSION['login']);
    }
    else
    {
   
    $_SESSION['login'] = '';
    header("location: index.html");
    }
   
?>