<script>
audio = {    
    
    count : 0,
    
    
    add_track:function(event){
        
        event.preventDefault();
        
        this.count=this.count+1;
        var str ='';
        
        str ='<span class="track"><label>'+this.count+'. ';
        str += '<input type="text" name="title_track_'+this.count+'"/>';
        str +='</label></br></span>';
        $('.tracks').append(str);
        $('input[name=count]').val(this.count);       
        
    },
    
    
    del_track: function(event){
        
        event.preventDefault();
        
        $('.tracks .track').filter(':last').remove(); 
        if(this.count>0){
            this.count=this.count-1;
        }    
       
        $('input[name=count]').val(this.count);
    }
    }
   
   $(document).ready(function(){
        audio.count  = <?php echo isset($count) ? $count : '0'; ?>;
   })
    
</script>
<?php if(isset($errors)):?>
    <p><?php echo $errors;?></p>
<?php endif;?>
<form method="POST" enctype="multipart/form-data">
    
    <img src="/uploads/<?php echo isset($filename)?$filename: ''; ?>" width="200" class="img-rounded"/>
    <input type="file" name="image_album">
    <input type="submit" value="Загрузить" name="upload">
 </form>
 
 <form method="POST">
    <label>Название альбома</br>
        <input type="text" name="title_album" value="<?php echo isset($title_album) ? $title_album : ''?>">
    </label>
    <label>Год</br>
       <input type="text" name="year" value="<?php echo isset($year) ? $year : ''?>">
    </label></br>
    </br>
    <label>Треки</label>
    </br>
    <div class="tracks">
        <?php if(isset($audio)):?>
            <?php $i = 1; ?>
            <?php foreach($audio as $a):?>
                <span class="track">
                    <label>
                        <?php echo $i?>. <input type="text" name="title_track_<?php echo $i; ?>" value="<?php echo $a['name']?>"/>
                    </label>
                    </br>
                </span>
                <?php $i++;?>
            <?php endforeach;?>
        <?php endif;?>
    </div>
    <input type="hidden" value="<?php echo isset($count)? $count : '0';?>" name="count">
    <button onclick="audio.add_track(event);">Добавить трек</button>
    <button onclick="audio.del_track(event);">Удалить трек</button></br>
        </br>
    </br>
    <input type="submit" value="Сохранить" name="save">
</form>
