<?php
use app\modules\tfbnews\api\News;
use yii\helpers\Url;

?>

<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 ">
    <div class="page-wrapper mainbox">
        <div class="blog-top clearfix">
            <h4 class="lists_title"> <a href="#"></a><?= $title ?></h4>
        </div><!-- end blog-top -->
    <br />
        
        
        <?php $items = News::items(['pagination' => [
            'pageSize' => 4
        ]]) ?>

        <?php foreach($items as $item): ?>
        <div class="blog-list clearfix">
            <div class="blog-box row">
                <div class="col-md-4">
                    <div class="post-media">
                        <a href="<?= Url::to(['news/view', 'slug' => $item->slug]) ?>" title="<?= $item->title ?>">
                            <img src="<?= $item->image ?>" alt="" class="img-fluid">
                            <div class="hovereffect"></div>
                        </a>
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="blog-meta big-meta col-md-8">
                    <h4><a href="<?= Url::to(['news/view', 'slug' => $item->slug]) ?>" title="<?= $item->title ?>"><?= $item->title ?></a></h4>
                    <p><?= $item->short ?></p>
                    <?php if(!is_null($item->mainTag)): ?>
                    <small class="firstsmall"><a class="bg-green" href="<?= Url::to(['/search', 'q' => $item->mainTag]) ?>" title=""><?= $item->mainTag ?></a></small>
                    <?php endif; ?>
                    <small><a href="<?= Url::to(['news/view', 'slug' => $item->slug]) ?>" title=""><?= $item->date ?></a></small>
                    <small><a href="<?= Url::to(['news/view', 'slug' => $item->slug]) ?>" title=""><i class="fa fa-eye"></i> 1114</a></small>
                </div><!-- end meta -->
            </div><!-- end blog-box -->

            <hr class="invis">

            
        </div><!-- end blog-list -->
        <?php endforeach ?>
    </div><!-- end page-wrapper -->

    <hr class="invis">
    
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="Page navigation">
            <?= News::pages(); ?>
            </nav>
        </div><!-- end col -->
    </div><!-- end row -->
    
</div><!-- end col -->