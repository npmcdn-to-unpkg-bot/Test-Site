<h2><?php echo $title; ?></h2>
<div class="grid">    
    <?php foreach ($news as $news_item) : ?>
    
        <div class="grid-item">
            <h3><?php echo ucfirst($news_item['title']); ?></h3>
            <div class="main">
                <img class="img-responsive center-block" src="<?php echo site_url('apps/one/uploads/').$news_item['image']; ?>" /><br />
                <?php echo $news_item['text']; ?>
            </div>
            <p><a href="<?php echo site_url('apps/one/news/'.$news_item['slug']); ?>">View article</a></p>
        </div>
        
    <?php endforeach; ?>
</div>

<script type="text/javascript">
    jQuery(document).ready(function(){
        
        jQuery('.grid-item:odd').addClass('grid-item--width2');
       
        jQuery('.grid').masonry({
            itemSelector: '.grid-item',
            columnWidth: 160
        });
    
    });
    
</script>