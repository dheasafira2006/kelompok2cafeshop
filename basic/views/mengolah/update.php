<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\mengolah $model */

$this->title = 'Update Mengolah: ' . $model->no_mengolah;
$this->params['breadcrumbs'][] = ['label' => 'Mengolahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_mengolah, 'url' => ['view', 'no_mengolah' => $model->no_mengolah]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mengolah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
