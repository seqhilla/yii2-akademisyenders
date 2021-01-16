<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Dersler */

$this->title = $model->dersAdi . ':' ;
$this->params['breadcrumbs'][] = ['label' => 'Dersler', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dersAdi, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Güncelle';
?>
<div class="dersler-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
