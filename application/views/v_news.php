<div class="row">
    <section class="articles news col-md-12">
        <h2>News</h2>
        <div class="separator"></div>
        <?php foreach ($news as $new): ?>
            <article class="article">
                <div class="row">
                    <?php if ($new->image): ?>
                        <div class='image col-md-3'>
                            <img src='/uploads/thumb_<?php echo $new->image ?>' class="img-responsive">
                        </div>
                    <?php endif; ?>            
                    <div class='text col-md-9'>
                        <h3><a href="/news/new/<?php echo $new->id ?>"><?php echo $new->title ?></a></h3>
                        <span class="new-date" style="display:block; margin-bottom:10px;"><?php echo date('d M Y', $new->date) ?></span>
                        <div class="description"> 
                            <?php echo Text::auto_p($new->description, true); ?>
                        </div>
                    </div>
                    <a class="more" href='/news/new/<?php echo $new->id ?>'>More...</a>
                </div>
            </article>
<?php endforeach; ?>

        <div class="pagination">
            <ul>
                <?php if ($count_pages > 1): ?>

                    <?php $start = max(($current_page - 3), 1) ?>
                    <?php for ($i = $start; $i <= min(($start + 4), $count_pages); $i++): ?>
                        <li><a class="<?php echo ($i == $current_page) ? 'selected' : '' ?>" href="/news?page=<?php echo $i ?>"><?php echo $i ?></a></li>
                    <?php endfor; ?>
<?php endif; ?>
            </ul>
        </div>
    </section>
</div>
<script>

    $(document).ready(function () {

        $('a.more').hide();

        var articles = $('article.article');

        articles.each(function () {

            var article = $(this);
            var text = article.find('.text');
            var desc = text.children('.description');

            if (desc.height() > 224) {
                article.find('.more').show();
            }

        })

    })

</script>    