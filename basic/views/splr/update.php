<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\splr $model */

$this->title = 'Update Splr: ' . $model->id_supplier;
$this->params['breadcrumbs'][] = ['label' => 'Splrs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_supplier, 'url' => ['view', 'id_supplier' => $model->id_supplier]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="splr-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
