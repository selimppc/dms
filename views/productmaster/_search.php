<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\ProductmasterSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="productmaster-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'product_code') ?>

    <?= $form->field($model, 'product_name') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'class_code') ?>

    <?php // echo $form->field($model, 'group_code') ?>

    <?php // echo $form->field($model, 'category_code') ?>

    <?php // echo $form->field($model, 'sell_rate') ?>

    <?php // echo $form->field($model, 'cost_price') ?>

    <?php // echo $form->field($model, 'sell_unit') ?>

    <?php // echo $form->field($model, 'sell_unit_conversion') ?>

    <?php // echo $form->field($model, 'purchase_unit') ?>

    <?php // echo $form->field($model, 'purchase_unit_conversion') ?>

    <?php // echo $form->field($model, 'stock_unit') ?>

    <?php // echo $form->field($model, 'stock_unit_conversion') ?>

    <?php // echo $form->field($model, 'pack_size') ?>

    <?php // echo $form->field($model, 'stock_type') ?>

    <?php // echo $form->field($model, 'supplier_code') ?>

    <?php // echo $form->field($model, 'maximum_level') ?>

    <?php // echo $form->field($model, 'minmum_level') ?>

    <?php // echo $form->field($model, 'reorder_level') ?>

    <?php // echo $form->field($model, 'tax_rate') ?>

    <?php // echo $form->field($model, 'STATUS') ?>

    <?php // echo $form->field($model, 'inserttime') ?>

    <?php // echo $form->field($model, 'updatetime') ?>

    <?php // echo $form->field($model, 'insertuser') ?>

    <?php // echo $form->field($model, 'updateuser') ?>

    <?php // echo $form->field($model, 'ip_address') ?>

    <?php // echo $form->field($model, 'business_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
