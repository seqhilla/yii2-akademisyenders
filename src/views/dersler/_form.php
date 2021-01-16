<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Dersler */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dersler-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dersID')->textInput() ?>

    

    <?= $form->field($model, 'dersAdi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ogrtUyesiAdi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dersGunleri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dersSaatleri')->textInput(['maxlength' => true]) ?>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
