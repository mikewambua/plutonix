<?php
    include('security.php');

    include('includes/header.php');
    include('includes/menubar.php');
?>

<!-- !--==============Modal===========-->
 <div id="aboutus" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">About Us Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <p>Add About Us Page</p>
            <form method="post" action="dbhelper.php" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="title" class="col-form-label">
                  Title:
                </label>
                <input type="text" class="form-control" name="title" />
              </div>
              <div class="mb-3">
                <label for="subtitle" class="col-form-label">Subtitle:</label>
                <input type="text" class="form-control" name="subtitle" />
              </div>
              <div class="mb-3">
                <label for="description" class="col-form-label">Description:</label>
                <input type="text" class="form-control" name="description" />
              </div>
              <div class="mb-3">
                <label for="links" class="col-form-label">Links:</label>
                <input type="links" class="form-control" name ="links" />
              </div>
              <div class="mb-3">
                <label for="image" class="col-form-label">Image:</label>
                <input type="file" class="form-control" name ="image" />
              </div>
              <div class="modal-footer">
                <button type="submit" name="register_btn" class="btn btn-primary">Submit</button>
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
            <h6 class="m-0 font-weight-bold text-primary">About Page Content
                <button type="button" class="btn btn-primary"style="float:right; width:200px; height:35px;" 
                  data-toggle="modal" data-target="#aboutus"><i class="icon-plus-sign icon-large"></i>About Page | Add Content
                </button>
            </h6>
        </div>
            <div class="card-body">
               <div class="table-responsive table-hover table-condensed" style="text-align: left;">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="5%">Id</th>
                                <th width="15%">Title</th>
                                <th width="15%">Subtitle</th>
                                <th width="10%">Description</th>
                                <th width="10%">Links</th>
                                <th width="25%">Image</th>
                                <th width="20%">Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th width="5%">Id</th>
                                <th width="15%">Title</th>
                                <th width="15%">Subtitle</th>
                                <th width="10%">Description</th>
                                <th width="10%">Links</th>
                                <th width="25%">Image</th>
                                <th width="20%">Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a title="Click to view the client" href="#"><button class="btn btn-success btn-mini"><i class="icon-search"></i> View</button></a>
                                    <a title="Click to edit the client" href="#"><button class="btn btn-warning btn-mini"><i class="icon-edit"></i> Edit</button></a>
                                    <a title="Click to delete" href="#"><button class="btn btn-danger btn-mini"><i class="icon-trash"></i> Delete</button></td>
                              </tr>
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