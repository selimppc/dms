<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\UserSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="user-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'password') ?>

    <?= $form->field($model, 'auth_key') ?>

    <?= $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'designation') ?>

    <?php // echo $form->field($model, 'cell_number') ?>

    <?php // echo $form->field($model, 'branch_code') ?>

    <?php // echo $form->field($model, 'c_roleid') ?>

    <?php // echo $form->field($model, 'c_active') ?>

    <?php // echo $form->field($model, 'c_status') ?>

    <?php // echo $form->field($model, 'c_expdate') ?>

    <?php // echo $form->field($model, 'business_id') ?>

    <?php // echo $form->field($model, 'inserttime') ?>

    <?php // echo $form->field($model, 'updatetime') ?>

    <?php // echo $form->field($model, 'insertuser') ?>

    <?php // echo $form->field($model, 'updateuser') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
