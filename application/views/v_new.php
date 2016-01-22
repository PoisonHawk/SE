<div class='row'>
    <section class="articles news col-md-12">
        <h2><?php echo $new->title?></h2>
        <div class="categories">
            <?php echo date('d M Y', $new->date)?>
        </div>
        <div class="separator"></div>
        <div class='row'>
            <div class="col-md-8 center col-md-offset-2">
            
                <?php if($new->image):?>
                <div class="image-new">
                    <img src='/uploads/<?php echo $new->image ?>' width='750' class="img-responsive">

                </div>
                <?php endif;?>
                <div class='text'>                    
                    <?php echo Text::auto_p($new->description, true)?>                    
                </div>
            </div>
        </div>


    </section>

</div>