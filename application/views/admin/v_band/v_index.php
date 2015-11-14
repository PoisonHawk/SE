<script>
    tinyMCE.init({
        mode: 'textareas',
        theme: 'modern',
        languages: 'ru',
//        images_upload_base_path: "/images/",        
        plugins: 'link,image,media,textcolor, colorpicker, contextmenu',
        height: '300px',
    })
</script>    
<?php if (isset($errors)): ?>
    <?php foreach ($errors as $e): ?>
        <div class="alert alert-danger" role="alert"><?php echo $e; ?></div>        
    <?php endforeach; ?>
<?php endif; ?>


<div class="row">
    <div class="col-md-8">
        <form method="post" class="col-lg-12 form-horizontal" role="form">

            <div class='form-group'>
                <?php echo Form::label('content', 'Содержимое:') ?>
                <?php echo Form::textarea('content', $band->content, array('id' => 'content', 'rows' => 5)) ?>

            </div>
            <div class='form-group'>

                <?php echo Form::checkbox('active', 1, $band->active == 1, array('id' => 'active')) ?>
                <?php echo Form::label('active', 'Отобразить на сайте') ?>
            </div>
            <div class='form-group'>
                <?php echo Form::submit('save', 'Сохранить', array('class' => 'btn btn-primary')) ?>    
            </div>   
        </form>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">Участники</div>
            <div class="panel-body">
                <ul>
                <?php foreach ($members as $member):?>
                    <li><a href="/admin/band/member/<?php echo $member->id?>"><?php echo $member->title?></li>
                <?php endforeach?>
                    <li><a href="/admin/band/member/">Добавить</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

