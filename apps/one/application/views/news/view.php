<?php
echo '<h2>'.ucfirst($news_item['title']).'</h2>';
echo '<small><strong>Author:&nbsp;</strong><em>'.$news_item['author'].'</em><br />';
echo '<strong>Published:&nbsp;</strong><em>'.$news_item['date'].'</em><br /></small>';
?>
<div class="col-sm-offset-1 col-sm-11">
    <?php if($news_item['image']) : ?>
        <img src="<?php echo site_url('apps/one/uploads/').$news_item['image']; ?>" class="img-responsive center-block" />
    <?php endif; ?>
</div>
<div class="col-sm-offset-1 col-sm-11">
    <?php echo $news_item['text']; ?>
</div>
