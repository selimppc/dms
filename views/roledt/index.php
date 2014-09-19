<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\models\RoledtSearch $searchModel
 */

$this->title = Yii::t('app', 'Role Detail');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="roledt-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Role Detail',
]), ['create'], ['class' => 'btn btn-success']) ?>
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
