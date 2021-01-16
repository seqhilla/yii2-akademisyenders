<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\DerslerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dersler-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'dersID') ?>

    <?= $form->field($model, 'dersSaatleri') ?>

    <?= $form->field($model, 'dersGunleri') ?>

    <?= $form->field($model, 'dersAdi') ?>

    <?= $form->field($model, 'ogrtuye.ogrtUyesiAdi') ?>

    <?php // echo $form->field($model, 'ogrtUyesiAdi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
