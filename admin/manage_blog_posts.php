<?php
    include('blogs_logic.php'); //security file is here 

    include('includes/header.php');
    include('includes/menubar.php');


?>

<div class="container fluid">
    <?php if(isset($_REQUEST['info'])){?>
           <?php if($_REQUEST['info'] == 'added'){?>
            <div class="alert alert-success" role="alert">
                Post has been successfully added!
            </div>
        <?php } else if($_REQUEST['info'] == 'updated'){?>
            <div class="alert alert-success" role="alert">
                Post has been successfully updated!
            </div>
          <?php } else if($_REQUEST['info'] == 'deleted'){?>
            <div class="alert alert-danger" role="alert">
                Post has been successfully deleted!
            </div>
          <?php } ?>
    <?php } ?>
    <div class="card shadow mb-4 col-xs-12">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Manage Blogs | Add Post
                <a href="create_blog_post.php" class="btn btn-primary"
                    style="float:right; width:200px; height:35px;"><i class="fa fa-plus"></i> Add Post
                </a>
            </h6>
        </div>
    </div>
    <div class="row">
        <?php
            $sql = "SELECT * FROM blogs";
            $sql_execute = mysqli_query($connection, $sql);
        ?>
        <?php foreach($sql_execute as $row){?>
        <div class="col-lg-4 md-4 xs-12 d-flex justify-content-center align-items-center">
            <div class="card text-white bg-dark mt-5">
                <div class="card-body" style="width: 20rem;">
                    <h5 class="card-title"><?php echo $row['title'];?></h5>
                    <p class="card-text"><?php echo html_entity_decode(substr($row['content'], 0, 150).'...');?></p>
                    <a href="view_post.php?id=<?php echo $row['id'];?>" class="btn btn-light">Read More<span class="text-danger">&rarr;</span></a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

<?php
    include('includes/scripts.php');
    include('includes/footer.php');
?>