<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Ogrtuye */

$this->title = $model->ogrtUyesiAdi . ':';
$this->params['breadcrumbs'][] = ['label' => 'Akademisyenler', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ogrtUyesiAdi, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Güncelle';
?>
<div class="ogrtuye-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
