<style>
    .tour{
        text-align: center;
        font-size: 20px;
        line-height:1.6em;
    }
    
    .tour .city{
        color: #fff;
    }
</style>
<div id="content">
    <div class="main">
        <div class="content-padding-2">
            <div class="container_8">
                <div class="wrapper">
                    <?php if (isset($tours)): ?>
                        <?php foreach ($tours as $tour): ?>
                            <div class="tour">   
                                <span class="date"><?php echo date('d.m.Y',$tour->date)?></span>  -  
                                <span class="city"><?php echo $tour->city?></span>,&nbsp;                                   
                                <span class="club"><?php echo $tour->club?></span>,&nbsp;
                                <?php if(isset($tour->event_link) and $tour->event_link !== ''):?>
                                    <a href="<?php echo $tour->event_link;?>">
                                <?php endif;?>
                                <span class="fest"><?php echo $tour->fest?></span>
                                <?php if(isset($tour->event_link) and $tour->event_link !== ''):?>    
                                    </a>
                                <?php endif;?>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>