<style>

    .member{
        margin: 15px 0 30px 0;
        font-size:16px;
        line-height: 1.6em;
    }

    .member h3 {
        line-height: 1em;
        margin-bottom: 20px;
    }

    .avatar{
        float:left;
        margin-right:30px;
    }

    .member .info{
        float:left;
        text-align:justify;
        max-width:680px;
    }

    .member .text{
        font-size: 16px;
        line-height: 1.6em;
        padding: 20px 0;
    }

    .member .list-services{
        float:none;
    }
</style>

    <div class="main">
        <div class="content-padding-2">
            <div class="container_8">
                <div class="wrapper">
                    <?php if (isset($members)): ?>
                        <?php foreach ($members as $member): ?>
                            <article class="member">
                                <div class="avatar">                                
                                    <?php if (isset($member->image)): ?> 
                                        <div>                                
                                            <img  src='/uploads/<?php echo $member->image ?>' width='250' height='250' class='img-circle'>
                                        </div>
                                    <?php endif; ?>                                
                                </div>
                                <div class="info">
                                    <h3 class="letter"><?php echo $member->title ?></h3>
                                    <div>
                                        <?php echo $member->content ?>
                                    </div>
                                    <div class="social">
                                        <?php if (isset($member->social)): ?>
                                            <ul class="list-services">
                                                <?php foreach ($member->social as $title => $link): ?>                                            
                                                    <?php if ($link): ?>
                                                        <li><a class="tooltips n-1 <?php echo $title ?>" title="<?php echo $title ?>" href="<?php echo $link ?>"></a></li>
                                                    <?php endif; ?>                                            
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div style="clear:both"></div>

                            </article>

                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="block"></div>
</div>

