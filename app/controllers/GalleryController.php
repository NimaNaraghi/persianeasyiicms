<?php

namespace app\controllers;

use app\components\MainController;
use app\modules\tfbgallery\api\Gallery;
use yii\web\NotFoundHttpException;
use Yii;

class GalleryController extends MainController
{
    public function actionIndex($slug = null)
    {
        $category = Gallery::cat($slug);

        if(is_null($category)){
            throw new NotFoundHttpException(Yii::t('app','Category not found.'));
        }

        return $this->render('index', ['category' => $category]);
    }
}
