<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\kry $model */

$this->title = 'Update Kry: ' . $model->id_karyawan;
$this->params['breadcrumbs'][] = ['label' => 'Kries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_karyawan, 'url' => ['view', 'id_karyawan' => $model->id_karyawan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kry-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
