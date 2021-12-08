<?php
    include('blogs_logic.php'); //security file is included
    include('includes/header.php');
    include('includes/menubar.php');

?>
<div class="container mt-5">
    
    <?php foreach($sql_execute as $row){?>

        <form method="POST" action="blogs_logic.php" enctype="multipart/form-data">

            <input type="hidden" name="id" value="<?php echo $row['id'];?>">
            <input type="text" name="title" placeholder="Blog Title" 
            class="form-control bg-dark text-white my-3 text-center" value="<?php echo $row['title'];?>">
            <div class="pb-3">
                <textarea name="content" id="body" class="form-control bg-dark text-white my-3"><?php echo $row['content'];?></textarea>
            </div>
            <div class="pb-3">
                <input type="file" class="text-input"name="image" placeholder="Choose an image">
            </div>
            <button type="submit" name="update" class="btn btn-secondary"><i class="fas fa-plus"></i> Update Post</button>
        
        </form>
    <?php } ?>

    
</div>



<?php
    include('includes/scripts.php');
    include('includes/footer.php');
?>