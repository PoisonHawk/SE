<script>
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
</script>    
<?php if (isset($errors)): ?>
    <?php foreach ($errors as $e): ?>
        <p><?php echo $e; ?></p>
    <?php endforeach; ?>
<?php endif; ?>
<form method="post" class="col-lg-12 form-horizontal" role="form">
    <!--    <div class='control-group'>
            <label class="control-label" for="date">Дата</label> 
            <div class="controls">
                <input type="text" name="date" id="date" class="span4 input-large"/>  
            </div>    
        </div>-->
    <div class='form-group'>
        <label class="control-label" for="header">Заголовок</label>
        <div class="">
            <input type="text" name="title" id="header" class="form-control" value="<?php echo isset($title) ? $title : '' ?>"/>
        </div>    
    </div>
    <div class='form-group'>
        <label class="" for="header">Текст</label>
        <textarea  id="description" name="desc" rows="5"><?php echo isset($desc) ? $desc : '' ?></textarea>
    </div>
    <div class='form-group'>
        <input type="submit" value="Добавить" class='btn btn-primary' name="send">
    </div>   
</form>

