<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\bahanbaku $model */

$this->title = $model->id_bahanbaku;
$this->params['breadcrumbs'][] = ['label' => 'Bahanbakus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="bahanbaku-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_bahanbaku' => $model->id_bahanbaku], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_bahanbaku' => $model->id_bahanbaku], [
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
            'id_bahanbaku',
            'nama_bahan',
            'satuan',
            'harga_satuan',
            'id_supplier',
            'id_karyawan',
        ],
    ]) ?>

</div>
