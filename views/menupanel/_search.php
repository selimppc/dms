<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\MenupanelSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="menupanel-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'c_id') ?>

    <?= $form->field($model, 'c_type') ?>

    <?= $form->field($model, 'c_name') ?>

    <?= $form->field($model, 'c_redirect') ?>

    <?php // echo $form->field($model, 'c_parentid') ?>

    <?php // echo $form->field($model, 'c_sortord') ?>

    <?php // echo $form->field($model, 'inserttime') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
