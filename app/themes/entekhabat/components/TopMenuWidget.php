<?php
namespace app\themes\entekhabat\components;

use yii\base\Widget;
use yii\bootstrap\Nav;
use app\modules\tfbarticle\api\Article;
use yii\helpers\Url;
use app\modules\tfbpage\api\Page;
use app\modules\tfbgallery\api\Gallery;
use Yii;
use yii\helpers\Html;

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

        $this->generateItemsFromPages($items);

        $this->generateItemsFromArticles($items);

        $this->generateItemsFromGallery($items);

        return $items;
    }

    protected function generateItemsFromGallery(Array &$items)
    {
        $flatCats = Gallery::cats();

        $subItems = [];

        foreach($flatCats as $category)
        {
            if($category->status == 1){
                $subItems[] = [
                    'label' => $category->title,
                    'url' => Url::to(['gallery/index', 'slug' => $category->slug]),
                    'options' => ['class' => 'nav-item'],
                    
                ];
            }
        
        }

        if(count($subItems) > 0){
            $item = [
                'label' => Yii::t('app', 'Gallery'),
                'options' => ['class' => 'dropdown has-submenu'],
                'items' => $subItems,
                'linkOptions' => ['class' => 'nav-link'],
            ];
            
            
            $items[] = $item;
        }
        
    }

    /**
     * Generates a mega menu of articles' categories by following the instructions of Yamm!3 plugin.
     * @var $items Array a reference to a list of all menu items utilized by yii\bootstrap\Nav widget
     * @return void
     */
    protected function generateItemsFromArticles(Array &$items)
    {
        $tree = Article::tree();

        foreach($tree as $cat)
        {
          $item = "";
          
          if(!empty($cat->children)){

            $item .= Html::beginTag('li', ['class' => 'dropdown yamm-fw']);
            $item .= Html::a($cat->title, '#', ['class' => 'dropdown-toggle nav-link', 'data-toggle' => "dropdown", 'aria-expanded' => "true"]);
            $item .= Html::beginTag('ul', ['class' => 'dropdown-menu']);
            $item .= Html::beginTag('li');
            $item .= Html::beginTag('div', ['class' => 'yamm-content']);
            $item .= Html::beginTag('div', ['class' => 'row']);
            
            foreach($cat->children as $child)
            {
                $item .= Html::beginTag('ul', ['class' => 'col-sm-2 list-unstyled']);
                //TODO: Implement a getURL method in the child items
                $item .= Html::tag('li',"<p><strong>" . Html::a($child->title,['category/view', 'slug' => $child->slug]) . "</strong></p>");
                if(!empty($child->children)){
                  foreach($child->children as $childB)
                  {
                    $item .= Html::tag('li', Html::a($childB->title, ['category/view', 'slug' => $childB->slug]));
                  }
                    
                }
                
                $item .= Html::endTag('ul');
            }

            
            $item .= Html::endTag('div');
            $item .= Html::endTag('div');
            $item .= Html::endTag('li');
            $item .= Html::endTag('ul');
            $item .= Html::endTag('li');

          }else{
              $item = [
                'label' => $cat->title,
                'url' => Url::to(['category/view', 'slug' => $cat->slug]),
                'options' => ['class' => 'nav-item'],
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
                'url' => $page->getURL(),
                'options' => ['class' => 'nav-item'],
                'linkOptions' => ['class' => 'nav-link'],
            ];
        }
    }
}

