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
    ];
    public $js = [
        "js/jquery.min.js",
        "js/tether.min.js",
        "js/bootstrap.min.js",
        "js/custom.js"

    ];
    public $depends = [
        // 'yii\web\JqueryAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
