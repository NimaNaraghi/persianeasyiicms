<?php
use yii\helpers\Url;

?>

<div class="widget widgetbox">
    <h4 class="lists_title"><?= $title ?></h4>

    <div class="trend-videos">
    <?php foreach($items as $item): ?>
        <div class="blog-box">
            <div class="post-media">
                <a href="<?= Url::to(['news/view', 'slug' => $item->slug]) ?>" title="">
                    <img src="<?= $item->image ?>" alt="" class="img-fluid">
                    
                </a>
            </div><!-- end media -->
            <div class="blog-meta">
                <p><a href="<?= Url::to(['news/view', 'slug' => $item->slug]) ?>" title=""><?= $item->title ?></a></p>
            </div><!-- end meta -->
        </div><!-- end blog-box -->
        <hr class="invis">
    <?php endforeach; ?>
        
    </div><!-- end videos -->
</div><!-- end widget -->
<!-- end widget -->

