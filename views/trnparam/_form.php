<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Business;
use app\models\Branchmaster;

/**
 * @var yii\web\View $this
 * @var app\models\Trnparam $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="trnparam-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TYPE')->input('TYPE', ['readonly' => true]) ?>

    <?= $form->field($model, 'CODE')->input('CODE')->hint('Please enter code') ?>

    <?= $form->field($model, 'description')->input('description')->hint('Please enter description') ?>

    <?= $form->field($model, 'branch_code')->dropDownList(ArrayHelper::map(Branchmaster::find()->all(), 'branch_code', 'branch_name'), ['prompt'=>'- please select -'])->hint('Please select branch') ?>



    <?= $form->field($model, 'ACTION')->input('ACTION')->hint('Please enter action') ?>

    <?= $form->field($model, 'last_number')->input('last_number')->hint('Please enter last number') ?>

    <?= $form->field($model, 'increment')->input('increment', ['readonly' => true])->hint('Please enter increment') ?>

    <?= $form->field($model, 'business_id')->dropDownList(ArrayHelper::map(Business::find()->all(), 'id', 'company_name'), ['prompt'=>'- please select -'])->hint('Please select Business Name')->label('Business Name') ?>

    <?= $form->field($model, 'active')->dropDownList(['1'=>'Active', '0'=>'Inactive'], ['prompt'=>'- please select -'])->hint('Please enter active')->label('Active') ?>

    <?= $form->field($model, 'ip_address')->input('ip_address', ['readonly' => true]) ?>





    <?php // $form->field($model, 'insert_time')->hiddenInput('insert_time') ?>
    <?php // $form->field($model, 'update_time')->hiddenInput('update_time') ?>
    <?php // $form->field($model, 'insert_user')->hiddenInput('insert_user') ?>
    <?php // $form->field($model, 'update_user')->hiddenInput('update_user') ?>





    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
