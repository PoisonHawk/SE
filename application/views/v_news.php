<div class="row">
<section class="articles news col-md-12">
    <h2>News</h2>
    <div class="separator"></div>
    <?php foreach ($news as $new): ?>
        <article class="article">            
            <?php if ($new->image): ?>
                <div class='image'>
                    <img src='/uploads/<?php echo $new->image ?>' width='400'>
                </div>
            <?php endif; ?>            
            <div class='text '>
                <h3><?php echo $new->title?></h3>
                <?php echo $new->description; ?>
                <span class="new-date">12 dec 2015</span>
                <a href='news/new/<?php echo $new->id?>'>More...</a>
            </div>

        </article>
    <?php endforeach; ?>
    
    <div class="pagination">
        <ul>
            <?php if ($count_pages > 1): ?>
                <?php for ($i = 1; $i <= $count_pages; $i++): ?>
                    <li><a href="/news?page=<?php echo $i ?>"><?php echo $i ?></a></li>
                <?php endfor; ?>
            <?php endif; ?>
<!--            <li><a href="#">Prev</a></li>
            <li><a href="#">1</a></li>
            <li><a class="selected" href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">Next</a></li>-->
        </ul>
    </div>
</section>
</div>