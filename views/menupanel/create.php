<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Menupanel $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Menu Panel',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Menu Panel'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menupanel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
