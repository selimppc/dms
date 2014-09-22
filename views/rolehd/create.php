<?php

use yii\helpers\Html;
use yii\bootstrap\Alert;

/**
 * @var yii\web\View $this
 * @var app\models\Rolehd $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Role Header',
]);
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


<div class="rolehd-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
