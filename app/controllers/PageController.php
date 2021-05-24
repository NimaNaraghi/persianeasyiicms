<?php

namespace app\controllers;

use app\components\MainController;
use app\modules\tfbpage\api\Page;

class PageController extends MainController
{
    
    public function actionView($slug)
    {
        if($slug === "home-page"){
            return $this->goHome();
        }
        
        $item = Page::get($slug);

        return $this->render('view', ['item' => $item]);
    }

}
