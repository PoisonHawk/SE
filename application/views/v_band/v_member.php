
<section id="content">

    <div class="main">
        <div class="content-padding-2">
            <div class="container_8">
                <div class="wrapper">
                    <article class="grid_8">
                        <div class="padding-grid-1">
                            <div class='image_links' style="text-align: center">
                                <?php if (isset($member->image)): ?>                            

                                    <div class="image-link">                                
                                        <img  src='/uploads/<?php echo $member->image ?>' width='250' height='250' class='img-circle'>
                                    </div>

                                <?php endif; ?>
                            </div>

                        </div>
                        <h3 class="letter"><?php echo $member->title ?></h3>
                        <div class='text'>
                            <?php echo Text::auto_p($member->content) ?>
                        </div>
                    </article>

                </div>
            </div>
        </div>
    </div>
    <div class="block"></div>
</section>
