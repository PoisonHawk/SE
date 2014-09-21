    </div>
</header> 
<div id="content">  
<section id="content"><div class="ic"></div>
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
                                                <figure class="style-img-2 fleft"><a href="#"><img width="252" src="/uploads/<?php echo $album['image']?>"  alt=""></a></figure>
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
                                                    </ul>
                                                    <ul class="list-2 fright">

                                                        <?php $count = 1;?>
                                                        <?php foreach($album['tracks'] as $track):?>
                                                        
                                                            <li><audio class="" src='/audios/<?php echo $track['file']?>' controls></audio></li>
                                                        <?php $count += 1;?>
                                                        <?php endforeach;?> 
                                                                                                               
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

