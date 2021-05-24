<?php
namespace app\themes\entekhabat\components;

use yii\bootstrap\Widget;
use app\modules\tfbnews\api\News;

class ArticlesWidget extends Widget
{
    public $layout;
    protected $items;
    public $title;
    public $category;

    const LAYOUT_SINGLE_COLUMN = "articles-single-column";

    public function init()
    {
        
    }   

    public function run()
    {
        return $this->render($this->layout, [
            'title' => $this->title,
            'category' => $this->category,
            ]);
    }
}