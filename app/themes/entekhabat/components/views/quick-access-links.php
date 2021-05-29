<?php
/* @var $items Array of stdClasse objects */
?>

<div class="widget">
    <div class="footer-text text-right">
        <div class="widget">
            <h2 class="widget-title"><?= $title ?></h2>
            <div class="link-widget">
                <ul>
                    <?php foreach($items as $item): ?>
                        <li><a href="<?= $item->url ?>"><?= $item->title; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div><!-- end link-widget -->
        </div><!-- end widget -->
        
        <hr class="invis">
        
    </div><!-- end footer-text -->
</div>