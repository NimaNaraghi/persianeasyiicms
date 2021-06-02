<?php

use app\modules\tfbnews\api\News;
use yii\helpers\Url;
use app\themes\entekhabat\components\TopMenuWidget;
use app\themes\entekhabat\components\CarouselWidget;
use app\themes\entekhabat\components\LastNewsWidget;
use app\themes\entekhabat\components\NewsWidget;
use app\themes\entekhabat\components\LastArticlesWidget;
use yii\easyii\modules\page\api\Page;

$page = Page::get('home-page');

$this->title = $page->title;
?>
<div class="row">
    
    <div class="col-md-12">
        <?= CarouselWidget::widget() ?>
    </div>
    
</div>
        
<div class="row">
    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
        
        <div class="sidebar">
        <?= LastArticlesWidget::widget(['layout' => LastArticlesWidget::LAYOUT_MAIN_PAGE, 'title' => Yii::t('app', 'Last Articles')])    ?>
            
        </div><!-- end sidebar -->
    </div>
    <?= NewsWidget::widget(['layout' => NewsWidget::LAYOUT_MAIN_PAGE]) ?>

    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12" >
        <div class="sidebar  pad0"   >
        
            <?= LastNewsWidget::widget(['layout' => LastNewsWidget::LAYOUT_MAIN_PAGE, 'title' => Yii::t('app', 'Last News')]) ?>
            
        </div><!-- end sidebar -->
    </div><!-- end col -->
</div><!-- end row -->
           

        
