<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\bootstrap\Alert;

/**
 * @var yii\web\View $this
 * @var app\models\User $model
 */

$this->title = 'Reset password';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php
if($flash = Yii::$app->session->getFlash('success')){
    echo Alert::widget(['options' => ['class' => 'alert-success'], 'body' => $flash]);
}elseif($flash = Yii::$app->session->getFlash('error')){
    echo Alert::widget(['options' => ['class' => 'alert-error'], 'body' => $flash]);
}
?>

<div class="user-update">

    <h1><?= Html::encode($this->title) ?></h1>


    <div class="user-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'old_password')->passwordInput()->hint('Please type old password')->label('Old Password')  ?>

        <?= $form->field($model, 'new_password')->passwordInput(['value'=>''])->hint('Please type new password')->label('New Password')  ?>

        <?= $form->field($model, 'repeat_password')->passwordInput()->hint('Please re-type new password')->label('Confirm New Password')  ?>


        <div class="form-group">
            <?= Html::submitButton( Yii::t('app', 'Reset Password') , ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>


</div>
