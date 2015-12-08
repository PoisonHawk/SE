$(document).ready(function(){

	$('.item .photo-image').hover(function(){
		
		$(this).children('.photos-album-title').show();
		$(this).children('img').addClass('shadow');
	}, function(){
		$(this).children('.photos-album-title').hide();
		$(this).children('img').removeClass('shadow');
	})
        
        
        $('.nav ul li').hover(
                function(){
                    console.log('hover');
                    $(this).children('ul').show();
                }, 
                function(){
                    console.log('unhover');
                    $(this).children('ul').hide();
                })


})