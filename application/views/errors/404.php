<!DOCTYPE html>
<html>
    <head>
        <title>Sympulse-e </title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/main.css">           
    </head>
    <body>
        <div class="container ">
            <div class='main  center'>
                <header>
                    <div class="nav row">
                        <ul class="col-md-10">
                            <li ><a href="/">News</a></li>
                            <li ><a href="/band">Band</a>
                                <ul class="submenu">
                                    <li ><a href="/band/">History</a></li>
                                    <li ><a href="/band/members">Members</a></li>
                                </ul>
                            </li>
                            <li><a href="/audio">Discography</a></li>
                            <!--<li><a  href="/shop">Shop</a></li>-->
                            <li><a href="/gallery">Media</a>
                                <ul class="submenu">
                                    <li><a  href="/gallery">Photos</a></li>
                                    <li ><a href="/videos">Videos</a></li>
                                </ul>
                            </li>
                            <li><a href="/shows">Shows</a>
                            <li><a href="/contacts">Contacts</a>
                                                        
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
                <section>
                    <h2 style="text-align:center; font-size:48px;">404 Page Not Found</h2>
                            <div class="separator"></div>
                    <div class='row'>
                            <div class="col-md-10 center col-md-offset-1">
                            <div class="band-image">
                                    <img src="/images/slider-img3.jpg" width="945">
                            </div>                            
                    </div>
                    </section>
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

                
            

