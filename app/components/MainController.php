<?php

namespace app\components;

use yii\web\Controller;
use Yii;
use yii\base\Theme;

class MainController extends Controller
{
    public function init()
    {
        $this->setTheme();
    }

    public function setTheme()
    {
        Yii::$app->getView()->theme = new Theme([
            'basePath' => '@app/themes/entekhabat',
            'baseUrl' => '@web/themes/entekhabat',
            'pathMap' => [
                '@app/views' => '@app/themes/entekhabat/views',
            ],
        ]);

    }
}