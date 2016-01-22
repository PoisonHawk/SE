<section>
    <h2>Discography</h2>
    <div class="separator"></div>
    <div class="row">
        <?php if (isset($albums)): ?>                      
            <?php foreach ($albums as $album): ?>  
                <div class="album">
                    <div class="album-image col-md-4">
                        <img src="/uploads/<?php echo $album['image'] ?>" class="img-responsive">

                        <div class="buy-album">
                            <a href="#">Buy album</a>
                            <a href="#">band camp</a>
                            <a href="#">iTunes</a>

                        </div>		
                    </div>
                    <div class="album-tracks col-md-4">
                        <h3>Solarstorm</h3>
                        <ol>                            
                            <?php foreach ($album['tracks'] as $track): ?>                                                          
                                <li><?php echo $track['name']; ?></li>    
                            <?php endforeach; ?>                             
                        </ol>
                    </div>
                    <div class="album-description col-md-4">
                        <p><?php echo $album['description']?></p>    
                    </div>
                    <div class="clearfix"></div>
                </div>
            <?php endforeach; ?>
        <?php endif?>
        
    </div>
</section>