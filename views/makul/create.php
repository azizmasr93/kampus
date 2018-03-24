<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Makul */

$this->title = 'Create Makul';
$this->params['breadcrumbs'][] = ['label' => 'Makuls', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="makul-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
