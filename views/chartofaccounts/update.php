<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Chartofaccounts $model
 */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
  'modelClass' => 'Chart Of Accounts',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Chart Of Accounts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="chartofaccounts-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
