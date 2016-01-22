$(document).ready(function(){

	$('.item .photo-image').hover(function(){
		
//		$(this).find('.photos-album-title').show();
		$(this).find('img').addClass('shadow');
                
                console.log($(this).find('.play'));
                
                $(this).find('.play').animate({
                    color: '#fff'}
                , 200);
	}, function(){
//		$(this).find('.photos-album-title').hide();
		$(this).find('img').removeClass('shadow');
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