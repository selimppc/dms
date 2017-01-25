<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Business;
use app\models\Branchmaster;
use app\models\Chartofaccounts;

/**
 * @var yii\web\View $this
 * @var app\models\Codesparam $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="codesparam-form">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'TYPE')->input('TYPE', $model->isNewRecord ? ['readonly' => true]: ['readonly' => true])->hint('Please enter TYPE')->label('TYPE') ?>

        <?= $form->field($model, 'CODE')->input('CODE')->hint('Please enter CODE')->label('CODE') ?>

        <?= $form->field($model, 'description')->input('description')->hint('Please enter Description')->label('Description') ?>

        <?= $form->field($model, 'branch_code')->dropDownList(ArrayHelper::map(Branchmaster::find()->all(), 'branch_code', 'branch_name'),['prompt'=>'- please select -'])->hint('Please select branch')->label('Branch Name') ?>

        <?= $form->field($model, 'credit_account')->dropDownList(ArrayHelper::map(Chartofaccounts::find()->all(), 'account_code', 'description'),['prompt'=>'- please select -'])->hint('Please select credit account')->label('Credit Account') ?>

        <?= $form->field($model, 'debit_account')->dropDownList(ArrayHelper::map(Chartofaccounts::find()->all(), 'account_code', 'description'),['prompt'=>'- please select -'])->hint('Please select Debit Account')->label('Debit Account') ?>

        <?= $form->field($model, 'discount_acount')->dropDownList(ArrayHelper::map(Chartofaccounts::find()->all(), 'account_code', 'description'),['prompt'=>'- please select -'])->hint('Please select Discount Account ')->label('Discount Account') ?>

        <?= $form->field($model, 'tax_account')->dropDownList(ArrayHelper::map(Chartofaccounts::find()->all(), 'account_code', 'description'),['prompt'=>'- please select -'])->hint('Please select Tax Account')->label('Tax Account') ?>

        <?= $form->field($model, 'return_account')->dropDownList(ArrayHelper::map(Chartofaccounts::find()->all(), 'account_code', 'description'),['prompt'=>'- please select -'])->hint('Please select Return Account')->label('Return Account') ?>

        <?= $form->field($model, 'tax_rate')->input('tax_rate')->hint('Please enter Tax Rate')->label('Tax Rate') ?>
        <?= $form->field($model, 'properties')->input('properties')->hint('Please enter properties')->label('Properties') ?>

        <?= $form->field($model, 'percentage')->input('percentage')->hint('Please enter percentage')->label('Percentage') ?>

        <?= $form->field($model, 'business_id')->dropDownList(ArrayHelper::map(Business::find()->all(), 'id', 'company_name'), ['prompt'=>'- please select -'])->hint('Please enter Business Name')->label('Business Name') ?>

        <?= $form->field($model, 'active')->dropDownList(['1'=>'Active', '0'=>'Inactive'], ['prompt'=>'- please select -'])->hint('Please enter active')->label('Active') ?>

        <?= $form->field($model, 'ip_address')->input('ip_address', ['readonly' => true])->hint('Please enter IP Address')->label('IP Address') ?>




    <?php // $form->field($model, 'insert_time')->hiddenInput() ?>
    <?php // $form->field($model, 'update_time')->hiddenInput() ?>
    <?php // $form->field($model, 'insert_user')->hiddenInput() ?>
    <?php // $form->field($model, 'update_user')->hiddenInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
