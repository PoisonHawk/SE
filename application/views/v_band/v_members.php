<div class='row'>
    <section >
        <?php foreach($members as $member):?>
        <article class="member">
            <h2><?php echo $member->title; ?></h2>
            <div class="separator"></div>
            <div class="image col-md-4">
                <?php if (isset($member->image)): ?> 
                    <div>                                
                        <img  src='/uploads/<?php echo $member->image ?>' width='350' class="img-responsive">
                    </div>
                <?php endif; ?>  
                
            </div>
            <div class='member-text col-md-8'>
                <!--<h3>Guitar, Vocal</h3>-->
                <p><?php echo Text::auto_p($member->content, true)?></p>
                <?php if (isset($member->social)): ?>
                    <div class="social">
                        <?php foreach ($member->social as $title => $link): ?>                                            
                            <?php if ($link): ?>
                                <a class="<?php echo $title ?>" title="<?php echo $title ?>" href="<?php echo $link ?>"></a>
                            <?php endif; ?>                                            
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>                
            </div>
            <div class="clearfix">
        </article>
        <?php endforeach;?>
    </section>
</div>
