<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Productmaster $model
 */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
  'modelClass' => 'Product Master',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Product Master'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="productmaster-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
