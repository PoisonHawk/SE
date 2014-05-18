<script>
    
    var i = 1;
    
    function add_track(event){
        
        event.preventDefault();
        
        
        var str ='';
        
        str ='<span class="track"><label>'+i+'. ';
        str += '<input type="text" name="title_track_'+i+'"/>';
        str +='</label></br></span>'
        $('.tracks').append(str);
        $('input[name=count]').val(i);
        i=i+1;
        
    }
    
    
    function del_track(event){
        
        event.preventDefault();
        
        $('.tracks .track').filter(':last').remove(); 
        if(i>0){
            i=i-1;
        }    
        $('input[name=count]').val(i);
    }
    
</script>
<?php if(isset($errors)):?>
    <p><?php echo $errors;?></p>
<?php endif;?>
<form method="POST" enctype="multipart/form-data">
    
    <img src="/uploads/<?php echo isset($filename)?$filename: ''; ?>" width="200"/>
    <input type="file" name="image_album">
    <input type="submit" value="Загрузить" name="upload">
 </form>
 
 <form method="POST">
    <label>Название альбома</br>
        <input type="text" name="title_album">
    </label>
    <label>Год</br>
       <input type="text" name="year">
    </label></br>
    </br>
    <label>Треки</label>
    </br>
    <div class="tracks">        
    </div>
    <input type="hidden" value="0" name="count">
    <button onclick="add_track(event);">Добавить трек</button>
    <button onclick="del_track(event);">Удалить трек</button></br>
        </br>
    </br>
    <input type="submit" value="Сохранить" name="save">
</form>
