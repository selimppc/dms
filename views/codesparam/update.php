<?php

use yii\helpers\Html;
use yii\widgets\Pjax;

/**
 * @var yii\web\View $this
 * @var app\models\Codesparam $model
 */

$this->title = Yii::t('app', 'Update {modelClass}: ', ['modelClass' => $model->description,]) . $model->TYPE;

$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Codesparams'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="codesparam-update">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    <?php Pjax::end(); ?>

</div>
