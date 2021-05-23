<?php

use app\themes\entekhabat\components\LastArticlesWidget;
use yii\helpers\Url;
use app\themes\entekhabat\components\LastNewsWidget;

?>

<section class="section single-wrapper">
    <div class="container my-custom-container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper mainbox">
                    <div class="blog-title-area text-center">
                        <ol class="breadcrumb hidden-xs-down">
                            <li class="breadcrumb-item"><a href="#">خانه</a></li>
                            <li class="breadcrumb-item"><a href="#">بلاگ</a></li>
                            <li class="breadcrumb-item active">لورم ایپسوم متن ساختگی با تولید سادگی </li>
                        </ol>

                        <span class="color-green"><a href="<?= Url::to(['article/view', 'slug' => $item->slug]) ?>" title="<?= $item->title ?>"><?= $item->title ?></a></span>

                        <h3><?= $item->short ?> </h3>

                        <div class="blog-meta big-meta">
                            <small><a href="single.html" title=""><?= $item->date ?></a></small>
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

                        <div class="post-sharing">
                            <ul class="list-inline">
                                <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">فیس بوک</span></a></li>
                                <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">توییتر</span></a></li>
                                <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div><!-- end post-sharing -->
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
                <?= LastArticlesWidget::widget(['layout' => LastArticlesWidget::LAYOUT_MAIN_PAGE]); ?>
            </div>
        </div>
    </div><!-- end container -->
</section>

