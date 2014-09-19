<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\RolehdSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="rolehd-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'c_name') ?>

    <?= $form->field($model, 'c_desc') ?>

    <?= $form->field($model, 'c_active') ?>

    <?= $form->field($model, 'inserttime') ?>

    <?php // echo $form->field($model, 'updatetime') ?>

    <?php // echo $form->field($model, 'insertuser') ?>

    <?php // echo $form->field($model, 'updateuser') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
