<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var app\models\Suppliermaster $model
 */

$this->title = $model->supplier_name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Supplier Master'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suppliermaster-view">

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
            'supplier_code',
            'group_code',
            'branch_code',
            'supplier_name',
            'address',
            'district',
            'post',
            'post_code',
            'contact_person',
            'phone_number',
            'cell_number',
            'fax_number',
            'email_address:email',
            'url_address:url',
            'status',
            'business_id',
        ],
    ]) ?>

</div>
