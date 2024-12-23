<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\antrian $model */

$this->title = 'Update Antrian: ' . $model->id_antrian;
$this->params['breadcrumbs'][] = ['label' => 'Antrians', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_antrian, 'url' => ['view', 'id_antrian' => $model->id_antrian]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="antrian-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
