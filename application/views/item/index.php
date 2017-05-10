
<form method="post" action="<?php echo APP_URL ?>/item/add" enctype="multipart/form-data"> 
    <input type="hidden" value="204800" name="MAX_FILE_SIZE"/> 
    File: <input type="file" name="imgfile" /> 
    <input type="submit" value="OK" name="submitbtn" style="width:100px;height:23px"/></center> 
</form> 
<br/><br/>

<?php $number = 0?>
 
<?php foreach ($items as $item): ?>
    <a class="big" href="<?php echo APP_URL ?>/item/view/<?php echo $item['id'] ?>" title="点击修改">
        <span class="item">
            <?php echo ++$number ?>
            <?php echo $item['item_name'] ?>
        </span>
    </a>
    ----
    <a class="big" href="<?php echo APP_URL ?>/item/delete/<?php echo $item['id']?>">删除</a>
<br/>
<?php endforeach ?>