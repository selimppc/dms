<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\models\TrnparamSearch $searchModel
 */

$this->title = Yii::t('app', 'Transaction');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trnparam-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', ['modelClass' => 'Transaction',]), ['create'], ['class' => 'btn btn-success']) ?>

        <?= Html::a(Yii::t('app', 'New {modelClass}', ['modelClass' => 'Voucher TRN NO',]), ['voucher-transaction-number'], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'New {modelClass}', ['modelClass' => 'Requisition Number',]), ['requisition-number'], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'New {modelClass}', ['modelClass' => 'Purchase Order Number',]), ['purchase-order-number'], ['class' => 'btn btn-success']) ?>

        <?= Html::a(Yii::t('app', 'New {modelClass}', ['modelClass' => 'Invoice Number',]), ['invoice-number'], ['class' => 'btn btn-success']) ?>

        <?= Html::a(Yii::t('app', 'New {modelClass}', ['modelClass' => 'Sales Return Number',]), ['sales-return-number'], ['class' => 'btn btn-success']) ?>
    </p>

    <p>
        <?= Html::a(Yii::t('app', 'New {modelClass}', ['modelClass' => 'Money Receipt Number',]), ['money-receipt-number'], ['class' => 'btn btn-success']) ?>

        <?= Html::a(Yii::t('app', 'New {modelClass}', ['modelClass' => 'GRN Number Setup',]), ['grn-number'], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'New {modelClass}', ['modelClass' => 'IM Transaction',]), ['im-transaction-number'], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'New {modelClass}', ['modelClass' => 'IM Transfer Number',]), ['im-transfer-number'], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'New {modelClass}', ['modelClass' => 'IM Adjustment Transaction Number',]), ['im-adjustment-transaction-number'], ['class' => 'btn btn-success']) ?>
    </p>

     <?php Pjax::begin();
        echo GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'TYPE',
                'CODE',
                'branch_code',
                'description',
                'ACTION',
                'last_number',
                'increment',
                'ip_address',
                //'business_id',
                [
                    'attribute'=> 'business_id',
                    'value' => 'businessId.company_name',
                ],

                ['class' => 'yii\grid\ActionColumn',
                    'header'=>'Action',
                ],
            ],
        ]);
    Pjax::end();
    ?>

</div>
