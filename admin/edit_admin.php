<?php
    include('security.php');

    include('includes/header.php');
    include('includes/menubar.php');

?>

<div class="container">
    <div class="row">
        <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
        <div class="col-lg-7">
            <div class="p-5" >
            
            <div class="text-center text-uppercase">
                <h1 class="h4 text-gray-900 mb-4">Edit Admin Data</h1>
            </div>
            
                <form class="user" action="update_admin.php" method="POST">
                    <?php
                        $id = $_GET['id'];

                        $sql="SELECT * FROM adminpanel WHERE id ='$id'";
                        $sql_execute =mysqli_query($connection,$sql);
                        foreach($sql_execute as $row){
                            ?>
                          
                    <div class="form-group row"> 
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" name="firstname"
                            value="<?php echo $row['firstname'];?>" id="exampleFirstName" placeholder="First Name">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" name="lastname" 
                            value="<?php echo $row['lastname'];?>" id="exampleLastName" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control form-control-user" name="email"
                        value="<?php echo $row['email'];?>" id="exampleInputEmail" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-user" name="password" 
                        value="<?php echo $row['password'];?>" id="exampleInputTel"  placeholder="Password">
                    </div>
                    <div class="text-center">
                        <a href="manage_admin.php" class="btn btn-danger btn-user ">Cancel </a>
                        <button type="submit" name="updatebutton" class=" btn btn-primary btn-user">Save Changes</button>
                    </div>
                        <?php
                        }
                    ?>
                </form>
               
        </div>
    </div>
</div>

<?php
    include('includes/scripts.php');
    include('includes/footer.php');
?>