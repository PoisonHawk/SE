<section id="content">
    
    <div class="main">
        <div class="content-padding-2">
            <div class="container_8">
                <div class="wrapper">
                    <article class="grid_8">
                        <div class="padding-grid-1">
                            <?php if(!empty($links)):?>                            
                                <?php foreach($links as $link):?>
                                    <a href="/band/<?php echo $link['alias']?>"><?php echo $link['title']?></a>
                                <?php endforeach;?>
                            <?php endif;?>
                            <?php echo $text?>	
                        </div>
                    </article>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="block"></div>
</section>

