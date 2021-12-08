<?php
    include('security.php');

    include('includes/header.php');
    include('includes/menubar.php');

?>

<!-- !--==============Modal===========-->
 <div id="addclient" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Contact Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <p>Please Fill Out This Form And We Shall Reach Out To You</p>
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
                <label for="phone" class="col-form-label">Phone:</label>
                <input type="tel" class="form-control" name ="phone" />
              </div>
              <div class="mb-3">
                <label for="Location" class="col-form-label">Location:</label>
                <input type="text" class="form-control" name ="location" />
              </div>
              <div class="mb-3">
                <label for="comment" class="col-form-label">Leave a message:</label>
                <textarea class="form-control" rows="3" name="comment"></textarea>
              </div>
              <div class="modal-footer">
                <button type="submit" name="client_register" class="btn btn-primary">Submit</button>
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
            <h6 class="m-0 font-weight-bold text-primary">Clients Information
                <button type="button" class="btn btn-primary"style="float:right; width:200px; height:35px;" 
                  data-toggle="modal" data-target="#addclient"><i class="icon-plus-sign icon-large"></i>Add Client
                </button>
            </h6>
        </div>
            <div class="card-body">
                
               <div class="table-responsive table-hover table-condensed" style="text-align: left;">

                    <?php
                        $sql = "SELECT * FROM clients";
                        $sql_execute = mysqli_query($connection, $sql);
                    ?>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="10%">Name</th>
                                <th width="10%">Email</th>
                                <th width="15%">Message</th>
                                <th width="18%">Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th width="10%">Name</th>
                                <th width="10%">Email</th>
                                <th width="15%">Message</th>
                                <th width="18%">Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        <?php
                          if(mysqli_num_rows($sql_execute)> 0){
                            while($row = mysqli_fetch_assoc($sql_execute)){
                              ?>
                                <tr>
                                  <td><?php echo $row['firstname'];?> <?php echo $row['lastname'];?></td>
                                  <td><?php echo $row['email'];?></td>
                                  <td><?php echo $row['comment'];?></td>
                                  <td><a title="Click to view the client" href="viewstudent.php?id=<?php echo $row['id']; ?>"><button class="btn btn-success btn-mini"><i class="fa fa-search"></i> View</button></a>
                                      <a title="Click to edit the client" href="edit_client.php?id=<?php echo $row['id']; ?>"><button class="btn btn-warning btn-mini"><i class="fa fa-edit"></i> Edit</button></a>
                                      <a title="Click to delete" href="delete_client.php?id=<?php echo $row['id']; ?>"><button class="btn btn-danger btn-mini"><i class="fa fa-trash"></i> Delete</button></td>
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
    include('includes/scripts.php');
    include('includes/footer.php');
?>