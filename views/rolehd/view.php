<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Rolehd;
use app\models\Roledt;
use yii\bootstrap\Alert;
use yii\bootstrap\Modal;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var app\models\Rolehd $model
 */

$this->title = $model->c_name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Role Header'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?php

if($flash = Yii::$app->session->getFlash('success')){
    echo Alert::widget(['options' => ['class' => 'alert-success'], 'body' => $flash]);
}elseif($flash = Yii::$app->session->getFlash('error')){
    echo Alert::widget(['options' => ['class' => 'alert-error'], 'body' => $flash]);
}
?>


<div class="rolehd-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p class="pop-up">
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?php /* Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) */ ?>

        <?php Modal::begin([
            'id' => 'modal',
            'header' => '<h4>Add New Role Detail</h4>',
            'toggleButton' => ['label' => 'Add Role Detail'],

        ]); ?>

        <?= $this->render('//roledt/_form', [
            'model' => $model1,
        ]) ?>

        <?php
        Modal::end();

        ?>

    </p>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'c_name',
            'c_desc',
           /* [
                'attribute'=> 'c_active',
                'value' => $model->c_active,
            ],*/

        ],
    ]) ?>

</div>
<p>&nbsp;</p>
<h3 style="color: #008000;"> Role Detail List of  <?= $model->c_name ?> </h3>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel1,
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
            'template'=>'{delete}',
            'buttons' => [
                'delete' => function ($url, $model) {
                    return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
                        'title' => Yii::t('app', 'Delete'),
                    ]);
                }
            ],
            'urlCreator' => function ($action, $model, $key, $index) {
                if ($action === 'delete') {
                    $url = Yii::t('app', ['roledt/delete', 'id'=>$model->id]);  // your own url generation logic
                    return $url;
                }
            }
        ],
    ],
]); ?>