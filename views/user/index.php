<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\models\UserSearch $searchModel
 */

$this->title = Yii::t('app', 'User');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'User',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'username',
            'name',
            'designation',
            'cell_number',
            'branch_code',
            //'c_roleid',
            [
                'header'=> 'Role Assign',
                'attribute' => 'rolehd',
                'value' => 'rolehd.c_name'
            ],

            [
                'attribute'=> 'c_active',
                'value'=>function ($model){
                    if($model->c_active == 1){
                        return "Active";
                    }else{
                        return "No Activity";
                    }
                },
                'filter' => true,
            ],
            [
                'attribute'=> 'c_status',
                'value'=>function ($model){
                    if($model->c_status == 1){
                        return "Open";
                    }else{
                        return "Close";
                    }
                },
                'filter' => true,
            ],

            'c_expdate',

            [
                'header'=> 'Business Name',
                'attribute' => 'business',
                'value' => 'business.company_name'
            ],
            // 'inserttime',
            // 'updatetime',
            // 'insertuser',
            // 'updateuser',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
