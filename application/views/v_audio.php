    </div>
</header>
<div id="content">
    
<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com. November 21, 2011!</div>
    <div class="main">
        <div class="content-padding-2">
            <div class="container_12">
                <div class="wrapper">
                    <div class="grid_12">
                        <div class="padding-grid-1">
                                <h3 class="letter">Наша <strong>Дискография</strong></h3>
                        </div>
                        <?php if(isset($albums)):?>                      
                        <?php foreach($albums as $album):?>
                        <div class="wrapper p3">
                            <article class="grid_4 alpha">
                                    <div class="padding-grid-2">
                                            <div class="wrapper">
                                                    <figure class="style-img-2 fleft"><a href="#"><img width="252" src="/images/albums/01.jpg"  alt=""></a></figure>
                                            </div>
                                    </div>
                            </article>
                            <article class="grid_8 alpha">
                                    <div class="padding-grid-2">
                                            <h4 class="margin-none indent-top1"><strong><?php echo $album['year']?>.</strong>  <?php echo $album['name']?></h4>
                                            <!--<p class="prev-indent-bot">Lorem ipsum dolor consctetur adipisicing elitdo eusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
                                            <div class="wrapper">
                                                    <ul class="list-1 fleft">
                                                         <?php $count = 1;?>
                                                        <?php foreach($album['tracks'] as $track):?>                                                      
                                                        <li><a href="#"><?php echo $count<10? '0'.$count: $count?>. <?php echo $track['name']; ?></a></li>
                                                        <?php $count += 1;?>
                                                        <?php endforeach;?>    
<!--                                                            <li><a href="#">02. In reprehenderit in voluptate</a></li>
                                                            <li><a href="#">03. Velit esse cillum dolore</a></li>
                                                            <li><a href="#">04. Eu fugiat nulla pariatur</a></li>
                                                            <li><a href="#">05. Excepteur sint occaecat</a></li>
                                                            <li><a href="#">06. Cupidatat non</a></li>
                                                            <li><a href="#">07. Proident sunt in</a></li>
                                                            <li><a href="#">08. Culpa qui officia deserunt mollit</a></li>
                                                            <li><a href="#">09. Anim id est laborum</a></li>
                                                            <li><a href="#">10. At vero eos et accusamus</a></li>
                                                            <li><a href="#">11. Et iusto odio dignissimos</a></li>-->
                                                    </ul>
                                                    <ul class="list-2 fright">
                                                            <li><span><a class="left-list" href="#"></a></span><a class="right-list" href="#"></a></li>
                                                            <li><span><a class="left-list" href="#"></a></span><a class="right-list" href="#"></a></li>
                                                            <li><span><a class="left-list" href="#"></a></span><a class="right-list" href="#"></a></li>
                                                            <li><span><a class="left-list" href="#"></a></span><a class="right-list" href="#"></a></li>
                                                            <li><span><a class="left-list" href="#"></a></span><a class="right-list" href="#"></a></li>
                                                            <li><span><a class="left-list" href="#"></a></span><a class="right-list" href="#"></a></li>
                                                            <li><span><a class="left-list" href="#"></a></span><a class="right-list" href="#"></a></li>
                                                            <li><span><a class="left-list" href="#"></a></span><a class="right-list" href="#"></a></li>
                                                            <li><span><a class="left-list" href="#"></a></span><a class="right-list" href="#"></a></li>
                                                            <li><span><a class="left-list" href="#"></a></span><a class="right-list" href="#"></a></li>
                                                            <li><span><a class="left-list" href="#"></a></span><a class="right-list" href="#"></a></li>
                                                    </ul>
                                            </div>
                                    </div>
                            </article>
                        </div>
                        <?php endforeach;?>
                        <?php endif;?>
                        
                                    </div>
                            </div>
                    </div>
            </div>
    </div>
    <div class="block"></div>
</section>

