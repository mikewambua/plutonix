<?php
    include('path.php');
    include(ROOT_PATH . '/app/includes/header.php');
    include(ROOT_PATH . '/app/includes/navbar.php');
    include(ROOT_PATH . '/app/controllers/clients.php');
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 md-6 xs-12">
            <div class="p-5" >
            
            <div class="text-center text-uppercase">
                <h1 class="h4 text-gray-900 mb-4">Add Client Data</h1>
            </div>
            
                <form class="user" action="client-register.php" method="POST">
                    
                    <?php include(ROOT_PATH . '/app/helpers/formErrors.php'); ?>

                    <div class="form-group">
                        <input type="text"hidden name="id" 
                        value="<?php echo $id;?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="firstname"
                        value="<?php echo $firstname;?>" id="exampleFirstName" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="lastname" 
                        value="<?php echo $lastname;?>" id="exampleLastName" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control form-control-user" name="email"
                        value="<?php echo $email;?>" id="exampleInputEmail" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control form-control-user" name="phone" 
                        value="<?php echo $phone;?>" id="exampleInputTel"  placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="location"
                        value="<?php echo $location;?>" id="exampleInputLocation"
                            placeholder="Location">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="comment"
                        value="<?php echo $comment;?>" id="exampleInputComment"
                            placeholder="Write your comment">
                    </div>
                    <div class="text-center">
                        <a href="register.php" class="btn btn-danger btn-user ">Cancel </a>
                        <button type="submit" name="client-add" class=" btn btn-primary btn-user">Add Client</button>
                    </div>
                </form>
               
        </div>
    </div>
</div>

<?php
    include(ROOT_PATH . '/app/includes/scripts.php');
    include(ROOT_PATH . '/app/includes/footer.php');
?>