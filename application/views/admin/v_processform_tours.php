  <script>
$(document).ready(function(){
    
    $('#date').datepicker({dateFormat:'dd-mm-yy'});
    
})

</script>  
<?php if(isset($errors)):?>
    <?php foreach($errors as $e):?>
        <p><?php echo $e; ?></p>
    <?php endforeach; ?>
<?php endif ;?>
<form method="post" class="form-horizontal" enctype="multipart/form-data">

    <div class='control-group'>
        <label class="control-label" for="date">Дата</label>
        <div class="controls">
            <input type="text" name="date" id="date" class="input-large" value="<?php echo isset($date)? date('d-m-Y',$date): ''?>"/>
        </div>    
    </div>
    <div class='control-group'>
        <label class="control-label" for="city">Город</label>
        <div class="controls">
            <input type="text" name="city" id="city" class="input-large" value="<?php echo isset($city)? $city: ''?>"/>
        </div>    
    </div>
    <div class='control-group'>
        <label class="control-label" for="fest">Название фестиваля</label>
        <div class="controls">
            <input type="text" name="fest" id="fest" class="input-large" value="<?php echo isset($fest)? $fest: ''?>"/>
        </div>    
    </div>
    <div class='control-group'>
        <label class="control-label" for="club">Клуб</label>
        <div class="controls">
            <input type="text" name="club" id="club" class="input-large" value="<?php echo isset($club)? $club: ''?>"/>
        </div>    
    </div>
    
    
    <?php if (isset($image)):?>
        <img src="/uploads/<?php echo $image; ?>" width="160">
        <input type="hidden" value="<?php echo $image?>" name="image">
    <?php endif;?>
    
    <div class='control-group'>
        <label class="control-label" for="image">Прикрепить изображаение</label>
        <div class="controls">
            <input type="file" name="image" id="image" class="input-large" value="<?php echo isset($image)? $image: ''?>"/>
        </div>    
    </div>
   
    <div class='control-group'>
        <input type="submit" value="Добавить" class='btn btn-primary' name="send">
    </div>   
</form>

