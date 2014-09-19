<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Rolehd $model
 */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
  'modelClass' => 'Role Header',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Role Header'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="rolehd-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
