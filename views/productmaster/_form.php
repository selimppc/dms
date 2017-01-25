<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Business;
use app\models\Suppliermaster;

/**
 * @var yii\web\View $this
 * @var app\models\Productmaster $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="productmaster-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'product_code')->input('product_code')->hint('Please enter Product Code') ?>
    <?= $form->field($model, 'product_name')->input('product_name')->hint('Please enter Product Name') ?>
    <?= $form->field($model, 'description')->input('class_code')->hint('Please enter Product Description') ?>
    <?= $form->field($model, 'class_code')->input('class_code')->hint('Please enter Product Class') ?>
    <?= $form->field($model, 'group_code')->input('group_code')->hint('Please enter Product Group') ?>
    <?= $form->field($model, 'category_code')->input('category_code')->hint('Please enter Product Category') ?>
    <?= $form->field($model, 'sell_rate')->input('sell_rate')->hint('Please enter Sell Rate') ?>
    <?= $form->field($model, 'cost_price')->input('cost_price')->hint('Please enter Cost Price') ?>


    <?= $form->field($model, 'sell_unit')->input('sell_unit')->hint('Please enter Sell Unit') ?>
    <?= $form->field($model, 'sell_unit_conversion')->input('sell_unit_conversion')->hint('Please enter Sell Unit conversion') ?>
    <?= $form->field($model, 'purchase_unit')->input('purchase_unit')->hint('Please enter Purchase Unit') ?>
    <?= $form->field($model, 'purchase_unit_conversion')->input('purchase_unit_conversion')->hint('Please enter Purchase Unit conversion') ?>
    <?= $form->field($model, 'stock_unit')->input('stock_unit')->hint('Please enter Stock Unit') ?>
    <?= $form->field($model, 'stock_unit_conversion')->input('stock_unit_conversion')->hint('Please enter Stock Unit conversion') ?>

    <?= $form->field($model, 'pack_size')->input('pack_size')->hint('Please enter pack size') ?>

    <?= $form->field($model, 'stock_type')->dropDownList(['Stock N Sell'=>'Stock N Sell', 'Non Stock'=>'Non Stock'], ['prompt'=>'- please select -'])->hint('Please select stock type') ?>

    <?= $form->field($model, 'supplier_code')->dropDownList(ArrayHelper::map(Suppliermaster::find()->all(), 'supplier_code', 'supplier_name'), ['prompt'=>'- please select -'])->hint('Please select supplier')->label('Supplier Name') ?>

    <?= $form->field($model, 'maximum_level')->input('maximum_level')->hint('Please enter maximum level') ?>
    <?= $form->field($model, 'minmum_level')->input('minmum_level')->hint('Please enter minimum level') ?>
    <?= $form->field($model, 'reorder_level')->input('reorder_level')->hint('Please enter re-order level') ?>
    <?= $form->field($model, 'tax_rate')->input('tax_rate')->hint('Please enter tax rate (%)') ?>

    <?= $form->field($model, 'business_id')->dropDownList(ArrayHelper::map(Business::find()->all(), 'id', 'company_name'), ['prompt'=>'- please select -'])->hint('Please select Business Name')->label('Business Name') ?>

    <?= $form->field($model, 'STATUS')->dropDownList(['1'=>'Active', '0'=>'Inactive'], ['prompt'=>'- please select -'])->hint('Please enter STATUS')->label('STATUS') ?>

    <?= $form->field($model, 'ip_address')->input('ip_address', ['readonly' => true])->hint('Please enter IP Address')->label('IP Address') ?>

    <?php // $form->field($model, 'inserttime')->textInput() ?>
    <?php // $form->field($model, 'updatetime')->textInput() ?>
    <?php // $form->field($model, 'insertuser')->textInput(['maxlength' => 10]) ?>
    <?php // $form->field($model, 'updateuser')->textInput(['maxlength' => 10]) ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
