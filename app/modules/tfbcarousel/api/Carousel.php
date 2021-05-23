<?php
namespace app\modules\tfbcarousel\api;

use app\modules\tfbcarousel\components\TfbBootstrapCarouselWidget;
use Yii;
use yii\easyii\components\API;
use yii\easyii\helpers\Data;
use app\modules\tfbcarousel\models\Carousel as CarouselModel;
use yii\helpers\Html;
use yii\helpers\Url;

/**
 * Carousel module API
 * @package app\modules\tfbcarousel\api
 * @method static string widget(int $width, int $height, array $clientOptions = []) Bootstrap carousel widget
 * @method static array items() array of all Carousel items as CarouselObject objects. Useful to create carousel on other widgets.
 */

class Carousel extends API
{
    public $clientOptions = ['interval' => 5000];

    private $_items = [];

    public function init()
    {
        parent::init();

        $this->_items = Data::cache(CarouselModel::CACHE_KEY, 3600, function(){
            $items = [];
            foreach(CarouselModel::find()->status(CarouselModel::STATUS_ON)->sort()->all() as $item){
                $items[] = new CarouselObject($item);
            }
            return $items;
        });
    }

    public function api_widget($width, $height, $clientOptions = [])
    {
        if(!count($this->_items)){
            return LIVE_EDIT ? Html::a(Yii::t('easyii/tfbcarousel/api', 'Create carousel'), ['/admin/carousel/a/create'], ['target' => '_blank']) : '';
        }
        if(count($clientOptions)){
            $this->clientOptions = array_merge($this->clientOptions, $clientOptions);
        }

        $items = [];
        foreach($this->_items as $item){
            $temp = [
                'content' => Html::img($item->thumb($width, $height)),
                'caption' => ''
            ];
            if($item->link) {
                $temp['content'] = Html::a($temp['content'], $item->link);
            }
            if($item->title){
                $temp['caption'] .= '<h3>' . $item->title . '</h3>';
            }
            if($item->text){
                $temp['caption'] .= '<p>'.$item->text.'</p>';
            }
            $items[] = $temp;
        }

        $widget = TfbBootstrapCarouselWidget::widget([
            'options' => ['class' => 'slide'],
            'clientOptions' => $this->clientOptions,
            'items' => $items,
            'controls' => [
                '<span class="carousel-control-prev-icon"></span>',
                '<span class="carousel-control-next-icon"></span>'
            ]
        ]);

        return LIVE_EDIT ? API::liveEdit($widget, Url::to(['/admin/carousel']), 'div') : $widget;
    }

    public function api_items()
    {
        return $this->_items;
    }
}