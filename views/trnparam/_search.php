<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\TrnparamSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="trnparam-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'TYPE') ?>

    <?= $form->field($model, 'CODE') ?>

    <?= $form->field($model, 'branch_code') ?>

    <?= $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'ACTION') ?>

    <?php // echo $form->field($model, 'last_number') ?>

    <?php // echo $form->field($model, 'increment') ?>

    <?php // echo $form->field($model, 'active') ?>

    <?php // echo $form->field($model, 'ip_address') ?>

    <?php // echo $form->field($model, 'insert_time') ?>

    <?php // echo $form->field($model, 'update_time') ?>

    <?php // echo $form->field($model, 'insert_user') ?>

    <?php // echo $form->field($model, 'update_user') ?>

    <?php // echo $form->field($model, 'business_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
