<style>
    .image_links{
        text-align: center;
        margin-top: 10px;
        margin-bottom: 20px;
    }
    
    .image-link{
        position:relative;
        display:inline-block;
        margin:10px;
    }
    
    .info{
        color: #fff;
        font-size:16px;
        background-color: rgba(0,0,0,0.4);
        width:150px;
        height:150px;
        position:absolute;
        top:0;
        border-radius: 50%;
        vertical-align: middle;
    }
    
    .text{
        font-size:14px;
    } 
</style>

<script>
    $(document).ready(function(){
        
        $('.info').hide();
        
        $('.image-link').hover(function(){
            $(this).children('.info').show();
        })
        
    })
</script>

<section id="content">

    <div class="main">
        <div class="content-padding-2">
            <div class="container_8">
                <div class="wrapper">
                    <article class="grid_8">
                        <div class="padding-grid-1">
                            <div class='image_links'>
                            <?php if (!empty($links)): ?>                            
                                <?php foreach ($links as $link): ?>
                                    <?php if(isset($link['image'])):?>
                                    <div class="image-link">
                                    <a href="/band/member/<?php echo $link['alias'] ?>">
                                        <img  src='/uploads/<?php echo $link['image'] ?>' width='100' height='100' alt='<?php echo $link['title'] ?>' class='img-circle'>
                                        <p class="info"><?php echo $link['title']?></p>
                                    </a>
                                    </div>
                                    <?php endif;?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            </div>
                            <div class='text'>
                            <?php echo $text ?>	
                            </div>
                        </div>
                    </article>

                </div>
            </div>
        </div>
    </div>
    <div class="block"></div>
</section>

