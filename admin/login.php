<?php
include('includes/header.php');
?>

<div class="container bg-success">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-6 col-lg-6 col-md-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Login</h1>
                            </div>
                            <?php
                                if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] !=""){
                                    echo '<h2 class="bg-danger text-white"> '.$_SESSION['logedin'].'</h2>';
                                    unset($_SESSION['loggedin']);
                                }
                            ?>

                            <form class="user" action="dbhelper.php" method="POST">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user"
                                        id="exampleInputEmail" aria-describedby="emailHelp"
                                        placeholder="Enter Email Address...">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-user"
                                        id="exampleInputPassword" placeholder="Password">
                                </div>
                                <button type="submit" name="login" class="btn btn-primary btn-user btn-block">
                                    Login
                                </button>
                            </form>
                        </div>
                    </div>
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