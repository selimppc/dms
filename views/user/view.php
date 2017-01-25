<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\bootstrap\Alert;

/**
 * @var yii\web\View $this
 * @var app\models\User $model
 */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'User'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?php
        if($flash = Yii::$app->session->getFlash('success')){
            echo Alert::widget(['options' => ['class' => 'alert-success'], 'body' => $flash]);
        }elseif($flash = Yii::$app->session->getFlash('error')){
            echo Alert::widget(['options' => ['class' => 'alert-error'], 'body' => $flash]);
        }
?>

<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            'name',
            'designation',
            'cell_number',
            'branch_code',
            'c_roleid',
            'c_active',
            'c_status',
            'c_expdate',
            'business_id',

        ],
    ]) ?>

</div>
