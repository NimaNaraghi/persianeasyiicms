<?php
namespace app\themes\entekhabat\components;

use yii\bootstrap\Widget;
use app\modules\tfbgallery\api\Gallery;

class LastImagesWidget extends Widget
{
    public $layout;
    protected $items;
    public $limit = 10;
    public $title;

    const LAYOUT_MAIN_PAGE = "last-images";

    public function init()
    {
        $this->items = Gallery::last($this->limit);
    }   

    public function run()
    {
        return $this->render($this->layout, [
            'items' => $this->items,
            'title' => $this->title,
            ]);
    }
}