<?php
namespace app\themes\entekhabat\components;

use yii\bootstrap\Widget;

class GalleryWidget extends Widget
{
    public $layout;
    protected $items;
    public $title;
    public $category;

    const LAYOUT_DEFAULT = "gallery-default";

    public function init()
    {   
        if(!isset($this->layout)){
            $this->layout = self::LAYOUT_DEFAULT;
        }
       

        $this->items = $this->category->photos();
        
    }   

    public function run()
    {
        return $this->render($this->layout, [
            'title' => $this->title,
            'category' => $this->category,
            'items' => $this->items,
        ]);
    }
}