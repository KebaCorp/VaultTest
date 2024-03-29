<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\testData\TestData */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('test-data', 'Test Datas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="test-data-view">

  <h1><?= Html::encode($this->title) ?></h1>

  <p>
      <?= Html::a(Yii::t('test-data', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
      <?= Html::a(Yii::t('test-data', 'Delete'), ['delete', 'id' => $model->id], [
          'class' => 'btn btn-danger',
          'data'  => [
              'confirm' => Yii::t('test-data', 'Are you sure you want to delete this item?'),
              'method'  => 'post',
          ],
      ]) ?>
  </p>

    <?= DetailView::widget([
        'model'      => $model,
        'attributes' => [
            'id',
            'name',
            'value',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
