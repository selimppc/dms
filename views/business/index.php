<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\models\BusinessSearch $searchModel
 */

$this->title = Yii::t('app', 'Business');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="business-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Business',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'company_name',
            'contact_person',
            'address',
            'city',
             'zip_code',
             'country',
             'phone',
            // 'cell_number',
            // 'fax_number',
             'url:url',
             'logo',
            // 'inserttime',
            // 'insertuser',
            // 'updatetime',
            // 'updateuser',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
