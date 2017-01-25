<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Trnparam $model
 */

$this->title = $pageTitle;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Transaction'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trnparam-create">

    <h1><?php // Html::encode($this->title) ?> <?= $pageTitle; ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
