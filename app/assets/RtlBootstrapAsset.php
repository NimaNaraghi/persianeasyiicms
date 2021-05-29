<?php
namespace app\assets;

class RtlBootstrapAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@app/media';
    public $css = [
        'css/bootstrap-rtl.min.css',
    ];
    
    public $depends = [
        'yii\easyii\assets\AdminAsset',
    ];
}
