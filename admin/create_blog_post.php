<?php
    include('security.php');
    include('includes/header.php');
    include('includes/menubar.php');
?>
<div class="container mt-5">
    <form method="POST" action="blogs_logic.php" enctype="multipart/form-data">
        <div>
            <input type="text" name="title" placeholder="Blog Title" class="form-control bg-dark text-white my-3 text-center">
        </div>
        <div class="pb-3">
            <label for="body"></label>
            <textarea name="content" id="body" class="form-control bg-dark text-white my-3"></textarea>
        </div>
        <div class="pb-3">
            <input type="file" class="text-input"name="image" placeholder="Choose an image">
        </div>
        <button type="submit" name="add_post" class="btn btn-secondary"><i class="fas fa-plus"></i> Add Post</button>
    </form>
</div>




<?php
    include('includes/scripts.php');
    include('includes/footer.php');
?>