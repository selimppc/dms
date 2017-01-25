<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\models\ChartofaccountsSearch $searchModel
 */

$this->title = Yii::t('app', 'Chart Of Accounts');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chartofaccounts-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Chart Of Accounts',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'account_code',
            'description',
            'account_type',
            'account_usage',
            'first_group',
            'second_group',
            //'third_group',
            //'analytical_code',
            'branch_code',
            //'STATUS',
            'ip_address',
            'business_id',

            ['class' => 'yii\grid\ActionColumn',
                'header'=>'Action',
            ],
        ],
    ]); ?>

</div>
