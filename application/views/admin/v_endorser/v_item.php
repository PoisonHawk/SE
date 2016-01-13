<?php if (isset($errors)): ?>
    <?php foreach ($errors as $e): ?>
        <div class="alert alert-danger" role="alert"><?php echo $e; ?></div>        
    <?php endforeach; ?>
<?php endif; ?>
<div class="row">
    <div class="col-md-6">
        <form method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class='control-group'>
                <label class="control-label" for="fest">Название</label>
                <div class="controls">
                    <input type="text" name="name" id="fest" class="form-control" value="<?php echo isset($name) ? $name : '' ?>"/>
                </div>    
            </div>            
            
            <div class='control-group'>
                <label class="control-label" for="event_link">Ссылка</label>
                <div class="controls">
                    <input type="text" name="link" id="event_link" class="form-control" value="<?php echo isset($link) ? $link : '' ?>"/>
                </div>    
            </div>

            <?php if (isset($image)): ?>
                <img src="/uploads/<?php echo $image; ?>" width="150">
                <input type="hidden" value="<?php echo $image ?>" name="image">
            <?php endif; ?>

            <div class='control-group'>
                <label class="control-label" for="image">Прикрепить изображаение(PNG)</label>
                <div class="controls">
                    <input type="file" name="image" id="image" class="" value="<?php echo isset($image) ? $image : '' ?>"/>
                </div>    
            </div>

            <div class='control-group'>
                <input type="submit" value="Добавить" class='btn btn-primary' name="send">
            </div>   
        </form>
    </div>
</div>
