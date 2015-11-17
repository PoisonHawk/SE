<style>

    .images{
        margin:20px 0;
    }

    .images li {
        float: left;
        margin-left: 10px;
        list-style: none;
        position:relative;
    }

    .images img{

    }

    .remove{
        position:absolute;
        top:5px;
        right:5px;
        color:red;
        width:10px;
        height:10px;
    }

    .remove:hover{
        cursor:pointer;
    }
</style>


<div class="row">
    <div class="col-sm-8">   
    <?php if (isset($errors)): ?>
        <?php foreach ($errors as $error):?>
        <p class="alert alert-danger"><?php echo $error?></p>
        <?php endforeach?>
    <?php endif; ?>    
        
    <?php if (empty($filelist)): ?>
        <p>В альбоме еще нет загруженных фотографий</p>
    <?php endif; ?>
    <div class="alert"></div>   

    <form class="form" method="POST">

        <div class="form-group">
            <?php echo Form::label('title', 'Название'); ?>
            <?php echo Form::input('title', $title, array('id' => 'title', 'class' => 'form-control')) ?>
        </div>

        <div class="form-group">
            <?php echo Form::label('category', 'Категория'); ?>
            <?php echo Form::select('category', $categories, $category, array('id' => 'category', 'class' => 'form-control')) ?>
        </div>
        
        <div class="form-group">
            <?php echo Form::label('description', 'Описание'); ?>
            <?php echo Form::textarea('description', $description, array('id' => 'description', 'class' => 'form-control')) ?>
        </div>

        <?php echo Form::submit('edit', 'Сохранить', array('class' => 'btn btn-primary')) ?>

    </form>

    <div class="images">
        <ul>
            <?php foreach ($filelist as $key => $value): ?>  
                <li>
                    <!--<a href="/photos/<?php echo $id ?>/origin/<?php echo $value ?>" title="">--> 
                    <img src="/photos/<?php echo $id ?>/thumbs/<?php echo $value ?>" alt="" class="img-rounded"/>
                    <span class="remove glyphicon glyphicon-remove" onclick="del(this)"></span>
                    <!--</a>-->
                </li>
            <?php endforeach; ?>       

        </ul>


        <div class="clearfix"></div>

        <form method="POST" enctype="multipart/form-data">
            <input type="file" name="image" />
            <input class="btn btn-primary" type="submit" name="upload" value="Загрузить"/>
        </form>

    </div> 
    </div>
    <div class="col-sm-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <a href="/admin/gallery">Альбомы</a>
            </div>
            <div class="panel-body">
                <?php foreach($albums as $album):?>
                <p><a href="/admin/gallery/item/<?php echo $album->id?>"><?php echo $album->title?></a></p>
                <?php endforeach?>
            </div>
        </div>
    </div>
</div>

    <script>
        del = function (obj) {

            var path = $(obj).siblings('img').attr('src');
            console.log(path);

            $.ajax({
                url: '/admin/gallery/remove',
                type: 'post',
                data: {path: path},
                dataType: 'json',
                success: function (data) {
                    if (data.success == 'success') {
                        $(obj).parent('li').remove();
                        $('.alert')
                                .addClass('alert-success')
                                .html('Изображение успешно удалено')
                                .show()
                                .fadeOut(2000, function () {
                                    $(this).removeClass('alert-success');
                                })
                    }

                    if (data.error == 'error') {
                        $('.alert')
                                .addClass('alert-danger')
                                .html('Не удалось удалить изображение')
                                .show()
                                .fadeOut(2000, function () {
                                    $(this).removeClass('alert-danger');
                                });
                    }

                },
                error: function () {
                    $('.alert')
                            .addClass('alert-danger')
                            .html('Не удалось удалить изображение');
                }
            })

        }

        $(document).ready(function () {

//            $('.alert').hide();
        })
    </script>    