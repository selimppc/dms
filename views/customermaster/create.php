<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Customermaster $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Customer Master',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Customer Master'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customermaster-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
