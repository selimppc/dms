<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Rolehd;
use app\models\Menupanel;
use app\models\Business;

use yii\jui\DatePicker;

/**
 * @var yii\web\View $this
 * @var app\models\User $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->hint('Please type your username')->label('Username')  ?>
    <?= $form->field($model, 'password')->passwordInput()->hint('Please type your password')->label('Password')  ?>

    <?= $form->field($model, 'c_roleid')->dropDownList(ArrayHelper::map(Rolehd::find()->all(), 'id', 'c_name'), ['prompt'=>'- please select -'])->hint('Please select role')->label('Role Assign')  ?>

    <?= $form->field($model, 'name')->input('name')->hint('Please type employee name')->label('User / Employee Name')  ?>
    <?= $form->field($model, 'designation')->input('designation')->hint('Please type user\'s designation')->label('Designation') ?>
    <?= $form->field($model, 'cell_number')->input('cell_number')->hint('Please type user\'s contact number')->label('Contact Number') ?>
    <?= $form->field($model, 'branch_code')->input('branch_code')->hint('Please type user\'s branch name')->label('Branch') ?>
    <?= $form->field($model, 'business_id')->dropDownList(ArrayHelper::map(Business::find()->all(), 'id', 'company_name'), ['prompt'=>'- please select -'])->hint('Please select user\'s Company Name')->label('Company / Organization Name')?>

    <?= $form->field($model, 'c_expdate')->input('c_expdate')->hint('Please select user\'s expiry date')->label('Expiry Date') ?>

    <?php  $form->field($model,'c_expdate')->widget(DatePicker::className(),
        [
            'language' => 'en',

            'clientOptions' => [
                'showAnim'=>'fold',
                'changeMonth' => 'true',
                'changeYear' => 'true',
                'dateFormat' => 'yy-mm-dd',
                'keyboardNavigation' => false,

            ],

        ]) ?>

    <?php //$form->field($model, 'c_active')->input('c_active')->dropDownList(['1'=>'Active', '0'=>'No Activity'],['prompt'=>'- please select -'])->hint('Please select activity status')->label('Activity ') ?>
    <?php //$form->field($model, 'c_status')->input('c_status')->dropDownList(['1'=>'Open', '0'=>'Close'],['prompt'=>'- please select -'])->hint('Please select status')->label('Status') ?>

    <?= $form->field($model, 'c_active')->hiddenInput(['value'=>'0'])->label(''); ?>
    <?= $form->field($model, 'c_status')->hiddenInput(['value'=>'1'])->label(''); ?>



    <?php // $form->field($model, 'auth_key')->hiddenInput(['maxlength' => 54]) ?>

    <?php // $form->field($model, 'insertuser')->textInput() ?>
    <?php // $form->field($model, 'updateuser')->textInput() ?>
    <?php // $form->field($model, 'inserttime')->hiddenInput() ?>
    <?php // $form->field($model, 'updatetime')->hiddenInput() ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
