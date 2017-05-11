<div class="container marketing" style="padding-top:50px;">

    <form method="post" action="add" enctype="multipart/form-data">  
        File Description:  
        <input type="text" name="form_description" size="40">  
        <INPUT TYPE="hidden" name="MAX_FILE_SIZE" value="1000000"> <br>  
        File to upload/store in database:  
        <input type="file" name="form_data" size="40">  
        <p><input type="submit" name="submit" value="submit">  
    </form>  


    <?php $number = 0?>
    
    <?php foreach ($items as $item): ?>
        <img src="<?php echo APP_URL ?>/item/view/<?php echo $item['id'] ?>" />
            <span class="item">
                <?php echo $item['name'] ?>
                <?php echo $item['author'] ?>
            </span>
        </a>
        ----
        <a class="big" href="<?php echo APP_URL ?>/item/delete/<?php echo $item['id']?>">删除</a>
    <br/>
    <?php endforeach ?>
</div>