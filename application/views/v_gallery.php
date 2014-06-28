    
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
					numThumbs:				5,
					preloadAhead:			5,
                                        
					enableTopPager:			true,
					enableBottomPager:		true,
                                        maxPagesToShow:         7,
					imageContainerSel:		'#slideshow',
					controlsContainerSel:	'#controls',
					captionContainerSel:	'#caption',
					loadingContainerSel:	'',
					renderSSControls:		true,
					renderNavControls:		true,
					playLinkText:			'',
					pauseLinkText:			'P',
					prevLinkText:			'&lsaquo;Prev',
					nextLinkText:			'Next &lsaquo;',
					nextPageLinkText:		'Вперед',
					prevPageLinkText:		'Назад',
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
                                            var prevPageLink = this.find('a.prev').css('visibility', 'hidden');
						var nextPageLink = this.find('a.next').css('visibility', 'hidden');
						
						// Show appropriate next / prev page links
						if (this.displayedPage > 0)
							prevPageLink.css('visibility', 'visible');

						var lastPage = this.getNumPages() - 1;
						if (this.displayedPage < lastPage)
							nextPageLink.css('visibility', 'visible');

//						this.fadeTo('fast', 1.0);
						this.fadeTo('fast', 1.0);
					}
				});
                                
                                gallery.find('a.prev').click(function(e) {
					gallery.previousPage();
					e.preventDefault();
				});

				gallery.find('a.next').click(function(e) {
					gallery.nextPage();
					e.preventDefault();
				});
			});
		</script>



</div>

<section id="content">
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
                                                <div id="controls" class="controls"></div>    
                                                <div id="slideshow" class="slideshow"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="thumbs" class="navigation">
                                    <a class="pageLink prev" style="visibility: hidden;" href="#" title="Previous Page"></a>
                                    <ul class="thumbs noscript">
                                     <?php foreach($filelist as $key => $value):?>  
                                        <li>
                                            <a class="thumb" href="/photos/origin/<?php echo $value?>" title=""> 
                                                <img src="/photos/thumbs/<?php echo $value?>" alt="" /> 
                                            </a>
                                        </li>
                                     <?php endforeach;?>       

                                    </ul>
                                    <a class="pageLink next" style="visibility: hidden;" href="#" title="Next Page"></a>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php if(Auth::instance()->logged_in('admin')):?>
        <form method="POST" enctype="multipart/form-data">
            <input type="file" name="image" />
            <input type="submit" name="submit" value="Upload"/>
        </form>
        <?php endif;?>
    </div>
    
        <div class="block"></div>
</section>

