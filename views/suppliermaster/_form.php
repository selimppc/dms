<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Business;
use app\models\Branchmaster;


/**
 * @var yii\web\View $this
 * @var app\models\Suppliermaster $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="suppliermaster-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'supplier_code')->input('supplier_code')->hint('Please enter supplier code') ?>
    <?= $form->field($model, 'supplier_name')->input('supplier_name')->hint('Please enter supplier name') ?>
    <?= $form->field($model, 'group_code')->input('group_code')->hint('Please enter group ') ?>
    <?= $form->field($model, 'branch_code')->dropDownList(ArrayHelper::map(Branchmaster::find()->all(), 'branch_code', 'branch_name'), ['prompt'=>'- please select -'])->hint('Please enter branch') ?>

    <?= $form->field($model, 'address')->textarea()->hint('Please enter contact address') ?>
    <?= $form->field($model, 'district')->input('district')->hint('Please enter city')->label('City') ?>
    <?= $form->field($model, 'post_code')->input('post_code')->hint('Please enter zip code')->label('Zip Code') ?>
    <?= $form->field($model, 'contact_person')->input('contact_person')->hint('Please enter contact person') ?>

    <?= $form->field($model, 'phone_number')->input('phone_number')->hint('Please enter phone number') ?>
    <?= $form->field($model, 'cell_number')->input('cell_number')->hint('Please enter cell number') ?>
    <?= $form->field($model, 'fax_number')->input('fax_number')->hint('Please enter fax') ?>
    <?= $form->field($model, 'email_address')->input('email_address')->hint('Please enter email address') ?>

    <?= $form->field($model, 'url_address')->input('url_address')->hint('Please enter WEB address') ?>

    <?= $form->field($model, 'business_id')->dropDownList(ArrayHelper::map(Business::find()->all(), 'id', 'company_name'), ['prompt'=>'- please select -'])->hint('Please enter Business Name')->label('Business Name') ?>

    <?= $form->field($model, 'status')->dropDownList(['1'=>'Active', '0'=>'Inactive'], ['prompt'=>'- please select -'])->hint('Please enter status')->label('status') ?>

    <?= $form->field($model, 'ip_address')->input('ip_address', ['readonly' => true])->hint('Please enter IP Address')->label('IP Address') ?>


    <?php // $form->field($model, 'inserttime')->textInput() ?>
    <?php // $form->field($model, 'updatetime')->textInput() ?>
    <?php // $form->field($model, 'insertuser')->textInput() ?>
    <?php // $form->field($model, 'updateuser')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
