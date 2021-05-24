<?php
namespace app\themes\entekhabat\components;

use yii\base\Widget;
use yii\bootstrap\Nav;
use app\modules\tfbarticle\api\Article;
use yii\helpers\Url;
use app\modules\tfbpage\api\Page;

class TopMenuWidget extends Widget
{
    protected $items;

    public function init()
    {
        $this->items = $this->generateItems();
    }

    public function run()
    {
        return $this->render('top-menu', ['items' => $this->items]);
    }

    public function generateItems()
    {
        $items = [];

        $this->generateItemsFromArticles($items);

        $this->generateItemsFromPages($items);

        return $items;
    }

    protected function generateItemsFromArticles(Array &$items)
    {
        $tree = Article::tree();

        //Add categories to items.
        foreach($tree as $category)
        {
            if(empty($category->children)){
                $item = [
                    'label' => $category->title,
                    'url' => Url::to(['category/view', 'slug' => $category->slug]),
                    'options' => ['class' => 'nav-item'],
                    'linkOptions' => ['class' => 'nav-link']
                ];
            }else{
                $itemChildren = [];

                foreach($category->children as $child)
                {
                    $itemChildren[] = [
                        'label' => $child->title,
                        'url' => Url::to(['category/view', 'slug' => $child->slug]),
                        'options' => ['class' => 'nav-item'],
                        
                    ];
                }

                $item = [
                    'label' => $category->title,
                    'options' => ['class' => 'dropdown has-submenu'],
                    'items' => $itemChildren,
                    'linkOptions' => ['class' => 'nav-link'],
                ];
            }

            $items[] = $item;

        }
    }

    protected function generateItemsFromPages(Array &$items)
    {
        //Add Pages to items.
        $pages = Page::getAllPages();

        foreach($pages as $page)
        {
            $items[] = [
                'label' => $page->title,
                'url' => Url::to(['page/view', 'slug' => $page->slug]),
                'options' => ['class' => 'nav-item'],
                'linkOptions' => ['class' => 'nav-link'],
            ];
        }
    }
}

