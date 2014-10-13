<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Business;

/**
 * @var yii\web\View $this
 * @var app\models\Trnparam $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="trnparam-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TYPE')->input('TYPE', ['readonly' => true]) ?>

    <?= $form->field($model, 'CODE')->input('CODE', ['readonly' => true]) ?>

    <?= $form->field($model, 'branch_code')->input('branch_code') ?>

    <?= $form->field($model, 'description')->input('description') ?>

    <?= $form->field($model, 'ACTION')->input('ACTION') ?>

    <?= $form->field($model, 'last_number')->input('last_number') ?>

    <?= $form->field($model, 'increment')->input('increment', ['readonly' => true]) ?>

    <?= $form->field($model, 'active')->dropDownList(['1'=>'Active', '0'=>'Inactive'], ['prompt'=>'- please select -'])->hint('Please enter active')->label('Active') ?>

    <?= $form->field($model, 'ip_address')->input('ip_address', ['readonly' => true]) ?>

    <?= $form->field($model, 'business_id')->dropDownList(ArrayHelper::map(Business::find()->all(), 'id', 'company_name'), ['prompt'=>'- please select -'])->hint('Please enter Business Name')->label('Business Name') ?>



    <?php // $form->field($model, 'insert_time')->hiddenInput('insert_time') ?>
    <?php // $form->field($model, 'update_time')->hiddenInput('update_time') ?>
    <?php // $form->field($model, 'insert_user')->hiddenInput('insert_user') ?>
    <?php // $form->field($model, 'update_user')->hiddenInput('update_user') ?>





    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
