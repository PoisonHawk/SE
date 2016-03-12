
<script>
    $(document).ready(function(){
            $('a.thumb').colorbox({ 
            opacity:0.85 , 
            rel:'group1',
            maxWidth:'95%',
            maxHeight: '95%',
            current:'',
            arrowKey: false,
            });     
            
        $('.thumb').hover(function(){
            
        })

    })
    
</script>
<section >
    <div class="separator"></div>
    <div class="row">
    
     <?php foreach($filelist as $key => $value):?>  
        <div class="col-sm-4 col-md-3"> 
            <a class="thumb" href="/photos/<?php echo $id?>/origin/<?php echo $value?>" title=""> 
                <img src="/photos/<?php echo $id?>/thumbs/<?php echo $value?>" alt="" /> 
            </a>                                            
        </div>
     <?php endforeach;?>       

    </div>              
</section>

