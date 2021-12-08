<?php

include('security.php');

//Edit and Update Client data

if(isset($_REQUEST['updatebtn'])){

    $id = $_REQUEST['id'];
    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $location = $_REQUEST['location'];
    $comment = $_REQUEST['comment'];

    $sql = "UPDATE clients SET firstname='$firstname', lastname='$lastname', email='$email', phone='$phone', location='$location', comment='$comment'WHERE id =$id";
    $sql_execute = mysqli_query($connection,$sql);

    if($sql_execute){
        $_SESSION['status'] = "Client data has been updated!";
        $_SESSION['status_code'] = "success";
        header("location: manage_client.php");
        mysqli_close($connection);
    }else{
        $_SESSION['status'] = "Failed to update Client data";
        $_SESSION['status_code'] = "error";
        header("location: manage_client.php");
    }
}
?>