<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\models\SuppliermasterSearch $searchModel
 */

$this->title = Yii::t('app', 'Supplier Master');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suppliermaster-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Supplier Master',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'supplier_code',
            'group_code',
            'branch_code',
            'supplier_name',
            // 'address',
            // 'district',
            // 'post',
            // 'post_code',
            // 'contact_person',
            // 'phone_number',
            // 'cell_number',
            // 'fax_number',
            // 'email_address:email',
            // 'url_address:url',
            // 'status',
             'ip_address',
             'business_id',

            ['class' => 'yii\grid\ActionColumn',
                'header'=>'Action',
            ],
        ],
    ]); ?>

</div>
