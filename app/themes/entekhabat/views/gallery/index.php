<?php

use app\themes\entekhabat\components\GalleryWidget;

?>

<section class="section">
    <div class="container my-custom-container">
        <div class="row">
            <?= GalleryWidget::widget(['category' => $category]) ?>
        </div>
    </div>
</section>