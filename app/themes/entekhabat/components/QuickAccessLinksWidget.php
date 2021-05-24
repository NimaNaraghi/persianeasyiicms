<?php
namespace app\themes\entekhabat\components;

use yii\bootstrap\Widget;
use app\modules\tfbpage\api\Page;

class QuickAccessLinksWidget extends Widget
{
    

    public $layout;
    protected $items;
    public $title;

    public function init()
    {
        $pages = Page::getAllPages();

        foreach($pages as $page)
        {
            $item = (object) [
                'url' => $page->getURL(),
                'title' => $page->title,
            ];

            $this->items[] = $item;
        }

       
    }   

    public function run()
    {
        return $this->render('quick-access-links', [
            'title' => $this->title,
            'items' => $this->items,
            ]);
    }
}