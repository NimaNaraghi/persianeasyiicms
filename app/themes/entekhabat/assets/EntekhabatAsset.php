<?php
namespace app\themes\entekhabat\assets;

class EntekhabatAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@app/themes/entekhabat/media';
    public $css = [
        "css/css.css",
        "css/bootstrap.css",
        "css/font-awesome.min.css",
        "style.css",
        "css/responsive.css",
        "css/colors.css",
        "css/version/tech.css",
        "plugins/Gallery/lightgallery.css",
        "plugins/Gallery/Gallery.css"
    ];
    public $js = [
        "js/jquery.min.js",
        "js/tether.min.js",
        "js/bootstrap.min.js",
        "js/custom.js",
        "plugins/Gallery/gallery-scripts.js",
        "plugins/Gallery/lightgallery.js",
        "plugins/Gallery/lg-fullscreen.js",
        "plugins/Gallery/lg-thumbnail.js",
        "plugins/Gallery/lg-video.js",
        "plugins/Gallery/lg-autoplay.js",
        "plugins/Gallery/lg-zoom.js",
        "plugins/Gallery/lg-hash.js",
        "plugins/Gallery/lg-pager.js",
        "plugins/Gallery/jquery.mousewheel.min.js"

    ];
    public $depends = [
        // 'yii\web\JqueryAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
