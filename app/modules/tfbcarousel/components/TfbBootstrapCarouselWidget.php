<?php 
namespace app\modules\tfbcarousel\components;

use yii\bootstrap\Carousel;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\base\InvalidConfigException;

class TfbBootstrapCarouselWidget extends Carousel
{
    public function renderIndicators()
    {
        if ($this->showIndicators === false) {
            return '';
        }
        $indicators = [];
        for ($i = 0, $count = count($this->items); $i < $count; $i++) {
            $options = ['data-target' => '#' . $this->options['id'], 'data-slide-to' => $i];
            if ($i === 0) {
                Html::addCssClass($options, 'active');
            }
            $indicators[] = Html::tag('li', '', $options);
        }

        return Html::tag('ul', implode("\n", $indicators), ['class' => 'carousel-indicators']);
    }

    /**
     * Renders a single carousel item
     * @param string|array $item a single item from [[items]]
     * @param integer $index the item index as the first item should be set to `active`
     * @return string the rendering result
     * @throws InvalidConfigException if the item is invalid
     */
    public function renderItem($item, $index)
    {
        if (is_string($item)) {
            $content = $item;
            $caption = null;
            $options = [];
        } elseif (isset($item['content'])) {
            $content = $item['content'];
            $caption = ArrayHelper::getValue($item, 'caption');
            if ($caption !== null) {
                $caption = Html::tag('div', $caption, ['class' => 'carousel-caption']);
            }
            $options = ArrayHelper::getValue($item, 'options', []);
        } else {
            throw new InvalidConfigException('The "content" option is required.');
        }

        Html::addCssClass($options, ['widget' => 'carousel-item']);
        if ($index === 0) {
            Html::addCssClass($options, 'active');
        }

        return Html::tag('div', $content . "\n" . $caption, $options);
    }

    /**
     * @inherit
     */
    public function renderControls()
    {
        if (isset($this->controls[0], $this->controls[1])) {
            return Html::a($this->controls[0], '#' . $this->options['id'], [
                'class' => 'carousel-control-prev',
                'data-slide' => 'prev',
            ]) . "\n"
            . Html::a($this->controls[1], '#' . $this->options['id'], [
                'class' => 'carousel-control-next',
                'data-slide' => 'next',
            ]);
        } elseif ($this->controls === false) {
            return '';
        } else {
            throw new InvalidConfigException('The "controls" property must be either false or an array of two elements.');
        }
    }
}