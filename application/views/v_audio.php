<section>
    <h2>Discography</h2>
    <div class="separator"></div>
    <div class="row">
        <?php if (isset($albums)): ?>                      
            <?php foreach ($albums as $album): ?>  
                <div class="album">
                    <div class="album-image col-md-4">
                        <img src="/uploads/<?php echo $album['image'] ?>" width="300">

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
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque iaculis nulla consectetur consequat sodales. Cras nisi enim, sagittis a facilisis at, posuere non ligula. Nulla pretium lorem in tortor volutpat, nec tincidunt neque mollis. Nam molestie nibh massa. In nec odio ac sem laoreet hendrerit. Sed interdum eu lectus vel aliquam. Cras posuere pulvinar augue nec aliquam. Vivamus eget ante sed nisi lacinia fringilla. Vestibulum tristique odio est, at sodales nibh interdum dapibus. Nam faucibus leo ut ex tincidunt laoreet. Sed in ultrices ante. Nam ullamcorper ex id nunc vestibulum molestie. Quisque in eros volutpat, tempus metus a, facilisis nulla. Sed rutrum turpis in massa rhoncus, in pretium purus aliquet. Donec malesuada eget nulla quis convallis.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            <?php endforeach; ?>
        <?php endif?>
        
    </div>
</section>