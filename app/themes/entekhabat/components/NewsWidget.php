<?php
namespace app\themes\entekhabat\components;

use yii\bootstrap\Widget;
use app\modules\tfbnews\api\News;

class NewsWidget extends Widget
{
    public $layout;
    protected $items;
    public $title;

    const LAYOUT_MAIN_PAGE = "main-news";

    public function init()
    {
        
    }   

    public function run()
    {
        return $this->render($this->layout, [
            'title' => $this->title,
            ]);
    }
}