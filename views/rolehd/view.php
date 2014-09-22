<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Rolehd;
use app\models\Roledt;
use yii\bootstrap\Alert;

/**
 * @var yii\web\View $this
 * @var app\models\Rolehd $model
 */

$this->title = $model->id;
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

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'c_name',
            'c_desc',
            [
                'attribute'=> 'c_active',
                'value' => $model->c_active,
            ],

        ],
    ]) ?>

</div>
