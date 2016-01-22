<section>
    <h2>Videos</h2>
    <div class="categories">
        <a href="/videos?cat=all">All</a>
        <a href="/videos?cat=live">Live</a>
        <a href="/videos?cat=music">Official Videos</a>
        <a href="/videos?cat=playthrough">Playthrough</a>
    </div>
    <div class="clearfix"></div>
    <div class="separator"></div>					
    <div class="media">
        <div class="row">
            <?php foreach ($videos as $vm): ?>
                <div class="item live col-sm-6 col-md-4 ">
                    <input type="hidden" name="link" value="<?php echo $vm->videocode ?>">
                    <div class="photo-image" style="background: url(http://img.youtube.com/vi/<?php echo $vm->videocode ?>/mqdefault.jpg) no-repeat 50% 50%">                        
                        <!--<img src="http://img.youtube.com/vi/<?php echo $vm->videocode ?>/mqdefault.jpg">-->
                        <div class="glyphicon glyphicon-play-circle play"></div>
                        <div class="photos-album-title">
                            <h4><?php echo $vm->title ?></h4>                        
                        </div>
                    </div>
                </div>                                            
            <?php endforeach; ?>
        </div>
    </div>
    <div class="overlay" id="overlay" style="display:none;"></div>
    <div id="video_player" style="display:none"></div> 
</section>
<style>

    .overlay{
        background:rgba(0,0,0,0.7) repeat top left;
        position:fixed; /* фиксим и далее растягиваем на весь экран*/
        top:0px;
        bottom:0px;
        left:0px;
        right:0px;
        z-index:10;   /* поднимем его выше основной разметки*/
    }

    #video_player{
        position:fixed;
        top:0;
        left:0;
        right:0;
        right:0;
        max-width:853px;
        max-height:480px;
        margin:auto;
        /*background:#fff;*/                    
        /*border:5px solid #e4e4e4;*/

        z-index:101 !important;   /* а его выше фонового блока*/
    }

</style>   

<script>

    $(document).ready(function () {

        $('.preview').hide();
//        $('#video_player').hide();

        $('.item').click(function () {
            var preview = $('#video_player');
            preview.empty();

            var videocode = $(this).find("[name=link]").val();

            var w = $('body').width();

            var width = 768;

            if (w < 768) {
                width = w;
                $('#video_player').css({
                })
            }

            var iframe = '<div class="embed-responsive embed-responsive-4by3"><iframe type="text/html"  src="http://www.youtube.com/embed/' + videocode + '" class="embed-responsive-item"></iframe></div>';

            $('#overlay').fadeIn('fast', function () {
                preview.append(iframe).show().animate({'top': '160px'}, 500);
            })

        })

        $('#overlay').click(function () { // кликаем по элементу который всё это будет закрывать, также здесь можно добавить сам оверлэй, чтобы по клику вне блока, всё сворачивалось.
            $('#video_player').empty().animate({'top': '20%'}, 500, function () { // убираем наш блок
                $('#overlay').fadeOut('fast'); // и теперь убираем оверлэй
            }).hide();
        });


    })

</script>    
