<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\models\CodesparamSearch $searchModel
 */

$this->title = Yii::t('app', 'Codesparams');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="codesparam-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Codesparam',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'TYPE',
            'CODE',
            'description',
            'branch_code',
            // 'credit_account',
            // 'debit_account',
            // 'discount_acount',
            // 'tax_account',
            // 'return_account',
            // 'tax_rate',
            // 'properties',
            // 'percentage',
            // 'active',
            // 'ip_address',
            // 'insert_time',
            // 'update_time',
            // 'insert_user',
            // 'update_user',
            // 'business_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
