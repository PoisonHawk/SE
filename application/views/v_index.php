<div class='row'>
    <section class="articles col-md-7">
        <h2>Latest News</h2>        
        <?php foreach ($news as $new): ?>
            <article class="article">
                <div class="row">
                    <?php if ($new->image): ?>                    
                        <div class='image col-md-5'>
                            <img src='/uploads/thumb_<?php echo $new->image ?>' class="img-responsive">
                        </div>                    
                    <?php endif; ?>                
                    <div class='text col-md-7'>
                        <h3><a href="/news/new/<?php echo $new->id ?>"><?php echo $new->title ?></a></h3>
                        <span class="date"><?php echo date('d.m.Y', $new->date) ?></span>
                        <div class="description">                        
                            <?php echo Text::auto_p($new->description, true); ?>                     
                        </div>                        
                    </div>
                    <a class="more" href='/news/new/<?php echo $new->id ?>'>More...</a>
                </div>

            </article>
        <?php endforeach; ?>          
        <a href="/news/">All News</a>        
    </section>

    <section class="tours col-md-5">
        <h2>Upcoming Shows</h2>
        <?php foreach ($tours as $tour): ?>
            <div class="tour">
                <span class="date"><?php echo date('d', $tour->date); ?><?php echo date('M', $tour->date); ?></span>
                <span class='place'><?php echo $tour->city; ?>, <?php echo $tour->club ?></span>
                <span class='fest'><?php echo $tour->fest ?></span>

                <?php //if (!empty($tour->image)): ?>
                        <!--<img id="<?php echo $tour->id ?>" class='preview' src="/uploads/<?php echo $tour->image ?>" width="500">-->
                <?php //endif; ?>    
            </div>
        <?php endforeach; ?>       
    </section>
</div>

<div class="separator"></div>
<div class='row'>
    <section class='col-md-7'>
        <h2>Latest Video</h2>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe type="text/html" width="607" height="360" src="http://www.youtube.com/embed/<?php echo $last_video->videocode ?>" frameborder="0" class="embed-responsive-item"></iframe>
        </div>
    </section>
    <section class='album col-md-5'>
        <h2>Latest Release</h2>
        <div class="disc">
            <?php if ($last_album->loaded()): ?>
                <img src="/uploads/<?php echo $last_album->image; ?>" class="img-responsive">
                <h3><?php echo $last_album->name; ?></h3>
                <p><?php echo Text::auto_p($last_album->description); ?></p>
                <?php foreach ($store_links as $link): ?>
                    <a href="<?php echo $link->url ?>"><?php echo $link->title ?></a>
                <?php endforeach; ?>            
            <?php endif; ?>
        </div>
    </section>
</div>


<div class="overlay" id="overlay" style="display:none;"></div>
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

    .preview{
        position:absolute;
        top:-300px;
        /*left:-127%;*/
        right:65%;
        background:#fff;
        color:#4d4d4d;             
        border:5px solid #e4e4e4;
        border-radius: 15px;
        z-index:101 !important;   /* а его выше фонового блока*/
    }

</style>   

<script>

    $(document).ready(function () {

        $('a.more').hide();

        var articles = $('article.article');

        articles.each(function () {

            var article = $(this);
            var text = article.find('.text');
            var desc = text.children('.description');

            if (desc.height() > 224) {
                article.find('.more').show();
            }

        })

        $('.preview').hide();

        $('.tour').click(function () {
            var preview = $(this).find('.preview');

            $('#overlay').fadeIn('fast', function () {
                preview.show().animate({'top': '160px'}, 500);
            })

        })


        $('#overlay').click(function () { // кликаем по элементу который всё это будет закрывать, также здесь можно добавить сам оверлэй, чтобы по клику вне блока, всё сворачивалось.
            $('.preview').animate({'top': '20%'}, 500, function () { // убираем наш блок
                $('#overlay').fadeOut('fast'); // и теперь убираем оверлэй
            }).hide();
        });


    })

</script>    