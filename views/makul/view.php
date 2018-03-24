<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Makul */

$this->title = $model->kd_makul;
$this->params['breadcrumbs'][] = ['label' => 'Makuls', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="makul-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->kd_makul], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->kd_makul], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'kd_makul',
            'nm_makul',
            'dosen.nm_dosen',
        ],
    ]) ?>

</div>
