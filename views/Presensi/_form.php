<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Makul;
use app\models\Mahasiswa;
use kartik\widgets\TimePicker;
use kartik\widgets\DatePicker;



/* @var $this yii\web\View */
/* @var $model app\models\presensi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="presensi-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 'id_presensi')->textInput() ?> -->

   <?=$form->field($model, 'kd_makul')->dropDownList(ArrayHelper::map(Makul::find()->All(), 'kd_makul', 'nm_makul'),
    ['prompt' => '--Pilih Mata Kuliah--'])?>

    <?=$form->field($model, 'id_mhs')->dropDownList(ArrayHelper::map(Mahasiswa::find()->All(), 'id_mhs', 'nm_mhs'),
    ['prompt' => '--Pilih Mahasiswa--'])?>


     <?= $form->field($model, 'waktu')->widget(TimePicker::classname()); ?>
     <?= $form->field($model, 'tgl')->widget(DatePicker::classname(),
                [
                    'pluginOptions' => [
                    'format' => 'yyyy-mm-dd', 
                ]
            ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
