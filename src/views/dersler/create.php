<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Dersler */

$this->title = 'Ders Bilgileri';
$this->params['breadcrumbs'][] = ['label' => 'Dersler', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dersler-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
