<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\bahanbaku $model */

$this->title = 'Update Bahanbaku: ' . $model->id_bahanbaku;
$this->params['breadcrumbs'][] = ['label' => 'Bahanbakus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_bahanbaku, 'url' => ['view', 'id_bahanbaku' => $model->id_bahanbaku]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bahanbaku-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
