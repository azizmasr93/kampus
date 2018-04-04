<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PresensiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="presensi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_presensi') ?>

    <?= $form->field($model, 'kd_makul') ?>

    <?= $form->field($model, 'id_mhs') ?>

    <?= $form->field($model, 'tgl') ?>

    <?= $form->field($model, 'waktu') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
