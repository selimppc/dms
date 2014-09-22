<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;
use app\models\Rolehd;
use yii\grid\DataColumn;
use yii\bootstrap\Alert;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\models\RolehdSearch $searchModel
 */

$this->title = Yii::t('app', 'Role Header');
$this->params['breadcrumbs'][] = $this->title;
?>
<?php

if($flash = Yii::$app->session->getFlash('success')){
    echo Alert::widget(['options' => ['class' => 'alert-success'], 'body' => $flash]);
}elseif($flash = Yii::$app->session->getFlash('error')){
    echo Alert::widget(['options' => ['class' => 'alert-error'], 'body' => $flash]);
}
?>


<div class="rolehd-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', ['modelClass' => 'Role Header',]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'id',
            'c_name',
            'c_desc',
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


            ['class' => 'yii\grid\ActionColumn',
                'header'=>'Action',
            ],


        ],
    ]); ?>

</div>
