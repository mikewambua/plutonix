<?php
    include('security.php');
    
    include('includes/header.php');
    include('includes/menubar.php')
?>
<div class="container">

<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
            <div class="col-lg-6">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Create an Account | Admin</h1>
                    </div>
                    <form class="user" action="dbhelper.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="firstname" class="form-control form-control-user" id="exampleFirstName"
                                placeholder="First Name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="lastname" class="form-control form-control-user" id="exampleLastName"
                                placeholder="Last Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail"
                                placeholder="Email Address" required>
                        </div>
                        <div class="form-group">
                                <input type="password" name="password" class="form-control form-control-user"
                                    id="exampleInputPassword" placeholder="Password" required>
                        <div class="form-group">
                            <input type="password" name="repeatpassword" class="form-control form-control-user"
                                id="exampleRepeatPassword" placeholder="Repeat Password" required>
                        </div>
                        <button type="submit" name="admin_register" class="btn btn-primary btn-user btn-block">
                            Register Account
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>


<?php
    include('includes/scripts.php');
    include('includes/footer.php');
?>