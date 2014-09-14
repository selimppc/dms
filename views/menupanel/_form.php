<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Menupanel;
use yii\helpers\ArrayHelper;

/**
 * @var yii\web\View $this
 * @var app\models\Menupanel $model
 * @var yii\widgets\ActiveForm $form
 */
?>



<div class="menupanel-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'c_id')->hiddenInput(['value'=>'1'])->label('') ?>

    <?= $form->field($model, 'c_type')->dropDownList( ['empty'=>'- please select -', 'Module'=>['MODU'=>'Module'], 'Menu'=>['MENU'=>'Menu', 'SUBM'=>'Sub-Menu']])->hint('Please enter Menu Type')->label('Menu Type') ?>

    <?= $form->field($model, 'c_name')->textInput()->hint('Please enter menu name')->label('Menu Name') ?>

    <?= $form->field($model, 'c_redirect')->textInput()->hint('Please enter menu link')->label('Menu Link') ?>

    <?= $form->field($model, 'c_parentid')->dropDownList(
        ['Root'=> ArrayHelper::map(Menupanel::find()->where(['c_type' => 'ROOT'])->all(), 'id', 'c_name'),
        'Module'=> ArrayHelper::map(Menupanel::find()->where(['c_type' => 'MODU'])->all(), 'id', 'c_name'),
        'Menu'=> ArrayHelper::map(Menupanel::find()->where(['c_type' => 'MENU'])->all(), 'id', 'c_name'),
        'Sub-Menu'=> ArrayHelper::map(Menupanel::find()->where(['c_type' => 'SUBM'])->all(), 'id', 'c_name')],
        ['prompt'=>'- please select -']
    )->hint('Please select parent menu')->label('Parent Menu Type')  ?>

    <?= $form->field($model, 'c_sortord')->textInput()->hint('Please enter menu order name')->label('Menu Order') ?>

    <?= $form->field($model,'inserttime')->hiddenInput()->label('')   ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
