<script>
    tinyMCE.init({
        mode: 'textareas',
        theme: 'modern',
        languages: 'ru',
//        images_upload_base_path: "/images/",        
        plugins: 'link,image,media,textcolor, colorpicker, contextmenu',
        height: '300px',
    })


    $(document).ready(function () {
        $('#image').change(function () {
            console.log('ASAS');
            var input = $(this)[0];
            if (input.files && input.files[0]) {
                if (input.files[0].type.match('image.*')) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#image_preview').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                } else
                    console.log('is not image mime type');
            } else
                console.log('not isset files data or files API not supordet');
        });
        $('form').bind('reset', function () {
            $('#image_preview').attr('src', 'https://lh6.googleusercontent.com/-L17_eJqIsDI/UzbeiYk96RI/AAAAAAAASP4/SbOqhSuEyU4/s100-no/image-is-not-uploaded.jpg');
        });

    })

</script>    
<?php if (isset($errors)): ?>
    <?php foreach ($errors as $e): ?>
        <div class="alert alert-danger" role="alert"><?php echo $e; ?></div>        
    <?php endforeach; ?>
<?php endif; ?>


<div class="row">
    <div class="col-md-8">
        <form method="post" class="col-lg-12 form-horizontal" role="form" enctype="multipart/form-data" >

            <div class='form-group'>
                <?php echo Form::label('title', 'Название:') ?>        
                <?php echo Form::input('title', $member->title, array('id' => 'title', 'class' => 'form-control')) ?>       
            </div>

            <div class='form-group'>
                <?php echo Form::label('alias', 'Алиас:') ?>
                <?php echo Form::input('alias', $member->alias, array('id' => 'alias', 'class' => 'form-control')) ?>       
            </div>

            <div class='form-group'>
                <?php echo Form::label('image', 'Изображение:') ?>
                <div class="">
                    <img id='image_preview' src="<?php echo isset($member->image) ? "/uploads/" . $member->image : 'http://placehold.it/150x150'; ?>" width="150" class="img-circle"/>
                </div> 
                <?php echo Form::file('image', array('id' => 'image')) ?>
            </div>

            <div class='form-group'>
                <?php echo Form::label('content', 'Описание:') ?>
                <?php echo Form::textarea('content', $member->content, array('id' => 'content', 'rows' => 5)) ?>

            </div>

            <div class='form-group'>
                <?php echo Form::label('weight', 'Вес (чем больше вес, тем правее будет ссылка):') ?>
                <br>
                <?php echo Form::select('weight', $weights, $member->weight, array('id' => 'weight')) ?>

            </div>

            <div class='form-group'>
                <?php echo Form::label('vk', 'Вконтакте: ') ?>
                <?php echo Form::input('social[vk]', isset($member->social['vk'])?$member->social['vk']:null, array('id' => 'vk', 'class' => 'form-control')) ?>
                <br>
                <?php echo Form::label('fb', 'Facebook: ') ?>
                <?php echo Form::input('social[fb]', isset($member->social['fb'])?$member->social['fb']:null, array('id' => 'fb', 'class' => 'form-control')) ?>
                <br>
                <?php echo Form::label('tw', 'Twitter: ') ?>
                <?php echo Form::input('social[tw]', isset($member->social['tw'])?$member->social['tw']:null, array('id' => 'tw', 'class' => 'form-control')) ?>
                <br>
                <?php echo Form::label('yt', 'YouTube: ') ?>
                <?php echo Form::input('social[yt]', isset($member->social['yt'])?$member->social['yt']:null, array('id' => 'yt', 'class' => 'form-control')) ?>
                <br>
            </div>
            
            <div class='form-group'>

                <?php echo Form::checkbox('active', 1, $member->active == 1, array('id' => 'active')) ?>
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


