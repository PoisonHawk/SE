<!DOCTYPE html>
<html>
    <head>
        <title>Sympulse-e | <?php echo $title; ?></title>
        <meta charset="utf-8">
        <!-- <link rel="stylesheet" href="bower_components/normalize-css/normalize.css"> -->
        <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/main.css">
        <?php foreach ($styles as $style): ?>
            <?php echo HTML::style($style); ?>
        <?php endforeach; ?>
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="/js/main.js"></script>
        <?php foreach ($scripts as $script): ?>
            <?php echo HTML::script($script); ?>
        <?php endforeach; ?> 
    </head>
    <body>
        <div class="container ">
            <div class='main  center'>
                <header>
                    <div class="nav row">
                        <ul class="col-md-10">
                            <li ><a class="<?php echo $current == 'Index' ? 'selected' : '' ?>" href="/">News</a></li>
                            <li ><a class="<?php echo $current == 'Band' ? 'selected' : '' ?>" href="/band">Band</a>
                                <ul class="submenu">
                                    <li ><a class="<?php echo $current == 'Band' ? 'selected' : '' ?>" href="/band/">History</a></li>
                                    <li ><a class="<?php echo $current == 'Members' ? 'selected' : '' ?>" href="/band/members">Members</a></li>
                                </ul>
                            </li>
                            <li><a class="<?php echo $current == 'Audio' ? 'selected' : '' ?>" href="/audio">Discography</a></li>
                            <!--<li><a class="<?php echo $current == 'Shop' ? 'selected' : '' ?>" href="/shop">Shop</a></li>-->
                            <li><a class="<?php echo $current == 'Videos' ? 'selected' : '' ?>" href="/gallery">Media</a>
                                <ul class="submenu">
                                    <li><a class="<?php echo $current == 'Gallery' ? 'selected' : '' ?>" href="/gallery">Photos</a>
<!--                                                        <ul class="submenu">
                                            <li ><a class="<?php echo $current == 'Gallery' ? 'selected' : '' ?>" href="/gallery/live">Live</a></li>
                                            <li ><a class="<?php echo $current == 'Gallery' ? 'selected' : '' ?>" href="/gallery/promo">Promo</a></li>
                                        </ul>-->
                                    </li>
                                    <li ><a class="<?php echo $current == 'Videos' ? 'selected' : '' ?>" href="/videos">Videos</a></li>
                                </ul>
                            </li>
                            <li><a class="<?php echo $current == 'Shows' ? 'selected' : '' ?>" href="/shows">Shows</a>
                            <li><a class="<?php echo $current == 'Contacts' ? 'selected' : '' ?>" href="/contacts">Contacts</a>
                                                        
                        </ul>
                        <div class="social col-md-2">
                            <?php if(isset($social_vk) and $social_vk !== ''):?>
                                <a class="vk" title="VK" href="<?php echo $social_vk?>"></a>
                            <?php endif;?>
                            <?php if(isset($social_vk) and $social_fb !== ''):?>
                                <a class="fb" title="Facebook" href="<?php echo $social_fb?>"></a>
                            <?php endif;?>
                            <?php if(isset($social_tw) and $social_tw !== ''):?>
                                <a class="tw" title="Twitter" href="<?php echo $social_tw?>"></a>
                            <?php endif;?>
                                <?php if(isset($social_yt) and $social_yt !== ''):?>
                                <a class="tooltips n-2 yt" title="Twitter" href="<?php echo $social_yt?>"></a>
                            <?php endif;?>
<!--                            <a href="#" class="vk"></a>
                            <a href="#" class="fb"></a>
                            <a href="#" class="tw"></a>
                             <a href="#" class="yt"></a> -->
                        </div>
                    </div>

                    <div class="logo">
                        <img src='/images/logo_se.png' width="800">
                    </div>
                </header>
                <div class="content">
                <?php echo $content; ?>
                </div>
                <div class="separator"></div>
                <footer>
                    <section class="endorsers">
                        <img src="/images/esp.png" width="150">
                        <img src="/images/esp.png" width="150">
                        <img src="/images/esp.png" width="150">
                        <img src="/images/esp.png" width="150">
                        <img src="/images/esp.png" width="150">
                        <img src="/images/esp.png" width="150">
                        <img src="/images/esp.png" width="150">
                    </section>
                    <div class="copyright">
                        Sympulse&copy;2015
                    </div>
                    <div class="social col-md-2">
                        <?php if(isset($social_vk) and $social_vk !== ''):?>
                                <a class="vk" title="VK" href="<?php echo $social_vk?>"></a>
                            <?php endif;?>
                            <?php if(isset($social_vk) and $social_fb !== ''):?>
                                <a class="fb" title="Facebook" href="<?php echo $social_fb?>"></a>
                            <?php endif;?>
                            <?php if(isset($social_tw) and $social_tw !== ''):?>
                                <a class="tw" title="Twitter" href="<?php echo $social_tw?>"></a>
                            <?php endif;?>
                                <?php if(isset($social_yt) and $social_yt !== ''):?>
                                <a class="tooltips n-2 yt" title="Twitter" href="<?php echo $social_yt?>"></a>
                            <?php endif;?>
                        <!-- <a href="#" class="yt"></a> -->
                    </div>
                </footer>
            </div>
            <div class="clear"></div>
        </div>
    </body>
</html>

                
            

