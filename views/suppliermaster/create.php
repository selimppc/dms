<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Suppliermaster $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Supplier Master',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Supplier Master'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suppliermaster-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
