<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\Codesparam $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="codesparam-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TYPE')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'CODE')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'insert_time')->textInput() ?>

    <?= $form->field($model, 'business_id')->textInput() ?>

    <?= $form->field($model, 'tax_rate')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'percentage')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'active')->textInput() ?>

    <?= $form->field($model, 'update_time')->textInput() ?>

    <?= $form->field($model, 'branch_code')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'credit_account')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'debit_account')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'discount_acount')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'tax_account')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'return_account')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'properties')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'insert_user')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'update_user')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => 150]) ?>

    <?= $form->field($model, 'ip_address')->textInput(['maxlength' => 20]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
