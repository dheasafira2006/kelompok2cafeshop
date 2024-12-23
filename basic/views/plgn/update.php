<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\plgn $model */

$this->title = 'Update Plgn: ' . $model->id_pelanggan;
$this->params['breadcrumbs'][] = ['label' => 'Plgns', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pelanggan, 'url' => ['view', 'id_pelanggan' => $model->id_pelanggan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="plgn-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
