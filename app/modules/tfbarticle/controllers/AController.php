<?php
namespace app\modules\tfbarticle\controllers;

use yii\easyii\components\CategoryController;

class AController extends CategoryController
{
    /** @var string  */
    public $categoryClass = 'app\modules\tfbarticle\models\Category';

    /** @var string  */
    public $moduleName = 'tfbarticle';
}