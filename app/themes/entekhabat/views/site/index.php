<?php

use app\modules\tfbnews\api\News;
use yii\helpers\Url;
use app\themes\entekhabat\components\TopMenuWidget;
use app\themes\entekhabat\components\CarouselWidget;
use app\themes\entekhabat\components\LastNewsWidget;
use app\themes\entekhabat\components\NewsWidget;
use app\themes\entekhabat\components\LastArticlesWidget;

$this->title = 'EasyiiCMS start page';
?>

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

            <?= CarouselWidget::widget() ?>
         
        </header><!-- end market-header -->

        

        <section class="section">
            <div class="container my-custom-container">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        
                        <div class="sidebar">
                        <?= LastArticlesWidget::widget(['layout' => LastArticlesWidget::LAYOUT_MAIN_PAGE])    ?>
                          
                        </div><!-- end sidebar -->
                    </div>
                    <?= NewsWidget::widget(['layout' => NewsWidget::LAYOUT_MAIN_PAGE]) ?>

                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12" >
                        <div class="sidebar  pad0"   >
                       
                            <?= LastNewsWidget::widget(['layout' => LastNewsWidget::LAYOUT_MAIN_PAGE]) ?>
                            
                        </div><!-- end sidebar -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

        <footer class="footer">
            <div class="container my-custom-container">
                <div class="row secfooter1">
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="widget">
                            <h2 class="widget-title">آنچه دیگران بیشتر خواندند
</h2>
                            <div class="blog-list-widget">
                                <div class="list-group">
                                    <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 justify-content-between">
                                            <img src="upload/tech_blog_08.jpg" alt="" class="img-fluid float-right">
                                            <h5 class="mb-1">لورم ایپسوم متن ساختگی با تولید سادگی</h5>
                                            <small>16 اسفند 99</small>
                                        </div>
                                    </a>
                                    <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 justify-content-between">
                                            <img src="upload/tech_blog_01.jpg" alt="" class="img-fluid float-right">
                                            <h5 class="mb-1">لورم ایپسوم متن ساختگی با تولید سادگی</h5>
                                            <small>16 اسفند 99</small>
                                        </div>
                                    </a>
                                 
                                </div>
                            </div><!-- end blog-list -->
                        </div><!-- end widget -->
                    </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="widget">
                                <h2 class="widget-title">
                                    آخرین پیام های کوتاه

                                </h2>
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                        <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="upload/tech_blog_08.jpg" alt="" class="img-fluid float-right">
                                                <h5 class="mb-1">لورم ایپسوم متن ساختگی با تولید سادگی</h5>
                                                <small>16 اسفند 99</small>
                                            </div>
                                        </a>
                                        <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="upload/tech_blog_01.jpg" alt="" class="img-fluid float-right">
                                                <h5 class="mb-1">لورم ایپسوم متن ساختگی با تولید سادگی</h5>
                                                <small>16 اسفند 99</small>
                                            </div>
                                        </a>
                                      
                                    </div>
                                </div><!-- end blog-list -->
                            </div><!-- end widget -->
                        </div><!-- end col -->
                    
                    <div class="col-lg-4">
                        <div class="widget">
                            <div class="footer-text text-right">
                                <div class="widget">
                                    <h2 class="widget-title">ریاست جمهور کاندیدای محترم</h2>
                                    <div class="link-widget">
                                        <ul>
                                            <li><a href="#">درباره ما</a></li>
                                            <li><a href="#">تماس با ما</a></li>
                                            <li><a href="#">دسته بندی</a></li>
                                            <li><a href="#">ویدئو</a></li>
                                            <li><a href="#">انتخابات</a></li>
                                        </ul>
                                    </div><!-- end link-widget -->
                                </div><!-- end widget -->
                             
                                <hr class="invis">
                              
                            </div><!-- end footer-text -->
                        </div><!-- end widget -->
                    </div>
                    </div>
                <div class="divfooter"></div>
                <div class="row secfooter2">

                    <div class="col-lg-12 text-center">
                        <div class="row">
                            <div class="col-lg-4">


                                <h2 class="widget-title">
                                    کاندیدای محترم در شبکه های اجتماعی


                                </h2>
                                <div class="social">
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="فیسبوک"><i class="fa fa-facebook"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="توییتر"><i class="fa fa-twitter"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="اینستاگرام"><i class="fa fa-instagram"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="گوگل پلاس"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="پینترس"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="copyright">تمامی حقوق برای<a href="#"> کاندیدای محترم </a>محفوظ است.</div>

                            </div>
                            <div class="col-lg-4">
                                <a href="index.html"><img src="images/version/tech-footer-logo.png" alt="" class="img-fluid"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end container -->
        </footer><!-- end footer -->

        <div class="dmtop">بالا</div>
        
    </div><!-- end wrapper -->
