<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var app\models\Codesparam $model
 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Codesparams'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="codesparam-view">

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
            'description',
            'branch_code',
            'credit_account',
            'debit_account',
            'discount_acount',
            'tax_account',
            'return_account',
            'tax_rate',
            'properties',
            'percentage',
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