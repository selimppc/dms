<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Customermaster $model
 */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
  'modelClass' => 'Customer Master',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Customer Master'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="customermaster-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
