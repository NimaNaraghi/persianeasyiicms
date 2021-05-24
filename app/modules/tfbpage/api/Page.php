<?php
namespace app\modules\tfbpage\api;

use Yii;
use app\modules\tfbpage\models\Page as PageModel;
use yii\helpers\Html;

/**
 * Page module API
 * @package app\modules\tfbpage\api
 *
 * @method static PageObject get(mixed $id_slug) Get page object by id or slug
 */

class Page extends \yii\easyii\components\API
{
    private $_pages = [];

    public static function getAllPages()
    {
        $pageModels = PageModel::find()->all();

        $pages = [];

        foreach($pageModels as $pageModel)
        {
            $pages[] = new PageObject($pageModel);
        }

        return $pages;

    }

    public function api_get($id_slug)
    {
        if(!isset($this->_pages[$id_slug])) {
            $this->_pages[$id_slug] = $this->findPage($id_slug);
        }
        return $this->_pages[$id_slug];
    }

    private function findPage($id_slug)
    {
        $page = PageModel::find()->where(['or', 'page_id=:id_slug', 'slug=:id_slug'], [':id_slug' => $id_slug])->one();

        return $page ? new PageObject($page) : $this->notFound($id_slug);
    }

    private function notFound($id_slug)
    {
        $page = new PageModel([
            'slug' => $id_slug
        ]);
        return new PageObject($page);
    }
}