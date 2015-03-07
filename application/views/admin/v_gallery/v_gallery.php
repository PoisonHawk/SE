<?php if(!empty($errors)):?>
    <?php foreach($errors as $error):?>
        <p><?php echo $error;?></p>
    <?php endforeach;?>    
<?php endif; ?>


<?php if(isset($message)):?>
    <p><?php echo $message;?></p>
<?php endif; ?>
<div clas="row">
    
<?php if(!empty($data)):?>
    <?php foreach($data as $d):?>
    <div class="col-sm-6 col-md-2">
        <div class="thumbnail">
            <div class="image">
                <a href="/admin/gallery/item/<?php echo $d['id']?>">
                    <img src="/photos/<?php echo $d['id']?>/thumbs/<?php echo $d['image']?>">
                    <div class="caption">
                        <h3><?php echo $d['title'];?></h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <?php endforeach;?>
<?php endif; ?>
    
    
    <div class="col-sm-6 col-md-2">
        <div class="thumbnail">
            <img data-src="holder.js/300x200" alt="...">
            <div class="caption">
                <h3>Новый альбом</h3>
                <p><a href="#" onclick="createAlbum()" class="btn btn-primary" role="button">Создать</a>
            </div>
        </div>
    </div>
        
    
    <!--<button onclick="createAlbum()">Создать альбом</button>-->
    
</div>    
   


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

       