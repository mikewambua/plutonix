<?php
    include('security.php');
    include('includes/header.php');
    include('includes/menubar.php');
?>
<!-- Manage Admins -->
<!-- !--==============Modal===========-->
<div id="addadmin" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Contact Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form method="post" action="dbhelper.php">
              <div class="mb-3">
                <label for="first-name" class="col-form-label">
                  First Name:
                </label>
                <input type="text" class="form-control" name="firstname" />
              </div>
              <div class="mb-3">
                <label for="last-name" class="col-form-label">Last Name:</label>
                <input type="text" class="form-control" name="lastname" />
              </div>
              <div class="mb-3">
                <label for="email" class="col-form-label">Email:</label>
                <input type="email" class="form-control" name="email" />
              </div>
              <div class="mb-3">
                <label for="password" class="col-form-label">Password:</label>
                <input type="password" class="form-control" name="password" />
              </div>
              <div class="mb-3">
                <label for="repeatpassword" class="col-form-label">Repeat Password:</label>
                <input type="password" class="form-control" name="repeatpassword" />
              </div>
              <div class="modal-footer">
                <button type="submit" name="admin_register" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               </div>
            </form>
      </div>
      
    </div>
  </div>
</div> 

<div class="container-fluid">

                    <!-- DataTables Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Manage Admins | Information
                <button type="button" class="btn btn-primary"style="float:right; width:200px; height:35px;" 
                  data-toggle="modal" data-target="#addadmin"><i class="icon-plus-sign icon-large"></i>Add Admin
                </button>
            </h6>
        </div>
            <div class="card-body">
               

               <div class="table-responsive table-hover table-condensed" style="text-align: left;">

                    <?php

                        $sql = "SELECT * FROM adminpanel";
                        $sql_execute = mysqli_query($connection, $sql);
                    ?>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="5%">Id</th>
                                <th width="15%">Name</th>
                                <th width="15%">Email</th>
                                <th width="15%">Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th width="5%">Id</th>
                                <th width="15%">Name</th>
                                <th width="15%">Email</th>
                                <th width="15%">Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        <?php
                          if(mysqli_num_rows($sql_execute)> 0){
                            while($row = mysqli_fetch_assoc($sql_execute)){
                              ?>
                                <tr>
                                  <td><?php echo $row['id'];?></td>
                                  <td><?php echo $row['firstname'];?> <?php echo $row['lastname'];?></td>
                                  <td><?php echo $row['email'];?></td>
                                  <td><a title="Click to view the admin" href="viewstudent.php?id=<?php echo $row['id']; ?>"><button class="btn btn-success btn-mini"><i class="fa fa-search"></i> View</button></a>
                                      <a title="Click to edit the admin" href="edit_admin.php?id=<?php echo $row['id']; ?>"><button class="btn btn-warning btn-mini"><i class="fa fa-edit"></i> Edit</button></a>
                                      <a title="Click to delete" href="delete_admin.php?id=<?php echo $row['id']; ?>"><button class="btn btn-danger btn-mini"><i class="fa fa-trash"></i> Delete</button></td>
                              </tr>

                              <?php
                            }
                          }else{
                            echo "No Record Found!";
                          }
                        ?>
                        </tbody>
                    </table>
             </div>
         </div>
    </div>
</div>
                <!-- /.container-fluid -->


<?php
    include('includes/footer.php');
    include('includes/scripts.php');
?>