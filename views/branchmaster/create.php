<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Branchmaster $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Branch Master',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Branch Master'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="branchmaster-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
