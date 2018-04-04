<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PresensiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Presensis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="presensi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Presensi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_presensi',
             [
                'attribute'=>'kd_makul',
                'value'=>'makul.nm_makul',
            ],
            [
                'attribute'=>'id_mhs',
                'value'=>'mahasiswa.nm_mhs',
            ],
            'tgl',
            'waktu',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
