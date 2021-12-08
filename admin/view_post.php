<?php
    include('blogs_logic.php'); //security file is included 
    include('includes/header.php');
    include('includes/menubar.php');

  

?>

<div class="container mt-5">
    <?php foreach($sql_execute as $row){?>
        <div class="bg-dark rounded-lg text-white text-center p-5">
            <h2><?php echo $row['title'];?></h2>
            <div class="d-flex mt-2 justify-content-center align-items-right">
                    <a href="edit_post.php?id=<?php echo $row['id'];?>"><button class="btn btn-success"><i class="fas fa-edit"> Edit</i></button></a>
                <form method="POST" action="blogs_logic.php">
                    <input type="text" hidden name="id" value="<?php echo $row['id'];?>">
                    <button name="delete" class="btn btn-danger btn-mini ml-2"><i class="fas fa-trash"></i> Delete</button>
                </form>
            </div>
        </div>
            <p class="mt-5 border-left border-success pl-3"><?php echo $row['content']?></p>
    <?php } ?>
</div>

<?php
    include('includes/scripts.php');
    include('includes/footer.php');
?>