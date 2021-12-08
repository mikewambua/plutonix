<?php
    session_start();
    include('database/dbconfig.php');

    if($dbconfig){
        // echo "Database Connected!";
    }else{
        header("location: database/config.php");
    }
    
    if(!$_SESSION['username']){
        header('location: http://localhost/plutonix/admin/login.php');
    }
?>