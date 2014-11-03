<?php if(!empty($errors)):?>
    <?php foreach($errors as $error):?>
        <p><?php echo $error;?></p>
    <?php endforeach;?>    
<?php endif; ?>


<?php if(isset($message)):?>
    <p><?php echo $message;?></p>
<?php endif; ?>

<?php if(!empty($data)):?>
    <?php foreach($data as $d):?>
    <div class="image">
        <a href="/admin/gallery/item/<?php echo $d['id']?>">
            <img src="/photos/<?php echo $d['id']?>/thumbs/<?php echo $d['image']?>">
            <p><?php echo $d['title'];?></p>
        </a>
    </div>    
    <?php endforeach;?>
<?php endif; ?>    
    
<button onclick="createAlbum()">Создать альбом</button>   


<div id="form_dialog">
    <form method="POST">
        <input type="text" name="title"/>
        <input type="hidden" name="token" value="<?php echo $token;?>">
    </form>
</div>    
    
<script>
    
    $(document).ready(function(){
        
        $('#form_dialog').dialog({
            autoOpen:false,
            modal:'true',
            title:"Название альбома",
            resizible: false,
            buttons: [{
                    text: 'Создать',                   
                    click: function(){
                        $('#form_dialog form').submit();
                        $('#form_dialog').dialog('close');
                        $('#form_dialog').remove();
                    },
            }],
            close: function(){
                $('#form_dialog').remove();
            }
        })
        
    })
    
    
    createAlbum = function(){
       
       $('#form_dialog').dialog('open');
    
    };        
</script>    

       