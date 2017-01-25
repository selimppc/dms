<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\Rolehd $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="rolehd-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'c_name')->input('c_name')->hint('Please enter access label')->label('Access Label') ?>
    <?= $form->field($model, 'c_desc')->dropDownList(['Admin'=>'Admin', 'Sales'=>'Sales'],['prompt'=>'- please select -'])->hint('Please select role type')->label('Role Type') ?>
    <?= $form->field($model, 'c_active')->dropDownList( ['1'=>'Active', '0'=>'Inactive'])->hint('Please select status')->label('Status') ?>

    <?php // $form->field($model, 'inserttime')->hiddenInput()->label('')  ?>
    <?php // $form->field($model, 'updatetime')->hiddenInput()->label('')  ?>
    <?php // $form->field($model, 'insertuser')->hiddenInput()->label('')  ?>
    <?php // $form->field($model, 'updateuser')->hiddenInput()->label('')  ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
