<?php

include(ROOT_PATH . '/app/database/dbconfig.php');
include(ROOT_PATH . '/app/helpers/validateclient.php');

$errors = array();
$firstname = '';
$lastname = '';
$email = '';
$phone = '';
$location = '';
$comment = '';


if(isset($_POST['client-add'])){
   $errors = validateclient($_POST);
    
    if(count($errors)===0){
        unset($_POST['client-add']);
        $clientId = create('clients', $_POST);
        $client = selectOne('clients', ['id'=>$clientId]);
        // test($client);

        //log in user after registering
        $_SESSION['id'] = $client['id'];
        $_SESSION['username'] = $client['username'];
        $_SESSION['message'] = "You are successfully logged in";
        $_SESSION['type'] = "success";

        header('location: ' . BASE_URL. '/index.php')
    }else{
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $location = $_POST['location'];
        $comment = $_POST['comment'];
    }
}
    // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    