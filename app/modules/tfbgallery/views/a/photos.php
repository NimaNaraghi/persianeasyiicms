<?php
use yii\easyii\widgets\Photos;

$this->title = $model->title;
?>

<?= $this->render('@app/modules/tfbgallery/views/a/_menu') ?>

<?= Photos::widget(['model' => $model])?>