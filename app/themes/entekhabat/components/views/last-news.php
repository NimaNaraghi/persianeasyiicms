<?php
use yii\helpers\Url;

?>

<div class="widget widgetbox">
    <h2 class="lists_title"><?= $title ?></h2>
    <div class="trend-videos">
    <?php foreach($items as $item): ?>
        <div class="blog-box">
            <div class="post-media">
                <a href="<?= $item->getURL() ?>" title="<?= $item->title ?>">
                    <img src="<?= $item->image ?>" alt="<?= $item->title ?>" class="img-fluid">
                    <div class="hovereffect">
                        <span class="videohover"></span>
                    </div><!-- end hover -->
                </a>
            </div><!-- end media -->
            <div class="blog-meta">
                <h4><a href="<?= $item->getURL() ?>" title="<?= $item->title ?>"><?= $item->title ?></a></h4>
            </div><!-- end meta -->
        </div><!-- end blog-box -->
        <hr class="invis">
    <?php endforeach; ?>    
    </div><!-- end videos -->
</div>
