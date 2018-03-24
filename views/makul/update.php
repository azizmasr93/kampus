<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Makul */

$this->title = 'Update Makul: ' . $model->kd_makul;
$this->params['breadcrumbs'][] = ['label' => 'Makuls', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_makul, 'url' => ['view', 'id' => $model->kd_makul]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="makul-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
