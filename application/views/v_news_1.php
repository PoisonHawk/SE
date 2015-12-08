<div class="main">
    <div class="content-padding-2">
        <div class="container_8">
            <div class="wrapper">
                <div class="grid_8">
                    <div class="padding-grid-1">
                        <?php foreach ($news as $new): ?>
                            <div class="wrapper img-indent-bot1">
                                <time class="time time-stule-1" datetime="<?php echo date('Y-d-m', $new->date) ?>"> <strong class="text-1"><?php echo date('d', $new->date); ?></strong><strong class="text-2"><?php echo date('M', $new->date); ?></strong></time>
                                <div class="extra-wrap">
                                    <h3 class="new-title">
                                        <?php echo $new->title; ?>
                                    </h3>

                                    <div class="indent-top text">
                                        <?php if ($new->image): ?>
                                            <!--<div class='ava'>-->
                                            <img src='/uploads/<?php echo $new->image ?>' width='300'>
                                            <!--</div>-->
                                        <?php endif; ?>
                                        <?php echo $new->description; ?>
                                    </div>
                                </div>
                            </div>
                            <div style="clear:both"></div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="paginator">
                    <ul> 
                        <?php if($count_pages > 1):?>
                            <?php for($i=1; $i<=$count_pages; $i++):?>
                                <li><a href="/news?page=<?php echo $i?>"><?php echo $i?></a></li>
                            <?php endfor;?>
                        <?php endif;?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="block"></div>
</div>
<style>
    .text {font-size: 16px;
           line-height: 1.6em;
           padding: 20px 0;
           text-align: justify;

    }

    .text img {
        float:left;
        margin: 0 10px 10px 0;
    }

    /*      .text p {
              float:left;
          }*/
    .paginator {
        display:inline-block;
        margin: 0 auto;
    }
    
    .paginator ul li {
        float:left;
        font-size:20px;
        padding: 5px;
        margin:5px;
    }
    
    .paginator ul li a{
        text-decoration: none;
    }
    
    
</style>    
