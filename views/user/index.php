<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Alert;



/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\models\UserSearch $searchModel
 */

$this->title = Yii::t('app', 'User');
$this->params['breadcrumbs'][] = $this->title;
?>
<?php
if($flash = Yii::$app->session->getFlash('success')){
    echo Alert::widget(['options' => ['class' => 'alert-success'], 'body' => $flash]);
}elseif($flash = Yii::$app->session->getFlash('error')){
    echo Alert::widget(['options' => ['class' => 'alert-error'], 'body' => $flash]);
}
?>

<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', ['modelClass' => 'User',]), ['create'], ['class' => 'btn btn-success']) ?>
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


            [
                'class' => 'yii\grid\ActionColumn',
                'header'=>'Action',
                'template'=>'{view}{update}',
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'header'=>'Deactivate',
                'template'=>'{deactivate}',
                'buttons' => [
                    'deactivate' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-saved"></span>', $url, [
                            'title' => Yii::t('app', 'Deactivate'),
                            'click'=>'OK',
                        ]);

                    },


                ],
                'urlCreator' => function ($action, $model, $key, $index) {
                    if ($action === 'deactivate') {
                        $url = Yii::t('app', ['user/inactive', 'id'=>$model->id]);  // your own url generation logic
                        return $url;
                    }
                }

            ]

        ],
    ]); ?>

</div>

<!-- Button trigger modal -->
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"> modal </button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel"> <?php echo $this->title; ?> </h4>
            </div>
            <div class="modal-body">
                <?php echo $this->title; ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
















