<?php
include('security.php');

// Select blog
$sql = "SELECT * FROM blogs";
$sql_execute = mysqli_query($connection, $sql);

if(isset($_REQUEST['add_post'])){

    $title = mysqli_real_escape_string($connection, $_POST["title"]);
    $content = mysqli_real_escape_string($connection, $_POST['content']);

    if(!empty($_FILES['image']['name'])){
        $imagename = time() .'_' . $_FILES['image']['name'];
        $destination = '../assets/uploads/' . $imagename;
        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

        if($result){
            $_POST['image'] = $imagename;
        }else{
            $_SESSION['status'] = "Image failded to upload!";
            $_SESSION['status_code'] = "error";
        }

    }else{
        $_SESSION['status'] = "Post image is required!";
        $_SESSION['status_code'] = "error";
    }
//    There is a bug in uploading images. To be corrected
    if(!empty($title) || !empty($content) || !empty($imagename)){
        $sql = "INSERT INTO blogs (title, content, image) VALUES('$title', '$content', '$imagename')";
        $sql_execute = mysqli_query($connection, $sql);

        if($sql_execute){
            $_SESSION['status'] = "You have successfully created a new post!";
            $_SESSION['status_code'] = "success";
            header('location: http://localhost/plutonix/admin/manage_blog_posts.php?info=added');
            exit();
        }
    }else{
        $_SESSION['status'] = "Failed to create a new post!";
        $_SESSION['status_code'] = "error";
        header('location: http://localhost/plutonix/admin/manage_blog_posts.php?info=added');
        exit();
    }
}

//View Blog Post

if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];

    $sql = "SELECT * FROM blogs WHERE id = $id";
    $sql_execute = mysqli_query($connection, $sql);
}

if(isset($_REQUEST['update'])){
    $id = $_REQUEST['id'];
    $title = $_REQUEST['title'];
    $content = $_REQUEST['content'];

    $sql = "UPDATE blogs SET title='$title', content='$content' WHERE id = $id";
    $sql_execute = mysqli_query($connection, $sql);

    if($sql_execute){
        $_SESSION['status'] = "You have successfully updated the post!";
        $_SESSION['status_code'] = "success";
        header('location: http://localhost/plutonix/admin/manage_blog_posts.php?info=updated');
        exit();
    }
}

if(isset($_POST['delete'])){
    $id = $_POST['id'];

    $sql = "DELETE FROM blogs WHERE id='$id'";
    $sql_execute = mysqli_query($connection, $sql);

    if($sql_execute){
        $_SESSION['status'] = "You have successfully deleted the post!";
        $_SESSION['status_code'] = "success";
        header('location: http://localhost/plutonix/admin/manage_blog_posts.php?info=deleted');
        exit();
    }
}
?>