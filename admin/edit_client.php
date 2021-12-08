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
                <h1 class="h4 text-gray-900 mb-4">Edit Client Data</h1>
            </div>
            
                <form class="user" action="update_client.php" method="POST">
                    <?php
                        $id = $_REQUEST['id'];

                        $sql="SELECT * FROM clients WHERE id =$id";
                        $sql_execute =mysqli_query($connection,$sql);
                        foreach($sql_execute as $row){
                            ?>
                          
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <input type="text"hidden name="id" 
                            value="<?php echo $row['id'];?>">
                        </div>
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
                        <input type="tel" class="form-control form-control-user" name="phone" 
                        value="<?php echo $row['phone'];?>" id="exampleInputTel"  placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="location"
                        value="<?php echo $row['location'];?>" id="exampleInputLocation"
                            placeholder="Location">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="comment"
                        value="<?php echo $row['comment'];?>" id="exampleInputComment"
                            placeholder="Write your comment">
                    </div>
                    <div class="text-center">

                        <a href="register.php" class="btn btn-danger btn-user ">Cancel </a>
                        <button type="submit" name="updatebtn" class=" btn btn-primary btn-user">Save Changes</button>
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