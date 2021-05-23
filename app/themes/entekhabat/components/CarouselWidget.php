<?php
namespace app\themes\entekhabat\components;

use yii\base\Widget;

class CarouselWidget extends Widget
{
    public function init()
    {

    }

    public function run()
    {
        return $this->render('carousel');
    }
}