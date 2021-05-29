<?php
namespace app\assets;

class AdminCustomAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@app/media';
    public $css = [
        'css/admin-custom.css',
    ];
    // public $js = [
    //     'js/admin-custom-scripts.js'
    // ];
    public $depends = [
        'yii\easyii\assets\AdminAsset',
    ];
}
