<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Business;
use app\models\Branchmaster;

/**
 * @var yii\web\View $this
 * @var app\models\Customermaster $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="customermaster-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'customer_code')->input('customer_code')->hint('Please enter customer code') ?>
    <?= $form->field($model, 'customer_name')->input('customer_name')->hint('Please enter customer name') ?>

    <?= $form->field($model, 'group_code')->input('group_code')->hint('Please enter Group') ?>
    <?= $form->field($model, 'type_code')->input('type_code')->hint('Please enter Type') ?>
    <?= $form->field($model, 'address')->textarea()->hint('Please enter Contact Address') ?>
    <?= $form->field($model, 'territory')->input('territory')->hint('Please enter territory') ?>
    <?= $form->field($model, 'cell_number')->input('cell_number')->hint('Please enter cell number') ?>
    <?= $form->field($model, 'phone_number')->input('phone_number')->hint('Please enter phone number') ?>
    <?= $form->field($model, 'fax_number')->input('fax_number')->hint('Please enter fax number') ?>
    <?= $form->field($model, 'email_address')->input('email_address')->hint('Please enter email Address') ?>

    <?= $form->field($model, 'branch_code')->dropDownList(ArrayHelper::map(Branchmaster::find()->all(), 'id', 'branch_name'), ['prompt'=>'- please select -'])->hint('Please enter Branch')->label('Branch') ?>
    <?= $form->field($model, 'market_code')->input('market_code')->hint('Please enter market code') ?>
    <?= $form->field($model, 'sales_person')->input('sales_person')->hint('Please enter sales person') ?>
    <?= $form->field($model, 'credit_limit')->input('credit_limit')->hint('Please enter credit limit') ?>
    <?= $form->field($model, 'hub_code')->input('hub_code')->hint('Please enter Hub ') ?>

    <?= $form->field($model, 'business_id')->dropDownList(ArrayHelper::map(Business::find()->all(), 'id', 'company_name'), ['prompt'=>'- please select -'])->hint('Please enter Business Name')->label('Business Name') ?>

    <?= $form->field($model, 'parent_id')->input('parent_id')->hint('Please enter parent') ?>

    <?= $form->field($model, 'status')->dropDownList(['1'=>'Active', '0'=>'Inactive'], ['prompt'=>'- please select -'])->hint('Please enter status')->label('Status') ?>

    <?= $form->field($model, 'ip_address')->input('ip_address', ['readonly' => true])->hint('Please enter IP Address')->label('IP Address') ?>

    <?php // $form->field($model, 'inserttime')->input('') ?>
    <?php // $form->field($model, 'updatetime')->input('') ?>
    <?php // $form->field($model, 'insertuser')->input('') ?>
    <?php // $form->field($model, 'updateuser')->input('') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
