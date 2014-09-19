<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Rolehd $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Role Header',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Role Header'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rolehd-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
