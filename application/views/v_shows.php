<div class='row'>

    <section class="shows col-md-12">
        <h2>Upcoming Shows</h2>
        <div class="separator"></div>
        <?php if (isset($tours)): ?>
            <?php foreach ($tours as $tour): ?>
                <div class="tour col-md-10 col-md-offset-1">
                    <div class="date col-sx-6 col-md-3"><?php echo date('d M', $tour->date) ?><br><span class="year"><?php echo date('Y', $tour->date) ?></span></div>
                    <div class='place col-sx-6 col-md-3'><?php echo $tour->city ?><br><span class="club"><?php echo $tour->club ?></span></div>
                    <div class='fest col-sx-12 col-md-4'>
                        <?php if (isset($tour->event_link) and $tour->event_link !== ''): ?>
                            <a href="<?php echo $tour->event_link; ?>">
                            <?php endif; ?>
                            <?php echo $tour->fest ?>
                            <?php if (isset($tour->event_link) and $tour->event_link !== ''): ?>
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="clearfix"></div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </section>
</div>
