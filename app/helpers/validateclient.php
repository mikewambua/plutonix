<?php
function validateclient($client){
    $errors = array();

    if(empty($client['firstname'])){
        array_push($errors, "First name is required");
    }
    if(empty($client['lastname'])){
        array_push($errors, "Last name is required");
    }
    if(empty($client['email'])){
        array_push($errors, "Email is required");
    }
    if(empty($client['phone'])){
        array_push($errors, "Phone number is required");
    }
    if(empty($client['location'])){
        array_push($errors, "Enter your location address");
    }
    if(empty($client['comment'])){
        array_push($errors, "Enter your message");
    }
    
    $existingClient = selectOne("clients", ['email' =>$client['email']]);
    if(isset($existingClient)){
        array_push($errors, "Email already exists");
    }

    return $errors;
}