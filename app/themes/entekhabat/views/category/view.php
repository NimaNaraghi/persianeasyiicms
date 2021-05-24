<?php
use app\themes\entekhabat\components\LastNewsWidget;
use app\themes\entekhabat\components\ArticlesWidget;

$this->title = $category->title;
?>

<div class="page-title lb single-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <h2><i class="fa fa-info bg-green"></i> <?= $category->title ?> <small class="hidden-xs-down hidden-sm-down"></small></h2>
            </div><!-- end col -->
            <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/"><?= Yii::t('app','Home') ?></a></li>
                    <li class="breadcrumb-item active"><a href="<?= $category->getURL() ?>"><?= $category->title ?></a></li>
                </ol>
            </div><!-- end col -->                    
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end page-title -->

<section class="section">
    <div class="container my-custom-container">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <div class="sidebar">
                    <?= LastNewsWidget::widget(['layout' => 'last-news']); ?>
                </div><!-- end sidebar -->
            </div><!-- end col -->
            
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <?= ArticlesWidget::widget(['layout' => ArticlesWidget::LAYOUT_SINGLE_COLUMN, 'category' => $category]); ?>
            </div>
        </div>
    </div>
</section>
