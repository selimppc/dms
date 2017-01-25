<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var app\models\Customermaster $model
 */

$this->title = $model->customer_name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Customer Master'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customermaster-view">

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
            'customer_code',
            'customer_name',
            'group_code',
            'type_code',
            'address',
            'territory',
            'cell_number',
            'phone_number',
            'fax_number',
            'email_address:email',
            'branch_code',
            'market_code',
            'sales_person',
            'credit_limit',
            'hub_code',
            'status',
            'parent_id',
            'ip_address',
            'business_id',
        ],
    ]) ?>

</div>
