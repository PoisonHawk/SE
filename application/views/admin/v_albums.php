<script>
    
    var i = 1;
    
    function add_track(event){
        
        event.preventDefault();
        
        
        var str ='';
        
        str ='<span class="track"><label>'+i+'. ';
        str += '<input type="text" name="title_track_'+i+'"/>';
        str +='</label></br></span>'
        $('.tracks').append(str);
        i=i+1;
    }
    
    
    function del_track(event){
        
        event.preventDefault();
        
        $('.tracks .track').filter(':last').remove();
        i=i-1;
    }
    
</script>
<form method="POST" >
    
    <img src="" width="200"/>
    <input type="file" name="image_album">
    
    <label>Название альбома</br>
        <input type="text" name="title_album">
    </label></br>
    </br>
    <label>Треки</label>
    </br>
    <div class="tracks">        
    </div>
    <button onclick="add_track(event);">Добавить трек</button>
    <button onclick="del_track(event);">Удалить трек</button></br>
        </br>
    </br>
    <input type="submit" value="Сохранить" name="save">
</form>
