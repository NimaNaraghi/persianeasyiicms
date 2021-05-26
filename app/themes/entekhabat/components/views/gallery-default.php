<?php



?>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="page-wrapper mainbox">
        <div class="blog-grid-system">

            <div class="demo-gallery container">
                <ul id="lightgallery" class="list-unstyled row">
                    
                    <?php foreach($items as $item): ?>

                    <div class="col-md-4  gallery-grid " data-src="<?= $item->thumb('266', '153') ?>" data-sub-html="">
                        <a href="#" title="<?= $item->description ?>">
                            <img src="<?= $item->thumb('266', '153') ?>" alt="" class="img-responsive img-thumbnail  img-fluid">
                        </a>
                    </div>
                    
                    
                    <?php endforeach; ?>
                </ul>
            </div>

        </div>
    </div>
    <br />
    <hr class="invis3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="Page navigation">
                    <?= $category->pages() ?>
                </nav>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end col -->
