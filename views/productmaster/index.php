<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\models\ProductmasterSearch $searchModel
 */

$this->title = Yii::t('app', 'Product Master');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productmaster-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Product Master',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            'product_code',
            'product_name',
            'description',
            'class_code',
            //'group_code',
            //'category_code',
            'sell_rate',
            'cost_price',
            //'sell_unit',
            //'sell_unit_conversion',
            //'purchase_unit',
            //'purchase_unit_conversion',
            //'stock_unit',
            //'stock_unit_conversion',
            'pack_size',
            //'stock_type',
            //'supplier_code',
            //'maximum_level',
            //'minmum_level',
            //'reorder_level',
            'tax_rate',
            //'STATUS',
            // 'ip_address',
            // 'business_id',

            ['class' => 'yii\grid\ActionColumn',
                'header' => 'Action',
            ],
        ],
    ]); ?>

</div>
