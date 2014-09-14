<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\models\MenupanelSearch $searchModel
 */

$this->title = Yii::t('app', 'Menu Panel');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menupanel-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Menu Panel',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'c_id',
            'c_type',
            'c_name',
            'c_redirect',
            // 'c_parentid',
            // 'c_sortord',
            // 'inserttime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
