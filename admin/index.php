<?php
    include('security.php');
    include('../path.php');
    include('includes/header.php');
    include('includes/menubar.php');
    
?>      
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Manage Admins-->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            <a href="manage_admin.php"></a>
                                Manage Admins
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800 text-left">
                                <?php
                                    $sql = "SELECT id FROM adminpanel ORDER BY id";
                                    $sql_execute = mysqli_query($connection,$sql);
                                    
                                    $row = mysqli_num_rows($sql_execute);
                                        echo '<p> Total Admins ['.$row.'] </p>';
                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Manage Clients -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Manage Clients </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php
                                    $sql = "SELECT id FROM clients ORDER BY id";
                                    $sql_execute = mysqli_query($connection,$sql);
                                    
                                    $row = mysqli_num_rows($sql_execute);
                                        echo '<p> Total Clients ['.$row.'] </p>';
                                ?>
                            </div>
                            <a href="register.php"></a>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Manage Blog Posts -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Manage Blogs
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                    <?php
                                    $sql = "SELECT id FROM blogs ORDER BY id";
                                    $sql_execute = mysqli_query($connection,$sql);
                                    
                                    $row = mysqli_num_rows($sql_execute);
                                        echo '<p> Total Posts ['.$row.'] </p>';
                                ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Pending Requests</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-blue-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
</div>
<!-- /.container-fluid -->
<?php
    include('includes/scripts.php');
    include('includes/footer.php');
?>
    

   
   

