<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Makul;
use app\models\Hari;
use app\models\Ruang;
use kartik\widgets\TimePicker
// //use kartik\widgets\ActiveForm;
// use kartik\widgets\TimePicker;


/* @var $this yii\web\View */
/* @var $model app\models\Jadwal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jadwal-form">

    <?php $form = ActiveForm::begin(); ?>

   <!--  <?= $form->field($model, 'hari')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'kd_makul')->textInput(['maxlength' => true]) ?>
 -->
    <?= $form->field($model,'id_hari')->dropDownList( ArrayHelper::map (Hari::find()->All(),'id_hari','hari'),
    ['prompt'=>'--Pilih Hari--']	) ?>
     
    <?= $form->field($model,'id_ruang')->dropDownList(ArrayHelper::map (Ruang::find()->All(),'id_ruang','nama_ruang'),
    ['prompt'=>'--Pilih Ruang--']) ?>

    <?= $form->field($model, 'waktu')->widget(TimePicker::classname()); ?>
  
    <?= $form->field($model,'kd_makul')->dropDownList(ArrayHelper::map (Makul::find()->All(),'kd_makul','nm_makul'),
    ['prompt'=>'--Pilih Mata Kuliah--']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
