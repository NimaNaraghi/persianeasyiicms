<?php

namespace app\controllers;

use app\components\MainController;
use Yii;
class SiteController extends MainController
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }
}