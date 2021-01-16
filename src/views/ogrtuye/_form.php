<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Ogrtuye */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ogrtuye-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ogrtUyesiID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ogrtUyesiFakultesi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ogrtUyesiAdi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'verdigiDersKodlari')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'verdigiDersKodlari2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'verdigiDersKodlari3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'verdigiDersKodlari4')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
