

<?php if(isset($message)):?>
    <p><?php echo $message;?></p>
<?php endif; ?>

</div>

<section id="content">
    <div class="main">
        <div class="content-padding-2">
            <div class="container_12">
                <div class="wrapper">
                    <div class="grid_12">
                        <div class="padding-grid-1">
                            <h3 class="letter">Наша <strong>Галерея</strong></h3>
                            <div id="js">
                                <div class="js-padding">
                                    <div id="gallery" class="content">
                                        <div class="wrapper">
                                            <div class="slideshow-container">
                                                <div id="controls" class="controls"></div>    
                                                <div id="slideshow" class="slideshow"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="thumbs" class="navigation">
                                    <a class="pageLink prev" style="visibility: hidden;" href="#" title="Previous Page"></a>
                                    <ul class="thumbs noscript">
                                     <?php foreach($data as $d):?>  
                                        <li>
                                            <a class="thumb" href="/gallery/item/<?php echo $d['id']?>" title=""> 
                                                <img src="/photos/<?php echo $d['id']?>/thumbs/<?php echo $d['image']?>" alt="" />
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
        
        
    </div>
    
        <div class="block"></div>
</section>
