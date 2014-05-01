
<!--==============================content================================-->
        <section id="content">
            <div class="main">
                <div class="bg-2">
                    <div class="content-padding-1">
                        <div class="container_12">
                            <div class="wrapper">
                                <article class="grid_4">
                                    <div class="padding-grid-1">
                                        <h3 class="letter">Latest <strong>News</strong></h3>
                                        <?php foreach ($news as $new): ?>
                                            <div class="wrapper img-indent-bot1">
                                                <time class="time time-stule-1" datetime="<?php echo date('Y-d-m',$new['date'])?>"> <strong class="text-1"><?php echo date('d',$new['date']);?></strong><strong class="text-2"><?php echo date('M',$new['date']);?></strong></time>
                                                    <div class="extra-wrap">
                                                            <div class="indent-top">
                                                                    <?php echo $new['description'];?>
                                                            </div>
                                                    </div>
                                            </div>
                                        <?php endforeach;?>

                                    </div>
                                </article>
                                <article class="grid_4 alpha">
                                        <div class="padding-grid-1">
                                                <h3>Tour <strong>Dates</strong></h3>
                                                <div class="wrapper img-indent-bot2">
                                                        <time class="time time-stule-2" datetime="2011-11-09"> <strong class="text-3">09</strong><strong class="text-4">nov</strong></time>
                                                        <div class="extra-wrap">
                                                                <h4 class="indent-top"><a href="#">New York</a></h4>
                                                                Lorem ipsum dolor consctetur 
                                                        </div>
                                                </div>
                                                <div class="wrapper img-indent-bot2">
                                                        <time class="time time-stule-2" datetime="2011-11-05"> <strong class="text-3">05</strong><strong class="text-4">nov</strong></time>
                                                        <div class="extra-wrap">
                                                                <h4 class="indent-top"><a href="#">Los Angeles</a></h4>
                                                                Adipisicing elitdo esmod tempor
                                                        </div>
                                                </div>
                                                <div class="wrapper">
                                                        <time class="time time-stule-2" datetime="2011-11-01"> <strong class="text-3">01</strong><strong class="text-4">nov</strong></time>
                                                        <div class="extra-wrap">
                                                                <h4 class="indent-top"><a href="#">San Diego</a></h4>
                                                                Lorem ipsum dolor consctetur 
                                                        </div>
                                                </div>
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
                                            <article class="grid_4">
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
                                            </article>
                                            <article class="grid_4 alpha">
                                                    <div class="padding-grid-2">
                                                            <h3 class="letter">Latest <strong>Video</strong></h3>

                                                            <div class="wrapper">
                                                                    <figure class="style-img-2 fleft"><a class="lightbox-image" href="video/video_AS3.swf?width=495&amp;height=275&amp;fileVideo=intro06.flv" data-gal="prettyVideo[prettyVideo]"><img src="images/page1-img2.jpg"  alt=""></a></figure>
                                                            </div>
                                                    </div>
                                            </article>
                                            <article class="grid_4 alpha">
                                                    <div class="padding-grid-2">
                                                            <h3 class="letter prev-indent-bot1">Shortly <strong>About</strong></h3>
                                                            <h6>Sed ut perspiciatis unde omnis</h6>
                                                            Iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas aspernatur.
                                                    </div>
                                            </article>
                                    </div>
                            </div>
                    </div>
                </div>
                <div class="block"></div>
        </section>
</div>
