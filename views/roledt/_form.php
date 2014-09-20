<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Rolehd;
use app\models\Menupanel;

/**
 * @var yii\web\View $this
 * @var app\models\Roledt $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="roledt-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'c_id')->dropDownList(ArrayHelper::map(Rolehd::find()->all(), 'id', 'c_name'), ['prompt'=>'- please select -'])->hint('Please select role header')->label('Role Headers')  ?>

    <?= $form->field($model, 'c_menuid')->dropDownList([
        'Module'=> ArrayHelper::map(Menupanel::find()->where(['c_type' => 'MODU'])->all(), 'id', 'c_name'),
        'Menu'=> ArrayHelper::map(Menupanel::find()->where(['c_type' => 'MENU'])->all(), 'id', 'c_name'),
        'Sub-Menu'=> ArrayHelper::map(Menupanel::find()->where(['c_type' => 'SUBM'])->all(), 'id', 'c_name')], ['prompt'=>'- please select -'])->hint('Please select menu item')->label('Menu Item') ?>

    <?= $form->field($model, 'c_parentid')->dropDownList([
        'Module'=> ArrayHelper::map(Menupanel::find()->where(['c_type' => 'MODU'])->all(), 'id', 'c_name'),
        'Menu'=> ArrayHelper::map(Menupanel::find()->where(['c_type' => 'MENU'])->all(), 'id', 'c_name'),
        'Sub-Menu'=> ArrayHelper::map(Menupanel::find()->where(['c_type' => 'SUBM'])->all(), 'id', 'c_name')], ['prompt'=>'- please select -'])->hint('Please select parent')->label('Parent Menu ID') ?>

    <?php // $form->field($model, 'inserttime')->hiddenInput() ?>
    <?php // $form->field($model, 'updatetime')->hiddenInput() ?>
    <?php // $form->field($model, 'insertuser')->hiddenInput(['maxlength' => 50]) ?>
    <?php // $form->field($model, 'updateuser')->hiddenInput(['maxlength' => 50]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>