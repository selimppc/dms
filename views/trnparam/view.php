<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var app\models\Trnparam $model
 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Transaction'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trnparam-view">

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
            'TYPE',
            'CODE',
            'branch_code',
            'description',
            'ACTION',
            'last_number',
            'increment',
            'active',
            'ip_address',
            'insert_time',
            'update_time',
            'insert_user',
            'update_user',
            'business_id',
        ],
    ]) ?>

</div>
