<div class="slider-wrapper">
    <div class="slider">
        <ul class="items">
            <li><img src="/images/sympuls-e_1.jpg" width="960" height="368"></li>
            <li><img src="/images/sympuls-e_2.jpg" style="width:960px;height:368px"></li>
                <!--<li><img src="images/slider-img1.jpg" alt="" /></li>-->
            <!--								<li>
                                                            <img src="images/slider-img2.jpg" alt="" />
                                                    </li>
                                                    <li>
                                                            <img src="images/slider-img3.jpg" alt="" />
                                                    </li>-->
        </ul> 
    </div>
</div>
</div>
</header>
<!--==============================content================================-->
<div id="content">
    <section id="content">
        <div class="main">
            <div class="bg-2">
                <div class="content-padding-1">
                    <div class="container_12">
                        <div class="wrapper">
                            <article class="grid_4 news">
                                <div class="padding-grid-1">
                                    <h3 class="letter">Последние <strong>Новости</strong></h3>
                                    <?php foreach ($news as $new): ?>
                                        <div class="wrapper img-indent-bot1">
                                            <time class="time time-stule-1" datetime="<?php echo date('Y-d-m', $new->date) ?>"> <strong class="text-1"><?php echo date('d', $new->date); ?></strong><strong class="text-2"><?php echo date('M', $new->date); ?></strong></time>
                                            <div class="extra-wrap">
                                                <h6 class="new-title">
                                                    <?php echo $new->title; ?>
                                                </h6>
                                                <?php if($new->image):?>
                                                <div class='ava'>
                                                    <img src='/uploads/<?php echo $new->image?>' width='500'>
                                                </div>
                                                <?php endif; ?>
                                                <div class="indent-top new-text">
                                                    <?php echo $new->description; ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                    <a href="/news">Все новости</a>
                                </div>
                            </article>
                            <article class="grid_4 alpha">
                                <div class="padding-grid-1">
                                    <h3>Предстоящие <strong>Выступления</strong></h3>
                                    <?php foreach ($tours as $tour): ?>
                                        <div class="wrapper img-indent-bot2 tour">
                                            <time class="time time-stule-2" datetime="<?php echo date('Y-d-m', $tour->date) ?>"> <strong class="text-3"><?php echo date('d', $tour->date); ?></strong><strong class="text-4"><?php echo date('M', $tour->date); ?></strong></time>
                                            <div class="extra-wrap">
                                                <h4 class="indent-top"><?php echo $tour->city; ?></h4>
                                                <?php echo $tour->club ?>,&nbsp; 
                                                <?php echo $tour->fest ?>
                                            </div>
                                            <?php if (!empty($tour->image)): ?>
                                                <img id="<?php echo $tour->id ?>" class='preview' src="/uploads/<?php echo $tour->image ?>" width="500">
                                            <?php endif; ?>    
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </article>
                                                            <article class="grid_4 alpha">
                                                                    <div class="padding-grid-2">
                                                                            <h3 class="letter">In Stores <strong>Now!</strong></h3>
                                                                            <div class="wrapper">
                                                                                    <figure class="style-img fleft"><a href="#"><img src="images/page1-img1.jpg"  alt=""></a></figure>
                                                                            </div>
                                                                    </div>
                                                            </article>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-padding-2">
                <div class="container_12">
                    <div class="wrapper">
                        <!--                                            <article class="grid_4">
                                                                            <div class="padding-grid-1">
                                                                                    <h3>Upcoming <strong>Events</strong></h3>
                                                                                    <div class="wrapper img-indent-bot1">
                                                                                            <time class="time time-stule-3" datetime="2011-11-09"> <strong class="text-5">09</strong><strong class="text-6">nov</strong></time>
                                                                                            <div class="extra-wrap">
                                                                                                    <div class="indent-top">
                                                                                                            Lorem ipsum dolor consctetur adipisicing elitdo eusmod tempor incididunt ut labore.
                                                                                                    </div>
                                                                                            </div>
                                                                                    </div>
                                                                                    <div class="wrapper">
                                                                                            <time class="time time-stule-3" datetime="2011-11-03"> <strong class="text-5">03</strong><strong class="text-6">nov</strong></time>
                                                                                            <div class="extra-wrap">
                                                                                                    <div class="indent-top">
                                                                                                            Lorem ipsum dolor consctetur adipisicing elitdo eusmod tempor incididunt ut labore.
                                                                                                    </div>
                                                                                            </div>
                                                                                    </div>
                                                                            </div>
                                                                    </article>-->
                        <article class="grid_4 alpha video">
                            <div class="padding-grid-2">
                                <h3 class="letter">Последнее <strong>Видео</strong></h3>

                                <div class="wrapper">
                                        <!--<figure class="style-img-2 fleft"><a class="lightbox-image" href="video/video_AS3.swf?width=495&amp;height=275&amp;fileVideo=intro06.flv" data-gal="prettyVideo[prettyVideo]"><img src="images/page1-img2.jpg"  alt=""></a></figure>-->
                                    <iframe type="text/html" width="607" height="360" src="http://www.youtube.com/embed/<?php echo $last_video->videocode?>" frameborder="0"></iframe>
                                </div>
                                <a href="/videos">все видео</a>
                            </div>
                        </article>
<!--                        <article class="grid_4 alpha">
                            <div class="padding-grid-2">
                                <h3 class="letter prev-indent-bot1">Кратко <strong>О Нас</strong></h3>
                                <h6>Sed ut perspiciatis unde omnis</h6>
                                Sympuls-e рязанская melodic death metal группа. Фирменным стилем являются скоростные техничные и в то же время мелодичные риффы вкупе с женским экстримальным вокалом.
                                Ориентируясь на такие группы как Arch Enemy, Children Of Bodom, Wintersun, Norther, Soilwork, Inflames группа не зацикливается на одном жанре, превнося в свое творчество новые веяния.
                            </div>
                        </article>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="block"></div>
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
        left:-127%;
        right:25%;
        background:#fff;
        color:#4d4d4d;             
        border:5px solid #e4e4e4;
        border-radius: 15px;
        z-index:101 !important;   /* а его выше фонового блока*/
    }

    .new-title{
        font-size: 1.6em;
        
    }
    
    .new-text,
    .new-text p{
        font-size: 1.3em;
        line-height: 1.3;
        margin: 14px 0;
    }


</style>    

<script>

    $(document).ready(function () {

        $('.preview').hide();

        $('.tour').click(function () {
            var preview = $(this).find('.preview');

            $('#overlay').fadeIn('fast', function () {
                preview.show().animate({'top': '160px'}, 500);
            })

        })


        $('#overlay').click(function () { // кликаем по элементу который всё это будет закрывать, также здесь можно добавить сам оверлэй, чтобы по клику вне блока, всё сворачивалось.
            $('.preview').animate({'top': '-300px'}, 500, function () { // убираем наш блок
                $('#overlay').fadeOut('fast'); // и теперь убираем оверлэй
            }).hide();
        });

    })

</script>    