<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Business;

/**
 * @var yii\web\View $this
 * @var app\models\Currency $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="currency-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'currency')->input('currency')->hint('Please enter currency') ?>

    <?= $form->field($model, 'description')->input('description')->hint('Please enter description') ?>

    <?= $form->field($model, 'exchange_rate')->input('exchange_rate')->hint('Please enter exchange rate') ?>

    <?= $form->field($model, 'active')->dropDownList(['1'=>'Active', '0'=>'Inactive'], ['prompt'=>'- please select -'])->hint('Please select status')->label('Active') ?>

    <?= $form->field($model, 'business_id')->dropDownList(ArrayHelper::map(Business::find()->all(), 'id', 'company_name'), ['prompt'=>'- please select -'])->hint('Please enter Business Name')->label('Business Name') ?>

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
