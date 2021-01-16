<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\OgrtuyeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ogrtuye-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ogrtUyesiID') ?>

    <?= $form->field($model, 'ogrtUyesiFakultesi') ?>

    <?= $form->field($model, 'ogrtUyesiAdi') ?>

    <?= $form->field($model, 'verdigiDersKodlari') ?>

    <?= $form->field($model, 'verdigiDersKodlari2') ?>

    <?= $form->field($model, 'verdigiDersKodlari3') ?>

    <?= $form->field($model, 'verdigiDersKodlari4') ?>

    <?php  //echo $form->field($model, 'verdigiDersKodlari2') ?>

    <?php // echo $form->field($model, 'verdigiDersKodlari3') ?>

    <?php // echo $form->field($model, 'verdigiDersKodlari4') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
