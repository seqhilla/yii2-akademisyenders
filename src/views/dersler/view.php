<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Dersler */

$this->title = $model->dersAdi;
$this->params['breadcrumbs'][] = ['label' => 'Dersler', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="dersler-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Güncelle', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Sil', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Silmek İstediğine Emin Misin?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'dersID',
            //'dersAdi',
            //'ogrtUyesiAdi',
            'ogrtuye.ogrtUyesiAdi',
            'dersGunleri',
            'dersSaatleri',



        ],
    ]) ?>

</div>
