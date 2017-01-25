<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Codesparam $model
 */

$this->title = $pageTitle;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Codes Param'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="codesparam-create">

    <h1><?php // Html::encode($this->title) ?> <?= $pageTitle; ?></h1>


    <?= $this->render('_form', [
        'model' => $model,
        'pageTitle'=>$pageTitle,
    ]) ?>

</div>
