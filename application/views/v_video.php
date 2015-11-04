</div>
</header>
<script>
    $(document).ready(function () {
        $('#playthrough').slider();
        $('#music').slider();
        $('#live').slider();
    })
</script>
<div id="content">  
    <section id="content"><div class="ic"></div>
        <div class="main">
            <div class="content-padding-2">
                <div class="container_12">
                    <div class="wrapper">
                        <div class="grid_12">
                            <div>
                                <?php if (count($v_music) > 0): ?>
                                    <section class="video-box" id="music">
                                        <h3>Ofiicial Music Video</h3>
                                        <div class="slideshow">
                                            <div class="slidesContainer">
                                                <?php foreach ($v_music as $vm): ?>
                                                    <div class="slide">
                                                        <a href="<?php echo $vm->link?>" target="_blank">
                                                            <img src="http://img.youtube.com/vi/<?php echo $vm->videocode ?>/mqdefault.jpg" width="280" height="180">
                                                        </a>
                                                    </div>                                            
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </section>
                                <?php endif; ?>
                                <div class="clearfix"></div>
                                <?php if (count($v_playthrough) > 0): ?>
                                    <section class="video-box" id="playthrough">
                                        <h3 class="letter">Playthrough</h3>
                                        <div class="slideshow">
                                            <div class="slidesContainer">
                                                <?php foreach ($v_playthrough as $vp): ?>
                                                    <div class="slide">
                                                        <a href="<?php echo $vp->link?>" target="_blank">
                                                            <img src="http://img.youtube.com/vi/<?php echo $vp->videocode ?>/mqdefault.jpg" width="280" >
                                                        </a>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </section>
                                <?php endif; ?>
                                <div class="clearfix"></div>
                                <?php if (count($v_live) > 0): ?>  
                                    <section class="video-box" id="live">
                                        <h3 class="letter">Live</h3>
                                        <div class="slideshow">
                                            <div class="slidesContainer">
                                                <?php foreach ($v_live as $vl): ?>
                                                    <div class="slide">
                                                        <a href="<?php echo $vl->link?>" target="_blank">
                                                            <img src="http://img.youtube.com/vi/<?php echo $vl->videocode ?>/mqdefault.jpg" width="280" height="180">
                                                        </a>
                                                    </div>                                            
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </section>
                                <?php endif; ?>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block"></div>

    </section>
</div>
    <style>
        .video-box{
            margin: 10px 0;
        }

        .slideshow{
            position:relative;
        }

        .slideshow .slidesContainer {
            margin:0 auto;

            width:900px;
            height:180px;
            overflow:auto; /* разрешаем прокрутку */
            position:relative;
        }

        .slideshow .slidesContainer .slide {
            /*margin:0 auto;*/
            margin:18px 10px;
            width:280px; 
            height:180px;
        }

        /**
 * Slideshow controls style rules.
 */
        .control {
            display:block;
            /*width:39px;*/
            /*height:196px;*/
            /*text-indent:-10000px;*/
            position:absolute;
            cursor: pointer;
            z-index:100;
        }
        .leftControl {
            top:82px;
            left:0;
            /*background:rgba(255,255,255,0.5);*/
        }
        .rightControl {
            top:82px;
            right:0;
            /*background:rgba(255,255,255,0.5);*/
        }



    </style>