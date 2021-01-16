<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\OgrtuyeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Akademisyenler';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ogrtuye-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Akademisyen Oluştur', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'ogrtUyesiID',
            'ogrtUyesiFakultesi',
            'ogrtUyesiAdi',
            'verdigiDersKodlari',
            'verdigiDersKodlari2',
            'verdigiDersKodlari3',
            'verdigiDersKodlari4',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
