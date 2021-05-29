<?php
namespace app\assets;

class PersianDatePickerAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@app/media/plugins/persian-datepicker';
    public $css = [
        'css/persian-datepicker.min.css',
    ];
    public $js = [
        'js/persian-date.min.js',
        'js/persian-datepicker.min.js',
    ];
    public $depends = [
        // 'yii\web\JqueryAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
