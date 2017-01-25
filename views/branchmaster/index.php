<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\models\BranchmasterSearch $searchModel
 */

$this->title = Yii::t('app', 'Branch Master');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="branchmaster-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Branch Master',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'branch_code',
            'branch_name',
            'currency',
            'exchange_rate',
            'contact_person',
            'designation',
            //'address',
            'phone_number',
            'cell_number',
            // 'fax_number',
            // 'active',
            'ip_address',

            ['class' => 'yii\grid\ActionColumn',
                'header'=> 'Action',
            ],
        ],
    ]); ?>

</div>
