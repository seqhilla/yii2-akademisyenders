<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Ogrtuye */

$this->title = $model->ogrtUyesiAdi;
$this->params['breadcrumbs'][] = ['label' => 'Akademisyenler', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ogrtuye-view">

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
            'ogrtUyesiID',
            'ogrtUyesiFakultesi',
            //'ogrtUyesiAdi',
            'verdigiDersKodlari',
            'verdigiDersKodlari2',
            'verdigiDersKodlari3',
            'verdigiDersKodlari4',
        ],
    ]) ?>

</div>
