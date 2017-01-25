<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var app\models\Productmaster $model
 */

$this->title = $model->product_name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Product Master'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productmaster-view">

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
            'product_code',
            'product_name',
            'description',
            'class_code',
            'group_code',
            'category_code',
            'sell_rate',
            'cost_price',
            'sell_unit',
            'sell_unit_conversion',
            'purchase_unit',
            'purchase_unit_conversion',
            'stock_unit',
            'stock_unit_conversion',
            'pack_size',
            'stock_type',
            'supplier_code',
            'maximum_level',
            'minmum_level',
            'reorder_level',
            'tax_rate',
            'STATUS',
            'ip_address',
            'business_id',
        ],
    ]) ?>

</div>
