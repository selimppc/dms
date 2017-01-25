<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\Branchmaster $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="branchmaster-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'branch_code')->input('branch_code')->hint('Please enter branch code') ?>

    <?= $form->field($model, 'branch_name')->input('branch_name')->hint('Please enter Branch Name') ?>
    <?= $form->field($model, 'currency')->input('currency')->hint('Please enter currency') ?>
    <?= $form->field($model, 'exchange_rate')->input('exchange_rate')->hint('Please enter exchange rate') ?>
    <?= $form->field($model, 'contact_person')->input('contact_person')->hint('Please enter contact person') ?>
    <?= $form->field($model, 'designation')->input('designation')->hint('Please enter designation') ?>
    <?= $form->field($model, 'address')->textarea()->hint('Please enter contact Address') ?>
    <?= $form->field($model, 'phone_number')->input('phone_number')->hint('Please enter phone number') ?>
    <?= $form->field($model, 'cell_number')->input('cell_number')->hint('Please enter cell number') ?>
    <?= $form->field($model, 'fax_number')->input('fax_number')->hint('Please enter fax number') ?>

    <?= $form->field($model, 'active')->dropDownList(['1'=>'Active', '0'=>'Inactive'], ['prompt'=>'- please select -'])->hint('Please select status') ?>
    <?= $form->field($model, 'ip_address')->input('ip_address', ['readonly' => true]) ?>

    <?php // $form->field($model, 'inserttime')->hiddenInput() ?>
    <?php // $form->field($model, 'updatetime')->hiddenInput() ?>
    <?php // $form->field($model, 'insertuser')->hiddenInput() ?>
    <?php // $form->field($model, 'updateuser')->hiddenInput() ?>




    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
