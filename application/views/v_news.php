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
            <div class='text'>
                <h3><a href="/news/new/<?php echo $new->id?>"><?php echo $new->title?></a></h3>
                <span class="new-date" style="display:block; margin-bottom:10px;"><?php echo date('d M Y', $new->date)?></span>
                
                <?php echo $new->description; ?>
                <?php 
                        $text = explode(' ', $new->description);
                        
                        if (count($text) > 150): ?>
                        <a href='/news/new/<?php echo $new->id; ?>'>More...</a>
                <?php  endif; ?>
                
            </div>

        </article>
    <?php endforeach; ?>
    
    <div class="pagination">
        <ul>
            <?php if ($count_pages > 1): ?>
            
                <?php $start = max(($current_page-3),1)?>
                <?php for ($i = $start; $i <= min(($start+4), $count_pages); $i++): ?>
                    <li><a class="<?php echo ($i==$current_page)? 'selected' : ''?>" href="/news?page=<?php echo $i ?>"><?php echo $i ?></a></li>
                <?php endfor; ?>
            <?php endif; ?>
        </ul>
    </div>
</section>
</div>