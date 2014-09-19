<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Roledt $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Role Detail',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Role Detail'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="roledt-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
