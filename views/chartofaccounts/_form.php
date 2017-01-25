<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Business;
use app\models\Branchmaster;

/**
 * @var yii\web\View $this
 * @var app\models\Chartofaccounts $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="chartofaccounts-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'account_code')->input('account_code') ?>
    <?= $form->field($model, 'description')->input('description') ?>

    <?= $form->field($model, 'account_type')->dropDownList(['Asset'=>'Asset', 'Liability'=>'Liability', 'Income'=>'Income', 'Expenses'=>'Expenses'], ['prompt'=>'- please select -']) ?>

    <?= $form->field($model, 'account_usage')->dropDownList(['Ledger'=>'Ledger', 'AP'=>'AP', 'AR'=>'AR'], ['prompt'=>'- please select -']) ?>

    <?= $form->field($model, 'first_group')->input('first_group') ?>
    <?= $form->field($model, 'second_group')->input('second_group') ?>
    <?= $form->field($model, 'third_group')->input('third_group') ?>

    <?= $form->field($model, 'analytical_code')->dropDownList(['Cash'=>'Cash', 'Non-Cash'=>'Non-Cash', 'Cheque'=>'Cheque', 'Bank Drafts'=>'Bank Drafts', 'Other'=>'Other'], ['prompt'=>'- please select -']) ?>

    <?= $form->field($model, 'branch_code')->dropDownList(ArrayHelper::map(Branchmaster::find()->all(), 'id', 'branch_name'), ['prompt'=>'- please select -'])->hint('Please enter Branch') ?>

    <?= $form->field($model, 'business_id')->dropDownList(ArrayHelper::map(Business::find()->all(), 'id', 'company_name'), ['prompt'=>'- please select -'])->hint('Please enter Business Name')->label('Business Name') ?>

    <?= $form->field($model, 'STATUS')->dropDownList(['1'=>'Active', '0'=>'Inactive'], ['prompt'=>'- please select -'])->hint('Please enter status') ?>

    <?= $form->field($model, 'ip_address')->input('ip_address', ['readonly' => true])->hint('Please enter IP Address')->label('IP Address') ?>


    <?php // $form->field($model, 'inserttime')->input('inserttime') ?>
    <?php // $form->field($model, 'updatetime')->input('updatetime') ?>
    <?php // $form->field($model, 'insertuser')->input('insertuser') ?>
    <?php // $form->field($model, 'updateuser')->input('updateuser') ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
