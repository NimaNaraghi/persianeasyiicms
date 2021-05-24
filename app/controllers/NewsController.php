<?php

namespace app\controllers;

use app\components\MainController;
use app\modules\tfbnews\api\News;

class NewsController extends MainController
{
    
    public function actionView($slug)
    {
        $item = News::get($slug);

        return $this->render('view', ['item' => $item]);
    }

}
