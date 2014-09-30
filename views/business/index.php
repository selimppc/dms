<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Alert;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\models\BusinessSearch $searchModel
 */

$this->title = Yii::t('app', 'Business');
$this->params['breadcrumbs'][] = $this->title;
?>

<?php
    if($flash = Yii::$app->session->getFlash('success')){
        echo Alert::widget(['options' => ['class' => 'alert-success'], 'body' => $flash]);
    }elseif($flash = Yii::$app->session->getFlash('error')){
        echo Alert::widget(['options' => ['class' => 'alert-error'], 'body' => $flash]);
    }
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


            [
                'class' => 'yii\grid\ActionColumn',
                'header'=>'Action',
                'template'=>'{view}{update}',
            ],
        ],
    ]); ?>

</div>
