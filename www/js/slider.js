
(function () {

    $.fn.slider = function (options) {
        
        
        var settings = $.extend({
            'sliderWidth' : '280',
            'countSlides' : 3,
        }, options)
        
        var countSlides = settings.countSlides;
        var currentPosition = 0;
        var slideWidth = settings.sliderWidth;
        var margin = 10;
        var $this = $(this);
        var slides = $this.find('.slide');
        var numberOfSlides = slides.length;
        // Убираем прокрутку
        $this.find('.slidesContainer').css('overflow', 'hidden');
        // Вставляем все .slides в блок #slideInner
        slides
                .wrapAll('<div class="slideInner"></div>')
                .css({
                    'float': 'left',
                    'width': slideWidth
                });
        
        $this.find('.slideInner').css('width', (slideWidth + 2*margin) * numberOfSlides);
       
        $this.find('.slideshow')
//                .prepend('<span class="control leftControl glyphicon glyphicon-chevron-left"></span>')
//                .append('<span class="control rightControl glyphicon glyphicon-chevron-right" ></span>');
                .prepend('<span class="control leftControl glyphicon glyphicon-chevron-left"></span>')
                .append('<span class="control rightControl glyphicon glyphicon-chevron-right" ></span>');
        // Прячем правую стрелку при загрузке скрипта
        manageControls(currentPosition);
        // Отлавливаем клик на класс .controls
        $this.find('.control')
                .bind('click', function () {
                    
                    currentPosition = ($(this).hasClass('rightControl') )
                            ? currentPosition + 1 : currentPosition - 1;
                    
                    manageControls(currentPosition);
                   
                    $this.find('.slideInner').animate({
                        'marginLeft': (slideWidth+2*margin) * (-currentPosition)
                    });
                });
        
        function manageControls(position) {
           
            if (position == 0) {
                $this.find('.leftControl').hide()
            }
            else {
                $this.find('.leftControl').show()
            }
            
            if ((position == numberOfSlides - countSlides)) {
                $this.find('.rightControl').hide()
            }
            else {
                $this.find('.rightControl').show()
            }
            
            
            if ((numberOfSlides < countSlides)) {
                $this.find('.rightControl').hide()
            }
        }

    }
})(jQuery)

console.log('slider');


