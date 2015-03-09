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
    <div class="col-sm-6 col-md-2" id="album_<?php echo $d['id']?>">
        <div class="thumbnail">
            <div class="image">
                <a href="/admin/gallery/item/<?php echo $d['id']?>">
                    <img src="/photos/<?php echo $d['id']?>/thumbs/<?php echo $d['image']?>">
                </a>    
                    <div class="caption">
                        <h3><?php echo $d['title'];?></h3>
                        <p><?php echo $d['description']?></p>
                        <p><button onclick="deleteAlbum(<?php echo $d['id']?>)" type="button" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-trash"></span> Удалить</button>
</p>
                    </div>
                
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
                <p><a href="#" onclick="createAlbum()" class="btn btn-primary" data-toggle="modal" role="button">Создать</a>
            </div>
        </div>
    </div>
        
    
    <!--<button onclick="createAlbum()">Создать альбом</button>-->
    
</div>    
   
   
<div class="modal fade" id="form_dialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Новый альбом</h4>
      </div>
      <div class="modal-body">
        <form method="POST" id="form">
            <label for="title">Название:</label>
            <br/>
            <input id="title" type="text" name="title"/>
            <input type="hidden" name="token" value="<?php echo $token;?>">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
        <button type="button" class="btn btn-primary" onclick="submitForm()">Создать</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->    
    
<script>
     createAlbum = function(){
        $('#form_dialog').modal({
            backdrop: false,
        })
            
        $('#form_dialog').on('hidden.bs.modal', function (e) {
            $('#form_dialog').modal('hide');
        })
    
    };        
    
    submitForm = function(){
        $('#form').submit();
        $('#form_dialog').modal('hide');
    }
    
    
    deleteAlbum = function(id){
                
        confirm('Удалить альбом и все его содержимое?', removeAlbum, id);
        
    }
    
    removeAlbum = function(id){
        
        $.ajax({
            type:'GET',
            url:'/admin/gallery/removealbum/'+id,
            dataType: 'json',
            error: function(){
                //error...
            },
            success: function(data){
                if(data.error == true){
                    //show error
                    message(data.text);
                    
                } else {
                    $('#album_'+id).remove();
                    message(data.text);
                    
                }
            }
        })
    }
    
    message = function(text){
        
        var  id = Math.round(Math.random()/100);
        
        var html = '<div id="message_'+id+'"><p>'+text+'</p></div>';
        
        $('body').append(html);
        
        var mes = $('#message_'+id);
        
        $(mes).dialog({
            modal: true,
            buttons:
                    [
                {
                    text: "OK",
                    click: function(){
                       $(mes).remove(); 
                    }
                }
                    ],
            
            close: function(){
                $(mes).remove();
            }
            
        })
        
        $(mes).dialog('open');
    }
    
    //todo доработать передачу параметров
    confirm = function(text, func, param){
        var  id = Math.round(Math.random()/100);
        
        var html = '<div id="message_'+id+'"><p>'+text+'</p></div>';
        
        $('body').append(html);
        
        var mes = $('#message_'+id);
        
        $(mes).dialog({
            modal: true,
            buttons:
                    [
                {
                    text: "OK",
                    click: function(){
                       func(param); 
                       $(mes).remove(); 
                    }                    
                },
                {
                    text: "Отмена",
                    click: function(){
                       
                       $(mes).remove(); 
                    }                    
                },
                
                    ],
            
            close: function(){
                $(mes).remove();
            }
            
        })
        
        $(mes).dialog('open');
    }
    
</script>    

       