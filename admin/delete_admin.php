<?php
include('security.php');

//Delete client data
    $id = $_GET['id'];

    $sql="DELETE FROM adminpanel WHERE id='$id' ";
    $sql_execute = mysqli_query($connection,$sql);

    if($sql_execute){
        $_SESSION['status'] = "Admin data has been successfully deleted!";
        $_SESSION['status_code'] = "success";
        header('location: manage_admin.php');
        mysqli_close($connection);
    }else{
        $_SESSION['status'] = "Failed to delete admin data!";
        $_SESSION['status_code'] = "error";
        header('location: manage_admin.php');

    }
?>