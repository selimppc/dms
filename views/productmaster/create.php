<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Productmaster $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Product Master',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Product Master'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productmaster-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
