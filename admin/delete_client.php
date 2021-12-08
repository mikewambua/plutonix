<?php
include('security.php');

//Delete client data
    $id = $_GET['id'];

    $sql="DELETE FROM clients WHERE id='$id' ";
    $sql_execute = mysqli_query($connection,$sql);

    if($sql_execute){
        $_SESSION['status'] = "Client data has been successfully deleted!";
        $_SESSION['status_code'] = "success";
        header('location: manage_client.php');
        mysqli_close($connection);
    }else{
        $_SESSION['status'] = "Failed to delete client data!";
        $_SESSION['status_code'] = "error";
        header('location: manage_client.php');

    }
?>