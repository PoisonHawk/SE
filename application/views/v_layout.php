<!Doctype html>
<html>
    <head>
        <title>Sympulse-e | <?php echo $title; ?></title>

        <meta charset="utf-8">
        <!--        <link href="/css/bootstrap.min.css" rel="stylesheet">
                <link href="/css/bootstrap.css" rel="stylesheet">-->
        <link rel="icon" type="image/vnd.microsoft.icon" href="/se2.ico">
        <link rel="stylesheet" href="/css/reset.css" type="text/css" media="screen">
        <link rel="stylesheet" href="/css/style.css" type="text/css" media="screen">
        <link rel="stylesheet" href="/css/grid.css" type="text/css" media="screen">
        <link rel="stylesheet" href="/css/prettyPhoto.css" type="text/css" media="screen">  
        <link rel="stylesheet" href="/css/simpleplayer.css" type="text/css" media="screen"> 
        <link rel="stylesheet" href="/css/jquery-ui-1.10.4.custom.css" type="text/css" media="screen"> 

        <?php foreach ($styles as $style): ?>
            <?php echo HTML::style($style); ?>
        <?php endforeach; ?>

        <script src="/js/jquery-1.6.3.min.js" type="text/javascript"></script>
        <script src="/js/FF-cash.js" type="text/javascript"></script> 
        <script src="/js/script.js" type="text/javascript"></script>
        <script type="text/javascript" src="/js/easyTooltip.js"></script>
        <script src="/js/jquery.easing.1.3.js" type="text/javascript"></script>
        <script src="/js/hover-image.js" type="text/javascript"></script>
        <script src="/js/jquery.prettyPhoto.js" type="text/javascript"></script>
        <script src="/js/jquery.easing.1.3.js" type="text/javascript"></script>
        <script src="/js/jquery-ui-1.10.4.custom.js" type="text/javascript"></script>
        <script type="text/javascript" src="/js/tms-0.3.js"></script>
        <script type="text/javascript" src="/js/tms_presets.js"></script>
        <!--<script type="text/javascript" src="/js/simpleplayer/jquery.simpleplayer.min.js"></script>-->
        <?php foreach ($scripts as $script): ?>
            <?php echo HTML::script($script); ?>
        <?php endforeach; ?> 
        <script type="text/javascript">

            $(window).load(function () {
                $('.slider')._TMS({
                    duration: 800,
                    easing: 'easeOutQuad',
                    preset: 'diagonalFade',
                    pagination: false,
                    slideshow: 6000,
                    banners: false,
                    waitBannerAnimation: false,
                    pauseOnHover: true
                });
                $("a[data-gal^='prettyVideo']").prettyPhoto({animation_speed: 'normal', theme: 'facebook', slideshow: false, autoplay_slideshow: false});
            });
        </script>	

        <!--[if lt IE 7]>
                <div style=' clear: both; text-align:center; position: relative;'>
                        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
                                <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
                        </a>
                </div>
        <![endif]-->
        <!--[if lt IE 9]>
                <script type="text/javascript" src="js/html5.js"></script>
                <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
        <![endif]-->


    </head>


    <body id="page1">
        <?php if (Auth::instance()->logged_in('admin')): ?>
            <div id="admin_panel">
                <span><a href="/admin/<?php echo UTF8::strtolower($current); ?>">Админка</a></span>
                <div style="float:right">
                    <span><?php echo Auth::instance()->get_user(); ?></span>
                    <span><a href="/login/logout">Выйти</a></span>
                </div>
            </div>
        <?php endif; ?>
        <div class="extra">
            <!--==============================header=================================-->
            <header>

                <script>
                    $(document).ready(function(){
                        $('ul.menu li').hover(
                            function(){

                                $(this).children('ul')
                                        .show();
                            },
                            function(){
                            
                                $(this).children('ul')
                                        .hide();
                            }
                        )
                      
                    })
                </script>
                <style>
                    /*    .menu>li{
                            position:relative;
                        }*/

                    .menu .submenu{
                        position:absolute;
                        z-index: 999999;
                        top:30px;
                        left:0;
                        display:none;
                        background:rgba(0,0,0,0.4);
                    }
                    
                    .submenu a {
                        display:block;
                        height:15px;
                        padding: 8px 5px;
                        color:#666;
                    }  
                </style>
                <div class="main">
                    <div class="bg-1">
                        <h1><a href="/index"><?php echo $site_name; ?></a></h1>
                    </div>
                    <nav>
                        <div class="menu-bg-tail">
                            <div class="menu-bg">
                                <div class="container_12">
                                    <div class="grid_12">                                        
                                        <ul class="menu">
                                            <li ><a class="<?php echo $current == 'Index' ? 'active' : '' ?>" href="/">News</a></li>
                                            <li ><a class="<?php echo $current == 'Band' ? 'active' : '' ?>" href="/band">Band</a>
                                                <ul class="submenu">
                                                    <li ><a class="<?php echo $current == 'Band' ? 'active' : '' ?>" href="/band/">History</a></li>
                                                    <li ><a class="<?php echo $current == 'Members' ? 'active' : '' ?>" href="/band/members">Members</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="<?php echo $current == 'Audio' ? 'active' : '' ?>" href="/audio">Discography</a></li>
                                            <li><a class="<?php echo $current == 'Shop' ? 'active' : '' ?>" href="/shop">Shop</a></li>
                                            <li><a class="<?php echo $current == 'Videos' ? 'active' : '' ?>" href="/gallery">Media</a>
                                                <ul class="submenu">
                                                    <li><a class="<?php echo $current == 'Gallery' ? 'active' : '' ?>" href="/gallery">Photos</a>
<!--                                                        <ul class="submenu">
                                                            <li ><a class="<?php echo $current == 'Gallery' ? 'active' : '' ?>" href="/gallery/live">Live</a></li>
                                                            <li ><a class="<?php echo $current == 'Gallery' ? 'active' : '' ?>" href="/gallery/promo">Promo</a></li>
                                                        </ul>-->
                                                    </li>
                                                    <li ><a class="<?php echo $current == 'Videos' ? 'active' : '' ?>" href="/videos">Videos</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="<?php echo $current == 'Shows' ? 'active' : '' ?>" href="/shows">Shows</a>
                                            <li><a class="<?php echo $current == 'Contacts' ? 'active' : '' ?>" href="/contacts">Contacts</a>
                                        </ul>                                        
                                        <div class="clear"></div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </nav>

                    <!--        <div id="content">-->
                    <?php echo $content; ?>
                </div>
                <!--==============================footer=================================-->
                <footer>
                    <div class="main">
                        <div class="footer-bg">
                            <div class="container_12">
                                <div class="wrapper">
                                    <div class="grid_12">
                                        <div class="footer-padding">
                                            <div class="wrapper">
                                                <span class="footer-link"><span>Sympuls-e &copy; <?php echo date('Y', time()) ?></span> </span>
                                                <ul class="list-services">
                                                    <?php if(isset($social_vk) and $social_vk !== ''):?>
                                                        <li><a class="tooltips n-1 vk" title="VK" href="<?php echo $social_vk?>"></a></li>
                                                    <?php endif;?>
                                                    <?php if(isset($social_vk) and $social_fb !== ''):?>
                                                        <li><a class="tooltips n-2 fb" title="Facebook" href="<?php echo $social_fb?>"></a></li>
                                                    <?php endif;?>
                                                    <?php if(isset($social_tw) and $social_tw !== ''):?>
                                                        <li><a class="tooltips n-2 tw" title="Twitter" href="<?php echo $social_tw?>"></a></li>
                                                    <?php endif;?>
                                                        <?php if(isset($social_yt) and $social_yt !== ''):?>
                                                        <li><a class="tooltips n-2 yt" title="Twitter" href="<?php echo $social_yt?>"></a></li>
                                                    <?php endif;?>
                                                    
                                                </ul>
                                            </div>
                                            <div class="aligncenter">
                                                <!-- {%FOOTER_LINK} -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                </body>
                </html>

