<?php
namespace app\themes\entekhabat\components;

use yii\bootstrap\Widget;
use app\modules\tfbnews\api\News;

class LastNewsWidget extends Widget
{
    public $layout;
    protected $items;
    public $limit = 10;
    public $title;

    const LAYOUT_MAIN_PAGE = "last-news";

    public function init()
    {
        $this->items = News::last($this->limit);
    }   

    public function run()
    {
        return $this->render($this->layout, [
            'items' => $this->items,
            'title' => $this->title,
            ]);
    }
}