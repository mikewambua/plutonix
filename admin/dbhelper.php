<?php
    include('security.php');

if(isset($_POST['client_register'])){

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $message = $_POST['comment'];
    $location = $_POST['location'];
    $phone = $_POST['phone'];


    $sql = "INSERT INTO clients (firstname, lastname, email, phone, comment, location) 
             VALUES ('$firstname', '$lastname', '$email', '$phone', '$message', '$location')";
    $sql_execute = mysqli_query($connection, $sql);

    if($sql_execute){
        $_SESSION['status'] = "Your details have been submitted!";
        $_SESSION['status_code'] = "success";
        header('location: http://localhost/plutonix/admin/manage_client.php');
    }else{
        $_SESSION['status'] = "Failed to submit your details!";
        $_SESSION['status_code'] = "error";
        header('location: http://localhost/plutonix/admin/register.php'); 
    }
    exit();
}


//Register Admin
if(isset($_POST['admin_register'])){

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repeatpassword = $_POST['repeatpassword'];

    if(empty($firstname)|| empty($lastname) || empty($email) || empty($password) || empty($repeatpassword)){
        exit("Please fill in all the fields!");
    }

    $query_userExists = "SELECT * FROM adminpanel WHERE email ='$email' LIMIT 1";
    $result = mysqli_query($connection, $query_userExists);
    $user_admin = mysqli_num_rows($result);

    if($user_admin > 0){
        $_SESSION['status'] = "Email already exists! Please use another email!";
        $_SESSION['status_code'] = "error";
        header('location: http://localhost/plutonix/admin/registeradmin.php');
    }

    if($password === $repeatpassword){

        $password_hashed = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO adminpanel (firstname, lastname, email, password) 
        VALUES('$firstname', '$lastname', '$email', '$password_hashed')";
    
        $sql_execute = mysqli_query($connection, $sql);
    
        if($sql_execute){
            $_SESSION['status'] = "Admin account has been created!";
            $_SESSION['status_code'] = "success";
            header('location: http://localhost/plutonix/admin/manage_admin.php');
        }else{
            $_SESSION['status'] = "Admin account has not been created!";
            $_SESSION['status_code'] = "error";
            header('location: http://localhost/plutonix/admin/registeradmin.php');
        }
    }else{
        $_SESSION['status'] = "Passwords do not match!";
        $_SESSION['status_code'] = "warning";
        header('location: http://localhost/plutonix/admin/registeradmin.php');
    }
    exit();
}
       

//Login Admin
if(isset($_POST['login'])){
    $email_login = $_POST['email'];
    $password_login = $_POST['password'];

    if(empty($email_login) || empty($password_login)){
        $_SESSION['status'] = "Email and password fields cannot be empty!";
        $_SESSION['status_code'] = "error";
    }

    $sql = "SELECT * FROM adminpanel WHERE email='$email_login'";
    $sql_execute = mysqli_query($connection,$sql);
    $count = mysqli_num_rows($sql_execute);

    if($count==1){
        $row = mysqli_fetch_array($sql_execute);
        $checkpassword = password_verify($password_login,$row['password']);
        if($checkpassword){
            $_SESSION['username'] = $email_login;
            $_SESSION['status'] = "You have successfully logged in!";
            $_SESSION['status_code'] = "success";
            header('location: index.php');
        }else{
            $_SESSION['loggedin'] = "Email or password is invalid!";
            $_SESSION['status'] = "Wrong login credentials!";
            $_SESSION['status_code'] = "error";
            header('location: login.php');
        }
    }
    exit();
}

// Blogs Section

?>