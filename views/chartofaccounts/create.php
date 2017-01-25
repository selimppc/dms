<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Chartofaccounts $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Chart Of Accounts',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Chart Of Accounts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chartofaccounts-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
