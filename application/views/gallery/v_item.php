
<script>
    $(document).ready(function(){
            $('a.thumb').colorbox({ 
            opacity:0.85 , 
            rel:'group1',
//            width: '500px',
//            maxWidth:'800px',
            current:'',
            });     
    })
</script>
<section >
    <div class="separator"></div>
    <div class="row">
    
     <?php foreach($filelist as $key => $value):?>  
        <div class="col-md-3" style="margin-bottom:30px"> 
            <a class="thumb" href="/photos/<?php echo $id?>/origin/<?php echo $value?>" title=""> 
                <img src="/photos/<?php echo $id?>/thumbs/<?php echo $value?>" alt="" /> 
            </a>                                            
        </div>
     <?php endforeach;?>       

    </div>              
</section>

