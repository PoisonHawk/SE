

<?php if(isset($message)):?>
    <p><?php echo $message;?></p>
<?php endif; ?>

</div>
<style>
    .cat-links{
        margin: 10px 0 20px 0;
    }
    
    .cat-links a{
        display: inline-block;
        padding: 5px 10px;
        color: #45d6ed;
        font-size: 20px;
        text-transform: uppercase;
        font-weight: bold;
        text-decoration: none;        
    }
    
</style>

    <div class="main">
        <div class="content-padding-2">
            <div class="container_12">
                <div class="wrapper">
                    <div class="grid_12">
                        <div class="padding-grid-1">
<!--                            <h3 class="letter">Наша <strong>Галерея</strong></h3>-->
                            <div class="cat-links">
                                <a href="/gallery?cat=all">All</a>
                                <a href="/gallery?cat=live">Live</a>
                                <a href="/gallery?cat=promo">Promo</a>
                            </div>
                                                         
                                <div id="thumbs" class="navigation">
                                    <a class="pageLink prev" style="visibility: hidden;" href="#" title="Previous Page"></a>
                                    <ul class="thumbs noscript">
                                     <?php foreach($data as $d):?>  
                                        <li>
                                            <a class="thumb" href="/gallery/item/<?php echo $d['id']?>" title=""> 
                                                <img src="/photos/<?php echo $d['id']?>/thumbs/<?php echo $d['image']?>" alt="" width="250" height="250" />
                                                <h6><?php echo $d['title']?></h6>
                                                
                                            </a>
                                        </li>
                                     <?php endforeach;?>       

                                    </ul>
                                    <a class="pageLink next" style="visibility: hidden;" href="#" title="Next Page"></a>
                                    <div class="clear"></div>
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>
    
        <div class="block"></div>
</div>
