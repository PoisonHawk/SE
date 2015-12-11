<script>
    $(document).ready(function () {

        tinyMCE.init({
            mode: 'textareas',
            theme: 'modern',
            languages: 'ru',
            plugins: 'link,media,preview, insertdatetime',
            height: '300px',
            toolbar: 'undo redo | styleselect | bold italic | link | alignleft aligncenter alignright | bullist numlist outdent indent | preview |  insertdatetime ',
            menubar: 'edit insert view format tools',
            content_css: "/css/tinymce.min.css",
            allow_html_in_named_anchor: true,
            insertdatetime_formats: ["%d.%m.%Y", "%H:%M"],
        })

        $('#image').change(function () {
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
<div class="row">
    <div class="col-md-8">
        <?php if (isset($errors)): ?>
            <?php foreach ($errors as $e): ?>
                <p><?php echo $e; ?></p>
            <?php endforeach; ?>
        <?php endif; ?>
        <form method="post" class="col-lg-12 form-horizontal" role="form" enctype="multipart/form-data">
            <div class='form-group'>
                <label class="control-label" for="header">Заголовок</label>
                <input type="text" name="title" id="header" class="form-control" value="<?php echo isset($title) ? $title : '' ?>"/>

            </div>
            <div class='form-group'>
                <label class="" for="image">Прикрепить изображение</label><br>
                <img id='image_preview' src="<?php echo isset($img) ? '/uploads/' . $img : '' ?>" width='400'>

                <input  type="file" id="image" name='image'>
            </div>
            <div class='form-group'>
                <label class="" for="header">Текст</label>
                <textarea  id="description" name="desc" rows="5"><?php echo isset($desc) ? $desc : '' ?></textarea>
            </div>
            <div class='form-group'>
                <input type="submit" value="Добавить" class='btn btn-primary' name="send">
            </div>   
        </form>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                Новости
            </div>
            <div class="panel-body">
                <p><a href="/admin/news"> Все</a></p>
                <ul class="">
                    
                    <?php if (isset($news)): ?>
                        <?php foreach ($news as $new): ?>
                            <li><a href="/admin/news/processnew/<?php echo $new->id ?>"><?php echo $new->title ?></li>
                        <?php endforeach; ?>
                    <?php endif ?>
                    
                </ul>
                <p><a href="/admin/news/processnew">Добавить</a></p>
            </div>
        </div>
    </div>
</div>


