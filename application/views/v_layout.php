<!DOCTYPE html>
<html>
    <head>
        <title>Sympulse-e | <?php echo $title; ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link rel="stylesheet" href="bower_components/normalize-css/normalize.css"> -->
        <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <?php foreach ($styles as $style): ?>
            <?php echo HTML::style($style); ?>
        <?php endforeach; ?>
        <script src="/bower_components/jquery/dist/jquery.js"></script>
        <script src="/js/main.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <?php foreach ($scripts as $script): ?>
            <?php echo HTML::script($script); ?>
        <?php endforeach; ?> 

    </head>
    <body>
        <div class="navbar navbar-fixed-top top-menu" role="navigation">
            <div class="container">
                    <a id="touch-menu" class="mobile-menu" href="#"><span class="glyphicon glyphicon-menu-hamburger"></span> Menu</a>
                    <nav>   
                        <ul class="menu">
                            <li ><a class="<?php echo $current == 'Index' ? 'selected' : '' ?>" href="/">News</a></li>
                            <li><a href="#">Band</a>
                                <ul class="sub-menu">
                                    <li ><a class="<?php echo $current == 'Band' ? 'selected' : '' ?>" href="/band/">History</a></li>
                                    <li ><a class="<?php echo $current == 'Members' ? 'selected' : '' ?>" href="/band/members">Members</a></li>
                                </ul>
                            </li>
                            <li><a class="<?php echo $current == 'Audio' ? 'selected' : '' ?>" href="/audio">Discography</a></li>
                            <!--<li><a class="<?php echo $current == 'Shop' ? 'selected' : '' ?>" href="/shop">Shop</a></li>-->
                            <li><a class="<?php echo $current == 'Videos' ? 'selected' : '' ?>" href="/gallery">Media</a>
                                <ul class="sub-menu">
                                    <li><a class="<?php echo $current == 'Gallery' ? 'selected' : '' ?>" href="/gallery">Photos</a>
                                    <li ><a class="<?php echo $current == 'Videos' ? 'selected' : '' ?>" href="/videos">Videos</a></li>
                                </ul>
                            </li>
                            <li><a class="<?php echo $current == 'Shows' ? 'selected' : '' ?>" href="/shows">Shows</a>
                            <li><a class="<?php echo $current == 'Contacts' ? 'selected' : '' ?>" href="/contacts">Contacts</a>

                        </ul>
                    </nav>
                    <div class="social social-top">
                        <?php if (isset($social_vk) and $social_vk !== ''): ?>
                            <a class="vk" title="VK" href="<?php echo $social_vk ?>"><i class="fa fa-vk"></i></a>
                        <?php endif; ?>
                        <?php if (isset($social_vk) and $social_fb !== ''): ?>
                            <a class="fb" title="Facebook" href="<?php echo $social_fb ?>"><i class="fa fa-facebook"></i></a>
                        <?php endif; ?>
                        <?php if (isset($social_tw) and $social_tw !== ''): ?>
                            <a class="tw" title="Twitter" href="<?php echo $social_tw ?>"><i class="fa fa-twitter"></i></a>
                        <?php endif; ?>
                        <?php if (isset($social_yt) and $social_yt !== ''): ?>
                            <a class="tooltips n-2 yt" title="Youtube" href="<?php echo $social_yt ?>"><i class="fa fa-youtube"></i></a>
                        <?php endif; ?>
                    </div>
            </div>
        </div>


        <div class="container">
            <div class='main  center'>
                <div class="logo col-xs-12 col-md-12">
                    <img src='/images/logo_se.png'>
                </div>
                <div class="content">
                    <?php echo $content; ?>
                </div>
                <div class="separator"></div>
                <footer>
                    <section class="endorsers">

                        <?php if (count($endorsers) > 0): ?>
                            <?php foreach ($endorsers as $e): ?>

                                <?php if ($e->link): ?>
                                    <a href="<?php echo $e->link ?>" target="_blank">
                                    <?php endif; ?>
                                    <img src="/uploads/<?php echo $e->image ?>" width="150" height="50" style="margin: 10px;">
                                    <?php if ($e->link): ?>
                                    </a>
                                <?php endif; ?>

                            <?php endforeach; ?>
                        <?php endif; ?>


                    </section>
                    <div class="copyright">
                        Sympulse&copy;2015
                    </div>
<!--                    <div class="social col-md-2">
                        <?php if (isset($social_vk) and $social_vk !== ''): ?>
                            <a class="vk" title="VK" href="<?php echo $social_vk ?>"></a>
                        <?php endif; ?>
                        <?php if (isset($social_vk) and $social_fb !== ''): ?>
                            <a class="fb" title="Facebook" href="<?php echo $social_fb ?>"></a>
                        <?php endif; ?>
                        <?php if (isset($social_tw) and $social_tw !== ''): ?>
                            <a class="tw" title="Twitter" href="<?php echo $social_tw ?>"></a>
                        <?php endif; ?>
                        <?php if (isset($social_yt) and $social_yt !== ''): ?>
                            <a class="tooltips n-2 yt" title="Twitter" href="<?php echo $social_yt ?>"></a>
                        <?php endif; ?>
                         <a href="#" class="yt"></a> 
                    </div>-->
                </footer>
            </div>
            <div class="clear"></div>
        </div>
        <script>
        
        $(document).ready(function(){ 
	var touch 	= $('#touch-menu');
	var menu 	= $('.menu');
 
	$(touch).on('click', function(e) {
		e.preventDefault();
		menu.slideToggle();
	});
	
	$(window).resize(function(){
		var w = $(window).width();
		if(w > 767 && menu.is(':hidden')) {
			menu.removeAttr('style');
		}
	});
	
});
        </script>
    </body>
</html>




