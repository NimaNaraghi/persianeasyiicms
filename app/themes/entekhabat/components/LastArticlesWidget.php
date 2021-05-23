<?php
namespace app\themes\entekhabat\components;

use yii\bootstrap\Widget;
use app\modules\tfbarticle\api\Article;

class LastArticlesWidget extends Widget
{
    public $layout;
    protected $items;
    public $limit = 10;
    public $title;

    const LAYOUT_MAIN_PAGE = "last-articles";

    public function init()
    {
        $this->items = Article::last($this->limit);
    }   

    public function run()
    {
        return $this->render($this->layout, [
            'items' => $this->items,
            'title' => $this->title,
            ]);
    }
}