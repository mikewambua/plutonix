<?php
    include('../path.php');
    include(ROOT_PATH . '/app/includes/header.php');
    include(ROOT_PATH . '/app/includes/navbar.php');
?>
<div class="container-fluid">
    <!-- Start posts slider -->
    <div id="slides">
        <h1 class="fw-bold text-center pt-5">Trending Posts</h1>
        <i class="fas fa-chevron left prev"></i>
        <i class="fas fa-chevron rght next"></i>
        <div class="post-wrapper">
            <div class="row">
                        <?php 
                        require('../admin/database/dbconfig.php');

                        $sql = "SELECT * FROM blogs";
                        $sql_execute = mysqli_query($connection, $sql);

                        $check_post = mysqli_num_rows($sql_execute);
                        if($check_post > 0){
                            while($row = mysqli_fetch_array($sql_execute)){
                                ?>
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    <img class="card-img-top" src="<?php echo BASE_URL . '/assets/uploads/' . $row['image'];?>" alt="">
                                    <div class="card-body">
                                        <h4 class="card-title"><?php echo $row['title'];?></h4>
                                        <p class="card-text"><?php echo html_entity_decode(substr($row['content'], 0, 150).'...');?></p>                
                                        <a href="viewpost.php?id=<?php echo $row['id']?>" class="btn btn-success">Read More<span class="text-danger">&rarr;</span></a>
                                    </div>
                                </div>
                            </div>
                        <?php
                                }

                            }else{
                                echo "No Post Found!";
                            } 
                        ?>
            </div>
        </div>
    </div>
    <!-- End posts slider -->
</div>

<?php
   include(ROOT_PATH . '/app/includes/scripts.php');
   include(ROOT_PATH . '/app/includes/footer.php');
?>