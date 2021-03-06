<script>
    audio = {
        count: 0,
        add_track: function (event) {

            event.preventDefault();

            this.count = this.count + 1;
            var str = '';

            str = '<span class="track track_' + this.count + '"><label>' + this.count + '. ';
            str += '<input  class="form-control" type="text" name="title_track_' + this.count + '"/>';
            str += '</label>';
//            str += '<input id="" type="file" name="file_track_' + this.count + '"/></span></br>';


            $('.tracks').append(str);
            $('input[name=count]').val(this.count);

        },
        del_track: function (event) {

            event.preventDefault();

            $('.tracks .track').filter(':last').remove();
            if (this.count > 0) {
                this.count = this.count - 1;
            }

            $('input[name=count]').val(this.count);
        },
        file_remove: function (id, num) {
            $.ajax({
                url: '/admin/audio/audioremove/' + id,
                dataType: "json",
                success: function (data) {

                    if (data.status == 'ok') {
                        $('.track_' + num + ' span').remove();
                        $('.track_' + num).append('<input id="" type="file" name="file_track_' + num + '"/>');
                    }
                }
            })
        },
                
    }

    $(document).ready(function () {
        audio.count = <?php echo isset($count) ? $count : '0'; ?>;


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
        $('#form').bind('reset', function () {
            $('#image_preview').attr('src', 'https://lh6.googleusercontent.com/-L17_eJqIsDI/UzbeiYk96RI/AAAAAAAASP4/SbOqhSuEyU4/s100-no/image-is-not-uploaded.jpg');
        });


    })

</script>
<?php if (isset($errors)): ?>
    <?php foreach ($errors as $e): ?>
        <div class="alert alert-danger"><?php echo $e; ?></div>
    <?php endforeach; ?>
<?php endif; ?>
<div class="row">
    <div class="col-md-8">
        <form method="POST" enctype="multipart/form-data" multiple class="col-md-6">
            <div class="">
                <img id='image_preview' src="<?php echo isset($filename) ? "/uploads/" . $filename : 'http://placehold.it/300x200'; ?>" width="150" class="img-rounded"/>
            </div>    
            <input id='image' type="file" name="image_album" >

            <div class="form-group">
                <label>Название альбома</label>
                <input class="form-control" type="text" name="title_album" value="<?php echo isset($title_album) ? $title_album : '' ?>">
            </div>

            <div class="form-group">
                <label>Год</label>
                <input class="form-control" type="text" name="year" value="<?php echo isset($year) ? $year : '' ?>">
            </div>
            </br>
            <label>Треки</label>
            </br>
            <div class="tracks">
                <?php if (isset($audio)): ?>
                    <?php $i = 1; ?>
                    <?php foreach ($audio as $a): ?>
                        <span class="track track_<?php echo $i; ?>">
                            <label>
                                <?php echo $i ?>. <input class="form-control"  type="text" name="title_track_<?php echo $i; ?>" value="<?php echo $a['name'] ?>"/>
                            </label>
                            <?php if (!empty($a['file'])): ?>
                                <span><?php echo $a['file']; ?><span onclick="audio.file_remove(<?php echo $a['id']; ?>, <?php echo $i; ?>)"> x</span></span>
                            <?php else: ?>    
                                <!--<input type='file' name='file_track_<?php echo $i; ?>'/>-->
                            <?php endif; ?>    
                            </br>
                        </span>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <input type="hidden" value="<?php echo isset($count) ? $count : '0'; ?>" name="count">
            <button class="btn btn-success" onclick="audio.add_track(event);">Добавить трек</button>
            <button class="btn btn-danger" onclick="audio.del_track(event);">Удалить трек</button></br>
            </br>
            </br>
            <div class="form-group">
                <?php echo Form::label('description', 'Описание')?>
                <?php echo Form::textarea('description', isset($description) ? $description : '', array('class'=> 'form-control'))?>
            </div>
            
            <fieldset>
                <legend>Shop's links</legend>                
                    <div class="form-group">
                        <?php echo Form::label('store_albums[bandcamp]', 'Bandcamp')?>
                        <?php echo Form::input('store_albums[bandcamp]', isset($store_albums['bandcamp']['url']) ? $store_albums['bandcamp']['url'] : null, array('class'=> 'form-control'))?>
                    </div>
                    
                
            </fieldset>
            <input type="submit" value="Сохранить" name="save">
        </form>
    </div>
    <div class="col-md-4">
        <div class='panel panel-default'>
            <div class='panel-heading'>Albums
            </div>
            <div class='panel-body'>
                <ol class="nav">
                    <?php foreach ($list_albums as $album): ?>
                        <li><a href="/admin/audio/albums/<?php echo $album->id ?>"><?php echo $album->name ?></a></li>
                    <?php endforeach ?>
                </ol>
            </div>
        </div>
    </div>
</div>
