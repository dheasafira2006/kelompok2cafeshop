<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\mengolah $model */

$this->title = $model->no_mengolah;
$this->params['breadcrumbs'][] = ['label' => 'Mengolahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="mengolah-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_mengolah' => $model->no_mengolah], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_mengolah' => $model->no_mengolah], [
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
            'no_mengolah',
            'jumlah',
            'satuan',
            'id_bahanbaku',
            'id_menu',
            'id_karyawan',
        ],
    ]) ?>

</div>
