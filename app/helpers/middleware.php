<?php
function usersOnly($redirect = '/index.php'){
    if(empty($_SESSION['id'])){
        $_SESSION['message'] = "You are not logged in";
        $_SESSION['type'] = "error";
        header('location: ' .BASE_URL . $redirect);
        exit(0);
    }
}

function adminsOnly($redirect = '/index.php'){
    if(empty($_SESSION['id']) || empty($_SESSION['admin'])){
        $_SESSION['message'] = "You are not authorized";
        $_SESSION['type'] = "error";
        header('location: ' .BASE_URL . $redirect);
        exit(0);
    }
}

function usersOnly($redirect = '/index.php'){
    if(isset($_SESSION['id'])){
        header('location: ' .BASE_URL . $redirect);
        exit(0);
    }
}