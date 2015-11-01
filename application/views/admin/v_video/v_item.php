
<?php if (isset($errors)): ?>
    <?php foreach ($errors as $e): ?>
        <div class="alert alert-danger" role="alert"><?php echo $e; ?></div>        
    <?php endforeach; ?>
<?php endif; ?>


<div class="row">
    <div class="col-md-8">
        <form method="post" class="col-lg-12 form-horizontal" role="form" >

            <div class='form-group'>
                <?php echo Form::label('title', 'Название:') ?>        
                <?php echo Form::input('title', $video->title, array('id' => 'title', 'class' => 'form-control')) ?>       
            </div>

            <div class='form-group'>
                <?php echo Form::label('link', 'Ссылка:') ?>
                <?php echo Form::input('link', $video->link, array('id' => 'link', 'class' => 'form-control')) ?>       
            </div>

            <div class='form-group'>
                <?php echo Form::label('category', 'Категория:') ?>
                <br>
                <?php echo Form::select('category', $categories, $video->category, array('id' => 'category')) ?>

            </div>

            <div class='form-group'>
                <?php echo Form::submit('save', 'Сохранить', array('class' => 'btn btn-primary')) ?>    
            </div>   
        </form>
    </div>
    
</div>


