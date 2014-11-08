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


<div class="container">
<?php if(empty($filelist)):?>
    <p>В альбоме еще нет загруженных фотографий</p>
<?php endif;?>
<div class="alert"></div>   
<div class="images">
    <ul>
        <?php foreach($filelist as $key => $value):?>  
           <li>
               <!--<a href="/photos/<?php echo $id?>/origin/<?php echo $value?>" title="">--> 
                   <img src="/photos/<?php echo $id?>/thumbs/<?php echo $value?>" alt="" class="img-rounded"/>
                   <span class="remove glyphicon glyphicon-remove" onclick="del(this)"></span>
               <!--</a>-->
           </li>
        <?php endforeach;?>       

</ul>


    <div class="clearfix"></div>

<form method="POST" enctype="multipart/form-data">
    <input type="file" name="image" />
    <input type="submit" name="submit" value="Upload"/>
</form>
    
</div> 
    
     <script>
        del = function(obj){
            
            var path = $(obj).siblings('img').attr('src');
            console.log(path);
            
            $.ajax({
                url:'/admin/gallery/remove',
                type:'post',
                data:{path:path},
                dataType:'json',
                success:function(data){
                    if (data.success == 'success') {
                        $(obj).parent('li').remove();
                        $('.alert')
                                .addClass('alert-success')
                                .html('Изображение успешно удалено')
                                .show()
                                .fadeOut(2000, function(){
                                    $(this).removeClass('alert-success');
                                })
                    }
                    
                    if (data.error == 'error'){
                        $('.alert')
                                .addClass('alert-danger')
                                .html('Не удалось удалить изображение')
                                .show()
                                .fadeOut(2000, function(){
                                    $(this).removeClass('alert-danger');
                                });
                    }
                    
                },
                error:function(){
                    $('.alert')
                                .addClass('alert-danger')
                                .html('Не удалось удалить изображение');
                }
            })
            
        }
        
   $(document).ready(function(){
       
       $('.alert').hide();
   })    
    </script>    