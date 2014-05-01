<?php if(isset($errors)):?>
    <?php foreach($errors as $e):?>
        <p><?php echo $e; ?></p>
    <?php endforeach; ?>
<?php endif ;?>
<form method="post" class="form-horizontal">
<!--    <div class='control-group'>
        <label class="control-label" for="date">Дата</label> 
        <div class="controls">
            <input type="text" name="date" id="date" class="span4 input-large"/>  
        </div>    
    </div>-->
    <div class='control-group'>
        <label class="control-label" for="header">Заголовок</label>
        <div class="controls">
            <input type="text" name="title" id="header" class="input-large" value="<?php echo isset($title)? $title: ''?>"/>
        </div>    
    </div>
    <div class='control-group'>
        <textarea id="description" name="desc" rows="5"><?php echo isset($desc)?$desc:''?></textarea>
    </div>
    <div class='control-group'>
        <input type="submit" value="Добавить" class='btn btn-primary' name="send">
    </div>   
</form>

