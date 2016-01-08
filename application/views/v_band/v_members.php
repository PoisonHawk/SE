<div class='row'>
    <section class=" col-md-12">
        <?php foreach($members as $member):?>
        <article class="member">
            <h2><?php echo $member->title; ?></h2>
            <div class="separator"></div>
            <div class="image col-sm-12 col-md-4">
                <?php if (isset($member->image)): ?> 
                    <div>                                
                        <img  src='/uploads/<?php echo $member->image ?>' width='350' >
                    </div>
                <?php endif; ?>  
                
            </div>
            <div class='member-text col-sm-12  col-md-8'>
                <h3>Guitar, Vocal</h3>
                <p><?php echo $member->content?></p>
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
        </article>
        <?php endforeach;?>
    </section>
</div>
