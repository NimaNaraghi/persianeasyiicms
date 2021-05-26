<?php
namespace app\modules\tfbgallery\controllers;

use yii\easyii\components\CategoryController;
use app\modules\tfbgallery\models\Category;

class AController extends CategoryController
{
    public $categoryClass = 'app\modules\tfbgallery\models\Category';
    public $moduleName = 'tfbgallery';
    public $viewRoute = '/a/photos';

    public function actionPhotos($id)
    {
        if(!($model = Category::findOne($id))){
            return $this->redirect(['/admin/'.$this->module->id]);
        }

        return $this->render('photos', [
            'model' => $model,
        ]);
    }
}