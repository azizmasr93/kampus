<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\JadwalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jadwals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jadwal-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Jadwal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id_jadwal',
            [
                'attribute'=>'id_hari',
                'value'=>'hari.hari',
            ],

            'waktu',
            //'id_ruang',
             [
                'attribute'=>'id_ruang',
                'value'=>'ruang.nama_ruang',
            ],

            //'kd_makul',
            [
                'attribute'=>'kd_makul',
                'value'=>'makul.nm_makul',
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
