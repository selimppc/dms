<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\models\CustomermasterSearch $searchModel
 */

$this->title = Yii::t('app', 'Customer Master');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customermaster-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Customer Master',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'customer_code',
            'customer_name',
            //'group_code',
            //'type_code',
            // 'address',
            // 'territory',
             //'cell_number',
             'phone_number',
             //'fax_number',
             //'email_address:email',
             'branch_code',
             //'market_code',
             //'sales_person',
             'credit_limit',
            // 'hub_code',
            // 'status',
             //'parent_id',
             'ip_address',
             'business_id',

            ['class' => 'yii\grid\ActionColumn',
                'header'=>'Action',
            ],
        ],
    ]); ?>

</div>
