<?php

if(isset($_POST["submit"])){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["userUid"];
    $password = $_POST["userPassword"];
    $confirmPassword = $_POST["confirmPassword"];

    require_once 'dbh.inc.php';    
    require_once 'functions.inc.php';

    if(emptyInputSignUp($name, $email, $username, $password, $confirmPassword) !== false){
        header("location: ../signup.php?error = empty input");
        exit();

    }

    if(invalidUserId($username) !== false){
        header("location: ../signup.php?error = invalid userid");
        exit();

    }

    if(invalidEmail($email) !== false){
        header("location: ../signup.php?error = invalid email");
        exit();

    }

    if(passwordMatch($password, $confirmPassword) !== false){
        header("location: ../signup.php?error = passwords do not match");
        exit();

    }

    if(userExists($conn,$username, $email) !== false){
        header("location: ../signup.php?error = user already exists");
        exit();

    }

    createUser($conn, $name, $email, $username, $password);

}
else{
    header("location: ../signup.php");
    exit();
}