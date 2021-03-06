<?php

use app\themes\entekhabat\assets\EntekhabatAsset;
use yii\helpers\Html;
use app\themes\entekhabat\components\TopMenuWidget;
use app\themes\entekhabat\components\QuickAccessLinksWidget;
use app\modules\tfbtext\api\Text;

$asset = EntekhabatAsset::register($this);

$textOne = Text::get('text-one');
$textFollowUs = Text::get('follow-us');
$textCopyRight = Text::get('copy-right');
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="<?= $asset->baseUrl ?>/favicon.ico" type="image/x-icon">
        <link rel="icon" href="<?= $asset->baseUrl ?>/favicon.ico" type="image/x-icon">
        <?php $this->head() ?>
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
    <?php $this->beginBody() ?>
    <div id="wrapper">
        <div class="topheada">
            <div class="container">
                <div class="row ">

                    <div class="col-lg-12 ">
                         
                    </div>
                </div>
            </div>
        </div>
        <header class="tech-header header">
        
            <?= TopMenuWidget::widget() ?>

            
         
        </header><!-- end market-header -->
        
        <section class="section">
            <div class="container my-custom-container">
                    <?= $content ?>
            </div><!-- end container -->
        </section>


            <footer class="footer">
            <div class="container my-custom-container">
                <div class="row secfooter1">
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="widget">
                            <h2 class="widget-title">???????? ???????????? ?????????? ??????????????
</h2>
                            <div class="blog-list-widget">
                                <div class="list-group">
                                    <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 justify-content-between">
                                            <!-- <img src="upload/tech_blog_08.jpg" alt="" class="img-fluid float-right"> -->
                                            <h5 class="mb-1"><?= $textOne ?? '' ?></h5>
                                            
                                        </div>
                                    </a>
                                    
                                 
                                </div>
                            </div><!-- end blog-list -->
                        </div><!-- end widget -->
                    </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="widget">
                                <h2 class="widget-title">
                                    ?????????? ???????? ?????? ??????????

                                </h2>
                                <div class="blog-list-widget">
                                    <!-- <div class="list-group">
                                        <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="upload/tech_blog_08.jpg" alt="" class="img-fluid float-right">
                                                <h5 class="mb-1">???????? ???????????? ?????? ???????????? ???? ?????????? ??????????</h5>
                                                <small>16 ?????????? 99</small>
                                            </div>
                                        </a>
                                        <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="upload/tech_blog_01.jpg" alt="" class="img-fluid float-right">
                                                <h5 class="mb-1">???????? ???????????? ?????? ???????????? ???? ?????????? ??????????</h5>
                                                <small>16 ?????????? 99</small>
                                            </div>
                                        </a>
                                      
                                    </div> -->
                                </div><!-- end blog-list -->
                            </div><!-- end widget -->
                        </div><!-- end col -->
                    
                    <div class="col-lg-4">
                        <?= QuickAccessLinksWidget::widget(); ?>
                    </div>
                    </div>
                <div class="divfooter"></div>
                <div class="row secfooter2">

                    <div class="col-lg-12 text-center">
                        <div class="row">
                            <div class="col-lg-4">


                                <h2 class="widget-title">
                                    <?= $textFollowUs ?? '' ?>


                                </h2>
                                <div class="social">
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="????????????"><i class="fa fa-facebook"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="????????????"><i class="fa fa-twitter"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="????????????????????"><i class="fa fa-instagram"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="???????? ????????"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="????????????"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="copyright"><?= $textCopyRight ?? '' ?></div>

                            </div>
                            <div class="col-lg-4">
                                <a href="/"><img src="images/version/tech-footer-logo.png" alt="" class="img-fluid"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end container -->
        </footer><!-- end footer -->

        <div class="dmtop">????????</div>
    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>