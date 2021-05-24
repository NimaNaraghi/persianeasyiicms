<?php

namespace app\controllers;

use app\components\MainController;
use app\modules\tfbarticle\api\Article;

class CategoryController extends MainController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionView($slug)
    {
        $category = Article::cat($slug);

        return $this->render('view', ['category' => $category]);
    }

}
