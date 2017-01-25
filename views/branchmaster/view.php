<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var app\models\Branchmaster $model
 */

$this->title = $model->branch_name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Branch Master'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="branchmaster-view">

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
            //'id',
            'branch_code',
            'branch_name',
            'currency',
            'exchange_rate',
            'contact_person',
            'designation',
            'address',
            'phone_number',
            'cell_number',
            'fax_number',
            'active',
            'ip_address',

        ],
    ]) ?>

</div>
