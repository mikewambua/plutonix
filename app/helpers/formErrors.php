<?php if(count($errors)>0){?>
    <div class="msg error text-danger">
        <?php foreach($errors as $error){?>
            <li><?php echo $error;?></li>
        <?php } ?>
    </div>
<?php } ?>