    
<script type="text/javascript">
			$(document).ready(function() {
				$('div.navigation').css({'width' : '920px', 'float' : 'left'});
				$('div.content').css('display', 'block');

				// Initially set opacity on thumbs and add
				// additional styling for hover effect on thumbs
				var onMouseOutOpacity = 1;
				$('#thumbs ul.thumbs li a').opacityrollover({
					mouseOutOpacity:   onMouseOutOpacity,
					mouseOverOpacity:  0.6,
					fadeSpeed:		'fast',
					exemptionSelector: '.selected'
				});

				// Initialize Advanced Galleriffic Gallery
				var gallery = $('#thumbs').galleriffic({
					delay:					30000,
					numThumbs:				6,
					preloadAhead:			6,
					enableTopPager:			false,
					enableBottomPager:		false,
					imageContainerSel:		'#slideshow',
					controlsContainerSel:	'#controls',
					captionContainerSel:	'#caption',
					loadingContainerSel:	'',
					renderSSControls:		true,
					renderNavControls:		true,
					playLinkText:			'',
					pauseLinkText:			'P',
					prevLinkText:			'Prev',
					nextLinkText:			'Next',
					nextPageLinkText:		'',
					prevPageLinkText:		'',
					enableHistory:			false,
					autoStart:				7000,
					syncTransitions:		true,
					defaultTransitionDuration: 900,
					onSlideChange:			function(prevIndex, nextIndex) {
						// 'this' refers to the gallery, which is an extension of $('#thumbs')
						this.find('ul.thumbs li').children()
							.eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
							.eq(nextIndex).fadeTo('fast', 0.6);
					},
					onPageTransitionOut:	function(callback) {
						this.fadeTo('fast', 0.0, callback);
					},
					onPageTransitionIn:		function() {
						this.fadeTo('fast', 1.0);
					}
				});
			});
		</script>



</div>
<header>
<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com. November 21, 2011!</div>
        <div class="main">
                <div class="content-padding-2">
                        <div class="container_12">
                                <div class="wrapper">
                                        <div class="grid_12">
                                                <div class="padding-grid-1">
                                                        <h3 class="letter">Our <strong>Gallery</strong></h3>
                                                        <div id="js">
                                                                <div class="js-padding">
                                                                        <div id="gallery" class="content">
                                                                                <div class="wrapper">
                                                                                        <div class="slideshow-container">
                                                                                                <div id="slideshow" class="slideshow"></div>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                <div id="thumbs" class="navigation">
                                                                        <ul class="thumbs noscript">
                                                                                <li>
                                                                                        <a class="thumb" href="images/page4-img1.jpg" title=""> <img src="images/thumb-1.jpg" alt="" /> </a>
                                                                                </li>
                                                                                <li>
                                                                                        <a class="thumb" href="images/page4-img2.jpg" title=""> <img src="images/thumb-2.jpg" alt="" /> </a>
                                                                                </li>
                                                                                <li class="last">
                                                                                        <a class="thumb" href="images/page4-img3.jpg" title=""> <img src="images/thumb-3.jpg" alt="" /> </a>
                                                                                </li>
                                                                                <li>
                                                                                        <a class="thumb" href="images/page4-img2.jpg" title=""> <img src="images/thumb-2.jpg" alt="" /> </a>
                                                                                </li>
                                                                                <li>
                                                                                        <a class="thumb" href="images/page4-img3.jpg" title=""> <img src="images/thumb-3.jpg" alt="" /> </a>
                                                                                </li>
                                                                                <li class="last">
                                                                                        <a class="thumb" href="images/page4-img1.jpg" title=""> <img src="images/thumb-1.jpg" alt="" /> </a>
                                                                                </li>
                                                                        </ul>
                                                                        <div class="clear"></div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
        <div class="block"></div>
</section>

