<div id="audio">
    <?php if (isset($albums)):?>
        <?php foreach($albums as $album):?>
            <a href='/admin/Audio/albums/<?php echo $album['id']?>'>
                <p>
                    <img src="/uploads/<?php echo $album['image']?>" width="100" class="img-rounded">
                    <?php echo $album['name'];?>
                </p>
            </a>
         <?php endforeach;?>    
    <?php else:?>
        <p>Альбомов нет</p>
    <?php endif;?>
        <br/>
        <br/>
    <a class="btn btn-success" href="/admin/audio/albums">Добавить альбом</a>
</div>
