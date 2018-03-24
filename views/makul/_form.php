<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Makul */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="makul-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_makul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nm_makul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_dosen')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
