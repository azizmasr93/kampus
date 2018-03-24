<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mahasiswamatakuliah */

$this->title = 'Update Mahasiswamatakuliah: ' . $model->id_mhsmakul;
$this->params['breadcrumbs'][] = ['label' => 'Mahasiswamatakuliahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_mhsmakul, 'url' => ['view', 'id' => $model->id_mhsmakul]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mahasiswamatakuliah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
