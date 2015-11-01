</div>
</header> 
<div id="content">  
    <section id="content"><div class="ic"></div>
        <div class="main">
            <div class="content-padding-2">
                <div class="container_12">
                    <div class="wrapper">
                        <div class="grid_12">
                            <div>
                                <a href="/videos?type=music"><h3>Music Video</h3></a>
                                <a href="/videos?type=playthrough"><h3 class="letter">Playthrough</h3></a>
                                <a href="/videos?type=live"><h3 class="letter">Live</h3></a>
                            </div>

                            <?php if (isset($videos)): ?>                      
                                <?php foreach ($videos as $video): ?>

                                    <div class="wrapper">
                                                <!--<figure class="style-img-2 fleft"><a class="lightbox-image" href="video/video_AS3.swf?width=495&amp;height=275&amp;fileVideo=intro06.flv" data-gal="prettyVideo[prettyVideo]"><img src="images/page1-img2.jpg"  alt=""></a></figure>-->
                                        <iframe type="text/html" width="640" height="360" src="http://www.youtube.com/embed/<?php echo $video->videocode ?>" frameborder="0"></iframe>
                                    </div>
                                    <br>
                                <?php endforeach; ?>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block"></div>

    </section>

