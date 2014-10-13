<?php

use yii\helpers\Html;
use yii\grid\GridView;

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
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Transaction',
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
            'branch_code',
            'description',
            // 'ACTION',
            // 'last_number',
            // 'increment',
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
