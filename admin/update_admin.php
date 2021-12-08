<?php

include('security.php');
//Edit and Update Client data

if(isset($_POST['updatebutton'])){

    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "UPDATE adminpanel SET firstname='$firstname', lastname='$lastname', email='$email', password='$password' WHERE id ='$id'";
    $sql_execute = mysqli_query($connection,$sql);

    if($sql_execute){
        $_SESSION['status'] = "Admin data has been updated!";
        $_SESSION['status_code'] = "success";
        header("location: manage_admin.php");
        mysqli_close($connection);
    }else{
        $_SESSION['status'] = "Failed to update Admin data";
        $_SESSION['status_code'] = "error";
        header("location: manage_admin.php");
    }
}
?>