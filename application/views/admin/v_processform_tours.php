  <script>
$(document).ready(function(){
    
    $('#date').datepicker();
    
})

</script>  
<?php if(isset($errors)):?>
    <?php foreach($errors as $e):?>
        <p><?php echo $e; ?></p>
    <?php endforeach; ?>
<?php endif ;?>
<form method="post" class="form-horizontal">

    <div class='control-group'>
        <label class="control-label" for="date">Дата</label>
        <div class="controls">
            <input type="text" name="date" id="date" class="input-large" value="<?php echo isset($date)? date('m/d/Y',$date): ''?>"/>
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
   
    <div class='control-group'>
        <input type="submit" value="Добавить" class='btn btn-primary' name="send">
    </div>   
</form>

