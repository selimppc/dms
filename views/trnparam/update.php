<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Trnparam $model
 */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
  'modelClass' => 'Transaction',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Transaction'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="trnparam-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
