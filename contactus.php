<?php
    include('path.php');
    include(ROOT_PATH . '/app/includes/header.php');
    include(ROOT_PATH . '/app/includes/navbar.php');
?>

<div class="container-fluid justify center">
      <div class="modal-body col-sm-12 col-md-4 offset-md-4">
            <p>Please Fill Out This Form</p>
            <form method="post" action= "">
              <div class="mb-3">
                <label for="first-name" class="col-form-label">
                  First Name:</label>
                <input type="text" class="form-control" name="firstname" required />
              </div>
              <div class="mb-3">
                <label for="last-name" class="col-form-label">Last Name:</label>
                <input type="text" class="form-control" name="lastname"  required/>
              </div>
              <div class="mb-3">
                <label for="email" class="col-form-label">Email:</label>
                <input type="email" class="form-control" name="email" />
              </div>
              <div class="mb-3">
                <label for="phone" class="col-form-label">Phone:</label>
                <input type="tel" class="form-control" name="phone" required/>
              </div>
              <div class="mb-3">
                <label for="comment" class="col-form-label">Leave a message:</label>
                <textarea class="form-control" rows="5" name="comment"></textarea>
              </div>
              <div class="mb-3">
                <center><button type="submit" name="submit" class="btn btn-success">Submit</button></center>
              </div>
            </form>
      </div>
  </div> 

  <?php
   include(ROOT_PATH . '/app/includes/scripts.php');
   include(ROOT_PATH . '/app/includes/footer.php');
  ?>