<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\testData\TestData */

$this->title = Yii::t('test-data', 'Create Test Data');
$this->params['breadcrumbs'][] = ['label' => Yii::t('test-data', 'Test Datas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="test-data-create">

  <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
