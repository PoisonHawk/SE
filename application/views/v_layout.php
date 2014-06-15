<!Doctype html>
<html>
    <head>
        <title><?php echo $title;?></title>
        
        <meta charset="utf-8">
		<link rel="stylesheet" href="/css/reset.css" type="text/css" media="screen">
		<link rel="stylesheet" href="/css/style.css" type="text/css" media="screen">
		<link rel="stylesheet" href="/css/grid.css" type="text/css" media="screen">
		<link rel="stylesheet" href="/css/prettyPhoto.css" type="text/css" media="screen">  
                
                <?php foreach($styles as $style): ?>
                    <?php echo html::style($style);?>
                <?php endforeach; ?>
                
		<script src="/js/jquery-1.6.3.min.js" type="text/javascript"></script>
		<script src="/js/cufon-yui.js" type="text/javascript"></script>
		<script src="/js/cufon-replace.js" type="text/javascript"></script>
		<script src="/js/Vegur_700.font.js" type="text/javascript"></script>
		<script src="/js/Vegur_400.font.js" type="text/javascript"></script> 
		<script src="/js/FF-cash.js" type="text/javascript"></script> 
		<script src="/js/script.js" type="text/javascript"></script>
		<script type="text/javascript" src="/js/easyTooltip.js"></script>
		<script src="/js/jquery.easing.1.3.js" type="text/javascript"></script>
		<script src="/js/hover-image.js" type="text/javascript"></script>
		<script src="/js/jquery.prettyPhoto.js" type="text/javascript"></script>
		<script src="/js/jquery.easing.1.3.js" type="text/javascript"></script>
		<script type="text/javascript" src="/js/tms-0.3.js"></script>
		<script type="text/javascript" src="/js/tms_presets.js"></script>
		<script type="text/javascript">
                 
			$(window).load(function(){
				$('.slider')._TMS({
					duration:800,
					easing:'easeOutQuad',
					preset:'diagonalFade',
					pagination:false,
					slideshow:6000,
					banners:false,
					waitBannerAnimation:false,
					pauseOnHover:true
				});
				$("a[data-gal^='prettyVideo']").prettyPhoto({animation_speed:'normal',theme:'facebook',slideshow:false, autoplay_slideshow: false});
			}); 
		</script>	
                <?php foreach($scripts as $script): ?>
                    <?php echo html::js($script);?>
                <?php endforeach; ?>   
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
            <?php if(Auth::instance()->logged_in('admin')):?>
            <div id="admin_panel">
                <span><a href="/admin/<?php echo $current;?>">Админка</a></span>
                <div>
                    <span><?php echo Auth::instance()->get_user();?></span>
                    <span><a href="/login/logout">Выйти</a></span>
                </div>
            </div>
            <?php endif;?>
		<div class="extra">
<!--==============================header=================================-->
			<header>
				<div class="main">
					<div class="bg-1">
						<h1><a href="/index"><?php echo $site_name; ?></a></h1>
					</div>
					<nav>
						<div class="menu-bg-tail">
							<div class="menu-bg">
								<div class="container_12">
									<div class="grid_12">
                                                                            <?php if(isset($menu)):?>
										<ul class="menu">
                                                                                    <?php foreach($menu as $link => $name):?>
                                                                                    <?php if($link == $current):?>
                                                                                        <li class="item"><a class="active" href="/<?php echo $link?>"><?php echo $name?></a></li>
                                                                                    <?php else:?>
                                                                                        <li><a href="/<?php echo $link?>"><?php echo $name?></a></li>
                                                                                    <?php endif; ?>
                                                                                    <?php endforeach;?>
<!--											<li class="item"><a class="active" href="/index">About</a></li>
											<li><a href="audio.html">Audio</a></li>
											<li><a href="video.html">Video</a></li>
											<li><a href="gallery.html">Gallery</a></li>
											<li class="item-1"><a href="tour-dates.html">Tour Dates</a></li>
											<li class="last"><a href="contacts.html">Contacts</a></li>-->
										</ul>
                                                                            <?php endif;?>
										<div class="clear"></div>
									</div>
									<div class="clear"></div>
								</div>
							</div>
						</div>
					</nav>
					
        <div id="content">
            <?php echo $content;?>
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
										<span class="footer-link"><span>Superior.com &copy; 2011</span> <a rel="nofollow" target="_blank" class="link" href="">Website Template</a> by TemplateMonster.com</span>
										<ul class="list-services">
											<li><a class="tooltips n-1" title="Twitter" href="#"></a></li>
											<li><a class="tooltips n-2" title="Facebook" href="#"></a></li>
											<li class="last"><a class="tooltips n-3" title="Youtube" href="http://www.youtube.com/user/DmitrySympuls"></a></li>
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
		<script type="text/javascript"> Cufon.now(); </script>
    </body>
</html>

