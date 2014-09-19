<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\Business $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="business-form">


    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'company_name')->input('company_name')->hint('Please enter company name')->label('Company Name') ?>

    <?= $form->field($model, 'contact_person')->input('contact_person')->hint('Please enter contact person')->label('Contact Person') ?>

    <?= $form->field($model, 'address')->textarea()->hint('Please enter contact address')->label('Contact Address') ?>

    <?= $form->field($model, 'city')->input('city')->hint('Please enter city')->label('City') ?>

    <?= $form->field($model, 'zip_code')->input('zip_code')->hint('Please enter Zip Code')->label('Zip Code') ?>

    <?= $form->field($model, 'fax_number')->input('country')->hint('Please enter country')->label('Country Name') ?>

    <?= $form->field($model, 'phone')->input('phone')->hint('Please enter phone')->label('Phone') ?>

    <?= $form->field($model, 'cell_number')->input('cell_number')->hint('Please enter cell number')->label('Cell Number') ?>

    <?= $form->field($model, 'fax_number')->input('fax_number')->hint('Please enter fax number')->label('Fax Number') ?>

    <?= $form->field($model, 'url')->input('url')->hint('Please enter url')->label('Website') ?>

    <?= $form->field($model, 'logo')->fileInput()->hint('upload company logo')->label('Company Logo') ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
