<?php
// use yii\easyii\widgets\DateTimePicker;
use yii\easyii\helpers\Image;
use yii\easyii\widgets\TagsInput;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\easyii\widgets\Redactor;
use yii\easyii\widgets\SeoForm;
use app\assets\PersianDatePickerAsset;

PersianDatePickerAsset::register($this);

$this->registerJS("
$('.p-datepicker').each(function(){
    
    var existDate = null;
    var altFieldPDate = null;
    
    existDate = $(this).val();
    altFieldPDate = $(this).data('id');
    

    $(this).pDatepicker({
          format: 'YYYY/MM/DD',
          initialValue: true,
          timePicker : {enabled:true},
          persianDigit: true,
          observer: true,
          altField: '#' + altFieldPDate,
    });
});
");


$module = $this->context->module->id;
?>
<?php $form = ActiveForm::begin([
    'enableAjaxValidation' => true,
    'options' => ['enctype' => 'multipart/form-data', 'class' => 'model-form']
]); ?>
<?= $form->field($model, 'title') ?>
<?php if($this->context->module->settings['enableThumb']) : ?>
    <?php if($model->image) : ?>
        <img src="<?= Image::thumb($model->image, 240) ?>">
        <a href="<?= Url::to(['/admin/'.$module.'/a/clear-image', 'id' => $model->news_id]) ?>" class="text-danger confirm-delete" title="<?= Yii::t('easyii', 'Clear image')?>"><?= Yii::t('easyii', 'Clear image')?></a>
    <?php endif; ?>
    <?= $form->field($model, 'image')->fileInput() ?>
<?php endif; ?>
<?php if($this->context->module->settings['enableShort']) : ?>
    <?= $form->field($model, 'short')->textarea() ?>
<?php endif; ?>
<?= $form->field($model, 'text')->widget(Redactor::className(),[
    'options' => [
        'minHeight' => 400,
        'imageUpload' => Url::to(['/admin/redactor/upload', 'dir' => 'tfbnews']),
        'fileUpload' => Url::to(['/admin/redactor/upload', 'dir' => 'tfbnews']),
        'plugins' => ['fullscreen']
    ]
]) ?>

<?php 
    echo Html::activeLabel($model,'time');
    echo Html::activeHiddenInput($model, 'time');
    echo Html::input( 'text', 'persian-time', $model->time ? date('Y/m/d', $model->time) : '',
        $options = ['class'=>'form-control p-datepicker' , 'data-id' => 'news-time'] );
?>



<?php if($this->context->module->settings['enableTags']) : ?>
    <?= $form->field($model, 'tagNames')->widget(TagsInput::className()) ?>
<?php endif; ?>

<?php if(IS_ROOT) : ?>
    <?= $form->field($model, 'slug') ?>
    <?= SeoForm::widget(['model' => $model]) ?>
<?php endif; ?>

<?= Html::submitButton(Yii::t('easyii', 'Save'), ['class' => 'btn btn-primary']) ?>
<?php ActiveForm::end(); ?>
