<div id="audio">
    <?php if (isset($albums)):?>
        <?php foreach($albums as $album):?>
            <p><?php echo $album['name'];?></p>
        <?php endforeach;?>    
    <?php else:?>
        <p>Альбомов нет</p>
    <?php endif;?>
        <br/>
        <br/>
    <a class="btn btn-success" href="/admin/audio/albums">Добавить альбом</a>
</div>
