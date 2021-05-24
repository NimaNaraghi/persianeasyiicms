<?php
use app\modules\tfbarticle\api\Article;
use yii\helpers\Url;

?>

<div class="page-wrapper mainbox">
    <div class="blog-grid-system">
        <div class="row">
        <?php $items = Article::items([
            'where' => [
                'category_id' =>  $category->model->category_id,
            ],
            'pagination' => [
                'pageSize' => 4
            ]
        ]) ?>
        <?php foreach($items as $item): ?>
            <div class="col-md-12">
                <div class="blog-box">
                    <div class="post-media">
                        <a href="<?= $item->getURL() ?>" title="">
                            <img src="<?= $item->image ?>" alt="" class="img-fluid">
                            <div class="hovereffect">
                                <span></span>
                            </div><!-- end hover -->
                        </a>
                    </div><!-- end media -->
                    <div class="blog-meta big-meta">
                        <span class="color-green"><a href="<?= Url::to(['/search', 'q' => $item->mainTag]) ?>" title=""><?= $item->mainTag ?></a></span>
                        <h4><a href="<?= $item->getURL() ?>" title=""><?= $item->title ?></a></h4>
                        <p>
                            <?= $item->short ?>
                        </p>
                        <small><a href="<?= $item->getURL() ?>" title=""><?= $item->date ?></a></small>
                    </div><!-- end meta -->
                </div><!-- end blog-box -->
            </div><!-- end col -->
        <?php endforeach ?>
        </div><!-- end row -->
    </div><!-- end blog-grid-system -->
</div><!-- end page-wrapper -->
<hr class="invis3">
<div class="row">
    <div class="col-md-12">
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-start">
                <?= Article::pages(); ?>
            </ul>
        </nav>
    </div><!-- end col -->
</div><!-- end row -->