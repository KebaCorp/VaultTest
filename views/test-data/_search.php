<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\testData\TestDataSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="test-data-search">

    <?php $form = ActiveForm::begin([
        'action'  => ['index'],
        'method'  => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'value') ?>

    <?= $form->field($model, 'created_at') ?>

    <?= $form->field($model, 'updated_at') ?>

  <div class="form-group">
      <?= Html::submitButton(Yii::t('test-data', 'Search'), ['class' => 'btn btn-primary']) ?>
      <?= Html::resetButton(Yii::t('test-data', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
  </div>

    <?php ActiveForm::end(); ?>

</div>
