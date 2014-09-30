<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Alert;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\models\RoledtSearch $searchModel
 */

$this->title = Yii::t('app', 'Role Detail');
$this->params['breadcrumbs'][] = $this->title;
?>
<?php

if($flash = Yii::$app->session->getFlash('success')){
    echo Alert::widget(['options' => ['class' => 'alert-success'], 'body' => $flash]);
}elseif($flash = Yii::$app->session->getFlash('error')){
    echo Alert::widget(['options' => ['class' => 'alert-error'], 'body' => $flash]);
}
?>


<div class="roledt-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', ['modelClass' => 'Role Detail',]), ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', '<< Back to {modelClass}', ['modelClass' => 'Role Setup',]), ['rolehd/index'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'header'=> 'Role Header',
                'attribute' => 'rolehd',
                'value' => 'rolehd.c_name'
            ],
            [
                'attribute' => 'menupanel',
                'value' => 'menupanel.c_name'
            ],
            [
                'attribute' => 'menuparentid',
                'value' => 'menuparentid.c_name'
            ],
            //'id',
            //'c_id',
            //'c_menuid',
            //'c_parentid',

            [
                'class' => 'yii\grid\ActionColumn',
                'header'=>'Action',
                'template'=>'{view}{update}',
            ],
        ],
    ]); ?>

</div>
