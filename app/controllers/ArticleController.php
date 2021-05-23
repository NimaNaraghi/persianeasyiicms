<?php

namespace app\controllers;

use app\components\MainController;
use app\modules\tfbarticle\api\Article;

class ArticleController extends MainController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionView($slug)
    {
        $item = Article::get($slug);

        return $this->render('view', ['item' => $item]);
    }

}
