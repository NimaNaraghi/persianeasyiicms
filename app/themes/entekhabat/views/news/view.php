<?php

use app\themes\entekhabat\components\LastArticlesWidget;
use yii\helpers\Url;
use app\themes\entekhabat\components\LastNewsWidget;

$this->title = $item->title;
?>


        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper mainbox">
                    <div class="blog-title-area text-center">
                        <ol class="breadcrumb hidden-xs-down">
                            <li class="breadcrumb-item"><a href="/"><?= Yii::t('app','Home') ?></a></li>
                            <li class="breadcrumb-item"><a href="#"><?= Yii::t('app','News') ?></a></li>
                            <li class="breadcrumb-item active"><?= $item->title; ?> </li>
                        </ol>

                        <span class="color-green"><a href="<?= $item->getURL() ?>" title="<?= $item->title ?>"><?= $item->title ?></a></span>

                        <h3><?= $item->short ?> </h3>

                        <div class="blog-meta big-meta">
                            <small><a href="<?= $item->getURL() ?>" title=""><?= $item->date ?></a></small>
                        </div><!-- end meta -->


                    </div><!-- end title -->

                    <div class="single-post-media">
                        <img src="<?= $item->image ?>" alt="<?= $item->title ?>" class="img-fluid">
                    </div><!-- end media -->

                    <div class="blog-content">

                        <?= $item->text ?>
                        
                    </div><!-- end content -->

                    <div class="blog-title-area">
                        <div class="tag-cloud-single">
                            <span><?= Yii::t('app','Tags') ?></span>
                            <?php foreach($item->tags as $tag): ?>
                            <small><a href="<?= Url::to(['/search', 'q' => $tag]) ?>" title=""><?= $tag ?></a></small>
                            <?php endforeach; ?>
                        </div><!-- end meta -->

                        
                    </div><!-- end title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner-spot clearfix">
                                <div class="banner-img">
                                    <img src="upload/banner_01.jpg" alt="" class="img-fluid">
                                </div><!-- end banner-img -->
                            </div><!-- end banner -->
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <hr class="invis1">

            </div><!-- end col -->

            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <div class="sidebar">

                    
                    
                </div><!-- end sidebar -->
            </div><!-- end col -->
        </div><!-- end row -->
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <div class="sidebar">
                <?= LastArticlesWidget::widget(['layout' => LastArticlesWidget::LAYOUT_MAIN_PAGE, 'title' => Yii::t('app','Last Articles')]); ?>
            </div>
        </div>
    

