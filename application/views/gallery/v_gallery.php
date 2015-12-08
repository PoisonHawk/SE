<section>
    <h2>Photos</h2>
    <div class="categories">
        <a href="/gallery?cat=all">All</a>
        <a href="/gallery?cat=live">Live</a>
        <a href="/gallery?cat=promo">Promo</a>
    </div>
    <div class="separator"></div>

    <div class="video row">		
        <?php foreach($data as $d):?>
        <div class="item live col-md-4">
            <a href="videos.html">
                <div class="photo-image">
                    <img src="/photos/<?php echo $d['id'] ?>/thumbs/<?php echo $d['image'] ?>" width="325">

                    <div class="photos-album-title">
                        <h4><?php echo $d['title'] ?></h4>
                    </div>
                </div>
            </a>
        </div>						
        <?php endforeach;?>
    </div>
</section>
