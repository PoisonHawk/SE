
<?php if(empty($filelist)):?>
    <p>В альбоме еще нет загруженных фотографий</p>
<?php endif;?>

<ul class="thumbs noscript">
    <?php foreach($filelist as $key => $value):?>  
       <li>
           <a class="thumb" href="/photos/<?php echo $id?>/origin/<?php echo $value?>" title=""> 
               <img src="/photos/<?php echo $id?>/thumbs/<?php echo $value?>" alt="" /> 
           </a>
       </li>
    <?php endforeach;?>       

</ul>




<form method="POST" enctype="multipart/form-data">
    <input type="file" name="image" />
    <input type="submit" name="submit" value="Upload"/>
</form>