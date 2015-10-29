<script>
    tinyMCE.init({
        mode: 'textareas',
        theme: 'modern',
        languages: 'ru',
//        images_upload_base_path: "/images/",        
        plugins: 'link,image,media,textcolor, colorpicker, contextmenu',
        height:'300px',
    })
</script>    
<?php if(isset($errors)):?>
    <?php foreach($errors as $e):?>
        <div class="alert alert-danger" role="alert"><?php echo $e; ?></div>        
    <?php endforeach; ?>
<?php endif ;?>
        


<form method="post" class="col-lg-12 form-horizontal" role="form">
    
    <div class='form-group'>
        <?php echo Form::label('title', 'Название:')?>
        <?php echo Form::input('title', $member->title, array('id'=>'title', 'class'=>'form-control'))?>       
    </div>
    
    <div class='form-group'>
        <?php echo Form::label('alias', 'Алиас:')?>
        <?php echo Form::input('alias', $member->alias, array('id'=>'alias', 'class'=>'form-control'))?>       
    </div>
    
    <div class='form-group'>
        <?php echo Form::label('content', 'Содержимое:')?>
        <?php echo Form::textarea('content', $member->content, array('id'=>'content', 'rows'=>5))?>
       
    </div>
    <div class='form-group'>
        
        <?php echo Form::checkbox('active', 1, $member->active==1, array('id'=>'active'))?>
        <?php echo Form::label('active', 'Отобразить на сайте')?>
    </div>
    <div class='form-group'>
        <?php echo Form::submit('save', 'Сохранить', array('class'=>'btn btn-primary'))?>    
    </div>   
</form>



