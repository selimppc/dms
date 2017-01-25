<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\ChartofaccountsSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="chartofaccounts-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'account_code') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'account_type') ?>

    <?= $form->field($model, 'account_usage') ?>

    <?php // echo $form->field($model, 'first_group') ?>

    <?php // echo $form->field($model, 'second_group') ?>

    <?php // echo $form->field($model, 'third_group') ?>

    <?php // echo $form->field($model, 'analytical_code') ?>

    <?php // echo $form->field($model, 'branch_code') ?>

    <?php // echo $form->field($model, 'STATUS') ?>

    <?php // echo $form->field($model, 'inserttime') ?>

    <?php // echo $form->field($model, 'updatetime') ?>

    <?php // echo $form->field($model, 'insertuser') ?>

    <?php // echo $form->field($model, 'updateuser') ?>

    <?php // echo $form->field($model, 'ip_address') ?>

    <?php // echo $form->field($model, 'business_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
